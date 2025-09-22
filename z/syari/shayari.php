<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌸 Hindi Shayari Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background: #0d1117; /* GitHub Dark Background */
            color: #e6e6e6;
            font-family: system-ui, -apple-system, sans-serif;
        }
        .navbar-brand {
            font-weight: 700;
            color: #58a6ff !important;
        }
    </style>
</head>
<body>

    <!-- Navbar (GitHub Style) -->
    <nav class="navbar navbar-dark bg-dark" style="background: #161b22 !important; border-bottom: 1px solid #30363d;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                🌸 Shayari Portal
            </a>
            <div>
                <a href="news_ioe.php" class="btn btn-sm btn-outline-light me-2">IOE News</a>
                <a href="news_kec.php" class="btn btn-sm btn-outline-light">KEC News</a>
            </div>
        </div>
    </nav>

    <!-- Shayari Card -->
    <div class="shayari-container">
        <div class="shayari-card">
            <img src="https://hindi-shayari.netlify.app/shayarilogo.png" alt="Shayari Logo" class="shayari-logo">

            <hr class="shayari-divider">

            <div id="shayari-content">
                <p class="shayari-text">Loading shayari...</p>
                <p class="shayari-author">- Loading</p>
            </div>

            <button id="nextShayariBtn" class="next-btn">
                अगली शायरी
            </button>
        </div>

        <!-- Footer Credit -->
        <div class="shayari-footer">
            Made with 💖 by 
            <a href="https://github.com/hardiksingh" target="_blank">@Hardik Singh</a> 
            & 
            <a href="https://github.com/akkshaytandon" target="_blank">@Akkshay Tandon</a>
            <br>
            Data sourced from <a href="https://hindi-shayari.netlify.app/" target="_blank">hindi-shayari.netlify.app</a>
        </div>
    </div>

    <script>
        async function loadShayari() {
            const contentDiv = document.getElementById('shayari-content');
            contentDiv.innerHTML = `
                <p class="shayari-text">Loading...</p>
                <p class="shayari-author">- Please wait</p>
            `;

            try {
                const response = await fetch('fetch_shayari.php');
                const data = await response.json();

                if (data.error) {
                    contentDiv.innerHTML = `
                        <p class="shayari-text">Error: ${data.error}</p>
                        <p class="shayari-author">- System</p>
                    `;
                } else {
                    contentDiv.innerHTML = `
                        <p class="shayari-text">${data.shayari}</p>
                        <p class="shayari-author">${data.author}</p>
                    `;
                }
            } catch (err) {
                contentDiv.innerHTML = `
                    <p class="shayari-text">Failed to load shayari. Please try again.</p>
                    <p class="shayari-author">- Error</p>
                `;
                console.error(err);
            }
        }

        // Load on page load
        document.addEventListener('DOMContentLoaded', loadShayari);

        // Load next on button click
        document.getElementById('nextShayariBtn').addEventListener('click', loadShayari);
    </script>

</body>
</html>