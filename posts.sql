-- CREATE DATABASE users;
-- USE users;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  password VARCHAR(255)
);
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user VARCHAR(255),
  content TEXT
);