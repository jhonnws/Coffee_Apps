<?php
// Konfigurasi database
$host = "localhost";
$username = "root"; // default username MySQL
$password = ""; // default password MySQL
$database = "user_registration";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
