<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get user stats
try {
    $stmt = $pdo->prepare("SELECT total_games_played, total_score, highest_score FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user_stats = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $user_stats = ['total_games_played' => 0, 'total_score' => 0, 'highest_score' => 0];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Snake Game</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Ensure canvas maintains aspect ratio on mobile */
        #game-canvas {
            display: block;
            margin: 0 auto;
            touch-action: none;
        }
    </style>
</head>
<body>
    <div class="game-container">
        <div class="game-header">
            <h1>Snake Game</h1>
            <div class="user-info">
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                <span>Highest Score: <span id="display-highest-score"><?php echo $user_stats['highest_score']; ?></span></span>
                <span>Total Games: <?php echo $user_stats['total_games_played']; ?></span>
            </div>
            <div class="game-stats">
                <span>Current Score: <span id="score">0</span></span>
                <span>Food Eaten: <span id="food-eaten">0</span></span>
            </div>
            <button id="start-btn" class="btn">Start Game</button>
            <button id="logout-btn" class="btn secondary">Logout</button>
        </div>
        
        <div class="game-board">
            <canvas id="game-canvas" width="600" height="400"></canvas>
        </div>
        
        <!-- Mobile Controls -->
        <div class="mobile-controls">
            <button class="up" data-direction="up">↑</button>
            <button class="down" data-direction="down">↓</button>
            <button class="left" data-direction="left">←</button>
            <button class="right" data-direction="right">→</button>
        </div>
        
        <div id="game-over" class="game-over hidden">
            <h2>Game Over!</h2>
            <p>Your Score: <span id="final-score">0</span></p>
            <p>Food Eaten: <span id="final-food">0</span></p>
            <button id="play-again-btn" class="btn">Play Again</button>
            <button id="leaderboard-btn" class="btn secondary">View Leaderboard</button>
        </div>
    </div>

    <script src="game.js"></script>
</body>
</html>