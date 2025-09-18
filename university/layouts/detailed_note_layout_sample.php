<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter Navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- style containing  -->
    <style>
        /* General styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        /* Dark mode styles */
        .dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        /* Chapter container styles */
        #chapter_1 {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .dark-mode #chapter_1 {
            background: #1e1e1e;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        /* Heading styles */
        h1 {
            text-align: center;
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 20px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            transition: all 0.3s ease;
        }

        .dark-mode h1 {
            color: #bb86fc;
            border-bottom: 2px solid #3498db;
        }

        h2 {
            font-size: 20px;
            margin-top: 25px;
            color: #2980b9;
            padding-left: 5px;
            border-left: 4px solid #3498db;
            transition: all 0.3s ease;
        }

        .dark-mode h2 {
            color: #03dac6;
        }

        h3 {
            font-size: 18px;
            color: #16a085;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .dark-mode h3 {
            color: #00e676;
        }

        /* Image styles */
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 15px 0;
            border: 1px solid #eee;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .dark-mode img {
            border: 1px solid #333;
        }

        .image-caption {
            font-style: italic;
            text-align: center;
            margin-top: -10px;
            margin-bottom: 20px;
            color: #7f8c8d;
            font-size: 0.9em;
            transition: all 0.3s ease;
        }

        .dark-mode .image-caption {
            color: #90a4ae;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
            transition: all 0.3s ease;
        }

        .dark-mode table {
            border: 1px solid #333;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            transition: all 0.3s ease;
        }

        .dark-mode th,
        .dark-mode td {
            border: 1px solid #333;
        }

        th {
            background-color: #f2f2f2;
            transition: all 0.3s ease;
        }

        .dark-mode th {
            background-color: #2d2d2d;
        }

        /* Definition box styles */
        .definition {
            background: #f8f9fa;
            padding: 12px;
            border-radius: 4px;
            margin: 10px 0;
            border-left: 3px solid #3498db;
            transition: all 0.3s ease;
        }

        .dark-mode .definition {
            background: #2d2d2d;
            border-left: 3px solid #03dac6;
        }

        /* Highlight styles */
        .highlight {
            background: #fffde7;
            padding: 2px 5px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .dark-mode .highlight {
            background: #333;
        }

        /* List styles */
        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 8px;
        }

        /* TOC styles */
        #toc {
            background: #eef7ff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid #d6e9ff;
            transition: all 0.3s ease;
        }

        .dark-mode #toc {
            background: #2d2d2d;
            border: 1px solid #333;
        }

        #toc ul {
            list-style-type: none;
            padding: 0;
        }

        #toc li {
            margin-bottom: 8px;
        }

        #toc a {
            text-decoration: none;
            color: #2980b9;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .dark-mode #toc a {
            color: #03dac6;
        }

        #toc a:hover {
            text-decoration: underline;
        }

        /* Code block styles */
        code {
            background-color: #f0f0f0;
            padding: 2px 4px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
            transition: all 0.3s ease;
        }

        .dark-mode code {
            background-color: #333;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            body {
                font-size: 14px;
                padding: 10px;
            }

            h1 {
                font-size: 18px;
            }

            h2 {
                font-size: 16px;
                padding-left: 3px;
            }

            h3 {
                font-size: 14px;
            }

            #chapter_1 {
                padding: 10px;
            }

            #toc {
                padding: 10px;
            }
        }

        /* Floating Navigation Styles */
        #nav-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(90deg, #8BC34A, #FFC107);
            color: #000;
            padding: 10px 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            transition: background 0.3s ease;
        }

        #nav-header ul {
            list-style: none;
            display: flex;
            gap: 5px;
            margin: 0;
            padding: 0;
        }

        #nav-header li {
            margin: 0;
            padding: 0;
        }

        #nav-header button {
            display: block;
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
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #nav-header button:hover {
            background: rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        #nav-header button i {
            font-size: 1.2em;
        }

        /* Search box styling */
        #searchBox {
            position: fixed;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1001;
            display: none;
            transition: all 0.3s ease;
        }

        .dark-mode #searchBox {
            background: #1e1e1e;
            color: #e0e0e0;
        }

        #searchBox input {
            width: 300px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .dark-mode #searchBox input {
            background: #2d2d2d;
            color: #e0e0e0;
            border: 1px solid #3d3d3d;
        }

        /* Content container to prevent content from being hidden behind nav */
        .content-container {
            margin-top: 60px;
            padding: 20px;
        }

        /* Responsive design for mobile */
        @media (max-width: 768px) {
            #nav-header {
                padding: 8px 0;
            }

            #nav-header ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            #nav-header button {
                padding: 6px 8px;
                font-size: 14px;
                min-width: 35px;
            }

            #searchBox {
                width: 90%;
                left: 5%;
            }

            #searchBox input {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            #nav-header {
                padding: 6px 0;
            }

            #nav-header button {
                padding: 5px 6px;
                font-size: 12px;
                min-width: 30px;
            }
        }
    </style>

</head>

<body>
    <!-- Floating Three-Line Navigation -->
    <div id="nav-header">
        <ul>
            <li><button id="fullScreenBtn" title="Full Screen"><i class="fas fa-expand"></i></button></li>
            <li><button id="darkModeBtn" title="Dark Mode"><i class="fas fa-moon"></i></button></li>
            <li><button id="searchBtn" title="Search"><i class="fas fa-search"></i></button></li>
            <li><a href="#chapter_1">Ch1</a></li>
            <li><a href="#chapter_2">Ch2</a></li>
            <li><a href="#chapter_x">Ch3</a></li>

        </ul>
    </div>

    <!-- Search Box -->
    <div id="searchBox">
        <input type="text" placeholder="Search chapters..." id="searchInput">
    </div>

    <!-- Content container to prevent content from being hidden behind nav -->
    <div class="content-container">
        <!-- Chapter containers - only the IDs as requested -->
        <div id="chapter_1" class="chapter-container">
            <h1 class="chapter-title">Chapter 1: </h1>
            <!-- Content for Chapter 1 would go here -->
        </div>

        <div id="chapter_2" class="chapter-container">
            <h1 class="chapter-title">Chapter 2: </h1>
            <!-- Content for Chapter 2 would go here -->
        </div>

        <div id="chapter_x" class="chapter-container">
            <h1 class="chapter-title">Chapter x: </h1>
            <!-- Content for Chapter 3 would go here -->
        </div>
    </div>
    </div>

    <script>
        // Full Screen functionality
        document.getElementById('fullScreenBtn').addEventListener('click', function () {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        });

        // Dark Mode functionality
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

        // Search functionality
        document.getElementById('searchBtn').addEventListener('click', function () {
            const searchBox = document.getElementById('searchBox');
            searchBox.style.display = searchBox.style.display === 'none' ? 'block' : 'none';
        });

        // Search input functionality
        document.getElementById('searchInput').addEventListener('input', function (e) {
            const searchTerm = e.target.value.toLowerCase();
            const chapters = document.querySelectorAll('.chapter-container');

            chapters.forEach(chapter => {
                const title = chapter.querySelector('.chapter-title').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    chapter.style.display = 'block';
                } else {
                    chapter.style.display = 'none';
                }
            });
        });

        // Close search box when clicking outside
        document.addEventListener('click', function (e) {
            const searchBox = document.getElementById('searchBox');
            const searchBtn = document.getElementById('searchBtn');

            if (!searchBox.contains(e.target) && !searchBtn.contains(e.target)) {
                searchBox.style.display = 'none';
            }
        });
    </script>
</body>

</html>
