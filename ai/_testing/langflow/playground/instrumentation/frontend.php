<?php
// frontend.php
$response = isset($_GET['response']) ? $_GET['response'] : '';
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Langflow — Markdown Viewer</title>

  <!-- Bootstrap (for quick nice UI) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body { background: #f6f8fa; }
    .card { border-radius: 12px; }
    .result { max-height: 60vh; overflow: auto; padding: 1rem; background: white; border-radius: 8px; box-shadow: 0 0 0 1px rgba(0,0,0,0.03) inset; }
    pre.markdown-raw { white-space: pre-wrap; word-wrap: break-word; background:#0b1220; color:#d6e9ff; padding:1rem; border-radius:8px; }
    .btn-small { padding: .25rem .6rem; font-size:.85rem; }
    .controls .btn { margin-right:.5rem; }
  </style>
</head>
<body>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-9 col-md-10">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="mb-3 text-center">Langflow — Prompt & Markdown Viewer</h3>

          <?php if ($error): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
          <?php endif; ?>

          <!-- Form -->
          <form action="backend.php" method="POST" id="promptForm" class="mb-4">
            <label for="input_value" class="form-label">Enter your prompt:</label>
            <textarea id="input_value" name="input_value" class="form-control mb-2" rows="3" placeholder="Ask something..." required></textarea>

            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary">Send</button>
              <button type="button" class="btn btn-outline-secondary" id="clearBtn">Clear</button>
            </div>
          </form>

          <!-- Controls -->
          <div class="d-flex justify-content-between align-items-center mb-2 controls">
            <div>
              <button class="btn btn-sm btn-outline-primary btn-small" id="toggleRawBtn">Show raw markdown</button>
              <button class="btn btn-sm btn-outline-success btn-small" id="copyMdBtn">Copy Markdown</button>
              <button class="btn btn-sm btn-outline-secondary btn-small" id="copyHtmlBtn">Copy HTML</button>
            </div>
            <div>
              <button class="btn btn-sm btn-outline-dark btn-small" id="downloadBtn">Download .md</button>
            </div>
          </div>

          <!-- Rendered result -->
          <div id="rendered" class="result mb-3" aria-live="polite">
            <!-- Rendered markdown will appear here -->
            <?php if (!$response): ?>
              <div class="text-muted">AI response will appear here after you send a prompt. Example output supports headings, tables, lists and code blocks.</div>
            <?php endif; ?>
          </div>

          <!-- Raw Markdown (hidden by default) -->
          <div id="rawContainer" style="display:none;">
            <label class="form-label">Raw Markdown</label>
            <pre class="markdown-raw" id="rawMarkdownPre"></pre>
          </div>

          <!-- Hidden storage of the response (safe-escaped) -->
          <textarea id="rawMarkdown" style="display:none;"><?php echo htmlspecialchars($response, ENT_QUOTES); ?></textarea>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- marked.js and DOMPurify (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dompurify/dist/purify.min.js"></script>

<script>
  // Grab the raw response inserted by PHP
  const rawTextArea = document.getElementById('rawMarkdown');
  const renderedDiv = document.getElementById('rendered');
  const rawPre = document.getElementById('rawMarkdownPre');
  const toggleRawBtn = document.getElementById('toggleRawBtn');
  const copyMdBtn = document.getElementById('copyMdBtn');
  const copyHtmlBtn = document.getElementById('copyHtmlBtn');
  const downloadBtn = document.getElementById('downloadBtn');
  const clearBtn = document.getElementById('clearBtn');

  function renderMarkdown(md) {
    if (!md || md.trim() === '') {
      renderedDiv.innerHTML = '<div class="text-muted">AI response will appear here after you send a prompt.</div>';
      return;
    }
    // Convert markdown -> HTML
    try {
      const html = marked.parse(md, { gfm: true, breaks: true });
      // Sanitize HTML before inserting
      const clean = DOMPurify.sanitize(html, { SAFE_FOR_TEMPLATES: true });
      renderedDiv.innerHTML = clean;
    } catch (e) {
      renderedDiv.innerText = md;
    }
  }

  function setRaw(md) {
    rawPre.textContent = md || '';
  }

  // Initialize view with response from PHP
  const initialMd = rawTextArea.value;
  renderMarkdown(initialMd);
  setRaw(initialMd);

  // Toggle raw/ rendered
  let rawVisible = false;
  toggleRawBtn.addEventListener('click', () => {
    rawVisible = !rawVisible;
    document.getElementById('rawContainer').style.display = rawVisible ? 'block' : 'none';
    toggleRawBtn.textContent = rawVisible ? 'Hide raw markdown' : 'Show raw markdown';
  });

  // Copy markdown
  copyMdBtn.addEventListener('click', async () => {
    try {
      await navigator.clipboard.writeText(rawPre.textContent || '');
      copyMdBtn.textContent = 'Copied ✓';
      setTimeout(() => copyMdBtn.textContent = 'Copy Markdown', 1500);
    } catch (e) {
      alert('Failed to copy.');
    }
  });

  // Copy HTML
  copyHtmlBtn.addEventListener('click', async () => {
    try {
      await navigator.clipboard.writeText(renderedDiv.innerHTML || '');
      copyHtmlBtn.textContent = 'Copied ✓';
      setTimeout(() => copyHtmlBtn.textContent = 'Copy HTML', 1500);
    } catch (e) {
      alert('Failed to copy HTML.');
    }
  });

  // Download .md file
  downloadBtn.addEventListener('click', () => {
    const md = rawPre.textContent || '';
    const blob = new Blob([md], { type: 'text/markdown' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'langflow-response.md';
    document.body.appendChild(a);
    a.click();
    a.remove();
    URL.revokeObjectURL(url);
  });

  // Clear prompt field quickly
  clearBtn.addEventListener('click', () => {
    document.getElementById('input_value').value = '';
    document.getElementById('input_value').focus();
  });

  // Optional: keyboard shortcut (Ctrl+Enter) to submit
  const form = document.getElementById('promptForm');
  const textarea = document.getElementById('input_value');
  textarea.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key === 'Enter') {
      form.submit();
    }
  });
</script>
</body>
</html>
