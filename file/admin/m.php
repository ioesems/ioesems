<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #2E7D32;
            --primary-yellow: #FBC02D;
            --accent-green: #4CAF50;
            --accent-yellow: #FFD54F;
            --light-green: #E8F5E8;
            --light-yellow: #FFF9C4;
            --neutral-light: #F8F9FA;
            --neutral-dark: #212529;
            --neutral-medium: #6C757D;
            --card-bg: #FFFFFF;
            --shadow: 0 1px 4px rgba(0,0,0,0.1);
            --border-radius: 6px;
            --transition: all 0.2s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: linear-gradient(135deg, var(--light-green) 0%, var(--light-yellow) 100%);
            color: var(--neutral-dark);
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
        }

        .header {
            background: var(--card-bg);
            padding: 12px 16px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 8px;
            text-align: center;
            flex-shrink: 0;
        }

        .header h1 {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .header .subtitle {
            font-size: 0.8rem;
            color: var(--neutral-medium);
            margin-bottom: 8px;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px 12px;
            background: var(--light-green);
            border-radius: var(--border-radius);
            font-size: 0.75rem;
            font-weight: 500;
            border: 1px solid var(--accent-green);
        }

        .status-indicator i {
            margin-right: 4px;
            color: var(--accent-green);
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
            color: white;
            position: relative;
            overflow: hidden;
            min-height: 44px;
        }

        .btn:active {
            transform: scale(0.98);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-green), var(--accent-green));
        }

        .btn-secondary {
            background: linear-gradient(135deg, var(--primary-yellow), var(--accent-yellow));
            color: var(--neutral-dark);
        }

        .btn-accent {
            background: linear-gradient(135deg, var(--accent-green), var(--primary-green));
        }

        .btn-future {
            background: linear-gradient(135deg, var(--neutral-medium), #8E9AAF);
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
            background: linear-gradient(135deg, #E57373, #F44336);
            color: white;
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
        }

        .logout-btn:active {
            transform: scale(0.98);
        }

        .footer {
            flex-shrink: 0;
            padding: 8px;
            text-align: center;
            font-size: 0.65rem;
            color: var(--neutral-medium);
            background: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-top: 8px;
        }

        /* Scrollbar styling */
        .main-content::-webkit-scrollbar {
            width: 3px;
        }

        .main-content::-webkit-scrollbar-track {
            background: transparent;
        }

        .main-content::-webkit-scrollbar-thumb {
            background: var(--accent-green);
            border-radius: 3px;
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
                max-width: 800px;
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
        }

        /* Desktop optimizations */
        @media (min-width: 1024px) {
            .btn-grid {
                grid-template-columns: repeat(5, 1fr);
            }
        }

        /* Accessibility */
        .btn:focus,
        .logout-btn:focus {
            outline: 2px solid var(--accent-yellow);
            outline-offset: 1px;
        }

        /* Smooth animations */
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.4s;
        }

        .btn:active::before {
            left: 100%;
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
            <p class="subtitle">Secure Content Management</p>
            
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
                
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-graduation-cap"></i>
                    <span>IOE + KEC News</span>
                </a>
                
                <a href="#" class="btn btn-accent">
                    <i class="fas fa-gamepad"></i>
                    <span>Games</span>
                </a>
                
                <a href="#" class="btn btn-future">
                    <i class="fas fa-quote-right"></i>
                    <span>Hindi Quotes</span>
                </a>
                
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-tags"></i>
                    <span>Quote Categories</span>
                </a>
                
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-cog"></i>
                    <span>MCQ Admin Panel</span>
                </a>
                
                <a href="#" class="btn btn-accent">
                    <i class="fas fa-clipboard-list"></i>
                    <span>MCQ Test</span>
                </a>
                
                <a href="#" class="btn btn-future">
                    <i class="fas fa-file-alt"></i>
                    <span>Auto Upload Log</span>
                </a>
                
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-bookmark"></i>
                    <span>Bookmarks</span>
                </a>
                
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-question-circle"></i>
                    <span>Fun Questions</span>
                </a>
                
                <a href="#" class="btn btn-accent">
                    <i class="fas fa-project-diagram"></i>
                    <span>Langflow</span>
                </a>
                
                <a href="#" class="btn btn-future">
                    <i class="fas fa-robot"></i>
                    <span>Instrumentation AI</span>
                </a>
                
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-language"></i>
                    <span>English Test</span>
                </a>
                
                <a href="#" class="btn btn-secondary">
                    <i class="fas fa-broadcast-tower"></i>
                    <span>Public Channel</span>
                </a>
                
                <a href="#" class="btn btn-accent">
                    <i class="fas fa-comment-dots"></i>
                    <span>Comments</span>
                </a>
                
                <a href="#" class="btn btn-future">
                    <i class="fas fa-plus-circle"></i>
                    <span>New Feature</span>
                </a>
            </div>
        </div>

        <div class="logout-section">
            <a href="logout.php" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </div>

        <div class="footer">
            <p>🔒 Secure Admin Panel • Professional Dashboard</p>
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
                    icon.className = 'fas fa-spinner fa-spin';
                    
                    setTimeout(() => {
                        icon.className = originalClass;
                    }, 1000);
                }
            });
        });

        // Smooth scroll for main content
        document.addEventListener('DOMContentLoaded', function() {
            const mainContent = document.querySelector('.main-content');
            mainContent.style.scrollBehavior = 'smooth';
        });

        // Add haptic feedback for mobile
        if ('vibrate' in navigator) {
            document.querySelectorAll('.btn, .logout-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    navigator.vibrate(50);
                });
            });
        }
    </script>
</body>
</html>