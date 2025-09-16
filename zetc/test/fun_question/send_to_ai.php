<?php
// send_to_ai.php

function sendToGroqAI($messages, $model = "llama-3.3-70b-versatile") {
    $apiKey = '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'; // Your key

    $data = [
        'messages' => $messages,
        'model' => $model,
        'response_format' => ['type' => 'json_object'],
        'temperature' => 0.9,  // 🔥 Higher randomness for fun variation
        'max_tokens' => 500
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
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200 || !$response) {
        return ['error' => 'API request failed.'];
    }

    $decoded = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        return ['error' => 'Invalid JSON from AI.'];
    }

    return $decoded['choices'][0]['message']['content'] ?? 'No content returned.';
}