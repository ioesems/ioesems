<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../login_register/login.php");
    exit();
}

include '../database/config.php';

// Check if user is admin
$stmt = $pdo->prepare("SELECT is_admin FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
if (!$user || !$user['is_admin']) {
    die("Access denied. Admin only.");
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_settings'])) {
    $source = $_POST['question_source'] ?? 'ai_only';
    if (!in_array($source, ['ai_only', 'ai_local', 'local_only'])) {
        $source = 'ai_only';
    }

    $stmt = $pdo->prepare("UPDATE system_settings SET question_source = ? WHERE id = 1");
    $stmt->execute([$source]);
    $message = "Settings updated successfully!";
}

// Get current setting
$stmt = $pdo->prepare("SELECT question_source FROM system_settings WHERE id = 1");
$stmt->execute();
$setting = $stmt->fetch();
$current_source = $setting ? $setting['question_source'] : 'ai_only';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
        }
        h1 { text-align: center; color: #333; margin-bottom: 30px; }
        .form-group { margin: 30px 0; }
        label { 
            display: block;
            margin: 15px 0 5px 0;
            font-weight: bold;
            font-size: 18px;
        }
        .radio-group {
            display: flex;
            gap: 20px;
            margin: 10px 0;
        }
        .radio-option {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .submit-btn {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 15px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .submit-btn:hover { background: #0056b3; }
        .upload-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 15px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            text-align: center;
        }
        .upload-btn:hover { background: #218838; }
        .message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }
        .success { background: #d4edda; color: #155724; }
    </style>
</head>
<body>
    <div class="container">
        <h1>⚙️ Admin Panel</h1>

        <?php if ($message): ?>
            <div class="message success">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="admin.php">
            <div class="form-group">
                <label>Question Source for All Users:</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" name="question_source" value="ai_only" id="ai_only" <?php echo $current_source === 'ai_only' ? 'checked' : ''; ?>>
                        <label for="ai_only">AI Based Only</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" name="question_source" value="ai_local" id="ai_local" <?php echo $current_source === 'ai_local' ? 'checked' : ''; ?>>
                        <label for="ai_local">AI + Local Mix</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" name="question_source" value="local_only" id="local_only" <?php echo $current_source === 'local_only' ? 'checked' : ''; ?>>
                        <label for="local_only">Local Questions Only</label>
                    </div>
                </div>
            </div>

            <button type="submit" name="update_settings" class="submit-btn">Update Settings</button>
        </form>

        <a href="upload_question_with_answer.php" class="upload-btn">📤 Upload Question</a>
        <a href="user_interface.php" style="display: block; text-align: center; margin-top: 20px; text-decoration: none; color: #007bff;">
            ← Back to User Interface
        </a>
    </div>
</body>
</html>