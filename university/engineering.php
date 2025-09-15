<?php include '../components/head-foot/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Get access to updated notes, syllabus, PYQs, assignments, and lab reports for various engineering branches including Computer Engineering. Prepare for IOE entrance and more.">
<meta name="keywords" content="Computer Engineering, IOE, Engineering Notes, Assignment Solutions, Lab Reports, PYQ, IOE Entrance, Syllabus, Nepal">
<meta name="author" content="IoeSems">
<meta property="og:title" content="IoeSems - Engineering Notes & Study Resources">
<meta property="og:description" content="Access a wide range of study resources for Computer Engineering and IOE Entrance including updated notes, syllabus, assignments, and more.">
<meta property="og:url" content="https://yourwebsite.com">
<meta property="og:image" content="https://yourwebsite.com/images/computer-engineering-notes.jpg">
<meta name="robots" content="index, follow">
<title>IoeSems - Study Resources for Engineering Students</title>

<link rel="stylesheet" href="../../style/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  /* Body & Layout */
  body {
    padding-top: 90px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(to right, #f8ffb0, #c0e980); /* soft yellow-green */
    color: #1b3a1a;
    transition: background 0.3s, color 0.3s;
  }
  header { position: fixed; top: 0; left: 0; width: 100%; z-index: 1030; }

  /* Quote Section */
  .quote-section {
    margin: 20px auto;
    padding: 30px;
    border-radius: 12px;
    background: linear-gradient(135deg, #e6ffb3, #a8e063);
    color: #1b3a1a;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    text-align: center;
  }
  .quote-section h2 {
    font-weight: 700;
    font-size: 1.8rem;
    letter-spacing: 1px;
    margin-bottom: 15px;
  }
  .quote-section p {
    font-size: 1rem;
  }
  .quote-section .alert-note {
    font-size: 0.95rem;
    color: #e74c3c;
    font-weight: bold;
  }

  /* Cards */
  .branch-card {
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    margin-bottom: 30px;
    background-color: #ffffffcc;
  }
  .branch-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(0,0,0,0.2);
  }
  .branch-card img {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    height: 220px;
    object-fit: cover;
  }
  .branch-card .card-body h5 {
    font-weight: bold;
    font-size: 1.2rem;
    color: #1b3a1a;
  }
  .branch-card .card-body p {
    font-size: 0.95rem;
    color: #333;
  }
  .branch-card .btn {
    font-weight: bold;
    background: linear-gradient(135deg, #a8e063 0%, #56ab2f 100%);
    color: #fff;
    border-radius: 25px;
    transition: background 0.3s ease, transform 0.3s;
  }
  .branch-card .btn:hover {
    background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
    transform: scale(1.05);
  }

  /* Footer Quote */
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

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .quote-section h2 { font-size: 1.5rem; }
    .branch-card img { height: 180px; }
    .footer-quote { font-size: 1rem; }
  }

  @media (max-width: 480px) {
    .quote-section h2 { font-size: 1.3rem; }
    .branch-card img { height: 160px; }
    .branch-card .card-body h5 { font-size: 1rem; }
    .branch-card .card-body p { font-size: 0.85rem; }
    .footer-quote { font-size: 0.95rem; padding: 20px; }
  }
</style>

</head>

<body>

<!-- Quote Section -->
<div class="quote-section">
  <h2>"Your journey towards success starts with learning. The more you read, the closer you get to your dreams!"</h2>
  <p>Remember, the syllabus for IOE has changed. Stay up-to-date and cover the right topics for your exams.</p>
  <p class="alert-note">Don't forget to check the latest syllabus topics to ensure you're preparing effectively.</p>
</div>

<!-- Engineering Branch Cards -->
<div class="container mt-4">
  <div class="row">
    <?php
      $cards = [
        ["title"=>"Computer Engineering","description"=>"Access study materials, including notes, PYQs, assignments, and lab reports for Computer Engineering.","image"=>"../images/computer engineering students.png","link"=>"./tu/bct/bct.php"],
        ["title"=>"Civil Engineering","description"=>"Explore study resources such as notes, PYQs, assignments, and lab reports for Civil Engineering.","image"=>"../images/civil engineering.png","link"=>"./tu/bce/bce.php"],
        ["title"=>"Electronic Engineering","description"=>"Find notes, PYQs, assignments, and lab reports for Electronic Engineering students.","image"=>"../images/electronic engineering student.png","link"=>"../components/error/page-under-construction.php"]
      ];
      foreach($cards as $card){
        echo '
        <div class="col-md-4">
          <div class="card branch-card" onclick="window.location.href=\''.$card['link'].'\';">
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

<!-- Footer Quote -->
<div class="footer-quote">Thank you for your constant support and encouragement!</div>

<?php include '../components/head-foot/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
