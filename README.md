LAPORAN PRAKTIKUM 9 - PEMROGRAMAN WEB

NAMA : KAMAL JAYA

NIM : 312510074

KELAS : 1251A

MATA KULIAH : Pemrograman Web

Langkah 1: Menjalankan Apache dan MySQL

Buka XAMPP Control Panel, klik Start pada Apache dan MySQL sampai berwarna hijau.

Langkah 2: Mengakses phpMyAdmin dan Import Database

Buka http://localhost/phpmyadmin/, klik tab Impor, pilih file database.sql dari folder Lab9Web, lalu klik Impor.

Langkah 3: Folder Project (Lab9Web)

Ekstrak folder Lab9Web ke dalam C:\xampp\htdocs\Lab9Web\ dan buka melalui browser atau Visual Studio Code.

Langkah 4: Uji include dan require

Buka http://localhost/Lab9Web/latihan1_template/uji-include.php.

Ubah nama file pesan.php sementara untuk melihat perbedaan Warning (include, skrip tetap lanjut) dan Fatal error (require, skrip berhenti).

Langkah 5: Template Multi-Halaman (Home, Profil, Kontak)

Buka http://localhost/Lab9Web/latihan1_template/home.php lalu klik menu Profil dan Kontak untuk memastikan header.php, navigasi, dan footer.php tampil konsisten.

Langkah 6: Library Function (helpers/functions.php)

Buka http://localhost/Lab9Web/latihan2_function/halaman_toko.php dan http://localhost/Lab9Web/latihan2_function/halaman_akademik.php untuk menguji pemanggilan function dari helpers/functions.php.

Langkah 7: Dashboard & Read Data Pengguna (Routing Modular)

Buka http://localhost/Lab9Web/project_modular/index.php lalu klik menu Data Pengguna (index.php?page=user/list).

Langkah 8: Create (Tambah Pengguna)

Klik + Tambah Pengguna (index.php?page=user/add), isi nama, email, dan jabatan, lalu klik Simpan Data.

Langkah 9: Update (Edit Pengguna)

Klik tombol Edit pada salah satu data pengguna (index.php?page=user/edit&id=...), ubah data jabatan atau nama, lalu klik Update Data.

Langkah 10: Delete (Hapus Pengguna)

Klik tombol Hapus pada salah satu data, lalu klik OK pada dialog konfirmasi 'Yakin hapus data ini?'.

Langkah 11: Uji Routing 404 (Whitelist)

Ubah URL pada address bar browser menjadi http://localhost/Lab9Web/project_modular/index.php?page=admin/rahasia lalu tekan Enter.