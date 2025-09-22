
<?php
// categorical-shayari.php
// Simple standalone Shayari fetcher with categorical search using
// https://hindi-quotes.vercel.app/random and its category subpaths.

// Allowed categories (as provided by the API reference)
$ALLOWED_CATEGORIES = ['random', 'success', 'love', 'attitude', 'positive', 'motivational'];

/**
 * Fetch a shayari from the hindi-quotes API.
 * If $category is provided and allowed, it will call:
 *  - https://hindi-quotes.vercel.app/random/{category}
 * Otherwise it calls:
 *  - https://hindi-quotes.vercel.app/random
 *
 * Returns array or null:
 *  ['text' => '...', 'author' => 'अज्ञात', 'category' => 'Love']
 */
function fetchLiveShayari($category = 'random')
{
  global $ALLOWED_CATEGORIES;

  $category = strtolower(trim($category));
  if (!in_array($category, $ALLOWED_CATEGORIES)) {
    $category = 'random';
  }

  // Build endpoint
  $api_url = "https://hindi-quotes.vercel.app/random";
  if ($category !== 'random') {
    // API pattern: /random/{category}
    $api_url .= "/" . rawurlencode($category);
  }

  $context = stream_context_create([
    'http' => [
      'timeout' => 25,
      'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
    ]
  ]);

  $response = @file_get_contents($api_url, false, $context);
  $data = $response ? json_decode($response, true) : null;

  if ($data && !empty($data['quote'])) {
    $shayari_text = trim($data['quote']);
    $api_type = !empty($data['type']) ? $data['type'] : $category;
    $category_display = $api_type ? ucfirst($api_type) : ucfirst($category);

    return [
      'text' => $shayari_text,
      'author' => 'अज्ञात',
      'category' => $category_display
    ];
  }

  return null;
}

// AJAX endpoint: infinite retry until a valid shayari is found (or user aborts)
if (isset($_GET['action']) && $_GET['action'] === 'get_new_shayari') {
  header('Content-Type: application/json; charset=utf-8');

  // category from client (optional)
  $requested_cat = isset($_GET['cat']) ? $_GET['cat'] : 'random';

  // safety: only allow expected categories
  global $ALLOWED_CATEGORIES;
  $requested_cat = strtolower(trim($requested_cat));
  if (!in_array($requested_cat, $ALLOWED_CATEGORIES)) {
    $requested_cat = 'random';
  }

  // allow script to run longer for repeated retries
  ignore_user_abort(false);
  set_time_limit(0);

  $attempt = 0;
  while (true) {
    $attempt++;

    // If client disconnected (user pressed browser Stop), exit loop
    if (connection_aborted()) {
      // optional: log or echo partial status
      http_response_code(499); // client closed request (non-standard)
      exit();
    }

    $shayari = fetchLiveShayari($requested_cat);

    if ($shayari) {
      echo json_encode([
        'status' => 'success',
        'shayari' => $shayari,
        'attempt' => $attempt,
        'requested_category' => ucfirst($requested_cat)
      ], JSON_UNESCAPED_UNICODE);
      exit();
    }

    // Be gentle on the external API
    sleep(2);
  }
}
?>
<!DOCTYPE html>
<html lang="hi">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Categorical Shayari Finder</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      padding: 32px;
      font-family: 'Noto Sans Devanagari', 'Segoe UI', sans-serif;
      background: linear-gradient(120deg, #f7f7f8, #fff7f0);
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .header {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .category-buttons .btn {
      margin: 3px;
      border-radius: 20px;
    }

    .found-shayari {
      display: none;
      white-space: pre-line;
      background: #fff;
      padding: 18px;
      border-radius: 10px;
      border-left: 5px solid #6a1b9a;
    }

    .spinner {
      border: 4px solid #f3f3f3;
      border-top: 4px solid #6a1b9a;
      border-radius: 50%;
      width: 38px;
      height: 38px;
      animation: spin 1s linear infinite;
      margin: 0 auto 12px;
    }

    @keyframes spin {
      0% {
        transform: rotate(0);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .meta {
      font-style: italic;
      color: #555;
      margin-top: 8px;
    }

    .top-actions {
      display: flex;
      gap: 10px;
      align-items: center;
      flex-wrap: wrap;
    }

    .note {
      font-size: 0.9rem;
      color: #666;
      margin-top: 6px;
    }
  </style>
</head>

<body>

  <div class="container" style="max-width:900px;">
    <div class="card p-4">
      <div class="header mb-3">
        <svg width="46" height="46" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;">
          <path d="M4 6h16M4 12h16M4 18h16" stroke="#6a1b9a" stroke-width="1.6" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        <div>
          <h3 style="margin:0;color:#6a1b9a;">Categorical Shayari Finder</h3>
          <div class="note">Choose a category or pick "Random". The system will keep retrying until it gets a valid
            quote. Press Stop to cancel.</div>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Select Category</label>
        <div class="category-buttons mb-2">
          <button class="btn btn-outline-primary btn-sm" data-cat="random">Random</button>
          <button class="btn btn-outline-success btn-sm" data-cat="success">Success</button>
          <button class="btn btn-outline-danger btn-sm" data-cat="love">Love</button>
          <button class="btn btn-outline-warning btn-sm" data-cat="attitude">Attitude</button>
          <button class="btn btn-outline-info btn-sm" data-cat="positive">Positive</button>
          <button class="btn btn-outline-secondary btn-sm" data-cat="motivational">Motivational</button>
        </div>

        <div class="d-flex align-items-center top-actions">
          <select id="categorySelect" class="form-select form-select-sm" style="max-width:240px;">
            <option value="random">Random</option>
            <option value="success">Success</option>
            <option value="love">Love</option>
            <option value="attitude">Attitude</option>
            <option value="positive">Positive</option>
            <option value="motivational">Motivational</option>
          </select>

          <div>
            <button id="btnFind" class="btn btn-primary btn-sm" onclick="startFind()">Start Finding</button>
            <button id="btnStop" class="btn btn-danger btn-sm" onclick="stopFind()" style="display:none;">Stop</button>
          </div>

          <div style="margin-left:auto; text-align:right;">
            <div id="attemptCounter" style="font-weight:600;color:#6a1b9a;">Attempt: 0</div>
            <div id="statusMessage" style="font-size:0.9rem;color:#d35400;">Idle</div>
          </div>
        </div>
      </div>

      <div class="loading-area text-center mt-3" id="loadingArea" style="display:none;">
        <div class="spinner" aria-hidden="true"></div>
        <div id="loadingMsg">Contacting API...</div>
      </div>

      <div class="found-shayari mt-4" id="foundShayari">
        <div id="shayariText" style="font-size:1.15rem; line-height:1.6; color:#333;"></div>
        <div class="meta" id="shayariAuthor">- अज्ञात</div>
        <div class="meta" id="shayariCategory">Category: -</div>
      </div>

      <div class="mt-3">
        <small class="text-muted">API reference: <code>https://hindi-quotes.vercel.app/random</code> and category
          subpaths like <code>/love</code>, <code>/motivational</code>, etc.</small>
      </div>
    </div>
  </div>

  <script>
    // UI elements
    const btnFind = document.getElementById('btnFind');
    const btnStop = document.getElementById('btnStop');
    const attemptCounter = document.getElementById('attemptCounter');
    const statusMessage = document.getElementById('statusMessage');
    const loadingArea = document.getElementById('loadingArea');
    const loadingMsg = document.getElementById('loadingMsg');
    const foundShayari = document.getElementById('foundShayari');
    const shayariText = document.getElementById('shayariText');
    const shayariAuthor = document.getElementById('shayariAuthor');
    const shayariCategory = document.getElementById('shayariCategory');
    const categorySelect = document.getElementById('categorySelect');

    // quick buttons
    document.querySelectorAll('.category-buttons .btn').forEach(b => {
      b.addEventListener('click', () => {
        const c = b.getAttribute('data-cat');
        categorySelect.value = c;
        // visual highlight
        document.querySelectorAll('.category-buttons .btn').forEach(x => x.classList.remove('active'));
        b.classList.add('active');
      });
    });

    let finding = false;
    let abortController = null;

    function startFind() {
      if (finding) return;
      finding = true;

      const cat = categorySelect.value || 'random';

      btnFind.disabled = true;
      btnStop.style.display = 'inline-block';
      loadingArea.style.display = 'block';
      foundShayari.style.display = 'none';
      attemptCounter.innerText = 'Attempt: 1';
      statusMessage.innerText = 'Contacting API (' + capitalize(cat) + ')...';

      abortController = new AbortController();
      fetchAttempt(1, cat);
    }

    function stopFind() {
      if (abortController) abortController.abort();
      resetUI();
      statusMessage.innerText = 'Stopped by user.';
    }

    function fetchAttempt(attempt, category) {
      if (!finding) return;
      attemptCounter.innerText = 'Attempt: ' + attempt;
      statusMessage.innerText = 'Trying attempt ' + attempt + ' (' + capitalize(category) + ')';

      // request the PHP endpoint with category param
      fetch('?action=get_new_shayari&cat=' + encodeURIComponent(category), { signal: abortController.signal })
        .then(resp => {
          if (!resp.ok) throw new Error('Network response not ok: ' + resp.status);
          return resp.json();
        })
        .then(data => {
          if (data && data.status === 'success' && data.shayari) {
            // success
            resetUI();
            shayariText.innerText = data.shayari.text;
            shayariAuthor.innerText = '- ' + (data.shayari.author || 'अज्ञात');
            shayariCategory.innerText = 'Category: ' + (data.shayari.category || capitalize(category));
            foundShayari.style.display = 'block';
            statusMessage.innerText = 'Success! Found on attempt ' + data.attempt;
          } else {
            // unexpected response — retry
            setTimeout(() => fetchAttempt(attempt + 1, category), 1500);
          }
        })
        .catch(err => {
          if (err.name === 'AbortError') {
            // user asked to stop
            resetUI();
            statusMessage.innerText = 'Stopped by user.';
          } else {
            // network or server error — keep retrying
            console.error('Fetch error:', err);
            loadingMsg.innerText = 'API slow/unavailable — retrying...';
            setTimeout(() => fetchAttempt(attempt + 1, category), 2000);
          }
        });
    }

    function resetUI() {
      finding = false;
      btnFind.disabled = false;
      btnStop.style.display = 'none';
      loadingArea.style.display = 'none';
    }

    function capitalize(s) {
      if (!s) return s;
      return s.charAt(0).toUpperCase() + s.slice(1);
    }
  </script>

</body>

</html>