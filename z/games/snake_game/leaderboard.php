<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get top 10 players
try {
    $stmt = $pdo->query("SELECT username, highest_score, total_games_played, total_score FROM users ORDER BY highest_score DESC LIMIT 10");
    $top_players = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Get user's rank
    $stmt = $pdo->prepare("SELECT COUNT(*) + 1 as rank FROM users WHERE highest_score > (SELECT highest_score FROM users WHERE id = ?)");
    $stmt->execute([$_SESSION['user_id']]);
    $user_rank = $stmt->fetchColumn();
} catch (Exception $e) {
    $top_players = [];
    $user_rank = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game - Leaderboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="leaderboard-container">
            <h1>Global Leaderboard</h1>
            <div class="user-rank">
                Your Rank: #<?php echo $user_rank; ?>
            </div>
            
            <table class="leaderboard-table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Player</th>
                        <th>Highest Score</th>
                        <th>Total Games</th>
                        <th>Total Points</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($top_players as $index => $player): ?>
                    <tr class="<?php echo ($_SESSION['username'] === $player['username']) ? 'user-row' : ''; ?>">
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo htmlspecialchars($player['username']); ?></td>
                        <td><?php echo $player['highest_score']; ?></td>
                        <td><?php echo $player['total_games_played']; ?></td>
                        <td><?php echo $player['total_score']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <div class="actions">
                <a href="game.php" class="btn">Back to Game</a>
                <a href="logout.php" class="btn secondary">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>