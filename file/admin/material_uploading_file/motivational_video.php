<?php
// motivational_video.php
session_start();

// -------------------- AJAX: find_video (must run BEFORE any HTML output) --------------------
if (isset($_GET['action']) && $_GET['action'] === 'find_video') {
    // candidate list (same as other files)
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

    // local helpers
    function extractId_local($s) {
        if (!$s) return false;
        if (preg_match('/(?:v=|vi=|\/v\/|\/vi\/|youtu\.be\/|\/embed\/|youtube\.com\/watch\?v=)([a-zA-Z0-9_-]{11})/i', $s, $m)) return $m[1];
        if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $s)) return $s;
        return false;
    }
    function youtubeExists_local($id) {
        if (!$id) return false;
        $oembed = 'https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=' . urlencode($id) . '&format=json';
        if (function_exists('curl_version')) {
            $ch = curl_init($oembed);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_exec($ch);
            $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            return ($http === 200);
        } else {
            $ctx = stream_context_create(['http' => ['timeout' => 5]]);
            $res = @file_get_contents($oembed, false, $ctx);
            return ($res !== false);
        }
    }

    // try to read DB normalized ids
    $existingIds = [];
    $cfg = __DIR__ . '/../../../components/login/config.php';
    if (file_exists($cfg)) {
        include_once $cfg;
        if (isset($conn) && $conn instanceof mysqli) {
            $q = $conn->query("SELECT youtube_link FROM motivational_videos");
            if ($q) {
                while ($r = $q->fetch_assoc()) {
                    $nid = extractId_local(trim($r['youtube_link']));
                    if ($nid) $existingIds[] = $nid;
                }
            }
        }
    }

    shuffle($candidates);
    $found = null;
    foreach ($candidates as $c) {
        $id = extractId_local($c['video_id']);
        if (!$id) continue;
        if (in_array($id, $existingIds, true)) continue;       // DB check first
        if (!youtubeExists_local($id)) continue;               // then verify on YouTube
        $found = ['status'=>'success','video'=>['title'=>$c['title'],'video_id'=>$id,'description'=>$c['description']]];
        break;
    }

    // fallback: try again without DB check (useful when DB contains all candidates)
    if (!$found) {
        foreach ($candidates as $c) {
            $id = extractId_local($c['video_id']);
            if (!$id) continue;
            if (!youtubeExists_local($id)) continue;
            $found = ['status'=>'success','video'=>['title'=>$c['title'],'video_id'=>$id,'description'=>$c['description']]];
            break;
        }
    }

    header('Content-Type: application/json; charset=utf-8');
    if ($found) echo json_encode($found);
    else echo json_encode(['status'=>'error','message'=>'No new valid videos found.']);
    exit();
}

// -------------------- normal page flow --------------------
include '../../../components/login/config.php';
include '../../../components/head-foot/header.php';

// -------------------- helpers --------------------
function extractYouTubeId($input) {
    if (!$input) return false;
    if (preg_match('/(?:youtube\.com\/watch\?v=|youtube\.com\/.*?\/|youtube\.com\/embed\/|youtu\.be\/)([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/[?&]v=([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/\/embed\/([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]{11})/i', $input, $m)) return $m[1];
    if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $input)) return $input;
    return false;
}
function youtubeVideoExists($videoId) {
    if (!$videoId) return false;
    $oembed = 'https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=' . urlencode($videoId) . '&format=json';
    if (function_exists('curl_version')) {
        $ch = curl_init($oembed);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_exec($ch);
        $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return ($http === 200);
    } else {
        $ctx = stream_context_create(['http' => ['timeout' => 5]]);
        $res = @file_get_contents($oembed, false, $ctx);
        return ($res !== false);
    }
}
function getNormalizedExistingIdsFromDB($conn) {
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

// -------------------- optional run-once normalization (uncomment to run) --------------------
// WARNING: backup DB before running. Uncomment the block below and load page once, then comment back.
/*
if (isset($_GET['run_normalize']) && $_GET['run_normalize']=='1') {
    $res = $conn->query("SELECT id,youtube_link FROM motivational_videos");
    while ($r = $res->fetch_assoc()) {
        $nid = extractYouTubeId(trim($r['youtube_link']));
        if ($nid && $nid !== trim($r['youtube_link'])) {
            $stmt = $conn->prepare("UPDATE motivational_videos SET youtube_link = ? WHERE id = ?");
            $stmt->bind_param("si", $nid, $r['id']);
            $stmt->execute();
            $stmt->close();
            echo "Updated id {$r['id']} -> {$nid}<br>";
        }
    }
    echo "Normalization complete. Remove run_normalize param or comment out this block.";
    exit();
}
*/

// -------------------- handle form actions (add_found, add_manual, edit, delete) --------------------
$action_message = "";

// Add video that was found by AJAX (hidden fields set by JS)
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_found_video'])) {
    $title = trim($_POST['found_title'] ?? '');
    $video_id = trim($_POST['found_video_id'] ?? '');
    $description = trim($_POST['found_description'] ?? '');

    $videoId = extractYouTubeId($video_id);
    if ($videoId === false) {
        $action_message = "<div class='alert alert-warning'>Invalid video ID.</div>";
    } else {
        $existingIds = getNormalizedExistingIdsFromDB($conn);
        if (in_array($videoId, $existingIds, true)) {
            $action_message = "<div class='alert alert-info'>This video already exists in the database.</div>";
        } else {
            if (!youtubeVideoExists($videoId)) {
                $action_message = "<div class='alert alert-danger'>YouTube does not confirm this video exists. Not saved.</div>";
            } else {
                $stmt = $conn->prepare("
                    INSERT INTO motivational_videos (title, youtube_link, description)
                    VALUES (?, ?, ?)
                    ON DUPLICATE KEY UPDATE id = id
                ");
                $stmt->bind_param("sss", $title, $videoId, $description);
                if ($stmt->execute()) $action_message = "<div class='alert alert-success'>Video from search added successfully!</div>";
                else $action_message = "<div class='alert alert-danger'>Error: " . htmlspecialchars($stmt->error) . "</div>";
                $stmt->close();
            }
        }
    }
}

// Manual add
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_manual_video'])) {
    $title = trim($_POST['title'] ?? '');
    $link = trim($_POST['youtube_link'] ?? '');
    $description = trim($_POST['description'] ?? '');

    $videoId = extractYouTubeId($link);
    if ($videoId === false) $videoId = $link;

    $existingIds = getNormalizedExistingIdsFromDB($conn);
    if (in_array($videoId, $existingIds, true)) {
        $action_message = "<div class='alert alert-info'>This video already exists in the database.</div>";
    } else {
        if (!youtubeVideoExists($videoId)) {
            $action_message = "<div class='alert alert-warning'>Warning: YouTube does not confirm this video exists. Still attempting to save.</div>";
        }
        $stmt = $conn->prepare("
            INSERT INTO motivational_videos (title, youtube_link, description)
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE id = id
        ");
        $stmt->bind_param("sss", $title, $videoId, $description);
        if ($stmt->execute()) $action_message .= "<div class='alert alert-success'>Video added successfully!</div>";
        else $action_message .= "<div class='alert alert-danger'>Error: " . htmlspecialchars($stmt->error) . "</div>";
        $stmt->close();
    }
}

// Edit
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['edit_video'])) {
    $id = intval($_POST['edit_id'] ?? 0);
    $title = trim($_POST['edit_title'] ?? '');
    $link = trim($_POST['edit_youtube_link'] ?? '');
    $description = trim($_POST['edit_description'] ?? '');

    $videoId = extractYouTubeId($link);
    if ($videoId === false) $videoId = $link;

    // check duplicates (except self)
    $dup = false;
    $stmt = $conn->prepare("SELECT id, youtube_link FROM motivational_videos WHERE id != ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($otherId, $otherLink);
    while ($stmt->fetch()) {
        $otherN = extractYouTubeId(trim($otherLink));
        if ($otherN && $otherN === $videoId) { $dup = true; break; }
    }
    $stmt->close();

    if ($dup) $action_message = "<div class='alert alert-warning'>Another video with the same YouTube ID already exists.</div>";
    else {
        if (!youtubeVideoExists($videoId)) {
            $action_message = "<div class='alert alert-warning'>YouTube did not confirm the video exists. Updating record anyway.</div>";
        }
        $upd = $conn->prepare("UPDATE motivational_videos SET title = ?, youtube_link = ?, description = ? WHERE id = ?");
        $upd->bind_param("sssi", $title, $videoId, $description, $id);
        if ($upd->execute()) $action_message .= "<div class='alert alert-success'>Video updated successfully!</div>";
        else $action_message .= "<div class='alert alert-danger'>Error updating: " . htmlspecialchars($upd->error) . "</div>";
        $upd->close();
    }
}

// Delete
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['delete_video'])) {
    $id = intval($_POST['delete_id'] ?? 0);
    if ($id > 0) {
        $del = $conn->prepare("DELETE FROM motivational_videos WHERE id = ?");
        $del->bind_param("i", $id);
        if ($del->execute()) $action_message = "<div class='alert alert-success'>Video deleted successfully.</div>";
        else $action_message = "<div class='alert alert-danger'>Error deleting video: " . htmlspecialchars($del->error) . "</div>";
        $del->close();
    } else {
        $action_message = "<div class='alert alert-warning'>Invalid video selected for deletion.</div>";
    }
}

// -------------------- fetch recent videos --------------------
$videos = [];
$res = $conn->query("SELECT * FROM motivational_videos ORDER BY id DESC LIMIT 50");
if ($res) while ($r = $res->fetch_assoc()) $videos[] = $r;

// -------------------- read AI session messages (if any) --------------------
$ai_message = $_SESSION['ai_message'] ?? null;
$ai_debug = $_SESSION['ai_debug'] ?? null;
$ai_last_inserted = $_SESSION['ai_last_inserted'] ?? null;
// clear session debug for next time (optional)
//unset($_SESSION['ai_message'], $_SESSION['ai_debug'], $_SESSION['ai_last_inserted']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Manage Motivational Videos</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { padding: 28px; font-family: 'Segoe UI', sans-serif; background: linear-gradient(to right,#667eea 0%, #764ba2 100%); min-height:100vh; }
        .container { max-width: 980px; background: rgba(255,255,255,0.98); padding:26px; border-radius:12px; box-shadow:0 8px 25px rgba(0,0,0,0.12) }
        .video-card { position: relative; background: rgba(255,255,255,0.96); border-radius:10px; padding:14px; margin-bottom:16px; box-shadow:0 4px 10px rgba(0,0,0,0.06) }
        .card-controls { position:absolute; right:10px; top:8px; z-index:5; display:flex; gap:6px; align-items:center; }
        .video-thumbnail { width:100%; max-width:200px; height:112px; border-radius:8px; object-fit:cover; }
        .found-video-display { background: rgba(255,255,255,0.93); padding:14px; border-radius:10px; margin:14px 0; display:none; border-left:5px solid #667eea; }
        .video-preview { width:100%; max-width:420px; height:236px; border-radius:8px; margin-bottom:10px; }
        .confirm-box { display:flex; gap:8px; align-items:center; background:#fff5f5; border:1px solid #f5c2c2; padding:8px; border-radius:8px; margin-left:8px; }
        .confirm-placeholder { min-height:38px; }
        .ai-debug { font-family: monospace; white-space: pre-wrap; background:#f8f9fa; padding:10px; border-radius:6px; border:1px solid #e9ecef; margin-top:10px; }
    </style>
</head>
<body>
<div class="container">
    <h3 class="text-center mb-3"><i class="fas fa-video"></i> Manage Motivational Videos</h3>

    <!-- show action messages -->
    <?= $action_message ?>

    <!-- AI messages area -->
    <?php if ($ai_message): ?>
        <div class="mb-3">
            <div class="alert alert-info"><strong>AI:</strong> <?= htmlspecialchars($ai_message) ?></div>
            <?php if ($ai_last_inserted): ?>
                <div class="alert alert-success">AI added: <strong><?= htmlspecialchars($ai_last_inserted['title'] ?? '') ?></strong></div>
            <?php endif; ?>
            <?php if ($ai_debug): ?>
                <div class="ai-debug"><strong>AI debug:</strong><br><?= htmlspecialchars(implode("\n", (array)$ai_debug)) ?></div>
            <?php endif; ?>
        </div>
    <?php
        // clear AI messages so they don't reappear (optional)
        unset($_SESSION['ai_message'], $_SESSION['ai_debug'], $_SESSION['ai_last_inserted']);
    endif; ?>

    <!-- Finder and AI-trigger -->
    <div class="mb-3 p-3" style="background:linear-gradient(135deg,#ffecd2 0%,#fcb69f 100%); border-radius:10px;">
        <div class="d-flex gap-2 mb-2 justify-content-center">
            <button class="btn btn-primary" onclick="findVideo()"><i class="fas fa-search"></i> Find Motivational Video</button>

            <!-- button to send seed to AI (calls the file you created) -->
            <form method="GET" action="sent_to_ai_for_motivational_vidoe.php" style="display:inline;">
                <!-- optional seed_index param -->
                <input type="hidden" name="seed_index" value="0">
                <button type="submit" class="btn btn-outline-dark"><i class="fas fa-robot"></i> Ask AI for search queries</button>
            </form>
        </div>

        <div id="loadingSpinner" style="display:none; text-align:center; padding:8px;">
            <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>
            <div class="small mt-2">Searching for videos... thank you for your patience</div>
        </div>

        <div id="foundVideoDisplay" class="found-video-display">
            <div class="row">
                <div class="col-md-5">
                    <iframe id="videoPreview" class="video-preview" src="" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-7">
                    <div id="foundVideoTitle" style="font-weight:600; font-size:1.05rem"></div>
                    <div id="foundVideoDescription" class="small text-muted mb-3"></div>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="found_title" id="hiddenTitle">
                        <input type="hidden" name="found_video_id" id="hiddenVideoId">
                        <input type="hidden" name="found_description" id="hiddenDescription">
                        <button type="submit" name="add_found_video" class="btn btn-success"><i class="fas fa-plus"></i> Add to Database</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Manual Add -->
    <div class="mb-3">
        <h5 class="mb-2"><i class="fas fa-plus-circle"></i> Add Video Manually</h5>
        <form method="POST" class="row g-3 mb-2">
            <div class="col-md-6">
                <label class="form-label">Title</label>
                <input name="title" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">YouTube Link or Video ID</label>
                <input name="youtube_link" class="form-control" placeholder="https://youtube.com/watch?v=... or ID" required>
            </div>
            <div class="col-12">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="2"></textarea>
            </div>
            <div class="col-12">
                <button name="add_manual_video" class="btn btn-primary"><i class="fas fa-save"></i> Add Video</button>
            </div>
        </form>
    </div>

    <hr>

    <!-- Recent Videos -->
    <h5 class="mb-3"><i class="fas fa-list"></i> Recent Videos</h5>
    <div class="row">
        <?php foreach ($videos as $video):
            $safeTitle = htmlspecialchars($video['title']);
            $safeDesc = htmlspecialchars($video['description']);
            $rawLink = trim($video['youtube_link']);
            $nid = extractYouTubeId($rawLink) ?: $rawLink;
            $vlink = htmlspecialchars($nid);
            $vid = (int)$video['id'];
        ?>
        <div class="col-md-6 mb-3" id="card-col-<?= $vid ?>">
            <div class="video-card" id="card-<?= $vid ?>" data-video-id="<?= $vlink ?>">
                <div class="card-controls">
                    <button class="btn btn-sm btn-outline-secondary" onclick="openEditModal(<?= $vid ?>, <?= json_encode($safeTitle) ?>, <?= json_encode($rawLink) ?>, <?= json_encode($safeDesc) ?>)"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-sm btn-outline-danger" onclick="showDeleteConfirm(<?= $vid ?>, this)"><i class="fas fa-trash"></i></button>
                </div>

                <div class="row">
                    <div class="col-5">
                        <img src="https://img.youtube.com/vi/<?= $vlink ?>/mqdefault.jpg" class="video-thumbnail" alt="<?= $safeTitle ?>">
                    </div>
                    <div class="col-7">
                        <h6 style="font-weight:600;"><?= $safeTitle ?></h6>
                        <p class="small text-muted"><?= htmlspecialchars(substr($video['description'] ?? '',0,100)) ?>...</p>

                        <!-- Play in modal (no redirect) -->
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="openPlayerModal('<?= $vlink ?>', <?= json_encode($safeTitle) ?>)">
                            <i class="fas fa-play"></i> Watch
                        </button>

                        <div class="confirm-placeholder mt-2" id="confirm-placeholder-<?= $vid ?>"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body">
            <input type="hidden" name="edit_id" id="edit_id">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="edit_title" id="edit_title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">YouTube Link or Video ID</label>
                <input name="edit_youtube_link" id="edit_youtube_link" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="edit_description" id="edit_description" class="form-control" rows="3"></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="edit_video" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<!-- Player modal -->
<div class="modal fade" id="playerModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="playerTitle" class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="stopPlayer()"></button>
      </div>
      <div class="modal-body p-0">
        <div style="position:relative;padding-top:56.25%;">
          <iframe id="playerFrame" src="" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Hidden delete form -->
<form id="deleteForm" method="POST" style="display:none;">
    <input type="hidden" name="delete_id" id="delete_id">
    <input type="hidden" name="delete_video" value="1">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
let isLoading = false;
function findVideo() {
    if (isLoading) return;
    isLoading = true;
    document.getElementById('loadingSpinner').style.display = 'block';
    document.getElementById('foundVideoDisplay').style.display = 'none';

    const fetchUrl = window.location.href.split('?')[0] + '?action=find_video&' + Date.now();
    fetch(fetchUrl)
        .then(r => {
            if (!r.ok) throw new Error('HTTP ' + r.status);
            return r.json();
        })
        .then(data => {
            isLoading = false;
            document.getElementById('loadingSpinner').style.display = 'none';
            if (data.status === 'success' && data.video) {
                const returnedId = data.video.video_id;
                // defense: if returnedId already in DOM, try server once more
                if (document.querySelector('[data-video-id="'+returnedId+'"]')) {
                    setTimeout(() => { findVideo(); }, 300);
                    return;
                }

                document.getElementById('foundVideoTitle').innerText = data.video.title;
                document.getElementById('foundVideoDescription').innerText = data.video.description;
                document.getElementById('videoPreview').src = `https://www.youtube.com/embed/${data.video.video_id}`;
                document.getElementById('hiddenTitle').value = data.video.title;
                document.getElementById('hiddenVideoId').value = data.video.video_id;
                document.getElementById('hiddenDescription').value = data.video.description;
                document.getElementById('foundVideoDisplay').style.display = 'block';
                document.getElementById('foundVideoDisplay').scrollIntoView({behavior:'smooth'});
            } else {
                alert(data.message || 'No new valid videos found. Try again later.');
                console.error('find_video response:', data);
            }
        })
        .catch(err => {
            console.error('Fetch error:', err);
            alert('Error finding video: ' + err.message + '. Check server logs or network.');
            isLoading = false;
            document.getElementById('loadingSpinner').style.display = 'none';
        });
}

function openEditModal(id, title, youtube_link, description) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_title').value = title;
    document.getElementById('edit_youtube_link').value = youtube_link;
    document.getElementById('edit_description').value = description;
    var modal = new bootstrap.Modal(document.getElementById('editModal'));
    modal.show();
}

function showDeleteConfirm(id, btnElement) {
    const placeholder = document.getElementById('confirm-placeholder-' + id);
    if (!placeholder) return;
    if (placeholder.querySelector('.confirm-box')) return;

    const box = document.createElement('div');
    box.className = 'confirm-box';
    box.innerHTML = '<small>Delete this video?</small>';

    const yes = document.createElement('button');
    yes.type = 'button';
    yes.className = 'btn btn-sm btn-danger';
    yes.innerText = 'Yes';
    yes.onclick = function() {
        document.getElementById('delete_id').value = id;
        document.getElementById('deleteForm').submit();
    };

    const no = document.createElement('button');
    no.type = 'button';
    no.className = 'btn btn-sm btn-secondary';
    no.innerText = 'No';
    no.onclick = function() {
        if (box && box.parentNode) box.parentNode.removeChild(box);
    };

    box.appendChild(yes);
    box.appendChild(no);
    placeholder.appendChild(box);

    setTimeout(function() {
        if (box && box.parentNode) box.parentNode.removeChild(box);
    }, 8000);
}

function openPlayerModal(videoId, title) {
  const iframe = document.getElementById('playerFrame');
  const t = document.getElementById('playerTitle');
  iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
  t.innerText = title || '';
  var modal = new bootstrap.Modal(document.getElementById('playerModal'));
  modal.show();
  document.getElementById('playerModal').addEventListener('hidden.bs.modal', stopPlayer, { once: true });
}
function stopPlayer() {
  const iframe = document.getElementById('playerFrame');
  iframe.src = '';
}
</script>
</body>
</html>

<?php include '../../../components/head-foot/footer.php'; ?>
