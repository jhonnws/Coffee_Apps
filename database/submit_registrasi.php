<?php
// Import koneksi database
include('db_connection.php');

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan validasi data dari form
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (!$email) {
        echo "<script>alert('Email tidak valid!');</script>";
        exit;
    }

    // Validasi password
    if ($password !== $confirm_password) {
        echo "<script>alert('Password dan konfirmasi password tidak cocok!');</script>";
        exit;
    }

    // Hash password untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Gunakan prepared statement untuk menyimpan data ke database
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    if ($stmt->execute()) {
        // Tampilkan popup sukses
        echo "<script>
            alert('Pendaftaran berhasil!');
            window.location.href = '../apps/dasboard.php';
        </script>"; // Arahkan ke halaman lain, misalnya login
    } else {
        if ($conn->errno == 1062) {
            echo "<script>alert('Email sudah terdaftar!');</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan: " . $conn->error . "');</script>";
        }
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
