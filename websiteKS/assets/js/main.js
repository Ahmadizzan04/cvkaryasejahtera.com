/**
 * CV Karya Sejahtera - Main JavaScript
 * Integrasi Swiper Slider & WhatsApp Form Router (Ruteng & Labuan Bajo)
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Inisialisasi Tooltip Bootstrap jika ada
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // 2. Swiper Slider: GALERI KAMI AKTIVITAS (10 Gambar)
    if (document.querySelector('.gallery-swiper')) {
        new Swiper('.gallery-swiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            speed: 600,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: '.gallery-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.gallery-next',
                prevEl: '.gallery-prev'
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 16
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }
        });
    }

    // 3. Swiper Slider: KABAR & ARTIKEL DISTRIBUSI (Beranda)
    if (document.querySelector('.article-swiper')) {
        new Swiper('.article-swiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            speed: 600,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: '.article-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.article-next',
                prevEl: '.article-prev'
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24
                }
            }
        });
    }

    // 4. Swiper Slider: ARTIKEL UNGGULAN (Halaman artikel.php)
    if (document.querySelector('.featured-swiper')) {
        new Swiper('.featured-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            speed: 700,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: '.featured-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.featured-next',
                prevEl: '.featured-prev'
            }
        });
    }

    // 5. Filter Kategori di Halaman Artikel / Produk
    const filterButtons = document.querySelectorAll('.product-filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    if (filterButtons.length > 0 && productItems.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                filterButtons.forEach(b => {
                    b.classList.remove('active', 'btn-primary');
                    b.classList.add('btn-outline-secondary');
                });

                this.classList.remove('btn-outline-secondary');
                this.classList.add('active', 'btn-primary');

                const filterValue = this.getAttribute('data-filter');

                productItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // 6. Formulir Kemitraan: Otomatis Rangkum Pesan & Kirim ke WhatsApp Admin (Ruteng / Bajo)
    const inquiryForm = document.getElementById('partnershipForm');
    const modalEl = document.getElementById('waSelectionModal');
    const btnSendWaRuteng = document.getElementById('btnSendWaRuteng');
    const btnSendWaBajo = document.getElementById('btnSendWaBajo');
    const waMessagePreview = document.getElementById('waMessagePreview');
    const alertSuccess = document.getElementById('formSuccessAlert');

    if (inquiryForm && modalEl) {
        const waModal = new bootstrap.Modal(modalEl);

        inquiryForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Validasi input form
            if (!this.checkValidity()) {
                e.stopPropagation();
                this.classList.add('was-validated');
                return;
            }

            // Ambil seluruh data dari kolom input
            const picName = document.getElementById('picName') ? document.getElementById('picName').value.trim() : '-';
            const storeName = document.getElementById('storeName') ? document.getElementById('storeName').value.trim() : '-';
            const phoneWa = document.getElementById('phoneWa') ? document.getElementById('phoneWa').value.trim() : '-';
            const userCity = document.getElementById('userCity') ? document.getElementById('userCity').value.trim() : '-';
            const inquiryType = document.getElementById('inquiryType') ? document.getElementById('inquiryType').value : '-';
            const productTarget = document.getElementById('productTarget') ? document.getElementById('productTarget').value : '-';
            const messageContent = document.getElementById('messageContent') ? document.getElementById('messageContent').value.trim() : '-';

            // Susun teks rangkuman chat WhatsApp rapi dengan format WhatsApp Markdown
            const waText = 
`*PERMOHONAN KEMITRAAN / PEMESANAN FMCG*
*CV KARYA SEJAHTERA*

Halo Admin CV Karya Sejahtera, saya ingin berkonsultasi mengenai pemesanan / kerjasama produk:

📋 *DATA PEMOHON:*
• *Nama PIC:* ${picName}
• *Nama Usaha / Toko:* ${storeName}
• *No. WhatsApp:* ${phoneWa}
• *Kota / Wilayah:* ${userCity}

📦 *KEBUTUHAN & PRODUK:*
• *Jenis Keperluan:* ${inquiryType}
• *Produk Diminati:* ${productTarget}

💬 *RINCIAN KEBUTUHAN / PESAN:*
"${messageContent}"

Mohon informasi harga, ketersediaan stok, dan jadwal pengiriman. Terima kasih!`;

            const encodedWaText = encodeURIComponent(waText);

            // Nomor Admin Resmi CV Karya Sejahtera
            // 1. Admin Ruteng (Kantor Pusat): 0857 3680 9087 -> +6285736809087
            // 2. Admin Labuan Bajo (Depo): 0813 5318 8593 -> +6281353188593
            const waUrlRuteng = `https://wa.me/6285736809087?text=${encodedWaText}`;
            const waUrlBajo = `https://wa.me/6281353188593?text=${encodedWaText}`;

            // Pasang link ke tombol pilihan di modal
            if (btnSendWaRuteng) btnSendWaRuteng.setAttribute('href', waUrlRuteng);
            if (btnSendWaBajo) btnSendWaBajo.setAttribute('href', waUrlBajo);

            // Tampilkan pratinjau teks di modal
            if (waMessagePreview) {
                waMessagePreview.textContent = waText;
            }

            // Buka Modal Pemilihan Admin
            waModal.show();
        });

        // Event saat tombol admin di modal diklik
        const waAdminButtons = modalEl.querySelectorAll('.wa-admin-send-btn');
        waAdminButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                setTimeout(() => {
                    waModal.hide();
                    inquiryForm.reset();
                    inquiryForm.classList.remove('was-validated');
                    if (alertSuccess) {
                        alertSuccess.classList.remove('d-none');
                        alertSuccess.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }, 400);
            });
        });
    }
});
