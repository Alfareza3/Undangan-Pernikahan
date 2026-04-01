<?php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan jika default Laragon/XAMPP
$db   = "undangan_pernikahan";

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Set charset ke utf8mb4 agar mendukung emoji (jika ada yang input emoji di ucapan)
$conn->set_charset("utf8mb4");
?>
