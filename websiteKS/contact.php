<?php
$pageTitle = "Lokasi Toko & Kontak CV Karya Sejahtera";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- ================= HERO ================= -->
<section class="vm-hero">
    <div class="container py-2">
        <span class="hero-label">
            HUBUNGI KAMI
        </span>
        <h1 class="h2 fw-bold text-white mb-2">
            LOKASI & <span class="text-warning">KONTAK KAMI</span>
        </h1>
        <p class="text-white-50 mx-auto small mb-0" style="max-width: 720px; line-height: 1.6;">
            Kunjungi kantor pusat kami di Ruteng, depo logistik di Labuan Bajo, atau hubungi kontak WhatsApp resmi kami untuk pemesanan produk dan informasi kerjasama.
        </p>
    </div>
</section>

<!-- ================= LOKASI KANTOR & DEPO ================= -->
<section class="py-4 py-lg-5 bg-white" id="lokasi">
    <div class="container">
        <div class="row g-3 g-lg-4 align-items-stretch">
            <!-- Peta Google Maps Embed -->
            <div class="col-lg-7">
                <div class="rounded-3 overflow-hidden border shadow-sm h-100" style="min-height: 340px;">
                    <iframe
                        src="https://www.google.com/maps?q=Jl.%20Niaga%20No.%209%20Ruteng%20Manggarai%20Nusa%20Tenggara%20Timur&output=embed"
                        width="100%"
                        height="100%"
                        style="border:0; min-height: 340px;"
                        loading="lazy"
                        allowfullscreen=""
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Detail Titik Operasional -->
            <div class="col-lg-5">
                <div class="d-flex flex-column gap-3 h-100 justify-content-between">
                    <!-- Kantor Pusat Ruteng -->
                    <div class="p-3 p-md-4 rounded-3 border bg-light shadow-sm">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-building text-warning fs-5"></i>
                            <h6 class="fw-bold text-dark mb-0">Kantor Pusat (Ruteng)</h6>
                        </div>
                        <p class="text-secondary small mb-1">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> Jl. Niaga No. 9 Ruteng, Manggarai, NTT
                        </p>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-telephone-fill text-warning me-1"></i> Telepon: +62 8133 9339 900
                        </p>
                        <a href="https://wa.me/6281339339900" target="_blank" class="btn btn-dark btn-sm w-100 py-2 d-flex align-items-center justify-content-center gap-2 rounded-2 fw-bold text-warning">
                            <i class="bi bi-whatsapp"></i> Chat WhatsApp: 0813 3933 9900
                        </a>
                    </div>

                    <!-- Depo Labuan Bajo -->
                    <div class="p-3 p-md-4 rounded-3 border bg-light shadow-sm">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="bi bi-truck text-warning fs-5"></i>
                            <h6 class="fw-bold text-dark mb-0">Depo Labuan Bajo</h6>
                        </div>
                        <p class="text-secondary small mb-1">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> Jl. Opeseter Maun No. 09, Kec. Komodo, Labuan Bajo, NTT
                        </p>
                        <p class="text-secondary small mb-3">
                            <i class="bi bi-telephone-fill text-warning me-1"></i> Telepon: +62 8135 3188 593
                        </p>
                        <a href="https://wa.me/6281353188593" target="_blank" class="btn btn-dark btn-sm w-100 py-2 d-flex align-items-center justify-content-center gap-2 rounded-2 fw-bold text-warning">
                            <i class="bi bi-whatsapp"></i> Chat WhatsApp: 0813 5318 8593
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= FORMULIR KEMITRAAN & PEMESANAN ================= -->
<section class="py-4 py-lg-5 bg-light" id="inquiry">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white p-3 p-md-4 rounded-3 border shadow-sm">
                    <div class="text-center mb-3">
                        <span class="ks-label">FORMULIR KEMITRAAN</span>
                        <h3 class="ks-heading" style="font-size: 1.6rem;">Hubungi Tim Kami</h3>
                        <p class="text-muted small mb-0">Lengkapi formulir di bawah ini. Pesan akan otomatis dirangkum dan diteruskan ke WhatsApp Admin (Ruteng / Labuan Bajo).</p>
                    </div>

                    <!-- Alert Notifikasi Berhasil -->
                    <div id="formSuccessAlert" class="alert alert-success d-none alert-dismissible fade show small" role="alert">
                        <i class="bi bi-check-circle-fill me-1"></i>
                        <strong>Pesan Terkirim ke WhatsApp!</strong> Terima kasih, data pemesanan Anda telah diteruskan ke WhatsApp Admin CV Karya Sejahtera.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form id="partnershipForm" novalidate>
                        <div class="row g-2 g-md-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small mb-1">Nama PIC <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="picName" placeholder="Nama Anda" required>
                                <div class="invalid-feedback small">Mohon masukkan nama Anda.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold small mb-1">Nama Usaha / Toko <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="storeName" placeholder="Nama Usaha atau Toko" required>
                                <div class="invalid-feedback small">Mohon masukkan nama usaha.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold small mb-1">Nomor WhatsApp Aktif <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phoneWa" placeholder="08xxxxxxxxxx" required>
                                <div class="invalid-feedback small">Mohon masukkan nomor WhatsApp aktif.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold small mb-1">Kota / Wilayah Usaha <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="userCity" placeholder="Ruteng / Labuan Bajo / Flores" required>
                                <div class="invalid-feedback small">Mohon isi kota lokasi usaha.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold small mb-1">Jenis Keperluan <span class="text-danger">*</span></label>
                                <select class="form-select" id="inquiryType" required>
                                    <option value="" selected disabled>Pilih Keperluan...</option>
                                    <option value="Pemesanan Partai Besar / Grosir Toko">Pemesanan Partai Besar / Grosir Toko</option>
                                    <option value="Pasokan Bahan Baku Bakery & Kuliner">Pasokan Bahan Baku Bakery & Kuliner</option>
                                    <option value="Pasokan Hotel & Restoran (Horeka Labuan Bajo)">Pasokan Hotel & Restoran (Horeka Labuan Bajo)</option>
                                    <option value="Penawaran Kemitraan Prinsipal Pabrik">Penawaran Kemitraan Prinsipal Pabrik</option>
                                </select>
                                <div class="invalid-feedback small">Pilih salah satu keperluan.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold small mb-1">Produk yang Diminati</label>
                                <select class="form-select" id="productTarget">
                                    <option value="Tepung Terigu & Minyak Goreng" selected>Tepung Terigu & Minyak Goreng</option>
                                    <option value="Tepung Terigu Bogasari (Segitiga Biru, Cakra, dll)">Tepung Terigu Bogasari (Segitiga Biru, Cakra, dll)</option>
                                    <option value="Minyak Goreng SIMP (Bimoli, Amanda, Palmia)">Minyak Goreng SIMP (Bimoli, Amanda, Palmia)</option>
                                    <option value="Semua Kategori Produk FMCG">Semua Kategori Produk FMCG</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold small mb-1">Pesan / Rincian Kebutuhan <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="messageContent" rows="3" placeholder="Tuliskan estimasi jumlah kebutuhan atau pertanyaan Anda..." required></textarea>
                                <div class="invalid-feedback small">Mohon tuliskan pesan kebutuhan Anda.</div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn-ks-yellow w-100 py-2 justify-content-center">
                                    <i class="bi bi-whatsapp"></i> Kirim Pesan Sekarang via WhatsApp
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= MODAL PILIH WHATSAPP ADMIN (RUTENG & BAJO) ================= -->
<div class="modal fade" id="waSelectionModal" tabindex="-1" aria-labelledby="waSelectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
            <div class="modal-header text-white" style="background-color: var(--ks-navy);">
                <div>
                    <h5 class="modal-title fw-bold" id="waSelectionModalLabel">
                        <i class="bi bi-whatsapp text-success me-2"></i> Kirim ke WhatsApp Admin
                    </h5>
                    <small class="text-white-50">Pilih cabang admin yang ingin Anda hubungi</small>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-secondary small mb-3">
                    Rangkuman permohonan Anda telah berhasil disusun. Silakan pilih admin tujuan untuk langsung membuka chat WhatsApp:
                </p>

                <!-- Tombol 1: Admin Ruteng -->
                <div class="mb-3">
                    <a href="#" id="btnSendWaRuteng" target="_blank" class="btn btn-success w-100 py-3 rounded-3 d-flex align-items-center justify-content-between shadow-sm wa-admin-send-btn">
                        <div class="d-flex align-items-center gap-3 text-start">
                            <i class="bi bi-whatsapp fs-3"></i>
                            <div>
                                <strong class="d-block text-white">Admin Ruteng (Kantor Pusat)</strong>
                                <small class="text-white-50">0813 3933 9900 (Wilayah Manggarai & Flores)</small>
                            </div>
                        </div>
                        <i class="bi bi-arrow-right-circle fs-4 text-white"></i>
                    </a>
                </div>

                <!-- Tombol 2: Admin Labuan Bajo -->
                <div class="mb-3">
                    <a href="#" id="btnSendWaBajo" target="_blank" class="btn btn-dark w-100 py-3 rounded-3 d-flex align-items-center justify-content-between shadow-sm border border-secondary border-opacity-25 wa-admin-send-btn" style="background-color: #0d2342;">
                        <div class="d-flex align-items-center gap-3 text-start">
                            <i class="bi bi-whatsapp fs-3 text-success"></i>
                            <div>
                                <strong class="d-block text-white">Admin Labuan Bajo (Depo)</strong>
                                <small class="text-white-50">0813 5318 8593 (Wilayah Bajo & Horeka)</small>
                            </div>
                        </div>
                        <i class="bi bi-arrow-right-circle fs-4 text-warning"></i>
                    </a>
                </div>

                <!-- Pratinjau Teks Rangkuman Chat -->
                <div class="bg-light p-3 rounded-3 border mt-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="small fw-bold text-dark"><i class="bi bi-chat-text-fill text-warning me-1"></i> Rangkuman Teks Pesan Otomatis:</span>
                        <span class="badge bg-success-subtle text-success small">Format Siap Kirim</span>
                    </div>
                    <div id="waMessagePreview" class="small text-secondary p-2 bg-white rounded border" style="max-height: 150px; overflow-y: auto; white-space: pre-wrap; font-size: 0.78rem; line-height: 1.5;"></div>
                </div>
            </div>
            <div class="modal-footer bg-light py-2 px-4 justify-content-between">
                <small class="text-muted"><i class="bi bi-check-circle-fill text-success me-1"></i> Tinggal klik kirim saat WhatsApp terbuka</small>
                <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Batal / Ubah</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
