<?php
session_start();
include '../../components/login/config.php';

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

$user_id = $_SESSION['user_id'] ?? '';
if (empty($user_id)) {
    exit;
}

$username = $_SESSION['name'] ?? 'Anonymous';
$subject = $_POST['subject'] ?? 'General';

// Get session score from POST — independent per session
$session_correct = (int)($_POST['session_correct'] ?? 0);
$session_total = (int)($_POST['session_total'] ?? 1);

if ($session_total <= 0) $session_total = 1;
$percentage = number_format(($session_correct / $session_total) * 100, 2);

// Save to DB
$stmt = $conn->prepare("
    INSERT INTO scores (user_id, username, subject, score, total_questions)
    VALUES (?, ?, ?, ?, ?)
");

$stmt->bind_param("sssii", $user_id, $username, $subject, $session_correct, $session_total);

if ($stmt->execute()) {
    if (isset($_POST['redirect']) && $_POST['redirect'] === 'profile') {
        // Set flash message with THIS SESSION's score
        $_SESSION['flash_message'] = [
            'type' => 'success',
            'title' => '🎉 Quiz Session Complete!',
            'message' => "You scored <strong>{$session_correct}/{$session_total}</strong> ({$percentage}%) in this session!"
        ];

        // Clear current session tracker
        unset($_SESSION['current_session']);

        // Clean buffer and redirect
        if (ob_get_level()) ob_clean();
        header("Location: profile.php");
        exit;
    }

    // Optional: Show standalone result page
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #fff;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 90%;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #fff;
        }
        .score-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            margin: 20px 0;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .percentage {
            font-size: 1.2rem;
            margin: 10px 0;
            color: #FFD700;
        }
        .buttons {
            margin-top: 30px;
        }
        .btn {
            background: #fff;
            color: #667eea;
            border: none;
            padding: 12px 30px;
            margin: 0 10px;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .btn.profile {
            background: #FFD700;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎯 Quiz Result</h1>
        <div class="score-box">
            <?php echo $session_correct; ?> / <?php echo $session_total; ?>
        </div>
        <div class="percentage">
            <?php echo $percentage; ?>% Correct
        </div>
        <div class="buttons">
            <a href="./profile.php" class="btn profile">Go to Profile</a>
            <button class="btn" onclick="history.back()">Back</button>
        </div>
    </div>
</body>
</html>
    <?php
} else {
    echo json_encode(['error' => 'Failed to save score']);
}

exit;