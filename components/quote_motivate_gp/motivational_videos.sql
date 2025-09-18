CREATE DATABASE IF NOT EXISTS ioesems;
USE ioesems;

CREATE TABLE IF NOT EXISTS motivational_videos (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    youtube_link VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- then implemented
ALTER TABLE motivational_videos ADD UNIQUE INDEX ux_youtube_link (youtube_link);
