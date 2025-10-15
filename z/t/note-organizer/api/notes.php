<?php
header('Content-Type: application/json');
require_once '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $folderId = isset($_GET['folder_id']) ? (int)$_GET['folder_id'] : null;
    $search = $_GET['search'] ?? null;
    $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : null;
    $notes = getNotes($folderId, $search, $limit);
    echo json_encode($notes);
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $title = $data['title'] ?? '';
    $content = $data['content'] ?? '';
    $folderId = $data['folder_id'] ?? null;
    $category = $data['category'] ?? null;
    $tags = $data['tags'] ?? null;
    
    if (empty($title)) {
        http_response_code(400);
        echo json_encode(['error' => 'Note title is required']);
        exit;
    }
    
    $noteId = createNote($title, $content, $folderId, $category, $tags);
    if ($noteId) {
        echo json_encode(['success' => true, 'note_id' => $noteId, 'message' => 'Note created successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to create note']);
    }
}
elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? null;
    $title = $data['title'] ?? '';
    $content = $data['content'] ?? '';
    $folderId = $data['folder_id'] ?? null;
    $category = $data['category'] ?? null;
    $tags = $data['tags'] ?? null;
    
    if (!$id) {
        http_response_code(400);
        echo json_encode(['error' => 'Note ID is required']);
        exit;
    }
    
    if (updateNote($id, $title, $content, $folderId, $category, $tags)) {
        echo json_encode(['success' => true, 'message' => 'Note updated successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to update note']);
    }
}
elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'] ?? null;
    
    if (!$id) {
        http_response_code(400);
        echo json_encode(['error' => 'Note ID is required']);
        exit;
    }
    
    if (deleteNote($id)) {
        echo json_encode(['success' => true, 'message' => 'Note deleted successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to delete note']);
    }
}
elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $note = getNoteById($id);
    if ($note) {
        echo json_encode($note);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Note not found']);
    }
}
?>