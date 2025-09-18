<?php
require_once 'config.php';

// Get user profile data
$stmt = $pdo->prepare("SELECT u.username, p.real_name, p.bio, p.profile_picture 
                      FROM users u
                      LEFT JOIN user_profiles p ON u.id = p.user_id
                      WHERE u.id = ?");
$stmt->execute([$_SESSION['user_id']]);
$userProfile = $stmt->fetch(PDO::FETCH_ASSOC);

// Get test history for ranking and chart
$stmt = $pdo->prepare("SELECT tr.*, 
                      (spelling_percent + grammar_percent + subject_verb_percent + article_percent + other_mistakes_percent) / 5 AS avg_mistake
                      FROM test_results tr
                      WHERE tr.user_id = ?
                      ORDER BY tr.created_at ASC");
$stmt->execute([$_SESSION['user_id']]);
$testHistory = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Calculate global rank
$stmt = $pdo->prepare("SELECT user_id, 
                      AVG((spelling_percent + grammar_percent + subject_verb_percent + article_percent + other_mistakes_percent) / 5) AS avg_mistake
                      FROM test_results
                      GROUP BY user_id
                      ORDER BY avg_mistake ASC");
$stmt->execute();
$allUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Find current user's rank
$userRank = 1;
foreach ($allUsers as $index => $user) {
    if ($user['user_id'] == $_SESSION['user_id']) {
        $userRank = $index + 1;
        break;
    }
}

// Prepare chart data
$chartLabels = [];
$chartData = [];
foreach ($testHistory as $test) {
    $score = 100 - (($test['spelling_percent'] + $test['grammar_percent'] + 
                     $test['subject_verb_percent'] + $test['article_percent'] + 
                     $test['other_mistakes_percent']) / 5);
    $chartLabels[] = date('M j', strtotime($test['created_at']));
    $chartData[] = $score;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - English Proficiency Test</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #4a6fa5;
            --secondary: #166088;
            --light: #f5f7fa;
            --dark: #2c3e50;
            --success: #2ecc71;
            --error: #e74c3c;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e7f2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        header {
            background: var(--primary);
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        main {
            display: flex;
            flex: 1;
            padding: 2rem;
            gap: 2rem;
        }
        
        .profile-card {
            flex: 1;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 2rem;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            margin-right: 2rem;
        }
        
        .profile-info h1 {
            color: var(--dark);
            margin-bottom: 0.5rem;
        }
        
        .profile-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-item {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
        }
        
        .stat-value {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary);
            margin: 0.5rem 0;
        }
        
        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .chart-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 2rem;
            height: 400px;
            margin-bottom: 2rem;
        }
        
        .test-history {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 2rem;
        }
        
        .test-history h2 {
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .test-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .test-table th, .test-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .test-table th {
            background: #f8f9fa;
            font-weight: 600;
        }
        
        .test-table tr:hover {
            background: #f8f9fa;
        }
        
        .test-score {
            font-weight: bold;
            color: var(--primary);
        }
        
        .bio {
            margin: 1.5rem 0;
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            .profile-stats {
                grid-template-columns: 1fr;
            }
            
            .main {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">English Proficiency Test</div>
        <div class="user-info">
            <div class="avatar"><?php echo substr($_SESSION['username'], 0, 1); ?></div>
            <span><?php echo $_SESSION['username']; ?></span>
            <a href="logout.php" style="color: white; text-decoration: none;">Logout</a>
        </div>
    </header>
    
    <main>
        <div class="profile-card">
            <div class="profile-header">
                <div class="profile-avatar">
                    <?php echo substr($userProfile['real_name'], 0, 1) ?: 'U'; ?>
                </div>
                <div class="profile-info">
                    <h1><?php echo htmlspecialchars($userProfile['real_name'] ?: $_SESSION['username']); ?></h1>
                    <p><?php echo htmlspecialchars($userProfile['bio'] ?: 'No bio available'); ?></p>
                </div>
            </div>
            
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-value"><?php echo count($testHistory); ?></div>
                    <div class="stat-label">Total Tests</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?php echo $userRank; ?></div>
                    <div class="stat-label">Global Rank</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">
                        <?php 
                        $totalScore = 0;
                        foreach ($testHistory as $test) {
                            $score = 100 - (($test['spelling_percent'] + $test['grammar_percent'] + 
                                            $test['subject_verb_percent'] + $test['article_percent'] + 
                                            $test['other_mistakes_percent']) / 5);
                            $totalScore += $score;
                        }
                        echo $testHistory ? round($totalScore / count($testHistory)) : 0; 
                        ?>
                        %
                    </div>
                    <div class="stat-label">Average Score</div>
                </div>
            </div>
            
            <div class="chart-container">
                <canvas id="improvement-chart"></canvas>
            </div>
            
            <div class="test-history">
                <h2>Test History</h2>
                <table class="test-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Score</th>
                            <th>Spelling</th>
                            <th>Grammar</th>
                            <th>Subject-Verb</th>
                            <th>Articles</th>
                            <th>Other</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($testHistory as $test): ?>
                            <?php 
                            $score = 100 - (($test['spelling_percent'] + $test['grammar_percent'] + 
                                            $test['subject_verb_percent'] + $test['article_percent'] + 
                                            $test['other_mistakes_percent']) / 5);
                            ?>
                            <tr>
                                <td><?php echo date('M j, Y', strtotime($test['created_at'])); ?></td>
                                <td><?php echo htmlspecialchars($test['title']); ?></td>
                                <td class="test-score"><?php echo round($score); ?>%</td>
                                <td><?php echo $test['spelling_percent']; ?>%</td>
                                <td><?php echo $test['grammar_percent']; ?>%</td>
                                <td><?php echo $test['subject_verb_percent']; ?>%</td>
                                <td><?php echo $test['article_percent']; ?>%</td>
                                <td><?php echo $test['other_mistakes_percent']; ?>%</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('improvement-chart').getContext('2d');
            
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($chartLabels); ?>,
                    datasets: [{
                        label: 'Improvement Score',
                        data: <?php echo json_encode($chartData); ?>,
                        borderColor: '#4a6fa5',
                        backgroundColor: 'rgba(74, 111, 165, 0.1)',
                        borderWidth: 2,
                        pointBackgroundColor: '#4a6fa5',
                        pointRadius: 5,
                        fill: true,
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>