<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'config.php';

$subject = $_SESSION['test_subject'] ?? 'General';
$chapter = $_SESSION['test_chapter'] ?? '';
$count = (int)($_SESSION['test_question_count'] ?? 20);

$local_questions = [];
$ai_questions = [];

// ============ FETCH LOCAL QUESTIONS ============
$sql = "SELECT question_text, option_a, option_b, option_c, option_d, correct_answer 
        FROM local_questions 
        WHERE subject = :subject";
$params = ['subject' => $subject];

if (!empty($chapter)) {
    $sql .= " AND chapter = :chapter";
    $params['chapter'] = $chapter;
}

// Fetch up to half from local (or all if less than half available)
$half_count = max(1, floor($count / 2));
$sql .= " ORDER BY RAND() LIMIT :limit";
$params['limit'] = $half_count;

try {
    $stmt = $pdo->prepare($sql);
    foreach ($params as $key => $value) {
        if ($key === 'limit') {
            $stmt->bindValue($key, $value, PDO::PARAM_INT);
        } else {
            $stmt->bindValue($key, $value);
        }
    }
    $stmt->execute();
    $local_db_questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($local_db_questions as $q) {
        $local_questions[] = [
            'question' => $q['question_text'],
            'options' => [$q['option_a'], $q['option_b'], $q['option_c'], $q['option_d']],
            'correct_answer' => $q['correct_answer']
        ];
    }
} catch (Exception $e) {
    // Log error but continue with AI questions
    error_log("Local fetch error: " . $e->getMessage());
}

// ============ FETCH AI QUESTIONS ============
$ai_needed = $count - count($local_questions);
if ($ai_needed > 0) {
    $test_type = $_SESSION['test_type'] ?? 'set';
    
    if ($test_type === 'set') {
        $prompt = "Generate EXACTLY {$ai_needed} multiple choice questions in STRICT JSON ARRAY format covering the FULL IOE Entrance Exam syllabus for B.E./B.Arch. Each question must be from Mathematics, Physics, Chemistry, or English as per official syllabus. Each object must have: 'question' (string), 'options' (array of exactly 4 strings), and 'correct_answer' (string: 'A', 'B', 'C', or 'D'). NO EXTRA TEXT.";
    } else {
        $prompt = "Generate EXACTLY {$ai_needed} multiple choice questions in STRICT JSON ARRAY format on the topic of '{$chapter}' from the subject '{$subject}' as per IOE Entrance Exam syllabus. Each object must have: 'question' (string), 'options' (array of exactly 4 strings), and 'correct_answer' (string: 'A', 'B', 'C', or 'D'). NO EXTRA TEXT.";
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
            // If AI fails, pad with local variants
            while (count($local_questions) < $count && !empty($local_questions)) {
                $clone = $local_questions[array_rand($local_questions)];
                $local_questions[] = [
                    'question' => $clone['question'] . " (Variant " . (count($local_questions) + 1) . ")",
                    'options' => $clone['options'],
                    'correct_answer' => $clone['correct_answer']
                ];
            }
            $_SESSION['mcq_questions'] = array_slice($local_questions, 0, $count);
            header("Location: user_interface.php");
            exit();
        }
        $jsonString = $fixed;
    } else {
        $jsonString = substr($aiRawResponse, $start, $end - $start + 1);
    }

    $ai_array = json_decode($jsonString, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        // If JSON fails, pad with local variants
        while (count($local_questions) < $count && !empty($local_questions)) {
            $clone = $local_questions[array_rand($local_questions)];
            $local_questions[] = [
                'question' => $clone['question'] . " (Variant " . (count($local_questions) + 1) . ")",
                'options' => $clone['options'],
                'correct_answer' => $clone['correct_answer']
            ];
        }
        $_SESSION['mcq_questions'] = array_slice($local_questions, 0, $count);
        header("Location: user_interface.php");
        exit();
    }

    foreach ($ai_array as $q) {
        if (!isset($q['question'], $q['options'], $q['correct_answer'])) continue;
        if (!is_array($q['options']) || count($q['options']) !== 4) continue;
        if (!in_array($q['correct_answer'], ['A','B','C','D'])) continue;

        $ai_questions[] = [
            'question' => trim($q['question']),
            'options' => array_values($q['options']),
            'correct_answer' => $q['correct_answer']
        ];

        if (count($ai_questions) >= $ai_needed) break;
    }
}

// ============ COMBINE & FINALIZE ============
$final_questions = array_merge($local_questions, $ai_questions);

// If still not enough, pad with variants
while (count($final_questions) < $count && !empty($final_questions)) {
    $clone = $final_questions[array_rand($final_questions)];
    $final_questions[] = [
        'question' => $clone['question'] . " (Variant " . (count($final_questions) + 1) . ")",
        'options' => $clone['options'],
        'correct_answer' => $clone['correct_answer']
    ];
}

// Shuffle to mix local and AI questions
shuffle($final_questions);

$_SESSION['mcq_questions'] = array_slice($final_questions, 0, $count);

header("Location: user_interface.php");
exit();
?>