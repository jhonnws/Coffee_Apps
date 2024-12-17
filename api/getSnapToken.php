<?php
require_once 'config.php';

// Data transaksi
$params = [
    'transaction_details' => [
        'order_id' => 'ORDER-' . rand(), // ID unik untuk pesanan
        'gross_amount' => 150000, // Total pembayaran
    ],
    'customer_details' => [
        'first_name' => 'Budi',
        'last_name' => 'Pratama',
        'email' => 'budi@example.com',
        'phone' => '08123456789',
    ],
];

// Dapatkan Snap Token dari Midtrans
try {
    $snapToken = \Midtrans\Snap::getSnapToken($params);
    echo json_encode(['snapToken' => $snapToken]);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
