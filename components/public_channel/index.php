<?php
include '../login/config.php';
include '../head-foot/header.php';

$logged_in = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'];
$name = $logged_in ? htmlspecialchars($_SESSION['name']) : '';
$user_id = $logged_in ? $_SESSION['user_id'] : '';
?>

<!-- Use a clean system font (and Inter if available) -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Pass current user data to JavaScript -->
<script>
  window.currentUser = {
    id: <?php echo json_encode($user_id); ?>,
    name: <?php echo json_encode($name); ?>
  };

  // XSS Protection Helper (fixed)
  function escapeHtml(unsafe) {
    if (typeof unsafe !== 'string') return unsafe;
    return unsafe
      .replace(/&/g, "&amp;")
      .replace(/</g, "<")
      .replace(/>/g, ">")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
  }
</script>

<style>
  /* ===== INTENSE GREEN AND YELLOW COLOR SYSTEM ===== */
  :root {
    /* Intense Green Palette */
    --primary-50: #e8f5e9;
    --primary-100: #c8e6c9;
    --primary-200: #a5d6a7;
    --primary-300: #81c784;
    --primary-400: #66bb6a;
    --primary-500: #4caf50; /* Vibrant green */
    --primary-600: #43a047;
    --primary-700: #388e3c;
    --primary-800: #2e7d32;
    --primary-900: #1b5e20;
    
    /* Intense Amber/Yellow Palette */
    --accent-50: #fff8e1;
    --accent-100: #ffecb3;
    --accent-200: #ffe082;
    --accent-300: #ffd54f;
    --accent-400: #ffca28;
    --accent-500: #ffc107; /* Vibrant yellow */
    --accent-600: #ffb300;
    --accent-700: #ffa000;
    --accent-800: #ff8f00;
    --accent-900: #ff6f00;
    
    /* Neutral Palette */
    --gray-50: #fafafa;
    --gray-100: #f5f5f5;
    --gray-200: #e5e5e5;
    --gray-300: #d4d4d4;
    --gray-400: #a3a3a3;
    --gray-500: #737373;
    --gray-600: #525252;
    --gray-700: #404040;
    --gray-800: #262626;
    --gray-900: #171717;
    
    /* Semantic Colors */
    --success: #10b981;
    --warning: #f59e0b;
    --error: #ef4444;
    --info: #3b82f6;
    
    /* UI Variables */
    --card-bg: #ffffff;
    --surface-bg: var(--gray-50);
    --border-light: var(--gray-200);
    --border-medium: var(--gray-300);
    --text-primary: var(--gray-900);
    --text-secondary: var(--gray-600);
    --text-muted: var(--gray-500);
    
    /* Shadows */
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --shadow-md: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    
    /* Border Radius */
    --radius-sm: 6px;
    --radius: 8px;
    --radius-md: 12px;
    --radius-lg: 16px;
    --radius-xl: 20px;
  }

  html, body {
    height: 100%;
    margin: 0;
    background: transparent;
    font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    color: var(--text-primary);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 15px;
    line-height: 1.6;
  }

  .page-wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 24px;
    min-height: 100vh;
  }

  .container {
    background: var(--card-bg);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border-light);
    overflow: hidden;
  }

  /* Header Section */
  .header-section {
    background: linear-gradient(135deg, var(--primary-500) 0%, var(--primary-600) 100%);
    padding: 32px 32px 24px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .header-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='7' cy='7' r='7'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
    opacity: 0.3;
  }

  .header-section h1 {
    color: white;
    margin: 0 0 8px 0;
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    font-weight: 700;
    letter-spacing: -0.02em;
    position: relative;
    z-index: 1;
  }

  .header-section .subhead {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.1rem;
    font-weight: 400;
    margin: 0;
    position: relative;
    z-index: 1;
  }

  /* Main Content */
  .main-content {
    padding: 32px;
  }

  .content-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 32px;
    align-items: start;
  }

  /* Form Section */
  .form-section {
    background: linear-gradient(135deg, var(--primary-50) 0%, white 100%);
    border: 2px solid var(--primary-100);
    border-radius: var(--radius-md);
    padding: 24px;
    position: sticky;
    top: 24px;
  }

  .form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    flex-wrap: wrap;
    gap: 12px;
  }

  .form-header h2 {
    margin: 0;
    color: var(--primary-700);
    font-size: 1.25rem;
    font-weight: 600;
  }

  .user-badge {
    background: var(--primary-100);
    color: var(--primary-700);
    padding: 6px 12px;
    border-radius: var(--radius);
    font-size: 0.875rem;
    font-weight: 500;
    border: 1px solid var(--primary-200);
  }

  .form-textarea {
    width: 100%;
    padding: 16px;
    border: 2px solid var(--border-light);
    border-radius: var(--radius);
    font-size: 15px;
    font-family: inherit;
    background: white;
    resize: vertical;
    min-height: 120px;
    transition: all 0.2s ease;
    margin-bottom: 16px;
  }

  .form-textarea:focus {
    outline: none;
    border-color: var(--primary-400);
    box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
  }

  .form-textarea::placeholder {
    color: var(--text-muted);
  }

  /* Buttons */
  .btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    font-weight: 600;
    font-size: 14px;
    border-radius: var(--radius);
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
    white-space: nowrap;
  }

  .btn-primary {
    background: linear-gradient(135deg, var(--primary-500), var(--primary-600));
    color: white;
    box-shadow: var(--shadow);
  }

  .btn-primary:hover {
    background: linear-gradient(135deg, var(--primary-600), var(--primary-700));
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
  }

  .btn-secondary {
    background: linear-gradient(135deg, var(--accent-400), var(--accent-500));
    color: white;
    box-shadow: var(--shadow);
  }

  .btn-secondary:hover {
    background: linear-gradient(135deg, var(--accent-500), var(--accent-600));
    transform: translateY(-1px);
    box-shadow: var(--shadow-md);
  }

  .btn-ghost {
    background: transparent;
    color: var(--primary-600);
    border: 2px solid var(--primary-200);
  }

  .btn-ghost:hover {
    background: var(--primary-50);
    border-color: var(--primary-300);
  }

  .btn-danger {
    background: linear-gradient(135deg, var(--error), #dc2626);
    color: white;
  }

  .btn-danger:hover {
    background: linear-gradient(135deg, #dc2626, #b91c1c);
    transform: translateY(-1px);
  }

  .form-actions {
    display: flex;
    gap: 12px;
    align-items: center;
    flex-wrap: wrap;
  }

  /* Login Prompt */
  .login-prompt {
    background: linear-gradient(135deg, var(--accent-50), white);
    border: 2px solid var(--accent-200);
    border-radius: var(--radius-md);
    padding: 24px;
    text-align: center;
  }

  .login-prompt h2 {
    color: var(--accent-700);
    margin: 0 0 12px 0;
    font-size: 1.25rem;
    font-weight: 600;
  }

  .login-prompt p {
    color: var(--text-secondary);
    margin: 0 0 20px 0;
  }

  /* Questions Section */
  .qa-section {
    min-height: 400px;
  }

  .search-bar {
    display: flex;
    gap: 12px;
    margin-bottom: 24px;
    align-items: center;
  }

  .search-input {
    flex: 1;
    padding: 12px 16px;
    border: 2px solid var(--border-light);
    border-radius: var(--radius);
    font-size: 15px;
    background: white;
    transition: all 0.2s ease;
  }

  .search-input:focus {
    outline: none;
    border-color: var(--primary-400);
    box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
  }

  /* Question Cards */
  .question-box {
    background: white;
    border: 1px solid var(--border-light);
    border-radius: var(--radius-md);
    margin-bottom: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: all 0.2s ease;
    display: flex;
    gap: 16px;
    align-items: flex-start;
  }

  .question-box:hover {
    box-shadow: var(--shadow);
    border-color: var(--primary-200);
  }

  .question-left {
    width: 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 0 20px 20px;
  }

  .question-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--accent-400), var(--accent-500));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 18px;
    box-shadow: var(--shadow);
  }

  .question-body {
    flex: 1;
    padding: 20px 20px 20px 0;
  }

  .question-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
    margin-bottom: 8px;
  }

  .question-meta strong {
    color: var(--text-primary);
    font-weight: 600;
  }

  .question-meta small {
    color: var(--text-muted);
    font-size: 0.875rem;
    font-weight: 500;
  }

  .question-text {
    margin: 8px 0 14px 0;
    font-size: 15px;
    color: var(--text-primary);
    line-height: 1.6;
  }

  .question-actions {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
  }

  /* Answers Section */
  .answer-item {
    margin: 10px 0;
    padding: 14px;
    background: linear-gradient(135deg, var(--primary-50), white);
    border-left: 5px solid var(--primary-500);
    border-radius: var(--radius);
    box-shadow: var(--shadow-sm);
    transition: all 0.2s ease;
  }

  .answer-item:hover {
    border-color: var(--primary-600);
    box-shadow: var(--shadow);
  }

  .answer-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 8px;
  }

  .answer-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-500), var(--primary-600));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
    font-size: 14px;
  }

  .answer-text {
    color: var(--text-primary);
    line-height: 1.6;
    font-size: 15px;
  }

  .answer-input {
    width: 100%;
    margin-top: 12px;
    padding-top: 14px;
    border-top: 1px dashed var(--border-medium);
  }

  .answer-input textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid var(--border-light);
    border-radius: var(--radius);
    font-family: inherit;
    font-size: 14px;
    resize: vertical;
    min-height: 80px;
    background: white;
    margin-bottom: 8px;
    transition: all 0.2s ease;
  }

  .answer-input textarea:focus {
    outline: none;
    border-color: var(--primary-400);
    box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
  }

  /* No Questions State */
  .no-questions {
    text-align: center;
    padding: 60px 20px;
    color: var(--text-muted);
    background: linear-gradient(135deg, var(--gray-50), white);
    border: 2px dashed var(--border-medium);
    border-radius: var(--radius-md);
  }

  /* Loading State */
  .loading {
    text-align: center;
    padding: 40px;
    color: var(--text-muted);
    font-style: italic;
  }

  /* Success Message */
  .success-message {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--success);
    color: white;
    padding: 12px 20px;
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    z-index: 9999;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  /* Modals */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    align-items: center;
    justify-content: center;
    padding: 20px;
    backdrop-filter: blur(4px);
  }

  .modal-content {
    background: white;
    border-radius: var(--radius-md);
    padding: 32px;
    width: 100%;
    max-width: 500px;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--border-light);
  }

  .modal h3 {
    margin: 0 0 16px 0;
    color: var(--text-primary);
    font-size: 1.25rem;
    font-weight: 600;
  }

  .modal p {
    color: var(--text-secondary);
    margin: 0 0 24px 0;
    line-height: 1.5;
  }

  .modal textarea {
    width: 100%;
    padding: 12px;
    border: 2px solid var(--border-light);
    border-radius: var(--radius);
    font-family: inherit;
    font-size: 15px;
    resize: vertical;
    min-height: 120px;
    background: white;
    margin-bottom: 24px;
  }

  .modal textarea:focus {
    outline: none;
    border-color: var(--primary-400);
    box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
  }

  .modal-actions {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    flex-wrap: wrap;
  }

  /* ANDROID SPECIFIC RESPONSIVE DESIGN */
  @media (max-width: 480px) {
    /* Overall scaling for small screens */
    :root {
      --radius: 6px;
      --radius-md: 10px;
      --radius-lg: 14px;
    }

    .page-wrap {
      padding: 12px;
    }

    .main-content {
      padding: 16px 12px;
    }

    .header-section {
      padding: 20px 16px 16px;
    }

    .header-section h1 {
      font-size: 1.4rem;
    }

    .header-section .subhead {
      font-size: 0.9rem;
    }

    .form-section,
    .login-prompt {
      padding: 16px 12px;
    }

    .form-header {
      flex-direction: column;
      align-items: stretch;
      gap: 10px;
    }

    .user-badge {
      text-align: center;
      width: 100%;
    }

    .form-textarea {
      padding: 12px;
      font-size: 14px;
    }

    .btn {
      padding: 10px 16px;
      font-size: 13px;
    }

    .search-bar {
      flex-direction: column;
      gap: 10px;
    }

    .search-input {
      padding: 10px;
      font-size: 14px;
    }

    .question-box {
      flex-direction: column;
      gap: 12px;
    }

    .question-left {
      width: 100%;
      flex-direction: row;
      justify-content: flex-start;
      padding: 12px 12px 8px;
    }

    .question-body {
      padding: 0 12px 12px;
    }

    .question-avatar {
      width: 40px;
      height: 40px;
      font-size: 16px;
    }

    .question-text {
      font-size: 14px;
      margin: 6px 0 10px 0;
    }

    .answer-item {
      padding: 12px;
    }

    .answer-header {
      gap: 8px;
    }

    .answer-avatar {
      width: 32px;
      height: 32px;
      font-size: 12px;
    }

    .answer-text {
      font-size: 14px;
    }

    .answer-input {
      padding-top: 10px;
    }

    .answer-input textarea {
      padding: 10px;
      font-size: 13px;
      min-height: 70px;
    }

    .question-actions {
      flex-direction: column;
      gap: 8px;
    }

    .question-actions .btn {
      width: 100%;
      justify-content: center;
      padding: 8px 12px;
      font-size: 12px;
    }

    .modal-content {
      padding: 24px 16px;
    }

    .modal h3 {
      font-size: 1.1rem;
    }

    .modal p {
      font-size: 0.95rem;
      margin: 0 0 16px 0;
    }

    .modal textarea {
      padding: 10px;
      font-size: 14px;
      min-height: 100px;
    }

    .modal-actions {
      flex-direction: column;
      gap: 8px;
    }

    .modal-actions .btn {
      width: 100%;
      padding: 10px 14px;
      font-size: 13px;
    }

    .success-message {
      top: 10px;
      left: 10px;
      right: 10px;
      transform: none;
      width: auto;
      padding: 10px 14px;
      font-size: 13px;
    }

    .no-questions {
      padding: 40px 16px;
    }
  }

  /* Additional responsive tweaks for medium screens */
  @media (max-width: 768px) {
    .content-grid {
      grid-template-columns: 1fr;
      gap: 24px;
    }

    .form-section {
      position: static;
    }

    .question-box {
      flex-direction: column;
    }

    .question-left {
      width: 100%;
      flex-direction: row;
      justify-content: flex-start;
      padding: 12px 12px 8px;
    }

    .question-body {
      padding: 0 12px 12px;
    }

    .question-actions {
      flex-direction: column;
      gap: 8px;
    }

    .question-actions .btn {
      width: 100%;
      justify-content: center;
    }

    .answer-item {
      padding: 12px;
    }

    .answer-input {
      padding-top: 10px;
    }

    .search-bar {
      flex-direction: column;
      gap: 10px;
    }
  }
</style>

<div class="page-wrap">
  <div class="container">
    <!-- Header Section -->
    <div class="header-section">
      <h1>💬 Share Your Problem — Free Your Mind</h1>
      <div class="subhead">A calm place to ask, answer, and support — please be kind.</div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="content-grid">
        
        <!-- Form Section -->
        <?php if ($logged_in): ?>
        <div class="form-section" aria-labelledby="ask-heading">
          <div class="form-header">
            <h2 id="ask-heading">Ask a Question</h2>
            <div class="user-badge">
              Signed in as <strong><?php echo htmlspecialchars($name); ?></strong>
            </div>
          </div>

          <textarea id="questionInput" class="form-textarea" placeholder="Type your question here... (be clear & kind)"></textarea>
          
          <div class="form-actions">
            <button class="btn btn-primary" onclick="askQuestion()">Ask Question</button>
            <a href="profile.php" class="btn btn-ghost">Profile</a>
          </div>
        </div>
        <?php else: ?>
        <div class="login-prompt">
          <h2>🔒 Please log in to participate</h2>
          <p>This is a public Q&A channel — only registered users can ask or answer.</p>
          <a href="../login/index.php" class="btn btn-secondary">Login with Google</a>
        </div>
        <?php endif; ?>

        <!-- Questions Section -->
        <div class="qa-section">
          <div class="search-bar">
            <input type="text" id="searchInput" class="search-input" placeholder="Search questions or answers..." oninput="filterQuestions()" />
            <button class="btn btn-ghost" onclick="loadQuestions()">Refresh</button>
          </div>

          <div id="questionsContainer">
            <div class="loading">Loading questions...</div>
          </div>
        </div>

      </div> <!-- content-grid -->
    </div> <!-- main-content -->
  </div> <!-- container -->
</div> <!-- page-wrap -->

<!-- Success Message -->
<div class="success-message" id="successMessage" style="display:none;"></div>

<!-- Edit Question Modal -->
<div id="editQuestionModal" class="modal">
  <div class="modal-content">
    <h3>Edit Your Question</h3>
    <textarea id="editQuestionText"></textarea>
    <div class="modal-actions">
      <button onclick="closeModal('editQuestionModal')" class="btn btn-ghost">Cancel</button>
      <button onclick="saveEditQuestion()" class="btn btn-primary">Save Changes</button>
    </div>
  </div>
</div>

<!-- Delete Question Confirmation -->
<div id="deleteQuestionModal" class="modal">
  <div class="modal-content">
    <h3>Delete Question</h3>
    <p>Are you sure you want to delete this question? This action cannot be undone and will remove all associated answers.</p>
    <input type="hidden" id="deleteQuestionId">
    <div class="modal-actions">
      <button onclick="closeModal('deleteQuestionModal')" class="btn btn-ghost">Cancel</button>
      <button onclick="confirmDeleteQuestion()" class="btn btn-danger">Delete Question</button>
    </div>
  </div>
</div>

<!-- Edit Answer Modal -->
<div id="editAnswerModal" class="modal">
  <div class="modal-content">
    <h3>Edit Your Answer</h3>
    <textarea id="editAnswerText"></textarea>
    <div class="modal-actions">
      <button onclick="closeModal('editAnswerModal')" class="btn btn-ghost">Cancel</button>
      <button onclick="saveEditAnswer()" class="btn btn-primary">Save Changes</button>
    </div>
  </div>
</div>

<!-- Delete Answer Confirmation -->
<div id="deleteAnswerModal" class="modal">
  <div class="modal-content">
    <h3>Delete Answer</h3>
    <p>Are you sure you want to delete this answer? This action cannot be undone.</p>
    <input type="hidden" id="deleteAnswerId">
    <div class="modal-actions">
      <button onclick="closeModal('deleteAnswerModal')" class="btn btn-ghost">Cancel</button>
      <button onclick="confirmDeleteAnswer()" class="btn btn-danger">Delete Answer</button>
    </div>
  </div>
</div>

<script>
  // Show success message
  function showSuccessMessage(message) {
    const successEl = document.getElementById('successMessage');
    successEl.textContent = message;
    successEl.style.display = 'block';
    successEl.style.opacity = '1';

    setTimeout(() => {
      successEl.style.opacity = '0';
      setTimeout(() => {
        successEl.style.display = 'none';
      }, 300);
    }, 3000);
  }

  async function askQuestion() {
    const question = document.getElementById('questionInput').value.trim();
    if (!question) {
      showSuccessMessage("⚠️ Please type a question!");
      return;
    }

    try {
      const res = await fetch('api/ask.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ question })
      });

      const data = await res.json();

      if (data.success) {
        document.getElementById('questionInput').value = '';
        loadQuestions();
        showSuccessMessage("✅ Your question was posted!");
      } else {
        showSuccessMessage("❌ Error: " + (data.error || "Unknown error"));
      }
    } catch (err) {
      console.error("Fetch error:", err);
      showSuccessMessage("⚠️ Network error. Please check your connection.");
    }
  }

  async function loadQuestions() {
    const container = document.getElementById('questionsContainer');
    container.innerHTML = '<div class="loading">Loading questions...</div>';

    try {
      const res = await fetch('api/get-questions.php');
      const questions = await res.json();

      container.innerHTML = '';

      if (!Array.isArray(questions) || questions.length === 0) {
        container.innerHTML = `
          <div class="no-questions">
            No questions yet. Be the first to ask!
          </div>
        `;
        return;
      }

      questions.forEach(q => {
        const qBox = document.createElement('div');
        qBox.className = 'question-box';

        // Escape all user-generated content for XSS protection
        const questionText = escapeHtml(q.question_text);
        const questionUserName = escapeHtml(q.question_user_name || 'Anonymous');
        const avatarInitial = questionUserName.charAt(0).toUpperCase();

        const left = document.createElement('div');
        left.className = 'question-left';
        left.innerHTML = `<div class="question-avatar">${avatarInitial}</div>`;

        const body = document.createElement('div');
        body.className = 'question-body';

        // Build answers HTML
        const answers = Array.isArray(q.answers) ? q.answers : [];
        let answersHtml = '';
        if (answers.length > 0) {
          answersHtml += `<div style="margin-bottom:8px; font-weight:600; color:var(--text-secondary); font-size:13px;">Answers (${answers.length})</div>`;
          answers.forEach(a => {
            const answerText = escapeHtml(a.answer_text);
            const answerUserName = escapeHtml(a.answer_user_name || 'Anonymous');
            const aAvatar = answerUserName.charAt(0).toUpperCase();
            const isOwner = String(a.answer_user_id) === String(window.currentUser.id);
            const displayName = isOwner ? 'You' : answerUserName;

            const actions = isOwner ? `
              <div style="margin-top:8px; display:flex; gap:8px;">
                <button class="btn btn-ghost" onclick="openEditAnswerModal(${a.id}, '${escapeHtml(a.answer_text).replace(/'/g, "\\'")}')">Edit</button>
                <button class="btn btn-danger" onclick="openDeleteAnswerModal(${a.id})">Delete</button>
              </div>
            ` : '';

            answersHtml += `
              <div class="answer-item">
                <div class="answer-header">
                  <div class="answer-avatar">${aAvatar}</div>
                  <div style="font-weight:600; color:var(--text-primary)">${displayName} <div style="font-size:12px; color:var(--text-muted); font-weight:500;">answered ${new Date(a.answer_created_at).toLocaleString()}</div></div>
                </div>
                <div class="answer-text">${answerText}</div>
                ${actions}
              </div>
            `;
          });
        } else {
          answersHtml = `<div style="color: var(--text-muted); margin-top:8px; font-style:italic;">No answers yet. Be the first!</div>`;
        }

        // Answer form (only if logged in and not the question owner)
        let answerFormHtml = '';
        if (window.currentUser.id && String(window.currentUser.id) !== String(q.question_user_id)) {
          answerFormHtml = `
            <div class="answer-input">
              <textarea placeholder="Write your answer..."></textarea>
              <div style="margin-top:8px;">
                <button class="btn btn-primary" onclick="postAnswer(${q.id}, this)">Answer</button>
              </div>
            </div>
          `;
        }

        const isQuestionOwner = String(q.question_user_id) === String(window.currentUser.id);
        const questionActions = isQuestionOwner ? `
          <div class="question-actions">
            <button class="btn btn-ghost" onclick="openEditQuestionModal(${q.id}, '${escapeHtml(q.question_text).replace(/'/g, "\\'")}')">Edit</button>
            <button class="btn btn-danger" onclick="openDeleteQuestionModal(${q.id})">Delete</button>
          </div>
        ` : '';

        body.innerHTML = `
          <div class="question-meta">
            <strong>${questionUserName}</strong>
            <small>asked ${new Date(q.created_at).toLocaleString()}</small>
          </div>
          <div class="question-text">${questionText}</div>
          ${answersHtml}
          ${answerFormHtml}
          ${questionActions}
        `;

        qBox.appendChild(left);
        qBox.appendChild(body);
        container.appendChild(qBox);
      });
    } catch (err) {
      console.error("Failed to load questions:", err);
      document.getElementById('questionsContainer').innerHTML = `
        <div class="no-questions">
          Failed to load questions. Try again later.
        </div>
      `;
    }
  }

  async function postAnswer(questionId, button) {
    const textarea = button.closest('.answer-input').querySelector('textarea');
    const answerText = textarea.value.trim();

    if (!answerText) {
      showSuccessMessage("⚠️ Please write an answer before submitting.");
      return;
    }

    button.disabled = true;
    button.textContent = 'Posting...';

    try {
      const res = await fetch('api/answer.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ question_id: questionId, answer: answerText })
      });

      const data = await res.json();

      if (data.success) {
        textarea.value = '';
        loadQuestions();
        showSuccessMessage("✅ Your answer was posted!");
      } else {
        showSuccessMessage("❌ Error: " + (data.error || "Failed to post answer."));
      }
    } catch (err) {
      console.error("Post answer error:", err);
      showSuccessMessage("⚠️ Network error. Please check your connection.");
    } finally {
      button.disabled = false;
      button.textContent = 'Answer';
    }
  }

  // EDIT QUESTION MODAL
  function openEditQuestionModal(id, text) {
    document.getElementById('editQuestionText').value = text;
    document.getElementById('editQuestionModal').style.display = 'flex';
    window.currentEditQuestionId = id;
  }

  async function saveEditQuestion() {
    const text = document.getElementById('editQuestionText').value.trim();
    if (!text) {
      showSuccessMessage("⚠️ Question cannot be empty!");
      return;
    }

    try {
      const res = await fetch('api/edit-question.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id: window.currentEditQuestionId, question_text: text })
      });

      const data = await res.json();
      if (data.success) {
        closeModal('editQuestionModal');
        loadQuestions();
        showSuccessMessage("✅ Question updated!");
      } else {
        showSuccessMessage("❌ Error: " + (data.error || "Failed to update"));
      }
    } catch (err) {
      console.error("Edit question error:", err);
      showSuccessMessage("⚠️ Network error.");
    }
  }

  // DELETE QUESTION MODAL
  function openDeleteQuestionModal(id) {
    document.getElementById('deleteQuestionId').value = id;
    document.getElementById('deleteQuestionModal').style.display = 'flex';
  }

  async function confirmDeleteQuestion() {
    const id = document.getElementById('deleteQuestionId').value;
    try {
      const res = await fetch('api/delete-question.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id })
      });

      const data = await res.json();
      if (data.success) {
        closeModal('deleteQuestionModal');
        loadQuestions();
        showSuccessMessage("✅ Question deleted!");
      } else {
        showSuccessMessage("❌ Error: " + (data.error || "Failed to delete"));
      }
    } catch (err) {
      console.error("Delete question error:", err);
      showSuccessMessage("⚠️ Network error.");
    }
  }

  // EDIT ANSWER MODAL
  function openEditAnswerModal(id, text) {
    document.getElementById('editAnswerText').value = text;
    document.getElementById('editAnswerModal').style.display = 'flex';
    window.currentEditAnswerId = id;
  }

  async function saveEditAnswer() {
    const text = document.getElementById('editAnswerText').value.trim();
    if (!text) {
      showSuccessMessage("⚠️ Answer cannot be empty!");
      return;
    }

    try {
      const res = await fetch('api/edit-answer.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id: window.currentEditAnswerId, answer_text: text })
      });

      const data = await res.json();
      if (data.success) {
        closeModal('editAnswerModal');
        loadQuestions();
        showSuccessMessage("✅ Answer updated!");
      } else {
        showSuccessMessage("❌ Error: " + (data.error || "Failed to update"));
      }
    } catch (err) {
      console.error("Edit answer error:", err);
      showSuccessMessage("⚠️ Network error.");
    }
  }

  // DELETE ANSWER MODAL
  function openDeleteAnswerModal(id) {
    document.getElementById('deleteAnswerId').value = id;
    document.getElementById('deleteAnswerModal').style.display = 'flex';
  }

  async function confirmDeleteAnswer() {
    const id = document.getElementById('deleteAnswerId').value;
    try {
      const res = await fetch('api/delete-answer.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id })
      });

      const data = await res.json();
      if (data.success) {
        closeModal('deleteAnswerModal');
        loadQuestions();
        showSuccessMessage("✅ Answer deleted!");
      } else {
        showSuccessMessage("❌ Error: " + (data.error || "Failed to delete"));
      }
    } catch (err) {
      console.error("Delete answer error:", err);
      showSuccessMessage("⚠️ Network error.");
    }
  }

  function closeModal(modalId) {
    const m = document.getElementById(modalId);
    if (m) m.style.display = 'none';
  }

  // Filter (simple client-side)
  function filterQuestions() {
    const q = (document.getElementById('searchInput').value || '').toLowerCase();
    const boxes = document.querySelectorAll('.question-box');
    boxes.forEach(b => {
      const text = b.innerText.toLowerCase();
      b.style.display = text.indexOf(q) !== -1 ? '' : 'none';
    });
  }

  document.addEventListener('DOMContentLoaded', function() {
    loadQuestions();

    // Close modal on overlay click
    document.querySelectorAll('.modal').forEach(modal => {
      modal.addEventListener('click', function(e){
        if (e.target === modal) modal.style.display = 'none';
      });
    });
  });
</script>

<?php include '../head-foot/footer.php'; ?>