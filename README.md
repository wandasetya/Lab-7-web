# Lab-7-web
Langkah-langkah Praktikum
Persiapan
Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP
terlebih dahulu. Web servar yang kita gunakan adalah Apache 2 dan interpreter PHP 7.
Untuk memudahkan proses praktikum, kita gunakan aplikasi bundle web server yaitu
XAMPP.
Install XAMPP
Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi
portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan
direktorinya (misal: d:\xampp).
Konfigurasi Web Server
• Konfigurasi Apache
Untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul
yang diaktifkan, lokasi document root, dll.
Lokasi file: \xampp\apache\conf\httpd.conf
• Konfigrasi PHP
Untuk konfigurasi perilaku engine PHP yang berefek pada keamanan dan performa.
Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error
reporting, dll.
Lokasi file: \xampp\php\php.ini
• Konfigrasi MySql
Konfigurasi server MySQL, seperti administrator user, port, timezone, dll.
Lokasi file: \xampp\mysql\bin\my.ini
Menjalankan Web Server
Untuk menjalankan web server dari menu XAMPP Control.
![Screenshot (291)](https://user-images.githubusercontent.com/72745059/169653324-270ef513-0325-4ed9-9df5-a58e27d69368.png)
Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost
Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.
• Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\
• Database MySQL
Direktori: \xampp\mysql\
Manajemen database: http://localhost/phpmyadmin

Modul Praktikum Pemrograman Web

Agung Nugroho (agung@pelitabangsa.ac.id) 60
Universitas Pelita Bangsa, Bekasi
Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)
![Screenshot (292)](https://user-images.githubusercontent.com/72745059/169653278-8878c18b-46ca-4c5f-b945-5553f1e5a73a.png)
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/
![Screenshot (293)](https://user-images.githubusercontent.com/72745059/169653379-bea63faf-0176-4354-9bf2-af0b2966c6f9.png)
PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.
![Screenshot (295)](https://user-images.githubusercontent.com/72745059/169653395-9cdce78e-f61b-4b0a-bf40-535ed817770f.png)
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php
![Screenshot (294)](https://user-images.githubusercontent.com/72745059/169653421-92a7ec46-e573-4b5a-b900-1065ee7ae3c4.png)
Variable PHP
Menambahkan variable pada program.
![Screenshot (297)](https://user-images.githubusercontent.com/72745059/169653441-84e19488-fbda-4a69-a551-734afd19978c.png)
![Screenshot (296)](https://user-images.githubusercontent.com/72745059/169653450-3ce0d0ad-4810-472b-9268-5e95d2a0a5ca.png)
Predefine Variable $_GET
![Screenshot (299)](https://user-images.githubusercontent.com/72745059/169653486-6095fc2a-e6fb-4bcf-9a96-31a6f38c69aa.png)
Untuk mengaksesnya gunakan URL:
http://localhost/lab7_php_dasar/latihan2.php?nama=Agung
![Screenshot (298)](https://user-images.githubusercontent.com/72745059/169653506-17db3970-e863-419a-b4bb-a0543a734ed5.png)
Membuat Form Input
![Screenshot (301)](https://user-images.githubusercontent.com/72745059/169653527-29583ee4-418c-4260-8b34-69ba1edaff34.png)
![Screenshot (300)](https://user-images.githubusercontent.com/72745059/169653556-4a696128-4c02-4bd4-986a-f686f9972a57.png)
Membuat program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan.
![Screenshot (303)](https://user-images.githubusercontent.com/72745059/169653873-39231a5e-39e6-4f69-84c7-ddf36095060b.png)
![Screenshot (302)](https://user-images.githubusercontent.com/72745059/169653883-20e1ab60-82f8-4a38-a77d-7733acacf800.png)
