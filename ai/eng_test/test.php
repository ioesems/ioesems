<?php
$apiKey = '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';  // Your provided Groq API key
$model = "llama-3.3-70b-versatile";


$ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'messages' => [['role' => 'user', 'content' => 'Hello']],
    'model' => $model
]));

$response = curl_exec($ch);
echo "Response: " . $response;
?>