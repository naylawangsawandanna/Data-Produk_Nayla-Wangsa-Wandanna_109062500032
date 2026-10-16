
# Aplikasi CRUD Data Produk

## Deskripsi
Aplikasi CRUD Data Produk merupakan aplikasi berbasis web yang dibuat menggunakan PHP Native dengan pola arsitektur Model-View-Controller (MVC). Aplikasi ini digunakan untuk mengelola data produk.

## Teknologi yang Digunakan
- PHP Native
- MySQL/MariaDB
- PDO
- HTML
- Git

## Fitur
- Menampilkan daftar produk
- Menambahkan data produk
- Mengedit data produk
- Menghapus data produk
- Validasi input
- Menggunakan prepared statements untuk query database

## Struktur Folder
- `app/controllers/` : Mengatur alur aplikasi.
- `app/models/` : Mengelola data dan query database.
- `app/views/produk/` : Menampilkan halaman aplikasi.
- `config/` : Menyimpan konfigurasi koneksi database.
- `database/` : Menyimpan file SQL database.
- `public/` : Berisi file utama aplikasi.

## Database
Nama database: `produk`

Nama tabel: `produk`

Atribut:
- id
- nama_produk
- kategori
- harga
- stok
- deskripsi

## Cara Menjalankan
1. Jalankan Laragon dan aktifkan Apache serta MySQL.
2. Buat database `produk` dengan mengimpor file `database/produk.sql` melalui phpMyAdmin.
3. Pastikan konfigurasi database di `config/database.php` sesuai dengan pengaturan MySQL.
4. Buka aplikasi melalui browser:
   `http://localhost/Data-Produk/public/`

## Riwayat Commit Git
Riwayat commit dapat dilihat menggunakan perintah:

```bash
git log --oneline --graph --decorate
```
