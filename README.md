# TUGASMU - Pengelolaan Tugas Kuliah

UTS Pemrograman Berbasis Website Semester 3 tahun 26/27

**Nama**  Dhani Ramadhani 
**NIM**  252410103033 
**Kelas**  F 

## Tentang Website

**TUGASMU** adalah website sederhana untuk mencatat dan memantau tugas kuliah. Pengguna masuk dengan nama dan NIM, lalu bisa melihat ringkasan tugas di dashboard, daftar lengkap tugas beserta statusnya di halaman pengelolaan, dan identitas diri di halaman profil.

Website ini dibuat sebagai simulasi alur request-response pada Laravel dengan arsitektur MVC. Tidak ada database, semua data tugas disimpan sebagai array di controller lalu dikirim ke view.

## Teknologi

- Laravel 13 (tanpa starter kit)
- Blade templating (`@extends`, `@section`, `@yield`, `@include`, dan Blade component)
- Bootstrap 5.3 lewat CDN
- CSS native (`public/css/style.css`)

## Fitur

- **Login** dengan input nama dan NIM
- **Dashboard** berisi ringkasan jumlah tugas, progress penyelesaian, dan daftar deadline terdekat.
- **Pengelolaan** menampilkan seluruh tugas dalam tabel dengan badge status (Selesai, Dikerjakan, Belum).
- **Profil** menampilkan foto, nama, NIM, dan biodata.
- **Logout** untuk kembali ke halaman login dan mengisi ulang nama serta NIM.

## Alur Data

1. Halaman login dibuka lewat `GET /`.
2. Form login mengirim `username` dan `nim` lewat `POST /login`.
3. `PageController@prosesLogin` membaca data lalu redirect ke dashboard dengan query parameter.
4. Dashboard, pengelolaan, dan profil membaca `username` dan `nim` dari URL (`$request->query()`), lalu mengirimkannya ke view bersama data array dari controller.
5. Navbar menyisipkan `username` dan `nim` ke setiap link supaya data tetap terbawa antar halaman.


## Cara Menjalankan

```bash
git clone https://github.com/DhnRmdhn/UTS_PWEB_252410103033.git
cd UTS_PWEB_252410103033
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Buka `http://127.0.0.1:8000` di browser.


## Screenshot

### 1. Halaman Login
<img width="1920" height="1080" alt="Screenshot (904)" src="https://github.com/user-attachments/assets/7f812ac6-80b8-4467-a1f9-0e300b7b776f" />

### 2. Dashboard
<img width="1920" height="1080" alt="Screenshot (905)" src="https://github.com/user-attachments/assets/9aa10bd2-ff87-41f7-8f27-9940baa66ef8" />

### 3. Halaman Pengelolaan
<img width="1920" height="1080" alt="Screenshot (906)" src="https://github.com/user-attachments/assets/a535597e-e481-45ed-90fe-d50f5c8744e3" />

### 4. Halaman Profil
<img width="1920" height="1080" alt="Screenshot (907)" src="https://github.com/user-attachments/assets/f9278938-a3e1-4b11-b409-76f8c8900013" />


