CREATE TABLE scores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(255) NOT NULL,           -- Firebase UID or your user ID
    username VARCHAR(255) NOT NULL,          -- Display name
    subject VARCHAR(100) NOT NULL,           -- e.g., "Operating System"
    score INT NOT NULL DEFAULT 0,            -- Correct answers in this session
    total_questions INT NOT NULL DEFAULT 0,  -- Total attempted in session
    percentage DECIMAL(5,2) AS ((score * 100.0) / NULLIF(total_questions, 0)) STORED,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);