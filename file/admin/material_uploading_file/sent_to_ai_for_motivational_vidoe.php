<?php
// sent_to_ai_for_motivational_vidoe.php
// Sends seed keywords/titles to the AI to generate varied search queries.
// Stores the AI-generated queries into $_SESSION['ai_queries'] then redirects
// to received_for_motivational.php which will attempt to find & add a new video.

session_start();

// Require login (adjust as needed)
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../components/login/index.php");
    exit();
}

// ====== Configuration: set your API key & model here (move to config file in production) ======
$apiKey = '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'; // put in secured config in production
$model = "llama-3.3-70b-versatile";
$apiEndpoint = 'https://api.groq.com/openai/v1/chat/completions'; // from your example

// ====== Local candidate list (same as your motivational list) ======
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

// Optional: you can accept a 'seed_index' GET param to choose which seed to use
$seed_index = isset($_GET['seed_index']) ? intval($_GET['seed_index']) : 0;
if ($seed_index < 0 || $seed_index >= count($candidates)) $seed_index = 0;

// Compose the prompt: instruct the model to return a JSON array of search queries
$seedTitle = $candidates[$seed_index]['title'];
$prompt = <<<PROMPT
You are a search-query rewriter for YouTube. Given a seed video title for "motivational videos for engineering students", return **exactly** a JSON array of 6 concise search query strings (not objects), each intended to find related YouTube videos. Make each query phrased differently so they produce diverse results (e.g., vary words order, synonyms, and add context such as "talk", "lecture", "study tips", "time management", "student stories"). Do NOT include any extra commentary or text — output only valid JSON like:

["query one", "query two", "query three", ...]

Seed title:
"$seedTitle"
PROMPT;

// Build conversation payload (simple chat-style as your example)
$conversation = [
    ['role' => 'system', 'content' => 'You convert seed titles into multiple diverse YouTube search queries. Output only JSON array.'],
    ['role' => 'user', 'content' => $prompt]
];

$postData = [
    'model' => $model,
    'messages' => $conversation,
    // you can add temperature/other params if API supports it
];

// Send to Groq / OpenAI-style endpoint
$ch = curl_init($apiEndpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
curl_setopt($ch, CURLOPT_TIMEOUT, 20);

$response = curl_exec($ch);
$curlErr = curl_error($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$queries = [];
$rawAiText = '';

if ($response && $httpCode >= 200 && $httpCode < 300) {
    $responseData = json_decode($response, true);
    // Try to extract assistant message content robustly
    $rawAiText = $responseData['choices'][0]['message']['content'] ?? $responseData['choices'][0]['text'] ?? '';
    // Try to parse JSON from AI message
    $decoded = json_decode($rawAiText, true);
    if (is_array($decoded)) {
        $queries = array_values(array_filter(array_map('trim', $decoded)));
    } else {
        // fallback: split by lines and keep non-empty lines, remove bullets/numbers
        $lines = preg_split("/\r\n|\n|\r/", trim($rawAiText));
        foreach ($lines as $ln) {
            $ln = trim($ln);
            $ln = preg_replace('/^[\-\d\.\)\s]+/', '', $ln); // remove leading bullets/numbers
            if ($ln !== '') $queries[] = $ln;
        }
    }
}

// If curl failed or no queries parsed, create friendly fallback queries from seed
if (empty($queries)) {
    if ($curlErr) $queries[] = $seedTitle . ' motivational talk';
    $queries[] = $seedTitle;
    $queries[] = $seedTitle . ' study tips';
    $queries[] = 'engineering student motivation';
}

// Save queries + debug raw AI text to session for the receiver
$_SESSION['ai_queries'] = $queries;
$_SESSION['ai_raw_response'] = $rawAiText;
$_SESSION['ai_seed_index'] = $seed_index;
$_SESSION['ai_timestamp'] = time();

// Redirect to receiver which will attempt to find & insert a new video
header("Location: received_for_motivational.php");
exit();
