CREATE database email;

USE email;

CREATE TABLE registered_emails (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE
);
