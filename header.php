<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi CRUD PHP Modular</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <header>
        <h1>Sistem Manajemen Pengguna</h1>
        <p>Implementasi PHP Modular, Template, Function & Whitelist Routing</p>
    </header>
    <nav>
        <a href="index.php?page=dashboard" <?= isActive($page, 'dashboard'); ?>>Dashboard</a>
        <a href="index.php?page=user/list" <?= isActive($page, 'user/list'); ?>>Data Pengguna</a>
        <a href="index.php?page=user/add" <?= isActive($page, 'user/add'); ?>>Tambah Pengguna</a>
    </nav>
    <main>
        <?php tampilkanFlash(); ?>
