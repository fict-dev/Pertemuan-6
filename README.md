# Web Programming 1 - Pertemuan 6 (Modul 05B)

Proyek integrasi autentikasi user, hashing password, session guard, dan Project Hub untuk seluruh modul praktikum Web Programming 1.

## 🚀 Fitur Utama
- **Autentikasi Aman**: Login berbasis PHP & MySQL dengan verifikasi `password_hash()` dan `password_verify()`.
- **Session Guard (`auth.php`)**: Memproteksi seluruh halaman internal agar tidak dapat diakses tanpa login.
- **Project Hub (`dashboard.php`)**: Halaman utama yang mengintegrasikan seluruh hasil praktikum:
  - Biodata Mahasiswa (Modul 1-2)
  - Layout Lab Box Model (Modul 3A)
  - Data Mahasiswa (Modul 3B)
  - Tambah Mahasiswa (Modul 4B)
- **Siklus Session & Logout**: Mengakhiri session dan mencegah akses kembali via back/history.

## 📁 Struktur File
- `koneksi.php` - Konfigurasi koneksi MySQLi ke database `web_programming_1`.
- `buat_user.php` - Script setup akun default (`admin` / `admin123`).
- `login.php` - Tampilan halaman login dengan alert error dan status logout.
- `proses_login.php` - Pemrosesan autentikasi login dan session generator.
- `auth.php` - Middleware / guard pemeriksa session.
- `dashboard.php` - Dashboard project hub setelah login.
- `index.php` - Halaman biodata mahasiswa.
- `layout.php` - Halaman praktikum CSS Box Model.
- `data_mahasiswa.php` - Tampilan tabel data mahasiswa.
- `form_mahasiswa.php` - Form tambah mahasiswa baru.
- `proses_tambah.php` - Backend proses insert data mahasiswa.
- `logout.php` - Script pembersih session dan redirect.
- `style.css` - Desain dan styling antarmuka web.
- `database.sql` - Ekspor struktur database dan tabel `users` serta `mahasiswa`.

## ⚙️ Persyaratan
- PHP 8.x
- MySQL 8.x
- Web Server (Laragon / XAMPP)
