<?php
// Menyertakan koneksi database
include('config.php');

// Mengecek apakah formulir login sudah disubmit
if (isset($_POST['login'])) {
    // Mengambil data dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mengamankan inputan dari SQL Injection
    $email = mysqli_real_escape_string($conn, $email);

    // Query untuk mencari user berdasarkan email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Jika user ditemukan, ambil data user
        $row = $result->fetch_assoc();
        $hashed_password = $row['password']; // Password yang sudah di-hash

        // Verifikasi password yang dimasukkan dengan password yang ada di database
        if (password_verify($password, $hashed_password)) {
            // Login berhasil, redirect ke halaman dashboard atau halaman lain
            session_start();
            $_SESSION['user_id'] = $row['id'];
            header("Location: ../apps/dashboard.php"); // Ganti dengan halaman yang sesuai
            exit();
        } else {
            // Jika password salah
            echo "Password yang Anda masukkan salah.";
        }
    } else {
        // Jika email tidak ditemukan
        echo "Email tidak terdaftar.";
    }
}

$conn->close(); // Menutup koneksi database
?>
