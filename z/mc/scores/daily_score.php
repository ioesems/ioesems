<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../login_register/login.php");
    exit();
}

$score = $_SESSION['daily_score'] ?? 0;
$total = $_SESSION['daily_total'] ?? 20;

unset($_SESSION['daily_score'], $_SESSION['daily_total']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Challenge Score</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .score-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
        }
        h1 { color: #333; }
        .score {
            font-size: 60px;
            font-weight: bold;
            color: #ff6b6b;
            margin: 20px 0;
        }
        .medal {
            font-size: 80px;
            margin: 20px 0;
        }
        .btn {
            display: inline-block;
            margin: 10px;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn:hover { background: #5a67d8; }
        .btn.secondary { background: #6c757d; }
        .btn.secondary:hover { background: #5a6268; }
    </style>
</head>
<body>
    <div class="score-container">
        <h1>🏆 Daily Challenge Completed!</h1>
        
        <?php if ($score >= 18): ?>
            <div class="medal">🥇</div>
        <?php elseif ($score >= 15): ?>
            <div class="medal">🥈</div>
        <?php elseif ($score >= 12): ?>
            <div class="medal">🥉</div>
        <?php endif; ?>

        <div class="score"><?php echo $score; ?>/<?php echo $total; ?></div>
        <div style="font-size: 18px; color: #666; margin-bottom: 30px;">
            <?php
            $percent = round(($score / $total) * 100);
            echo "You scored {$percent}%!";
            ?>
        </div>

        <a href="../tests/daily_test.php" class="btn secondary">View Daily Status</a>
        <a href="../user_files/profile.php" class="btn">Go to Profile</a>
    </div>
</body>
</html>