<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

function fetchIOENotices($page = 1) {
    $baseUrl = 'http://exam.ioe.edu.np/';
    $url = $page == 1 ? $baseUrl : $baseUrl . '?page=' . $page;

    // Use cURL for better reliability
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; PHP Notice Scraper)');
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if (!$html || $httpCode != 200) {
        return ['error' => 'Failed to fetch page ' . $page . ' from IOE server.'];
    }

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // Extract notices from table
    $table = $xpath->query('//table[@id="datatable"]')->item(0);
    if (!$table) {
        return ['error' => 'Notice table not found on page ' . $page . '.'];
    }

    $notices = [];
    $rows = $xpath->query('.//tbody/tr', $table);

    foreach ($rows as $row) {
        $cells = $xpath->query('.//td', $row);
        if ($cells->length < 4) continue;

        $sno = trim($cells->item(0)->textContent);
        $titleCell = $cells->item(1);
        $titleLink = $xpath->query('.//a', $titleCell)->item(0);
        $title = $titleLink ? trim($titleLink->textContent) : '';
        $pdfUrl = $titleLink && $titleLink->hasAttribute('href')
                  ? 'http://exam.ioe.edu.np' . $titleLink->getAttribute('href')
                  : '';

        $date = trim($cells->item(2)->textContent);

        $notices[] = [
            'sno' => $sno,
            'title' => $title,
            'date' => $date,
            'pdf_url' => $pdfUrl
        ];
    }

    // Extract total pages from pagination
    $totalPages = 1;
    $paginationItems = $xpath->query('//ul[@class="pagination"]/li/a[@href]');
    $lastPage = 1;

    foreach ($paginationItems as $item) {
        $href = $item->getAttribute('href');
        if (preg_match('/[?&]page=(\d+)/', $href, $matches)) {
            $pageNum = (int)$matches[1];
            if ($pageNum > $lastPage) {
                $lastPage = $pageNum;
            }
        }
    }

    // Also check for "Last" page link
    $lastLink = $xpath->query('//li[@class="PagedList-skipToLast"]/a[@href]')->item(0);
    if ($lastLink) {
        $href = $lastLink->getAttribute('href');
        if (preg_match('/[?&]page=(\d+)/', $href, $matches)) {
            $lastPage = (int)$matches[1];
        }
    }

    $totalPages = $lastPage;

    return [
        'page' => $page,
        'total_pages' => $totalPages,
        'notices' => $notices
    ];
}

echo json_encode(fetchIOENotices($page), JSON_UNESCAPED_UNICODE);
?>