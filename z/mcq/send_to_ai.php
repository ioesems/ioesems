<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$subject = $_SESSION['test_subject'] ?? 'General';
$chapter = $_SESSION['test_chapter'] ?? '';
$count = (int)($_SESSION['test_question_count'] ?? 20);
$test_type = $_SESSION['test_type'] ?? 'set';

// Build prompt based on test type
if ($test_type === 'set') {
    $prompt = "Generate EXACTLY {$count} multiple choice questions in STRICT JSON ARRAY format covering the FULL IOE Entrance Exam syllabus for B.E./B.Arch. Each question must be from Mathematics, Physics, Chemistry, or English as per official syllabus. Each object must have: 'question' (string), 'options' (array of exactly 4 strings), and 'correct_answer' (string: 'A', 'B', 'C', or 'D'). NO EXTRA TEXT.";
} else {
    $prompt = "Generate EXACTLY {$count} multiple choice questions in STRICT JSON ARRAY format on the topic of '{$chapter}' from the subject '{$subject}' as per IOE Entrance Exam syllabus. Each object must have: 'question' (string), 'options' (array of exactly 4 strings), and 'correct_answer' (string: 'A', 'B', 'C', or 'D'). NO EXTRA TEXT.";
}

$apiKey = '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';
$model = "llama-3.3-70b-versatile";

$data = [
    'messages' => [
        ['role' => 'user', 'content' => $prompt]
    ],
    'model' => $model
];

$jsonData = json_encode($data);

$ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    die('cURL Error: ' . curl_error($ch));
}
curl_close($ch);

if (!$response) {
    die('No response from AI.');
}

$responseData = json_decode($response, true);
$aiRawResponse = $responseData['choices'][0]['message']['content'] ?? '';

// Clean and extract JSON
$start = strpos($aiRawResponse, '[');
$end = strrpos($aiRawResponse, ']');
if ($start === false || $end === false) {
    $fixed = preg_replace('/^.*?(\[.*\]).*$/s', '$1', $aiRawResponse);
    if (!preg_match('/^\[.*\]$/s', $fixed)) {
        die("AI response format error.");
    }
    $jsonString = $fixed;
} else {
    $jsonString = substr($aiRawResponse, $start, $end - $start + 1);
}

$questions = json_decode($jsonString, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    die("JSON error: " . json_last_error_msg());
}

$validated = [];
foreach ($questions as $q) {
    if (!isset($q['question'], $q['options'], $q['correct_answer'])) continue;
    if (!is_array($q['options']) || count($q['options']) !== 4) continue;
    if (!in_array($q['correct_answer'], ['A','B','C','D'])) continue;

    $validated[] = [
        'question' => trim($q['question']),
        'options' => array_values($q['options']),
        'correct_answer' => $q['correct_answer']
    ];

    if (count($validated) >= $count) break;
}

// Pad if needed
while (count($validated) < $count && !empty($validated)) {
    $clone = $validated[array_rand($validated)];
    $validated[] = [
        'question' => $clone['question'] . " (Variant " . (count($validated)+1) . ")",
        'options' => $clone['options'],
        'correct_answer' => $clone['correct_answer']
    ];
}

$_SESSION['mcq_questions'] = array_slice($validated, 0, $count);

header("Location: user_interface.php");
exit();
?>