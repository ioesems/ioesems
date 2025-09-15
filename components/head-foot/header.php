<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
define('ROOT_PATH', '/std/');
$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IOESEMS - Educational Resources for IOE Students</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="icon" type="image/png" href="<?= ROOT_PATH ?>/images/logo.png">

<style>
  /* Body */
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: background-color 0.3s, color 0.3s;
    background: linear-gradient(to right, #f9ffe5, #d8f78c); /* Eye-friendly yellow-green gradient */
    color: #1b3a1a;
    margin: 0;
    padding: 0;
  }
  body.dark-mode {
    background: #121212;
    color: #a8e063;
  }

  /* Navbar */
  .navbar {
    transition: top 0.3s ease-in-out, background-color 0.3s;
    background: linear-gradient(135deg, #b6e35b 0%, #57a600 100%);
    font-weight: 600;
  }
  .navbar .navbar-brand span {
    font-size: 1.5rem;
    font-weight: bold;
    color: #ffffff;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }
  .navbar .nav-link {
    color: #fff !important;
    font-weight: 500;
    margin: 0 10px;
    transition: color 0.3s, background 0.3s;
  }
  .navbar .nav-link:hover {
    color: #000;
    background: #e6ff99;
    border-radius: 8px;
    padding: 5px 10px;
  }

  /* Dropdown Menu */
  .dropdown-menu {
    background: linear-gradient(180deg, #d8f78c 0%, #b6e35b 100%);
  }
  .dropdown-item {
    color: #1b3a1a !important;
    font-weight: 500;
    transition: background 0.3s, color 0.3s;
  }
  .dropdown-item:hover {
    background: #a8e063;
    color: #fff !important;
  }

  /* Search Feature Styles */
  .search-container {
    position: relative;
    display: flex;
    align-items: center;
    margin-right: 15px;
  }
  
  .search-input {
    width: 250px;
    padding: 8px 40px 8px 15px;
    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 25px;
    background: rgba(255,255,255,0.9);
    color: #1b3a1a;
    font-size: 14px;
    transition: all 0.3s ease;
  }
  
  .search-input:focus {
    outline: none;
    width: 300px;
    background: rgba(255,255,255,1);
    border-color: #a8e063;
    box-shadow: 0 0 10px rgba(168, 224, 99, 0.3);
  }
  
  .search-input::placeholder {
    color: #666;
  }
  
  .search-btn {
    position: absolute;
    right: 5px;
    background: linear-gradient(135deg, #a8e063 0%, #56ab2f 100%);
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  
  .search-btn:hover {
    background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
    transform: scale(1.1);
  }
  
  .category-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 2px solid #a8e063;
    border-top: none;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    z-index: 1000;
    display: none;
    max-height: 300px;
    overflow-y: auto;
  }
  
  .category-dropdown.show {
    display: block;
  }
  
  .category-item {
    padding: 12px 15px;
    cursor: pointer;
    border-bottom: 1px solid #f0f0f0;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
  }
  
  .category-item:hover {
    background: linear-gradient(135deg, #f0f9e6 0%, #e8f5d3 100%);
    color: #1b3a1a;
  }
  
  .category-item i {
    margin-right: 10px;
    color: #a8e063;
    width: 16px;
  }
  
  .search-results {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border: 2px solid #a8e063;
    border-top: none;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    z-index: 1000;
    display: none;
    max-height: 400px;
    overflow-y: auto;
  }
  
  .search-results.show {
    display: block;
  }
  
  .search-result-item {
    padding: 12px 15px;
    cursor: pointer;
    border-bottom: 1px solid #f0f0f0;
    transition: all 0.3s ease;
  }
  
  .search-result-item:hover {
    background: linear-gradient(135deg, #f0f9e6 0%, #e8f5d3 100%);
  }
  
  .search-result-title {
    font-weight: 600;
    color: #1b3a1a;
    margin-bottom: 3px;
  }
  
  .search-result-category {
    font-size: 12px;
    color: #666;
    background: #e8f5d3;
    padding: 2px 8px;
    border-radius: 10px;
    display: inline-block;
  }

  /* Dark Mode Button */
  .btn-dark-mode {
    background: linear-gradient(135deg, #a8e063 0%, #56ab2f 100%);
    color: #fff;
    border-radius: 25px;
    border: none;
    padding: 8px 16px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .btn-dark-mode:hover {
    background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
    color: #000;
  }

  /* Main Content Padding (FIX FOR FIXED NAVBAR) */
  main {
    padding-top: 80px; /* Matches navbar height */
  }

  /* Mobile Search Styles */
  .mobile-search {
    width: 100%;
    margin-top: 10px;
  }
  
  .mobile-search .search-input {
    width: 100%;
  }
  
  .mobile-search .search-input:focus {
    width: 100%;
  }

  /* Responsive adjustments */
  @media (max-width: 1200px) {
    .search-input {
      width: 200px;
    }
    .search-input:focus {
      width: 240px;
    }
  }
  
  @media (max-width: 992px) {
    .search-container {
      display: none;
    }
  }
  
  @media (max-width: 767px) {
    .navbar .nav-link { margin: 5px 0; }
    .btn-dark-mode { width: 100%; margin-top: 5px; }
  }
</style>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-md fixed-top shadow">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="<?= ROOT_PATH ?>index.php">
      <img src="<?= ROOT_PATH ?>images/logo.png" alt="Logo" style="height:50px;width:50px;margin-right:10px;">
      <span>IOESEMS</span>
    </a>

    <!-- Desktop/Laptop links -->
    <div class="d-none d-md-flex align-items-center">
      <a href="<?= ROOT_PATH ?>index.php" class="nav-link">Home</a>

      <!-- IOE Dropdown -->
      <div class="dropdown mx-2">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">IOE</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/syllabus.php">Syllabus</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/pyq.php">Past Questions</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/lab_report.php">Lab Reports</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/assignment.php">Assignments</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/note.php">Notes</a></li>
        </ul>
      </div>

      <!-- +2 Dropdown -->
      <div class="dropdown mx-2">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">+2</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./components/syllabus.php">NEB-11</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./components/past-question.php">NEB-12</a></li>
        </ul>
      </div>

      <a href="<?= ROOT_PATH ?>./components/error/page-under-construction.php" class="nav-link">IOE Entrance</a>
      <a href="<?= ROOT_PATH ?>ai/index.php" class="nav-link">AI Assistant</a>
      <a href="<?= ROOT_PATH ?>#about/index.php" class="nav-link">About</a>
      <a href="<?= ROOT_PATH ?>#contact/index.php" class="nav-link">Contact</a>

      <!-- Search Feature -->
      <div class="search-container">
        <input type="text" class="search-input" id="searchInput" placeholder="Search resources..." autocomplete="off">
        <button class="search-btn" id="searchBtn"><i class="fas fa-search"></i></button>
        
        <!-- Category Dropdown -->
        <div class="category-dropdown" id="categoryDropdown">
          <div class="category-item" data-category="syllabus" data-url="<?= ROOT_PATH ?>./file/user/syllabus.php">
            <i class="fas fa-book"></i> Syllabus
          </div>
          <div class="category-item" data-category="pyq" data-url="<?= ROOT_PATH ?>./file/user/pyq.php">
            <i class="fas fa-question-circle"></i> Past Questions
          </div>
          <div class="category-item" data-category="lab_report" data-url="<?= ROOT_PATH ?>./file/user/lab_report.php">
            <i class="fas fa-flask"></i> Lab Reports
          </div>
          <div class="category-item" data-category="assignment" data-url="<?= ROOT_PATH ?>./file/user/assignment.php">
            <i class="fas fa-tasks"></i> Assignments
          </div>
          <div class="category-item" data-category="note" data-url="<?= ROOT_PATH ?>./file/user/note.php">
            <i class="fas fa-sticky-note"></i> Notes
          </div>
          <div class="category-item" data-category="neb11" data-url="<?= ROOT_PATH ?>./components/syllabus.php">
            <i class="fas fa-graduation-cap"></i> NEB-11
          </div>
          <div class="category-item" data-category="neb12" data-url="<?= ROOT_PATH ?>./components/past-question.php">
            <i class="fas fa-graduation-cap"></i> NEB-12
          </div>
          <div class="category-item" data-category="entrance" data-url="<?= ROOT_PATH ?>./components/error/page-under-construction.php">
            <i class="fas fa-door-open"></i> IOE Entrance
          </div>
          <div class="category-item" data-category="ai" data-url="<?= ROOT_PATH ?>ai/index.php">
            <i class="fas fa-robot"></i> AI Assistant
          </div>
        </div>
        
        <!-- Search Results -->
        <div class="search-results" id="searchResults"></div>
      </div>

      <button class="btn btn-dark-mode mx-2" id="darkModeToggle"><i class="fas fa-moon"></i></button>

      <?php if ($isLoggedIn): ?>
      <button class="btn btn-danger mx-2" onclick="window.location.href='<?= ROOT_PATH ?>components/login/logout.php'">Logout</button>
      <?php else: ?>
      <button class="btn btn-success mx-2" onclick="window.location.href='<?= ROOT_PATH ?>components/login/index.php'">Login</button>
      <?php endif; ?>
    </div>

    <!-- Mobile toggle -->
    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<!-- Offcanvas for mobile -->
<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <!-- Mobile Search -->
    <div class="mobile-search mb-3">
      <div class="search-container">
        <input type="text" class="search-input" id="mobileSearchInput" placeholder="Search resources..." autocomplete="off">
        <button class="search-btn" id="mobileSearchBtn"><i class="fas fa-search"></i></button>
        
        <!-- Mobile Category Dropdown -->
        <div class="category-dropdown" id="mobileCategoryDropdown">
          <div class="category-item" data-category="syllabus" data-url="<?= ROOT_PATH ?>./file/user/syllabus.php">
            <i class="fas fa-book"></i> Syllabus
          </div>
          <div class="category-item" data-category="pyq" data-url="<?= ROOT_PATH ?>./file/user/pyq.php">
            <i class="fas fa-question-circle"></i> Past Questions
          </div>
          <div class="category-item" data-category="lab_report" data-url="<?= ROOT_PATH ?>./file/user/lab_report.php">
            <i class="fas fa-flask"></i> Lab Reports
          </div>
          <div class="category-item" data-category="assignment" data-url="<?= ROOT_PATH ?>./file/user/assignment.php">
            <i class="fas fa-tasks"></i> Assignments
          </div>
          <div class="category-item" data-category="note" data-url="<?= ROOT_PATH ?>./file/user/note.php">
            <i class="fas fa-sticky-note"></i> Notes
          </div>
          <div class="category-item" data-category="neb11" data-url="<?= ROOT_PATH ?>./components/syllabus.php">
            <i class="fas fa-graduation-cap"></i> NEB-11
          </div>
          <div class="category-item" data-category="neb12" data-url="<?= ROOT_PATH ?>./components/past-question.php">
            <i class="fas fa-graduation-cap"></i> NEB-12
          </div>
          <div class="category-item" data-category="entrance" data-url="<?= ROOT_PATH ?>./components/error/page-under-construction.php">
            <i class="fas fa-door-open"></i> IOE Entrance
          </div>
          <div class="category-item" data-category="ai" data-url="<?= ROOT_PATH ?>ai/index.php">
            <i class="fas fa-robot"></i> AI Assistant
          </div>
        </div>
        
        <!-- Mobile Search Results -->
        <div class="search-results" id="mobileSearchResults"></div>
      </div>
    </div>
    
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link text-white" href="<?= ROOT_PATH ?>index.php">Home</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">IOE</a>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/syllabus.php">Syllabus</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/pyq.php">Past Questions</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/lab_report.php">Lab Reports</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/assignment.php">Assignments</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./file/user/note.php">Notes</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">+2</a>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./components/syllabus.php">NEB-11</a></li>
          <li><a class="dropdown-item" href="<?= ROOT_PATH ?>./components/past-question.php">NEB-12</a></li>
        </ul>
      </li>
      <li><a class="nav-link text-white" href="<?= ROOT_PATH ?>./components/error/page-under-construction.php">IOE Entrance</a></li>
      <li><a class="nav-link text-white" href="<?= ROOT_PATH ?>ai/index.php">AI Assistant</a></li>
      <li><a class="nav-link text-white" href="<?= ROOT_PATH ?>#about/index.php">About</a></li>
      <li><a class="nav-link text-white" href="<?= ROOT_PATH ?>#contact/index.php">Contact</a></li>
      <li class="nav-item mt-2"><button class="btn btn-dark-mode w-100" id="darkModeToggleMobile"><i class="fas fa-moon"></i> Dark Mode</button></li>
      <li class="nav-item mt-2">
        <?php if ($isLoggedIn): ?>
        <button class="btn btn-danger w-100" onclick="window.location.href='<?= ROOT_PATH ?>components/login/logout.php'">Logout</button>
        <?php else: ?>
        <button class="btn btn-success w-100" onclick="window.location.href='<?= ROOT_PATH ?>components/login/index.php'">Login</button>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Navbar hide/show on scroll
  let lastScrollTop = 0;
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    navbar.style.top = scrollTop > lastScrollTop ? "-80px" : "0";
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });

  // Dark mode toggle for both desktop and mobile
  const toggleButtons = [document.getElementById('darkModeToggle'), document.getElementById('darkModeToggleMobile')];
  toggleButtons.forEach(btn => btn?.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode') ? 'enabled' : 'disabled');
  }));
  if (localStorage.getItem('darkMode') === 'enabled') document.body.classList.add('dark-mode');

  // Search functionality
  const searchData = [
    { title: 'IOE Syllabus', category: 'Syllabus', url: '<?= ROOT_PATH ?>./file/user/syllabus.php', keywords: ['syllabus', 'ioe', 'curriculum', 'course'] },
    { title: 'Past Year Questions', category: 'Past Questions', url: '<?= ROOT_PATH ?>./file/user/pyq.php', keywords: ['pyq', 'questions', 'past', 'exam', 'previous'] },
    { title: 'Lab Reports', category: 'Lab Reports', url: '<?= ROOT_PATH ?>./file/user/lab_report.php', keywords: ['lab', 'report', 'practical', 'experiment'] },
    { title: 'Assignments', category: 'Assignments', url: '<?= ROOT_PATH ?>./file/user/assignment.php', keywords: ['assignment', 'homework', 'task'] },
    { title: 'Study Notes', category: 'Notes', url: '<?= ROOT_PATH ?>./file/user/note.php', keywords: ['notes', 'study', 'materials'] },
    { title: 'NEB Class 11', category: 'NEB-11', url: '<?= ROOT_PATH ?>./components/syllabus.php', keywords: ['neb', 'class 11', '+2', 'eleven'] },
    { title: 'NEB Class 12', category: 'NEB-12', url: '<?= ROOT_PATH ?>./components/past-question.php', keywords: ['neb', 'class 12', '+2', 'twelve'] },
    { title: 'IOE Entrance', category: 'IOE Entrance', url: '<?= ROOT_PATH ?>./components/error/page-under-construction.php', keywords: ['entrance', 'admission', 'test'] },
    { title: 'AI Assistant', category: 'AI Assistant', url: '<?= ROOT_PATH ?>ai/index.php', keywords: ['ai', 'assistant', 'help', 'chatbot'] }
  ];

  function initializeSearch(inputId, dropdownId, resultsId, btnId) {
    const searchInput = document.getElementById(inputId);
    const categoryDropdown = document.getElementById(dropdownId);
    const searchResults = document.getElementById(resultsId);
    const searchBtn = document.getElementById(btnId);

    if (!searchInput) return;

    // Show categories on focus (only if input is empty)
    searchInput.addEventListener('focus', () => {
      if (searchInput.value.trim() === '') {
        categoryDropdown.classList.add('show');
        searchResults.classList.remove('show');
      }
    });

    // Google-like search function
    function performGoogleLikeSearch(query) {
      const words = query.toLowerCase().split(/\s+/).filter(word => word.length > 0);
      
      if (words.length === 0) {
        categoryDropdown.classList.add('show');
        searchResults.classList.remove('show');
        return;
      }

      categoryDropdown.classList.remove('show');
      
      // Advanced scoring system for Google-like results
      const scoredResults = searchData.map(item => {
        let score = 0;
        const titleLower = item.title.toLowerCase();
        const categoryLower = item.category.toLowerCase();
        const keywordsLower = item.keywords.map(k => k.toLowerCase());
        
        words.forEach(word => {
          // Exact title match gets highest score
          if (titleLower.includes(word)) {
            score += titleLower === word ? 100 : (titleLower.startsWith(word) ? 50 : 20);
          }
          
          // Category match gets high score
          if (categoryLower.includes(word)) {
            score += categoryLower === word ? 80 : 30;
          }
          
          // Keywords match
          keywordsLower.forEach(keyword => {
            if (keyword.includes(word)) {
              score += keyword === word ? 60 : (keyword.startsWith(word) ? 25 : 10);
            }
          });
          
          // Partial matches in title (for better fuzzy search)
          if (word.length >= 3) {
            const regex = new RegExp(word.split('').join('.*'), 'i');
            if (regex.test(titleLower)) score += 5;
          }
        });
        
        // Boost score for multi-word matches
        if (words.length > 1) {
          const fullQuery = query.toLowerCase();
          if (titleLower.includes(fullQuery)) score += 40;
          if (keywordsLower.some(k => k.includes(fullQuery))) score += 20;
        }
        
        return { ...item, score };
      }).filter(item => item.score > 0)
        .sort((a, b) => b.score - a.score)
        .slice(0, 8); // Show top 8 results

      if (scoredResults.length > 0) {
        searchResults.innerHTML = scoredResults.map((item, index) => `
          <div class="search-result-item" onclick="window.location.href='${item.url}'" style="animation-delay: ${index * 0.05}s">
            <div class="search-result-title">${highlightMatch(item.title, query)}</div>
            <div class="search-result-category">${item.category}</div>
            ${item.score > 50 ? '<div style="font-size: 10px; color: #a8e063;">● Best Match</div>' : ''}
          </div>
        `).join('');
        searchResults.classList.add('show');
      } else {
        // Smart "Did you mean?" suggestions
        const suggestions = getSuggestions(query);
        const suggestionHTML = suggestions.length > 0 ? 
          `<div class="search-result-item"><div class="search-result-title" style="color: #666;">Did you mean: ${suggestions.join(', ')}?</div></div>` : '';
        
        searchResults.innerHTML = `
          <div class="search-result-item">
            <div class="search-result-title">No exact results found for "${query}"</div>
            <div style="font-size: 12px; color: #666; margin-top: 5px;">Try: syllabus, notes, pyq, assignments, lab reports</div>
          </div>
          ${suggestionHTML}
        `;
        searchResults.classList.add('show');
      }
    }

    // Highlight matching text in results
    function highlightMatch(text, query) {
      if (!query) return text;
      const words = query.split(/\s+/).filter(w => w.length > 0);
      let highlightedText = text;
      
      words.forEach(word => {
        const regex = new RegExp(`(${word})`, 'gi');
        highlightedText = highlightedText.replace(regex, '<span style="background: #a8e063; color: white; padding: 1px 3px; border-radius: 3px;">$1</span>');
      });
      
      return highlightedText;
    }

    // Smart suggestions for misspelled or partial words
    function getSuggestions(query) {
      const allKeywords = [...new Set(searchData.flatMap(item => item.keywords))];
      const queryLower = query.toLowerCase();
      
      return allKeywords.filter(keyword => 
        keyword.includes(queryLower) || 
        queryLower.includes(keyword.substring(0, 3)) ||
        getLevenshteinDistance(keyword, queryLower) <= 2
      ).slice(0, 3);
    }

    // Simple Levenshtein distance for typo tolerance
    function getLevenshteinDistance(str1, str2) {
      const matrix = [];
      for (let i = 0; i <= str2.length; i++) {
        matrix[i] = [i];
      }
      for (let j = 0; j <= str1.length; j++) {
        matrix[0][j] = j;
      }
      for (let i = 1; i <= str2.length; i++) {
        for (let j = 1; j <= str1.length; j++) {
          if (str2.charAt(i - 1) === str1.charAt(j - 1)) {
            matrix[i][j] = matrix[i - 1][j - 1];
          } else {
            matrix[i][j] = Math.min(
              matrix[i - 1][j - 1] + 1,
              matrix[i][j - 1] + 1,
              matrix[i - 1][j] + 1
            );
          }
        }
      }
      return matrix[str2.length][str1.length];
    }

    // Handle search input with debouncing for better performance
    let searchTimeout;
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.trim();
      
      clearTimeout(searchTimeout);
      searchTimeout = setTimeout(() => {
        performGoogleLikeSearch(query);
      }, 200); // 200ms delay for better performance
    });

    // Handle category clicks
    categoryDropdown.addEventListener('click', (e) => {
      const categoryItem = e.target.closest('.category-item');
      if (categoryItem) {
        const url = categoryItem.dataset.url;
        window.location.href = url;
      }
    });

    // Handle search button click
    if (searchBtn) {
      searchBtn.addEventListener('click', () => {
        const query = searchInput.value.trim();
        if (query) {
          // Perform search and go to best match
          const words = query.toLowerCase().split(/\s+/).filter(word => word.length > 0);
          const scoredResults = searchData.map(item => {
            let score = 0;
            const titleLower = item.title.toLowerCase();
            const keywordsLower = item.keywords.map(k => k.toLowerCase());
            
            words.forEach(word => {
              if (titleLower.includes(word)) score += 20;
              if (keywordsLower.some(k => k.includes(word))) score += 10;
            });
            
            return { ...item, score };
          }).filter(item => item.score > 0)
            .sort((a, b) => b.score - a.score);

          if (scoredResults.length > 0) {
            window.location.href = scoredResults[0].url;
          } else {
            // If no results, show all categories
            categoryDropdown.classList.toggle('show');
          }
        } else {
          categoryDropdown.classList.toggle('show');
        }
      });
    }

    // Handle Enter key
    searchInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') {
        e.preventDefault();
        searchBtn.click();
      }
    });
  }

  // Initialize search for both desktop and mobile
  initializeSearch('searchInput', 'categoryDropdown', 'searchResults', 'searchBtn');
  initializeSearch('mobileSearchInput', 'mobileCategoryDropdown', 'mobileSearchResults', 'mobileSearchBtn');

  // Close dropdowns when clicking outside
  document.addEventListener('click', (e) => {
    const searchContainers = document.querySelectorAll('.search-container');
    searchContainers.forEach(container => {
      if (!container.contains(e.target)) {
        container.querySelector('.category-dropdown')?.classList.remove('show');
        container.querySelector('.search-results')?.classList.remove('show');
      }
    });
  });
</script>

<!-- START OF MAIN CONTENT AREA -->
<main>