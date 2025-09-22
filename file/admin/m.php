<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();

    
}

include '../../components/head-foot/header.php';
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
            /* Eye-friendly color palette */
            --soft-green: #2E8B57;
            --mint-green: #66CDAA;
            --warm-yellow: #F0E68C;
            --golden-yellow: #DAA520;
            --sage-green: #87A96B;
            --cream: #FFF8DC;
            --light-cream: #FEFEF0;
            --soft-gray: #708090;
            --charcoal: #36454F;
            --white: #FFFFFF;
            --success-green: #32CD32;
            --warning-orange: #FF8C00;
            --shadow: 0 2px 8px rgba(0,0,0,0.08);
            --border-radius: 8px;
            --transition: all 0.2s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Inter', system-ui, sans-serif;
            background: linear-gradient(135deg, var(--light-cream) 0%, var(--cream) 50%, var(--warm-yellow) 100%);
            color: var(--charcoal);
            font-size: 14px;
            line-height: 1.4;
            height: 100vh;
            overflow-x: hidden;
        }

        .dashboard-container {
            height: 100vh;
            padding: 8px;
            display: flex;
            flex-direction: column;
            max-width: 100%;
        }

        .header {
            background: var(--white);
            padding: 12px 16px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 8px;
            text-align: center;
            flex-shrink: 0;
            border: 1px solid rgba(46, 139, 87, 0.1);
        }

        .header h1 {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--soft-green);
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .header .subtitle {
            font-size: 0.8rem;
            color: var(--soft-gray);
            margin-bottom: 8px;
            font-weight: 400;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px 12px;
            background: rgba(50, 205, 50, 0.1);
            border-radius: var(--border-radius);
            font-size: 0.75rem;
            font-weight: 500;
            border: 1px solid var(--success-green);
            color: var(--soft-green);
        }

        .status-indicator i {
            margin-right: 4px;
            color: var(--success-green);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        .main-content {
            flex: 1;
            overflow-y: auto;
            padding-right: 4px;
        }

        .btn-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 6px;
            margin-bottom: 8px;
        }

        .btn {
            padding: 10px 12px;
            font-size: 0.75rem;
            font-weight: 500;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 8px;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
            min-height: 44px;
            border: 1px solid transparent;
        }

        .btn:active {
            transform: scale(0.98);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--soft-green), var(--mint-green));
            color: var(--white);
            border-color: var(--soft-green);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--mint-green), var(--sage-green));
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(46, 139, 87, 0.2);
        }

        .btn-secondary {
            background: linear-gradient(135deg, var(--golden-yellow), var(--warm-yellow));
            color: var(--charcoal);
            border-color: var(--golden-yellow);
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, var(--warm-yellow), var(--golden-yellow));
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(218, 165, 32, 0.2);
        }

        .btn-accent {
            background: linear-gradient(135deg, var(--sage-green), var(--mint-green));
            color: var(--white);
            border-color: var(--sage-green);
        }

        .btn-accent:hover {
            background: linear-gradient(135deg, var(--mint-green), var(--soft-green));
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(135, 169, 107, 0.2);
        }

        .btn-neutral {
            background: linear-gradient(135deg, var(--cream), var(--light-cream));
            color: var(--charcoal);
            border-color: var(--soft-gray);
        }

        .btn-neutral:hover {
            background: linear-gradient(135deg, var(--light-cream), var(--white));
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(112, 128, 144, 0.15);
        }

        .btn i {
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .btn span {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .logout-section {
            flex-shrink: 0;
            text-align: center;
            margin: 8px 0;
        }

        .logout-btn {
            padding: 10px 20px;
            font-size: 0.8rem;
            background: linear-gradient(135deg, var(--warning-orange), #FF6347);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: var(--shadow);
            font-weight: 500;
            border: 1px solid var(--warning-orange);
        }

        .logout-btn:hover {
            background: linear-gradient(135deg, #FF6347, var(--warning-orange));
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 140, 0, 0.3);
        }

        .logout-btn:active {
            transform: scale(0.98);
        }

        .footer {
            flex-shrink: 0;
            padding: 8px;
            text-align: center;
            font-size: 0.65rem;
            color: var(--soft-gray);
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-top: 8px;
            border: 1px solid rgba(112, 128, 144, 0.1);
        }

        /* Custom scrollbar - eye-friendly */
        .main-content::-webkit-scrollbar {
            width: 4px;
        }

        .main-content::-webkit-scrollbar-track {
            background: rgba(46, 139, 87, 0.1);
            border-radius: 2px;
        }

        .main-content::-webkit-scrollbar-thumb {
            background: var(--sage-green);
            border-radius: 2px;
        }

        .main-content::-webkit-scrollbar-thumb:hover {
            background: var(--soft-green);
        }

        /* Very small screens */
        @media (max-width: 360px) {
            .header h1 {
                font-size: 1.2rem;
            }
            
            .btn {
                padding: 8px 10px;
                font-size: 0.7rem;
                gap: 6px;
            }
            
            .btn i {
                font-size: 0.8rem;
            }
        }

        /* Larger mobile screens */
        @media (min-width: 400px) {
            .btn-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Tablet and desktop - still compact */
        @media (min-width: 768px) {
            .dashboard-container {
                padding: 12px;
                max-width: 900px;
                margin: 0 auto;
            }
            
            .btn-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 8px;
            }
            
            .btn {
                padding: 12px 14px;
                font-size: 0.8rem;
            }
            
            .header {
                padding: 16px 20px;
            }
            
            .header h1 {
                font-size: 1.6rem;
            }
        }

        /* Desktop optimizations */
        @media (min-width: 1024px) {
            .btn-grid {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        /* Accessibility - eye-friendly focus states */
        .btn:focus,
        .logout-btn:focus {
            outline: 2px solid var(--golden-yellow);
            outline-offset: 2px;
        }

        /* Smooth loading animation */
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .btn:active::before {
            left: 100%;
        }

        /* Loading spinner for buttons */
        .btn-loading i {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    
    <div class="dashboard-container">
        <div class="header">
            <h1>
                <i class="fas fa-user-shield"></i>
                <span>Admin Dashboard</span>
            </h1>
            <p class="subtitle">Secure Content Management System</p>
            
            <div class="status-indicator">
                <i class="fas fa-circle"></i>
                <span>Admin User Online</span>
            </div>
        </div>

        <div class="main-content">
            <div class="btn-grid">
                <a href="index.php" class="btn btn-primary">
                    <i class="fas fa-file-upload"></i>
                    <span>Upload Material</span>
                </a>
                
                <a href="material_uploading_file/add_quote.php" class="btn btn-secondary">
                    <i class="fas fa-quote-left"></i>
                    <span>Upload Quote</span>
                </a>
                
                <a href="material_uploading_file/motivational_video.php" class="btn btn-accent">
                    <i class="fas fa-video"></i>
                    <span>Upload Video</span>
                </a>
                
                <a href="../../home.php" class="btn btn-primary">
                    <i class="fas fa-link"></i>
                    <span>Add Link + Prompt</span>
                </a>
                
                <a href="../../university/tu/news" class="btn btn-secondary">
                    <i class="fas fa-graduation-cap"></i>
                    <span>IOE + KEC News</span>
                </a>
                
                <a href="../../z/games/index.php" class="btn btn-accent">
                    <i class="fas fa-gamepad"></i>
                    <span>Games</span>
                </a>
                
                <a href="../../z/shayari/index.php" class="btn btn-neutral">
                    <i class="fas fa-heart"></i>
                    <span>Shayari & Quotes</span>
                </a>
                
                <a href="../../components/ioe_entrance_mcq_test/admin_files/admin.php" class="btn btn-primary">
                    <i class="fas fa-cog"></i>
                    <span>MCQ Admin Panel</span>
                </a>
                
                <a href="../../components/ioe_entrance_mcq_test/user_interface.php" class="btn btn-secondary">
                    <i class="fas fa-clipboard-list"></i>
                    <span>IOE MCQ Test</span>
                </a>
                
                <a href="./material_uploading_file/add_quote.php" class="btn btn-accent">
                    <i class="fas fa-file-alt"></i>
                    <span>Auto Upload Log</span>
                </a>
                
                <a href="./bookmark/admin_bookmark_creater.php" class="btn btn-neutral">
                    <i class="fas fa-bookmark"></i>
                    <span>Admin Bookmarks</span>
                </a>
                
                <a href="../../ai/fun_question/user_interface.php" class="btn btn-primary">
                    <i class="fas fa-question-circle"></i>
                    <span>Fun Questions</span>
                </a>
                
                <a href="../../ai/_testing/langflow/playground/frontend_langflow.php" class="btn btn-secondary">
                    <i class="fas fa-project-diagram"></i>
                    <span>Langflow</span>
                </a>
                
                <a href="../../ai/_testing/langflow/playground/instrumentation/frontend.php" class="btn btn-accent">
                    <i class="fas fa-robot"></i>
                    <span>Instrumentation AI</span>
                </a>
                
                <a href="../../ai/eng_test/user_interface.php" class="btn btn-neutral">
                    <i class="fas fa-language"></i>
                    <span>English Test</span>
                </a>
                
                <a href="../../components/public_channel/index.php" class="btn btn-primary">
                    <i class="fas fa-broadcast-tower"></i>
                    <span>Public Channel</span>
                </a>
                
                <a href="../../components/head-foot/comment/comment.php" class="btn btn-secondary">
                    <i class="fas fa-comment-dots"></i>
                    <span>Comment Session</span>
                </a>
                
                <a href="#" class="btn btn-accent">
                    <i class="fas fa-plus-circle"></i>
                    <span>New Feature</span>
                </a>
            </div>
        </div>

        <div class="logout-section">
            <a href="logout.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Secure Logout</span>
            </a>
        </div>

        <div class="footer">
            <p>🔒 Secure Admin Control Panel • Professional Dashboard</p>
        </div>
    </div>

    <script>
        // Add loading states to buttons
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    const icon = this.querySelector('i');
                    const originalClass = icon.className;
                    
                    // Add loading class
                    this.classList.add('btn-loading');
                    icon.className = 'fas fa-spinner';
                    
                    setTimeout(() => {
                        this.classList.remove('btn-loading');
                        icon.className = originalClass;
                    }, 1200);
                }
            });
        });

        // Smooth scroll for main content
        document.addEventListener('DOMContentLoaded', function() {
            const mainContent = document.querySelector('.main-content');
            mainContent.style.scrollBehavior = 'smooth';
        });

        // Add haptic feedback for mobile devices
        if ('vibrate' in navigator) {
            document.querySelectorAll('.btn, .logout-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    navigator.vibrate(30); // Gentle vibration
                });
            });
        }

        // Keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.altKey && e.key >= '1' && e.key <= '9') {
                const index = parseInt(e.key) - 1;
                const buttons = document.querySelectorAll('.btn');
                if (buttons[index]) {
                    buttons[index].focus();
                    e.preventDefault();
                }
            }
        });
    </script>
</body>
</html>