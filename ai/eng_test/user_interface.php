<?php
require_once 'config.php';

// Get user's previous tests
$stmt = $pdo->prepare("SELECT id, title, created_at FROM test_results 
                      WHERE user_id = ? ORDER BY created_at DESC");
$stmt->execute([$_SESSION['user_id']]);
$previousTests = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Proficiency Test</title>
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
            cursor: pointer;
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
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 1.5rem;
            height: 85vh;
            overflow-y: auto;
        }
        
        .sidebar h2 {
            margin-bottom: 1rem;
            color: var(--dark);
            border-bottom: 2px solid #eee;
            padding-bottom: 0.5rem;
        }
        
        .test-history {
            list-style: none;
        }
        
        .test-history li {
            padding: 0.8rem;
            margin-bottom: 0.5rem;
            background: #f8f9fa;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
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
        
        .delete-btn {
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 0.3rem 0.6rem;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .delete-btn:hover {
            background: #c0392b;
        }
        
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .input-section {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 1.5rem;
        }
        
        .input-section h2 {
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .form-group {
            margin-bottom: 1rem;
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
            border-radius: 6px;
            font-size: 1rem;
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
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .submit-btn:hover {
            background: var(--secondary);
        }
        
        .results-section {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 1.5rem;
            display: none;
        }
        
        .results-section h2 {
            margin-bottom: 1.5rem;
            color: var(--dark);
            text-align: center;
        }
        
        .correction-section {
            margin-bottom: 1.5rem;
        }
        
        .correction-section h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
            border-left: 4px solid var(--primary);
            padding-left: 0.5rem;
        }
        
        .correction-content {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 6px;
            line-height: 1.6;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .stat-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
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
        
        .graph-container {
            height: 300px;
            margin-top: 1.5rem;
        }
        
        /* Result Modal */
        .result-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            display: none;
        }
        
        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            text-align: center;
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            color: #777;
        }
        
        .modal-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .modal-btn {
            padding: 0.8rem 1.5rem;
            background: #4a6fa5;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .modal-btn:hover {
            background: #3a5a80;
        }
        
        @media (max-width: 768px) {
            main {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">English Proficiency Test</div>
        <div class="user-info">
            <div class="avatar" onclick="window.location.href='profile.php'">
                <?php echo substr($_SESSION['username'], 0, 1); ?>
            </div>
            <span><?php echo $_SESSION['username']; ?></span>
            <a href="logout.php" style="color: white; text-decoration: none;">Logout</a>
        </div>
    </header>
    
    <main>
        <aside class="sidebar">
            <h2>Test History</h2>
            <ul class="test-history">
                <?php foreach ($previousTests as $test): ?>
                    <li data-id="<?php echo $test['id']; ?>" 
                        onclick="loadTest(<?php echo $test['id']; ?>)">
                        <?php echo htmlspecialchars($test['title']); ?> 
                        <small><?php echo date('M j, Y', strtotime($test['created_at'])); ?></small>
                        <button class="delete-btn" data-test-id="<?php echo $test['id']; ?>">Delete</button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        
        <div class="main-content">
            <section class="input-section">
                <h2>New Test</h2>
                <form id="test-form">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Your Text</label>
                        <textarea id="text" name="text" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Submit for Analysis</button>
                </form>
            </section>
            
            <section class="results-section" id="results-section">
                <h2>Analysis Results</h2>
                <div class="correction-section">
                    <h3>Basic Level Correction</h3>
                    <div class="correction-content" id="basic-correction"></div>
                </div>
                
                <div class="correction-section">
                    <h3>Medium Level Correction</h3>
                    <div class="correction-content" id="medium-correction"></div>
                </div>
                
                <div class="correction-section">
                    <h3>High Professional Correction</h3>
                    <div class="correction-content" id="high-professional-correction"></div>
                </div>
                
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-value" id="spelling-stat">0%</div>
                        <div class="stat-label">Spelling Mistakes</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value" id="grammar-stat">0%</div>
                        <div class="stat-label">Grammar Mistakes</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value" id="subject-verb-stat">0%</div>
                        <div class="stat-label">Subject-Verb Agreement</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value" id="article-stat">0%</div>
                        <div class="stat-label">Article Mistakes</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-value" id="other-stat">0%</div>
                        <div class="stat-label">Other Mistakes</div>
                    </div>
                </div>
                
                <div class="graph-container">
                    <canvas id="improvement-chart"></canvas>
                </div>
            </section>
        </div>
    </main>
    
    <!-- Result Modal -->
    <div class="result-modal" id="result-modal">
        <div class="modal-content">
            <span class="close-modal" onclick="closeResultModal()">&times;</span>
            <h3>Analysis Complete!</h3>
            <p id="overall-correctness"></p>
            <div class="modal-buttons">
                <button class="modal-btn" onclick="goToProfile()">Go to Profile</button>
                <button class="modal-btn" onclick="showAnalysis()">Show Analysis</button>
                <button class="modal-btn" onclick="newTest()">New Test</button>
            </div>
        </div>
    </div>

    <script>
        // Delete test functionality
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                const testId = this.dataset.testId;
                if (confirm('Are you sure you want to delete this test?')) {
                    fetch('edit_and_delete.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: `action=delete&test_id=${testId}`
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Remove the test from the list
                            const listItem = document.querySelector(`.test-history li[data-id="${testId}"]`);
                            if (listItem) {
                                listItem.remove();
                            }
                        } else {
                            alert('Failed to delete test');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred');
                    });
                }
            });
        });
        
        // Load test functionality
        function loadTest(testId) {
            fetch('load_test.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `test_id=${testId}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert('Error: ' + data.error);
                    return;
                }
                
                // Populate results section
                document.getElementById('basic-correction').textContent = data.basic_correction;
                document.getElementById('medium-correction').textContent = data.medium_correction;
                document.getElementById('high-professional-correction').textContent = data.high_professional_correction;
                document.getElementById('spelling-stat').textContent = data.spelling_percent + '%';
                document.getElementById('grammar-stat').textContent = data.grammar_percent + '%';
                document.getElementById('subject-verb-stat').textContent = data.subject_verb_percent + '%';
                document.getElementById('article-stat').textContent = data.article_percent + '%';
                document.getElementById('other-stat').textContent = data.other_mistakes_percent + '%';
                
                // Show results section
                document.getElementById('results-section').style.display = 'block';
                
                // Update chart
                updateImprovementChart(data);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during loading');
            });
        }
        
        // Form submission
        document.getElementById('test-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const title = document.getElementById('title').value;
            const text = document.getElementById('text').value;
            
            fetch('send_to_ai.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `title=${encodeURIComponent(title)}&text=${encodeURIComponent(text)}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert('Error: ' + data.error);
                    return;
                }
                
                // Calculate overall correctness
                const avgMistake = (data.response.spelling_percent + 
                                   data.response.grammar_percent + 
                                   data.response.subject_verb_percent + 
                                   data.response.article_percent + 
                                   data.response.other_mistakes_percent) / 5;
                const overallCorrect = 100 - avgMistake;
                
                // Show modal
                document.getElementById('overall-correctness').textContent = 
                    `Overall Correctness: ${overallCorrect.toFixed(1)}%`;
                document.getElementById('result-modal').style.display = 'flex';
                
                // Store analysis data for later use
                window.currentAnalysis = data.response;
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during analysis');
            });
        });
        
        // Modal functions
        function closeResultModal() {
            document.getElementById('result-modal').style.display = 'none';
        }
        
        function goToProfile() {
            closeResultModal();
            window.location.href = 'profile.php';
        }
        
        function showAnalysis() {
            closeResultModal();
            
            // Show results section
            document.getElementById('results-section').style.display = 'block';
            
            // Populate results section with data from currentAnalysis
            document.getElementById('basic-correction').textContent = window.currentAnalysis.basic_correction;
            document.getElementById('medium-correction').textContent = window.currentAnalysis.medium_correction;
            document.getElementById('high-professional-correction').textContent = window.currentAnalysis.high_professional_correction;
            document.getElementById('spelling-stat').textContent = window.currentAnalysis.spelling_percent + '%';
            document.getElementById('grammar-stat').textContent = window.currentAnalysis.grammar_percent + '%';
            document.getElementById('subject-verb-stat').textContent = window.currentAnalysis.subject_verb_percent + '%';
            document.getElementById('article-stat').textContent = window.currentAnalysis.article_percent + '%';
            document.getElementById('other-stat').textContent = window.currentAnalysis.other_mistakes_percent + '%';
            
            // Update chart
            updateImprovementChart(window.currentAnalysis);
        }
        
        function newTest() {
            closeResultModal();
            
            // Clear form
            document.getElementById('title').value = '';
            document.getElementById('text').value = '';
            
            // Hide results section
            document.getElementById('results-section').style.display = 'none';
        }
        
        function updateImprovementChart(data) {
            const ctx = document.getElementById('improvement-chart').getContext('2d');
            
            // Get latest test score
            const avgMistake = (data.spelling_percent + 
                               data.grammar_percent + 
                               data.subject_verb_percent + 
                               data.article_percent + 
                               data.other_mistakes_percent) / 5;
            const score = 100 - avgMistake;
            
            // In a real app, this would fetch all test history
            const labels = ['Test 1', 'Test 2', 'Test 3', 'Test 4', 'Test 5'];
            const chartData = [65, 72, 78, 85, score];
            
            // Destroy previous chart if exists
            if (window.chart) {
                window.chart.destroy();
            }
            
            window.chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Improvement Score',
                        data: chartData,
                        borderColor: '#4a6fa5',
                        backgroundColor: 'rgba(74, 111, 165, 0.1)',
                        borderWidth: 2,
                        pointBackgroundColor: '#4a6fa5',
                        pointRadius: 5,
                        fill: true
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
    </script>
</body>
</html>