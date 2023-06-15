CREATE DATABASE IF NOT EXISTS register;
USE register;

CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50),
    number VARCHAR(20) NOT NULL,
    email VARCHAR(50),
    address VARCHAR(110)
);
