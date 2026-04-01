# Undangan Pernikahan Renanda & Chelsea

Website undangan pernikahan elegan untuk Renanda van Bronckhorst & Chelsea Ayunda dengan fitur RSVP dan galeri foto.

## 🌟 Fitur

- **Hero Section** dengan countdown timer menuju hari pernikahan
- **Detail Acara** untuk akad nikah dan resepsi
- **Peta Lokasi** dengan integrasi Google Maps
- **Galeri Foto** pasangan dengan carousel
- **Kutipan Cinta** yang romantis
- **Form RSVP** untuk konfirmasi kehadiran tamu
- **Buku Tamu Digital** untuk menampilkan ucapan dan doa
- **Background Music** dengan kontrol play/pause
- **Navigasi Sticky** untuk kemudahan akses
- **Animasi Scroll** yang menarik
- **Desain Responsif** untuk desktop dan mobile

## 🛠️ Teknologi

- **HTML5** untuk struktur halaman
- **CSS3** dengan Bootstrap 5 untuk styling
- **JavaScript** untuk interaktivitas
- **PHP** untuk backend API
- **MySQL** untuk database lokal
- **AOS (Animate On Scroll)** untuk animasi
- **Font Awesome** untuk ikon
- **Google Fonts** untuk tipografi

## 📁 Struktur Folder

```
undangan-pernikahan/
│── index.html
│── koneksi.php
│── undangan_pernikahan.sql
│── api/
│   ├── submit_rsvp.php
│   └── get_wishes.php
│── css/
│   └── style.css
│── js/
│   └── script.js
│── assets/
│   ├── img/   (foto pasangan, dll)
│   └── audio/ (musik pernikahan.mp3)
│── README.md
```

## 🚀 Cara Penggunaan

### Prasyarat

- Web server lokal dengan PHP & MySQL (misalnya Laragon, XAMPP, atau MAMP)
- Web browser modern (Chrome, Firefox, Safari, Edge)
- Koneksi internet untuk memuat CDN eksternal

### Instalasi

1. **Letakkan File Proyek**
   - Clone atau tempatkan folder proyek ini (`Undangan-Pernikahan`) di dalam direktori root server lokal Anda (`www/` untuk Laragon atau `htdocs/` untuk XAMPP).

2. **Setup Database MySQL**
   - Buka aplikasi manajemen database Anda (seperti HeidiSQL, phpMyAdmin, atau DBeaver).
   - Jalankan (Execute/Import) file `undangan_pernikahan.sql` yang dikirim bersama template proyek ini. Perintah di dalamnya akan otomatis membuat database `undangan_pernikahan` beserta tabel `rsvp` untuk Anda.
   - (Opsional) Buka file `koneksi.php` untuk mengatur kredensial akses database jika nama pengguna Anda bukan `root` atau memiliki password.

3. **Siapkan Assets**
   - Letakkan foto-foto pasangan di folder `assets/img/`
   - Letakkan musik pernikahan di folder `assets/audio/`

4. **Jalankan Website**
   - Pastikan layanan Apache dan MySQL Anda berjalan normal.
   - Buka browser Anda dan akses melalui alamat web lokal: `http://localhost/Undangan-Pernikahan/`

### Kustomisasi

1. **Ubah Informasi Pernikahan**
   - Edit nama pasangan, tanggal, dan lokasi di `index.html`
   - Sesuaikan countdown timer di `js/script.js`

2. **Ganti Tema Warna**
   - Ubah variabel CSS di `css/style.css`:
     ```css
     :root {
       --primary-color: #d4af37; /* Gold */
       --secondary-color: #f8f4e6; /* Light pastel */
       /* ... */
     }
     ```

3. **Tambahkan Foto**
   - Tambahkan foto di carousel dengan menambahkan item baru:
     ```html
     <div class="carousel-item">
       <img src="assets/img/nama-foto.jpg" class="d-block w-100" alt="Deskripsi Foto">
     </div>
     ```

## 📱 Responsivitas

Website ini dirancang untuk bekerja dengan baik di berbagai perangkat:
- **Desktop**: Tampilan penuh dengan semua fitur
- **Tablet**: Layout yang disesuaikan untuk layar medium
- **Mobile**: Navigasi hamburger dan layout yang dioptimalkan

## 🎨 Desain

- **Tema**: Elegan dengan warna gold, putih, dan pastel
- **Tipografi**: 
  - "Great Vibes" untuk nama pasangan dan judul
  - "Poppins" untuk konten utama
- **Animasi**: Transisi halus dan efek parallax
- **Ikon**: Font Awesome untuk ikon yang konsisten

## 🔧 Fitur Teknis

### Smooth Scrolling
Navigasi antar bagian halaman dengan transisi yang halus.

### Parallax Effect
Background hero section bergerak dengan kecepatan berbeda saat scroll.

### Animasi AOS
Elemen muncul dengan animasi saat masuk viewport.

### Active Navigation
Link navigasi yang aktif sesuai dengan bagian yang sedang dilihat.

### Back to Top Button
Tombol untuk kembali ke bagian atas halaman dengan mudah.


## 👤 Penulis

- Dimas Fahri Alfareza - [Link ke profil GitHub atau portofolio](https://github.com/Alfareza3)

## 🙏 Terima Kasih

- Terima kasih kepada [Bootstrap](https://getbootstrap.com/) untuk framework CSS yang luar biasa
- Terima kasih kepada komunitas PHP & MySQL untuk ekosistem yang solid
- Terima kasih kepada [AOS](https://michalsnik.github.io/aos/) untuk library animasi scroll
- Terima kasih kepada [Font Awesome](https://fontawesome.com/) untuk koleksi ikon yang lengkap

---