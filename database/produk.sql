
CREATE DATABASE IF NOT EXISTS produk
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE produk;

CREATE TABLE IF NOT EXISTS produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    harga DECIMAL(12,2) NOT NULL,
    stok INT NOT NULL DEFAULT 0,
    deskripsi TEXT
);

INSERT INTO produk (nama_produk, kategori, harga, stok, deskripsi) VALUES
('Botol Minum', 'Aksesoris', 35000, 20, 'Botol minum untuk aktivitas sehari-hari'),
('Tas Selempang', 'Tas', 75000, 12, 'Tas selempang untuk kebutuhan harian'),
('Buku Catatan', 'Alat Tulis', 15000, 30, 'Buku catatan untuk kuliah dan pekerjaan'),
('Lampu Meja', 'Elektronik', 65000, 8, 'Lampu meja untuk belajar'),
('Tempat Pensil', 'Alat Tulis', 12000, 25, 'Tempat penyimpanan alat tulis');
