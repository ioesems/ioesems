<?php
$api_key = "sk-8SzfbpPy_21HfGQ6DrLp_NCrdJmJyWqzT54YcVs-t90";

// Get input from frontend
$input_value = isset($_POST['input_value']) ? $_POST['input_value'] : '';

if (empty($input_value)) {
    header("Location: frontend_langflow.php?error=" . urlencode("Input value is required"));
    exit();
}

// Prepare payload
$payload = [
    "output_type" => "chat",
    "input_type" => "chat",
    "input_value" => $input_value,
    "session_id" => "user_1"
];

$ch = curl_init('http://localhost:7860/api/v1/run/35ec2644-f15d-49ef-b353-668dfd3c0ead');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    "x-api-key: $api_key"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

// Execute request
$response = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
    header("Location: frontend_langflow.php?error=" . urlencode($err));
    exit();
}

// Decode JSON and extract the AI's message text
$response_data = json_decode($response, true);
$ai_message = '';

if (isset($response_data['outputs'][0]['outputs'][0]['results']['message']['text'])) {
    $ai_message = $response_data['outputs'][0]['outputs'][0]['results']['message']['text'];
} else {
    $ai_message = "No response from AI or unexpected API format.";
}

// Redirect back to frontend with only the AI message
header("Location: frontend_langflow.php?response=" . urlencode($ai_message));
