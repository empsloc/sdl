CREATE DATABASE blood_bank;

USE blood_bank;

CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    weight DECIMAL(5,2) NOT NULL,
    blood_group VARCHAR(3) NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
