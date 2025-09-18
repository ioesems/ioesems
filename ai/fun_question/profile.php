<?php
session_start();
include '../../components/login/config.php';

// Handle flash message
$flashMessage = null;
if (isset($_SESSION['flash_message'])) {
    $flashMessage = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: ../components/login/index.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("
    SELECT subject, score, total_questions, percentage, created_at
    FROM scores
    WHERE user_id = ?
    ORDER BY created_at DESC
    LIMIT 20
");
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$scores = $result->fetch_all(MYSQLI_ASSOC);

$totalCorrect = 0;
$totalAttempted = 0;
$labels = [];
$data = [];

foreach ($scores as $row) {
    $totalCorrect += $row['score'];
    $totalAttempted += $row['total_questions'];
    $labels[] = date('M d', strtotime($row['created_at']));
    $data[] = (float)$row['percentage'];
}

$overallPercentage = $totalAttempted > 0 ? number_format(($totalCorrect / $totalAttempted) * 100, 2) : 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📊 Your Progress</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4ff;
            margin: 0;
            padding: 15px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
            position: relative;
        }

        h1 {
            color: #0077ff;
            text-align: center;
            margin: 0 0 30px 0;
            font-size: 2rem;
        }

        /* Flash Message */
        .flash-message {
            background: #d4edda;
            border-left: 6px solid #28a745;
            padding: 20px;
            margin: 0 0 30px 0;
            border-radius: 12px;
            text-align: center;
            font-weight: 500;
            color: #155724;
            font-size: 1.1rem;
            animation: fadeInUp 0.6s ease;
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.15);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .stat-box {
            display: flex;
            justify-content: space-around;
            margin: 30px 0;
            flex-wrap: wrap;
            gap: 20px;
        }

        .stat {
            background: #eef5ff;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            flex: 1;
            min-width: 160px;
            box-shadow: 0 4px 12px rgba(0,119,255,0.1);
            transition: transform 0.2s ease;
        }

        .stat:hover {
            transform: translateY(-5px);
        }

        .stat h2 {
            margin: 0;
            font-size: 2.2rem;
            color: #0077ff;
            font-weight: 700;
        }

        .stat p {
            margin: 8px 0 0 0;
            color: #555;
            font-weight: 600;
            font-size: 1rem;
        }

        canvas {
            margin: 30px 0;
            max-height: 320px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 40px 0 30px 0;
            font-size: 0.95rem;
        }

        th, td {
            padding: 14px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #0077ff;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        tr:hover {
            background: #f9fbff;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: #0077ff;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,119,255,0.3);
        }

        .back-btn:hover {
            background: #005fcc;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,119,255,0.4);
        }

        @media (max-width: 600px) {
            .stat {
                min-width: 100%;
                margin-bottom: 15px;
            }
            .stat h2 {
                font-size: 1.8rem;
            }
            h1 {
                font-size: 1.6rem;
            }
            .container {
                padding: 20px;
                margin: 15px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <h1>📈 Your Learning Progress</h1>

    <?php if ($flashMessage): ?>
        <div class="flash-message">
            <strong><?= $flashMessage['title'] ?></strong><br>
            <?= $flashMessage['message'] ?>
        </div>
    <?php endif; ?>

    <div class="stat-box">
        <div class="stat">
            <h2><?= $totalCorrect ?></h2>
            <p>Correct Answers</p>
        </div>
        <div class="stat">
            <h2><?= $totalAttempted ?></h2>
            <p>Total Questions</p>
        </div>
        <div class="stat">
            <h2><?= $overallPercentage ?>%</h2>
            <p>Overall Accuracy</p>
        </div>
    </div>

    <?php if (!empty($scores)): ?>
        <h2 style="text-align: center; margin: 30px 0 20px 0; color: #333;">Accuracy Over Time</h2>
        <canvas id="progressChart"></canvas>

        <h3 style="text-align: center; margin: 40px 0 20px 0; color: #333;">Recent Quiz Sessions</h3>
        <table>
            <thead>
                <tr>
                    <th>Date & Time</th>
                    <th>Subject</th>
                    <th>Score</th>
                    <th>Accuracy</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scores as $row): ?>
                <tr>
                    <td><?= date('M d, Y H:i', strtotime($row['created_at'])) ?></td>
                    <td><?= htmlspecialchars($row['subject']) ?></td>
                    <td><?= $row['score'] ?>/<?= $row['total_questions'] ?></td>
                    <td><?= $row['percentage'] ?>%</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align: center; color: #888; font-size: 1.2rem; margin: 60px 0; font-style: italic;">
            🎓 No quiz attempts yet. Go play some quizzes first!
        </p>
    <?php endif; ?>

    <div style="text-align: center;">
        <a href="index.php" class="back-btn">← Back to Quiz</a>
    </div>

</div>

<?php if (!empty($labels)): ?>
<script>
    const ctx = document.getElementById('progressChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?= json_encode(array_reverse($labels)) ?>,
            datasets: [{
                label: 'Accuracy %',
                data: <?= json_encode(array_reverse($data)) ?>,
                borderColor: '#0077ff',
                backgroundColor: 'rgba(0, 119, 255, 0.1)',
                borderWidth: 4,
                pointRadius: 6,
                pointBackgroundColor: '#0077ff',
                pointBorderColor: '#fff',
                pointHoverRadius: 8,
                fill: true,
                tension: 0.3,
                cubicInterpolationMode: 'monotone'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    enabled: true,
                    backgroundColor: '#0077ff',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    borderColor: '#fff',
                    borderWidth: 1
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    title: {
                        display: true,
                        text: 'Accuracy %',
                        color: '#555',
                        font: { size: 14 }
                    },
                    grid: { color: '#e0e7ff' }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Date',
                        color: '#555',
                        font: { size: 14 }
                    },
                    grid: { display: false }
                }
            }
        }
    });
</script>
<?php endif; ?>

</body>
</html>