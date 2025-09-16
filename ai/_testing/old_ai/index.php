<?php
// Start the session
session_start();

// define('ROOT_PATH', '/std/'); // Assuming the 'std' folder is directly under 'htdocs'


// Check if the user is logged in
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    // Redirect to the login page if not logged in
    header("Location: ../components/login/index.php");
    exit();
}

// API key and model configuration
$apiKey = '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';  // Your provided Groq API key
$model = "llama-3.3-70b-versatile";  // Specify the model you want to use

// Initialize the conversation if not already set
if (!isset($_SESSION['conversation'])) {
    $_SESSION['conversation'] = [];  // Initialize the conversation history
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['user_input'] ?? '';

    if (!empty($userInput)) {
        // Store the user input in the conversation
        $_SESSION['conversation'][] = ['role' => 'user', 'content' => $userInput];

        // Prepare the data to send to the Groq API (including the entire conversation)
        $data = [
            'messages' => $_SESSION['conversation'],
            'model' => $model
        ];

        // Convert data to JSON
        $jsonData = json_encode($data);

        // Initialize the cURL session with the new endpoint
        $ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        // Execute the cURL session
        $response = curl_exec($ch);

        // Check for cURL errors
        if (curl_errno($ch)) {
            $error_message = 'cURL Error: ' . curl_error($ch);
            curl_close($ch);
            echo $error_message;
            exit;
        }

        // Close the cURL session
        curl_close($ch);

        // Check if we received a response
        if ($response) {
            $responseData = json_decode($response, true);
            $aiResponse = $responseData['choices'][0]['message']['content'] ?? 'No response from API.';
            
            // Store the AI response in the conversation
            $_SESSION['conversation'][] = ['role' => 'assistant', 'content' => $aiResponse];
        } else {
            $aiResponse = 'Error contacting Groq API.';
        }
    } else {
        $aiResponse = 'Please enter a question.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ioesems AI Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            height: 100vh;
            display: flex;
            flex-direction: column;
            font-size: 18px;
        }

        .chat-container {
            display: flex;
            flex-direction: column;
            height: 100vh; /* Full height */
            width: 100%; /* Full width */
        }

        /* Scrollable chat box */
        .chat-box {
            flex: 1; /* Occupies all vertical space except the input box */
            overflow-y: auto; /* Enable scrolling */
            padding: 15px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .message {
            margin-bottom: 15px;
            display: flex;
        }

        .message.user {
            justify-content: flex-end;
        }

        .message p {
            padding: 10px;
            border-radius: 10px;
            max-width: 75%;
            word-wrap: break-word;
        }

        .message.user p {
            background: #ff7e5f;
            color: white;
            border: 1px solid #feb47b;
        }

        .message.ai p {
            background: #f1f1f1;
            color: #333;
            border: 1px solid #ddd;
        }

        /* Input box */
        .input-box {
            display: flex;
            padding: 10px;
            background-color: #fff;
            border-top: 1px solid #ddd;
        }

        textarea {
            flex: 1; /* Full width minus the button */
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            border: 1px solid #ddd;
            resize: none;
        }

        button {
            background-color: #ff7e5f;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #feb47b;
        }

        @media (max-width: 768px) {
            textarea {
                font-size: 16px;
            }

            button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    
<!-- <?php include('../components//index.php'); ?> -->

    <div class="chat-container">
        <!-- Chat history (scrollable) -->
        <div class="chat-box" id="chat-box">
            <?php
            if (!empty($_SESSION['conversation'])) {
                foreach ($_SESSION['conversation'] as $message) {
                    $messageClass = ($message['role'] === 'user') ? 'user' : 'ai';
                    echo '<div class="message ' . $messageClass . '"><p>' . htmlspecialchars($message['content']) . '</p></div>';
                }
            }
            ?>
        </div>

        <!-- Input box -->
        <form class="input-box" id="chat-form" action="index.php" method="POST">
            <textarea name="user_input" rows="2" placeholder="Type your message..." required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>

    <script>
        // Auto-scroll to bottom
        function scrollToBottom() {
            const chatBox = document.getElementById('chat-box');
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        // Scroll to bottom when the page loads
        window.onload = function() {
            scrollToBottom();
            document.querySelector('textarea').focus(); // Focus on input
        };

        // Submit form on Enter keypress
        document.getElementById('chat-form').addEventListener('keydown', function(event) {
            if (event.key === 'Enter' && !event.shiftKey) {
                event.preventDefault();
                this.submit();
            }
        });
    </script>
</body>
</html>
