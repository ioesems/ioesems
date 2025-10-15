-- Create database
CREATE DATABASE IF NOT EXISTS note_organizer;
USE note_organizer;

-- Folders table
CREATE TABLE IF NOT EXISTS folders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    parent_id INT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (parent_id) REFERENCES folders(id) ON DELETE CASCADE
);

-- Notes table
CREATE TABLE IF NOT EXISTS notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    folder_id INT DEFAULT NULL,
    category VARCHAR(100),
    tags VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (folder_id) REFERENCES folders(id) ON DELETE SET NULL
);

-- Tabs table (new)
CREATE TABLE IF NOT EXISTS tabs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('note', 'browser') NOT NULL,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(500) DEFAULT NULL,
    note_id INT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (note_id) REFERENCES notes(id) ON DELETE CASCADE
);

-- Insert default folders
INSERT INTO folders (name, parent_id) VALUES 
('General', NULL),
('Work', NULL),
('Personal', NULL),
('Projects', NULL);