<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$posts_per_page = 20;

function fetchKECNotices($page = 1, $posts_per_page = 20) {
    $offset = ($page - 1) * $posts_per_page;
    $url = "https://kec.edu.np/notice/";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; KEC Notice Scraper)');
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // In case of SSL issues
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if (!$html || $httpCode != 200) {
        return ['error' => 'Failed to fetch KEC notices page ' . $page . ' (HTTP ' . $httpCode . ')'];
    }

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // Target the main notice grid container
    $grid = $xpath->query('//div[@id="eael-post-grid-0da7804"]')->item(0);
    if (!$grid) {
        return ['error' => 'Notice grid container not found on KEC page. Structure may have changed.'];
    }

    $notices = [];
    $articles = $xpath->query('.//article[contains(@class, "eael-grid-post")]', $grid);

    foreach ($articles as $article) {
        $titleNode = $xpath->query('.//h2[@class="eael-entry-title"]/a', $article)->item(0);
        if (!$titleNode) continue;

        $title = trim($titleNode->textContent);
        $link = trim($titleNode->getAttribute('href'));

        // Clean and normalize URL
        if ($link && !preg_match('/^https?:\/\//', $link)) {
            $link = 'https://kec.edu.np' . ltrim($link, '/');
        }

        // Remove trailing spaces or malformed paths
        $link = preg_replace('/\s+/', '', $link);
        $link = rtrim($link, '/ ') . '/';

        $notices[] = [
            'title' => $title,
            'link' => $link
        ];
    }

    // Try to extract total pages from Load More button
    $totalPages = 3; // Default fallback
    $loadMoreBtn = $xpath->query('//button[@id="eael-load-more-btn-0da7804"]')->item(0);
    if ($loadMoreBtn && $loadMoreBtn->hasAttribute('data-max-page')) {
        $totalPages = (int)$loadMoreBtn->getAttribute('data-max-page');
    }

    return [
        'page' => $page,
        'total_pages' => $totalPages,
        'notices' => $notices,
        'notice_count' => count($notices)
    ];
}

echo json_encode(fetchKECNotices($page, $posts_per_page), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>