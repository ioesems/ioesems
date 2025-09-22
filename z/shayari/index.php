<?php
// Include site header (navigation, meta, etc.)
include '../../components/head-foot/header.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quick Links</title>
  <style>
    :root{
      --bg-1: #f7fdeb; /* very light yellow-green */
      --bg-2: linear-gradient(135deg,#e8f9a7 0%, #c8e86a 100%); /* greenish-yellow */
      --card: #ffffff;
      --accent: #7fb800; /* stronger green */
      --muted: #6b6b48;
      --glass: rgba(255,255,255,0.6);
    }
    html,body{height:100%;}
    body{
      margin:0;
      min-height:100%;
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Noto Sans', 'Helvetica Neue', Arial;
      background: var(--bg-1);
      display:flex;
      align-items:center;
      justify-content:center;
      padding:16px;
      color:var(--muted);
    }

    .wrap{
      width:100%;
      max-width:520px;
      background: var(--bg-2);
      border-radius:16px;
      padding:14px;
      box-shadow: 0 10px 30px rgba(86,125,70,0.12), inset 0 1px 0 rgba(255,255,255,0.35);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
    }

    header.site-header{
      display:flex;
      align-items:center;
      gap:12px;
      padding:6px 4px 12px 4px;
    }
    .logo-circle{
      width:44px;height:44px;border-radius:10px;
      background:linear-gradient(180deg, rgba(255,255,255,0.3), rgba(255,255,255,0.08));
      display:flex;align-items:center;justify-content:center;font-weight:700;color:#2a4a00;
      box-shadow:0 4px 10px rgba(0,0,0,0.06);
      flex-shrink:0;
    }
    h1.title{font-size:1.05rem;margin:0;color:#234000;font-weight:700;}
    p.subtitle{margin:0;font-size:0.83rem;color:#2b3b12;opacity:0.95}

    .grid{
      display:grid;
      grid-template-columns: repeat(2,1fr);
      gap:10px;
      margin-top:10px;
    }

    a.link-card{
      display:flex;flex-direction:column;align-items:center;justify-content:center;padding:12px;border-radius:12px;text-decoration:none;
      background:var(--card);color:#153b00;font-weight:600;box-shadow:0 6px 18px rgba(40,70,20,0.08);
      transition: transform .12s ease, box-shadow .12s ease;
      min-height:84px; text-align:center;line-height:1.1;
    }
    a.link-card:active{transform:translateY(1px)}
    a.link-card:hover{transform:translateY(-4px);box-shadow:0 12px 30px rgba(40,70,20,0.12)}

    .link-card small{display:block;font-size:0.78rem;color:#466b07;margin-top:6px;font-weight:500}

    /* single-column on very small screens */
    @media (max-width:420px){
      .grid{grid-template-columns: 1fr;gap:8px}
      .wrap{padding:10px;border-radius:12px}
      a.link-card{min-height:72px;padding:10px}
      header.site-header{gap:8px}
      .logo-circle{width:40px;height:40px}
    }

    /* make sure page content fits a typical Android viewport (no vertical overflow) */
    @media (max-height:720px){
      .wrap{padding:10px}
      a.link-card{min-height:68px;padding:8px}
      h1.title{font-size:1rem}
      p.subtitle{font-size:0.78rem}
    }

    /* small visual accents */
    .icon{width:34px;height:34px;border-radius:8px;background:linear-gradient(180deg,var(--accent),#9ecf2b);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;box-shadow:0 4px 10px rgba(0,0,0,0.08);}

    footer.note{margin-top:12px;text-align:center;font-size:0.78rem;color:#2f4800;opacity:0.9}

  </style>
</head>
<body>
  <div class="wrap" role="main">
    <header class="site-header">
      <div class="logo-circle">S</div>
      <div>
        <h1 class="title">Quick Links</h1>
        <p class="subtitle">Open pages fast — designed for Android (green-yellow)</p>
      </div>
    </header>

    <nav class="grid" aria-label="quick links">
      <a class="link-card" href="hindi_quotes.php">
        <div class="icon">Q</div>
        <div style="margin-top:8px">Quotes<br><small>random</small></div>
      </a>

      <a class="link-card" href="hindi_shayari.php">
        <div class="icon">C</div>
        <div style="margin-top:8px">Category Quotes<br><small>pick category</small></div>
      </a>

      <a class="link-card" href="syari.php">
        <div class="icon">A</div>
        <div style="margin-top:8px">Auto Search<br><small>find new shayari</small></div>
      </a>


    </nav>

    <footer class="note">Tap a tile to open. Use back button to return.</footer>
  </div>
</body>
</html>
