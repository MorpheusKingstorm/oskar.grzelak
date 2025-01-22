CREATE DATABASE simple_login_page;

USE simple_login_page;

CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    username varchar(30) UNIQUE,
	password varchar(100)
);

-- Add test values to database
-- INSERT INTO users (username, password) VALUES ('admin', 'test');
