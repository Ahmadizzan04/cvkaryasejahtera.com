<?php
$pageTitle = "Visi & Misi - CV Karya Sejahtera";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- ================= HERO VISI & MISI ================= -->
<section class="vm-hero">
    <div class="container py-2">
        <span class="hero-label">
            PANDUAN & KOMITMEN
        </span>
        <h1 class="h2 fw-bold text-white mb-2">
            VISI & <span class="text-warning">MISI</span>
        </h1>
        <p class="text-white-50 mx-auto small mb-0" style="max-width: 680px; line-height: 1.6;">
            Arah dan komitmen CV Karya Sejahtera dalam memberikan pelayanan terbaik, membangun kemitraan yang solid, serta memperluas jaringan distribusi di Indonesia Timur.
        </p>
    </div>
</section>

<!-- ================= KONTEN UTAMA VISI & MISI ================= -->
<section class="py-4 py-lg-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- KARTU VISI (NAVY CARD) -->
            <div class="col-lg-6">
                <div class="visi-card">
                    <div class="vm-number">01</div>
                    <span class="ks-label text-warning mb-1 d-inline-block">ARAH UTAMA KAMI</span>
                    <h3 class="fw-bold text-white mb-2">VISI KAMI</h3>
                    <div class="vm-line-yellow"></div>
                    
                    <p class="text-white mb-4" style="line-height: 1.75; font-size: 1.05rem;">
                        “Menjadi Perusahaan Distribusi dan Perdagangan Terbaik Terfavorit di Indonesia Timur, khususnya dalam pelayanan melalui manajemen yang solid dan profesional, untuk memberikan nilai tambah yang signifikan bagi kepentingan Pelanggan dan Prinsipal kami.”
                    </p>

                    <div class="pt-3 border-top border-white border-opacity-10 d-flex align-items-center gap-2">
                        <i class="bi bi-compass-fill text-warning fs-5"></i>
                        <span class="text-white-50 small">Standar keunggulan distribusi kebutuhan pokok di Nusa Tenggara Timur.</span>
                    </div>
                </div>
            </div>

            <!-- KARTU MISI (WHITE CARD) -->
            <div class="col-lg-6">
                <div class="misi-card">
                    <div class="vm-number text-warning">02</div>
                    <span class="ks-label mb-1 d-inline-block">KOMITMEN KAMI</span>
                    <h3 class="fw-bold text-dark mb-2">MISI KAMI</h3>
                    <div class="vm-line-yellow"></div>

                    <div class="d-flex flex-column gap-3 mt-3">
                        <!-- Misi 1 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="misi-badge-num">01</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Manajemen Distribusi Modern</h6>
                                <p class="text-secondary small mb-0">
                                    Terus meningkatkan manajemen distribusi untuk mencapai Praktik Distribusi yang Baik berdasarkan Sistem Informasi yang akurat.
                                </p>
                            </div>
                        </div>

                        <!-- Misi 2 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="misi-badge-num">02</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Pengembangan Cakupan Lapangan</h6>
                                <p class="text-secondary small mb-0">
                                    Memperkuat jaringan dan cakupan pasukan lapangan (field force) untuk mendukung pengembangan pasar yang lebih luas hingga pelosok.
                                </p>
                            </div>
                        </div>

                        <!-- Misi 3 -->
                        <div class="d-flex align-items-start gap-3">
                            <div class="misi-badge-num">03</div>
                            <div>
                                <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Pertumbuhan & Ketersediaan Produk</h6>
                                <p class="text-secondary small mb-0">
                                    Menjaga pertumbuhan produk dalam hal ketersediaan stok yang konsisten serta peningkatan nilai penjualan berkelanjutan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= HUBUNGAN VISI & PRINSIPAL ================= -->
<section class="py-4 bg-white">
    <div class="container">
        <div class="card border-0 rounded-3 p-3 p-md-4" style="background-color: var(--ks-navy); color: #ffffff;">
            <div class="row align-items-center g-3">
                <div class="col-lg-8">
                    <span class="badge bg-warning text-dark px-2 py-1 fw-bold mb-2" style="font-size: 0.75rem;">SINERGI KEMITRAAN</span>
                    <h4 class="fw-bold text-white mb-1">Siap Bermitra dengan Prinsipal Nasional?</h4>
                    <p class="text-white-50 small mb-0">
                        Kami menjamin transparansi data penjualan dan rotasi barang tertata bagi pemilik merek di wilayah Flores.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="contact.php" class="btn-ks-yellow">
                        Hubungi Kemitraan <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
