<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../login_register/login.php");
    exit();
}

include '../login_register/config.php';

// Set daily test parameters
$_SESSION['test_type'] = 'daily';
$_SESSION['test_subject'] = 'General Knowledge'; // or 'Daily Challenge'
$_SESSION['test_chapter'] = ''; // Daily challenge has no chapter
$_SESSION['test_question_count'] = 20;
$_SESSION['time_limit_minutes'] = 30;

// Get current admin setting
$stmt = $pdo->prepare("SELECT question_source FROM system_settings WHERE id = 1");
$stmt->execute();
$setting = $stmt->fetch();
$question_source = $setting ? $setting['question_source'] : 'ai_only';

// If local-only or hybrid, check if enough local questions exist
if ($question_source === 'local_only' || $question_source === 'ai_local') {
    $count = 20;
    $sql = "SELECT COUNT(*) as available FROM local_questions WHERE subject = 'General Knowledge' OR subject = 'Daily Challenge'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();
    $available = (int)$row['available'];

    // If local-only and not enough questions, show error
    if ($question_source === 'local_only' && $available < $count) {
        $_SESSION['error_message'] = "Sorry! 😔 Only {$available} local questions available for Daily Challenge, but {$count} are needed. Please ask admin to add more local questions or switch to AI mode.";
        header("Location: ../tests/daily_test.php");
        exit();
    }
}

// Route to appropriate handler
if ($question_source === 'local_only') {
    header("Location: ../question_fetching/local_question_fetch.php");
    exit();
} elseif ($question_source === 'ai_local') {
    header("Location: ../question_fetching/hybrid_question_fetching.php");
    exit();
} else { // ai_only
    // Fallback to original AI logic if admin selected AI-only
    $apiKey = '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';
    $model = "llama-3.3-70b-versatile";

    $prompt = "Generate EXACTLY 20 multiple choice questions in STRICT JSON ARRAY format on General Knowledge. Each object must have: 'question' (string), 'options' (array of exactly 4 strings), and 'correct_answer' (string: 'A', 'B', 'C', or 'D'). NO EXTRA TEXT.";

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
        $_SESSION['error_message'] = "Failed to connect to AI service: " . curl_error($ch);
        header("Location: ../tests/daily_test.php");
        exit();
    }
    curl_close($ch);

    if (!$response) {
        $_SESSION['error_message'] = "No response from AI service. Please try again later.";
        header("Location: ../tests/daily_test.php");
        exit();
    }

    $responseData = json_decode($response, true);
    if (!isset($responseData['choices'][0]['message']['content'])) {
        $_SESSION['error_message'] = "AI returned invalid response. Please try again.";
        header("Location: ../tests/daily_test.php");
        exit();
    }

    $aiRawResponse = $responseData['choices'][0]['message']['content'];

    // Clean and extract JSON
    $start = strpos($aiRawResponse, '[');
    $end = strrpos($aiRawResponse, ']');
    if ($start === false || $end === false) {
        $fixed = preg_replace('/^.*?(\[.*\]).*$/s', '$1', $aiRawResponse);
        if (!preg_match('/^\[.*\]$/s', $fixed)) {
            $_SESSION['error_message'] = "AI response format error. Please try again.";
            header("Location: ../tests/daily_test.php");
            exit();
        }
        $jsonString = $fixed;
    } else {
        $jsonString = substr($aiRawResponse, $start, $end - $start + 1);
    }

    $questions = json_decode($jsonString, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        $_SESSION['error_message'] = "JSON parsing error: " . json_last_error_msg();
        header("Location: ../tests/daily_test.php");
        exit();
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

        if (count($validated) >= 20) break;
    }

    // If AI returned less than 20, pad with variants
    while (count($validated) < 20 && !empty($validated)) {
        $clone = $validated[array_rand($validated)];
        $validated[] = [
            'question' => $clone['question'] . " (Variant " . (count($validated)+1) . ")",
            'options' => $clone['options'],
            'correct_answer' => $clone['correct_answer']
        ];
    }

    $_SESSION['daily_questions'] = array_slice($validated, 0, 20);
    unset($_SESSION['error_message']);

    header("Location: ../tests/daily_test.php");
    exit();
}
?>