CREATE DATABASE complaints_db;

USE complaints_db;

CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    status VARCHAR(20) DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO complaints (title, description) VALUES ('Faulty Product', 'The product I received is defective.');


SELECT * FROM complaints;


