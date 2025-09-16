-- Create database (optional, if not exists)
-- CREATE DATABASE IF NOT EXISTS note_app;
-- USE note_app;

-- Create table for storing notes
CREATE TABLE IF NOT EXISTS notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample data (optional)
-- INSERT INTO notes (title, content) VALUES 
-- ('My First Note', 'This is the content of my first note.'),
-- ('Shopping List', 'Milk, Eggs, Bread, Butter');