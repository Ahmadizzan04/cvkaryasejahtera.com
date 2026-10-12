<?php
$pageTitle = "Kabar & Artikel Distribusi FMCG";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- ================= HERO SUB-HALAMAN ================= -->
<section class="vm-hero">
    <div class="container py-2">
        <span class="hero-label">
            INFORMASI & WAWASAN FMCG
        </span>
        <h1 class="h2 fw-bold text-white mb-2">
            KABAR & ARTIKEL <span class="text-warning">DISTRIBUSI</span>
        </h1>
        <p class="text-white-50 mx-auto small mb-0" style="max-width: 720px; line-height: 1.6;">
            Kumpulan artikel, wawasan rantai pasok, tips bisnis grosir, dan update perkembangan distribusi barang kebutuhan pokok di wilayah Nusa Tenggara Timur.
        </p>
    </div>
</section>

<!-- ================= ARTIKEL UNGGULAN SLIDER ================= -->
<section class="py-4 bg-white border-bottom">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <span class="ks-label">SOROTAN UTAMA</span>
                <h3 class="ks-heading mb-0" style="font-size: 1.6rem;">Artikel Unggulan</h3>
            </div>
            <div class="d-flex align-items-center gap-2">
                <button class="slider-nav-btn featured-prev" aria-label="Sebelumnya" title="Sebelumnya">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="slider-nav-btn featured-next" aria-label="Berikutnya" title="Berikutnya">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Swiper Featured Slider -->
        <div class="swiper featured-swiper pb-4">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background-color: var(--ks-navy); color: #ffffff;">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <img src="assets/img/posts/post-1.jpeg" class="w-100" style="height: 280px; object-fit: cover;" alt="Distribusi FMCG">
                            </div>
                            <div class="col-lg-6 p-4 p-md-5">
                                <span class="badge bg-warning text-dark px-3 py-1 fw-bold mb-2">TOP STORY</span>
                                <div class="text-white-50 small mb-2"><i class="bi bi-calendar3 text-warning me-1"></i> 12 September 2026</div>
                                <h3 class="fw-bold text-white mb-3" style="font-size: 1.4rem;">Distribusi Produk FMCG untuk Grosir dan Pelaku Usaha di Flores</h3>
                                <p class="text-white-50 small mb-4">
                                    Memahami bagaimana pasokan langsung dari pabrik prinsipal dapat memangkas biaya logistik dan menjaga ketersediaan barang di level retail.
                                </p>
                                <a href="artikel-detail.php?id=1" class="btn-ks-yellow">
                                    Baca Artikel Penuh <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background-color: var(--ks-navy); color: #ffffff;">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <img src="assets/img/posts/post-2.jpeg" class="w-100" style="height: 280px; object-fit: cover;" alt="Warehouse Modern">
                            </div>
                            <div class="col-lg-6 p-4 p-md-5">
                                <span class="badge bg-warning text-dark px-3 py-1 fw-bold mb-2">OPERASIONAL</span>
                                <div class="text-white-50 small mb-2"><i class="bi bi-calendar3 text-warning me-1"></i> 10 September 2026</div>
                                <h3 class="fw-bold text-white mb-3" style="font-size: 1.4rem;">Peran Warehouse Modern dalam Menjaga Kualitas & Stok Tepung Terigu</h3>
                                <p class="text-white-50 small mb-4">
                                    Sistem penyimpanan berstandar FIFO/FEFO terbukti efektif mencegah kerusakan kemasan dan memastikan barang tetap segar saat tiba di toko.
                                </p>
                                <a href="artikel-detail.php?id=2" class="btn-ks-yellow">
                                    Baca Artikel Penuh <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background-color: var(--ks-navy); color: #ffffff;">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <img src="assets/img/posts/post-3.jpeg" class="w-100" style="height: 280px; object-fit: cover;" alt="Distribusi NTT">
                            </div>
                            <div class="col-lg-6 p-4 p-md-5">
                                <span class="badge bg-warning text-dark px-3 py-1 fw-bold mb-2">EKSPANSI PASAR</span>
                                <div class="text-white-50 small mb-2"><i class="bi bi-calendar3 text-warning me-1"></i> 05 September 2026</div>
                                <h3 class="fw-bold text-white mb-3" style="font-size: 1.4rem;">Memperluas Jaringan Distribusi di Ruteng, Manggarai, hingga Labuan Bajo</h3>
                                <p class="text-white-50 small mb-4">
                                    Strategi ekspansi rute armada angkut dalam menghubungkan sentra logistik Ruteng ke pusat pariwisata Labuan Bajo dan wilayah sekitarnya.
                                </p>
                                <a href="artikel-detail.php?id=3" class="btn-ks-yellow">
                                    Baca Artikel Penuh <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination featured-pagination mt-3 text-center"></div>
        </div>
    </div>
</section>

<!-- ================= DAFTAR SELURUH ARTIKEL (DENGAN FILTER) ================= -->
<section class="py-4 py-lg-5 bg-light">
    <div class="container">
        <div class="text-center max-w-700 mx-auto mb-4">
            <span class="ks-label">SEMUA PUBLIKASI</span>
            <h2 class="ks-heading">
                Arsip <span>Kabar & Artikel</span>
            </h2>
            <p class="text-muted small mt-1 mb-0">
                Pilih topik artikel yang ingin Anda pelajari seputar perdagangan dan distribusi bahan pokok.
            </p>
        </div>

        <!-- Filter Tab Kategori -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <button class="btn btn-primary product-filter-btn px-3 py-1 rounded-pill small fw-semibold active" data-filter="all">Semua Artikel</button>
            <button class="btn btn-outline-secondary product-filter-btn px-3 py-1 rounded-pill small fw-semibold" data-filter="fmcg">Distribusi & Pasar</button>
            <button class="btn btn-outline-secondary product-filter-btn px-3 py-1 rounded-pill small fw-semibold" data-filter="warehouse">Warehouse & Logistik</button>
            <button class="btn btn-outline-secondary product-filter-btn px-3 py-1 rounded-pill small fw-semibold" data-filter="tips">Tips Usaha & Kuliner</button>
        </div>

        <!-- Grid Artikel -->
        <div class="row g-3 g-lg-4" id="articleList">
            <!-- Artikel 1 -->
            <div class="col-md-6 col-lg-4 product-item" data-category="fmcg">
                <div class="article-slide-card h-100">
                    <div class="article-img-wrap">
                        <img src="assets/img/posts/post-1.jpeg" alt="Distribusi Produk FMCG">
                        <span class="article-category-badge">Distribusi & Pasar</span>
                    </div>
                    <div class="article-body">
                        <div class="article-date"><i class="bi bi-calendar3 text-warning me-1"></i> 12 September 2026</div>
                        <h4 class="article-title">
                            <a href="artikel-detail.php?id=1">Distribusi Produk FMCG untuk Grosir dan Pelaku Usaha</a>
                        </h4>
                        <p class="article-excerpt">
                            Mendukung ketersediaan produk kebutuhan sehari-hari melalui jaringan distribusi terstruktur di Manggarai dan Flores.
                        </p>
                        <a href="artikel-detail.php?id=1" class="article-readmore">
                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="col-md-6 col-lg-4 product-item" data-category="warehouse">
                <div class="article-slide-card h-100">
                    <div class="article-img-wrap">
                        <img src="assets/img/posts/post-2.jpeg" alt="Peran Warehouse">
                        <span class="article-category-badge">Warehouse & Logistik</span>
                    </div>
                    <div class="article-body">
                        <div class="article-date"><i class="bi bi-calendar3 text-warning me-1"></i> 10 September 2026</div>
                        <h4 class="article-title">
                            <a href="artikel-detail.php?id=2">Peran Warehouse dalam Menjaga Ketersediaan Produk</a>
                        </h4>
                        <p class="article-excerpt">
                            Pengelolaan stok dan sistem pergudangan modern menjadi faktor krusial dalam menjaga kelancaran rantai pasok.
                        </p>
                        <a href="artikel-detail.php?id=2" class="article-readmore">
                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="col-md-6 col-lg-4 product-item" data-category="fmcg">
                <div class="article-slide-card h-100">
                    <div class="article-img-wrap">
                        <img src="assets/img/posts/post-3.jpeg" alt="Distribusi Flores">
                        <span class="article-category-badge">Distribusi & Pasar</span>
                    </div>
                    <div class="article-body">
                        <div class="article-date"><i class="bi bi-calendar3 text-warning me-1"></i> 05 September 2026</div>
                        <h4 class="article-title">
                            <a href="artikel-detail.php?id=3">Memperluas Jaringan Distribusi di Flores dan Sekitarnya</a>
                        </h4>
                        <p class="article-excerpt">
                            Jaringan distribusi terus dikembangkan untuk menjangkau pelanggan di pelosok pedesaan dan sentra bisnis baru.
                        </p>
                        <a href="artikel-detail.php?id=3" class="article-readmore">
                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="col-md-6 col-lg-4 product-item" data-category="warehouse">
                <div class="article-slide-card h-100">
                    <div class="article-img-wrap">
                        <img src="assets/img/posts/post-4.jpeg" alt="Manajemen Stok Bahan Pokok">
                        <span class="article-category-badge">Warehouse & Logistik</span>
                    </div>
                    <div class="article-body">
                        <div class="article-date"><i class="bi bi-calendar3 text-warning me-1"></i> 28 Agustus 2026</div>
                        <h4 class="article-title">
                            <a href="artikel-detail.php?id=4">Strategi Pengelolaan Stok Bahan Pokok Menjelang Hari Raya di NTT</a>
                        </h4>
                        <p class="article-excerpt">
                            Langkah antisipatif menghadapi lonjakan permintaan minyak goreng dan tepung terigu saat musim raya tiba.
                        </p>
                        <a href="artikel-detail.php?id=4" class="article-readmore">
                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 5 -->
            <div class="col-md-6 col-lg-4 product-item" data-category="tips">
                <div class="article-slide-card h-100">
                    <div class="article-img-wrap">
                        <img src="assets/img/posts/post-5.jpeg" alt="Tips Memilih Tepung Terigu">
                        <span class="article-category-badge">Tips Usaha & Kuliner</span>
                    </div>
                    <div class="article-body">
                        <div class="article-date"><i class="bi bi-calendar3 text-warning me-1"></i> 15 Agustus 2026</div>
                        <h4 class="article-title">
                            <a href="artikel-detail.php?id=5">Panduan Memilih Tepung Terigu Tepat untuk Usaha Bakery & Kuliner</a>
                        </h4>
                        <p class="article-excerpt">
                            Mengenal karakteristik kadar protein Cakra Kembar, Segitiga Biru, dan Kunci Biru untuk hasil olahan maksimal.
                        </p>
                        <a href="artikel-detail.php?id=5" class="article-readmore">
                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 6 -->
            <div class="col-md-6 col-lg-4 product-item" data-category="tips">
                <div class="article-slide-card h-100">
                    <div class="article-img-wrap">
                        <img src="assets/img/posts/post-6.jpeg" alt="Standar Mutu Minyak Goreng">
                        <span class="article-category-badge">Tips Usaha & Kuliner</span>
                    </div>
                    <div class="article-body">
                        <div class="article-date"><i class="bi bi-calendar3 text-warning me-1"></i> 02 Agustus 2026</div>
                        <h4 class="article-title">
                            <a href="artikel-detail.php?id=6">Pentingnya Menjaga Kualitas Minyak Goreng dalam Distribusi Skala Besar</a>
                        </h4>
                        <p class="article-excerpt">
                            Standar penanganan logistik Bimoli dan Amanda agar tetap higienis dan jernih hingga ke tangan konsumen akhir.
                        </p>
                        <a href="artikel-detail.php?id=6" class="article-readmore">
                            Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= BANNER AJAKAN KEMITRAAN ================= -->
<section class="py-4" style="background-color: var(--ks-navy); color: #ffffff;">
    <div class="container py-2 text-center">
        <h3 class="fw-bold text-white mb-2" style="font-size: 1.5rem;">Ingin Mendapatkan Pasokan Produk Rutin?</h3>
        <p class="text-white-50 mx-auto small mb-3" style="max-width: 600px;">
            Hubungi perwakilan CV Karya Sejahtera di Ruteng atau Labuan Bajo untuk pasokan grosir toko Anda.
        </p>
        <a href="contact.php" class="btn-ks-yellow">
            Hubungi Kami Sekarang !! <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
