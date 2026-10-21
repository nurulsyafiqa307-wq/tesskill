# Management Inventaris

Aplikasi web Management Inventaris untuk mengelola data anggota dan barang inventaris perusahaan. Proyek ini dibuat menggunakan Laravel sebagai backend API dan Vue.js sebagai frontend.

## Fitur Utama

- Login dan autentikasi menggunakan Laravel Sanctum.
- Manajemen anggota: tambah, lihat, edit, dan hapus.
- Manajemen inventaris: tambah, lihat, edit, dan hapus.
- Relasi inventaris dengan anggota yang bertanggung jawab.
- Dashboard analytics inventaris.
- REST API dengan metode HTTP yang sesuai.
- Proteksi endpoint menggunakan Bearer Token.

## Teknologi

- **Backend:** Laravel, PHP
- **Frontend:** Vue.js, Vite
- **Database:** MySQL / MariaDB
- **Authentication:** Laravel Sanctum
- **Version Control:** Git dan GitHub

## Persyaratan

Pastikan perangkat sudah memiliki:

- PHP sesuai kebutuhan versi Laravel pada proyek ini
- Composer
- Node.js dan npm
- MySQL atau MariaDB
- Git

## Instalasi

### 1. Clone repository

```bash
git clone https://github.com/nurulsyafiqa307-wq/tesskill.git
cd tesskill
```

### 2. Instal dependensi backend

```bash
composer install
```

### 3. Konfigurasi environment

Salin file environment contoh:

```bash
copy .env.example .env
```

Buat application key:

```bash
php artisan key:generate
```

Sesuaikan konfigurasi database di file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Buat database bernama `laravel` terlebih dahulu melalui phpMyAdmin atau MySQL. Sesuaikan nama database dan kredensial jika konfigurasi lokal berbeda.

### 4. Migrasi database dan buat akun demo

```bash
php artisan migrate --seed
```

Perintah ini menjalankan migrasi dan seeder yang tersedia. Data anggota dan inventaris tambahan dapat dibuat melalui aplikasi setelah login.

### 5. Instal dependensi frontend

```bash
npm install
```

## Menjalankan Aplikasi

Jalankan backend dan frontend di dua terminal terpisah.

### Terminal 1 — Backend Laravel

```bash
php artisan serve
```

Backend berjalan secara default di:

`http://127.0.0.1:8000`

### Terminal 2 — Frontend Vue dan Vite

```bash
npm run dev
```

Buka alamat frontend yang ditampilkan oleh Vite di terminal.

## Akun Demo

Gunakan akun berikut untuk mencoba aplikasi, apabila akun demo telah dibuat oleh seeder:

- **Email:** `admin@botika.online`
- **Password:** `password123`

Ganti kredensial demo sebelum aplikasi digunakan di lingkungan produksi.

## REST API

Base URL lokal:

`http://127.0.0.1:8000/api`

| Method | Endpoint | Keterangan |
|---|---|---|
| POST | `/login` | Login dan memperoleh token |
| GET | `/user` | Mendapatkan profil pengguna |
| GET | `/members` | Menampilkan anggota |
| POST | `/members` | Menambahkan anggota |
| GET | `/members/{id}` | Detail anggota |
| PUT/PATCH | `/members/{id}` | Memperbarui anggota |
| DELETE | `/members/{id}` | Menghapus anggota |
| GET | `/inventories` | Menampilkan inventaris |
| POST | `/inventories` | Menambahkan inventaris |
| GET | `/inventories/{id}` | Detail inventaris |
| PUT/PATCH | `/inventories/{id}` | Memperbarui inventaris |
| DELETE | `/inventories/{id}` | Menghapus inventaris |
| GET | `/inventories/analytics` | Data analytics inventaris |

Endpoint yang dilindungi memerlukan token autentikasi dengan header:

```http
Authorization: Bearer YOUR_TOKEN
Accept: application/json
```

Token diperoleh melalui endpoint login.

## Keamanan

- Endpoint yang dilindungi menggunakan autentikasi Laravel Sanctum.
- File `.env` tidak boleh diunggah ke repository publik.
- Gunakan kredensial dan konfigurasi yang aman untuk deployment.

## Developer

**Nurul Syafiqa Ramadhan**

Project: Management Inventaris — Full Stack Developer Skill Test.
