<?php
// received_for_motivational.php (updated)
// Reads AI-generated queries from session, searches YouTube (via API when available),
// checks DB & existence robustly, inserts the first new valid video, and redirects back to motivational_video.php.

session_start();

// require login - adjust if your auth differs
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../components/login/index.php");
    exit();
}

// DB config - adjust path if needed
$configPath = __DIR__ . '/../../../components/login/config.php';
if (!file_exists($configPath)) {
    echo "<h2>Database config not found</h2><p>Expected at: <code>{$configPath}</code></p><p><a href='motivational_video.php'>&larr; Back</a></p>";
    exit();
}
include $configPath; // expects $conn (mysqli)

// Optional: YouTube Data API key (set to '' to disable API searches)
$youtubeApiKey = ''; // <-- put your YouTube Data API v3 key here (recommended)

// AI-generated queries from session
$queries = $_SESSION['ai_queries'] ?? [];
$rawAi = $_SESSION['ai_raw_response'] ?? '';
$seed_index = $_SESSION['ai_seed_index'] ?? 0;

// local candidate list (fallback when YT API not available)
$candidates = [
    ['title'=>'The Power of Yet - Growth Mindset for Students','video_id'=>'hiiEeMN7vbQ','description'=>'Learn about the growth mindset and how adding "yet" to your vocabulary can transform your learning experience.'],
    ['title'=>'Why Engineering Students Should Never Give Up','video_id'=>'KxGRhd_iWuE','description'=>'Inspiring stories of engineers who overcame failures and challenges to achieve success.'],
    ['title'=>'Study Smart, Not Hard - Engineering Study Tips','video_id'=>'IlU-zDU6aQ0','description'=>'Effective study strategies and time management techniques specifically for engineering students.'],
    ['title'=>'The Engineering Mindset - Problem Solving Skills','video_id'=>'bitqgxENx8c','description'=>'Develop critical thinking and problem-solving skills that every engineer needs.'],
    ['title'=>'From Failure to Success - Engineering Journey','video_id'=>'RUzquEya6Lc','description'=>'Real stories of engineering students who turned their failures into stepping stones for success.'],
    ['title'=>'Time Management for Engineering Students','video_id'=>'WPYOG93abDg','description'=>'Master the art of balancing academics, projects, and personal life as an engineering student.'],
    ['title'=>'Innovation in Engineering - Think Different','video_id'=>'PVJzv0phJyc','description'=>'How to develop innovative thinking and creative problem-solving in engineering.'],
    ['title'=>'Building Confidence in Engineering','video_id'=>'H14bBuluwB8','description'=>'Overcome imposter syndrome and build confidence in your engineering abilities.'],
    ['title'=>'The Future of Engineering - Career Motivation','video_id'=>'nOwWB5OYcUE','description'=>'Explore exciting career opportunities and future trends in engineering fields.'],
    ['title'=>'Engineering Ethics and Social Responsibility','video_id'=>'kVk9a5Jcd1k','description'=>'Understanding the role of engineers in society and ethical decision-making.']
];

// ---------- Helpers ----------
function extractYouTubeId($input) {
    if (!$input) return false;
    if (preg_match('/(?:youtube\.com\/watch\?v=|youtube\.com\/.*?\/|youtube\.com\/embed\/|youtu\.be\/)([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/[?&]v=([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/\/embed\/([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $input)) return $input;
    return false;
}

/**
 * Robust existence check:
 * 1) Try oEmbed (fast)
 * 2) If oEmbed fails, fetch the YouTube watch page and look for "unavailable"/"private" markers
 *    (useful where oEmbed is blocked or restricted).
 */
function youtubeExists($id) {
    if (!$id) return false;

    // try oEmbed first
    $oembed = 'https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=' . urlencode($id) . '&format=json';
    if (function_exists('curl_version')) {
        $ch = curl_init($oembed);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 6);
        curl_exec($ch);
        $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($http === 200) return true;
    } else {
        $ctx = stream_context_create(['http' => ['timeout' => 6]]);
        $res = @file_get_contents($oembed, false, $ctx);
        if ($res !== false) return true;
    }

    // fallback: fetch the watch page HTML and inspect it (slower, but helpful)
    $watchUrl = 'https://www.youtube.com/watch?v=' . urlencode($id);
    if (function_exists('curl_version')) {
        $ch = curl_init($watchUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 8);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        // pretend to be a normal browser
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64)');
        $body = curl_exec($ch);
        $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($http !== 200 || $body === false) return false;
    } else {
        $ctx = stream_context_create(['http' => ['timeout' => 8, 'header' => "User-Agent: Mozilla/5.0\r\n"]]);
        $body = @file_get_contents($watchUrl, false, $ctx);
        if ($body === false) return false;
    }

    $bodyLower = mb_strtolower($body);
    $negativeMarkers = [
        'video unavailable',
        'this video is private',
        'watch this video on youtube',
        'sign in to confirm your age',
        'content has been removed',
        'unavailable on this platform'
    ];
    foreach ($negativeMarkers as $m) {
        if (mb_strpos($bodyLower, $m) !== false) return false;
    }

    // heuristics: presence of "player" + "videoId" is promising
    if (mb_strpos($bodyLower, 'player') !== false && mb_strpos($bodyLower, $id) !== false) return true;

    return false;
}

// get normalized existing youtube ids from DB
function getExistingIds($conn) {
    $out = [];
    if (!($conn instanceof mysqli)) return $out;
    $res = $conn->query("SELECT youtube_link FROM motivational_videos");
    if ($res) {
        while ($r = $res->fetch_assoc()) {
            $nid = extractYouTubeId(trim($r['youtube_link']));
            if ($nid) $out[] = $nid;
        }
    }
    return $out;
}

// search YouTube by query using Data API (requires API key)
// returns array of video IDs (max $maxResults)
function youtubeSearchApi($query, $apiKey, $maxResults = 5) {
    $out = [];
    if (empty($apiKey) || empty($query)) return $out;
    $q = rawurlencode($query);
    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&type=video&maxResults={$maxResults}&q={$q}&key={$apiKey}";
    if (function_exists('curl_version')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 8);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $resp = curl_exec($ch);
        $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($http >= 200 && $http < 300 && $resp) {
            $j = json_decode($resp, true);
            if (isset($j['items']) && is_array($j['items'])) {
                foreach ($j['items'] as $it) {
                    $vid = $it['id']['videoId'] ?? null;
                    if ($vid) $out[] = $vid;
                }
            }
        }
    } else {
        $ctx = stream_context_create(['http' => ['timeout' => 8]]);
        $resp = @file_get_contents($url, false, $ctx);
        if ($resp) {
            $j = json_decode($resp, true);
            if (isset($j['items']) && is_array($j['items'])) {
                foreach ($j['items'] as $it) {
                    $vid = $it['id']['videoId'] ?? null;
                    if ($vid) $out[] = $vid;
                }
            }
        }
    }
    return $out;
}

// fallback: match query to local candidate indexes (returns array of candidate indexes ordered by score)
function matchQueryToCandidatesAll($query, $candidates) {
    $q = mb_strtolower($query);
    $words = preg_split('/\s+/', preg_replace('/[^\p{L}\p{N}\s\-]/u', ' ', $q));
    usort($words, function($a,$b){ return mb_strlen($b) - mb_strlen($a); });
    $scores = [];
    foreach ($candidates as $i => $cand) {
        $title = mb_strtolower($cand['title']);
        $score = 0;
        foreach ($words as $w) {
            $w = trim($w); if (mb_strlen($w) < 3) continue;
            if (mb_strpos($title, $w) !== false) $score += mb_strlen($w);
        }
        if (mb_strpos($title, $q) !== false) $score += 50;
        $scores[$i] = $score;
    }
    // sort indexes by score desc, only keep those with positive score
    arsort($scores);
    $result = [];
    foreach ($scores as $idx => $sc) {
        if ($sc > 0) $result[] = $idx;
    }
    return $result;
}

// ---------- Main processing ----------
$existingIds = getExistingIds($conn);
$insertedVideo = null;
$debugLog = [];

if (empty($queries)) {
    $debugLog[] = "No AI queries found in session.";
    $_SESSION['ai_debug'] = $debugLog;
    $_SESSION['ai_message'] = "AI produced no queries.";
    header("Location: motivational_video.php?ai_added=0");
    exit();
}

// iterate AI queries (in order) and for each try to fetch candidate video ids to test
foreach ($queries as $query) {
    $debugLog[] = "Trying query: " . $query;

    $candidateIdsToTry = [];

    // 1) If youtubeApiKey present, use live search results (preferred)
    if (!empty($youtubeApiKey)) {
        $debugLog[] = "Using YouTube Data API to search: " . $query;
        $apiResults = youtubeSearchApi($query, $youtubeApiKey, 6); // try top 6
        if (!empty($apiResults)) {
            $debugLog[] = "YouTube API returned: " . implode(',', $apiResults);
            $candidateIdsToTry = array_merge($candidateIdsToTry, $apiResults);
        } else {
            $debugLog[] = "YouTube API returned no results for query.";
        }
    }

    // 2) Always attempt mapping to local candidates (but not only the top match)
    $matchedIndexes = matchQueryToCandidatesAll($query, $candidates);
    if (!empty($matchedIndexes)) {
        $debugLog[] = "Local candidate indexes matched (in order): " . implode(',', $matchedIndexes);
        foreach ($matchedIndexes as $mi) {
            $cid = extractYouTubeId($candidates[$mi]['video_id']);
            if ($cid) $candidateIdsToTry[] = $cid;
        }
    } else {
        $debugLog[] = "No local candidate matched.";
    }

    // 3) Deduplicate candidate list while preserving order
    $candidateIdsToTry = array_values(array_unique($candidateIdsToTry));

    // 4) For each candidate ID, test DB & existence; insert first valid
    foreach ($candidateIdsToTry as $candidateId) {
        $debugLog[] = "Testing candidate id: $candidateId";

        if (!$candidateId) {
            $debugLog[] = "Invalid candidate id (skipping).";
            continue;
        }
        if (in_array($candidateId, $existingIds, true)) {
            $debugLog[] = "Candidate already in DB, skipping.";
            continue;
        }

        // existence check (robust)
        if (!youtubeExists($candidateId)) {
            $debugLog[] = "Candidate not usable (youtubeExists failed) - skipping.";
            continue;
        }

        // If we reach here, candidate is new and exists on YouTube. Insert it.
        // If you normalized DB to 11-char ids and added a unique index on youtube_link, ON DUPLICATE will help
        // Use prepared statement
        // For title/description when using YT API we don't have snippet here; so pick from local candidate if present or 'AI found' fallback
        $title = "AI discovered video";
        $desc = "";

        // try to get title/desc from local candidate list if present
        foreach ($candidates as $cand) {
            $cid = extractYouTubeId($cand['video_id']);
            if ($cid === $candidateId) { $title = $cand['title']; $desc = $cand['description']; break; }
        }

        // insert (ON DUPLICATE KEY UPDATE id = id) -- requires unique index on youtube_link for full safety
        $stmt = $conn->prepare("
            INSERT INTO motivational_videos (title, youtube_link, description)
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE id = id
        ");
        $stmt->bind_param('sss', $title, $candidateId, $desc);
        $ok = $stmt->execute();
        if ($ok) {
            $insertedId = $stmt->insert_id;
            $stmt->close();
            if (empty($insertedId)) {
                // duplicate likely; fetch actual row id
                $q2 = $conn->prepare("SELECT id FROM motivational_videos WHERE youtube_link = ? LIMIT 1");
                $q2->bind_param("s", $candidateId);
                $q2->execute();
                $q2->bind_result($foundId);
                $q2->fetch();
                $q2->close();
                $insertedId = $foundId ?: 0;
            }
            $insertedVideo = [
                'id' => $insertedId,
                'title' => $title,
                'youtube_id' => $candidateId,
                'description' => $desc
            ];
            $debugLog[] = "Inserted new video id: $insertedId (videoId: $candidateId)";
            // update existingIds to avoid inserting duplicates later in same run
            $existingIds[] = $candidateId;
            break 2; // break out of both loops (stop after first successful insert)
        } else {
            $debugLog[] = "DB insert failed: " . htmlspecialchars($stmt->error);
            $stmt->close();
            continue;
        }
    } // end foreach candidateIdsToTry

    // no candidate for this query; move to next AI query
    $debugLog[] = "No valid candidate found for query '{$query}', trying next query...";
} // end foreach queries

// store debug & messages so manage page can show them
$_SESSION['ai_debug'] = $debugLog;
if ($insertedVideo) {
    $_SESSION['ai_last_inserted'] = $insertedVideo;
    $_SESSION['ai_message'] = "Inserted video: " . $insertedVideo['title'];
    header("Location: motivational_video.php?ai_added=1");
    exit();
} else {
    $_SESSION['ai_message'] = "No new valid videos were found from AI-generated queries.";
    // redirect back to manage page; show debug page as fallback
    $manageUrl = 'motivational_video.php?ai_added=0';
    header("Location: $manageUrl");

    // fallback debug HTML so user isn't stuck if redirect doesn't take effect
    ?>
    <!doctype html>
    <html lang="en">
    <head><meta charset="utf-8"><title>AI receiver — debug</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;padding:20px} pre{background:#f8f8f8;padding:10px;border-radius:6px}</style>
    </head>
    <body>
      <h2>No new videos were added</h2>
      <p><strong>AI message:</strong> <?= htmlspecialchars($_SESSION['ai_message'] ?? '') ?></p>
      <p><strong>Raw AI response:</strong></p>
      <pre><?= htmlspecialchars($rawAi) ?></pre>
      <p><strong>AI queries tried:</strong></p>
      <pre><?= htmlspecialchars(implode("\n", (array)$queries)) ?></pre>
      <p><strong>Debug log:</strong></p>
      <pre><?= htmlspecialchars(implode("\n", $debugLog)) ?></pre>
      <p><a href="<?= htmlspecialchars($manageUrl) ?>">Return to manage page</a></p>
    </body></html>
    <?php
    exit();
}
