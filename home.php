<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #f72585;
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
        }

        .btn-links {
            background: var(--primary);
            color: white;
        }

        .btn-links:hover {
            background: #3a56d4;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }

        .btn-notes {
            background: var(--secondary);
            color: white;
        }

        .btn-notes:hover {
            background: #d0146e;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(247, 37, 133, 0.4);
        }

        .btn i {
            font-size: 1.4rem;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 40px 25px;
                border-radius: 16px;
            }
            h1 { font-size: 1.8rem; }
            .btn { padding: 18px 24px; font-size: 1.1rem; }
        }

        .footer {
            margin-top: 40px;
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><i class="fas fa-clipboard-list"></i> My Dashboard</h1>
        <p class="subtitle">Organize your digital life in one place.</p>

        <div class="btn-group">
            <a href="index.php" class="btn btn-links">
                <i class="fas fa-link"></i> Manage Links
            </a>
            <a href="note_index.php" class="btn btn-notes">
                <i class="fas fa-sticky-note"></i> Manage Notes
            </a>
        </div>

        <div class="footer">
            Choose a workspace to get started.
        </div>
    </div>

</body>
</html>