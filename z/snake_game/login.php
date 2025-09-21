<?php
require_once 'config.php';

$message = '';
if ($_POST) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $message = "Username and password are required!";
    } else {
        try {
            $stmt = $pdo->prepare("SELECT id, username, password, highest_score FROM users WHERE username = ?");
            $stmt->execute([$username]);
            
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['highest_score'] = $user['highest_score'];
                    
                    // Redirect to game
                    header("Location: game.php");
                    exit();
                } else {
                    $message = "Invalid password!";
                }
            } else {
                $message = "User not found!";
            }
        } catch (Exception $e) {
            $message = "Error: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="auth-form">
            <h2>Login to Snake Game</h2>
            <?php if ($message): ?>
                <div class="message error"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </form>
        </div>
    </div>
</body>
</html>