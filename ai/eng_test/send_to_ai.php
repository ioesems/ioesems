<?php
require_once 'config.php';
require_once 'received_from_ai.php';

// Get user input
$title = $_POST['title'] ?? '';
$text = $_POST['text'] ?? '';
$user_id = $_SESSION['user_id'];

if (empty($text)) {
    echo json_encode(['error' => 'No text provided']);
    exit;
}

// Prepare AI prompt
$prompt = "Correct the following text for English proficiency. Provide corrections and statistics in EXACT format:
Basic Level Correction: [text]
Medium Level Correction: [text]
High Professional Correction: [text]
Overall Spelling Mistakes: [percentage]%
Overall Grammatical Mistakes: [percentage]%
Subject Verb Agreement: [percentage]%
Article Mistakes: [percentage]%
Other Mistakes: [percentage]%

Text: $text";

// API configuration
$apiKey = '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';  // Your provided Groq API key
$model = "llama-3.3-70b-versatile";


// Prepare API request
$data = [
    'messages' => [
        ['role' => 'user', 'content' => $prompt]
    ],
    'model' => $model
];

$ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

// Process response
if ($response === false) {
    echo json_encode(['error' => 'API request failed']);
    exit;
}

$responseData = json_decode($response, true);
if (isset($responseData['choices'][0]['message']['content'])) {
    $rawResponse = $responseData['choices'][0]['message']['content'];
    $parsed = parse_ai_response($rawResponse);
    
    // Save to database
    $stmt = $pdo->prepare("INSERT INTO test_results 
        (user_id, title, original_text, basic_correction, medium_correction, 
        high_professional_correction, spelling_percent, grammar_percent, 
        subject_verb_percent, article_percent, other_mistakes_percent)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->execute([
        $user_id,
        $title,
        $text,
        $parsed['basic_correction'],
        $parsed['medium_correction'],
        $parsed['high_professional_correction'],
        $parsed['spelling_percent'],
        $parsed['grammar_percent'],
        $parsed['subject_verb_percent'],
        $parsed['article_percent'],
        $parsed['other_mistakes_percent']
    ]);
    
    // Return formatted response
    echo json_encode([
        'success' => true,
        'response' => $parsed
    ]);
} else {
    echo json_encode(['error' => 'Invalid API response']);
}
?>