<!-- Compact Top Bar -->
<div class="top-bar text-white d-none d-lg-block border-bottom border-white border-opacity-10">
    <div class="container-fluid px-3 px-xl-5 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3 text-white-50">
            <span><i class="bi bi-geo-alt-fill text-warning me-1"></i> Ruteng, Manggarai, Labuan Bajo & Flores (NTT)</span>
            <span class="text-white-50 opacity-50">&bull;</span>
            <span><i class="bi bi-clock-fill text-warning me-1"></i> Operasional: Senin - Sabtu (08:00 - 17:00 WITA)</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <a href="mailto:info@karyasejahtera.co.id" class="text-decoration-none">
                <i class="bi bi-envelope-fill me-1 text-warning"></i> info@karyasejahtera.co.id
            </a>
            <span class="text-white-50 opacity-50">|</span>
            <a href="https://wa.me/6281339339900" target="_blank" class="text-decoration-none text-white fw-semibold">
                <i class="bi bi-whatsapp me-1 text-success"></i> +62 813 3933 9900
            </a>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container-fluid px-3 px-xl-5">
        <!-- Official Logo & Brand Name -->
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none text-white py-0 me-2 me-xl-4" href="index.php">
            <div class="brand-logo-box">
                <img src="assets/img/logo.png" alt="Logo CV Karya Sejahtera" class="brand-logo-img">
            </div>
            <div class="d-flex flex-column d-none d-sm-flex">
                <span class="brand-title">CV KARYA SEJAHTERA</span>
                <span class="brand-subtitle">Distributor FMCG & Pengembangan Pasar</span>
            </div>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0 text-white shadow-none p-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-2 text-warning"></i>
        </button>

        <!-- Navigation Links (Rapih, 1 Baris, Tanpa Terpotong) -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-1 gap-xl-2">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'index' || $current_page == '') ? 'active' : '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'visi-misi') ? 'active' : '' ?>" href="visi-misi.php">Visi & Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'about') ? 'active' : '' ?>" href="about.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'products') ? 'active' : '' ?>" href="products.php">Brands & Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'distribution') ? 'active' : '' ?>" href="distribution.php">Distribusi NTT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'artikel' || $current_page == 'artikel-detail') ? 'active' : '' ?>" href="artikel.php">Kabar & Artikel</a>
                </li>
            </ul>

            <!-- Tombol Lokasi Toko (1 Baris Rapih) -->
            <div class="ms-lg-2 ms-xl-3 mt-2 mt-lg-0">
                <a href="contact.php" class="nav-btn-yellow">
                    <i class="bi bi-geo-alt-fill"></i> Lokasi Toko
                </a>
            </div>
        </div>
    </div>
</nav>
