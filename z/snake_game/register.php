<?php
require_once 'config.php';

$message = '';
if ($_POST) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $email = trim($_POST['email']);
    
    if (empty($username) || empty($password)) {
        $message = "Username and password are required!";
    } else {
        try {
            // Check if username exists
            $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
            $stmt->execute([$username]);
            
            if ($stmt->rowCount() > 0) {
                $message = "Username already exists!";
            } else {
                // Hash password and create user
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
                
                if ($stmt->execute([$username, $hashed_password, $email])) {
                    $message = "Registration successful! You can now login.";
                } else {
                    $message = "Registration failed. Please try again.";
                }
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
    <title>Snake Game - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="auth-form">
            <h2>Register for Snake Game</h2>
            <?php if ($message): ?>
                <div class="message"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Register</button>
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </form>
        </div>
    </div>
</body>
</html>