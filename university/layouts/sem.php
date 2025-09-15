<?php
// components/layout.php

// Accept parameters passed from calling page
$subjects = $subjects ?? [];
$title = $title ?? 'Subjects';
$subtitle = $subtitle ?? '';



// Include header

include '../../../../components/head-foot/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <style>
        body {
            padding-top: 70px;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(120deg, #fefcc0, #c6f07c);
            color: #1b3a1a;
            transition: background-color 0.3s, color 0.3s;
        }
        body.dark-mode {
            background: #1b1b1b;
            color: #a8e063;
        }

        h2 {
            font-weight: bold;
            color: #3f7d0f;
            margin-bottom: 25px;
            text-align: center;
            font-size: 1.8rem;
        }
        body.dark-mode h2 { color: #a8e063; }

        .card {
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.25);
        }

        .card-body a {
            display: block;
            padding: 20px;
            font-size: 1rem;
            font-weight: bold;
            color: black;
            text-decoration: none;
            border-radius: 12px;
            text-align: center;
            background: linear-gradient(135deg, #b8e063 0%, #4fae1f 100%);
            transition: background 0.3s ease, color 0.3s ease;
        }
        .card-body a:hover {
            background: linear-gradient(135deg, #4fae1f 0%, #b8e063 100%);
        }
        body.dark-mode .card-body a {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
            color: #000;
        }

        .container { max-width: 900px; }

        @media (max-width: 768px) {
            .row.g-3 { gap: 4px; }
            .card-body a { padding: 15px; font-size: 0.95rem; }
        }
        @media (max-width: 480px) {
            .row.g-3 { gap: 2px; }
            .card-body a { padding: 12px; font-size: 0.9rem; }
            h2 { font-size: 1.4rem; margin-bottom: 15px; }
        }
    </style>
</head>
<body>

<div class="container text-center mt-4">
    <?php if ($subtitle): ?>
        <h3 class="text-muted mb-4"><?php echo htmlspecialchars($subtitle); ?></h3>
    <?php endif; ?>
    <h2><?php echo htmlspecialchars($title); ?></h2>
    <div class="row justify-content-center g-3">
        <?php foreach ($subjects as $name => $link): ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo htmlspecialchars($link); ?>"><?php echo htmlspecialchars($name); ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include '../../../../components/head-foot/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>