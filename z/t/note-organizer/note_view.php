<?php
require_once 'includes/functions.php';

// Get note ID from URL
$noteId = $_GET['id'] ?? null;
if (!$noteId) {
    header('Location: index.html');
    exit;
}

$note = getNoteById($noteId);
if (!$note) {
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($note['title']); ?> - Note Organizer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .note-view-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 0 20px;
        }
        
        .note-view-header {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .note-view-header h1 {
            font-size: 2.2rem;
            color: #212529;
            margin-bottom: 15px;
        }
        
        .note-view-meta {
            display: flex;
            gap: 20px;
            color: #6c757d;
            font-size: 0.95rem;
        }
        
        .note-view-content {
            line-height: 1.7;
            font-size: 1.1rem;
        }
        
        .note-view-content img {
            max-width: 100%;
            height: auto;
            margin: 15px 0;
            border-radius: 8px;
        }
        
        .embed-container {
            margin: 20px 0;
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
        }
        
        .embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .note-actions {
            margin-top: 30px;
            display: flex;
            gap: 15px;
        }
        
        @media (max-width: 768px) {
            .note-view-container {
                margin: 20px auto;
                padding: 0 15px;
            }
            
            .note-view-header h1 {
                font-size: 1.8rem;
            }
            
            .note-view-meta {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="note-view-container">
        <div class="note-view-header">
            <h1><?php echo htmlspecialchars($note['title']); ?></h1>
            <div class="note-view-meta">
                <span><i class="fas fa-folder"></i> Category: <?php echo htmlspecialchars($note['category'] ?: 'None'); ?></span>
                <span><i class="fas fa-tags"></i> Tags: <?php echo htmlspecialchars($note['tags'] ?: 'None'); ?></span>
                <span><i class="fas fa-clock"></i> Last updated: <?php echo date('F j, Y', strtotime($note['updated_at'])); ?></span>
            </div>
        </div>
        
        <div class="note-view-content">
            <?php echo $note['content']; ?>
        </div>
        
        <div class="note-actions">
            <a href="index.html" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Organizer
            </a>
            <button class="btn btn-primary" onclick="window.print()">
                <i class="fas fa-print"></i> Print Note
            </button>
            <a href="index.html?note_id=<?php echo $note['id']; ?>" class="btn btn-primary">
                <i class="fas fa-edit"></i> Edit Note
            </a>
        </div>
    </div>
    
    <script>
        // Handle embedded content
        document.addEventListener('DOMContentLoaded', function() {
            // Make sure embedded content is responsive
            const embedContainers = document.querySelectorAll('.embed-container');
            embedContainers.forEach(container => {
                const iframe = container.querySelector('iframe');
                if (iframe) {
                    iframe.setAttribute('sandbox', 'allow-same-origin allow-scripts allow-forms allow-popups allow-modals');
                }
            });
        });
    </script>
</body>
</html>