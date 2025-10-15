<?php
header('Content-Type: application/json');
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $parentId = isset($_GET['parent_id']) ? (int)$_GET['parent_id'] : null;
    $folders = getFolders($parentId);
    echo json_encode($folders);
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $name = $data['name'] ?? '';
    $parentId = $data['parent_id'] ?? null;
    
    if (empty($name)) {
        http_response_code(400);
        echo json_encode(['error' => 'Folder name is required']);
        exit;
    }
    
    if (createFolder($name, $parentId)) {
        echo json_encode(['success' => true, 'message' => 'Folder created successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to create folder']);
    }
}
?>