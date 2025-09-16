<?php
// forbiden.php
http_response_code(403);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Access Forbidden</title>
  <style>
    :root{
      --bg1: #0f172a;
      --bg2: #0b2545;
      --card: rgba(255,255,255,0.06);
      --accent: #7c5cff;
      --muted: rgba(255,255,255,0.75);
      --glass: rgba(255,255,255,0.04);
      --radius: 18px;
      --fw-bold: 700;
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(124,92,255,0.12), transparent 8%),
                  linear-gradient(180deg,var(--bg1) 0%, var(--bg2) 100%);
      color: #eef2ff;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:28px;
    }

    .card{
      width:100%;
      max-width:980px;
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius: var(--radius);
      padding:32px;
      display:grid;
      grid-template-columns: 1fr 420px;
      gap:28px;
      box-shadow: 0 6px 28px rgba(2,6,23,0.6), inset 0 1px 0 rgba(255,255,255,0.02);
      align-items:center;
      border: 1px solid rgba(255,255,255,0.04);
      backdrop-filter: blur(6px) saturate(120%);
    }

    @media (max-width:880px){
      .card{grid-template-columns: 1fr; text-align:center}
      .art{order:-1}
    }

    .left h1{
      margin:0 0 10px 0;
      font-size:34px;
      letter-spacing:-0.4px;
      font-weight:var(--fw-bold);
    }
    .left p{
      margin:0 0 22px 0;
      color: var(--muted);
      line-height:1.5;
      font-size:15px;
    }

    .buttons{
      display:flex;
      gap:12px;
      align-items:center;
      flex-wrap:wrap;
    }

    .btn{
      appearance:none;
      border:0;
      padding:12px 18px;
      border-radius:12px;
      cursor:pointer;
      font-weight:600;
      font-size:14px;
      text-decoration:none;
      display:inline-flex;
      align-items:center;
      gap:10px;
      transition:transform .12s ease, box-shadow .12s ease;
      box-shadow: 0 6px 18px rgba(7,10,25,0.45);
    }

    .btn-primary{
      background: linear-gradient(90deg, var(--accent), #5ad0ff 140%);
      color:#081028;
      transform: translateY(0);
    }
    .btn-primary:active{ transform: translateY(1px) scale(.997) }

    .btn-ghost{
      background: transparent;
      color: var(--muted);
      border: 1px solid rgba(255,255,255,0.06);
      backdrop-filter: blur(4px);
    }

    .hint{
      display:flex;
      gap:10px;
      align-items:center;
      color:rgba(255,255,255,0.6);
      font-size:13px;
    }

    /* art container */
    .art{
      display:flex;
      align-items:center;
      justify-content:center;
      padding:8px;
    }
    .illustration{
      width:100%;
      max-width:380px;
      height:auto;
      display:block;
    }

    footer.small{
      margin-top:14px;
      color: rgba(255,255,255,0.45);
      font-size:12px;
    }

    /* small decorative badge */
    .badge{
      display:inline-flex;
      gap:8px;
      align-items:center;
      background: var(--glass);
      padding:8px 12px;
      border-radius:999px;
      font-size:13px;
      color:var(--muted);
      border: 1px solid rgba(255,255,255,0.02);
    }

    /* subtle floating */
    .float{
      transform: translateY(0);
      animation: float 4s ease-in-out infinite;
    }
    @keyframes float {
      0% { transform: translateY(0) }
      50% { transform: translateY(-8px) }
      100% { transform: translateY(0) }
    }
  </style>
</head>
<body>
  <main class="card" role="main" aria-labelledby="title">
    <section class="left">
      <div class="badge" aria-hidden="true">
        <!-- simple lock icon -->
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
          <path d="M7 10V7a5 5 0 1 1 10 0v3" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          <rect x="4" y="10" width="16" height="10" rx="2" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>Access Denied</span>
      </div>

      <h1 id="title">403 — You're not allowed here</h1>
      <p>Sorry — you don’t have permission to view this page or directory. If you think this is a mistake, go to the site home or contact the site administrator.</p>

      <div class="buttons" role="toolbar" aria-label="Actions">
        <a class="btn btn-primary" href="/std/" title="Go to home">
          <!-- arrow icon -->
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 12h14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Go to Home
        </a>

        <button class="btn btn-ghost" onclick="history.back()" title="Go back">
          <!-- back icon -->
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 12H6" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 5l-7 7 7 7" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          Go Back
        </button>
      </div>

      <footer class="small" aria-hidden="true">
        <div style="margin-top:12px">Error code: <strong>403</strong> • <span style="opacity:.85">forbidden</span></div>
      </footer>
    </section>

    <aside class="art" aria-hidden="true">
      <!-- Inline SVG illustration of a friendly girl holding a shield (stylized) -->
      <svg class="illustration float" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Illustration of a person showing access denied">
        <defs>
          <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
            <stop offset="0" stop-color="#7c5cff"/>
            <stop offset="1" stop-color="#5ad0ff"/>
          </linearGradient>
          <linearGradient id="g2" x1="0" x2="1" y1="0" y2="1">
            <stop offset="0" stop-color="#fff"/>
            <stop offset="1" stop-color="#f0f6ff"/>
          </linearGradient>
          <filter id="soft" x="-20%" y="-20%" width="140%" height="140%">
            <feDropShadow dx="0" dy="10" stdDeviation="22" flood-color="#071031" flood-opacity="0.35"/>
          </filter>
        </defs>

        <!-- background circle -->
        <circle cx="300" cy="300" r="260" fill="url(#g1)" opacity="0.12" />

        <!-- girl body -->
        <g transform="translate(120,110)">
          <!-- hair -->
          <path d="M200 40c-40-12-120-28-170 12-30 24-26 76-2 112 24 36 88 68 146 64 58-4 102-40 110-84 8-44-22-98-84-104z" fill="#1a2340" opacity="0.95"/>
          <!-- face -->
          <ellipse cx="200" cy="140" rx="62" ry="78" fill="#ffd7b6"/>
          <!-- eyes -->
          <g transform="translate(170,130)" fill="#1a2340">
            <circle cx="0" cy="0" r="6"/>
            <circle cx="60" cy="0" r="6"/>
          </g>
          <!-- smile -->
          <path d="M170 170 q30 30 60 0" stroke="#7a4b2f" stroke-width="3" fill="none" stroke-linecap="round"/>
          <!-- upper clothes -->
          <path d="M120 210 q80 40 160 0 v120 q-40 30 -160 30 q-120 0 -120 -30 v-120 q40 12 120 -30z" fill="#2b3b66"/>
          <!-- shield -->
          <g transform="translate(20,60) scale(.9)">
            <path d="M420 220c0 90-40 160-100 160s-100-70-100-160c0-48 40-88 100-120 60 32 100 72 100 120z" fill="url(#g2)" stroke="rgba(10,16,30,0.06)" stroke-width="6" filter="url(#soft)"/>
            <path d="M340 230c0 46-20 84-50 84s-50-38-50-84c0-26 20-52 50-70 30 18 50 44 50 70z" fill="url(#g1)" opacity="0.95"/>
            <text x="320" y="320" text-anchor="middle" fill="#081028" font-weight="700" font-family="Inter, Arial" font-size="42">!</text>
          </g>

          <!-- arm resting on shield -->
          <path d="M160 240 q40 12 82 6" stroke="#ffd7b6" stroke-width="22" stroke-linecap="round" fill="none"/>
          <!-- small decorative pad -->
          <circle cx="50" cy="330" r="8" fill="#5ad0ff" opacity="0.95"/>
        </g>

      </svg>
    </aside>
  </main>

  <script>
    // ensure the link uses the site root correctly
    // no JS required, but keep accessibility improvements
    (function(){
      var home = document.querySelector('.btn-primary');
      if(home){
        // if user is on local dev with a port, keep the href; this ensures /std/ root is used
        home.addEventListener('click', function(e){
          // leave default anchor behavior
        });
      }
    })();
  </script>
</body>
</html>
