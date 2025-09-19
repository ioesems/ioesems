<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOE Exam Notices - Page <?php echo isset($_GET['page']) ? (int)$_GET['page'] : 1; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<div class="header-section" style="background: linear-gradient(135deg, #fbbf24, #4ade80);">
    <div class="container">
        <h1>📢 IOE Exam Notices</h1>
        <p class="lead">Official notices scraped from <a href="http://exam.ioe.edu.np/" target="_blank">exam.ioe.edu.np</a></p>
    </div>
</div>

<div class="container">

    <?php
    $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;

    function fetchJson($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'IOE Notice Client');
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            return false;
        }
        return $response;
    }

    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $scriptPath = dirname($_SERVER['SCRIPT_NAME']);
    if ($scriptPath === '\\' || $scriptPath === '/') $scriptPath = '';
    if ($scriptPath !== '/' && $scriptPath !== '') $scriptPath .= '/';
    $baseUrl = $protocol . '://' . $host . $scriptPath;

    $fetchUrl = $baseUrl . 'fetch_news_ioe_exam.php?page=' . $page;
    $json = fetchJson($fetchUrl);

    if ($json === false) {
        echo '<div class="empty-state">
                <i class="fas fa-exclamation-triangle"></i>
                <h4>⚠️ Connection Error</h4>
                <p>Unable to connect to backend server. Please try again later.</p>
              </div>';
    } else {
        $data = json_decode($json, true);

        if (isset($data['error'])) {
            echo '<div class="empty-state">
                    <i class="fas fa-ban"></i>
                    <h4>Error Loading Notices</h4>
                    <p>' . htmlspecialchars($data['error']) . '</p>
                  </div>';
        } else {
            $notices = $data['notices'] ?? [];
            $currentPage = $data['page'] ?? 1;
            $totalPages = $data['total_pages'] ?? 1;

            if (empty($notices)) {
                echo '<div class="empty-state">
                        <i class="fas fa-inbox"></i>
                        <h4>📭 No notices found</h4>
                        <p>There are no notices available for page ' . $currentPage . '.</p>
                      </div>';
            } else {
                echo '<div class="notice-grid">';
                foreach ($notices as $notice) {
                    echo '
                    <div class="notice-card">
                        <h3>
                            <a href="' . htmlspecialchars($notice['pdf_url']) . '" target="_blank" class="notice-title">
                                ' . htmlspecialchars($notice['sno']) . '. ' . htmlspecialchars($notice['title']) . '
                            </a>
                        </h3>
                        <div class="notice-meta">
                            <span class="source-badge">IOE Exam Dept</span>
                            <span class="date-badge">' . htmlspecialchars($notice['date']) . '</span>
                        </div>
                    </div>';
                }
                echo '</div>';

                // Render Pagination
                if ($totalPages > 1) {
                    echo '<div class="pagination-section">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">';

                    // Previous
                    if ($currentPage > 1) {
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($currentPage - 1) . '">&laquo; Prev</a></li>';
                    } else {
                        echo '<li class="page-item disabled"><span class="page-link">&laquo; Prev</span></li>';
                    }

                    // Page Numbers
                    $start = max(1, $currentPage - 2);
                    $end = min($totalPages, $currentPage + 2);

                    if ($start > 1) {
                        echo '<li class="page-item"><a class="page-link" href="?page=1">1</a></li>';
                        if ($start > 2) {
                            echo '<li class="page-item disabled"><span class="page-link">…</span></li>';
                        }
                    }

                    for ($i = $start; $i <= $end; $i++) {
                        echo '<li class="page-item ' . ($currentPage == $i ? 'active' : '') . '">
                                <a class="page-link" href="?page=' . $i . '">' . $i . '</a>
                              </li>';
                    }

                    if ($end < $totalPages) {
                        if ($end < $totalPages - 1) {
                            echo '<li class="page-item disabled"><span class="page-link">…</span></li>';
                        }
                        echo '<li class="page-item"><a class="page-link" href="?page=' . $totalPages . '">' . $totalPages . '</a></li>';
                    }

                    // Next
                    if ($currentPage < $totalPages) {
                        echo '<li class="page-item"><a class="page-link" href="?page=' . ($currentPage + 1) . '">Next &raquo;</a></li>';
                    } else {
                        echo '<li class="page-item disabled"><span class="page-link">Next &raquo;</span></li>';
                    }

                    echo '</ul></nav>
                          <p class="page-info">Page <strong>' . $currentPage . '</strong> of <strong>' . $totalPages . '</strong></p>
                        </div>';
                }
            }
        }
    }
    ?>

    <div class="footer">
        <p>© <?php echo date('Y'); ?> IOE Notices Portal. Not affiliated with IOE. For educational purposes only.</p>
    </div>

</div>

</body>
</html>