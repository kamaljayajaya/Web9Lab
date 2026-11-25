<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)($_POST['id'] ?? 0);
    if ($id > 0) {
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute([$id]);
        setFlash('sukses', 'Data pengguna berhasil dihapus.');
    }
} else {
    setFlash('gagal', 'Metode penghapusan tidak diizinkan (harus POST).');
}
header('Location: index.php?page=user/list');
exit;
