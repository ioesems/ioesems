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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">

  <style>
    body {
      padding-top: 90px;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1030;
    }

    .card {
      height: auto;
      font-size: 18px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body a {
      display: block;
    }

    .card:hover {
      background-color: #28a745; /* Green background on hover */
      color: white;
      transform: scale(1.05); /* Slightly scale up the card */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
    }

    .card-body:hover {
      cursor: pointer;
    }
  </style>

</head>

<body>
  <?php include './components/header.php'; ?>

  <div class="container mt-4" data-bs-theme="dark">
    <div class="row">
      <?php
        // Create an array for the study resources with relevant content
        $cards = [
            [
                "title" => "Engineering",
                "description" => "Access study materials including notes, syllabus, PYQs, assignments, and lab reports for engineering courses.",
                "image" => "./images/engineering student.png",
                "link" => "./university/engineering.php"
            ],
            [
                "title" => "+2",
                "description" => "Explore study resources such as notes, PYQs, assignments, and lab reports for +2 courses.",
                "image" => "./images/+2_student.png",
                "link" => "./university/engineering.php"
            ],
            [
                "title" => "IOE ENTRANCE",
                "description" => "Prepare for the IOE Entrance with access to notes, PYQs, assignments, and lab reports.",
                "image" => "./images/ioe_entrance.png",
                "link" => "./university/engineering.php"
            ]
        ];

        // Loop through the array and display each card
        foreach ($cards as $card) {
            echo '
            <div class="col-md-4">
                <div class="card" style="width: 18rem;" onclick="window.location.href=\'' . $card['link'] . '\';">
                    <img src="' . $card['image'] . '" class="card-img-top" alt="' . $card['title'] . ' study resources" style="height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title">' . $card['title'] . '</h5>
                        <p class="card-text">' . $card['description'] . '</p>
                    </div>
                    <div class="card-body">
                        <a href="' . $card['link'] . '" class="btn btn-primary w-100">All IN ONE</a>
                    </div>
                </div>
            </div>';
        }
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
