<?php
require_once 'vendor/autoload.php';

\Midtrans\Config::$serverKey = 'SB-Mid-server-A0sWcV8crjnBQ1KpXM4exZCL'; // Ganti dengan server key Anda
\Midtrans\Config::$isProduction = false; // Ubah ke true jika di production
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;
?>
