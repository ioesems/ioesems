-- Create Database
CREATE DATABASE IF NOT EXISTS snake_game;
USE snake_game;

-- Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_games_played INT DEFAULT 0,
    total_score INT DEFAULT 0,
    highest_score INT DEFAULT 0
);

-- Game Sessions Table
CREATE TABLE IF NOT EXISTS game_sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    score INT DEFAULT 0,
    game_duration INT DEFAULT 0, -- in seconds
    food_eaten INT DEFAULT 0,
    game_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Global Leaderboard View (optional)
CREATE VIEW IF NOT EXISTS leaderboard AS
SELECT 
    u.username,
    u.highest_score,
    u.total_games_played,
    u.total_score,
    MAX(gs.game_date) as last_played
FROM users u
JOIN game_sessions gs ON u.id = gs.user_id
GROUP BY u.id, u.username, u.highest_score, u.total_games_played, u.total_score
ORDER BY u.highest_score DESC;