<?php
session_start(); // Mulai session
session_unset(); // Menghapus semua variabel session
session_destroy(); // Menghancurkan session
header("Location: ../apps/dasboard.php"); // Redirect ke halaman login
exit();
?>
