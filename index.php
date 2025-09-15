<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}





// Add this code to your index.php file, AFTER you've successfully included config.php and established $conn

// Set Nepal timezone for the entire application
date_default_timezone_set('Asia/Kathmandu');

// Only include auto quote system if database connection exists
if (isset($conn) && $conn instanceof mysqli) {
    // Include the auto quote storage system
    $autoQuoteFile = './file/admin/automation/auto24storequote.php';
    if (file_exists($autoQuoteFile)) {
        include_once $autoQuoteFile;
        
        // Auto-trigger quote update (this runs every time someone visits your site)
        try {
            $quote_update_result = autoTriggerQuoteUpdate($conn);
            
            // Optional: Log successful updates (for debugging - remove in production)
            if ($quote_update_result['status'] == 'success') {
                error_log("Auto quote update successful: " . $quote_update_result['message']);
            }
        } catch (Exception $e) {
            error_log("Auto quote update error: " . $e->getMessage());
        }
    } else {
        error_log("Auto quote file not found: " . $autoQuoteFile);
    }
} else {
    error_log("Database connection not available for auto quote update");
}

// Your existing index.php code continues here...








// Check if user is logged in
$is_logged_in = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;

// include your existing config.php
include './components/login/config.php';

// Live quote fetching function for logged-in users
function fetchLiveEngineeringQuote() {
    // 1. Fetch all quotes from ZenQuotes API
    $zen_api = "https://zenquotes.io/api/quotes";
    $quotes_json = @file_get_contents($zen_api);
    $all_quotes = $quotes_json ? json_decode($quotes_json, true) : [];

    // 2. Define keywords relevant to engineering students
    $keywords = ['study','learn','knowledge','work','effort','problem','success','engineer','goal','focus','achievement','discipline'];

    // 3. Filter quotes containing keywords
    $filtered = [];
    if($all_quotes){
        foreach($all_quotes as $q){
            foreach($keywords as $k){
                if(stripos($q['q'], $k) !== false){
                    $filtered[] = $q;
                    break;
                }
            }
        }
    }

    // 4. Fallback if no quotes found
    if(empty($filtered)){
        $filtered = [
            ['q'=>'Success is not final, failure is not fatal: it is the courage to continue that counts.','a'=>'Winston Churchill'],
            ['q'=>'Learning never exhausts the mind.','a'=>'Leonardo da Vinci'],
            ['q'=>'The best way to predict the future is to invent it.','a'=>'Alan Kay'],
            ['q'=>'The engineer has been, and is, a maker of history.','a'=>'James Kip Finch'],
            ['q'=>'Engineering is the art of directing the great sources of power in nature for the use and convenience of man.','a'=>'Thomas Tredgold']
        ];
    }

    // 5. Pick one random quote
    $best_quote = $filtered[array_rand($filtered)];
    return [
        'text' => $best_quote['q'],
        'author' => $best_quote['a']
    ];
}

// Handle AJAX request for new quotes
if (isset($_GET['action']) && $_GET['action'] === 'get_new_quote' && $is_logged_in) {
    header('Content-Type: application/json');
    $new_quote = fetchLiveEngineeringQuote();
    echo json_encode([
        'status' => 'success',
        'quote' => $new_quote
    ]);
    exit();
}

// Fetch daily quote from database for non-logged users
$today = date("Y-m-d");
$check = $conn->query("SELECT * FROM quotes WHERE DATE(date_added) = '$today' LIMIT 5");

if ($check->num_rows == 0) {
    $apiUrl = "https://api.quotable.io/quotes?limit=5";
    $response = @file_get_contents($apiUrl);
    if ($response) {
        $data = json_decode($response, true);
        if (isset($data['results'])) {
            foreach ($data['results'] as $q) {
                $quote_text = $conn->real_escape_string($q['content']);
                $author = $conn->real_escape_string($q['author']);
                $conn->query("INSERT INTO quotes (quote_text, author) VALUES ('$quote_text', '$author')");
            }
        }
    }
}

// Get quotes from DB
$result = $conn->query("SELECT * FROM quotes ORDER BY date_added DESC LIMIT 50");
$quotes = [];
while ($row = $result->fetch_assoc()) {
    $quotes[] = $row;
}

// If no quotes in database, use fallback
if (empty($quotes)) {
    $quotes = [
        [
            'id' => 1,
            'quote_text' => 'The engineer has been, and is, a maker of history.',
            'author' => 'James Kip Finch',
            'date_added' => date('Y-m-d H:i:s')
        ],
        [
            'id' => 2,
            'quote_text' => 'Success is not final, failure is not fatal: it is the courage to continue that counts.',
            'author' => 'Winston Churchill',
            'date_added' => date('Y-m-d H:i:s')
        ]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Access a wide range of study materials, including notes, PYQs, assignments, and lab reports for various engineering fields such as +2, IOE Entrance, and more.">
<meta name="keywords" content="Engineering Notes, IOE, Entrance, +2, Study Materials, PYQ, Syllabus, Nepal">
<meta name="author" content="IoeSems">
<meta property="og:title" content="IoeSems - Engineering Notes & Study Resources">
<meta property="og:description" content="Find study resources, including notes, syllabus, PYQs, assignments, and lab reports for engineering students and IOE entrance preparation.">
<meta property="og:url" content="https://yourwebsite.com">
<meta property="og:image" content="https://yourwebsite.com/images/computer-engineering-notes.jpg">
<meta name="robots" content="index, follow">
<title>IoeSems - Study Resources for Engineering Students</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
  body {
    padding-top: 90px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #f8ffb0, #c0e980);
    color: #1b3a1a;
  }

  header { position: fixed; top: 0; left: 0; width: 100%; z-index: 1030; }

  /* Quote Slider */
  .quote-slider {
    position: relative;
    overflow: hidden;
    text-align: center;
    padding: 30px;
    border-radius: 12px;
    background: linear-gradient(135deg, #e6ffb3, #a8e063);
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    min-height: 150px;
  }
  .quote-text { 
    font-size: 1.2rem; 
    font-weight: 500; 
    line-height: 1.4;
    margin-bottom: 10px;
  }
  .quote-author { 
    margin-top:10px; 
    font-style: italic; 
    font-size: 1rem; 
    color: #2d5a2d;
  }
  .arrow { 
    position: absolute; 
    top: 50%; 
    transform: translateY(-50%); 
    font-size: 2rem; 
    cursor: pointer; 
    color:#1b3a1a;
    user-select: none;
    transition: all 0.3s ease;
  }
  .arrow:hover {
    color: #56ab2f;
    transform: translateY(-50%) scale(1.1);
  }
  .arrow-left { left: 20px; }
  .arrow-right { right: 20px; }

  /* User status indicator */
  .user-status {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 0.8rem;
    padding: 5px 10px;
    border-radius: 10px;
    <?php if($is_logged_in): ?>
    background: rgba(40, 167, 69, 0.8);
    color: white;
    <?php else: ?>
    background: rgba(220, 53, 69, 0.8);
    color: white;
    <?php endif; ?>
  }

  /* Small notification box instead of popups */
  .notification-box {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(255,255,255,0.95);
    padding: 10px 15px;
    border-radius: 15px;
    font-size: 0.9rem;
    color: #1b3a1a;
    border: 2px solid #a8e063;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    display: none;
    animation: slideIn 0.5s ease;
    max-width: 250px;
    text-align: center;
  }
  
  .notification-box.show {
    display: block;
  }
  
  .notification-box.login-prompt {
    background: rgba(255, 193, 7, 0.95);
    border-color: #ffc107;
    color: #856404;
  }
  
  .notification-box.end-message {
    background: rgba(220, 53, 69, 0.95);
    border-color: #dc3545;
    color: white;
  }
  
  .notification-box.live-message {
    background: rgba(40, 167, 69, 0.95);
    border-color: #28a745;
    color: white;
  }

  @keyframes slideIn {
    from { opacity: 0; transform: translateX(100%); }
    to { opacity: 1; transform: translateX(0); }
  }

  /* Loading animation */
  .quote-loading {
    display: none;
    text-align: center;
    padding: 20px;
  }
  .spinner {
    border: 3px solid #f3f3f3;
    border-top: 3px solid #56ab2f;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 1s linear infinite;
    margin: 0 auto 10px;
  }
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  /* Label Links */
  .label-links { margin:25px 0; text-align:center; }
  .label-links a { 
      display:inline-block; 
      margin: 0 15px; 
      padding:10px 20px; 
      font-weight:bold; 
      border-radius:20px; 
      background:linear-gradient(135deg,#a8e063,#56ab2f); 
      color:#fff; 
      text-decoration:none;
      transition:0.3s;
  }
  .label-links a:hover { background:linear-gradient(135deg,#56ab2f,#a8e063); transform:scale(1.05); }

  /* Cards */
  .resource-card {
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    margin-bottom: 30px;
    background-color: #ffffffcc;
  }
  .resource-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(0,0,0,0.2);
  }
  .resource-card img {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    height: 220px;
    object-fit: cover;
  }
  .resource-card .card-body h5 { font-weight: bold; font-size: 1.2rem; color: #1b3a1a; }
  .resource-card .card-body p { font-size: 0.95rem; color: #333; }
  .resource-card .btn {
    font-weight: bold;
    background: linear-gradient(135deg, #a8e063 0%, #56ab2f 100%);
    color: #fff;
    border-radius: 25px;
    transition: background 0.3s ease, transform 0.3s;
  }
  .resource-card .btn:hover {
    background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
    transform: scale(1.05);
  }

  .footer-quote {
    margin: 30px auto 50px;
    font-size: 1.2rem;
    padding: 25px;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8ffb0, #c0e980);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    text-align: center;
    font-weight: 500;
    color: #1b3a1a;
  }
</style>
</head>

<body>
<?php include './components/head-foot/header.php'; ?>

<!-- Quote Slider -->
<div class="container mt-3">
  <div class="quote-slider" id="quoteSlider">
    <!-- User Status Indicator -->
    <div class="user-status">
      <?php echo $is_logged_in ? '🟢 Database Quotes' : '🔴 Daily Quotes'; ?>
    </div>
    
    <!-- Notification Box -->
    <div class="notification-box" id="notificationBox"></div>

    <!-- Loading Animation -->
    <div class="quote-loading" id="quoteLoading">
      <div class="spinner"></div>
      <div>Loading new quote...</div>
    </div>

    <!-- Quote Display -->
    <div id="quoteDisplay">
      <?php foreach($quotes as $index => $q): ?>
        <div class="quote-item" style="display: <?= $index==0?'block':'none' ?>;">
          <div class="quote-text">"<?= htmlspecialchars($q['quote_text']) ?>"</div>
          <div class="quote-author">- <?= htmlspecialchars($q['author']) ?></div>
        </div>
      <?php endforeach; ?>
    </div>
    
    <div class="arrow arrow-left" onclick="prevQuote()">&#10094;</div>
    <div class="arrow arrow-right" onclick="nextQuote()">&#10095;</div>
  </div>
</div>

<!-- Labels for General Problems & Motivational Video -->
<div class="label-links">
  <a href="./components/quote_motivate_gp/general_problems.php">General Engineering Problems</a>
  <a href="./components/quote_motivate_gp/motivational_videos.php">Motivational Videos</a>
</div>

<!-- Resource Cards -->
<div class="container mt-4">
  <div class="row">
    <?php
      $cards = [
        ["title"=>"Engineering","description"=>"Access study materials including notes, syllabus, PYQs, assignments, and lab reports for engineering courses.","image"=>"./images/engineering student.png","link"=>"./university/engineering.php"],
        ["title"=>"+2","description"=>"Explore study resources such as notes, PYQs, assignments, and lab reports for +2 courses.","image"=>"./images/+2_student.png","link"=>"./components/error/page-under-construction.php"],
        ["title"=>"IOE ENTRANCE","description"=>"Prepare for the IOE Entrance with access to notes, PYQs, assignments, and lab reports.","image"=>"./images/ioe_entrance.png","link"=>"./components/error/page-under-construction.php"]
      ];
      foreach($cards as $card){
        echo '
        <div class="col-md-4">
          <div class="card resource-card" onclick="window.location.href=\''.$card['link'].'\';">
            <img src="'.$card['image'].'" alt="'.$card['title'].' study resources">
            <div class="card-body">
              <h5>'.$card['title'].'</h5>
              <p>'.$card['description'].'</p>
            </div>
            <div class="card-body">
              <a href="'.$card['link'].'" class="btn w-100">All IN ONE</a>
            </div>
          </div>
        </div>';
      }
    ?>
  </div>
</div>

<div class="footer-quote">Thank you for your constant support and encouragement!</div>
<?php include './components/head-foot/footer.php'; ?>

<script>
let currentQuote = 0;
let quotes = document.querySelectorAll('.quote-item');
let isLoggedIn = <?= $is_logged_in ? 'true' : 'false' ?>;
let totalQuotes = quotes.length;
let databaseEndReached = false;

function showQuote(index) {
  quotes.forEach((q, i) => q.style.display = (i === index ? 'block' : 'none'));
}

function showNotification(message, type = 'default', duration = 3000) {
  const notificationBox = document.getElementById('notificationBox');
  notificationBox.innerHTML = message;
  notificationBox.className = 'notification-box show';
  
  // Add specific type classes
  if (type === 'login') {
    notificationBox.classList.add('login-prompt');
  } else if (type === 'end') {
    notificationBox.classList.add('end-message');
  } else if (type === 'live') {
    notificationBox.classList.add('live-message');
  }
  
  // Hide after duration
  setTimeout(() => {
    notificationBox.classList.remove('show');
  }, duration);
}

function showLoading(show = true) {
  const loading = document.getElementById('quoteLoading');
  const display = document.getElementById('quoteDisplay');
  const arrows = document.querySelectorAll('.arrow');
  
  if (show) {
    loading.style.display = 'block';
    display.style.display = 'none';
    arrows.forEach(arrow => arrow.style.pointerEvents = 'none');
  } else {
    loading.style.display = 'none';
    display.style.display = 'block';
    arrows.forEach(arrow => arrow.style.pointerEvents = 'auto');
  }
}

function updateQuoteDisplay(quoteText, author) {
  const quoteDisplay = document.getElementById('quoteDisplay');
  quoteDisplay.innerHTML = `
    <div class="quote-item" style="display: block;">
      <div class="quote-text">"${quoteText}"</div>
      <div class="quote-author">- ${author}</div>
    </div>
  `;
  quotes = document.querySelectorAll('.quote-item');
  currentQuote = 0;
  databaseEndReached = false;
}

function fetchNewQuote() {
  showLoading(true);
  
  fetch('?action=get_new_quote')
    .then(response => response.json())
    .then(data => {
      showLoading(false);
      if (data.status === 'success') {
        updateQuoteDisplay(data.quote.text, data.quote.author);
        
        // Update status indicator
        const statusIndicator = document.querySelector('.user-status');
        statusIndicator.innerHTML = '✨ Live Quotes';
        statusIndicator.style.background = 'rgba(40, 167, 69, 1)';
        
        showNotification('🌟 Fresh quote loaded from internet! Keep clicking for more!', 'live', 2500);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      showLoading(false);
      showNotification('❌ Failed to load new quote', 'end', 2000);
    });
}

function prevQuote() {
  if (isLoggedIn) {
    // For logged users, navigate through database quotes
    if (currentQuote > 0) {
      currentQuote--;
      showQuote(currentQuote);
    } else {
      // At the beginning, wrap to end
      currentQuote = totalQuotes - 1;
      showQuote(currentQuote);
    }
  } else {
    // For non-logged users, show login prompt
    showNotification('🔐 Login to access more quotes from our database!', 'login', 3000);
    currentQuote = (currentQuote - 1 + totalQuotes) % totalQuotes;
    showQuote(currentQuote);
  }
}

function nextQuote() {
  if (isLoggedIn) {
    // For logged users, navigate through database quotes
    if (currentQuote < totalQuotes - 1) {
      currentQuote++;
      showQuote(currentQuote);
      databaseEndReached = false;
    } else {
      // Reached end of database quotes
      if (!databaseEndReached) {
        showNotification('📚 You\'ve reached the end of database quotes!<br>🌐 Click again for live quotes from internet', 'end', 4000);
        databaseEndReached = true;
      } else {
        // Fetch live quote from internet
        fetchNewQuote();
      }
    }
  } else {
    // For non-logged users, show login prompt
    showNotification('🔐 Login for unlimited access to our quote database!', 'login', 3000);
    currentQuote = (currentQuote + 1) % totalQuotes;
    showQuote(currentQuote);
  }
}

// Touch support
let startX = 0;
let slider = document.getElementById('quoteSlider');
slider.addEventListener('touchstart', (e) => startX = e.touches[0].clientX);
slider.addEventListener('touchend', (e) => {
  let endX = e.changedTouches[0].clientX;
  if (endX - startX > 50) prevQuote();
  else if (startX - endX > 50) nextQuote();
});

// Auto-advance for non-logged users (optional)
<?php if(!$is_logged_in): ?>
setInterval(() => {
  currentQuote = (currentQuote + 1) % totalQuotes;
  showQuote(currentQuote);
}, 10000); // Change quote every 10 seconds
<?php endif; ?>
</script>
</body>
</html>