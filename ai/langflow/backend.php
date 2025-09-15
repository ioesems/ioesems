<?php
// backend.php

// Function to send a POST request to the Langflow API
function sendToLangflow($inputValue, $inputType = 'chat', $outputType = 'chat', $tweaks = [], $stream = false) {
    $url = 'https://api.langflow.astra.datastax.com/lf/5d2082cf-cc18-4020-937c-895a8b99960e/api/v1/run/d5db7ce6-8043-4ca7-8b5d-61137a448b48?stream=' . ($stream ? 'true' : 'false');
    $applicationToken = 'AstraCS:vxWiEOylZbgmZdukseKzLlZY:b834ae3c90d83f3f41bf9d74c35507acc28a64e58c77ad639bb3ccc133c05027'; // Replace with your actual application token

    // Prepare the data payload
    $data = [
        'input_value' => $inputValue, // Direct input_value (no need to pass it as a tweak)
        'input_type' => $inputType,
        'output_type' => $outputType,
        'tweaks' => $tweaks // Only pass tweaks for other parameters, not input_value
    ];

    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $applicationToken
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Execute cURL request and handle errors
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch);
        curl_close($ch);
        return null;
    }
    curl_close($ch);

    // Log the raw response
    echo '<pre>';
    print_r($response);
    echo '</pre>';

    // Check if the response is empty
    if (empty($response)) {
        echo 'Error: Empty response from Langflow API.';
        return null;
    }

    // Decode and return the response
    $decodedResponse = json_decode($response, true);

    // Check for JSON decoding errors
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo 'Error: Failed to decode JSON response. ' . json_last_error_msg();
        return null;
    }

    // Check for specific error codes
    if (isset($decodedResponse['error']) && $decodedResponse['error'] === '422') {
        echo 'Error: Unprocessable Entity (422). Please check your input data.';
        return null;
    }

    return $decodedResponse;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_input'])) {
    $userInput = $_POST['user_input'];

    // Define the tweaks, but don't include input_value here (as it's already in the payload)
    $tweaks = [
        // Add your other tweaks here
        "ChatInput-NrGZ1" => [],
        "Prompt-7wfZO" => [],
        "ChatOutput-l3uJF" => [],
        "GroqModel-nss5w" => [],
        "AstraDB-CzdVZ" => [],
        "ParseData-2VQdL" => [],
        "AstraDB-VxeBt" => [],
        "File-2AZOV" => [],
        "SplitText-pUadi" => [],
        "mem0_chat_memory-Rp8TZ" => [],
        "AstraDBChatMemory-opqG9" => []
    ];

    $response = sendToLangflow($userInput, 'chat', 'chat', $tweaks);

    // Check if the response contains the expected structure
    if ($response !== null && isset($response['outputs'][0]['outputs'][0]['message']['text'])) {
        $output = $response['outputs'][0]['outputs'][0]['message']['text'];
    } else {
        echo 'Error: Unexpected response format or no message returned.';
        $output = 'No response or error occurred.';
    }
} else {
    $output = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langflow API Interaction</title>
</head>
<body>
    <h1>Langflow API Chat</h1>
    <form method="POST" action="">
        <label for="user_input">Enter your message:</label>
        <input type="text" id="user_input" name="user_input" required>
        <button type="submit">Submit</button>
    </form>

    <?php if ($output): ?>
        <h2>Response:</h2>
        <p><?php echo htmlspecialchars($output); ?></p>
    <?php endif; ?>
</body>
</html>
