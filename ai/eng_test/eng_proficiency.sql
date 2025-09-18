-- Create database
CREATE DATABASE IF NOT EXISTS eng_proficiency;
USE eng_proficiency;

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Test results table
CREATE TABLE IF NOT EXISTS test_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    original_text TEXT NOT NULL,
    basic_correction TEXT,
    medium_correction TEXT,
    high_professional_correction TEXT,
    spelling_percent DECIMAL(5,2),
    grammar_percent DECIMAL(5,2),
    subject_verb_percent DECIMAL(5,2),
    article_percent DECIMAL(5,2),
    other_mistakes_percent DECIMAL(5,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- User profiles table
CREATE TABLE IF NOT EXISTS user_profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    real_name VARCHAR(100),
    bio TEXT,
    profile_picture VARCHAR(255) DEFAULT 'default.jpg',
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);