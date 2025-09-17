    <?php
    session_start();
    
    // Check if the user is logged in
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: login.php");
        exit();
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #f72585;
            --tertiary: #2ec4b6;
            --quaternary: #778da9;
            --light-bg: #f8f9fa;
            --card-bg: #ffffff;
            --text: #212529;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 40px;
            border-radius: 24px;
            box-shadow: var(--shadow);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: #333;
        }

        .subtitle {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 40px;
            font-weight: 500;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }

        .btn {
            padding: 20px 30px;
            font-size: 1.2rem;
            font-weight: 600;
            border: none;
            border-radius: 16px;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            box-shadow: var(--shadow);
            color: white;
        }

        .btn-material {
            background: var(--primary);
        }

        .btn-material:hover {
            background: #3a56d4;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }

        .btn-quote {
            background: var(--secondary);
        }

        .btn-quote:hover {
            background: #d0146e;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(247, 37, 133, 0.4);
        }

        .btn-video {
            background: var(--tertiary);
        }

        .btn-video:hover {
            background: #28b8a8;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(46, 196, 182, 0.4);
        }

        .btn-future {
            background: var(--quaternary);
        }

        .btn-future:hover {
            background: #6a7b98;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(119, 153, 169, 0.4);
        }

        .btn i {
            font-size: 1.4rem;
        }

        .logout-btn {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 1.1rem;
            background: #e63946;
            color: white;
            border: none;
            border-radius: 16px;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: var(--shadow);
        }

        .logout-btn:hover {
            background: #c1121f;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(230, 57, 70, 0.4);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 40px 25px;
                border-radius: 16px;
            }
            h1 { font-size: 1.8rem; }
            .btn { padding: 18px 24px; font-size: 1.1rem; }
            .logout-btn { padding: 12px 24px; font-size: 1rem; }
        }

        .footer {
            margin-top: 40px;
            font-size: 0.9rem;
            color: #888;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px 0;
            padding: 10px;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 12px;
            font-size: 0.9rem;
        }

        .status-indicator i {
            margin-right: 8px;
            color: var(--primary);
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1><i class="fas fa-user-shield"></i> Admin Dashboard</h1>
        <p class="subtitle">Manage your content securely and efficiently</p>
        
        <div class="status-indicator">
            <i class="fas fa-circle" style="color: #2ecc71;"></i>
            <span>Logged in as: Admin User</span>
        </div>
        
        <div class="btn-group">
            <a href="index.php" class="btn btn-material">
                <i class="fas fa-file-upload"></i> Upload Material
            </a>
            <a href="material_uploading_file/add_quote.php" class="btn btn-quote">
                <i class="fas fa-quote-left"></i> Upload Quote
            </a>
            <a href="material_uploading_file/motivational_video.php" class="btn btn-video">
                <i class="fas fa-video"></i> Upload Motivational Video
            </a>
            <a href="../../home.php" class="btn btn-future">
                <i class="fas fa-message"></i> add link + prompt
            </a>
            <a href="#" class="btn btn-future">
                <i class="fas fa-plus"></i> New Feature
            </a>
        </div>
        
        <a href="logout.php" class="logout-btn">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        
        <div class="footer">
            Secure admin control panel • All rights reserved
        </div>
    </div>

</body>
</html>