<?php
// === backend.php ===

// Replace with your own API key
$api_key = "sk-8SzfbpPy_21HfGQ6DrLp_NCrdJmJyWqzT54YcVs-t90";

// Get user input from frontend
$input_value = isset($_POST['input_value']) ? trim($_POST['input_value']) : '';

if (empty($input_value)) {
    header("Location: frontend.php?error=" . urlencode("Please enter a prompt."));
    exit();
}

// Prepare request payload
$payload = [
    "output_type" => "chat",
    "input_type"  => "chat",
    "input_value" => $input_value,
    "session_id"  => "user_1"
];

// Initialize cURL
$ch = curl_init("http://localhost:7860/api/v1/run/35ec2644-f15d-49ef-b353-668dfd3c0ead");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "x-api-key: $api_key"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

// Execute request
$response = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
    header("Location: frontend.php?error=" . urlencode("Request error: $err"));
    exit();
}

// Decode response and extract message
$response_data = json_decode($response, true);
$ai_message = '';

if (
    isset($response_data['outputs'][0]['outputs'][0]['results']['message']['text'])
) {
    $ai_message = $response_data['outputs'][0]['outputs'][0]['results']['message']['text'];
} else {
    $ai_message = "No response from API or unexpected format.";
}

// Redirect to frontend with the AI message
header("Location: frontend.php?response=" . urlencode($ai_message));
exit();
