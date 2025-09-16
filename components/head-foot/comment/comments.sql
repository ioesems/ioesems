CREATE DATABASE IF NOT EXISTS ioesems;
USE ioesems;

CREATE TABLE IF NOT EXISTS comments (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  username VARCHAR(100) NOT NULL,
  comment_text TEXT NOT NULL,
  created_at DATETIME NOT NULL,
  PRIMARY KEY (id)
);


-- then implemanted

ALTER TABLE comments ADD COLUMN user_id VARCHAR(255) NOT NULL DEFAULT '' AFTER id;

-- https://chat.qwen.ai/c/cd40eb75-4141-42fc-a627-7139de530caf