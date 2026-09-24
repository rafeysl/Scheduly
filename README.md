# Scheduly - Sistem Penjadwalan dan Peminjaman Ruangan

Scheduly adalah aplikasi berbasis web menggunakan Laravel untuk memudahkan proses penjadwalan kelas dan peminjaman ruangan oleh mahasiswa atau dosen agar lebih efisien

## Persyaratan Sistem
Pastikan software berikut sudah terinstal di komputer:
- PHP >= 8.2
- Composer
- Node.js & NPM
- PostgreSQL

## Langkah Menjalankan Proyek dari Nol

1. Buka terminal (disarankan menggunakan terminal bawaan Laragon / Cmder).
2. _Clone_ repositori ini dan masuk ke folder proyek: 
   `cd Scheduly`
3. Instal semua dependensi PHP dan Node: 
   `composer install` dan `npm install`
4. Gandakan file _environment_: 
   `cp .env.example .env`
5. Buka file `.env` dan atur koneksi PostgreSQL:
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=scheduly_db
   DB_USERNAME=postgres
   DB_PASSWORD=
6. Hasilkan kunci aplikasi: 
   `php artisan key:generate`
7. Lakukan migrasi dan isi data awal: 
   `php artisan migrate:fresh --seed`
8. Kompilasi aset _front-end_: 
   `npm run build`
9. Nyalakan _server_: 
   `php artisan serve`
10. Buka _browser_ dan akses `http://localhost:8000`.

## Akun Default untuk Login
Gunakan kredensial berikut untuk masuk pada halaman `http://localhost:8000/login`:

**Admin:**
- Email: `admin@scheduly.com`
- Password: `admin123`

**Mahasiswa (User):**
- Email: `Mahasiswa1@scheduly.com`
- Password: `mhs1`
