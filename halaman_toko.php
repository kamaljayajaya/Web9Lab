<?php require_once __DIR__ . '/helpers/functions.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Uji Function - Toko</title></head>
<body>
    <h2>Pengujian Function pada Halaman Toko</h2>
    <?php
    $hargaBarang = 250000;
    $jumlahBeli  = 2;
    $subtotal    = hitungTotal($hargaBarang, $jumlahBeli);
    $potongan    = hitungDiskon($subtotal, 15);
    $totalBayar  = $subtotal - $potongan;
    $deskripsi   = "Laptop Ultrabook generasi terbaru dengan prosesor hemat daya dan layar tajam.";
    ?>
    <p>Deskripsi Produk: <?= e(ringkasTeks($deskripsi, 40)); ?></p>
    <p>Subtotal (2 item): <?= formatRupiah($subtotal); ?></p>
    <p>Diskon (15%): <?= formatRupiah($potongan); ?></p>
    <p><strong>Total Bayar: <?= formatRupiah($totalBayar); ?></strong></p>
</body>
</html>
