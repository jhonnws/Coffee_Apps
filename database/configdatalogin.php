<?php
// Menyertakan koneksi database
include('config.php');

// Mulai sesi jika belum dimulai
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil email dan password dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Menyaring email untuk menghindari SQL Injection
    $email = mysqli_real_escape_string($conn, $email);

    // Query untuk mencari user berdasarkan email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    // Cek apakah user ditemukan
    if ($result->num_rows > 0) {
        // Jika user ditemukan, ambil data user
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Memeriksa password dengan menggunakan fungsi password_verify()
        if (password_verify($password, $hashed_password)) {
            // Login berhasil, simpan data ke session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name']; // Pastikan 'name' sesuai dengan kolom di database
        
            // Redirect ke halaman sidebar
            header("Location: ../sidebar/index.php");
            exit();
        } else {
            // Password salah
            $error_message = "Password salah.";
        }
    } else {
        // User tidak ditemukan
        $error_message = "Email tidak ditemukan.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styling/alert.css">
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <!-- Menampilkan pesan error jika ada -->
    <?php if (isset($error_message)): ?>
        <div class="alert alert-error">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
