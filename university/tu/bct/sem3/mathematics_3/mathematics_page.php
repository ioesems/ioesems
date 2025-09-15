<?php include '../../../../../components/head-foot/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematice 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Body & Font */
        body {
            padding-top: 80px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8ffb0 0%, #c0e980 100%);
            color: #2d5016;
            line-height: 1.6;
        }
        
        body.dark-mode {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: #e8f5e8;
        }

        /* Page Heading */
        .page-title {
            font-weight: 800;
            font-size: 2.2rem;
            color: #1e4d0f;
            margin-bottom: 2rem;
            text-align: center;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        body.dark-mode .page-title {
            color: #a8e063;
        }

        /* Section Headers */
        .section-header {
            background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            margin: 2rem 0 1.5rem 0;
            font-weight: 700;
            font-size: 1.3rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(86, 171, 47, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .section-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .section-header:hover::before {
            left: 100%;
        }
        
        body.dark-mode .section-header {
            background: linear-gradient(135deg, #3d7c47 0%, #7fb069 100%);
        }

        /* Resource Cards */
        .resource-card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            margin-bottom: 1.2rem;
            transition: all 0.3s ease;
            background: rgba(255,255,255,0.95);
            border: 1px solid rgba(86, 171, 47, 0.1);
        }
        
        .resource-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(86, 171, 47, 0.2);
        }
        
        body.dark-mode .resource-card {
            background: rgba(45, 45, 45, 0.95);
            border: 1px solid rgba(168, 224, 99, 0.2);
        }

        .resource-card a {
            display: block;
            padding: 1.2rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #56ab2f 0%, #a8e063 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .resource-card a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #a8e063 0%, #56ab2f 100%);
            transition: left 0.3s ease;
            z-index: -1;
        }
        
        .resource-card a:hover::before {
            left: 0;
        }
        
        .resource-card a:hover {
            transform: scale(1.02);
            color: white;
        }
        
        .resource-card a i {
            margin-right: 0.5rem;
            font-size: 1.1rem;
        }

        /* Container */
        .main-container {
            max-width: 1000px;
            padding: 0 15px;
        }
        
        .section-container {
            margin-bottom: 2.5rem;
        }

        /* Force 2-column layout on all devices with compact spacing */
        .row .col-12.col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
            padding-left: 5px;
            padding-right: 5px;
        }

        /* Responsive Design - Optimized for single window view */
        @media (max-width: 768px) {
            body {
                padding-top: 50px;
            }
            
            .main-container {
                height: calc(100vh - 100px);
                padding: 0 8px;
            }
            
            .page-title {
                font-size: 1.5rem;
                margin-bottom: 0.8rem;
            }
            
            .section-header {
                font-size: 0.9rem;
                padding: 0.5rem 0.8rem;
                margin: 0.6rem 0 0.4rem 0;
            }
            
            .resource-card a {
                font-size: 0.75rem;
                padding: 0.7rem 0.8rem;
                line-height: 1.3;
            }
            
            .resource-card a i {
                font-size: 0.8rem;
                margin-right: 0.3rem;
            }
            
            .resource-card {
                margin-bottom: 0.6rem;
            }
            
            .section-container {
                margin-bottom: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .main-container {
                height: calc(100vh - 90px);
                padding: 0 6px;
            }
            
            .page-title {
                font-size: 1.3rem;
                margin-bottom: 0.6rem;
            }
            
            .section-header {
                font-size: 0.8rem;
                padding: 0.4rem 0.6rem;
                margin: 0.5rem 0 0.3rem 0;
            }
            
            .resource-card a {
                font-size: 0.7rem;
                padding: 0.6rem 0.7rem;
                line-height: 1.2;
            }
            
            .resource-card a i {
                font-size: 0.75rem;
                margin-right: 0.25rem;
            }
            
            .resource-card {
                margin-bottom: 0.5rem;
            }
            
            .section-container {
                margin-bottom: 0.8rem;
            }
            
            .row .col-12.col-md-6 {
                padding-left: 3px;
                padding-right: 3px;
            }
        }
        
        @media (max-width: 400px) {
            .main-container {
                height: calc(100vh - 85px);
                padding: 0 4px;
            }
            
            .page-title {
                font-size: 1.2rem;
                margin-bottom: 0.5rem;
            }
            
            .section-header {
                font-size: 0.75rem;
                padding: 0.35rem 0.5rem;
                margin: 0.4rem 0 0.25rem 0;
            }
            
            .resource-card a {
                font-size: 0.65rem;
                padding: 0.5rem 0.6rem;
                line-height: 1.2;
            }
            
            .resource-card a i {
                font-size: 0.7rem;
                margin-right: 0.2rem;
            }
            
            .resource-card {
                margin-bottom: 0.4rem;
            }
            
            .section-container {
                margin-bottom: 0.6rem;
            }
            
            .row .col-12.col-md-6 {
                padding-left: 2px;
                padding-right: 2px;
            }
        }
        
        @media (max-width: 320px) {
            .main-container {
                height: calc(100vh - 80px);
                padding: 0 3px;
            }
            
            .page-title {
                font-size: 1.1rem;
                margin-bottom: 0.4rem;
            }
            
            .section-header {
                font-size: 0.7rem;
                padding: 0.3rem 0.4rem;
                margin: 0.3rem 0 0.2rem 0;
            }
            
            .resource-card a {
                font-size: 0.6rem;
                padding: 0.45rem 0.5rem;
                line-height: 1.1;
            }
            
            .resource-card a i {
                font-size: 0.65rem;
                margin-right: 0.15rem;
            }
            
            .resource-card {
                margin-bottom: 0.3rem;
            }
            
            .section-container {
                margin-bottom: 0.5rem;
            }
            
            .row .col-12.col-md-6 {
                padding-left: 1px;
                padding-right: 1px;
            }
        }
        
        /* Ensure content fits in viewport */
        @media (max-height: 600px) {
            .main-container {
                height: calc(100vh - 70px);
            }
            
            .page-title {
                font-size: 1.2rem;
                margin-bottom: 0.5rem;
            }
            
            .section-header {
                font-size: 0.8rem;
                padding: 0.4rem 0.6rem;
                margin: 0.4rem 0 0.3rem 0;
            }
            
            .resource-card a {
                font-size: 0.7rem;
                padding: 0.6rem 0.7rem;
            }
            
            .section-container {
                margin-bottom: 0.7rem;
            }
        }

        /* Animation for page load */
        .fade-in {
            animation: fadeInUp 0.6s ease-out;
        }
        
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
    </style>
</head>

<body>
    <div class="container main-container">
        <h1 class="page-title fade-in">Mathematice 3</h1> 
        
        <!-- First Level: Notes -->
        <div class="section-container fade-in">
            <div class="section-header">
                <i class="fas fa-book-open"></i> Notes
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/1auZR2paYwi5vACdn3reAfm0b8COJ3l2e?usp=drive_link" target="_blank">
                            <i class="fas fa-file-alt"></i>Detailed Notes
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/1auZR2paYwi5vACdn3reAfm0b8COJ3l2e?usp=drive_link" target="_blank">
                            <i class="fas fa-sticky-note"></i>Short Notes
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Level: Chapter-wise Questions -->
        <div class="section-container fade-in">
            <div class="section-header">
                <i class="fas fa-question-circle"></i> Chapter-wise Questions
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/132Ul72Q_XfGJf2P4HJnvFyGAHhi9yqwv?usp=drive_link" target="_blank">
                            <i class="fas fa-list"></i>Question List
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/132Ul72Q_XfGJf2P4HJnvFyGAHhi9yqwv?usp=drive_link" target="_blank">
                            <i class="fas fa-lightbulb"></i>Questions with Solutions
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Level: Previous Year Questions (PYQ) -->
        <div class="section-container fade-in">
            <div class="section-header">
                <i class="fas fa-history"></i> Previous Year Questions (PYQ)
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/13p9Xnm7uI8rZlua02rHIK8_CZL2RGA6x?usp=drive_link" target="_blank">
                            <i class="fas fa-archive"></i>PYQ Collection
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/13p9Xnm7uI8rZlua02rHIK8_CZL2RGA6x?usp=drive_link" target="_blank">
                            <i class="fas fa-check-circle"></i>PYQ with Solutions
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fourth Level: Additional Resources -->
        <div class="section-container fade-in">
            <div class="section-header">
                <i class="fas fa-plus-circle"></i> Additional Resources
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/1xXXdw0ElJ4zJlcSqubn2bZwoqiCBqtOe?usp=drive_link" target="_blank">
                            <i class="fas fa-graduation-cap"></i>Syllabus
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="resource-card">
                        <a href="https://drive.google.com/drive/folders/1mIGGc6yJIrUD-SSFaXkLGfxbgvNNka-l?usp=drive_link" target="_blank">
                            <i class="fas fa-flask"></i>Lab Reports
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../../../../../components/head-foot/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add staggered animation to cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.resource-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });
        });
    </script>
</body>
</html>