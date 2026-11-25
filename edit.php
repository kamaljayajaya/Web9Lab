<?php
$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    setFlash('gagal', 'Data pengguna tidak ditemukan.');
    header('Location: index.php?page=user/list');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama    = trim($_POST['nama'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $jabatan = trim($_POST['jabatan'] ?? '');

    if ($nama === '' || !validasiEmail($email) || $jabatan === '') {
        setFlash('gagal', 'Input tidak valid!');
    } else {
        $update = $pdo->prepare("UPDATE users SET nama = ?, email = ?, jabatan = ? WHERE id = ?");
        $update->execute([$nama, $email, $jabatan, $id]);
        setFlash('sukses', 'Data pengguna berhasil diperbarui!');
        header('Location: index.php?page=user/list');
        exit;
    }
}
?>
<section>
    <h2>Edit Data Pengguna</h2>
    <form method="post" action="index.php?page=user/edit&id=<?= $user['id']; ?>">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" value="<?= e($user['nama']); ?>" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?= e($user['email']); ?>" required>
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" value="<?= e($user['jabatan']); ?>" required>
        </div>
        <button type="submit" class="btn">Update Data</button>
        <a href="index.php?page=user/list" class="btn btn-warning">Batal</a>
    </form>
</section>
