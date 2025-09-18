<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($subject_title) ? $subject_title : 'Question Bank with Solutions'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- MathJax for rendering mathematical expressions -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <style>
        /* ========== GLOBAL STYLES ========== */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            background-color: #f9f9f9;
            color: #333;
            transition: all 0.3s ease;
        }

        .dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        /* ========== NAVBAR TOGGLE FOR MOBILE ========== */
        .navbar-toggle {
            display: none;
            background: linear-gradient(90deg, #8BC34A, #FFC107);
            color: #000;
            padding: 15px;
            cursor: pointer;
            text-align: center;
            font-weight: bold;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        /* ========== SIDEBAR ========== */
        .sidebar {
            background-color: #f4f4f4;
            padding: 20px 15px;
            width: 250px;
            box-sizing: border-box;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: transform 0.3s ease;
            top: 0;
            left: 0;
            z-index: 999;
        }

        .dark-mode .sidebar {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }

        .sidebar h2 {
            margin-top: 0;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
            color: #2c3e50;
            text-align: center;
        }

        .dark-mode .sidebar h2 {
            color: #bb86fc;
            border-bottom: 2px solid #3498db;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin: 8px 0;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
            padding: 10px 15px;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .dark-mode .sidebar a {
            color: #e0e0e0;
        }

        .sidebar a:hover {
            background-color: #ddd;
            transform: translateX(5px);
        }

        .dark-mode .sidebar a:hover {
            background-color: #333;
        }

        /* ========== MAIN CONTENT ========== */
        .content {
            margin-left: 250px;
            padding: 20px;
            padding-top: 80px;
            transition: margin-left 0.3s ease;
        }

        /* ========== FLOATING NAVIGATION ========== */
        #nav-header {
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            background: linear-gradient(90deg, #8BC34A, #FFC107);
            color: #000;
            padding: 10px 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .dark-mode #nav-header {
            background: linear-gradient(90deg, #2d2d2d, #444);
            color: #e0e0e0;
        }

        #nav-header ul {
            list-style: none;
            display: flex;
            gap: 5px;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        #nav-header li {
            margin: 0;
            padding: 0;
        }

        #nav-header button,
        #nav-header a {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
            color: #000;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            transition: all 0.3s;
            border: none;
            background: transparent;
            cursor: pointer;
            min-width: 40px;
            font-size: 14px;
        }

        #nav-header button:hover,
        #nav-header a:hover {
            background: rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        #nav-header button i {
            font-size: 1.2em;
        }

        /* ========== CRITICAL FIX: Force horizontal layout for dynamic chapter links ========== */
        #dynamic-chapter-links {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-left: 15px;
            border-left: 1px solid rgba(0,0,0,0.2);
            padding-left: 15px;
        }

        #dynamic-chapter-links li {
            display: flex;
            margin: 0;
            padding: 0;
        }

        /* ========== SEARCH BOX ========== */
        #searchBox {
            position: fixed;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1001;
            display: none;
            transition: all 0.3s ease;
            width: 350px;
            max-width: 90vw;
        }

        .dark-mode #searchBox {
            background: #1e1e1e;
            color: #e0e0e0;
        }

        #searchBox input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .dark-mode #searchBox input {
            background: #2d2d2d;
            color: #e0e0e0;
            border: 1px solid #3d3d3d;
        }

        /* ========== SEARCH NAVIGATION ========== */
        #searchNav {
            margin-top: 15px;
            text-align: center;
            display: none;
        }

        #searchNav button {
            margin: 0 5px;
            padding: 6px 12px;
            font-size: 14px;
            cursor: pointer;
            border: 1px solid #ccc;
            background: white;
            border-radius: 4px;
        }

        .dark-mode #searchNav button {
            background: #2d2d2d;
            color: #e0e0e0;
            border: 1px solid #3d3d3d;
        }

        #searchNav button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            background: #f0f0f0;
        }

        .dark-mode #searchNav button:disabled {
            background: #333;
        }

        #searchCounter {
            margin: 0 10px;
            font-size: 14px;
            font-weight: bold;
        }

        /* ========== CHAPTER SECTION ========== */
        .chapter-section {
            margin-bottom: 40px;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .dark-mode .chapter-section {
            background: #1e1e1e;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .chapter-section h2 {
            color: #2980b9;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 0;
            font-size: 24px;
        }

        .dark-mode .chapter-section h2 {
            color: #03dac6;
        }

        /* ========== QUESTION BOX ========== */
        .question-container {
            margin: 20px 0;
            background-color: #f8f9fa;
            border-radius: 6px;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .dark-mode .question-container {
            background-color: #2d2d2d;
        }

        .question-header {
            padding: 15px;
            background-color: #e9ecef;
            border-left: 4px solid #3498db;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dark-mode .question-header {
            background-color: #3a3a3a;
            border-left: 4px solid #03dac6;
        }

        .question-header:hover {
            background-color: #dde4e8;
        }

        .dark-mode .question-header:hover {
            background-color: #444;
        }

        .question-toggle {
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .question-toggle.expanded {
            transform: rotate(180deg);
        }

        .question-content {
            padding: 0 15px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .question-content.expanded {
            padding: 15px;
            max-height: 1000px;
        }

        .question-text {
            margin-bottom: 15px;
            font-weight: 500;
        }

        .question .year {
            font-weight: bold;
            color: #d9534f;
            float: right;
            background: #fff;
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 12px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .dark-mode .question .year {
            background: #333;
            color: #ff6b6b;
        }

        /* ========== SOLUTION STYLES ========== */
        .solution-section {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f4fd;
            border-radius: 6px;
            border-left: 4px solid #2980b9;
        }

        .dark-mode .solution-section {
            background-color: #2a3b4c;
            border-left: 4px solid #03dac6;
        }

        .solution-section h4 {
            margin-top: 0;
            color: #2980b9;
            border-bottom: 1px solid #bdc3c7;
            padding-bottom: 8px;
        }

        .dark-mode .solution-section h4 {
            color: #03dac6;
            border-bottom: 1px solid #444;
        }

        /* ========== DIAGRAM STYLES ========== */
        .diagram-container {
            margin: 20px 0;
            text-align: center;
            background: #e9ecef;
            border-radius: 8px;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .dark-mode .diagram-container {
            background: #333;
        }

        .diagram-image {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            margin: 10px 0;
            display: block;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .diagram-image:hover {
            transform: scale(1.02);
        }

        .diagram-caption {
            font-style: italic;
            color: #666;
            margin-top: 8px;
            font-size: 14px;
        }

        .dark-mode .diagram-caption {
            color: #aaa;
        }

        .diagram-placeholder {
            background: #e9ecef;
            border: 2px dashed #6c757d;
            border-radius: 8px;
            padding: 30px 20px;
            margin: 15px 0;
            text-align: center;
            color: #6c757d;
            font-style: italic;
            transition: all 0.3s ease;
        }

        .dark-mode .diagram-placeholder {
            background: #333;
            border-color: #555;
            color: #aaa;
        }

        .diagram-placeholder i {
            font-size: 36px;
            margin-bottom: 15px;
            color: #6c757d;
        }

        .dark-mode .diagram-placeholder i {
            color: #888;
        }

        /* ========== IMAGE MODAL ========== */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            overflow: auto;
        }

        .modal-content {
            margin: auto;
            display: block;
            max-width: 90%;
            max-height: 90vh;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }

        /* ========== CODE BLOCKS ========== */
        .code-block {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 6px;
            overflow-x: auto;
            font-family: 'Courier New', monospace;
            margin: 15px 0;
            border-left: 4px solid #666;
        }

        .dark-mode .code-block {
            background-color: #2d2d2d;
            color: #e0e0e0;
            border-left: 4px solid #888;
        }

        /* ========== IMPORTANT NOTE BOX ========== */
        .note-box {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            border-radius: 6px;
            margin: 15px 0;
        }

        .dark-mode .note-box {
            background-color: #4a422a;
            border-left: 4px solid #ffca28;
            color: #fff3cd;
        }

        .note-box h5 {
            margin-top: 0;
            color: #856404;
        }

        .dark-mode .note-box h5 {
            color: #ffca28;
        }

        /* ========== FORMULA BOX ========== */
        .formula-box {
            background-color: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 15px;
            border-radius: 6px;
            margin: 15px 0;
            text-align: center;
        }

        .dark-mode .formula-box {
            background-color: #213145;
            border-left: 4px solid #42a5f5;
            color: #e3f2fd;
        }

        /* ========== RESPONSIVE DESIGN ========== */
        @media (max-width: 768px) {
            .navbar-toggle {
                display: block;
            }

            .sidebar {
                transform: translateX(-100%);
                width: 80%;
                max-width: 300px;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .content {
                margin-left: 0;
                padding: 20px;
                padding-top: 120px;
            }

            #nav-header {
                left: 0;
                width: 100%;
                padding: 0 15px;
                justify-content: space-between;
            }
            
            #nav-header ul {
                justify-content: flex-start;
                overflow-x: auto;
                padding: 0 10px;
            }

            #searchBox {
                width: 90%;
                left: 5%;
                right: 5%;
                transform: none;
            }
        }

        @media (max-width: 480px) {
            .chapter-section {
                padding: 15px;
            }

            .question-header {
                padding: 12px 10px;
            }

            #nav-header button {
                padding: 6px 8px;
                font-size: 12px;
            }
            
            #dynamic-chapter-links {
                margin-left: 10px;
                padding-left: 10px;
            }
        }

        /* ========== FOOTER ========== */
        .footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: #777;
            font-size: 14px;
            border-top: 1px solid #eee;
        }

        .dark-mode .footer {
            color: #888;
            border-top: 1px solid #333;
        }

        /* ========== LOADING SPINNER ========== */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #3498db;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ========== IMAGE ERROR MESSAGE ========== */
        .image-error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 6px;
            margin: 10px 0;
            border-left: 4px solid #dc3545;
        }

        .dark-mode .image-error {
            background: #4a2323;
            color: #f8d7da;
        }

        /* ========== SEARCH HIGHLIGHT ========== */
        .search-highlight {
            background-color: #ffeb3b !important;
            padding: 0 3px !important;
            border-radius: 3px !important;
            position: relative;
            font-weight: bold;
        }

        .dark-mode .search-highlight {
            background-color: #ffd54f !important;
        }
    </style>
</head>
<body>
    <!-- Mobile Navigation Toggle -->
    <div class="navbar-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i> Chapters
    </div>

    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
        <h2>Chapters</h2>
        <ul id="chapter-links">
            <!-- Chapter links will be populated dynamically -->
        </ul>
    </div>

    <!-- Floating Navigation -->
    <div id="nav-header">
        <ul id="nav-list">
            <li><button id="fullScreenBtn" title="Full Screen"><i class="fas fa-expand"></i></button></li>
            <li><button id="darkModeBtn" title="Dark Mode"><i class="fas fa-moon"></i></button></li>
            <li><button id="searchBtn" title="Search"><i class="fas fa-search"></i></button></li>
            <span id="dynamic-chapter-links"></span>
        </ul>
    </div>

    <!-- Search Box -->
    <div id="searchBox">
        <input type="text" id="searchInput" placeholder="Search questions and solutions...">
        <div id="searchNav">
            <button id="searchPrevBtn" title="Previous Match">↑ Previous</button>
            <span id="searchCounter">0 matches</span>
            <button id="searchNextBtn" title="Next Match">↓ Next</button>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1 style="text-align: center; display: none;"><?php echo isset($subject_title) ? $subject_title : 'Question Bank with Solutions'; ?></h1>
        
        <?php
        // Check if $questions array is defined
        if (!isset($questions) || !is_array($questions)) {
            echo "<div class='chapter-section'>";
            echo "<h2>Error</h2>";
            echo "<p>No questions data found. Please make sure the \$questions array is properly defined in this file.</p>";
            echo "</div>";
        } else {
            // Generate chapter sections
            foreach ($questions as $chapter) {
                $chapter_id = "chapter_" . $chapter['chapter'];
                echo "<div class='chapter-section' id='$chapter_id'>";
                echo "<h2>" . $chapter['chapter'] . ". " . htmlspecialchars($chapter['title']) . "</h2>";
                
                // Check if questions exist for this chapter
                if (!isset($chapter['questions']) || !is_array($chapter['questions']) || count($chapter['questions']) == 0) {
                    echo "<p>No questions available for this chapter.</p>";
                } else {
                    // Generate questions with solutions
                    foreach ($chapter['questions'] as $index => $q) {
                        $question_id = "q_" . $chapter['chapter'] . "_" . ($index + 1);
                        echo "<div class='question-container'>";
                        echo "<div class='question-header' onclick='toggleQuestion(\"" . $question_id . "\")'>";
                        echo "<div><strong>Q" . ($index + 1) . ":</strong> " . htmlspecialchars(substr($q['text'], 0, 100)) . (strlen($q['text']) > 100 ? "..." : "") . "</div>";
                        echo "<div style='display: flex; align-items: center; gap: 10px;'>";
                        if (isset($q['year']) && !empty($q['year'])) {
                            echo "<span class='year'>" . htmlspecialchars($q['year']) . "</span>";
                        }
                        echo "<i class='fas fa-chevron-down question-toggle' id='toggle_" . $question_id . "'></i>";
                        echo "</div>";
                        echo "</div>";
                        
                        echo "<div class='question-content' id='" . $question_id . "'>";
                        echo "<div class='question-text'>" . htmlspecialchars($q['text']) . "</div>";
                        
                        // Add diagram if question has one
                        if (isset($q['has_diagram']) && $q['has_diagram']) {
                            if (isset($q['diagram_path']) && !empty($q['diagram_path'])) {
                                $diagram_path = htmlspecialchars($q['diagram_path']);
                                $diagram_alt = isset($q['diagram_alt']) ? htmlspecialchars($q['diagram_alt']) : 'Diagram for question ' . ($index + 1);
                                
                                echo "<div class='diagram-container'>";
                                echo "<img src='" . $diagram_path . "' alt='" . $diagram_alt . "' class='diagram-image' onclick='openModal(\"" . $diagram_path . "\", \"" . $diagram_alt . "\")'>";
                                echo "<div class='diagram-caption'>" . $diagram_alt . "</div>";
                                echo "</div>";
                            } else {
                                // Show placeholder if no image path is provided
                                echo "<div class='diagram-placeholder'>";
                                echo "<i class='fas fa-image'></i><br>";
                                echo "Diagram referenced in question";
                                if (isset($q['diagram_alt']) && $q['diagram_alt']) {
                                    echo "<div class='diagram-caption'>" . htmlspecialchars($q['diagram_alt']) . "</div>";
                                }
                                echo "</div>";
                            }
                        }
                        
                        // Add solution section if available
                        if (isset($q['solution']) && !empty($q['solution'])) {
                            echo "<div class='solution-section'>";
                            echo "<h4>Solution:</h4>";
                            echo "<div class='solution-text'>" . $q['solution'] . "</div>";
                            
                            // Add diagram if solution has one
                            if (isset($q['solution_has_diagram']) && $q['solution_has_diagram']) {
                                if (isset($q['solution_diagram_path']) && !empty($q['solution_diagram_path'])) {
                                    $sol_diagram_path = htmlspecialchars($q['solution_diagram_path']);
                                    $sol_diagram_alt = isset($q['solution_diagram_alt']) ? htmlspecialchars($q['solution_diagram_alt']) : 'Diagram for solution of question ' . ($index + 1);
                                    
                                    echo "<div class='diagram-container'>";
                                    echo "<img src='" . $sol_diagram_path . "' alt='" . $sol_diagram_alt . "' class='diagram-image' onclick='openModal(\"" . $sol_diagram_path . "\", \"" . $sol_diagram_alt . "\")'>";
                                    echo "<div class='diagram-caption'>" . $sol_diagram_alt . "</div>";
                                    echo "</div>";
                                } else {
                                    // Show placeholder if no image path is provided
                                    echo "<div class='diagram-placeholder'>";
                                    echo "<i class='fas fa-image'></i><br>";
                                    echo "Diagram referenced in solution";
                                    if (isset($q['solution_diagram_alt']) && $q['solution_diagram_alt']) {
                                        echo "<div class='diagram-caption'>" . htmlspecialchars($q['solution_diagram_alt']) . "</div>";
                                    }
                                    echo "</div>";
                                }
                            }
                            
                            // Add additional notes if available
                            if (isset($q['notes']) && !empty($q['notes'])) {
                                echo "<div class='note-box'>";
                                echo "<h5>Important Notes:</h5>";
                                echo "<div class='notes-text'>" . $q['notes'] . "</div>";
                                echo "</div>";
                            }
                            
                            // Add formulas if available
                            if (isset($q['formulas']) && is_array($q['formulas']) && count($q['formulas']) > 0) {
                                echo "<div class='formula-box'>";
                                echo "<h5>Key Formulas:</h5>";
                                foreach ($q['formulas'] as $formula) {
                                    echo "<div class='formula-item'>" . $formula . "</div>";
                                }
                                echo "</div>";
                            }
                        }
                        
                        echo "</div>"; // Close question-content
                        echo "</div>"; // Close question-container
                    }
                }
                
                echo "</div>"; // Close chapter-section
            }
        }
        ?>

        <div class="footer">
            <p><?php echo isset($subject_title) ? $subject_title : 'Question Bank with Solutions'; ?> &copy; <?php echo date("Y"); ?></p>
            <p>Click on questions to expand/collapse. Click on images to view them in full size.</p>
        </div>
    </div>

    <script>
        // Image Modal Functionality
        function openModal(imageSrc, altText) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            
            modal.style.display = "block";
            modalImg.src = imageSrc;
            modalImg.alt = altText;
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = "none";
        }

        // Close modal when clicking outside the image
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
        });

        // Toggle question expansion
        function toggleQuestion(questionId) {
            const content = document.getElementById(questionId);
            const toggleIcon = document.getElementById('toggle_' + questionId);
            
            if (content.classList.contains('expanded')) {
                content.classList.remove('expanded');
                toggleIcon.classList.remove('expanded');
            } else {
                content.classList.add('expanded');
                toggleIcon.classList.add('expanded');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            // ========== WAIT FOR MathJax TO FINISH RENDERING ========== //
            if (window.MathJax) {
                MathJax.startup.promise.then(() => {
                    initApp();
                }).catch((err) => {
                    console.error('MathJax failed to load: ', err);
                    initApp();
                });
            } else {
                initApp();
            }

            function initApp() {
                // ========== DYNAMIC CHAPTER NAVIGATION ========== //
                const chapterDivs = document.querySelectorAll('.chapter-section');
                const navPlaceholder = document.getElementById('dynamic-chapter-links');
                const sidebarPlaceholder = document.getElementById('chapter-links');

                chapterDivs.forEach(div => {
                    const id = div.id;
                    const match = id.match(/^chapter_(\d+)$/);
                    if (match) {
                        const chapterNum = match[1];
                        const chapterTitle = div.querySelector('h2').textContent;
                        
                        // Add to floating nav
                        const navLinkItem = document.createElement('li');
                        navLinkItem.innerHTML = `<a href="#${id}" title="Go to Chapter ${chapterNum}">Ch${chapterNum}</a>`;
                        navPlaceholder.appendChild(navLinkItem);
                        
                        // Add to sidebar
                        const sidebarLinkItem = document.createElement('li');
                        sidebarLinkItem.innerHTML = `<a href="#${id}">${chapterTitle}</a>`;
                        sidebarPlaceholder.appendChild(sidebarLinkItem);
                    }
                });

                // ========== DARK MODE ========== //
                document.getElementById('darkModeBtn').addEventListener('click', function () {
                    document.body.classList.toggle('dark-mode');
                    const icon = this.querySelector('i');
                    if (document.body.classList.contains('dark-mode')) {
                        icon.classList.remove('fa-moon');
                        icon.classList.add('fa-sun');
                    } else {
                        icon.classList.remove('fa-sun');
                        icon.classList.add('fa-moon');
                    }
                });

                // ========== SEARCH TOGGLE ========== //
                document.getElementById('searchBtn').addEventListener('click', function () {
                    const searchBox = document.getElementById('searchBox');
                    searchBox.style.display = searchBox.style.display === 'none' ? 'block' : 'none';
                    if (searchBox.style.display === 'block') {
                        document.getElementById('searchInput').focus();
                        document.getElementById('searchNav').style.display = 'block';
                    } else {
                        document.getElementById('searchNav').style.display = 'none';
                    }
                });

                // ========== FULLSCREEN ========== //
                document.getElementById('fullScreenBtn').addEventListener('click', function () {
                    if (!document.fullscreenElement) {
                        document.documentElement.requestFullscreen();
                    } else {
                        if (document.exitFullscreen) {
                            document.exitFullscreen();
                        }
                    }
                });

                // ========== SIDEBAR TOGGLE FOR MOBILE ========== //
                window.toggleSidebar = function() {
                    document.getElementById('sidebar').classList.toggle('active');
                };

                // Close sidebar if clicked outside on mobile
                document.addEventListener('click', function(event) {
                    const sidebar = document.getElementById('sidebar');
                    const toggleButton = document.querySelector('.navbar-toggle');
                    const isClickInsideSidebar = sidebar.contains(event.target);
                    const isClickOnToggleButton = toggleButton.contains(event.target);
                    
                    if (window.innerWidth <= 768 && !isClickInsideSidebar && !isClickOnToggleButton && sidebar.classList.contains('active')) {
                        sidebar.classList.remove('active');
                    }
                });

                // Update sidebar position on window resize
                window.addEventListener('resize', function() {
                    if (window.innerWidth > 768) {
                        document.getElementById('sidebar').classList.remove('active');
                    }
                });

                // Handle image loading errors
                document.querySelectorAll('.diagram-image').forEach(img => {
                    img.addEventListener('error', function() {
                        const container = this.parentElement;
                        container.innerHTML = `
                            <div class="image-error">
                                <i class="fas fa-exclamation-triangle"></i> 
                                Diagram image could not be loaded. Please check if the image file exists at the specified path.
                            </div>
                            <div class="diagram-caption">${this.alt}</div>
                        `;
                    });
                });

                // ========== ENHANCED SEARCH WITH NAVIGATION ========== //
                let currentMatchIndex = -1;
                let searchMatches = [];

                function highlightText(searchTerm) {
                    // Clear previous highlights
                    document.querySelectorAll('.search-highlight').forEach(el => {
                        if (el.parentNode) {
                            el.outerHTML = el.innerHTML;
                        }
                    });

                    if (!searchTerm.trim()) {
                        document.querySelectorAll('.chapter-section').forEach(chapter => {
                            chapter.style.display = 'block';
                        });
                        searchMatches = [];
                        updateNavigationButtons();
                        return;
                    }

                    searchMatches = [];
                    const chapters = document.querySelectorAll('.chapter-section');

                    chapters.forEach(chapter => {
                        // Skip MathJax rendered elements to avoid breaking equations
                        const walker = document.createTreeWalker(
                            chapter,
                            NodeFilter.SHOW_TEXT,
                            {
                                acceptNode: function(node) {
                                    // Skip text inside MathJax containers, years, and diagram captions
                                    if (node.parentNode.closest('.MathJax') || 
                                        node.parentNode.closest('.math') ||
                                        node.parentNode.closest('[class*="MJX"]') ||
                                        node.parentNode.classList.contains('year') ||
                                        node.parentNode.classList.contains('diagram-caption')) {
                                        return NodeFilter.FILTER_REJECT;
                                    }
                                    return NodeFilter.FILTER_ACCEPT;
                                }
                            },
                            false
                        );

                        let node;
                        while (node = walker.nextNode()) {
                            const text = node.nodeValue;
                            const regex = new RegExp(searchTerm, 'gi');
                            let match;
                            let lastIndex = 0;

                            while ((match = regex.exec(text)) !== null) {
                                const matchStart = match.index;
                                const matchEnd = matchStart + match[0].length;

                                const span = document.createElement('span');
                                span.className = 'search-highlight';
                                span.textContent = match[0];

                                const replacement = document.createElement('span');
                                replacement.appendChild(document.createTextNode(text.slice(lastIndex, matchStart)));
                                replacement.appendChild(span);

                                node.parentNode.insertBefore(replacement, node);
                                lastIndex = matchEnd;
                                searchMatches.push(span);
                            }

                            if (lastIndex > 0) {
                                node.parentNode.insertBefore(document.createTextNode(text.slice(lastIndex)), node);
                                node.parentNode.removeChild(node);
                            }
                        }

                        chapter.style.display = searchMatches.length > 0 ? 'block' : 'none';
                    });

                    currentMatchIndex = -1;
                    updateNavigationButtons();
                }

                function jumpToMatch(index) {
                    if (searchMatches.length === 0 || index < 0 || index >= searchMatches.length) {
                        return;
                    }

                    currentMatchIndex = index;
                    const match = searchMatches[index];
                    match.scrollIntoView({ behavior: 'smooth', block: 'center' });

                    // Highlight the current match
                    match.style.outline = '2px solid #ff5722';
                    setTimeout(() => {
                        match.style.outline = '';
                    }, 1500);

                    updateNavigationButtons();
                }

                function updateNavigationButtons() {
                    const prevBtn = document.getElementById('searchPrevBtn');
                    const nextBtn = document.getElementById('searchNextBtn');
                    const counter = document.getElementById('searchCounter');

                    if (prevBtn && nextBtn && counter) {
                        prevBtn.disabled = currentMatchIndex <= 0;
                        nextBtn.disabled = currentMatchIndex >= searchMatches.length - 1;
                        counter.textContent = searchMatches.length > 0 ? `${currentMatchIndex + 1} of ${searchMatches.length}` : '0 matches';
                    }
                }

                // Setup navigation buttons
                document.getElementById('searchPrevBtn').addEventListener('click', function () {
                    if (currentMatchIndex > 0) {
                        jumpToMatch(currentMatchIndex - 1);
                    }
                });

                document.getElementById('searchNextBtn').addEventListener('click', function () {
                    if (currentMatchIndex < searchMatches.length - 1) {
                        jumpToMatch(currentMatchIndex + 1);
                    }
                });

                // Trigger search on input
                document.getElementById('searchInput').addEventListener('input', function (e) {
                    const searchTerm = e.target.value;
                    highlightText(searchTerm);
                });

                // Close search box when clicking outside
                document.addEventListener('click', function (e) {
                    const searchBox = document.getElementById('searchBox');
                    const searchBtn = document.getElementById('searchBtn');
                    if (!searchBox.contains(e.target) && !searchBtn.contains(e.target) && searchBox.style.display === 'block') {
                        searchBox.style.display = 'none';
                        document.getElementById('searchNav').style.display = 'none';
                    }
                });
            }
        });

        // Process MathJax content in solutions
        document.addEventListener('DOMContentLoaded', function() {
            // Expand all MathJax content after rendering
            if (window.MathJax) {
                MathJax.startup.promise.then(() => {
                    // Force reprocessing of MathJax in collapsible content
                    document.querySelectorAll('.solution-text').forEach(element => {
                        MathJax.typesetPromise([element]).catch(function (err) {
                            console.error('MathJax error:', err);
                        });
                    });
                });
            }
        });
    </script>
</body>
</html>