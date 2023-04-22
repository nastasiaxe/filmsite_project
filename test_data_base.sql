CREATE DATABASE filmsite
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE filmsite;

CREATE TABLE user (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(20),
    name VARCHAR(40),
    email VARCHAR(45),
    user_pic MEDIUMBLOB
);
