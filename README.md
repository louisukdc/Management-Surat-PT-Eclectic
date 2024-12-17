<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

# Website Management Pembuatan Surat dan Arsip Surat

Proyek ini adalah aplikasi web untuk **manajemen pembuatan surat dan arsip surat** yang dibangun menggunakan **Laravel 9** dan **MySQL**. Aplikasi ini dirancang untuk mempermudah pembuatan, pengelolaan, dan penyimpanan surat dalam bentuk digital di sebuah organisasi atau perusahaan.

## Fitur Utama

- **Pembuatan Surat**: Memungkinkan pengguna untuk membuat surat resmi dengan berbagai jenis surat.
- **Arsip Surat**: Menyimpan dan mengelola arsip surat secara terstruktur.
- **Autentikasi Pengguna**: Pengguna dapat login dan mengakses fitur berdasarkan peran mereka (misalnya Admin, Pengguna Biasa).
- **Pengelolaan Surat**: Pengguna dapat mengedit, menghapus, dan memverifikasi surat.
- **Pencarian Surat**: Memudahkan pencarian surat berdasarkan kriteria tertentu.
- **Laporan Arsip Surat**: Menghasilkan laporan arsip surat yang dapat diekspor.

## Teknologi yang Digunakan

- **Backend**: Laravel 9
- **Frontend**: Blade Template Engine
- **Database**: MySQL
- **Authentication**: Laravel Breeze untuk sistem login dan autentikasi pengguna
- **Version Control**: Git (GitHub)

## Persyaratan Sistem

Sebelum menjalankan aplikasi ini, pastikan kamu memiliki perangkat lunak berikut:

- PHP 8.0 atau lebih tinggi
- Composer (untuk manajemen dependensi PHP)
- MySQL 5.7 atau lebih tinggi
- Node.js dan NPM (untuk pengelolaan frontend)
- Web Server seperti Apache atau Nginx

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini di komputer lokal kamu.

### 1. Clone Repository

Clone repository ke komputer lokal kamu menggunakan Git:

```bash
git clone https://github.com/louisukdc/Management-Surat-PT-Eclectic.git
cd Management-Surat-PT-Eclectic
```

## 2. Install Dependensi
Instal dependensi PHP menggunakan Composer:
```
bash
Copy code
composer install
Instal dependensi frontend (untuk CSS dan JavaScript) menggunakan NPM:
```
```
bash
Copy code
npm install
```

## 3. Konfigurasi Environment
Salin file .env.example menjadi .env:
```
bash
Copy code
cp .env.example .env
```
Kemudian, buka file .env dan sesuaikan konfigurasi database dengan kredensial yang sesuai dengan setup MySQL kamu:
```
env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=password_kamu
```

## 4. Generate Key Aplikasi
Generate key aplikasi Laravel dengan perintah:
```
bash
Copy code
php artisan key:generate
```

## 5. Migrasi Database
Jalankan migrasi untuk membuat tabel-tabel yang diperlukan di database:

```
bash
Copy code
php artisan migrate
```
Jika kamu membutuhkan data sampel (seeds), kamu bisa menjalankan:
```
bash
Copy code
php artisan db:seed
```
## 6. Jalankan Aplikasi
Jalankan aplikasi menggunakan server pengembangan Laravel:
```
bash
Copy code
php artisan serve
```
Akses aplikasi di browser dengan membuka URL berikut:

arduino
Copy code
```
http://127.0.0.1:8000
```
Menambahkan Pengguna
Aplikasi ini mendukung fitur login untuk pengguna dengan peran yang berbeda. Untuk menambahkan pengguna baru, kamu bisa melakukannya melalui halaman admin atau menggunakan perintah artisan:

bash
Copy code
php artisan tinker
Kemudian buat pengguna baru dengan perintah berikut:

php
Copy code
App\Models\User::create([
    'name' => 'Nama Pengguna',
    'email' => 'email@domain.com',
    'password' => bcrypt('password123'),
    'type' => 0,  // 0 untuk pengguna biasa, 1 untuk admin
]);
Struktur Direktori
app/: Mengandung logika aplikasi (Controllers, Models, etc.).
resources/views/: Template Blade untuk tampilan frontend.
database/migrations/: Berisi file migrasi untuk struktur database.
public/: File yang dapat diakses publik seperti CSS, JavaScript, dan gambar.
routes/web.php: Menangani routing aplikasi.
