<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama    = trim($_POST['nama'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $jabatan = trim($_POST['jabatan'] ?? '');

    if ($nama === '' || !validasiEmail($email) || $jabatan === '') {
        setFlash('gagal', 'Input tidak valid. Pastikan nama, format email, dan jabatan benar.');
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (nama, email, jabatan) VALUES (?, ?, ?)");
        $stmt->execute([$nama, $email, $jabatan]);
        setFlash('sukses', 'Data pengguna berhasil ditambahkan!');
        header('Location: index.php?page=user/list');
        exit;
    }
}
?>
<section>
    <h2>Tambah Pengguna Baru</h2>
    <form method="post" action="index.php?page=user/add">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" required>
        </div>
        <button type="submit" class="btn">Simpan Data</button>
        <a href="index.php?page=user/list" class="btn btn-warning">Batal</a>
    </form>
</section>
