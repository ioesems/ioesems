<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
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
            padding: 20px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        /* ========== CHAPTER CONTAINER STYLES ========== */
        div[id^="chapter_"] {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .dark-mode div[id^="chapter_"] {
            background: #1e1e1e;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        /* ========== HEADING STYLES ========== */
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

        /* ========== IMAGE & CAPTION ========== */
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

        /* ========== TABLE STYLES ========== */
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

        /* ========== DEFINITION BOX ========== */
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

        /* ========== HIGHLIGHT ========== */
        .highlight {
            background: #fffde7;
            padding: 2px 5px;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .dark-mode .highlight {
            background: #333;
        }

        /* ========== LIST ========== */
        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 8px;
        }

        /* ========== TOC ========== */
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

        /* ========== CODE ========== */
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

        /* ========== RESPONSIVE ========== */
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

            div[id^="chapter_"] {
                padding: 10px;
            }

            #toc {
                padding: 10px;
            }
        }

        /* ========== FLOATING NAVIGATION ========== */
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
            flex-wrap: wrap;
            justify-content: center;
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
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1001;
            display: none;
            transition: all 0.3s ease;
            width: 300px;
            max-width: 90vw;
        }

        .dark-mode #searchBox {
            background: #1e1e1e;
            color: #e0e0e0;
        }

        #searchBox input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .dark-mode #searchBox input {
            background: #2d2d2d;
            color: #e0e0e0;
            border: 1px solid #3d3d3d;
        }

        /* Responsive design for mobile */
        @media (max-width: 768px) {
            #searchBox {
                width: auto;
                left: 5%;
                right: 5%;
                transform: none;
                max-width: 90vw;
            }

            #searchBox input {
                width: 100%;
            }
        }

        /* ========== CONTENT CONTAINER ========== */
        .content-container {
            margin-top: 60px;
            padding: 20px;
        }

        /* ========== MOBILE RESPONSIVE ========== */
        @media (max-width: 768px) {
            #nav-header {
                padding: 8px 0;
            }

            #nav-header ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            #nav-header button,
            #nav-header a {
                padding: 6px 8px;
                font-size: 14px;
                min-width: 35px;
            }
        }

        @media (max-width: 480px) {
            #nav-header {
                padding: 6px 0;
            }

            #nav-header button,
            #nav-header a {
                padding: 5px 6px;
                font-size: 12px;
                min-width: 30px;
            }
        }

        /* ========== SEARCH HIGHLIGHT ========== */
        .search-highlight {
            background-color: #ffeb3b !important;
            padding: 0 2px !important;
            border-radius: 3px !important;
            position: relative;
        }

        /* ========== SEARCH NAVIGATION ========== */
        #searchNav {
            margin-top: 8px;
            text-align: center;
        }

        #searchNav button {
            margin: 0 4px;
            padding: 4px 8px;
            font-size: 14px;
            cursor: pointer;
            border: 1px solid #ccc;
            background: white;
            border-radius: 4px;
        }

        #searchNav button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        #searchCounter {
            margin: 0 8px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
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
        <input type="text" id="searchInput" placeholder="Search chapters...">
        <div id="searchNav" style="margin-top: 8px; text-align: center; display: none;">
            <button id="searchPrevBtn" title="Previous Match" style="margin-right: 4px; padding: 4px 8px; font-size: 14px;">↑</button>
            <span id="searchCounter" style="margin: 0 8px; font-size: 14px;">0 matches</span>
            <button id="searchNextBtn" title="Next Match" style="margin-left: 4px; padding: 4px 8px; font-size: 14px;">↓</button>
        </div>
    </div>

    <!-- Content Container -->
    <div class="content-container">
        <!-- Chapter content from detailed_note.php will be rendered here -->

        <script>
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
                    const chapterDivs = document.querySelectorAll('div[id^="chapter_"]');
                    const navPlaceholder = document.getElementById('dynamic-chapter-links');

                    chapterDivs.forEach(div => {
                        const id = div.id;
                        const match = id.match(/^chapter_(\d+)$/);
                        if (match) {
                            const chapterNum = match[1];
                            const linkItem = document.createElement('li');
                            linkItem.innerHTML = `<a href="#${id}" title="Go to Chapter ${chapterNum}">Ch${chapterNum}</a>`;
                            navPlaceholder.appendChild(linkItem);
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
                            document.querySelectorAll('div[id^="chapter_"]').forEach(chapter => {
                                chapter.style.display = 'block';
                            });
                            searchMatches = [];
                            updateNavigationButtons();
                            return;
                        }

                        searchMatches = [];
                        const chapters = document.querySelectorAll('div[id^="chapter_"]');

                        chapters.forEach(chapter => {
                            // Skip MathJax rendered elements to avoid breaking equations
                            const walker = document.createTreeWalker(
                                chapter,
                                NodeFilter.SHOW_TEXT,
                                {
                                    acceptNode: function(node) {
                                        // Skip text inside MathJax containers
                                        if (node.parentNode.closest('.MathJax') || 
                                            node.parentNode.closest('.math') ||
                                            node.parentNode.closest('[class*="MJX"]')) {
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
                                    span.style.backgroundColor = '#ffeb3b';
                                    span.style.padding = '0 2px';
                                    span.style.borderRadius = '3px';
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

                        match.style.outline = '2px solid #ff5722';
                        setTimeout(() => {
                            match.style.outline = '';
                        }, 1000);

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
                        if (!searchBox.contains(e.target) && !searchBtn.contains(e.target)) {
                            searchBox.style.display = 'none';
                            document.getElementById('searchNav').style.display = 'none';
                        }
                    });
                }
            });
        </script>
    </div>
</body>
</html>