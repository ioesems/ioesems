-- Create database
CREATE DATABASE IF NOT EXISTS mcq_test_db;
USE mcq_test_db;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Test results table
CREATE TABLE IF NOT EXISTS test_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    score INT NOT NULL,
    total_questions INT DEFAULT 20,
    attempted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Optional: Track individual question attempts (for future analytics)
CREATE TABLE IF NOT EXISTS question_attempts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    question_text TEXT NOT NULL,
    user_choice VARCHAR(255),
    correct_choice VARCHAR(255),
    is_correct BOOLEAN,
    attempted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Insert sample user (optional for testing)
-- INSERT INTO users (username, email, password) VALUES ('testuser', 'test@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- then applied 

-- Run this to ALTER existing table (if already created)

ALTER TABLE test_results 
ADD COLUMN subject VARCHAR(50) DEFAULT 'General' AFTER total_questions,
ADD COLUMN question_count INT DEFAULT 20 AFTER subject;



-- for daily test implemented

CREATE TABLE IF NOT EXISTS daily_test_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    score INT NOT NULL,
    total_questions INT DEFAULT 20,
    attempted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Optional: Index for faster daily check
CREATE INDEX idx_user_date ON daily_test_logs (user_id, DATE(attempted_at));

-- then applied   Update Database — Add test_type and chapter to test_results

ALTER TABLE test_results 
ADD COLUMN test_type ENUM('daily', 'set', 'chapter') DEFAULT 'set' AFTER subject,
ADD COLUMN chapter VARCHAR(100) DEFAULT NULL AFTER subject;

-- then applied
