-- Create database (optional)
-- CREATE DATABASE IF NOT EXISTS ioesems;
-- USE ioesems;

-- Create table for storing links
CREATE TABLE IF NOT EXISTS links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,      -- This will store the actual URL
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample data (optional)
-- INSERT INTO links (title, content) VALUES 
-- ('Google', 'https://www.google.com'),
-- ('GitHub', 'https://github.com');