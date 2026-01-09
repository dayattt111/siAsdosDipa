# Aplikasi Manajemen Asdos

Aplikasi web untuk mengelola Asisten Dosen (Asdos) dengan 3 role: Admin, Dosen, dan Mahasiswa.

## Fitur Utama

### Admin
- Dashboard dengan statistik
- Kelola data Asdos (CRUD)
- Kelola pendaftar Asdos (approve/reject)
- Kelola user (tambah, edit, hapus)

### Dosen
- Dashboard dosen
- Lihat daftar asdos yang dibimbing
- Lihat pendaftar asdos
- Beri komentar pada pendaftar

### Mahasiswa
- Dashboard mahasiswa
- Daftar menjadi asdos
- Lihat riwayat pendaftaran
- Lihat status sebagai asdos
- Edit profile

## Cara Setup & Instalasi

### 1. Persiapan Database
Pastikan MySQL/MariaDB sudah berjalan di Laragon. Buat database baru:
```sql
CREATE DATABASE project_232220;
```

### 2. Konfigurasi Environment
Edit file `.env` dan sesuaikan konfigurasi database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project_232220
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Jalankan Migration & Seeder
```bash
php artisan migrate:fresh --seed
```

### 6. Buat Storage Link (untuk upload file)
```bash
php artisan storage:link
```

### 7. Jalankan Aplikasi
```bash
php artisan serve
```

Atau gunakan Laragon dengan mengakses: `http://project-232220.test`

## User Default untuk Testing

Setelah menjalankan seeder, gunakan akun berikut untuk login:

### Admin
- Username: `admin`
- Password: `admin123`

### Dosen
- Username: `budi.dosen`
- Password: `dosen123`

### Mahasiswa
- Username: `andi.mhs` atau `siti.mhs`
- Password: `mahasiswa123`

## Struktur Database

### Tabel users
- id, nama_user, username, email, nim, no_hp, gambar, password, role, timestamps

### Tabel asdos
- id, user_id, dosen_id, mata_kuliah, kode_mk, semester, deskripsi, status, timestamps

### Tabel pendaftar_asdos
- id, user_id, mata_kuliah, kode_mk, ipk, semester, motivasi, dokumen, status, komentar, timestamps

## Middleware

- `auth.custom`: Memastikan user sudah login
- `guest.custom`: Memastikan user belum login (untuk halaman login/register)
- `role:admin,dosen,mahasiswa`: Memastikan user memiliki role yang sesuai

## Alur Aplikasi

1. **Registrasi Mahasiswa**
   - Mahasiswa mendaftar akun (otomatis role = mahasiswa)
   - Login ke dashboard mahasiswa

2. **Pendaftaran Asdos**
   - Mahasiswa mengisi form pendaftaran asdos
   - Upload dokumen pendukung
   - Status awal: pending

3. **Review oleh Dosen**
   - Dosen melihat daftar pendaftar
   - Dosen dapat memberi komentar

4. **Approval oleh Admin**
   - Admin melihat semua pendaftar
   - Admin approve atau reject pendaftaran
   - Jika approve, admin dapat menambahkan ke data asdos

5. **Manajemen Asdos**
   - Admin mengelola data asdos aktif
   - Dosen melihat asdos yang dibimbingnya
   - Mahasiswa melihat status sebagai asdos

## Troubleshooting

### Error Database Connection
Pastikan MySQL/MariaDB sudah berjalan di Laragon

### Error 419 (CSRF Token)
Bersihkan cache: `php artisan config:clear`

### Error Permission Storage
Jalankan: `php artisan storage:link`

## Teknologi yang Digunakan

- Laravel 11
- PHP 8.2+
- MySQL/MariaDB
- Blade Template Engine
- Session-based Authentication

## Catatan Pengembangan

- Semua password di hash menggunakan bcrypt
- Session digunakan untuk autentikasi
- Upload file disimpan di storage/app/public
- Validasi input di semua form
- Role-based access control dengan middleware

---

Dibuat dengan ❤️ untuk Manajemen Asdos
