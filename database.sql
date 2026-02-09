CREATE DATABASE IF NOT EXISTS trader_db;
USE trader_db;

-- Table for blog posts
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    date DATE NOT NULL
);

-- Sample blog posts
INSERT INTO posts (title, content, date) VALUES
('The Importance of Risk Management', 'In trading, protecting capital is paramount. I adhere to strict rules like never risking more than 1% per trade and using stop-losses to mitigate downside.', '2026-01-15'),
('Mastering Trading Psychology', 'Discipline over emotion: How I maintain a calm mindset during market volatility through journaling and routine.', '2026-01-20'),
('Market Insights: Current Trends', 'Analyzing recent patterns in forex and equities, focusing on process-driven setups rather than predictions.', '2026-02-01');

-- Table for contact inquiries
CREATE TABLE IF NOT EXISTS inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);