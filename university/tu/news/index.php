<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎓 Engineering Notice Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./sources/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Vertical Button Container */
        .vertical-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            margin: 4rem auto;
            max-width: 500px;
            padding: 0 20px;
        }

        .btn-portal-vertical {
            width: 100%;
            padding: 22px 36px;
            font-size: 1.25rem;
            font-weight: 600;
            border-radius: 18px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0,0,0,0.12);
            text-align: center;
            background: white;
            color: #065f46;
            border: 3px solid #4ade80;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .btn-portal-vertical i {
            font-size: 1.6rem;
            transition: transform 0.25s ease;
        }

        .btn-portal-vertical:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.18);
            background: linear-gradient(135deg, #4ade80, #fbbf24);
            color: white;
            border-color: transparent;
        }

        .btn-portal-vertical:hover i {
            transform: translateX(8px);
        }

        .btn-ioe-vertical {
            border-color: #ef4444;
        }

        .btn-ioe-vertical:hover {
            background: linear-gradient(135deg, #ef4444, #f97316);
        }

        .btn-other-vertical {
            border-color: #8b5cf6;
        }

        .btn-other-vertical:hover {
            background: linear-gradient(135deg, #8b5cf6, #ec4899);
        }

        /* Optional: Add subtle pulse animation on load */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .vertical-buttons a {
            animation: fadeInUp 0.6s ease forwards;
        }

        .vertical-buttons a:nth-child(1) { animation-delay: 0.1s; }
        .vertical-buttons a:nth-child(2) { animation-delay: 0.2s; }
        .vertical-buttons a:nth-child(3) { animation-delay: 0.3s; }

        /* Mobile Responsiveness */
        @media (max-width: 576px) {
            .btn-portal-vertical {
                padding: 18px 24px;
                font-size: 1.1rem;
            }

            .btn-portal-vertical i {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>🎓 Engineering Notice Portal</h1>
            <p class="lead">One-stop portal for official notices from Nepal's top engineering institutions.</p>
        </div>
    </div>

    <!-- Vertical Buttons Section -->
    <div class="container">
        <div class="vertical-buttons">
            <a href="./sources/news_ioe.php" class="btn-portal-vertical btn-ioe-vertical">
                <i class="fas fa-graduation-cap"></i>
                IOE Exam Notices
            </a>

            <a href="./sources/news_kec.php" class="btn-portal-vertical">
                <i class="fas fa-bullhorn"></i>
                KEC College Notices
            </a>

            <a href="#" class="btn-portal-vertical btn-other-vertical" onclick="alert('More portals coming soon!'); return false;">
                <i class="fas fa-rocket"></i>
                Other Institutions
            </a>
        </div>

        <div class="text-center mt-5 pt-4 border-top">
            <p class="text-muted">
                Built with  for students of Nepal. Not affiliated with IOE or KEC.
            </p>
        </div>
    </div>

</body>
</html>