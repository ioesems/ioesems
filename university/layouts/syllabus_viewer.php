<?php
// This is a reusable module for displaying syllabus content
// It expects $pageTitle, $subtitle, $courseObjectives, $topics, $tutorials, $practicals, $examPattern, and $references to be defined before inclusion

if (!isset($pageTitle)) $pageTitle = "Electromagnetics Syllabus";
if (!isset($subtitle)) $subtitle = "Comprehensive Engineering Course Outline";
if (!isset($courseObjectives)) $courseObjectives = "";
if (!isset($topics)) $topics = [];
if (!isset($tutorials)) $tutorials = [];
if (!isset($practicals)) $practicals = [];
if (!isset($examPattern)) $examPattern = [];
if (!isset($references)) $references = [];
if (!isset($tutorialHours)) $tutorialHours = 15;
if (!isset($practicalHours)) $practicalHours = 15;
if (!isset($totalHours)) $totalHours = 45;
if (!isset($totalMarks)) $totalMarks = 60;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for <?php echo htmlspecialchars($pageTitle); ?> covering key concepts for engineering students.">
    <meta name="keywords" content="<?php echo strtolower(str_replace(' ', '-', $pageTitle)); ?>, engineering syllabus, course outline, engineering curriculum">
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

        /* ========== ORIGINAL SYLLABUS STYLES ========== */
        :root {
            --primary-green: #228B22;
            --secondary-green: #32CD32;
            --accent-yellow: #FFD700;
            --light-yellow: #FFFFE0;
            --dark-text: #333333;
            --light-text: #FFFFFF;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: var(--light-text);
            padding: 25px 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 0;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--accent-yellow);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }
        
        section {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-left: 4px solid var(--accent-yellow);
            transition: transform 0.3s ease;
        }
        
        .dark-mode section {
            background: #1e1e1e;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        section:hover {
            transform: translateY(-5px);
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 8px;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }
        
        .dark-mode h2 {
            color: #03dac6;
        }
        
        h3 {
            color: var(--secondary-green);
            margin-top: 15px;
            font-size: 1.4rem;
        }
        
        .dark-mode h3 {
            color: #bb86fc;
        }
        
        ul, ol {
            padding-left: 20px;
            margin: 10px 0;
        }
        
        li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }
        
        li:before {
            content: "•";
            color: var(--accent-yellow);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .dark-mode li:before {
            color: #ffd700;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .dark-mode th, .dark-mode td {
            border-bottom: 1px solid #333;
        }
        
        th {
            background-color: var(--primary-green);
            color: white;
        }
        
        .dark-mode th {
            background-color: #228B22;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .dark-mode tr:hover {
            background-color: #2d2d2d;
        }
        
        .highlight {
            background-color: var(--accent-yellow);
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .dark-mode .highlight {
            background-color: #ffd700;
        }
        
        .references {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 15px;
            border-radius: 5px;
        }
        
        .dark-mode .references {
            background-color: #2d2d2d;
            border: 1px solid #3d3d3d;
        }
        
        .reference-item {
            margin-bottom: 8px;
            padding-left: 15px;
            position: relative;
        }
        
        .reference-item:before {
            content: "•";
            color: var(--secondary-green);
            position: absolute;
            left: 0;
        }
        
        .dark-mode .reference-item:before {
            color: #32CD32;
        }
        
        footer {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            border-radius: 8px;
        }
        
        .dark-mode footer {
            background: linear-gradient(135deg, #228B22, #32CD32);
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

        /* ========== PRINT STYLES ========== */
        @media print {
            .navbar-toggle, .sidebar, #nav-header, #searchBox {
                display: none !important;
            }
            
            .content {
                margin-left: 0 !important;
                padding: 0 !important;
            }
            
            body {
                background: white !important;
                color: black !important;
            }
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
            
            main {
                padding: 0 10px;
            }
            
            header {
                padding: 20px 15px;
            }
            
            h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            section {
                padding: 15px;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            h3 {
                font-size: 1.2rem;
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

        /* ========== BACK TO TOP BUTTON ========== */
        #backToTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary-green);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 24px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }

        #backToTop.show {
            opacity: 1;
            visibility: visible;
        }

        .dark-mode #backToTop {
            background: #228B22;
        }
    </style>
</head>
<body>
    <!-- Mobile Navigation Toggle -->
    <div class="navbar-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i> Navigation
    </div>

    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
        <h2>Syllabus Sections</h2>
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
            <li><button id="printBtn" title="Print"><i class="fas fa-print"></i></button></li>
            <span id="dynamic-chapter-links"></span>
        </ul>
    </div>

    <!-- Search Box -->
    <div id="searchBox">
        <input type="text" id="searchInput" placeholder="Search syllabus content...">
        <div id="searchNav">
            <button id="searchPrevBtn" title="Previous Match">↑ Previous</button>
            <span id="searchCounter">0 matches</span>
            <button id="searchNextBtn" title="Next Match">↓ Next</button>
        </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#" id="backToTop" title="Back to Top"><i class="fas fa-arrow-up"></i></a>

    <!-- Main Content -->
    <div class="content">
        <header>
            <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
            <div class="subtitle"><?php echo htmlspecialchars($subtitle); ?></div>
        </header>
        
        <main>
            <section id="course-objectives">
                <h2>Course Objectives</h2>
                <p><?php echo nl2br(htmlspecialchars($courseObjectives)); ?></p>
            </section>
            
            <section id="topics-covered">
                <h2>Topics Covered</h2>
                <?php foreach ($topics as $topic): ?>
                    <h3><?php echo htmlspecialchars($topic['title']); ?></h3>
                    <ul>
                        <?php foreach ($topic['items'] as $item): ?>
                            <li><?php echo htmlspecialchars($item); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
            </section>
            
            <section id="tutorials">
                <h2>Tutorial Details (<?php echo $tutorialHours; ?> hours)</h2>
                <ul>
                    <?php foreach ($tutorials as $tutorial): ?>
                        <li><?php echo htmlspecialchars($tutorial); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            
            <section id="practicals">
                <h2>Practical Sessions (<?php echo $practicalHours; ?> hours)</h2>
                <ul>
                    <?php foreach ($practicals as $practical): ?>
                        <li><?php echo htmlspecialchars($practical); ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
            
            <section id="exam-pattern">
                <h2>Final Exam Pattern</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Chapter</th>
                            <th>Hours</th>
                            <th>Marks Distribution</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($examPattern as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['chapter']); ?></td>
                                <td><?php echo htmlspecialchars($row['hours']); ?></td>
                                <td><?php echo htmlspecialchars($row['marks']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong><?php echo $totalHours; ?></strong></td>
                            <td><strong><?php echo $totalMarks; ?></strong></td>
                        </tr>
                    </tbody>
                </table>
                <p class="highlight">Note: There may be minor deviation in marks distribution.</p>
            </section>
            
            <section class="references" id="references">
                <h2>References</h2>
                <?php foreach ($references as $reference): ?>
                    <div class="reference-item"><?php echo htmlspecialchars($reference); ?></div>
                <?php endforeach; ?>
            </section>
        </main>
        
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Engineering Curriculum | <?php echo htmlspecialchars($pageTitle); ?></p>
            <p>Designed for students pursuing engineering education</p>
        </footer>
    </div>

    <script>
        // ========== WAIT FOR MathJax TO FINISH RENDERING ========== //
        document.addEventListener('DOMContentLoaded', function () {
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
                const sections = [
                    { id: 'course-objectives', title: 'Course Objectives' },
                    { id: 'topics-covered', title: 'Topics Covered' },
                    { id: 'tutorials', title: 'Tutorials' },
                    { id: 'practicals', title: 'Practical Sessions' },
                    { id: 'exam-pattern', title: 'Exam Pattern' },
                    { id: 'references', title: 'References' }
                ];
                
                const navPlaceholder = document.getElementById('dynamic-chapter-links');
                const sidebarPlaceholder = document.getElementById('chapter-links');

                sections.forEach(section => {
                    // Add to floating nav
                    const navLinkItem = document.createElement('li');
                    navLinkItem.innerHTML = `<a href="#${section.id}" title="${section.title}">${section.title.split(' ')[0]}</a>`;
                    navPlaceholder.appendChild(navLinkItem);
                    
                    // Add to sidebar
                    const sidebarLinkItem = document.createElement('li');
                    sidebarLinkItem.innerHTML = `<a href="#${section.id}">${section.title}</a>`;
                    sidebarPlaceholder.appendChild(sidebarLinkItem);
                });

                // ========== DARK MODE ========== //
                document.getElementById('darkModeBtn').addEventListener('click', function () {
                    document.body.classList.toggle('dark-mode');
                    const icon = this.querySelector('i');
                    if (document.body.classList.contains('dark-mode')) {
                        icon.classList.remove('fa-moon');
                        icon.classList.add('fa-sun');
                        localStorage.setItem('darkMode', 'enabled');
                    } else {
                        icon.classList.remove('fa-sun');
                        icon.classList.add('fa-moon');
                        localStorage.setItem('darkMode', 'disabled');
                    }
                });

                // Check for saved dark mode preference
                if (localStorage.getItem('darkMode') === 'enabled') {
                    document.body.classList.add('dark-mode');
                    document.getElementById('darkModeBtn').querySelector('i').classList.replace('fa-moon', 'fa-sun');
                }

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
                        document.documentElement.requestFullscreen().catch(err => {
                            alert(`Error attempting to enable full-screen mode: ${err.message}`);
                        });
                    } else {
                        if (document.exitFullscreen) {
                            document.exitFullscreen();
                        }
                    }
                });

                // ========== PRINT ========== //
                document.getElementById('printBtn').addEventListener('click', function () {
                    window.print();
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

                // ========== BACK TO TOP ========== //
                const backToTopButton = document.getElementById('backToTop');
                
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 300) {
                        backToTopButton.classList.add('show');
                    } else {
                        backToTopButton.classList.remove('show');
                    }
                });
                
                backToTopButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({top: 0, behavior: 'smooth'});
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
                        document.querySelectorAll('section').forEach(section => {
                            section.style.display = 'block';
                        });
                        searchMatches = [];
                        updateNavigationButtons();
                        return;
                    }

                    searchMatches = [];
                    const sections = document.querySelectorAll('section');

                    sections.forEach(section => {
                        // Skip elements that shouldn't be searched
                        const walker = document.createTreeWalker(
                            section,
                            NodeFilter.SHOW_TEXT,
                            {
                                acceptNode: function(node) {
                                    // Skip text inside certain elements
                                    if (node.parentNode.closest('.MathJax') || 
                                        node.parentNode.closest('.math') ||
                                        node.parentNode.closest('[class*="MJX"]') ||
                                        node.parentNode.classList.contains('highlight') ||
                                        node.parentNode.tagName === 'SCRIPT' ||
                                        node.parentNode.tagName === 'STYLE') {
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

                        section.style.display = searchMatches.length > 0 ? 'block' : 'none';
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

                // Handle keyboard shortcuts
                document.addEventListener('keydown', function(e) {
                    // ESC to close search
                    if (e.key === 'Escape') {
                        const searchBox = document.getElementById('searchBox');
                        if (searchBox.style.display === 'block') {
                            searchBox.style.display = 'none';
                            document.getElementById('searchNav').style.display = 'none';
                        }
                    }
                    
                    // Ctrl+F to open search
                    if (e.ctrlKey && e.key === 'f') {
                        e.preventDefault();
                        const searchBtn = document.getElementById('searchBtn');
                        searchBtn.click();
                    }
                });
            }
        });
    </script>
</body>
</html>