<?php
// Konfigurasi database
$servername = "localhost";  // Biasanya localhost
$username = "root";         // Nama pengguna database Anda
$password = "";             // Kata sandi database Anda
$dbname = "user_registration";    // Nama database yang digunakan

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
