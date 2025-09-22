-- Run this once to setup database
CREATE DATABASE IF NOT EXISTS ludo_game CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ludo_game;

-- Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    avatar VARCHAR(255) DEFAULT 'default.png',
    wins INT DEFAULT 0,
    losses INT DEFAULT 0,
    games_played INT DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME NULL,
    status ENUM('online', 'offline', 'in-game') DEFAULT 'offline',
    INDEX idx_username (username),
    INDEX idx_email (email)
) ENGINE=InnoDB;

-- Game Rooms Table
CREATE TABLE IF NOT EXISTS game_rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_code VARCHAR(10) UNIQUE NOT NULL,
    creator_id INT NOT NULL,
    max_players INT DEFAULT 4 CHECK (max_players BETWEEN 2 AND 4),
    current_players INT DEFAULT 1,
    status ENUM('waiting', 'active', 'finished') DEFAULT 'waiting',
    winner_id INT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (creator_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (winner_id) REFERENCES users(id) ON DELETE SET NULL,
    INDEX idx_room_code (room_code),
    INDEX idx_status (status)
) ENGINE=InnoDB;

-- Game Players
CREATE TABLE IF NOT EXISTS game_players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_id INT NOT NULL,
    user_id INT NOT NULL,
    player_color ENUM('red', 'blue', 'green', 'yellow') NOT NULL,
    position JSON NOT NULL DEFAULT '[0,0,0,0]',
    tokens_home INT DEFAULT 4,
    tokens_finished INT DEFAULT 0,
    turn_order INT NOT NULL,
    is_ready BOOLEAN DEFAULT FALSE,
    last_activity DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    joined_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (room_id) REFERENCES game_rooms(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    UNIQUE KEY unique_player_per_room (room_id, user_id),
    UNIQUE KEY unique_color_per_room (room_id, player_color),
    INDEX idx_room_user (room_id, user_id)
) ENGINE=InnoDB;

-- Game Moves
CREATE TABLE IF NOT EXISTS game_moves (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_id INT NOT NULL,
    player_id INT NOT NULL,
    move_type ENUM('roll', 'move', 'game_start', 'system') NOT NULL,
    dice_value INT NULL,
    token_index INT NULL,
    from_position INT NULL,
    to_position INT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (room_id) REFERENCES game_rooms(id) ON DELETE CASCADE,
    FOREIGN KEY (player_id) REFERENCES users(id) ON DELETE CASCADE,
    INDEX idx_room_created (room_id, created_at),
    INDEX idx_player_id (player_id)
) ENGINE=InnoDB;

-- Game Chat
CREATE TABLE IF NOT EXISTS game_chat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_id INT NOT NULL,
    user_id INT NOT NULL,
    message TEXT NOT NULL,
    sent_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (room_id) REFERENCES game_rooms(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    INDEX idx_room_sent (room_id, sent_at)
) ENGINE=InnoDB;