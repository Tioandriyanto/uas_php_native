-- Membuat database jika belum ada
CREATE DATABASE IF NOT EXISTS sekolah_db;

-- Gunakan database
USE sekolah_db;

-- Membuat tabel sekolah jika belum ada
CREATE TABLE IF NOT EXISTS sekolah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_sekolah VARCHAR(255) NOT NULL,
    telepon VARCHAR(15),
    latitude DECIMAL(10, 8) NOT NULL,
    longitude DECIMAL(11, 8) NOT NULL
);

-- Menambahkan kolom foto jika belum ada
ALTER TABLE sekolah 
ADD COLUMN IF NOT EXISTS foto VARCHAR(255) DEFAULT NULL;