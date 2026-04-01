-- Buat database jika belum ada
CREATE DATABASE IF NOT EXISTS undangan_pernikahan;
USE undangan_pernikahan;

-- Buat tabel rsvp
CREATE TABLE IF NOT EXISTS rsvp (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jumlah_tamu INT(11) NOT NULL DEFAULT 1,
    status_kehadiran ENUM('Hadir', 'Tidak Hadir') NOT NULL,
    pesan TEXT,
    waktu_submit TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
