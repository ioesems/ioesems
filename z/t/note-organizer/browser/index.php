<?php
// browser.php - Secure browser interface
$url = $_GET['url'] ?? '';

// Validate and sanitize URL
if (!empty($url)) {
    // Basic validation - only allow http/https
    if (!preg_match('/^https?:\/\//', $url)) {
        $url = 'https://' . $url;
    }
    
    // Additional security: Block dangerous protocols
    if (preg_match('/^(javascript|data|vbscript|file|ftp):/i', $url)) {
        $url = '';
    }
} else {
    $url = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Browser</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .browser-header {
            background: #f8f9fa;
            padding: 12px 20px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .browser-controls button {
            background: #e9ecef;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            padding: 6px 12px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .browser-controls button:hover {
            background: #dee2e6;
        }
        
        .browser-url {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }
        
        .browser-content {
            flex: 1;
            position: relative;
        }
        
        .browser-frame {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .error-message {
            padding: 20px;
            text-align: center;
            color: #6c757d;
        }
        
        .instructions {
            background: #e7f3ff;
            padding: 15px;
            margin: 10px 0;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="browser-header">
        <div class="browser-controls">
            <button id="backBtn" title="Back"><i class="fas fa-arrow-left"></i></button>
            <button id="forwardBtn" title="Forward"><i class="fas fa-arrow-right"></i></button>
            <button id="refreshBtn" title="Refresh"><i class="fas fa-sync"></i></button>
        </div>
        <input type="text" id="urlInput" class="browser-url" placeholder="Enter URL (e.g., https://example.com)" value="<?php echo htmlspecialchars($url); ?>">
        <button id="goBtn">Go</button>
        <button id="homeBtn" title="Home">Home</button>
    </div>
    
    <div class="browser-content">
        <?php if (!empty($url)): ?>
            <!-- 
            Note: Many sites (Google, Facebook, etc.) block iframe embedding.
            This will show an error for those sites, which is expected behavior.
            -->
            <iframe id="browserFrame" class="browser-frame" src="<?php echo htmlspecialchars($url); ?>"></iframe>
        <?php else: ?>
            <div class="error-message">
                <h3>Enter a URL to browse</h3>
                <div class="instructions">
                    <p><strong>Note:</strong> Many websites (like Google, YouTube, Facebook) block being embedded in iframes for security reasons.</p>
                    <p>Try sites that allow embedding like:</p>
                    <ul style="text-align: left; margin: 10px auto; display: inline-block;">
                        <li>Wikipedia.org</li>
                        <li>GitHub.com (some pages)</li>
                        <li>Many educational sites</li>
                        <li>Your own websites</li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlInput = document.getElementById('urlInput');
            const goBtn = document.getElementById('goBtn');
            const backBtn = document.getElementById('backBtn');
            const forwardBtn = document.getElementById('forwardBtn');
            const refreshBtn = document.getElementById('refreshBtn');
            const homeBtn = document.getElementById('homeBtn');
            const browserFrame = document.getElementById('browserFrame');
            
            // Go button
            goBtn.addEventListener('click', navigateToUrl);
            
            urlInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    navigateToUrl();
                }
            });
            
            function navigateToUrl() {
                let url = urlInput.value.trim();
                if (!url) return;
                
                // Add protocol if missing
                if (!url.match(/^https?:\/\//)) {
                    url = 'https://' + url;
                }
                
                // Update URL input
                urlInput.value = url;
                
                // Navigate iframe
                if (browserFrame) {
                    browserFrame.src = url;
                } else {
                    // If no iframe exists, reload page with URL
                    window.location.href = `browser.php?url=${encodeURIComponent(url)}`;
                }
            }
            
            // Navigation buttons (only work for same-origin)
            if (browserFrame) {
                backBtn.addEventListener('click', function() {
                    try {
                        browserFrame.contentWindow.history.back();
                    } catch(e) {
                        alert('Cannot navigate back (cross-origin restriction)');
                    }
                });
                
                forwardBtn.addEventListener('click', function() {
                    try {
                        browserFrame.contentWindow.history.forward();
                    } catch(e) {
                        alert('Cannot navigate forward (cross-origin restriction)');
                    }
                });
                
                refreshBtn.addEventListener('click', function() {
                    if (browserFrame.src) {
                        browserFrame.src = browserFrame.src;
                    }
                });
            }
            
            homeBtn.addEventListener('click', function() {
                urlInput.value = '';
                if (browserFrame) {
                    browserFrame.src = 'about:blank';
                } else {
                    window.location.href = 'browser.php';
                }
            });
            
            // Handle iframe load errors
            if (browserFrame) {
                browserFrame.addEventListener('load', function() {
                    try {
                        // This will fail for cross-origin sites, which is expected
                        const title = browserFrame.contentDocument.title;
                        document.title = title ? title + ' - Browser' : 'Browser';
                    } catch(e) {
                        // Cross-origin - can't access title
                        document.title = 'External Site - Browser';
                    }
                });
                
                // Note: There's no reliable way to detect iframe load errors
                // due to cross-origin restrictions
            }
        });
    </script>
</body>
</html>