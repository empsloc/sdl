CREATE DATABASE bookstore;

USE bookstore;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    bookname VARCHAR(255) NOT NULL
);