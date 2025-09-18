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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Material</title>
    <link rel="icon" type="image/png" href="../../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* --- base styles omitted for brevity in this view; full styles are preserved in the file --- */
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; color: #333; margin: 0; padding: 0; }
        .container { width: 90%; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-top:20px; transition: all .3s ease; }
        .pdf-container { text-align:center; margin-top:20px; position:relative; }
        .pdf-canvas-container { width:100%; height:100%; overflow-x:hidden; overflow-y:auto; position:relative; -webkit-overflow-scrolling: touch; touch-action: pan-y; display:flex; flex-direction:column; align-items:center; }
        
        
        
         .pdf-page {
    display: block;
    margin: 20px auto;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    max-width: 100%;
    box-sizing: border-box;
    image-rendering: -webkit-optimize-contrast; /* Crisp rendering on WebKit */
    image-rendering: crisp-edges; /* Standard */
}        
        
        .exit-fullscreen-btn { position: fixed; top: 20px; right: 20px; background: rgba(244,67,54,0.95); color: white; border:none; padding:12px 16px; border-radius:50px; cursor:pointer; font-size:14px; display:none; z-index:10000; box-shadow:0 4px 12px rgba(0,0,0,0.3); }
        .exit-fullscreen-btn:hover { transform: scale(1.03); }

        /* --- Fullscreen-mode: hide common UI while keeping PDF visible --- */
        body.fullscreen-mode { background: #000; }

        /* hide specific UI elements in fullscreen (safe, non-aggressive) */
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

        /* Ensure PDF container and its children are visible and occupy full screen */
        body.fullscreen-mode .pdf-container,
        body.fullscreen-mode .pdf-container * {
            display: block !important;
        }
        body.fullscreen-mode .custom-pdf-viewer,
        body.fullscreen-mode .pdf-canvas-container {
            width: 100vw !important;
            height: 100vh !important;
            margin: 0 !important;
            padding: 0 !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            overflow: hidden !important;
        }

        /* show exit button in fullscreen */
        body.fullscreen-mode .exit-fullscreen-btn { display: flex !important; align-items:center; gap:8px; position:fixed; top:16px; right:16px; z-index:10001; }

        /* ensure pdf canvas scroll works in fullscreen */
        body.fullscreen-mode .pdf-canvas-container { display:block !important; overflow-y:auto; -webkit-overflow-scrolling: touch; touch-action: pan-y; }

        /* Swipe indicator styles */
        .swipe-indicator {
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 20px;
            font-weight: bold;
            z-index: 9999;
            opacity: 0;
            transition: opacity 0.3s;
        }
    </style>
    <!-- PDF.js library for Android users -->
    <?php if ($isAndroid): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script>pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';</script>
    <?php endif; ?>
</head>
<body>
    <!-- Floating exit fullscreen button -->
    <button class="exit-fullscreen-btn" id="exit-fullscreen-btn" onclick="exitFullscreen()"><i class="fas fa-times"></i> Exit Fullscreen</button>

    <div class="container" id="main-container">
        <div class="pdf-container" id="pdf-container">
            <h2><?php echo htmlspecialchars($material['subject']); ?> - Semester <?php echo htmlspecialchars($material['semester']); ?></h2>
            <?php if ($isAndroid): ?>
                <div id="loading" class="loading"><div class="loading-spinner"></div><div>Loading PDF...</div><div class="loading-percentage" id="loading-percentage">0%</div></div>
                <div id="error" class="error" style="display:none;"><i class="fas fa-exclamation-triangle"></i><p>Error loading PDF.</p>
                    <div style="margin-top:15px;">
                        <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>" target="_blank" style="display:inline-block;margin:5px;padding:10px 15px;background-color:#4CAF50;color:white;text-decoration:none;border-radius:4px;"><i class="fas fa-download"></i> Download PDF</a>
                        <button onclick="tryGoogleViewer()" style="margin:5px;padding:10px 15px;background-color:#2196F3;color:white;border:none;border-radius:4px;cursor:pointer;"><i class="fas fa-external-link-alt"></i> Open in Google Viewer</button>
                        <button onclick="tryEmbedViewer()" style="margin:5px;padding:10px 15px;background-color:#FF9800;color:white;border:none;border-radius:4px;cursor:pointer;"><i class="fas fa-eye"></i> Try Embed Viewer</button>
                    </div>
                </div>

                <div id="pdf-controls" style="display:none;">
                    <div class="page-navigation">
                        <button id="prev-page" onclick="previousPage()"><i class="fas fa-chevron-left"></i></button>
                        <span class="page-info">Page <span id="page-num">1</span> of <span id="page-count">-</span></span>
                        <button id="next-page" onclick="nextPage()"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <div class="progress-container"><div class="progress-bar" id="progress-bar"></div></div>
                    <div class="custom-pdf-viewer" id="pdf-viewer-container"><div id="pdf-canvas" class="pdf-canvas-container"></div></div>
                </div>
                <div class="thumbnail-nav" id="thumbnail-nav" style="display:none;"></div>
                <div id="embed-viewer" style="display:none;"><iframe src="../user/<?php echo htmlspecialchars($material['material_file']); ?>" style="width:100%;height:600px;border:none;border-radius:8px;" onload="this.style.display='block'" onerror="this.style.display='none'"></iframe></div>
            <?php else: ?>
                <iframe id="pdf-viewer" src="../user/<?php echo htmlspecialchars($material['material_file']); ?>" type="application/pdf" style="width:100%;height:80vh;border:none;border-radius:8px;">Your browser does not support PDFs. <a href="../user/<?php echo htmlspecialchars($material['material_file']); ?>">Download the file</a>.</iframe>
            <?php endif; ?>
        </div>

        <div class="toolbar" id="toolbar">
            <button onclick="toggleFullscreen()" id="fullscreen-btn"><i class="fas fa-expand" id="fullscreen-icon"></i> <span id="fullscreen-text">Fullscreen</span></button>
            <?php if ($isAndroid): ?>
                <button id="zoom-out" onclick="zoomOut()"><i class="fas fa-search-minus"></i> Zoom Out</button>
                <button id="zoom-in" onclick="zoomIn()"><i class="fas fa-search-plus"></i> Zoom In</button>
                <button onclick="fitToWidth()"><i class="fas fa-expand-arrows-alt"></i> Fit Width</button>
                <button onclick="rotatePage()" class="secondary"><i class="fas fa-redo"></i> Rotate</button>
                <button onclick="toggleThumbnails()" class="secondary"><i class="fas fa-th"></i> Thumbnails</button>
            <?php else: ?>
                <button onclick="zoomInIframe()"><i class="fas fa-search-plus"></i> Zoom In</button>
                <button onclick="zoomOutIframe()"><i class="fas fa-search-minus"></i> Zoom Out</button>
            <?php endif; ?>
            <button onclick="downloadPDF()"><i class="fas fa-download"></i> Download</button>
            <button onclick="printPDF()"><i class="fas fa-print"></i> Print</button>
            <button onclick="sharePDF()" class="secondary"><i class="fas fa-share"></i> Share</button>
            <button onclick="showShortcuts()" class="secondary"><i class="fas fa-keyboard"></i> Shortcuts</button>
        </div>

        <a href="<?php echo htmlspecialchars($referrer); ?>" class="back-button" id="back-button" style="display:inline-block;margin-top:20px;padding:12px 24px;background-color:#4CAF50;color:#fff;text-decoration:none;border-radius:6px;"> <i class="fas fa-arrow-left"></i> Back</a>
    </div>

    <!-- Search overlay & helpers (kept in DOM but hidden in fullscreen) -->
    <div class="search-overlay" id="search-overlay" style="display:none;"><div class="search-box"><h3>Search in PDF</h3><input type="text" class="search-input" id="search-input" placeholder="Enter search term..."><div style="text-align:right;"><button onclick="closeSearch()" style="margin-right:10px;padding:8px 16px;background:#ccc;border:none;border-radius:4px;">Cancel</button><button onclick="performSearch()" style="padding:8px 16px;background:#4CAF50;color:white;border:none;border-radius:4px;">Search</button></div></div></div>

    <div class="shortcuts-info" id="shortcuts-info" style="display:none;"> <div><strong>Keyboard Shortcuts:</strong></div><div>← → : Previous/Next page</div><div>+ - : Zoom in/out</div><div>F : Fullscreen</div><div>R : Rotate</div><div>T : Thumbnails</div><div>Esc : Exit fullscreen</div><div>Space : Next page</div></div>
    <div class="rotate-indicator" id="rotate-indicator" style="display:none;"><i class="fas fa-redo fa-spin"></i> Rotating...</div>

    <script>
        // Global variables
        let pdfDoc = null; let pageNum = 1; let scale = 1.0; let rotation = 0; let isFullscreen = false; let thumbnailsVisible = false; let touchStartX = 0; let touchStartY = 0; let isSwipeEnabled = true; let pagesRendered = 0; let totalPages = 0;

        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            <?php if ($isAndroid): ?> initializePDFViewer(); <?php endif; ?>
        });

        <?php if ($isAndroid): ?>
        function initializePDFViewer() {
            const pdfUrl = '../user/<?php echo htmlspecialchars($material['material_file']); ?>';
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            loadingTask.onProgress = function(progressData) { if (progressData && progressData.total) { const percentLoaded = Math.round((progressData.loaded / progressData.total) * 100); const el = document.getElementById('loading-percentage'); if (el) el.textContent = percentLoaded + '%'; } };
            loadingTask.promise.then(function(pdf) { pdfDoc = pdf; totalPages = pdf.numPages; const pc = document.getElementById('page-count'); if (pc) pc.textContent = pdf.numPages; const loadEl = document.getElementById('loading'); if (loadEl) loadEl.style.display = 'none'; const controls = document.getElementById('pdf-controls'); if (controls) controls.style.display = 'block'; renderAllPages(); updateNavigationButtons(); generateThumbnails(); }).catch(function(error){ console.error('Error loading PDF:', error); const loadEl = document.getElementById('loading'); if (loadEl) loadEl.style.display = 'none'; const err = document.getElementById('error'); if (err) err.style.display = 'block'; });
        }
        function renderAllPages() { if (!pdfDoc) return; pagesRendered = 0; const canvasContainer = document.getElementById('pdf-canvas'); canvasContainer.innerHTML = ''; for (let i = 1; i <= totalPages; i++) renderPage(i, true); }
        
        
        
        function renderPage(num, isPartOfBatch = false) {
    if (!pdfDoc) return;

    pdfDoc.getPage(num).then(function(page) {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const container = document.getElementById('pdf-canvas');
        const containerWidth = Math.max(container.clientWidth - 40, 100); // account for padding/margin

        // Get original viewport at scale 1.0
        const viewport = page.getViewport({ scale: 1.0, rotation: rotation });

        // Calculate responsive scale to fit container width
        const responsiveScale = containerWidth / viewport.width;

        // Multiply by devicePixelRatio for HD/Retina sharpness
        const pixelRatio = window.devicePixelRatio || 1;
        const finalScale = scale * responsiveScale * pixelRatio;

        // Get scaled viewport
        const scaledViewport = page.getViewport({ scale: finalScale, rotation: rotation });

        // Set canvas dimensions (CSS size + actual pixel size)
        canvas.style.width = `${scaledViewport.width / pixelRatio}px`;
        canvas.style.height = `${scaledViewport.height / pixelRatio}px`;
        canvas.width = scaledViewport.width;   // actual pixel width
        canvas.height = scaledViewport.height; // actual pixel height

        canvas.className = 'pdf-page';
        canvas.dataset.pagenumber = num;

        const renderContext = {
            canvasContext: ctx,
            viewport: scaledViewport
        };

        const renderTask = page.render(renderContext);

        renderTask.promise.then(function() {
            const canvasContainer = document.getElementById('pdf-canvas');
            canvasContainer.appendChild(canvas);

            if (!isPartOfBatch) {
                canvas.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }

            pagesRendered++;
            if (totalPages > 0) {
                const progress = (pagesRendered / totalPages) * 100;
                const progressBar = document.getElementById('progress-bar');
                if (progressBar) progressBar.style.width = progress + '%';
            }
        }).catch(function(err) {
            console.error('Error rendering page ' + num, err);
        });
    }).catch(function(err) {
        console.error('Error getting page ' + num, err);
    });

    if (!isPartOfBatch) {
        const pn = document.getElementById('page-num');
        if (pn) pn.textContent = num;
        pageNum = num;
        updateNavigationButtons();
    }
}


        
        function generateThumbnails(){ if (!pdfDoc) return; const thumbnailContainer = document.getElementById('thumbnail-nav'); thumbnailContainer.innerHTML=''; for (let i=1;i<=pdfDoc.numPages;i++){ pdfDoc.getPage(i).then(function(page){ const canvas=document.createElement('canvas'); const ctx=canvas.getContext('2d'); const viewport=page.getViewport({scale:0.2}); canvas.height=viewport.height; canvas.width=viewport.width; canvas.className='thumbnail'; canvas.dataset.page=i; canvas.addEventListener('click',function(){ pageNum = parseInt(this.dataset.page); const target = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`); if (target) target.scrollIntoView({behavior:'smooth',block:'center'}); updateNavigationButtons(); updateThumbnailSelection(); }); page.render({canvasContext:ctx, viewport:viewport}); thumbnailContainer.appendChild(canvas); }); } }
        function updateThumbnailSelection(){ const thumbs=document.querySelectorAll('.thumbnail'); thumbs.forEach(t=>{ if (parseInt(t.dataset.page)===pageNum) t.classList.add('active'); else t.classList.remove('active'); }); }
        <?php endif; ?>

        function setupEventListeners(){
            const pdfContainer = document.getElementById('pdf-canvas');
            if (pdfContainer) {

                pdfContainer.addEventListener('touchstart', function(e){
                    if (!isSwipeEnabled) return;
                    touchStartX = e.touches[0].clientX;
                    touchStartY = e.touches[0].clientY;
                
                
                }, {passive:true});

                pdfContainer.addEventListener('touchend', function(e){
                    if (!isSwipeEnabled) return;
                    const touchEndX = e.changedTouches[0].clientX;
                    const touchEndY = e.changedTouches[0].clientY;
                    const deltaX = touchEndX - touchStartX;
                    const deltaY = touchEndY - touchStartY;

                    // Prioritize vertical swipe for page navigation
                    if (Math.abs(deltaY) > Math.abs(deltaX) && Math.abs(deltaY) > 50) {
                        if (deltaY > 0) {
                            // Swiped DOWN → go to PREVIOUS page
                            showSwipeIndicator('down');
                            previousPage();
                        } else {
                            // Swiped UP → go to NEXT page
                            showSwipeIndicator('up');
                            nextPage();
                        }
                    }
                }, {passive:true});
            }

            document.addEventListener('keydown', function(e){
                if (e.target.tagName==='INPUT') return;
                switch(e.key){
                    case 'ArrowLeft': e.preventDefault(); previousPage(); break;
                    case 'ArrowRight': e.preventDefault(); nextPage(); break;
                    case 'Escape': e.preventDefault(); if (isFullscreen) exitFullscreen(); break;
                    case 'f': case 'F': e.preventDefault(); toggleFullscreen(); break;
                    case ' ': e.preventDefault(); nextPage(); break;
                    case '+': case '=': e.preventDefault(); if (typeof zoomIn==='function') zoomIn(); break;
                    case '-': e.preventDefault(); if (typeof zoomOut==='function') zoomOut(); break;
                    case 'r': case 'R': e.preventDefault(); if (typeof rotatePage==='function') rotatePage(); break;
                    case 't': case 'T': e.preventDefault(); if (typeof toggleThumbnails==='function') toggleThumbnails(); break;
                }
            });

            document.addEventListener('fullscreenchange', updateFullscreenButton);
            document.addEventListener('webkitfullscreenchange', updateFullscreenButton);
            document.addEventListener('mozfullscreenchange', updateFullscreenButton);
            document.addEventListener('MSFullscreenChange', updateFullscreenButton);
        }

        function previousPage(){
            if (pageNum <=1) return;
            pageNum--;
            const prev = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
            if (prev) prev.scrollIntoView({behavior:'smooth',block:'center'});
            updateNavigationButtons();
            const pn=document.getElementById('page-num');
            if (pn) pn.textContent = pageNum;
        }

        function nextPage(){
            if (pageNum >= totalPages) return;
            pageNum++;
            const nx = document.querySelector(`.pdf-page[data-pagenumber="${pageNum}"]`);
            if (nx) nx.scrollIntoView({behavior:'smooth', block:'center'});
            updateNavigationButtons();
            const pn=document.getElementById('page-num');
            if (pn) pn.textContent = pageNum;
        }

        function updateNavigationButtons(){
            const prevBtn=document.getElementById('prev-page');
            const nextBtn=document.getElementById('next-page');
            if (prevBtn) prevBtn.disabled = (pageNum <=1);
            if (nextBtn) nextBtn.disabled = (pageNum >= totalPages);
        }

        function updateProgress(){
            if (totalPages>0){
                const progress = (pageNum/totalPages)*100;
                const progressBar=document.getElementById('progress-bar');
                if (progressBar) progressBar.style.width = progress + '%';
            }
        }

        function zoomIn(){
            scale += 0.25;
            if (typeof renderAllPages==='function') renderAllPages();
        }

        function zoomOut(){
            if (scale>0.5){
                scale -= 0.25;
                if (typeof renderAllPages==='function') renderAllPages();
            }
        }

        function fitToWidth(){
            scale = 1.0;
            if (typeof renderAllPages==='function') renderAllPages();
        }

        function rotatePage(){
            showRotationIndicator();
            rotation = (rotation + 90) % 360;
            if (typeof renderAllPages==='function') renderAllPages();
            setTimeout(hideRotationIndicator, 1000);
        }

        function toggleThumbnails(){
            const tn=document.getElementById('thumbnail-nav');
            thumbnailsVisible = !thumbnailsVisible;
            if (tn) tn.style.display = thumbnailsVisible ? 'block' : 'none';
        }

        function showSwipeIndicator(direction){
            let indicator = document.getElementById('swipe-' + direction);
            if (!indicator){
                indicator = document.createElement('div');
                indicator.id = 'swipe-' + direction;
                indicator.className = 'swipe-indicator ' + direction;
                indicator.textContent = direction === 'up' ? '▲' : '▼';
                Object.assign(indicator.style, {
                    position: 'fixed',
                    top: direction === 'up' ? '20px' : 'auto',
                    bottom: direction === 'down' ? '20px' : 'auto',
                    left: '50%',
                    transform: 'translateX(-50%)',
                    background: 'rgba(0,0,0,0.7)',
                    color: 'white',
                    padding: '8px 16px',
                    borderRadius: '20px',
                    fontSize: '20px',
                    fontWeight: 'bold',
                    zIndex: 9999,
                    opacity: 0,
                    transition: 'opacity 0.3s'
                });
                document.body.appendChild(indicator);
            }
            indicator.style.opacity = '1';
            setTimeout(() => {
                indicator.style.opacity = '0';
            }, 300);
        }

        function showRotationIndicator(){
            const el=document.getElementById('rotate-indicator');
            if (el) el.style.display='block';
        }

        function hideRotationIndicator(){
            const el=document.getElementById('rotate-indicator');
            if (el) el.style.display='none';
        }

        function showSearch(){
            const ov=document.getElementById('search-overlay');
            if (ov){
                ov.style.display = 'flex';
                const si=document.getElementById('search-input');
                if(si) si.focus();
            }
        }

        function closeSearch(){
            const ov=document.getElementById('search-overlay');
            if (ov) ov.style.display='none';
            const si=document.getElementById('search-input');
            if (si) si.value = '';
        }

        function performSearch(){
            const searchTerm=document.getElementById('search-input').value.trim();
            if (searchTerm){
                alert('Search functionality would search for: ' + searchTerm);
                closeSearch();
            }
        }

        function showShortcuts(){
            const s=document.getElementById('shortcuts-info');
            if (s) s.classList.add('show');
            setTimeout(hideShortcuts,5000);
        }

        function hideShortcuts(){
            const s=document.getElementById('shortcuts-info');
            if (s) s.classList.remove('show');
        }

        function sharePDF(){
            if (navigator.share){
                navigator.share({
                    title: '<?php echo htmlspecialchars($material['material_title']); ?>',
                    text: 'Check out this PDF document',
                    url: window.location.href
                }).catch(console.error);
            } else {
                navigator.clipboard.writeText(window.location.href).then(()=>{
                    alert('PDF link copied to clipboard!');
                }).catch(()=>{
                    alert('Share URL: '+window.location.href);
                });
            }
        }

        window.addEventListener('resize', function(){
            if (typeof renderAllPages==='function' && pdfDoc) setTimeout(()=>renderAllPages(),100);
        });

        function tryGoogleViewer(){
            const pdfUrl = encodeURIComponent(window.location.origin + '/../user/<?php echo htmlspecialchars($material['material_file']); ?>');
            const googleViewerUrl = `https://docs.google.com/viewer?url=${pdfUrl}&embedded=true`;
            window.open(googleViewerUrl, '_blank');
        }

        function tryEmbedViewer(){
            const err = document.getElementById('error');
            if (err) err.style.display='none';
            const emb = document.getElementById('embed-viewer');
            if (emb) emb.style.display='block';
        }

        // Improved Fullscreen handling: request fullscreen on the PDF viewer container (if present)
        function toggleFullscreen(){
            const pdfViewerContainer = document.getElementById('pdf-viewer-container');
            const pdfContainer = document.getElementById('pdf-container');
            const container = pdfViewerContainer || pdfContainer || document.getElementById('main-container');
            const exitBtn = document.getElementById('exit-fullscreen-btn');

            if (!isFullscreen){
                const requestFS = container.requestFullscreen || container.webkitRequestFullscreen || container.mozRequestFullScreen || container.msRequestFullscreen;
                if (requestFS){
                    try {
                        requestFS.call(container);
                    } catch (err){
                        document.body.classList.add('fullscreen-mode');
                    }
                } else {
                    document.body.classList.add('fullscreen-mode');
                }
                if (exitBtn) exitBtn.style.display = 'flex';
                isFullscreen = true;
                if (typeof renderAllPages==='function') setTimeout(()=>renderAllPages(),120);
            } else {
                exitFullscreen();
            }
        }

        function exitFullscreen(){
            const exitBtn = document.getElementById('exit-fullscreen-btn');
            const exitFS = document.exitFullscreen || document.webkitExitFullscreen || document.mozCancelFullScreen || document.msExitFullscreen;
            if (exitFS && (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement)){
                try {
                    exitFS.call(document);
                } catch (err) {}
            }
            document.body.classList.remove('fullscreen-mode');
            if (exitBtn) exitBtn.style.display='none';
            isFullscreen = false;
            if (typeof renderAllPages==='function') setTimeout(()=>renderAllPages(),120);
        }

        function updateFullscreenButton(){
            const active = !!(document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement);
            if (active){
                document.body.classList.add('fullscreen-mode');
                const exitBtn = document.getElementById('exit-fullscreen-btn');
                if (exitBtn) exitBtn.style.display='flex';
                isFullscreen = true;
            } else {
                document.body.classList.remove('fullscreen-mode');
                const exitBtn = document.getElementById('exit-fullscreen-btn');
                if (exitBtn) exitBtn.style.display='none';
                isFullscreen = false;
            }
        }

        document.addEventListener('fullscreenchange', updateFullscreenButton);
        document.addEventListener('webkitfullscreenchange', function(){ document.dispatchEvent(new Event('fullscreenchange')); });
        document.addEventListener('mozfullscreenchange', function(){ document.dispatchEvent(new Event('fullscreenchange')); });
        document.addEventListener('MSFullscreenChange', function(){ document.dispatchEvent(new Event('fullscreenchange')); });

        <?php if (!$isAndroid): ?>
        function zoomInIframe(){
            const iframe = document.getElementById('pdf-viewer');
            if (!iframe) return;
            let currentWidth = iframe.offsetWidth;
            iframe.style.width = (currentWidth + 100) + 'px';
        }

        function zoomOutIframe(){
            const iframe = document.getElementById('pdf-viewer');
            if (!iframe) return;
            let currentWidth = iframe.offsetWidth;
            if (currentWidth > 100) iframe.style.width = (currentWidth - 100) + 'px';
        }
        <?php endif; ?>

        function downloadPDF(){
            const pdfUrl = "../user/<?php echo htmlspecialchars($material['material_file']); ?>";
            const link = document.createElement('a');
            link.href = pdfUrl;
            link.download = "<?php echo htmlspecialchars($material['material_title']); ?>.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function printPDF(){
            const pdfUrl = "../user/<?php echo htmlspecialchars($material['material_file']); ?>";
            <?php if ($isAndroid): ?>
                window.open(pdfUrl, '_blank');
            <?php else: ?>
                const iframe = document.createElement('iframe');
                iframe.src = pdfUrl;
                iframe.style.display='none';
                document.body.appendChild(iframe);
                iframe.onload = function(){
                    try {
                        iframe.contentWindow.print();
                    } catch (e) {
                        window.open(pdfUrl, '_blank');
                    }
                    setTimeout(()=>{
                        document.body.removeChild(iframe);
                    },1000);
                };
            <?php endif; ?>
        }
    </script>
</body>
</html>