-- CREATE DATABASE
CREATE DATABASE rockconcert_db;

-- USE DATABASE
USE rockconcert_db;

-- CREATE TABLE (SCHEMA)
CREATE TABLE attendees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    ticket_type VARCHAR(50),
    seat_number VARCHAR(20),
    concert_date DATE
);

-- INSERT RECORDS (DATA)
INSERT INTO attendees (name, email, ticket_type, seat_number, concert_date) VALUES
('Changli', 'changli@example.com', 'VIP', 'A1', '2026-05-10'),
('Rover', 'rover@example.com', 'Regular', 'B12', '2026-05-10'),
('Jihnsi', 'jihnsi@example.com', 'Regular', 'C3', '2026-05-10');