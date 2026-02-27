CREATE DATABASE tsu_library;

USE tsu_library;

-- STUDENT TABLE
CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  phone VARCHAR(20),
  matric_no VARCHAR(50),
  password VARCHAR(255)
);

-- ADMIN TABLE
CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

-- Insert Admin Login
INSERT INTO admin (username, password)
VALUES ('admin', MD5('admin123'));
