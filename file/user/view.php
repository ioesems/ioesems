<?php
// Enable error reporting to debug issues
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the configuration file to connect to the database
include '../admin/config.php';

// Check if the connection was successful
if ($conn === null || $conn->connect_error) {
    die("Database connection failed: " . ($conn ? $conn->connect_error : 'No connection object'));
}

// Fetch the material ID from the query string
$material_id = isset($_GET['id']) ? intval($_GET['id']) : null;
if ($material_id) {
    // Fetch the material details based on the ID
    $sql_material = "SELECT * FROM materials WHERE id = $material_id";
    $result_material = $conn->query($sql_material);
    if ($result_material->num_rows > 0) {
        $material = $result_material->fetch_assoc();
    } else {
        die("Material not found.");
    }
} else {
    die("Invalid material ID.");
}

// Function to detect if user is on Android device
function isAndroidDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    return stripos($userAgent, 'Android') !== false;
}

// Function to detect mobile devices
function isMobileDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    return preg_match('/(android|iphone|ipad|mobile|phone)/i', $userAgent);
}

$isAndroid = isAndroidDevice();
$isMobile = isMobileDevice();

// Determine the referring page (used for back button)
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>View Material</title>
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
            touch-action: manipulation;
        }

        .container {
            width: 90%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            transition: all .3s ease;
        }

        .pdf-container {
            text-align: center;
            margin-top: 20px;
            position: relative;
        }

        .pdf-canvas-container {
            width: 100%;
            min-height: 50vh;
            overflow-x: hidden;
            overflow-y: auto;
            position: relative;
            -webkit-overflow-scrolling: touch;
            touch-action: pan-y pinch-zoom;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 0;
            transform-origin: top center;
            transition: transform 0.1s ease-out;
        }

        .pdf-canvas-container.rendering {
            opacity: 0.95;
            pointer-events: none;
            cursor: wait;
            transition: opacity 0.1s ease;
        }

        .pdf-page {
            display: block;
            margin: 20px auto;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            box-sizing: border-box;
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
            transform-origin: center top;
            transition: transform 0.1s ease-out;
        }

        .exit-fullscreen-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            background: rgba(244, 67, 54, 0.95);
            color: white;
            border: none;
            padding: 12px 16px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 14px;
            display: none;
            z-index: 10001;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .exit-fullscreen-btn:hover {
            transform: scale(1.03);
        }

        body.fullscreen-mode {
            background: #000;
            margin: 0;
            padding: 0;
        }

        body.fullscreen-mode .toolbar,
        body.fullscreen-mode h1,
        body.fullscreen-mode .device-info,
        body.fullscreen-mode .page-navigation,
        body.fullscreen-mode .back-button,
        body.fullscreen-mode .progress-container,
        body.fullscreen-mode .loading,
        body.fullscreen-mode .error,
        body.fullscreen-mode .thumbnail-nav,
        body.fullscreen-mode .shortcuts-info,
        body.fullscreen-mode .rotate-indicator,
        body.fullscreen-mode .search-overlay {
            display: none !important;
        }

        body.fullscreen-mode .container {
            width: 100%;
            height: 100vh;
            margin: 0;
            padding: 0;
            border-radius: 0;
            box-shadow: none;
        }

        body.fullscreen-mode .pdf-container,
        body.fullscreen-mode .pdf-canvas-container {
            width: 100%;
            height: 100vh;
            padding: 0;
            margin: 0;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            touch-action: pan-y pinch-zoom;
        }

        body.fullscreen-mode .exit-fullscreen-btn {
            display: flex !important;
            z-index: 10002;
        }

        .swipe-indicator {
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 20px;
            font-weight: bold;
            z-index: 10003;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .progress-container {
            width: 100%;
            height: 4px;
            background: #eee;
            border-radius: 2px;
            margin: 10px 0;
        }

        .progress-bar {
            height: 100%;
            background: #2196F3;
            border-radius: 2px;
            width: 0%;
            transition: width 0.2s ease;
        }

        .page-navigation {
            margin: 15px 0;
        }

        .page-navigation button {
            background: #f5f5f5;
            border: 1px solid #ddd;
            padding: 8px 16px;
            margin: 0 5px;
            border-radius: 4px;
            cursor: pointer;
        }

        .page-navigation button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .page-info {
            font-weight: bold;
            margin: 0 10px;
        }

        /* Ensure canvas container is on top in fullscreen */
        body.fullscreen-mode .pdf-canvas-container {
            z-index: 9999;
            position: relative;
        }
    </style>

    <?php if ($isAndroid): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
        <script>pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';</script>
    <?php endif; ?>
</head>

<body>
    <button class="exit-fullscreen-btn" id="exit-fullscreen-btn" onclick="exitFullscreen()">
        <i class="fas fa-times"></i> Exit Fullscreen
    </button>

    <div class="container" id="main-container">
        <div class="pdf-container" id="pdf-container">
            <h2><?php echo htmlspecialchars($material['subject']); ?> - Semester <?php echo htmlspecialchars($material['semester']); ?></h2>

            <?php if ($isAndroid): ?>
                <div id="loading" class="loading">
                    <div>Loading PDF...</div>
                    <div class="loading-percentage" id="loading-percentage">0%</div>
                </div>

                <div id="error" class="error" style="display:none;">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p>Error loading PDF.</p>
                    <div style="margin-top:15px;">
                        <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>" target="_blank"
                            style="display:inline-block;margin:5px;padding:10px 15px;background-color:#4CAF50;color:white;text-decoration:none;border-radius:4px;">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                        <button onclick="tryGoogleViewer()"
                            style="margin:5px;padding:10px 15px;background-color:#2196F3;color:white;border:none;border-radius:4px;cursor:pointer;">
                            <i class="fas fa-external-link-alt"></i> Open in Google Viewer
                        </button>
                    </div>
                </div>

                <div id="pdf-controls" style="display:none;">
                    <div class="page-navigation">
                        <button id="prev-page" onclick="previousPage()"><i class="fas fa-chevron-left"></i></button>
                        <span class="page-info">Page <span id="page-num">1</span> of <span id="page-count">-</span></span>
                        <button id="next-page" onclick="nextPage()"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <div class="progress-container">
                        <div class="progress-bar" id="progress-bar"></div>
                    </div>
                    <div class="custom-pdf-viewer" id="pdf-viewer-container">
                        <div id="pdf-canvas" class="pdf-canvas-container"></div>
                    </div>
                </div>
            <?php else: ?>
                <iframe id="pdf-viewer" src="../user/<?php echo htmlspecialchars($material['material_file']); ?>"
                    type="application/pdf" style="width:100%;height:80vh;border:none;border-radius:8px;">
                    Your browser does not support PDFs. <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>">Download the file</a>.
                </iframe>
            <?php endif; ?>
        </div>

        <div class="toolbar" id="toolbar">
            <button onclick="toggleFullscreen()" id="fullscreen-btn">
                <i class="fas fa-expand" id="fullscreen-icon"></i> 
                <span id="fullscreen-text">Fullscreen</span>
            </button>
            <?php if ($isAndroid): ?>
                <button id="zoom-out" onclick="zoomOut()"><i class="fas fa-search-minus"></i> Zoom Out</button>
                <button id="zoom-in" onclick="zoomIn()"><i class="fas fa-search-plus"></i> Zoom In</button>
                <button onclick="fitToWidth()"><i class="fas fa-expand-arrows-alt"></i> Fit Width</button>
                <button onclick="rotatePage()" class="secondary"><i class="fas fa-redo"></i> Rotate</button>
            <?php else: ?>
                <button onclick="zoomInIframe()"><i class="fas fa-search-plus"></i> Zoom In</button>
                <button onclick="zoomOutIframe()"><i class="fas fa-search-minus"></i> Zoom Out</button>
            <?php endif; ?>
            <button onclick="downloadPDF()"><i class="fas fa-download"></i> Download</button>
            <button onclick="printPDF()"><i class="fas fa-print"></i> Print</button>
        </div>

        <a href="<?php echo htmlspecialchars($referrer); ?>" class="back-button"
            style="display:inline-block;margin-top:20px;padding:12px 24px;background-color:#4CAF50;color:#fff;text-decoration:none;border-radius:6px;">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <script>
        // ======================
        // GLOBAL VARIABLES
        // ======================
        let pdfDoc = null;
        let pageNum = 1;
        let scale = 1.0;
        let rotation = 0;
        let isFullscreen = false;
        let totalPages = 0;
        let pagesRendered = 0;

        // Gesture state
        let isSwiping = false;
        let isPinching = false;
        let lastSwipeTime = 0;
        let touchStartX = 0;
        let touchStartY = 0;
        let initialPinchDistance = 0;
        let pinchStartScale = 1.0;
        let pinchStartX = 0;
        let pinchStartY = 0;

        // Constants
        const SWIPE_COOLDOWN_MS = 450;
        const MIN_SWIPE_VELOCITY = 0.6;
        const MIN_SWIPE_DISTANCE = 70;

        // ======================
        // INIT
        // ======================
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            <?php if ($isAndroid): ?>
            initializePDFViewer();
            <?php endif; ?>
        });

        // ======================
        // PDF VIEWER (ANDROID)
        // ======================
        <?php if ($isAndroid): ?>
        function initializePDFViewer() {
            const pdfUrl = '../user/<?php echo htmlspecialchars($material['material_file']); ?>';
            const loadingTask = pdfjsLib.getDocument(pdfUrl);

            loadingTask.onProgress = function(progressData) {
                if (progressData && progressData.total) {
                    const percentLoaded = Math.round((progressData.loaded / progressData.total) * 100);
                    const el = document.getElementById('loading-percentage');
                    if (el) el.textContent = percentLoaded + '%';
                }
            };

            loadingTask.promise.then(function(pdf) {
                pdfDoc = pdf;
                totalPages = pdf.numPages;

                document.getElementById('page-count').textContent = pdf.numPages;
                document.getElementById('loading').style.display = 'none';
                document.getElementById('pdf-controls').style.display = 'block';

                renderAllPages();
                updateNavigationButtons();
            }).catch(function(error) {
                console.error('Error loading PDF:', error);
                document.getElementById('loading').style.display = 'none';
                document.getElementById('error').style.display = 'block';
            });
        }

        function renderAllPages() {
            if (!pdfDoc) return;
            pagesRendered = 0;
            const canvasContainer = document.getElementById('pdf-canvas');
            
            // Clear container
            canvasContainer.innerHTML = '';

            // Render all pages
            for (let i = 1; i <= totalPages; i++) {
                renderPage(i, true);
            }

            // After rendering, reset any CSS scale and remove loading state
            setTimeout(() => {
                canvasContainer.style.transform = 'scale(1)';
                canvasContainer.classList.remove('rendering');
                
                // Scroll to current page
                const currentPage = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
                if (currentPage) {
                    currentPage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }, 100);
        }

        function renderPage(num, isPartOfBatch = false) {
            if (!pdfDoc) return;

            pdfDoc.getPage(num).then(function(page) {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                const container = document.getElementById('pdf-canvas');
                const containerWidth = Math.max(container.clientWidth - 40, 320);

                // Get original viewport
                const viewport = page.getViewport({ scale: 1.0, rotation: rotation });

                // Calculate scale to fit width
                const responsiveScale = containerWidth / viewport.width;

                // Apply device pixel ratio for sharpness
                const pixelRatio = window.devicePixelRatio || 1;
                const finalScale = scale * responsiveScale * pixelRatio;

                // Get scaled viewport
                const scaledViewport = page.getViewport({ scale: finalScale, rotation: rotation });

                // Set canvas size (CSS + actual pixels)
                canvas.style.width = `${scaledViewport.width / pixelRatio}px`;
                canvas.style.height = `${scaledViewport.height / pixelRatio}px`;
                canvas.width = scaledViewport.width;
                canvas.height = scaledViewport.height;

                canvas.className = 'pdf-page';
                canvas.dataset.pagenumber = num;

                // Render
                const renderContext = {
                    canvasContext: ctx,
                    viewport: scaledViewport
                };

                page.render(renderContext).promise.then(function() {
                    const canvasContainer = document.getElementById('pdf-canvas');
                    canvasContainer.appendChild(canvas);

                    pagesRendered++;
                    if (totalPages > 0) {
                        const progress = (pagesRendered / totalPages) * 100;
                        const progressBar = document.getElementById('progress-bar');
                        if (progressBar) progressBar.style.width = progress + '%';
                    }

                    if (!isPartOfBatch) {
                        canvas.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }).catch(console.error);
            }).catch(console.error);

            if (!isPartOfBatch) {
                document.getElementById('page-num').textContent = num;
                pageNum = num;
                updateNavigationButtons();
            }
        }
        <?php endif; ?>

        // ======================
        // GESTURE HANDLING — STABLE & FLAWLESS
        // ======================
        function setupEventListeners() {
            const pdfContainer = document.getElementById('pdf-canvas');
            if (!pdfContainer) return;

            // Clone to remove old listeners
            const newContainer = pdfContainer.cloneNode(true);
            pdfContainer.parentNode.replaceChild(newContainer, pdfContainer);

            // Apply fresh listeners
            newContainer.addEventListener('touchstart', handleTouchStart, { passive: false });
            newContainer.addEventListener('touchmove', handleTouchMove, { passive: false });
            newContainer.addEventListener('touchend', handleTouchEnd, { passive: true });

            // Keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                if (e.target.tagName === 'INPUT') return;
                switch(e.key) {
                    case 'ArrowLeft': previousPage(); break;
                    case 'ArrowRight': nextPage(); break;
                    case 'Escape': if (isFullscreen) exitFullscreen(); break;
                    case 'f': case 'F': toggleFullscreen(); break;
                    case ' ': nextPage(); break;
                    case '+': case '=': zoomIn(); break;
                    case '-': zoomOut(); break;
                }
            });
        }

        function handleTouchStart(e) {
            if (e.touches.length === 2) {
                isPinching = true;
                isSwiping = false;

                // Store initial pinch distance and scale
                initialPinchDistance = getDistance(e.touches[0], e.touches[1]);
                pinchStartScale = scale;

                // Store center point of pinch
                pinchStartX = (e.touches[0].clientX + e.touches[1].clientX) / 2;
                pinchStartY = (e.touches[0].clientY + e.touches[1].clientY) / 2;

                if (window.navigator.vibrate) window.navigator.vibrate(5);
                e.preventDefault();
            } else if (e.touches.length === 1 && !isPinching) {
                isSwiping = true;
                isPinching = false;
                touchStartX = e.touches[0].clientX;
                touchStartY = e.touches[0].clientY;
            }
        }

        function handleTouchMove(e) {
            if (isPinching && e.touches.length === 2) {
                const currentDistance = getDistance(e.touches[0], e.touches[1]);
                const zoomFactor = currentDistance / initialPinchDistance;
                let newScale = pinchStartScale * zoomFactor;

                // Clamp scale
                newScale = Math.max(0.5, Math.min(3.0, newScale));

                // Apply live CSS scale for smoothness (NO RE-RENDER)
                const container = document.getElementById('pdf-canvas');
                container.style.transform = `scale(${newScale / scale})`;

                e.preventDefault();
            }
        }

        function handleTouchEnd(e) {
            if (isPinching) {
                isPinching = false;

                const container = document.getElementById('pdf-canvas');
                const computedStyle = window.getComputedStyle(container);
                const matrix = computedStyle.transform;

                let cssScale = 1;
                if (matrix !== 'none' && matrix !== 'matrix(1, 0, 0, 1, 0, 0)') {
                    const values = matrix.split('(')[1].split(')')[0].split(',');
                    cssScale = parseFloat(values[0]);
                }

                // Calculate final scale
                let newScale = scale * cssScale;
                newScale = Math.max(0.5, Math.min(3.0, newScale));

                // Update global scale
                scale = newScale;

                // Add loading state
                container.classList.add('rendering');

                // Re-render at new scale
                if (typeof renderAllPages === 'function') {
                    renderAllPages();
                    if (window.navigator.vibrate) window.navigator.vibrate(10);
                }
            } else if (isSwiping) {
                isSwiping = false;
                handleSwipeEnd(e);
            }
        }

        function getDistance(touch1, touch2) {
            const dx = touch2.clientX - touch1.clientX;
            const dy = touch2.clientY - touch1.clientY;
            return Math.sqrt(dx * dx + dy * dy);
        }

        function handleSwipeEnd(e) {
            const touchEndY = e.changedTouches[0].clientY;
            const deltaY = touchEndY - touchStartY;
            const now = Date.now();
            const deltaTime = now - lastSwipeTime;
            const absDeltaY = Math.abs(deltaY);
            const velocityY = absDeltaY / Math.max(deltaTime, 1);

            if (deltaTime < SWIPE_COOLDOWN_MS || absDeltaY < MIN_SWIPE_DISTANCE || velocityY < MIN_SWIPE_VELOCITY) {
                return;
            }

            lastSwipeTime = now;

            if (deltaY > 0) {
                showIndicator('▼', 1000);
                previousPage();
            } else {
                showIndicator('▲', 1000);
                nextPage();
            }

            if (window.navigator.vibrate) window.navigator.vibrate(15);
        }

        function showIndicator(text, duration = 1000) {
            const indicator = document.createElement('div');
            indicator.textContent = text;
            Object.assign(indicator.style, {
                position: 'fixed',
                top: text === '▲' ? '20px' : 'auto',
                bottom: text === '▼' ? '20px' : 'auto',
                left: '50%',
                transform: 'translateX(-50%)',
                background: 'rgba(0,0,0,0.7)',
                color: 'white',
                padding: '10px 20px',
                borderRadius: '20px',
                fontSize: '24px',
                fontWeight: 'bold',
                zIndex: 10003,
                opacity: '1',
                transition: 'opacity 0.3s'
            });
            document.body.appendChild(indicator);
            setTimeout(() => {
                indicator.style.opacity = '0';
                setTimeout(() => {
                    if (indicator.parentNode) {
                        document.body.removeChild(indicator);
                    }
                }, 300);
            }, duration);
        }

        // ======================
        // PAGE NAVIGATION
        // ======================
        function previousPage() {
            if (pageNum <= 1) return;
            pageNum--;
            scrollToPage();
            updateNavigationButtons();
        }

        function nextPage() {
            if (pageNum >= totalPages) return;
            pageNum++;
            scrollToPage();
            updateNavigationButtons();
        }

        function scrollToPage() {
            const target = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
            document.getElementById('page-num').textContent = pageNum;
        }

        function updateNavigationButtons() {
            const prevBtn = document.getElementById('prev-page');
            const nextBtn = document.getElementById('next-page');
            if (prevBtn) prevBtn.disabled = pageNum <= 1;
            if (nextBtn) nextBtn.disabled = pageNum >= totalPages;
        }

        // ======================
        // ZOOM — STABLE & FLAWLESS
        // ======================
        function zoomIn() {
            if (scale >= 3.0) return;
            scale += 0.25;
            const container = document.getElementById('pdf-canvas');
            container.style.transform = 'scale(1.2)';
            container.classList.add('rendering');
            if (typeof renderAllPages === 'function') renderAllPages();
        }

        function zoomOut() {
            if (scale <= 0.5) return;
            scale -= 0.25;
            const container = document.getElementById('pdf-canvas');
            container.style.transform = 'scale(0.8)';
            container.classList.add('rendering');
            if (typeof renderAllPages === 'function') renderAllPages();
        }

        function fitToWidth() {
            scale = 1.0;
            const container = document.getElementById('pdf-canvas');
            container.classList.add('rendering');
            if (typeof renderAllPages === 'function') renderAllPages();
        }

        function rotatePage() {
            rotation = (rotation + 90) % 360;
            const container = document.getElementById('pdf-canvas');
            container.classList.add('rendering');
            if (typeof renderAllPages === 'function') renderAllPages();
        }

        // ======================
        // FULLSCREEN — GESTURE COMPATIBLE
        // ======================
        function toggleFullscreen() {
            const container = document.getElementById('main-container');
            const exitBtn = document.getElementById('exit-fullscreen-btn');

            if (!isFullscreen) {
                enterFullscreen(container);
            } else {
                exitFullscreen();
            }
        }

        function enterFullscreen(element) {
            const requestFS = element.requestFullscreen || element.webkitRequestFullscreen || element.mozRequestFullScreen || element.msRequestFullscreen;
            if (requestFS) {
                requestFS.call(element)
                    .then(() => {
                        isFullscreen = true;
                        exitBtn.style.display = 'flex';
                        setTimeout(setupEventListeners, 100);
                    })
                    .catch(fallbackFullscreen);
            } else {
                fallbackFullscreen();
            }
        }

        function fallbackFullscreen() {
            document.body.classList.add('fullscreen-mode');
            document.getElementById('exit-fullscreen-btn').style.display = 'flex';
            isFullscreen = true;
            setTimeout(setupEventListeners, 100);
            if (typeof renderAllPages === 'function') setTimeout(renderAllPages, 100);
        }

        function exitFullscreen() {
            const exitFS = document.exitFullscreen || document.webkitExitFullscreen || document.mozCancelFullScreen || document.msExitFullscreen;
            if (exitFS && (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement)) {
                exitFS.call(document);
            }
            document.body.classList.remove('fullscreen-mode');
            document.getElementById('exit-fullscreen-btn').style.display = 'none';
            isFullscreen = false;
            setTimeout(setupEventListeners, 100);
            if (typeof renderAllPages === 'function') setTimeout(renderAllPages, 100);
        }

        // ======================
        // UTILITIES
        // ======================
        function tryGoogleViewer() {
            const pdfUrl = encodeURIComponent(window.location.origin + '/../user/<?php echo htmlspecialchars($material['material_file']); ?>');
            window.open(`https://docs.google.com/viewer?url=${pdfUrl}&embedded=true`, '_blank');
        }

        function downloadPDF() {
            const link = document.createElement('a');
            link.href = "../user/<?php echo htmlspecialchars($material['material_file']); ?>";
            link.download = "<?php echo htmlspecialchars($material['material_title']); ?>.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function printPDF() {
            window.open("../user/<?php echo htmlspecialchars($material['material_file']); ?>", '_blank');
        }

        <?php if (!$isAndroid): ?>
        function zoomInIframe() {
            const iframe = document.getElementById('pdf-viewer');
            if (iframe) iframe.style.width = (iframe.offsetWidth + 50) + 'px';
        }

        function zoomOutIframe() {
            const iframe = document.getElementById('pdf-viewer');
            if (iframe && iframe.offsetWidth > 300) {
                iframe.style.width = (iframe.offsetWidth - 50) + 'px';
            }
        }
        <?php endif; ?>
    </script>
</body>
</html>