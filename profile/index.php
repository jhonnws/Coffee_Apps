<?php
session_start();

// Contoh data user (biasanya ini diambil dari database setelah login)
if (!isset($_SESSION['name']) || !isset($_SESSION['email'])) {
    $_SESSION['name'] = 'John Doe';
    $_SESSION['email'] = 'johndoe@example.com';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="content">
        <!-- Profile Section -->
        <div id="profile-section">
            <div class="profile-card">
                <img src="../assets//profile.jpg" alt="Profile Picture" class="profile-picture">
                <h3>Profile</h3>
                <p>Nama:
                    <?php echo htmlspecialchars($_SESSION['name']); ?>
                </p>
                <p>Email:
                    <?php echo htmlspecialchars($_SESSION['email']); ?>
                </p>
                <a href="../sidebar/index.php">Back</a>
            </div>
        </div>
    </section>
</body>

</html>