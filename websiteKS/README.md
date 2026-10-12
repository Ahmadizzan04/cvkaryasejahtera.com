# Website Company Profile - CV Karya Sejahtera (Distributor FMCG & Pengembangan Pasar)

Website company profile berbasis **PHP modular** dan **Bootstrap 5** yang telah diselaraskan 100% dengan tema, palet warna, branding, dan aset dari **`htdocs/comproks`**.

---

## 🎨 Palet Warna & Tema (Identik dengan `comproks`)

* **Navy Gelap (Navbar & Header)**: `#071a33` / `#061b36`
* **Deep Blue**: `#0b2d5c`
* **Kuning Emas (Aksen Utama, Badge, Tombol CTA)**: `#f6c915` / `#f5c518` (Hover: `#ffe25c`)
* **Background Konten**: Putih Bersih (`#ffffff`) & Abu-abu Lembut (`#f8fafc`)
* **Logo Ikon**: Kotak kuning sudut tumpul dengan teks hitam/navy tebal **`KS`**.

---

## 🏢 Identitas & Konten Resmi Perusahaan

* **Nama Perusahaan**: **CV. KARYA SEJAHTERA**
* **Tagline**: *Distributor FMCG & Pengembangan Pasar*
* **Sejarah**: Tumbuh dari pengalaman panjang berawal dari **Toko Bahagia** (sejak 2005)
* **Jaringan & Wilayah Operasional**: Ruteng, Manggarai, Labuan Bajo, Flores, Nusa Tenggara Timur (1.500+ jaringan pelanggan)
* **Brand Prinsipal Utama**:
  * **PT Salim Ivomas Pratama Tbk (SIMP)**: Minyak goreng & lemak nabati (Bimoli, Bimoli Spesial, Amanda, Palmia)
  * **PT Bogasari Flour Mills Tbk**: Tepung terigu (Cakra Kembar, Segitiga Biru, Kunci Biru, Lencana Merah)
* **Titik Operasional**:
  * **Kantor Pusat**: Jl. Niaga No. 9 Ruteng, Manggarai, NTT (WA: 0857 3680 9087)
  * **Depo Logistik**: Jl. Opeseter Maun No. 09, Kec. Komodo, Labuan Bajo, NTT (WA: 0813 5318 8593)

---

## 📁 Struktur Halaman Proyek `websiteKS`

```
c:/xampp/htdocs/websiteKS/
│
├── includes/
│   ├── header.php         # Tag <head>, meta, Bootstrap 5, dan title dynamic
│   ├── navbar.php         # Topbar info, Logo kuning 'KS', dan navigasi
│   └── footer.php         # Footer navy, tautan cepat, alamat Ruteng & Bajo, floating WhatsApp
│
├── assets/
│   ├── css/style.css      # Styling tema navy & kuning emas khas CV Karya Sejahtera
│   ├── js/main.js         # Interaktivitas formulir dan animasi
│   └── img/               # Menggunakan foto asli dari comproks:
│       ├── hero-truck.png
│       ├── toko-bahagia.png
│       ├── visimisi.jpg
│       ├── map-indonesia.png
│       ├── brand/ (brand-1.jpg, brand-2.png)
│       ├── gallery/ (gallery-1.jpg s/d gallery-3.jpg)
│       └── posts/ (post-1.jpeg, post-2.jpeg, post-3.jpeg)
│
├── index.php              # Beranda (Hero truck, Quick Stats, Toko Bahagia preview, Brands, Galeri, Lokasi)
├── about.php              # Tentang Kami (Kisah Toko Bahagia, Timeline Perjalanan, Core Values)
├── visi-misi.php          # Visi & Misi resmi CV Karya Sejahtera dengan desain kartu navy & putih
├── products.php           # Portofolio Brand & Lini Produk (Salim Ivomas & Bogasari)
├── distribution.php       # Jaringan Distribusi NTT & Peta Logistik Flores
├── contact.php            # Lokasi Kantor Pusat Ruteng, Depo Bajo, Google Maps, & Form Pemesanan
└── README.md
```

---

## 🚀 Cara Menjalankan

1. Pastikan **Apache** di **XAMPP Control Panel** aktif (**Running**).
2. Buka browser dan kunjungi:
   ```text
   http://localhost/websiteKS/
   ```
