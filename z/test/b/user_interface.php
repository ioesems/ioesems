<?php
require_once 'config.php';

// Get user's previous tests
$stmt = $pdo->prepare("SELECT id, title, created_at FROM test_results 
                      WHERE user_id = ? ORDER BY created_at DESC");
$stmt->execute([$_SESSION['user_id']]);
$previousTests = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get current test ID if available
$currentTestId = isset($_GET['test_id']) ? intval($_GET['test_id']) : null;
$currentTest = null;

if ($currentTestId) {
    $stmt = $pdo->prepare("SELECT * FROM test_results WHERE id = ? AND user_id = ?");
    $stmt->execute([$currentTestId, $_SESSION['user_id']]);
    $currentTest = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Proficiency Test</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4a6fa5;
            --secondary: #166088;
            --light: #f5f7fa;
            --dark: #2c3e50;
            --success: #2ecc71;
            --error: #e74c3c;
            --warning: #f39c12;
            --gray: #95a5a6;
            --light-gray: #ecf0f1;
            --dark-gray: #34495e;
            --border-radius: 8px;
            --box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
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
            color: var(--dark);
        }
        
        header {
            background: var(--primary);
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo i {
            font-size: 1.8rem;
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
            font-size: 1.1rem;
        }
        
        main {
            display: flex;
            flex: 1;
            padding: 2rem;
            gap: 2rem;
        }
        
        .sidebar {
            width: 30%;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 1.5rem;
            height: 85vh;
            overflow-y: auto;
            position: sticky;
            top: 60px;
        }
        
        .sidebar h2 {
            margin-bottom: 1rem;
            color: var(--dark);
            border-bottom: 2px solid #eee;
            padding-bottom: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .sidebar h2 .add-test {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .sidebar h2 .add-test:hover {
            background: var(--secondary);
        }
        
        .test-history {
            list-style: none;
            padding: 0;
        }
        
        .test-history li {
            padding: 1rem;
            margin-bottom: 0.5rem;
            background: #f8f9fa;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .test-history li:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }
        
        .test-history li.active {
            background: var(--primary);
            color: white;
        }
        
        .test-history li .actions {
            display: flex;
            gap: 0.5rem;
        }
        
        .test-history li .actions button {
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
            padding: 0.2rem;
        }
        
        .test-history li .actions button:hover {
            color: var(--primary);
        }
        
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .input-section {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 1.5rem;
            display: <?php echo $currentTest ? 'none' : 'block'; ?>;
        }
        
        .input-section h2 {
            margin-bottom: 1rem;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .input-section h2 i {
            color: var(--primary);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
        }
        
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-group input:focus, .form-group textarea:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 111, 165, 0.2);
        }
        
        .form-group textarea {
            min-height: 200px;
            resize: vertical;
        }
        
        .submit-btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 1rem;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .submit-btn:hover {
            background: var(--secondary);
        }
        
        .results-section {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 1.5rem;
            display: <?php echo $currentTest ? 'block' : 'none'; ?>;
            transition: var(--transition);
        }
        
        .results-section h2 {
            margin-bottom: 1.5rem;
            color: var(--dark);
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .results-section h2 .back-btn {
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
        }
        
        .results-section h2 .back-btn:hover {
            color: var(--primary);
        }
        
        .correction-section {
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--primary);
            padding-left: 1rem;
        }
        
        .correction-section h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .correction-section h3 i {
            color: var(--warning);
        }
        
        .correction-content {
            background: #f8f9fa;
            padding: 1.2rem;
            border-radius: var(--border-radius);
            line-height: 1.6;
            white-space: pre-wrap;
            font-size: 1rem;
            border: 1px solid #eee;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .stat-card {
            background: #f8f9fa;
            border-radius: var(--border-radius);
            padding: 1.2rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: var(--transition);
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
        
        .progress-container {
            margin-top: 1rem;
            height: 8px;
            background: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            background: var(--success);
            border-radius: 4px;
        }
        
        .graph-container {
            height: 300px;
            margin-top: 1.5rem;
            background: white;
            border-radius: var(--border-radius);
            padding: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .edit-btn {
            background: var(--warning);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
        }
        
        .edit-btn:hover {
            background: #e67e22;
        }
        
        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
                max-height: none;
                position: static;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .input-section, .results-section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <span>English Proficiency Test</span>
        </div>
        <div class="user-info">
            <div class="avatar"><?php echo substr($_SESSION['username'], 0, 1); ?></div>
            <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            <a href="logout.php" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </header>
    
    <main>
        <aside class="sidebar">
            <h2>
                Test History
                <button class="add-test" onclick="showInputSection()">+ New Test</button>
            </h2>
            <ul class="test-history">
                <?php foreach ($previousTests as $test): ?>
                    <li data-id="<?php echo $test['id']; ?>" 
                        onclick="loadTest(<?php echo $test['id']; ?>)"
                        class="<?php echo $currentTestId && $currentTestId == $test['id'] ? 'active' : ''; ?>">
                        <div class="test-title">
                            <?php echo htmlspecialchars($test['title']); ?>
                            <small><?php echo date('M j, Y', strtotime($test['created_at'])); ?></small>
                        </div>
                        <div class="actions">
                            <button class="edit-btn" onclick="editTest(<?php echo $test['id']; ?>)">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        
        <div class="main-content">
            <section class="input-section" id="input-section">
                <h2><i class="fas fa-edit"></i> Create New Test</h2>
                <form id="test-form">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" value="<?php echo $currentTest ? htmlspecialchars($currentTest['title']) : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Your Text</label>
                        <textarea id="text" name="text" required><?php echo $currentTest ? htmlspecialchars($currentTest['original_text']) : ''; ?></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-check"></i> <?php echo $currentTest ? 'Update Test' : 'Submit for Analysis'; ?>
                    </button>
                </form>
            </section>
            
            <section class="results-section" id="results-section">
                <h2>
                    <?php echo $currentTest ? htmlspecialchars($currentTest['title']) : 'Analysis Results'; ?>
                    <button class="back-btn" onclick="showInputSection()">
                        <i class="fas fa-arrow-left"></i> Back to Tests
                    </button>
                </h2>
                
                <?php if ($currentTest): ?>
                    <div class="correction-section">
                        <h3><i class="fas fa-book-open"></i> Basic Level Correction</h3>
                        <div class="correction-content"><?php echo htmlspecialchars($currentTest['basic_correction']); ?></div>
                    </div>
                    
                    <div class="correction-section">
                        <h3><i class="fas fa-graduation-cap"></i> Medium Level Correction</h3>
                        <div class="correction-content"><?php echo htmlspecialchars($currentTest['medium_correction']); ?></div>
                    </div>
                    
                    <div class="correction-section">
                        <h3><i class="fas fa-user-tie"></i> High Professional Correction</h3>
                        <div class="correction-content"><?php echo htmlspecialchars($currentTest['high_professional_correction']); ?></div>
                    </div>
                    
                    <div class="stats-container">
                        <div class="stat-card">
                            <div class="stat-value"><?php echo $currentTest['spelling_percent']; ?>%</div>
                            <div class="stat-label">Spelling Mistakes</div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: <?php echo 100 - $currentTest['spelling_percent']; ?>%"></div>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value"><?php echo $currentTest['grammar_percent']; ?>%</div>
                            <div class="stat-label">Grammar Mistakes</div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: <?php echo 100 - $currentTest['grammar_percent']; ?>%"></div>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value"><?php echo $currentTest['subject_verb_percent']; ?>%</div>
                            <div class="stat-label">Subject-Verb Agreement</div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: <?php echo 100 - $currentTest['subject_verb_percent']; ?>%"></div>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value"><?php echo $currentTest['article_percent']; ?>%</div>
                            <div class="stat-label">Article Mistakes</div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: <?php echo 100 - $currentTest['article_percent']; ?>%"></div>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-value"><?php echo $currentTest['other_mistakes_percent']; ?>%</div>
                            <div class="stat-label">Other Mistakes</div>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: <?php echo 100 - $currentTest['other_mistakes_percent']; ?>%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="graph-container">
                        <canvas id="improvement-chart"></canvas>
                    </div>
                <?php else: ?>
                    <div style="text-align: center; padding: 2rem;">
                        <i class="fas fa-file-alt" style="font-size: 3rem; color: var(--gray); margin-bottom: 1rem;"></i>
                        <h3>No test selected</h3>
                        <p>Select a test from the history on the left to view details</p>
                    </div>
                <?php endif; ?>
            </section>
        </div>
    </main>

    <script>
        function showInputSection() {
            document.getElementById('input-section').style.display = 'block';
            document.getElementById('results-section').style.display = 'none';
            document.querySelectorAll('.test-history li').forEach(li => {
                li.classList.remove('active');
            });
        }
        
        function loadTest(testId) {
            // In a real app, this would fetch the test results from server
            // For now, we'll just show the results section for the selected test
            document.getElementById('input-section').style.display = 'none';
            document.getElementById('results-section').style.display = 'block';
            
            // Update active class
            document.querySelectorAll('.test-history li').forEach(li => {
                li.classList.remove('active');
                if (li.dataset.id == testId) {
                    li.classList.add('active');
                }
            });
            
            // In a real implementation, we'd fetch the test details via AJAX
            // For now, we'll just simulate it
            updateChartForTest(testId);
        }
        
        function editTest(testId) {
            // Show input section with test data pre-filled
            document.getElementById('input-section').style.display = 'block';
            document.getElementById('results-section').style.display = 'none';
            
            // Update active class
            document.querySelectorAll('.test-history li').forEach(li => {
                li.classList.remove('active');
                if (li.dataset.id == testId) {
                    li.classList.add('active');
                }
            });
            
            // In a real implementation, we'd fetch the test details via AJAX
            // For now, we'll just set the test ID in the URL
            window.location.href = 'user_interface.php?test_id=' + testId;
        }
        
        function updateChartForTest(testId) {
            // In a real app, this would get data from server
            // For now, we'll just simulate it
            const ctx = document.getElementById('improvement-chart').getContext('2d');
            
            // Clear existing chart
            if (window.improvementChart) {
                window.improvementChart.destroy();
            }
            
            // Simulated data for the chart
            const labels = ['Test 1', 'Test 2', 'Test 3', 'Test 4', 'Test 5'];
            const data = [65, 72, 78, 85, 92];
            
            window.improvementChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Improvement Score',
                        data: data,
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
        }
        
        // Initialize chart when page loads
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('improvement-chart')) {
                updateChartForTest();
            }
        });
        
        // Form submission
        document.getElementById('test-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const title = document.getElementById('title').value;
            const text = document.getElementById('text').value;
            const isUpdate = document.querySelector('.submit-btn').textContent.includes('Update');
            
            fetch('<?php echo $currentTest ? 'update_test.php' : 'send_to_ai.php'; ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `title=${encodeURIComponent(title)}&text=${encodeURIComponent(text)}<?php echo $currentTest ? '&test_id=' . $currentTest['id'] : ''; ?>`
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert('Error: ' + data.error);
                    return;
                }
                
                if (isUpdate) {
                    // Update the current test in the UI
                    document.querySelector('.test-history li.active .test-title').innerHTML = 
                        `<span>${title}</span> <small>${new Date().toLocaleDateString()}</small>`;
                    
                    // Show results section with updated data
                    document.getElementById('input-section').style.display = 'none';
                    document.getElementById('results-section').style.display = 'block';
                    document.querySelector('.results-section h2').textContent = title;
                    document.querySelector('.correction-content').textContent = data.response.basic_correction;
                    
                    // Update statistics
                    document.querySelector('.stat-value:nth-child(1)').textContent = data.response.spelling_percent + '%';
                    document.querySelector('.stat-value:nth-child(2)').textContent = data.response.grammar_percent + '%';
                    document.querySelector('.stat-value:nth-child(3)').textContent = data.response.subject_verb_percent + '%';
                    document.querySelector('.stat-value:nth-child(4)').textContent = data.response.article_percent + '%';
                    document.querySelector('.stat-value:nth-child(5)').textContent = data.response.other_mistakes_percent + '%';
                    
                    // Update progress bars
                    document.querySelector('.progress-bar:nth-child(1)').style.width = (100 - data.response.spelling_percent) + '%';
                    document.querySelector('.progress-bar:nth-child(2)').style.width = (100 - data.response.grammar_percent) + '%';
                    document.querySelector('.progress-bar:nth-child(3)').style.width = (100 - data.response.subject_verb_percent) + '%';
                    document.querySelector('.progress-bar:nth-child(4)').style.width = (100 - data.response.article_percent) + '%';
                    document.querySelector('.progress-bar:nth-child(5)').style.width = (100 - data.response.other_mistakes_percent) + '%';
                } else {
                    // For new tests, reload the page to show the new test in history
                    location.reload();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during analysis');
            });
        });
    </script>
</body>
</html>