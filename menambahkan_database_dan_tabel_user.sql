CREATE DATABASE IF NOT EXISTS db_sistem_parkir;

USE db_sistem_parkir;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255),
  password VARCHAR(255),
  name VARCHAR(255),
  alamat VARCHAR(255),
  no_telp VARCHAR(255),
  role VARCHAR(255),
  mall INT
);
