<?php
require_once 'db.php';

function getFolders($parentId = null) {
    global $pdo;
    $sql = "SELECT * FROM folders";
    if ($parentId !== null) {
        $sql .= " WHERE parent_id = :parent_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':parent_id', $parentId, PDO::PARAM_INT);
    } else {
        $stmt = $pdo->prepare($sql);
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function createFolder($name, $parentId = null) {
    global $pdo;
    $sql = "INSERT INTO folders (name, parent_id) VALUES (:name, :parent_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':parent_id', $parentId, PDO::PARAM_INT);
    return $stmt->execute();
}

function getNotes($folderId = null, $search = null, $limit = null) {
    global $pdo;
    $sql = "SELECT * FROM notes";
    $conditions = [];
    $params = [];
    
    if ($folderId !== null) {
        $conditions[] = "folder_id = :folder_id";
        $params[':folder_id'] = $folderId;
    }
    
    if ($search) {
        $conditions[] = "(title LIKE :search OR content LIKE :search OR tags LIKE :search OR category LIKE :search)";
        $params[':search'] = "%$search%";
    }
    
    if (!empty($conditions)) {
        $sql .= " WHERE " . implode(' AND ', $conditions);
    }
    
    $sql .= " ORDER BY updated_at DESC";
    
    if ($limit) {
        $sql .= " LIMIT :limit";
        $params[':limit'] = $limit;
    }
    
    $stmt = $pdo->prepare($sql);
    foreach ($params as $key => $value) {
        if ($key === ':limit') {
            $stmt->bindValue($key, $value, PDO::PARAM_INT);
        } else {
            $stmt->bindValue($key, $value);
        }
    }
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getNoteById($id) {
    global $pdo;
    $sql = "SELECT * FROM notes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createNote($title, $content, $folderId = null, $category = null, $tags = null) {
    global $pdo;
    $sql = "INSERT INTO notes (title, content, folder_id, category, tags) VALUES (:title, :content, :folder_id, :category, :tags)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':folder_id', $folderId, PDO::PARAM_INT);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':tags', $tags);
    if ($stmt->execute()) {
        return $pdo->lastInsertId();
    }
    return false;
}

function updateNote($id, $title, $content, $folderId = null, $category = null, $tags = null) {
    global $pdo;
    $sql = "UPDATE notes SET title = :title, content = :content, folder_id = :folder_id, category = :category, tags = :tags WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':folder_id', $folderId, PDO::PARAM_INT);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':tags', $tags);
    return $stmt->execute();
}

function deleteNote($id) {
    global $pdo;
    $sql = "DELETE FROM notes WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}

function getTags() {
    global $pdo;
    $sql = "SELECT DISTINCT tags FROM notes WHERE tags IS NOT NULL AND tags != ''";
    $stmt = $pdo->query($sql);
    $allTags = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $tags = explode(',', $row['tags']);
        foreach ($tags as $tag) {
            $tag = trim($tag);
            if (!empty($tag) && !in_array($tag, $allTags)) {
                $allTags[] = $tag;
            }
        }
    }
    return $allTags;
}

function createTab($type, $title, $url = null, $noteId = null) {
    global $pdo;
    $sql = "INSERT INTO tabs (type, title, url, note_id) VALUES (:type, :title, :url, :note_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':type', $type);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':url', $url);
    $stmt->bindParam(':note_id', $noteId, PDO::PARAM_INT);
    return $stmt->execute();
}

function getRecentNotes($limit = 5) {
    global $pdo;
    $sql = "SELECT id, title, DATE_FORMAT(updated_at, '%Y-%m-%d') as date FROM notes ORDER BY updated_at DESC LIMIT :limit";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>