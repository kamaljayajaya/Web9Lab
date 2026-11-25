CREATE DATABASE IF NOT EXISTS db_latihan;
USE db_latihan;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    jabatan VARCHAR(50) NOT NULL
);

INSERT INTO users (nama, email, jabatan) VALUES
('Rina Marlina', 'rina@contoh.com', 'Administrator'),
('Andi Pratama', 'andi@contoh.com', 'Staff IT');
