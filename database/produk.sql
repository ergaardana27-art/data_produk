CREATE DATABASE IF NOT EXISTS data_produk
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE data_produk;

CREATE TABLE IF NOT EXISTS produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_sku VARCHAR(50) NOT NULL UNIQUE,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(100) NOT NULL,
    harga DECIMAL(12,2) NOT NULL DEFAULT 0.00,
    stok INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO produk (kode_sku, nama_produk, kategori, harga, stok) VALUES
('SKU-001', 'Kopi Hitam Bubuk 200g', 'Makanan & Minuman', 20000.00, 50),
('SKU-002', 'Minyak Goreng 1 Liter', 'Sembako', 19500.00, 30),
('SKU-003', 'Kemeja Flanel Casual', 'Pakaian', 135000.00, 15);