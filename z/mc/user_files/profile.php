<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include '../database/config.php';
include '../contents_of_ioe_entrance/syllabus.php'; // keep if you need it

$user_id = $_SESSION['user_id'];
date_default_timezone_set('Asia/Kathmandu');

// ==================== OVERALL STATS ====================
$stmt = $pdo->prepare("SELECT COUNT(*) as total_tests, SUM(score) as total_score, SUM(total_questions) as total_questions FROM test_results WHERE user_id = ?");
$stmt->execute([$user_id]);
$stats = $stmt->fetch(PDO::FETCH_ASSOC);

$total_tests = (int)($stats['total_tests'] ?? 0);
$total_questions_attempted = (int)($stats['total_questions'] ?? 0);
$total_correct = (int)($stats['total_score'] ?? 0);
$accuracy = $total_questions_attempted > 0 ? round(($total_correct / $total_questions_attempted) * 100, 2) : 0;

// ==================== GLOBAL RANK ====================
$stmt = $pdo->prepare("
    SELECT COUNT(*) + 1 as rank FROM (
        SELECT user_id, SUM(score) as total_score
        FROM test_results
        GROUP BY user_id
        HAVING total_score > ?
    ) as higher_scores
");
$stmt->execute([$total_correct]);
$rankRow = $stmt->fetch(PDO::FETCH_ASSOC);
$rank = isset($rankRow['rank']) ? (int)$rankRow['rank'] : 1;

// ==================== CHART DATA (All Tests) ====================
$stmt = $pdo->prepare("SELECT score, total_questions, attempted_at FROM test_results WHERE user_id = ? ORDER BY attempted_at ASC");
$stmt->execute([$user_id]);
$testHistoryAll = $stmt->fetchAll(PDO::FETCH_ASSOC);

$chartLabelsAll = [];
$chartDataAll = [];
foreach ($testHistoryAll as $test) {
    $total_questions = (int)($test['total_questions'] ?? 1);
    $score = (int)($test['score'] ?? 0);
    $score_percent = $total_questions > 0 ? round(($score / $total_questions) * 100) : 0;
    $chartLabelsAll[] = date('M j', strtotime($test['attempted_at'] ?? 'now'));
    $chartDataAll[] = $score_percent;
}

// ==================== DAILY CHALLENGE STATS ====================
$stmt = $pdo->prepare("SELECT COUNT(*) as total_daily, AVG(score) as avg_daily_score FROM daily_test_logs WHERE user_id = ?");
$stmt->execute([$user_id]);
$dailyStats = $stmt->fetch(PDO::FETCH_ASSOC);
$streak = 0; // simplified, implement streak logic if needed

// ==================== SET-WISE & CHAPTER-WISE STATS ====================
$stmt = $pdo->prepare("SELECT COUNT(*) as set_tests, AVG(score) as avg_set_score FROM test_results WHERE user_id = ? AND test_type = 'set'");
$stmt->execute([$user_id]);
$setStats = $stmt->fetch(PDO::FETCH_ASSOC) ?: ['set_tests' => 0, 'avg_set_score' => 0];

$stmt = $pdo->prepare("SELECT COUNT(*) as chapter_tests, AVG(score) as avg_chapter_score FROM test_results WHERE user_id = ? AND test_type = 'chapter'");
$stmt->execute([$user_id]);
$chapterStats = $stmt->fetch(PDO::FETCH_ASSOC) ?: ['chapter_tests' => 0, 'avg_chapter_score' => 0];

$stmt = $pdo->prepare("
    SELECT chapter, AVG(score) as avg_score, COUNT(*) as attempts
    FROM test_results 
    WHERE user_id = ? AND test_type = 'chapter' AND chapter IS NOT NULL AND chapter != ''
    GROUP BY chapter 
    HAVING attempts >= 2
    ORDER BY avg_score DESC 
    LIMIT 3
");
$stmt->execute([$user_id]);
$topChapters = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ==================== SUBJECT STATS ====================
$stmt = $pdo->prepare("
    SELECT subject, 
           COUNT(*) as test_count, 
           SUM(score) as total_score, 
           SUM(total_questions) as total_questions,
           AVG((score * 100.0) / total_questions) as avg_percent
    FROM test_results 
    WHERE user_id = ? AND subject IS NOT NULL AND subject != ''
    GROUP BY subject 
    ORDER BY test_count DESC
");
$stmt->execute([$user_id]);
$subjectStats = $stmt->fetchAll(PDO::FETCH_ASSOC);

// available subjects for dropdown
$stmt = $pdo->prepare("SELECT DISTINCT subject FROM test_results WHERE user_id = ? AND subject IS NOT NULL AND subject != '' ORDER BY subject");
$stmt->execute([$user_id]);
$available_subjects = $stmt->fetchAll(PDO::FETCH_COLUMN);

// selected subject filter
$selected_subject = $_GET['subject'] ?? 'All';

// fetch filtered test history to display and chart
if ($selected_subject === 'All') {
    $stmt = $pdo->prepare("SELECT score, total_questions, subject, question_count, attempted_at, test_type, chapter FROM test_results WHERE user_id = ? ORDER BY attempted_at ASC");
    $stmt->execute([$user_id]);
} else {
    $stmt = $pdo->prepare("SELECT score, total_questions, subject, question_count, attempted_at, test_type, chapter FROM test_results WHERE user_id = ? AND subject = ? ORDER BY attempted_at ASC");
    $stmt->execute([$user_id, $selected_subject]);
}
$filteredTestHistory = $stmt->fetchAll(PDO::FETCH_ASSOC);

// build filtered chart arrays (fallback to all if empty)
$filteredChartLabels = [];
$filteredChartData = [];
foreach ($filteredTestHistory as $test) {
    $total_questions = (int)($test['total_questions'] ?? 1);
    $score = (int)($test['score'] ?? 0);
    $score_percent = $total_questions > 0 ? round(($score / $total_questions) * 100) : 0;
    $filteredChartLabels[] = date('M j', strtotime($test['attempted_at'] ?? 'now'));
    $filteredChartData[] = $score_percent;
}

// if filter gives empty arrays, use all-tests arrays to avoid blank chart when user first loads
$chartLabelsToUse = !empty($filteredChartLabels) ? $filteredChartLabels : $chartLabelsAll;
$chartDataToUse = !empty($filteredChartData) ? $filteredChartData : $chartDataAll;

// helper values for display
$avg_score = $total_tests > 0 ? round($total_correct / max(1, $total_tests), 1) : 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?php echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #4a6fa5;
            --secondary: #166088;
            --light: #f5f7fa;
            --dark: #2c3e50;
            --success: #2ecc71;
            --error: #e74c3c;
            --warning: #f39c12;
            --info: #3498db;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background: linear-gradient(135deg, #f5f7fa 0%, #e4e7f2 100%); min-height: 100vh; display: flex; flex-direction: column; }
        header { background: var(--primary); color: white; padding: 1rem 2rem; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 1.5rem; font-weight: bold; }
        .user-info { display: flex; align-items: center; gap: 1rem; }
        .avatar { width: 40px; height: 40px; border-radius: 50%; background: var(--secondary); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; }
        main { display: flex; flex: 1; padding: 2rem; gap: 2rem; }
        .profile-card { flex: 1; background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); padding: 2rem; }
        .profile-header { display:flex; align-items:center; margin-bottom:2rem; }
        .profile-avatar { width:100px; height:100px; border-radius:50%; background:var(--secondary); display:flex; align-items:center; justify-content:center; color:white; font-size:2.5rem; font-weight:bold; margin-right:2rem; }
        .profile-stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 2rem; }
        .stat-item { background:#f8f9fa; padding:1.5rem; border-radius:8px; text-align:center; }
        .stat-value { font-size: 1.8rem; font-weight: bold; color: var(--primary); margin: 0.5rem 0; }
        .stat-label { color: #6c757d; font-size: 0.9rem; }
        .chart-container { background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); padding: 2rem; height: 400px; margin-bottom: 2rem; position: relative; }
        .chart-header { display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem; }
        .chart-filter select { padding: 8px 15px; border-radius: 5px; border: 1px solid #ddd; font-size: 14px; }
        .test-history { background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); padding: 2rem; }
        .test-table { width: 100%; border-collapse: collapse; }
        .test-table th, .test-table td { padding: 1rem; text-align: left; border-bottom: 1px solid #eee; }
        .test-table th { background: #f8f9fa; font-weight: 600; }
        .test-table tr:hover { background: #f8f9fa; }
        .test-score { font-weight: bold; color: var(--primary); }
        .subject-tag { display:inline-block; padding:3px 8px; border-radius:12px; font-size:12px; font-weight:bold; color:white; background:var(--secondary); }
        .chapter-tag { display:inline-block; padding:3px 8px; border-radius:12px; font-size:12px; font-weight:bold; color:white; background:var(--warning); }
        .test-type-tag { display:inline-block; padding:3px 8px; border-radius:12px; font-size:12px; font-weight:bold; color:white; }
        .test-type-tag.set { background: var(--primary); }
        .test-type-tag.chapter { background: var(--warning); }
        .test-type-tag.daily { background: var(--success); }
        .btn { display:inline-block; margin:10px 5px; padding:12px 25px; background:var(--primary); color:white; text-decoration:none; border-radius:5px; font-size:16px; text-align:center; transition: background 0.3s ease; }
        .btn:hover { background: var(--secondary); }
        .btn.secondary { background: #6c757d; }
        .btn.secondary:hover { background: #5a6268; }
        .btn.warning { background: var(--warning); }
        .btn.success { background: var(--success); }
        .no-chart-data { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); color:#666; font-size:16px; text-align:center; }
    </style>
</head>
<body>
    <header>
        <div class="logo">IOE Entrance Test Platform</div>
        <div class="user-info">
            <div class="avatar"><?php echo isset($_SESSION['username']) ? htmlspecialchars(substr($_SESSION['username'], 0, 1)) : 'U'; ?></div>
            <span><?php echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?></span>
            <a href="../login_register/logout.php" style="color: white; text-decoration: none;">Logout</a>
        </div>
    </header>

    <main>
        <div class="profile-card">
            <div class="profile-header">
                <div class="profile-avatar">
                    <?php echo isset($_SESSION['username']) ? strtoupper(htmlspecialchars(substr($_SESSION['username'], 0, 1))) : 'U'; ?>
                </div>
                <div class="profile-info">
                    <h1 style="color:var(--dark);"><?php echo htmlspecialchars($_SESSION['username'] ?? 'User'); ?></h1>
                    <p>Your IOE Entrance Exam preparation dashboard</p>
                </div>
            </div>

            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-value"><?php echo $total_tests; ?></div>
                    <div class="stat-label">Total Tests</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">#<?php echo $rank; ?></div>
                    <div class="stat-label">Global Rank</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?php echo $accuracy; ?>%</div>
                    <div class="stat-label">Overall Accuracy</div>
                </div>
            </div>

            <h3 style="margin: 2rem 0 1rem 0; color: var(--dark);">🏆 Daily Challenge Stats</h3>
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-value"><?php echo (int)($dailyStats['total_daily'] ?? 0); ?></div>
                    <div class="stat-label">Daily Tests</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value"><?php echo $streak; ?> 🎯</div>
                    <div class="stat-label">Current Streak</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">
                        <?php 
                        $avg = $dailyStats['avg_daily_score'] ?? 0;
                        echo $avg > 0 ? round($avg, 1) : 0; 
                        ?>/20
                    </div>
                    <div class="stat-label">Avg Daily Score</div>
                </div>
            </div>

            <h3 style="margin: 2rem 0 1rem 0; color: var(--dark);">📚 Set-wise Test Stats</h3>
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-value"><?php echo (int)($setStats['set_tests'] ?? 0); ?></div>
                    <div class="stat-label">Set Tests Taken</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">
                        <?php echo isset($setStats['avg_set_score']) && $setStats['avg_set_score'] > 0 ? round($setStats['avg_set_score'], 1) : 0; ?>/100
                    </div>
                    <div class="stat-label">Avg Set Score</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">
                        <?php 
                        $set_percent = isset($setStats['avg_set_score']) && $setStats['avg_set_score'] > 0 ? round(($setStats['avg_set_score'] / 100) * 100, 1) : 0;
                        echo $set_percent; ?>%
                    </div>
                    <div class="stat-label">Avg Set Percentage</div>
                </div>
            </div>

            <h3 style="margin: 2rem 0 1rem 0; color: var(--dark);">📖 Chapter-wise Test Stats</h3>
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-value"><?php echo (int)($chapterStats['chapter_tests'] ?? 0); ?></div>
                    <div class="stat-label">Chapter Tests</div>
                </div>
                <div class="stat-item">
                    <div class="stat-value">
                        <?php echo isset($chapterStats['avg_chapter_score']) && $chapterStats['avg_chapter_score'] > 0 ? round($chapterStats['avg_chapter_score'], 1) : 0; ?>%
                    </div>
                    <div class="stat-label">Avg Chapter Score</div>
                </div>
                <div class="stat-item">
                    <a href="../tests/chapter_wise_test.php" class="btn warning" style="padding: 8px 15px; font-size: 14px; margin: 0;">Take Chapter Test</a>
                </div>
            </div>

            <?php if (!empty($topChapters)): ?>
            <h3 style="margin: 2rem 0 1rem 0; color: var(--dark);">🌟 Top Performing Chapters</h3>
            <div class="profile-stats">
                <?php foreach ($topChapters as $chapter): ?>
                <div class="stat-item">
                    <div class="stat-value"><?php echo round($chapter['avg_score'], 1); ?>%</div>
                    <div class="stat-label">
                        <?php echo htmlspecialchars($chapter['chapter']); ?><br>
                        <small>(<?php echo (int)$chapter['attempts']; ?> tests)</small>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($subjectStats)): ?>
            <h3 style="margin: 2rem 0 1rem 0; color: var(--dark);">📊 Subject Performance</h3>
            <div class="profile-stats">
                <?php foreach ($subjectStats as $stat): ?>
                <div class="stat-item">
                    <div class="stat-value"><?php echo round($stat['avg_percent']); ?>%</div>
                    <div class="stat-label"><?php echo htmlspecialchars($stat['subject']); ?><br>(<?php echo (int)$stat['test_count']; ?> tests)</div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- CHART -->
            <div class="chart-container" id="chart-container">
                <div class="chart-header">
                    <h3 style="color: var(--dark); margin: 0;">📈 Score Improvement Over Time</h3>
                    <div class="chart-filter">
                        <form method="GET" style="display:inline;">
                            <select name="subject" onchange="this.form.submit()">
                                <option value="All" <?php echo $selected_subject === 'All' ? 'selected' : ''; ?>>All Subjects</option>
                                <?php foreach ($available_subjects as $subject): ?>
                                    <option value="<?php echo htmlspecialchars($subject); ?>" <?php echo $selected_subject === $subject ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($subject); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </form>
                    </div>
                </div>

                <canvas id="improvement-chart" style="width:100%; height:100%;"></canvas>
                <div id="no-chart-data" class="no-chart-data" style="display:none;">
                    No test data for the selected subject.<br>
                    Try selecting "All Subjects" or take a test to see progress.
                </div>
            </div>

            <!-- TEST HISTORY -->
            <div class="test-history">
                <h2>Test History</h2>
                <?php if (empty($filteredTestHistory)): ?>
                    <p style="text-align: center; color: #666; padding: 2rem;">
                        No tests for this filter. <a href="../user_interface.php" class="btn">Take Your First Test</a>
                    </p>
                <?php else: ?>
                    <table class="test-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Subject</th>
                                <th>Chapter</th>
                                <th>Questions</th>
                                <th>Score</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($filteredTestHistory as $test): ?>
                                <?php
                                $subject = $test['subject'] ?? 'General';
                                $chapter = $test['chapter'] ?? '';
                                $question_count = (int)($test['question_count'] ?? ($test['total_questions'] ?? 20));
                                $test_type = $test['test_type'] ?? 'set';
                                $total_questions = (int)($test['total_questions'] ?? 1);
                                $score = (int)($test['score'] ?? 0);
                                $percent = $total_questions > 0 ? round(($score / $total_questions) * 100) : 0;
                                $attempted_at = $test['attempted_at'] ?? date('Y-m-d H:i:s');
                                ?>
                                <tr>
                                    <td><?php echo date('M j, Y', strtotime($attempted_at)); ?></td>
                                    <td><span class="test-type-tag <?php echo htmlspecialchars($test_type); ?>"><?php echo ucfirst(htmlspecialchars($test_type)); ?></span></td>
                                    <td><span class="subject-tag"><?php echo htmlspecialchars($subject); ?></span></td>
                                    <td>
                                        <?php if (!empty($chapter)): ?>
                                            <span class="chapter-tag"><?php echo htmlspecialchars($chapter); ?></span>
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $question_count; ?></td>
                                    <td class="test-score"><?php echo $score; ?>/<?php echo $total_questions; ?></td>
                                    <td><?php echo $percent; ?>%</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>

            <div style="text-align: center; margin-top: 2rem;">
                <a href="../user_interface.php" class="btn">Take New Test</a>
                <a href="../tests/daily_test.php" class="btn success">🎯 Daily Challenge</a>
                <a href="../tests/chapter_wise_test.php" class="btn warning">📖 Chapter Test</a>
                <a href="../login_register/logout.php" class="btn secondary">Logout</a>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const labels = <?php echo json_encode(array_values($chartLabelsToUse)); ?>;
            const dataPoints = <?php echo json_encode(array_values($chartDataToUse)); ?>;

            const canvas = document.getElementById('improvement-chart');
            const noDataDiv = document.getElementById('no-chart-data');

            // show a friendly message if no data
            if (!labels || labels.length === 0 || !dataPoints || dataPoints.length === 0) {
                canvas.style.display = 'none';
                noDataDiv.style.display = 'block';
                return;
            } else {
                canvas.style.display = 'block';
                noDataDiv.style.display = 'none';
            }

            const ctx = canvas.getContext('2d');

            const chartData = {
                labels: labels,
                datasets: [{
                    label: 'Test Score (%)',
                    data: dataPoints,
                    borderColor: '#4a6fa5',
                    backgroundColor: 'rgba(74, 111, 165, 0.1)',
                    borderWidth: 3,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#4a6fa5',
                    pointRadius: 5,
                    pointHoverRadius: 7,
                    fill: true,
                    tension: 0.3
                }]
            };

            const config = {
                type: 'line',
                data: chartData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const val = (context.parsed && typeof context.parsed.y !== 'undefined') ? context.parsed.y : (context.raw || 0);
                                    return val + '%';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            title: { display: true, text: 'Score Percentage' },
                            ticks: {
                                callback: function(value) { return value + '%'; }
                            }
                        },
                        x: {
                            title: { display: true, text: 'Test Date' }
                        }
                    }
                }
            };

            // Create chart
            new Chart(ctx, config);
        });
    </script>
</body>
</html>
