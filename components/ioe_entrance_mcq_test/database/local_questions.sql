-- Run this in phpMyAdmin or via CLI

CREATE TABLE IF NOT EXISTS local_questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(50) NOT NULL,
    chapter VARCHAR(100) NOT NULL,
    question_text TEXT NOT NULL,
    question_image VARCHAR(255) NULL, -- relative path to image
    option_a TEXT NOT NULL,
    option_b TEXT NOT NULL,
    option_c TEXT NOT NULL,
    option_d TEXT NOT NULL,
    correct_answer ENUM('A','B','C','D') NOT NULL,
    explanation TEXT NULL,
    explanation_image VARCHAR(255) NULL,
    marks INT DEFAULT 1,
    difficulty ENUM('Easy','Medium','Hard') DEFAULT 'Medium',
    created_by INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);

-- Add admin flag to users table (if not exists)
ALTER TABLE users ADD COLUMN is_admin TINYINT(1) DEFAULT 0 AFTER password;

-- Set yourself as admin (replace 1 with your user ID)
UPDATE users SET is_admin = 1 WHERE id = 1;

-- Add global settings table for admin toggle
CREATE TABLE IF NOT EXISTS system_settings (
    id INT PRIMARY KEY DEFAULT 1,
    question_source ENUM('ai_only', 'ai_local', 'local_only') DEFAULT 'ai_only',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert default setting
INSERT IGNORE INTO system_settings (id, question_source) VALUES (1, 'ai_only');