<?php
session_start();

// If already logged in, redirect to Q&A
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    header("Location: /std/");
    exit;
}

// Define root path for consistency
define('ROOT_PATH', '/std/');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login — IOESEMS</title>

  <!-- Font Awesome for Google icon -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <style>
    /* Page background (green + yellow theme) */
    :root{
      --green-700:#2b7a0b;
      --green-500:#57a600;
      --yellow-400:#f6d94d;
      --card-bg: rgba(255,255,255,0.98);
      --muted:#6b6b6b;
    }
    html,body{
      height:100%;
      margin:0;
      font-family: Inter, "Segoe UI", Roboto, system-ui, -apple-system, "Helvetica Neue", Arial;
      -webkit-font-smoothing:antialiased;
    }
    body{
      display:flex;
      align-items:center;
      justify-content:center;
      background: linear-gradient(135deg, rgba(87,166,0,0.95) 0%, rgba(246,217,77,0.9) 60%);
      padding:24px;
    }

    /* Center card */
    .card {
      width:100%;
      max-width:920px;
      background: linear-gradient(180deg, rgba(255,255,255,0.95), rgba(255,255,255,0.92));
      border-radius:16px;
      box-shadow: 0 12px 40px rgba(20,30,10,0.18);
      display:flex;
      overflow:hidden;
      align-items:stretch;
    }

    /* Left panel - brand / illustration */
    .brand {
      flex:1.1;
      background: linear-gradient(180deg, rgba(43,122,11,0.08), rgba(87,166,0,0.04));
      padding:36px;
      display:flex;
      flex-direction:column;
      justify-content:center;
      gap:18px;
    }
    .brand h1{
      margin:0;
      color:var(--green-700);
      font-size:26px;
      letter-spacing:0.2px;
    }
    .brand p.lead{
      margin:0;
      color:var(--muted);
      max-width:320px;
      line-height:1.45;
    }
    .brand .logo-badge{
      display:inline-flex;
      gap:8px;
      align-items:center;
      background:linear-gradient(90deg,var(--yellow-400),#fff);
      padding:8px 12px;
      border-radius:999px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.06);
      width:fit-content;
      color:#2b7a0b;
      font-weight:700;
    }

    /* Right panel - login actions */
    .actions {
      flex:0.9;
      padding:28px;
      display:flex;
      flex-direction:column;
      justify-content:center;
      gap:16px;
    }

    .actions h2{
      margin:0;
      font-size:20px;
      color:#184f09;
    }
    .actions p.small{
      margin:0;
      color:var(--muted);
      font-size:0.95rem;
    }

    /* Google button */
    .google-btn {
      display:inline-flex;
      align-items:center;
      gap:12px;
      padding:12px 16px;
      border-radius:10px;
      border:0;
      cursor:pointer;
      font-weight:700;
      font-size:15px;
      background: linear-gradient(90deg, #4285F4, #34A853);
      color:#fff;
      box-shadow: 0 8px 18px rgba(17,24,10,0.12);
      transition:transform .14s ease, box-shadow .14s ease;
    }
    .google-btn:hover{ transform:translateY(-3px); box-shadow:0 14px 30px rgba(17,24,10,0.14); }
    .google-btn[disabled]{ opacity:.75; cursor:default; transform:none; box-shadow:none; }

    .google-btn .fa-google { font-size:18px; }

    .secondary {
      display:flex;
      gap:10px;
      align-items:center;
      font-size:0.92rem;
      color:var(--muted);
    }

    /* Modal box for in-place login flow */
    .modal-backdrop {
      position:fixed;
      inset:0;
      display:none;
      align-items:center;
      justify-content:center;
      background: rgba(10,10,10,0.36);
      z-index:1000;
      padding:20px;
    }

    .modal {
      width:100%;
      max-width:420px;
      background:var(--card-bg);
      border-radius:12px;
      padding:18px;
      box-shadow: 0 18px 50px rgba(0,0,0,0.25);
      display:flex;
      gap:12px;
      align-items:center;
    }
    .modal .left {
      width:72px;
      height:72px;
      border-radius:10px;
      background: linear-gradient(180deg, #f7f7f7, #fff);
      display:flex;
      align-items:center;
      justify-content:center;
      border:1px solid rgba(0,0,0,0.04);
    }
    .modal .body {
      flex:1;
      display:flex;
      flex-direction:column;
      gap:6px;
    }
    .modal h3 {
      margin:0;
      font-size:16px;
      color:#133f04;
    }
    .modal p {
      margin:0;
      color:var(--muted);
      font-size:0.95rem;
    }

    .spinner {
      width:18px;
      height:18px;
      border-radius:50%;
      border:3px solid rgba(0,0,0,0.08);
      border-left-color: rgba(0,0,0,0.45);
      animation:spin 0.9s linear infinite;
      display:inline-block;
    }
    @keyframes spin { to { transform:rotate(360deg); } }

    .user-row {
      display:flex;
      gap:12px;
      align-items:center;
    }
    .avatar {
      width:44px;height:44px;border-radius:8px;background:#eee;overflow:hidden;display:flex;align-items:center;justify-content:center;border:1px solid rgba(0,0,0,0.04);
    }
    .avatar img{ width:100%; height:100%; object-fit:cover; }

    .modal .actions {
      margin-left:6px;
      display:flex;
      gap:8px;
      align-items:center;
    }

    .btn-small {
      padding:8px 10px;border-radius:8px;border:0;cursor:pointer;font-weight:700;
    }
    .btn-cancel { background:transparent;color:var(--muted); }
    .btn-continue { background:var(--green-500); color:#fff; }

    /* small helpers */
    .muted { color:var(--muted); font-size:0.92rem; }

    /* responsive */
    @media (max-width:720px){
      .card{ flex-direction:column; max-width:420px; }
      .brand{ order:2; padding:20px; }
      .actions{ order:1; padding:18px; }
    }

  </style>
</head>
<body>

  <div class="card" role="main" aria-labelledby="title">
    <div class="brand" aria-hidden="false">
      <div class="logo-badge">IOESEMS</div>
      <h1 id="title">IOE Student Q&A</h1>
      <p class="lead">A friendly Q&A community for IOE students — ask, learn, and share. Sign in with your Google account to continue.</p>
      <p class="muted">Secure login powered by Firebase Authentication</p>
    </div>

    <div class="actions" role="region" aria-label="Login area">
      <h2>Sign in</h2>
      <p class="small">Use your Google account. We only store your name & email for session management.</p>

      <div style="margin-top:12px;">
        <button class="google-btn" id="googleSignBtn" aria-label="Sign in with Google">
          <i class="fab fa-google"></i>
          <span style="min-width:8px"></span>
          Sign in with Google
        </button>
      </div>

      <div style="margin-top:14px;" class="secondary">
        <span class="muted">By signing in you agree to the community rules.</span>
      </div>

      <div style="margin-top:18px;">
        <a href="<?= ROOT_PATH ?>/" style="color:#184f09; text-decoration:none;">← Back to Home</a>
      </div>
    </div>
  </div>

  <!-- Modal backdrop for in-place login flow -->
  <div class="modal-backdrop" id="modalBackdrop" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="modal" role="document" aria-labelledby="modalTitle">
      <div class="left" id="modalIcon">
        <span class="spinner" id="modalSpinner" aria-hidden="true"></span>
      </div>
      <div class="body">
        <h3 id="modalTitle">Signing you in...</h3>
        <p id="modalMessage">A Google sign-in popup will open — complete the flow. If nothing happens, allow popups or try the redirect option.</p>

        <!-- After success: show user info -->
        <div id="userInfo" style="display:none; margin-top:8px;">
          <div class="user-row">
            <div class="avatar" id="userAvatar"><!-- image --> </div>
            <div style="flex:1">
              <div id="userName" style="font-weight:700;color:#133f04"></div>
              <div id="userEmail" class="muted"></div>
            </div>
          </div>
        </div>

        <div style="margin-top:10px; display:flex; gap:8px; align-items:center;">
          <button class="btn-small btn-continue" id="continueBtn" style="display:none;">Continue</button>
          <button class="btn-small btn-cancel" id="cancelBtn">Cancel</button>
          <button class="btn-small" id="tryRedirectBtn" style="display:none;">Try Redirect</button>
        </div>
      </div>
    </div>
  </div>

  <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-app.js";
    import { getAuth, GoogleAuthProvider, signInWithPopup, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/11.2.0/firebase-auth.js";

    // --- Firebase config (keep in sync with your project) ---
    const firebaseConfig = {
      apiKey: "AIzaSyDyCmJH8PoT3eTtRS52nZ5fyrofwIymMUk",
      authDomain: "webapp-e3540.firebaseapp.com",
      projectId: "webapp-e3540",
      storageBucket: "webapp-e3540.appspot.com",
      messagingSenderId: "330320311086",
      appId: "1:330320311086:web:56a6cc31dd4daad42d00bf"
    };

    const app = initializeApp(firebaseConfig);
    const auth = getAuth(app);
    const provider = new GoogleAuthProvider();

    // UI elements
    const signBtn = document.getElementById('googleSignBtn');
    const backdrop = document.getElementById('modalBackdrop');
    const modalTitle = document.getElementById('modalTitle');
    const modalMessage = document.getElementById('modalMessage');
    const modalSpinner = document.getElementById('modalSpinner');
    const userInfo = document.getElementById('userInfo');
    const userAvatar = document.getElementById('userAvatar');
    const userName = document.getElementById('userName');
    const userEmail = document.getElementById('userEmail');
    const continueBtn = document.getElementById('continueBtn');
    const cancelBtn = document.getElementById('cancelBtn');
    const tryRedirectBtn = document.getElementById('tryRedirectBtn');

    const modalShown = () => {
      backdrop.style.display = 'flex';
      backdrop.setAttribute('aria-hidden','false');
    };
    const modalHide = () => {
      backdrop.style.display = 'none';
      backdrop.setAttribute('aria-hidden','true');
      // reset
      modalTitle.textContent = 'Signing you in...';
      modalMessage.textContent = 'A Google sign-in popup will open — complete the flow. If nothing happens, allow popups or try the redirect option.';
      modalSpinner.style.display = 'inline-block';
      userInfo.style.display = 'none';
      continueBtn.style.display = 'none';
      tryRedirectBtn.style.display = 'none';
    };

    function setBusyState(on){
      if(on){
        signBtn.setAttribute('disabled','true');
      } else {
        signBtn.removeAttribute('disabled');
      }
    }

    // Show modal and start popup sign-in
    async function startPopupSignIn(){
      modalShown();
      setBusyState(true);
      try {
        const result = await signInWithPopup(auth, provider);
        // result.user available
        handleFirebaseUser(result.user);
      } catch (err) {
        console.error('Popup sign-in error:', err);
        modalSpinner.style.display = 'none';
        // Friendly messages
        if (err && err.code === 'auth/popup-blocked') {
          modalTitle.textContent = 'Popup blocked';
          modalMessage.textContent = 'Your browser blocked the popup. Allow popups for this site or try the redirect method.';
          tryRedirectBtn.style.display = 'inline-block';
        } else if (err && err.code === 'auth/cancelled-popup-request') {
          modalTitle.textContent = 'Popup canceled';
          modalMessage.textContent = 'Sign-in was canceled. You can try again.';
        } else {
          modalTitle.textContent = 'Sign-in failed';
          modalMessage.textContent = (err && err.message) ? err.message : 'An unexpected error occurred.';
          tryRedirectBtn.style.display = 'inline-block';
        }
        setBusyState(false);
      }
    }

    // When we have a firebase user (after popup), get ID token and send to server
    async function handleFirebaseUser(user){
      if(!user) return;
      modalTitle.textContent = 'Verifying account…';
      modalMessage.textContent = 'Sending secure token to server for verification.';
      modalSpinner.style.display = 'inline-block';
      try {
        const idToken = await user.getIdToken();
        // send to server
        const res = await fetch('login.php', {
          method: 'POST',
          headers: {'Content-Type':'application/json'},
          body: JSON.stringify({ idToken })
        });

        let data = null;
        try { data = await res.json(); } catch(e){ /* ignore parse error */ }

        if (!res.ok || !data || data.status !== 'success') {
          // show server-provided message if any
          const serverMsg = (data && (data.error || data.message)) ? (data.error || data.message) : `Server responded with status ${res.status}`;
          throw new Error(serverMsg);
        }

        // success — show user info in modal, then redirect
        modalSpinner.style.display = 'none';
        userInfo.style.display = 'block';
        userAvatar.innerHTML = user.photoURL ? `<img src="${user.photoURL}" alt="avatar">` : `<span>U</span>`;
        userName.textContent = data.name || user.displayName || 'User';
        userEmail.textContent = data.email || user.email || '';

        modalTitle.textContent = 'Welcome back!';
        modalMessage.textContent = 'You have been logged in successfully. Redirecting to the community…';
        continueBtn.style.display = 'inline-block';
        continueBtn.textContent = 'Continue';

        // small delay for UX then redirect (prefer server redirect field)
        const redirectTo = data.redirect || '<?= ROOT_PATH ?>';
        setTimeout(()=> {
          window.location.href = redirectTo;
        }, 650);

      } catch (err) {
        console.error('Server verification error:', err);
        modalSpinner.style.display = 'none';
        modalTitle.textContent = 'Verification failed';
        modalMessage.textContent = (err && err.message) ? err.message : 'Unable to verify your account.';
        tryRedirectBtn.style.display = 'inline-block';
        setBusyState(false);
      }
    }

    // Button handlers
    signBtn.addEventListener('click', () => {
      startPopupSignIn();
    });

    cancelBtn.addEventListener('click', () => {
      modalHide();
      setBusyState(false);
    });

    continueBtn.addEventListener('click', () => {
      // just in case user clicks continue before redirect
      modalMessage.textContent = 'Redirecting…';
    });

    tryRedirectBtn.addEventListener('click', () => {
      // If popup isn't possible, fall back to redirect sign-in (user will be sent away)
      modalMessage.textContent = 'Falling back to redirect sign-in...';
      modalSpinner.style.display = 'inline-block';
      // Use redirect as last resort (this will navigate away)
      // load firebase auth redirect method dynamically to avoid unused import
      import("https://www.gstatic.com/firebasejs/11.2.0/firebase-auth.js").then(module => {
        const { getAuth, GoogleAuthProvider, signInWithRedirect } = module;
        const authRef = getAuth();
        const providerRef = new GoogleAuthProvider();
        signInWithRedirect(authRef, providerRef);
      }).catch(err => {
        console.error('Redirect fallback failed:', err);
        modalSpinner.style.display = 'none';
        modalMessage.textContent = 'Redirect fallback failed. Please enable popups or try from another browser.';
      });
    });

    // Safety: if the user is already signed in client-side (rare here), verify with server
    onAuthStateChanged(auth, async (user) => {
      if (!user) return;
      // if modal not shown, show and verify silently
      if (backdrop.style.display !== 'flex') modalShown();
      await handleFirebaseUser(user);
    });

    // Close modal when clicking outside the modal content
    backdrop.addEventListener('click', (e) => {
      if (e.target === backdrop) {
        modalHide();
        setBusyState(false);
      }
    });

    // initial accessibility: ensure modal hidden
    modalHide();

  </script>

</body>
</html>
