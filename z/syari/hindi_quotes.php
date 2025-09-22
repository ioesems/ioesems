<?php
// Fetch from hindi-quotes.vercel.app
function fetchLiveShayari() {
    $api_url = "https://hindi-quotes.vercel.app/random";

    $context = stream_context_create([
        'http' => [
            'timeout' => 30,
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
        ]
    ]);

    $response = @file_get_contents($api_url, false, $context);
    $data = $response ? json_decode($response, true) : null;

    if ($data && !empty($data['quote'])) {
        $shayari_text = trim($data['quote']);
        $category = !empty($data['type']) ? ucfirst($data['type']) : 'General';

        return [
            'text' => $shayari_text,
            'author' => 'अज्ञात',
            'category' => $category
        ];
    }
    return null;
}

// Handle AJAX request
if (isset($_GET['action']) && $_GET['action'] === 'get_new_shayari') {
    header('Content-Type: application/json');

    ignore_user_abort(false);
    set_time_limit(0);

    $attempt = 0;

    while (true) {
        $attempt++;

        if (connection_aborted()) {
            exit();
        }

        $shayari = fetchLiveShayari();

        if ($shayari) {
            echo json_encode([
                'status' => 'success',
                'shayari' => $shayari,
                'attempt' => $attempt
            ]);
            exit();
        }

        sleep(2);
    }
}
?>
<!DOCTYPE html>
<html lang="hi">
<head>
<meta charset="UTF-8">
<title>Live Shayari Fetcher</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<style>
body { padding: 40px; font-family: 'Noto Sans Devanagari','Segoe UI',sans-serif; background: linear-gradient(to right,#ffdde1,#ee9ca7);}
.container { max-width: 700px; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 6px 15px rgba(0,0,0,0.1);}
h2 { font-weight:bold; color:#6a1b9a; margin-bottom:20px;}
.btn-find { background: linear-gradient(135deg, #8e24aa, #6a1b9a); color:white; border:none; border-radius:25px; font-weight:bold; padding:10px 25px;}
.btn-find:hover { background: linear-gradient(135deg,#6a1b9a,#8e24aa);}
.btn-stop { background: linear-gradient(135deg,#dc3545,#c82333); color:white; border:none; border-radius:25px; font-weight:bold; padding:10px 25px; margin-left:10px; display:none;}
.btn-stop:hover { background: linear-gradient(135deg,#c82333,#dc3545);}
.found-shayari-display { background: #fafafa; padding:20px; border-radius:8px; margin:20px 0; border-left:4px solid #8e24aa; display:none;}
.shayari-text { font-size:1.2rem; margin-bottom:10px; line-height:1.6;}
.shayari-author { font-style:italic; color:#555; margin-bottom:5px;}
.shayari-category { font-size:0.9rem; color:#6a1b9a;}
.loading-spinner { display:none; text-align:center; padding:20px;}
.spinner { border:4px solid #f3f3f3; border-top:4px solid #6a1b9a; border-radius:50%; width:40px; height:40px; animation:spin 1s linear infinite; margin:0 auto 15px;}
@keyframes spin { 0% {transform:rotate(0deg);} 100% {transform:rotate(360deg);} }
.attempt-counter { font-size:1rem; color:#6a1b9a; font-weight:bold;}
.status-message { font-size:0.95rem; color:#d35400; margin-top:8px;}
</style>
</head>
<body>
<div class="container">
    <h2><i class="fas fa-feather-alt"></i> Live Shayari Finder</h2>
    <p>Click "Start Finding" to fetch a Shayari from <b>hindi-quotes.vercel.app</b>. It will retry until success.</p>
    
    <div>
        <button type="button" class="btn-find" id="btnFind" onclick="findShayari()">Start Finding Shayari</button>
        <button type="button" class="btn-stop" id="btnStop" onclick="stopFinding()">Stop</button>
    </div>

    <div class="loading-spinner" id="loadingSpinner">
        <div class="spinner"></div>
        <div class="attempt-counter" id="attemptCounter">Attempt: 1</div>
        <div class="status-message" id="statusMessage">Fetching from API...</div>
    </div>

    <div class="found-shayari-display" id="foundShayariDisplay">
        <div class="shayari-text" id="foundShayariText"></div>
        <div class="shayari-author" id="foundShayariAuthor"></div>
        <div class="shayari-category" id="foundShayariCategory"></div>
    </div>
</div>

<script>
let finding = false;
let abortController = null;

function findShayari() {
    if (finding) return;
    finding = true;

    document.getElementById('btnFind').disabled = true;
    document.getElementById('btnStop').style.display = 'inline-block';
    document.getElementById('loadingSpinner').style.display = 'block';
    document.getElementById('foundShayariDisplay').style.display = 'none';
    document.getElementById('attemptCounter').innerText = "Attempt: 1";
    document.getElementById('statusMessage').innerText = "📡 Contacting API...";

    abortController = new AbortController();
    fetchShayari(1);
}

function stopFinding() {
    if (abortController) abortController.abort();
    resetUI();
    document.getElementById('statusMessage').innerText = "🛑 Search stopped by you.";
}

function fetchShayari(attempt) {
    if (!finding) return;
    document.getElementById('attemptCounter').innerText = "Attempt: " + attempt;
    document.getElementById('statusMessage').innerText = "🔍 Trying attempt " + attempt;

    fetch("?action=get_new_shayari", { signal: abortController.signal })
        .then(r => r.json())
        .then(data => {
            if (data.status === "success") {
                resetUI();
                document.getElementById('foundShayariText').innerText = data.shayari.text;
                document.getElementById('foundShayariAuthor').innerText = "- " + data.shayari.author;
                document.getElementById('foundShayariCategory').innerText = "Category: " + data.shayari.category;
                document.getElementById('foundShayariDisplay').style.display = 'block';
                document.getElementById('statusMessage').innerText = "🎉 Success! Found on attempt " + data.attempt;
            }
        })
        .catch(err => {
            if (err.name === "AbortError") {
                resetUI();
                document.getElementById('statusMessage').innerText = "🛑 Stopped by user.";
            } else {
                setTimeout(() => fetchShayari(attempt + 1), 1500);
            }
        });
}

function resetUI() {
    finding = false;
    document.getElementById('btnFind').disabled = false;
    document.getElementById('btnStop').style.display = 'none';
    document.getElementById('loadingSpinner').style.display = 'none';
}
</script>
</body>
</html>
