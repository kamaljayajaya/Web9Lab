LAPORAN PRAKTIKUM 9 - PEMROGRAMAN WEB

NAMA : KAMAL JAYA

NIM : 312510074

KELAS : 1251A

MATA KULIAH : Pemrograman Web

Langkah 1: Menjalankan Apache dan MySQL

Buka XAMPP Control Panel, klik Start pada Apache dan MySQL sampai berwarna hijau.
<img width="647" height="312" alt="image" src="https://github.com/user-attachments/assets/f1af1b2a-f5a9-4104-bbec-98374d75035e" />


Langkah 2: Mengakses phpMyAdmin dan Import Database

Buka http://localhost/phpmyadmin/, klik tab Impor, pilih file database.sql dari folder Lab9Web, lalu klik Impor.
<img width="792" height="358" alt="image" src="https://github.com/user-attachments/assets/9d5f70f8-4d57-429d-ac09-92ca245e04ff" />


Langkah 3: Folder Project (Lab9Web)

Ekstrak folder Lab9Web ke dalam C:\xampp\htdocs\Lab9Web\ dan buka melalui browser atau Visual Studio Code.
<img width="521" height="94" alt="image" src="https://github.com/user-attachments/assets/8ac41cd8-26f6-4f5b-83d8-13c875da9043" />


Langkah 4: Uji include dan require

Buka http://localhost/Lab9Web/latihan1_template/uji-include.php.
<img width="861" height="95" alt="image" src="https://github.com/user-attachments/assets/87f6a9b0-9e74-4ef3-a53b-75577b5d781b" />

Ubah nama file pesan.php sementara untuk melihat perbedaan Warning (include, skrip tetap lanjut) dan Fatal error (require, skrip berhenti).
<img width="862" height="96" alt="image" src="https://github.com/user-attachments/assets/121641c8-4b0c-405d-9e13-f2921b09008a" />


Langkah 5: Template Multi-Halaman (Home, Profil, Kontak)

Buka http://localhost/Lab9Web/latihan1_template/home.php lalu klik menu Profil dan Kontak untuk memastikan header.php, navigasi, dan footer.php tampil konsisten.
<img width="663" height="347" alt="image" src="https://github.com/user-attachments/assets/7b5705a3-c858-4e1f-bfeb-cf92abb70eb8" />
<img width="706" height="392" alt="image" src="https://github.com/user-attachments/assets/bb1d6e82-6e52-4043-9ca6-abab73b2a61d" />
<img width="756" height="403" alt="image" src="https://github.com/user-attachments/assets/e0c5561f-4acd-4104-a1ab-e08a562cb270" />

Langkah 6: Library Function (helpers/functions.php)

Buka http://localhost/Lab9Web/latihan2_function/halaman_toko.php dan http://localhost/Lab9Web/latihan2_function/halaman_akademik.php untuk menguji pemanggilan function dari helpers/functions.php.
<img width="727" height="293" alt="image" src="https://github.com/user-attachments/assets/7f969c11-e44c-4691-93b9-ca2c44b3223a" />
<img width="723" height="204" alt="image" src="https://github.com/user-attachments/assets/d7494004-b832-488b-84eb-eb9f97b047ba" />


Langkah 7: Dashboard & Read Data Pengguna (Routing Modular)

Buka http://localhost/Lab9Web/project_modular/index.php lalu klik menu Data Pengguna (index.php?page=user/list).
<img width="621" height="297" alt="image" src="https://github.com/user-attachments/assets/d8213853-d5ca-4f34-9b2d-9a211abb5932" />

Langkah 8: Create (Tambah Pengguna)

Klik + Tambah Pengguna (index.php?page=user/add), isi nama, email, dan jabatan, lalu klik Simpan Data.
<img width="635" height="328" alt="image" src="https://github.com/user-attachments/assets/07dae1cd-720e-448a-bd65-4f84bdca72a9" />

Langkah 9: Update (Edit Pengguna)

Klik tombol Edit pada salah satu data pengguna (index.php?page=user/edit&id=...), ubah data jabatan atau nama, lalu klik Update Data.
<img width="618" height="361" alt="image" src="https://github.com/user-attachments/assets/15b83abd-5f88-4e1d-97a8-5694a23bc7c8" />

Langkah 10: Delete (Hapus Pengguna)

Klik tombol Hapus pada salah satu data, lalu klik OK pada dialog konfirmasi 'Yakin hapus data ini?'.
<img width="532" height="300" alt="image" src="https://github.com/user-attachments/assets/ee08069d-4de0-400e-ae8c-c94496b28061" />

Langkah 11: Uji Routing 404 (Whitelist)

Ubah URL pada address bar browser menjadi http://localhost/Lab9Web/project_modular/index.php?page=admin/rahasia lalu tekan Enter.
<img width="862" height="382" alt="image" src="https://github.com/user-attachments/assets/f85ebba4-f1c3-49da-b81a-6cd1ddf1b484" />
