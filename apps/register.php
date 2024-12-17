<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar</title>
    <link rel="stylesheet" href="../styling/register.css" />
    <div class="form-container">
        <h2>Form Daftar</h2>
        <form action="../database/submit_registrasi.php" method="POST">

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required />
            </div>
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" id="confirm-password" name="confirm_password" required />
            </div>
            <button type="submit" class="btn-submit">Daftar</button>
        </form>
    </div>
</head>

</html>