# Login-php-nativee

Proyek ini adalah implementasi sistem login menggunakan PHP native yang mengutamakan integrasi fitur masuk melalui pihak ketiga, khususnya Google.

## Fitur Utama
Berdasarkan struktur file yang ada, aplikasi ini mencakup fitur-fitur berikut:
- **Login Google:** Integrasi autentikasi menggunakan akun Google.
- **Sistem Registrasi:** Alur pendaftaran pengguna baru.
- **Lupa Password:** Fitur untuk memulihkan akses akun.
- **Manajemen Sesi:** Halaman dashboard (home) yang hanya bisa diakses setelah autentikasi berhasil.
- **Proses Autentikasi Native:** Logika login dan registrasi menggunakan PHP native.

## Teknologi yang Digunakan
- **Bahasa Pemrograman:** PHP.
- **Dependency Manager:** Composer (digunakan untuk mengelola library eksternal seperti Google Client API).
- **API:** Google OAuth API untuk fitur login Google.

## Prasyarat Instalasi
Untuk menjalankan proyek ini di lingkungan lokal Anda, pastikan telah menyiapkan:
1. **PHP** versi 7.4 atau lebih baru.
2. **Composer** terpasang untuk mengunduh dependensi dari `composer.json`.
3. **Google Client ID & Secret** yang didapatkan dari Google Cloud Console.
4. Server lokal (seperti XAMPP, Laragon, atau Apache).

**Langkah Instalasi:**
1. Clone repositori ini ke direktori server lokal Anda.
2. Jalankan perintah `composer install` di terminal untuk memasang vendor.
3. Konfigurasikan kredensial Google API Anda pada file yang relevan (misalnya di `google-callback.php`).
4. Impor skema database (jika disediakan) dan sesuaikan koneksi database.

## Struktur Project
Berikut adalah beberapa file penting dalam proyek ini:
- `login.php` & `loginProcess.php`: Menangani antarmuka dan logika masuk.
- `google-callback.php`: Menangani respon balik dari server Google setelah user login.
- `Registrasi.php` & `RegistrasiProcess.php`: Menangani pendaftaran pengguna baru.
- `forgetPassword.php`: Halaman untuk fitur lupa kata sandi.
- `home.php`: Halaman utama bagi pengguna yang sudah berhasil masuk.
- `composer.json`: Daftar library pihak ketiga yang dibutuhkan.

## Kegunaan
Proyek ini sangat berguna sebagai referensi belajar bagi pengembang yang ingin memahami cara kerja:
1. Autentikasi manual menggunakan PHP tanpa framework.
2. Implementasi **OAuth2** menggunakan Google sebagai penyedia identitas (Identity Provider).
3. Pengelolaan dependensi menggunakan Composer pada project PHP native.

## Kontribusi
Kami menerima kontribusi dalam bentuk apa pun! Jika Anda menemukan bug atau ingin menambahkan fitur baru:
1. Fork repositori ini.
2. Buat branch fitur baru.
3. Commit perubahan Anda.
4. Kirimkan Pull Request untuk ditinjau.

## Lisensi
Proyek ini dilisensikan di bawah **MIT License**.
