-- Database: organ_donation
CREATE DATABASE IF NOT EXISTS organ_donation;
USE organ_donation;

-- Table for users (donors + recipients)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('donor', 'recipient', 'admin') DEFAULT 'donor',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for donor details
CREATE TABLE donors (
    donor_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    organ VARCHAR(50) NOT NULL,
    blood_group VARCHAR(5),
    city VARCHAR(100),
    contact VARCHAR(15),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Table for recipient requests
CREATE TABLE recipients (
    recipient_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    required_organ VARCHAR(50) NOT NULL,
    blood_group VARCHAR(5),
    urgency_level ENUM('Low','Medium','High') DEFAULT 'Medium',
    city VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Sample admin insert
INSERT INTO users (name, email, password, role) 
VALUES ('Admin User', 'admin@organ.com', 'admin123', 'admin');
