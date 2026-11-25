<?php
function e(string $nilai): string {
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}

function validasiEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function formatRupiah(float $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function hitungDiskon(float $harga, float $persen = 10): float {
    return $harga * ($persen / 100);
}

function ringkasTeks(string $teks, int $maksKarakter = 50): string {
    return (strlen($teks) <= $maksKarakter) ? $teks : substr($teks, 0, $maksKarakter) . '...';
}

function isActive(string $currentPage, string $targetPage): string {
    return ($currentPage === $targetPage) ? 'class="active"' : '';
}

function setFlash(string $tipe, string $pesan): void {
    $_SESSION['flash'] = ['tipe' => $tipe, 'pesan' => $pesan];
}

function tampilkanFlash(): void {
    if (!empty($_SESSION['flash'])) {
        $f = $_SESSION['flash'];
        $warna = ($f['tipe'] === 'sukses') ? '#d4edda' : '#f8d7da';
        $teks  = ($f['tipe'] === 'sukses') ? '#155724' : '#721c24';
        echo "<div style='padding:12px; margin-bottom:16px; border-radius:4px; background:$warna; color:$teks;'>"
             . e($f['pesan']) . "</div>";
        unset($_SESSION['flash']);
    }
}
?>
