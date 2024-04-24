CREATE DATABASE IF NOT EXISTS car_ride_management;

USE car_ride_management;

-- Table for storing information about cars
CREATE TABLE IF NOT EXISTS cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(255) NOT NULL,
    model VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    color VARCHAR(50) NOT NULL,
    registration_number VARCHAR(20) NOT NULL
);

-- Table for storing information about users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for storing information about rides
CREATE TABLE IF NOT EXISTS rides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    car_id INT NOT NULL,
    departure_location VARCHAR(255) NOT NULL,
    destination_location VARCHAR(255) NOT NULL,
    departure_time DATETIME NOT NULL,
    available_seats INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (car_id) REFERENCES cars(id)
);
