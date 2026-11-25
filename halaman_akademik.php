<?php require_once __DIR__ . '/helpers/functions.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Uji Function - Akademik</title></head>
<body>
    <h2>Pengujian Function pada Halaman Akademik</h2>
    <?php
    $emailMahasiswa = "budi.santoso@kampus.ac.id";
    $nilaiAkhir     = 88;
    $suhuRuang      = 28;
    ?>
    <p>Email: <?= e($emailMahasiswa); ?> (Status: <?= validasiEmail($emailMahasiswa) ? 'Valid' : 'Tidak Valid'; ?>)</p>
    <p>Nilai Akhir: <?= $nilaiAkhir; ?> — Predikat: <strong><?= tentukanStatusNilai($nilaiAkhir); ?></strong></p>
    <p>Suhu Ruang Lab: <?= $suhuRuang; ?>°C = <?= konversiCelciusKeFahrenheit($suhuRuang); ?>°F</p>
</body>
</html>
