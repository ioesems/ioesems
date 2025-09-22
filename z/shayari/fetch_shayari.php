<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

function fetchShayari() {
    $url = 'https://hindi-shayari.netlify.app/';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Shayari Scraper Bot');
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if (!$html || $httpCode != 200) {
        return ['error' => 'Failed to fetch shayari page.'];
    }

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // Target the shayari text
    $shayariNode = $xpath->query('//p[@class="card-title fs-3"]')->item(0);
    $authorNode = $xpath->query('//p[@class="card-title author text-light fs-4"]')->item(0);

    $shayari = $shayariNode ? trim($shayariNode->textContent) : 'कोई शायरी नहीं मिली।';
    $author = $authorNode ? trim($authorNode->textContent) : '- अज्ञात';

    // Clean author (remove extra dashes or spaces)
    $author = preg_replace('/^[\s\-]+/', '', $author);

    return [
        'shayari' => $shayari,
        'author' => $author
    ];
}

echo json_encode(fetchShayari(), JSON_UNESCAPED_UNICODE);
?>