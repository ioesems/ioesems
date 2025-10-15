<?php
header('Content-Type: application/json');
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = $_GET['q'] ?? '';
    if (empty($query)) {
        echo json_encode([]);
        exit;
    }
    
    $notes = getNotes(null, $query);
    echo json_encode($notes);
}
?>