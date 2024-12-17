<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Daftar</title>
    <link rel="stylesheet" href="../styling/register.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <h2>Form Daftar</h2>
        <form action="../database/submit_registrasi.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email aktif" required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required />
            </div>
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" id="confirm-password" name="confirm_password" placeholder="Konfirmasi password"
                    required />
            </div>
            <button type="submit" class="btn-submit">Daftar</button>
        </form>
    </div>

    <script>
        // Validasi password menggunakan SweetAlert
        function validateForm() {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
                Swal.fire({
                    title: 'Error',
                    text: 'Password dan Konfirmasi Password tidak cocok!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return false;
            }
            Swal.fire({
                title: 'Berhasil',
                text: 'Registrasi berhasil! Silakan lanjutkan.',
                icon: 'success',
                confirmButtonText: 'OK'
            });
            return true;
        }
    </script>
</body>

</html>