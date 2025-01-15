<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sistem Pelayanan DPKPP Kabupaten Tasikmalaya</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('asset/images/logos/favicon.png') }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="asset/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">dpkpp</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#umpeg">Umpeg</a></li>
                    <li><a href="#tanamanPangan">Tanaman Pangan</a></li>
                    <li><a href="#sarana">Sarana&Prasara </a></li>
                    <li><a href="#peternakan">Peternakan</a></li>
                    <li><a href="#ketahananPangan">Ketahanan Pangan</a></li>
                    <li><a href="#perikanan">Perikanan</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="login">Login</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Dinas Pertanian, Ketahanan Pangan dan Perikanan.</h1>
                        <p>Membantu Bupati melaksanan urusan pemerintahan bidang pertanian, bidang tanaman pangan,
                            bidang kebun dan horti, bidang peternakan dan kesehatan hewan, bidang ketahanan pangan,
                            bidang kelautan dan perikanan serta tugas pembantuan.</p>
                        <div class="d-flex">
                            {{-- <a href="form-kunjungan" class="btn-get-started me-2">Buku Tamu</a> --}}
                            <a href="form-survei" class="btn-get-started me-2">Survei Kepuasan Masyarakat</a>
                            <a href="form-pengaduan" class="btn-get-started">Pengaduan</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="asset/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="zoom-in">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="asset/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="asset/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="asset/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="asset/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="asset/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="asset/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="asset/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="asset/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Section Sub Bagian Umpeg-->
        <section id="umpeg" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Sub Bagian Umum dan Kepegawaian - Sekretariat</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="100">
                        <h5>JENIS PELAYANAN</h5>
                        <ul>
                            <li><i class="bi bi-1-circle"></i> <span>Penerimaan Surat Masuk</span></li>
                            <li><i class="bi bi-2-circle"></i> <span>Penyediaan Informasi Publik dan Konsultasi</span>
                            </li>
                            <li><i class="bi bi-3-circle"></i> <span>Fasilitasi Praktek Kerja Lapangan/Magang</span>
                            </li>
                            <li><i class="bi bi-4-circle"></i> <span>Fasilitasi Permohonan Data</span></li>
                            <li><i class="bi bi-5-circle"></i> <span>Permohonan Narasumber</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 why-us-img">
                        <img src="asset/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- End Section -->

        <!-- Section Service Delivery -->
        <section class="section light-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>SERVICE DELIVERY</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            01 Persyaratan
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerimaan Surat Masuk :</p>
                            <p class="ms-4">
                                Surat/Dokumen Lainnya
                            </p>
                            <p>2. Pelayanan Penyediaan Informasi Publik dan Konsultasi :</p>
                            <p class="ms-4">
                                Surat Permohonan
                            </p>
                            <p>3. Pelayanan Fasilitasi Praktek Kerja Lapangan/Magang :</p>
                            <ul class="ms-3">
                                <li>Surat Permohonan</li>
                                <li>Surat Izin Dinas Kesbangpol</li>
                            </ul>
                            <p>4. Pelayanan Fasilitasi Permohonan Data :</p>
                            <ul class="ms-3">
                                <li>Surat Permohonan</li>
                                <li>Surat Keterangan Penelitian/Tujuan Permohonan Data</li>
                            </ul>
                            <p>5. Pelayanan Permohonan Narasumber :</p>
                            <p class="ms-4">
                                Surat Permohonan
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            02 Prosedur
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerimaan Surat Masuk :</p>
                            <ul class="ms-3">
                                <li>Pengadministrasi umum menerima surat masuk/ berkas/ dokumen;</li>
                                <li>Pengadministrasi umum meregistrasi surat/ berkas/ dokumen kedalam buku agenda;</li>
                                <li>Pengadministrasi umum mensortir dan memisahkan surat berdasarkan kelompok surat;
                                </li>
                                <li>Pengadministrasi umum Menyampaikan surat masuk/ berkas/ dokumen kepada Sekretaris
                                    Dinas melalui Kasubag Umpeg;</li>
                                <li>Sekretaris Dinas Menerima, meneliti, mencatat dan mengklasifikasi serta melampirkan
                                    lembar disposisi;</li>
                                <li>Kepala Dinas Menerima, membaca dan mempelajari surat masuk/ berkas/ dokumen dan
                                    memberikan disposisi/ petunjuk dan kemudian mengembalikan kembali pada sekretaris
                                    Dinas;</li>
                                <li>Sekretaris Dinas Menerima, meneliti dan mencatat tindak lanjut/disposisi Kepala
                                    Dinas atas Surat masuk/berkas/dokumen, menyampaikan informasi informasi sesuai
                                    disposisi.</li>
                            </ul>
                            <p>2. Pelayanan Penyediaan Informasi Publik dan Konsultasi :</p>
                            <ul class="ms-3">
                                <li>Pengadministrasi umum menerima surat masuk dan melakukan registrasi;</li>
                                <li>Kepala Dinas memberikan disposisi ke bIdang terkait dengan informasi/ konsultasi
                                    yang dibutuhkan;</li>
                                <li>Kepala Dinas menugaskan Sekretaris dinas untuk meneruskan ke bidang terkait atau
                                    menugaskan Penyusun Bahan Informasi Publik apabila memerlukan jawaban secara
                                    tertulis;</li>
                                <li>Penyusun bahan informasi melakukan koordinasi dengan bidang terkait;</li>
                                <li>Kepala Bidang Terkait Membuat draft/ konsep untuk memberikan binformasi dan meminta
                                    persetujuan dari kepala bidang terkait;</li>
                                <li>Sekretaris Dinas Melaporkan dan meminta persetujuan Kepala Dinas sebagai laporan
                                    terkait permohonan informasi;</li>
                                <li>Penyusun Bahan Informasi berdasarkan izin persetujuan Dinas Mengupload/ memberikan
                                    jawaban dari hasil yang telah disepakati pihak terkait dan melaporkan kepada Kepala
                                    Dinas;</li>
                                <li>Mengarsipkan dokumen yang telah disepakati.</li>
                            </ul>
                            <p>3. Pelayanan Fasilitasi Praktek Kerja Lapangan/Magang :</p>
                            <ul class="ms-3">
                                <li>Pemohon menyerahlkan surat permohonan fasilitasi PKL/ magang ke pengadministrasi
                                    umum;</li>
                                <li>Pengadministrasi umum mencatat data surat ke daftar kendali surat masuk;</li>
                                <li>Pengadministrasi umum menyerahkan surat kepada Kepala Dinas untuk disposisi;</li>
                                <li>Disposisi Kepala Dinas diterima Sekretaris Dinas untuk ditindaklanjuti;</li>
                                <li>Disposisi Kepala Dinas yang telah diterima Sekretaris Dinas ditindaklanjuti oleh
                                    Kasubag.</li>
                            </ul>
                            <p>4. Pelayanan Fasilitasi Permohonan Data :</p>
                            <ul class="ms-3">
                                <li>Pengadministrasi umum menerima surat masuk permohonan data/ informasicdan melakukan
                                    registrasiSurat Permohonan</li>
                                <li>Kepala Dinas memberikan disposisi sesuai dengan kesesuaian bidang dan menandatangani
                                </li>
                                <li>Pemohon menyerahkan atau mengisi format isian yang disediakan oleh penyusun bahan
                                    informasi dan publikasi</li>
                                <li>Penyusun bahan informasi mengidentifikasi apakah termasuk kategori : Wajib diumumkan
                                    secara berkala, Wajib diumumkan serta merta, Wajib diumumkan setiap saat, Informasi
                                    yang dikecualikan</li>
                                <li>Penyusun bahan informasi melakukan koordinasi dengan bidang terkait dan mengumpulkan
                                    bahan guna menyediakan bahan informasi dan publikasi yang optimal</li>
                                <li>Penyusun bahan informasi membuat draft/ konsep untuk memberikan informasi dan
                                    meminta persetujuan dari kepala bidang terkait dan memaraf draft berkas bahan
                                    informasi publik</li>
                                <li>Melaporkan dan meminta persetujuan Kepala Dinas sebagai laporan terkait permohonan
                                    informasi yang diberikan kepada pemohon</li>
                                <li>Penyusun Bahan informasi dan publikasi menjawab terkait permohonan informasi data :
                                    Menjawab sesuai permintaan atau, Menolak dengan alasan prosedural</li>
                                <li>Pengadministrasi umum mengarsipkan dokumen yang telah disepakati.</li>
                            </ul>
                            <p>5. Pelayanan Permohonan Narasumber :</p>
                            <ul class="ms-3">
                                <li>Pemohon menyerahkan surat permohonan narasumber ke pengadministrasi umum</li>
                                <li>Pengadministrasi umum mencatat data surat permohonan narasumber pada Buku Daftar
                                    surat masuk</li>
                                <li>Pengadministrasi umum menyerahkan surat permohonan narasumber kepada Kepala Dinas
                                    untuk disposisi</li>
                                <li>permohonan narasumber diserahkan kepada Sekretaris Dinas untuk ditindaklanjuti</li>
                                <li>Disposisi diserahkan kepada Bidang yang bersangkutan dengan permohonan narasumber
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            03 Waktu Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerimaan Surat Masuk :</p>
                            <p class="ms-4">
                                23 Menit
                            </p>
                            <p>2. Pelayanan Penyediaan Informasi Publik dan Konsultasi :</p>
                            <p class="ms-4">
                                4 Hari 2 Jam 10 Menit
                            </p>
                            <p>3. Pelayanan Fasilitasi Praktek Kerja Lapangan/Magang :</p>
                            <p class="ms-4">
                                45 Menit
                            </p>
                            <p>4. Pelayanan Fasilitasi Permohonan Data :</p>
                            <p class="ms-4">
                                5 Hari 2 Jam 30 Menit
                            </p>
                            <p>5. Pelayanan Permohonan Narasumber :</p>
                            <p class="ms-4">
                                50 Menit
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            04 Biaya / Tarif
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerimaan Surat Masuk :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>2. Pelayanan Penyediaan Informasi Publik dan Konsultasi :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>3. Pelayanan Fasilitasi Praktek Kerja Lapangan/Magang :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>4. Pelayanan Fasilitasi Permohonan Data :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>5. Pelayanan Permohonan Narasumber :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            05 Produk Pelayanan
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerimaan Surat Masuk :</p>
                            <p class="ms-4">
                                Tanda Terima Surat
                            </p>
                            <p>2. Pelayanan Penyediaan Informasi Publik dan Konsultasi :</p>
                            <p class="ms-4">
                                Informasi/Hasil Konsultasi
                            </p>
                            <p>3. Pelayanan Fasilitasi Praktek Kerja Lapangan/Magang :</p>
                            <p class="ms-4">
                                Izin PKL/Magang
                            </p>
                            <p>4. Pelayanan Fasilitasi Permohonan Data :</p>
                            <p class="ms-4">
                                Data
                            </p>
                            <p>5. Pelayanan Permohonan Narasumber :</p>
                            <p class="ms-4">
                                Narasumber
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            06 Pengelolaan Pengaduan
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pengaduan, saran dan masukan dapat disampaikan secara tertulis melalui surat yang
                                diajukan kepada:</p>
                            <p class="ms-4">
                                Sekretaris Dinas Pertanian, Pangan dan Perikanan Kabupaten Tasikmalaya Jl. Sukapura VI
                                Bojongkoneng Singaparna 46415/ email: dispertapp@tasikmalayakab.go.id
                            </p>
                            <p>2. Menyampaikan pengaduan dan masukan dapat disampaikan secara langsung via Tlp. (0265)
                                330 163/ Fax: (0265) 330 163</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Manufacturing -->
        <section class="section dark-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>MANUFACTURING</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                            01 Dasar Hukum
                        </button>
                    </h2>
                    <div id="collapseOne1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerimaan Surat Masuk :</p>
                            <ul class="ms-3">
                                <li>Peraturan Bupati Nomor 71 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                    Pemerintahan Kabupaten Tasikmalaya;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 72 Tahun 2020 Tentang Pedoman Penyusunan Standar
                                    Operasional Prosedur Administrasi Pemerintahan;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian,Ketahanan Pangan, dan Perikanan.</li>
                            </ul>
                            <p>2. Pelayanan Penyediaan Informasi Publik dan Konsultasi :</p>
                            <ul class="ms-3">
                                <li>Peraturan Bupati Nomor 71 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                    Pemerintahan Kabupaten Tasikmalaya;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 72 Tahun 2020 Tentang Pedoman Penyusunan Standar
                                    Operasional Prosedur Administrasi Pemerintahan;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian,Ketahanan Pangan, dan Perikanan.</li>
                            </ul>
                            <p>3. Pelayanan Fasilitasi Praktek Kerja Lapangan/Magang :</p>
                            <ul class="ms-3">
                                <li>Peraturan Bupati Nomor 71 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                    Pemerintahan Kabupaten Tasikmalaya;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 72 Tahun 2020 Tentang Pedoman Penyusunan Standar
                                    Operasional Prosedur Administrasi Pemerintahan;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian,Ketahanan Pangan, dan Perikanan.</li>
                            </ul>
                            <p>4. Pelayanan Fasilitasi Permohonan Data :</p>
                            <ul class="ms-3">
                                <li>Peraturan Bupati Nomor 71 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                    Pemerintahan Kabupaten Tasikmalaya;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 72 Tahun 2020 Tentang Pedoman Penyusunan Standar
                                    Operasional Prosedur Administrasi Pemerintahan;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian,Ketahanan Pangan, dan Perikanan.</li>
                            </ul>
                            <p>5. Pelayanan Permohonan Narasumber :</p>
                            <ul class="ms-3">
                                <li>Peraturan Bupati Nomor 71 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                    Pemerintahan Kabupaten Tasikmalaya;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 72 Tahun 2020 Tentang Pedoman Penyusunan Standar
                                    Operasional Prosedur Administrasi Pemerintahan;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian,Ketahanan Pangan, dan Perikanan.</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                            02 Sarana dan Prasarana atau Fasilitas
                        </button>
                    </h2>
                    <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ruang Tamu ber-AC, kursi dan meja Tamu</p>
                            <p>2. Komputer dengan akses internet</p>
                            <p>3. Printer</p>
                            <p>4. Berkas</p>
                            <p>5. Handphone</p>
                            <p>6. ATK</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                            03 Kompetensi Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Mengetahui dan memahami tugas dan fungsi pengelolaan kepegawaian</p>
                            <p>2. Kemampuan berkoordinasi dan berkomunikasi dengan baik dengan init/ instansi/
                                stakehoder terkait</p>
                            <p>3. Menguasai komputer, aplikasi Office dan internet</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                            04 Pengawasan Internal
                        </button>
                    </h2>
                    <div id="collapseFour1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Atasan langsung</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive1" aria-expanded="false" aria-controls="collapseFive1">
                            05 jumlah Pelaksaan
                        </button>
                    </h2>
                    <div id="collapseFive1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerimaan Surat Masuk :</p>
                            <p class="ms-4">
                                3 Orang
                            </p>
                            <p>2. Pelayanan Penyediaan Informasi Publik dan Konsultasi :</p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                            <p>3. Pelayanan Fasilitasi Praktek Kerja Lapangan/Magang :</p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                            <p>4. Pelayanan Fasilitasi Permohonan Data :</p>
                            <p class="ms-4">
                                3 Orang
                            </p>
                            <p>5. Pelayanan Permohonan Narasumber :</p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix1" aria-expanded="false" aria-controls="collapseSix1">
                            06 Jaminan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSix1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Petugas pelayanan mempunyai kompetensi di bidang pelayanan publik dan bekerja sesuai
                                dengan ketentuan peraturan perundang-undangan</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven1" aria-expanded="false" aria-controls="collapseSeven1">
                            07 Jaminan Keselamatan dan Keselamatan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSeven1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ketelitian dalam melakukan verifikasi dan ketepatan waktu penyelesaian dokumen</p>
                            <p>2. Tersedianya satuan Pengamanan/Security</p>
                            <p>3. Tersedianya alat Pemadam Kebakaran</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight1" aria-expanded="false" aria-controls="collapseEight1">
                            08 Evaluasi Kinerja Pelaksanaan
                        </button>
                    </h2>
                    <div id="collapseEight1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Secara berkala dilaporkan kepada atasan dan menyampaikan laporan persemester</p>
                            <p>2. Dilakukannya survey kepuasan masyarakat</p>
                        </div>
                    </div>
                </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Bidang Tanaman Pangan-->
        <section id="tanamanPangan" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bidang Tanaman Pangan, Hortikultura dan Perkebunan</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="100">
                        <h5>JENIS PELAYANAN</h5>
                        <ul>
                            <li><i class="bi bi-1-circle"></i> <span>Pelayanan Permohonan Rekomendasi Proposal Bantuan
                                    Tanaman Pangan Hortikultura dan Perkebunan</span></li>
                            <li><i class="bi bi-2-circle"></i> <span>Pelayanan Permohonan Bantuan Pestisda untuk
                                    Pengendalian Organismen Pengganggu Tanaman</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 why-us-img">
                        <img src="asset/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- End Section -->

        <!-- Section Service Delivery -->
        <section class="section light-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>SERVICE DELIVERY</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                            01 Persyaratan
                        </button>
                    </h2>
                    <div id="collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Permohonan Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan
                                Perkebunan :</p>
                            <p class="ms-4">
                                Surat Rekomendasi/Pengantar dari petugas BPP kecataman dilengkapi data pendukung
                            </p>
                            <p>2. Pelayanan Permohonan Bantuan Pestisida untuk Pengendalian Organismen Pengganggu
                                Tanaman :</p>
                            <p class="ms-4">
                                Surat Rekomendasi/Pengantar dari petugas POPT kecataman dilengkapi data pendukung
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                            02 Prosedur
                        </button>
                    </h2>
                    <div id="collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Permohonan Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan
                                Perkebunan :</p>
                            <ul class="ms-3">
                                <li>Kepala Bidang Tanaman Pangan Hortikultura dan Perkebunan memerintahkan kepada
                                    jabatan fungsional untuk mensosialisasikan, menginventarisir,
                                    mengumpulkan/menghimpun data usulan permohonan proposal bidang TPHP;</li>
                                <li>Fungsional Penyetaraan Menyiapkan bahan/pedoman/POK kegiatan TPHP yang direncanakan;
                                </li>
                                <li>Melakukan Sosialisasi perencanaan program kegiatan TPHP sesuai dengan pedoman/POK
                                    pusat dan provinsi kepada BPP. Organisasi Kemasyarakatan, Kelembagaan lainnya yang
                                    Terkait;</li>
                                <li>Fungsional Penyetaraan Menghimpun/mengumpulkan usulan kegiatan TPHP;</li>
                                <li>Kepala Bidang Mengoreksi bahan/berkas penyiapan usulan kegiatan TPHP;</li>
                                <li>Kepala Dinas Mengoreksi bahan/berkas penyiapan usulan kegiatan TPHP untuk bahan
                                    rekomendasi;</li>
                                <li>Kepala Bidang menugaskan Fungsional Penyetaraan Mengolah dan menggandakan serta
                                    mengarsipkan bahan informasi dan atau rekomendasi;</li>
                                <li>Menyampaikan bahan informasi dan atau rekomendasi pada BPP. Organisasi
                                    Kemasyarakatan, Kelembagaan lainnya yang Terkait.</li>
                            </ul>
                            <p>2. Pelayanan Permohonan Bantuan Pestisida untuk Pengendalian Organismen Pengganggu
                                Tanaman :</p>
                            <ul class="ms-3">
                                <li>Kepala Bidang Tanaman Pangan Hortikultura dan Perkebunan memerintahkan kepada
                                    jabatan fungsional untuk menginventarisir data usulan bantuan pestisida untuk
                                    pengendalian organisme pengganggu tanaman;</li>
                                <li>Fungsional Penyetaraan Menghimpun, mengolah dan menganalisa data usulan bantuan
                                    pestisida untuk pengendalian organisme pengganggu tanaman;</li>
                                <li>Kepala Bidang Mengoreksi data jenis dan jumlah bantuan OPT sesuai di usulkan; </li>
                                <li>Kepala Dinas Mengoreksi data jenis dan jumlah bantuan OPT sesuai di usulkan; </li>
                                <li>Kepala Bidang dengan menugaskan Fungsionaln Penyetaraan Menyiapkan bahan/bantuan
                                    penyaluran OPT sesuai rekomendasi;</li>
                                <li>BPP./POPT/Poktan Menyampaikan bantuan OPT sesuai usulan.</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                            03 Waktu Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Permohonan Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan
                                Perkebunan :</p>
                            <p class="ms-4">
                                7 Jam 15 Menit
                            </p>
                            <p>2. Pelayanan Permohonan Bantuan Pestisida untuk Pengendalian Organismen Pengganggu
                                Tanaman :</p>
                            <p class="ms-4">
                                3 Jam 55 Menit
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                            04 Biaya / Tarif
                        </button>
                    </h2>
                    <div id="collapseFour2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Permohonan Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan
                                Perkebunan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>2. Pelayanan Permohonan Bantuan Pestisida untuk Pengendalian Organismen Pengganggu
                                Tanaman :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">
                            05 Produk Pelayanan
                        </button>
                    </h2>
                    <div id="collapseFive2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Permohonan Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan
                                Perkebunan :</p>
                            <p class="ms-4">
                                Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan Perke
                            </p>
                            <p>2. Pelayanan Permohonan Bantuan Pestisida untuk Pengendalian Organismen Pengganggu
                                Tanaman :</p>
                            <p class="ms-4">
                                Bantuan Pestisida
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix2" aria-expanded="false" aria-controls="collapseSix2">
                            06 Pengelolaan Pengaduan
                        </button>
                    </h2>
                    <div id="collapseSix2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pengaduan, saran dan masukan dapat disampaikan secara tertulis melalui surat yang
                                diajukan kepada:</p>
                            <p class="ms-4">
                                Sekretaris Dinas Pertanian, Pangan dan Perikanan Kabupaten Tasikmalaya Jl. Sukapura VI
                                Bojongkoneng Singaparna 46415/ email: dispertapp@tasikmalayakab.go.id
                            </p>
                            <p>2. Menyampaikan pengaduan dan masukan dapat disampaikan secara langsung via Tlp. (0265)
                                330 163/ Fax: (0265) 330 163</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Manufacturing -->
        <section class="section dark-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>MANUFACTURING</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                            01 Dasar Hukum
                        </button>
                    </h2>
                    <div id="collapseOne3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Permohonan Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan
                                Perkebunan :</p>
                            <ul class="ms-3">
                                <li>Undang Undang Nomor 12 Tahun 1992 Tentang Sistem Budidaya Tanaman</li>
                                <li>Undang-undang Republik Indonesia Indonesia Nomor 7 Tahun 1996 Tentang Pangan</li>
                                <li>Undang Undang Nomor 41 Tahun 2009 Tentang Perlindungan Lahan Pertanian Pangan
                                    Berkelanjutan</li>
                                <li>Undang Undang Nomor 13 Tahun 2010 Tentang Hortikultura</li>
                                <li>Peraturan Pemerintah Republik Indonesia Nomor 28 Tahun 2004 Tentang Keamanan, Mutu
                                    Dan Gizi Pangan</li>
                                <li>Peraturan Menteri Pertanian Nomor 50/Permentan/ OT.140/8/2012 tentang Pedoman
                                    Pengembangan Kawasan Pertanian</li>
                                <li>Peraturan Menteri Pertanian Nomor 50/Permentan/ OT.140/8/2012 tentang Pedoman
                                    Pengembangan Kawasan Pertanian</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, Ketahanan Pangan dan Perikanan Kabupaten Tasikmalaya</li>
                            </ul>
                            <p>2. Pelayanan Permohonan Bantuan Pestisida untuk Pengendalian Organismen Pengganggu
                                Tanaman :</p>
                            <ul class="ms-3">
                                <li>Undang Undang Nomor 12 Tahun 1992 Tentang Sistem Budidaya Tanaman</li>
                                <li>Undang-undang Republik Indonesia Indonesia Nomor 7 Tahun 1996 Tentang Pangan</li>
                                <li>Undang Undang Nomor 41 Tahun 2009 Tentang Perlindungan Lahan Pertanian Pangan
                                    Berkelanjutan</li>
                                <li>Undang Undang Nomor 13 Tahun 2010 Tentang Hortikultura</li>
                                <li>Peraturan Pemerintah Republik Indonesia Nomor 28 Tahun 2004 Tentang Keamanan, Mutu
                                    Dan Gizi Pangan</li>
                                <li>Peraturan Menteri Pertanian Nomor 50/Permentan/ OT.140/8/2012 tentang Pedoman
                                    Pengembangan Kawasan Pertanian</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, Ketahanan Pangan, dan Perikanan Kabupaten Tasikmalaya</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                            02 Sarana dan Prasarana atau Fasilitas
                        </button>
                    </h2>
                    <div id="collapseTwo3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ruang Tamu ber-AC, kursi dan meja Tamu</p>
                            <p>2. Komputer dengan akses internet</p>
                            <p>3. Printer</p>
                            <p>4. Berkas</p>
                            <p>5. Handphone</p>
                            <p>6. ATK</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                            03 Kompetensi Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Mengetahui dan memahami tugas dan fungsi pengelolaan kepegawaian</p>
                            <p>2. Kemampuan berkoordinasi dan berkomunikasi dengan baik dengan init/ instansi/
                                stakehoder terkait</p>
                            <p>3. Menguasai komputer, aplikasi Office dan internet</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour3" aria-expanded="false" aria-controls="collapseFour3">
                            04 Pengawasan Internal
                        </button>
                    </h2>
                    <div id="collapseFour3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Atasan langsung</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive3" aria-expanded="false" aria-controls="collapseFive3">
                            05 jumplah Pelaksaan
                        </button>
                    </h2>
                    <div id="collapseFive3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Permohonan Rekomendasi Proposal Bantuan Tanaman Pangan Hortikultura dan
                                Perkebunan :</p>
                            <p class="ms-4">
                                3 Orang
                            </p>
                            <p>2. Pelayanan Permohonan Bantuan Pestisida untuk Pengendalian Organismen Pengganggu
                                Tanaman :</p>
                            <p class="ms-4">
                                3 Orang
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix3" aria-expanded="false" aria-controls="collapseSix3">
                            06 Jaminan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSix3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="ms4">Petugas pelayanan mempunyai kompetensi di bidang pelayanan publik dan
                                bekerja sesuai dengan ketentuan peraturan perundang-undangan</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven3" aria-expanded="false" aria-controls="collapseSeven3">
                            07 Jaminan Keselamatan dan Keselamatan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSeven3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ketelitian dalam melakukan verifikasi dan ketepatan waktu penyelesaian dokumen</p>
                            <p>2. Tersedianya satuan Pengamanan/Security</p>
                            <p>3. Tersedianya alat Pemadam Kebakaran</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight3" aria-expanded="false" aria-controls="collapseEight3">
                            08 Evaluasi Kinerja Pelaksanaan
                        </button>
                    </h2>
                    <div id="collapseEight3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Secara berkala dilaporkan kepada atasan dan menyampaikan laporan persemester</p>
                            <p>2. Dilakukannya survey kepuasan masyarakat</p>
                        </div>
                    </div>
                </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Bidang Sarana&Prasarana-->
        <section id="sarana" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bidang Sarana dan Prasarana Pertanian</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="100">
                        <h5>JENIS PELAYANAN</h5>
                        <ul>
                            <li><i class="bi bi-1-circle"></i> <span>Pelayanan Surat Permohonan Kegiatan Lahan dan
                                    Sumber Air</span></li>
                            <li><i class="bi bi-2-circle"></i> <span>Pelayanan Usulan Permohonan Alat dan Mesin
                                    Pertanian </span></li>
                            <li><i class="bi bi-3-circle"></i> <span>Pelayanan Kajian Teknis Pemanfaatan Lahan</span>
                            </li>
                            <li><i class="bi bi-4-circle"></i> <span>Pelayanan Surat Pengantar Registrasi Lahan
                                    Pertanian</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 why-us-img">
                        <img src="asset/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- End Section -->

        <!-- Section Service Delivery -->
        <section class="section light-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>SERVICE DELIVERY</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                            01 Persyaratan
                        </button>
                    </h2>
                    <div id="collapseOne4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Surat Permohonan Kegiatan Lahan dan Sumber Air :</p>
                            <p class="ms-4">
                                Surat Usulan dan Proposal
                            </p>
                            <p>2. Pelayanan Usulan Permohonan Alat dan Mesin Pertanian :</p>
                            <p class="ms-4">
                                Surat Usulan dan Proposal
                            </p>
                            <p>3. Pelayanan Kajian Teknis Pemanfaatan Lahan :</p>
                            <p class="ms-4">
                                Surat Usulan dan Proposal
                            </p>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian :</p>
                            <ul class="ms-3">
                                <li>Surat Usulan Pengantar registrasi Lahan Pertanian</li>
                                <li>Surat Rekomendasi/Pengantar dari Petugas BPP kecamatan dilengkapi data pendukung
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                            02 Prosedur
                        </button>
                    </h2>
                    <div id="collapseTwo4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Surat Permohonan Kegiatan Lahan dan Sumber Air :</p>
                            <ul class="ms-3">
                                <li>Kepala Bidang Kepala Bidang Prasarana Dan Sarana Pertanian memerintahkan kepada
                                    jabatan fungsional untuk mensosialisasikan, menginventarisir dan
                                    mengumpulkan/menghimpun data-data usulan proposal bidang PSP</li>
                                <li>Pelaksana Bidang menyiapkan bahan/pedoman/POK kegiatan PSP yang direncanakan</li>
                                <li>Fungsional Penyetaraan Sosialisasi perencanaan program kegiatan PSP sesuai dengan
                                    pedoman/POK pusat dan provinsi</li>
                                <li>Pelaksana Bidang menghimpun/mengumpulkan usulan-usulan kegiatan PSP</li>
                                <li>Kepala Bidang Mengoreksi bahan/berkas usulan kegiatan</li>
                                <li>Fungsional Penyetaraan Mengoreksi bahan/berkas usulan kegiatan untuk bahan
                                    rekomendasi</li>
                                <li>Pelaksana Bidang Mengolah dan menggandakan serta mengarsipkan bahan informasi dan
                                    atau rekomendasi</li>
                                <li>Pelaksana Bidang Menyampaikan bahan informasi dan atau rekomendasi</li>
                            </ul>
                            <p>2. Pelayanan Usulan Permohonan Alat dan Mesin Pertanian :</p>
                            <ul class="ms-3">
                                <li>Sekretariat Menerima permohonan alat dan mesin pertanian kepada Bupati cq. Dinas
                                    Pertanian, Ketahanan Pangan dan Perikanan</li>
                                <li>Pelaksana Bidang melakukan pemeriksaan kelengkapan permohonan alat dan mesin
                                    pertanian</li>
                                <li>Fungsional Penyetaraan melaksanakan Verifikasi dan Identifikasi kelengkapan
                                    permohonan</li>
                                <li>Kepala Dinas Memerintahkan identifikasi dan verifikasi serta survey lapangan untuk
                                    menentukan kelayakan/ kecocokan lokasi sesuai alat dan mesin pertanian yang diajukan
                                </li>
                                <li>Usulan/ permohonan dikomposit untuk diteruskan ke Kemntrian Pertanian cq. Ditjen PSP
                                </li>
                                <li>Kepala Bidang melakukan identfikasi dan verifikasi ulang sesuai dengan jumlah
                                    alokasi yang diberikan oleh pusat</li>
                                <li>Kepala Dinas Melaporkan hasil identifikasi dan verifikasi kelayakan penerimaan
                                    bantuan kepada kepala Dinas</li>
                                <li>Pemohon Menerima bantuan berupa alat dan mesi pertanian</li>
                                <li>Fungsional Penyetaraan Monitoring pemanfaatan dan penggunaan bantuan berupa unit
                                    alat dan mesin pertanian</li>
                            </ul>
                            <p>3. Pelayanan Kajian Teknis Pemanfaatan Lahan :</p>
                            <ul class="ms-3">
                                <li>Kepala Bidang Kepala Bidang Prasarana Dan Sarana Pertanian memerintahkan kepada
                                    jabatan fungsional untuk menginventarisir dan mengumpulkan/menghimpun data-data
                                    usulan kajian teknis lahan bidang PSP</li>
                                <li>Fungsional Penyetaraan Menghimpun/mengumpulkan data-data usulan lahan</li>
                                <li>Kepala Bidang Memverifikasi bahan/berkas usulan kegiatan</li>
                                <li>Pelaksana pada bidang Mengolah dan menggandakan serta mengarsipkan bahan kajian
                                    lahan</li>
                                <li>Fungsional Penyetaraan Menyampaikan bahan dan Data informasi kegiatan</li>
                                <li>Fungsional Penyetaraan Melakukan Survai Lokasi</li>
                                <li>Fungsional Penyetaraan menyusun laporan hasil survey sebagai bahan kajia teknis
                                    pemanfaatan lahan</li>
                                <li>Kajian Teknis Pemanfaatan Lahan tersusun</li>
                            </ul>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian :Pelayanan Fasilitasi Permohonan
                                Data :</p>
                            <ul class="ms-3">
                                <li>Kepala Bidang Tanaman Pangan Hortikultura dan Perkebunan memerintahkan kepada
                                    jabatan fungsional untuk mengarahkan terkait pelaksanaan registrasi lahan komoditas
                                    unggulan hortikultura yang harus di tempuh melalui aplikasi registrasi lahan kepada
                                    BPP/Stakeholder terkait;</li>
                                <li>Fungsional Penyetaraan Menyiapakan petunjuk/pedoman tentang persyaratan registrasi
                                    lahan dan aplikasi nya;</li>
                                <li>BPP/Poktan Menyiapkan berkas/dokumen data dari registrasi lahan yang diusulkan;</li>
                                <li>Fungsional Penyetaraan Mengumpulkan bahan/berkas usulan rekomendasi registrasi
                                    lahan;</li>
                                <li>Kepala Bidang Mengoreksi berkas/dokumen data dari registrasi lahan yang diusulkan;
                                </li>
                                <li>Kepala Dinas Merekomendasi bahan berkas registrasi lahan untuk ditindaklanjuti;</li>
                                <li>Kepala Bidang dengan menugaskan Fungsional Penyetaraan Mengupdate data registrasi
                                    lahan;</li>
                                <li>BPP/Poktan Menyampaikan bahan informasi dan atau rekomendasi;</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                            03 Waktu Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Usulan Permohonan Kegiatan Lahan dan Sumber Air :</p>
                            <p class="ms-4">
                                3 Bulan
                            </p>
                            <p>2. Pelayanan Usulan Permohonan Alat dan Mesin Pertanian :</p>
                            <p class="ms-4">
                                2 Hari 1 Jam 25 Menit
                            </p>
                            <p>3. Pelayanan Kajian Teknis Pemanfaatan Lahan :</p>
                            <p class="ms-4">
                                1 Bulan
                            </p>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian :</p>
                            <p class="ms-4">
                                5 Jam 45 Menit
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                            04 Biaya / Tarif
                        </button>
                    </h2>
                    <div id="collapseFour4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Usulan Permohonan Kegiatan Lahan dan Sumber Air :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>2. Pelayanan Usulan Permohonan Alat dan Mesin :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>3. Pelayanan Kajian Teknis Pemanfaatan Lahan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive4" aria-expanded="false" aria-controls="collapseFive4">
                            05 Produk Pelayanan
                        </button>
                    </h2>
                    <div id="collapseFive4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Usulan Permohonan Kegiatan Lahan dan Sumber Air :</p>
                            <p class="ms-4">
                                Kegiatan Lahan dan Sumber Air
                            </p>
                            <p>2. Pelayanan Usulan Permohonan Alat dan Mesin Pertanian</p>
                            <ul class="ms-3">
                                <li>BASTB</li>
                                <li>Fakta Integritas</li>
                                <li>NPHD</li>
                                <li>Dokumentasi</li>
                            </ul>
                            <p>3. Pelayanan Kajian Teknis Pemanfaatan Lahan :</p>
                            <p class="ms-4">
                                Kajian Teknis Pemanfaatan Lahan
                            </p>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian :</p>
                            <p class="ms-4">
                                Surat Pengantar Registrasi Lahan (Rekomendasi/Informasi)
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix4" aria-expanded="false" aria-controls="collapseSix4">
                            06 Pengelolaan Pengaduan
                        </button>
                    </h2>
                    <div id="collapseSix4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pengaduan, saran dan masukan dapat disampaikan secara tertulis melalui surat yang
                                diajukan kepada:</p>
                            <p class="ms-4">
                                Sekretaris Dinas Pertanian, Pangan dan Perikanan Kabupaten Tasikmalaya Jl. Sukapura VI
                                Bojongkoneng Singaparna 46415/ email: dispertapp@tasikmalayakab.go.id</li>
                            </p>
                            <p>2. Menyampaikan pengaduan dan masukan dapat disampaikan secara langsung via Tlp. (0265)
                                330 163/ Fax: (0265) 330 163</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Manufacturing -->
        <section class="section dark-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>MANUFACTURING</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                            01 Dasar Hukum
                        </button>
                    </h2>
                    <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Peraturan Bupati Nomor 71 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                Pemerintahan Kabupaten Tasikmalaya;</p>
                            <p>2. Peraturan Bupati Tasikmalaya Nomor 72 Tahun 2020 Tentang Pedoman Penyusunan Standar
                                Operasional Prosedur Administrasi Pemerintahan;</p>
                            <p>3. Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                Pertanian,Ketahanan Pangan, dan Perikanan.</p>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian :</p>
                            <ul class="ms-3">
                                <li>Undang Undang Nomor 12 Tahun 1992 Tentang Sistem Budidaya Tanaman</li>
                                <li>Undang-undang Republik Indonesia Indonesia Nomor 7 Tahun 1996 Tentang Pangan</li>
                                <li>Undang Undang Nomor 41 Tahun 2009 Tentang Perlindungan Lahan Pertanian Pangan
                                    Berkelanjutan</li>
                                <li>Undang Undang Nomor 13 Tahun 2010 Tentang Hortikultura</li>
                                <li>Peraturan Pemerintah Republik Indonesia Nomor 28 Tahun 2004 Tentang Keamanan, Mutu
                                    Dan Gizi Pangan</li>
                                <li>Peraturan Menteri Pertanian Nomor 50/Permentan /OT.140/8/2012 tentang Pedoman
                                    Pengembangan Kawasan Pertanian</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                            02 Sarana dan Prasarana atau Fasilitas
                        </button>
                    </h2>
                    <div id="collapseTwo5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ruang Tamu ber-AC, kursi dan meja Tamu</p>
                            <p>2. Komputer dengan akses internet</p>
                            <p>3. Printer</p>
                            <p>4. Berkas</p>
                            <p>5. Handphone</p>
                            <p>6. ATK</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                            03 Kompetensi Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Mengetahui dan memahami tugas dan fungsi pengelolaan kepegawaian</p>
                            <p>2. Kemampuan berkoordinasi dan berkomunikasi dengan baik dengan init/ instansi/
                                stakehoder terkait</p>
                            <p>3. Menguasai komputer, aplikasi Office dan internet</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour5" aria-expanded="false" aria-controls="collapsefour5">
                            04 Pengawasan Internal
                        </button>
                    </h2>
                    <div id="collapseFour5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Atasan langsung</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                            05 jumplah Pelaksaan
                        </button>
                    </h2>
                    <div id="collapseFive5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Usulan Permohonan Kegiatan Lahan dan Sumber Air :</p>
                            <p class="ms-4">
                                3 Orang
                            </p>
                            <p>2. Pelayanan Usulan Permohonan Alat dan Mesin Pertanian :</p>
                            <p class="ms-4">
                                6 Orang
                            </p>
                            <p>3. Pelayanan Kajian Teknis Pemanfaatan Lahan :</p>
                            <p class="ms-4">
                                3 Orang
                            </p>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian:</p>
                            <p class="ms-4">
                                3 Orang
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix5" aria-expanded="false" aria-controls="collapseSix5">
                            06 Jaminan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSix5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Petugas pelayanan mempunyai kompetensi di bidang pelayanan publik dan bekerja sesuai
                                dengan ketentuan peraturan perundang-undangan</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven5" aria-expanded="false" aria-controls="collapseSeven5">
                            07 Jaminan Keselamatan dan Keselamatan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSeven5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ketelitian dalam melakukan verifikasi dan ketepatan waktu penyelesaian dokumen</p>
                            <p>2. Tersedianya satuan Pengamanan/Security</p>
                            <p>3. Tersedianya alat Pemadam Kebakaran</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight5" aria-expanded="false" aria-controls="collapseEight5">
                            08 Evaluasi Kinerja Pelaksanaan
                        </button>
                    </h2>
                    <div id="collapseEight5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Secara berkala dilaporkan kepada atasan dan menyampaikan laporan persemester</p>
                            <p>2. Dilakukannya survey kepuasan masyarakat</p>
                        </div>
                    </div>
                </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Bidang Peternakan-->
        <section id="peternakan" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bidang Peternakan dan Kesehatan Hewan</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="100">
                        <h5>JENIS PELAYANAN</h5>
                        <ul>
                            <li><i class="bi bi-1-circle"></i> <span>Pelayanan Penerbitan Rekomendasi Nomor Kontrol
                                    Veteriner</span></li>
                            <li><i class="bi bi-2-circle"></i> <span>Pelayanan Penerbitan Surat kesehatan Produk
                                    Hewan</span></li>
                            <li><i class="bi bi-3-circle"></i> <span>Pelayanan Penerbitan Rekomendasi Tenkis
                                    Penguluaran/Pemasukan Produk Hewan</span></li>
                            <li><i class="bi bi-4-circle"></i> <span>Pelayanan Penerbitan Rekomendasi Bantuan
                                    Ternak</span></li>
                            <li><i class="bi bi-5-circle"></i> <span>Pelayanan Penerbitan Rekomendasi Praktek Dokter
                                    Hewan/Klinik Hewan</span></li>
                            <li><i class="bi bi-6-circle"></i> <span>Pelayanan Penerbitan Rekomendasi Distributor Obat
                                    Hewan</span></li>
                            <li><i class="bi bi-7-circle"></i> <span>Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha
                                    Budidaya Ternak</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 why-us-img">
                        <img src="asset/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- End Section -->

        <!-- Section Service Delivery -->
        <section class="section light-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>SERVICE DELIVERY</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                            01 Persyaratan
                        </button>
                    </h2>
                    <div id="collapseOne6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner :</p>
                            <p class="ms-4">
                                KTP, SIUP, NPWP, HO, Surat Permohonan
                            </p>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <p class="ms-4">
                                KTP, Surat Permohonan
                            </p>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan :</p>
                            <p class="ms-4">
                                Surat Permohonan, SIUP, HO
                            </p>
                            <p>4. Pelayanan Penerbitan Rekomendasi Bantuan Ternak :</p>
                            <p class="ms-4">
                                Surat Permohonan Rekomendasi dan Proposal
                            </p>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <p class="ms-4">
                                KTP, STRV, Serkom drh, Kartu Tanda Anggota PDHI, Rekomendasi PDHI
                            </p>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <p class="ms-4">
                                KTP, NPWP SIUP, TDP, HO, HGB, Izin lokasi, saran a yang dimiliki, Rekomendasi Asosiasi
                                Obat Hewan Indonesia
                            </p>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak :</p>
                            <p class="ms-4">
                                Surat Permohonan Izin/Rekomendasi Usaha Budidaya Ternak
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                            02 Prosedur
                        </button>
                    </h2>
                    <div id="collapseTwo6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner :</p>
                            <ul class="ms-3">
                                <li>Pemohon mengajukan Rekomendasi NKV ditujukan ke Kepala Dinas Pertanian, Ketahanan
                                    Pangan dan Perikanan melalui Petugas Sub Bagian Umum Kepegawaian (Sekretariat)</li>
                                <li>Petugas Sub Bag. Umpeg mengagendakan surat permohonan dan meneruskannya kepada
                                    Kepala Dinas</li>
                                <li>Kepala Dinas memerintahkan Kepala Bidang Peternakan dan Kesehatan Hewan untuk
                                    menindaklanjuti permohonan</li>
                                <li>Kepala Bidang memerintahkan Fungsional Penyetaraan Keswan dan Kesmavet untuk
                                    menindaklanjuti surat permohonan</li>
                                <li>Fungsional Penyetaraan menugaskan Pengawas Sanitasi Usaha Peternakan dan Kesmavet
                                    untuk memeriksa kelengkapan administrasi</li>
                                <li>Pengawas Sanitasi Usaha Peternakan dan Kesmavet memeriksa kelengkapan administrasi,
                                    bila tidak lengkap dikembalikan kepada pemohon, bila sudah lengkap diteruskan kepada
                                    Fungsional Penyetaraan</li>
                                <li>Fungsional Penyetaraan bersama tim melakukan survey lokasi, bila belum memenuhi
                                    persyaratan permohonan ditolak dengan saran perbaikan, bila memenuhi persyaratan
                                    teknis ditindaklanjuti dengan membuat draft rekomendasi</li>
                                <li>Pengawas Sanitasi Usaha Peternakan dan Kesmavet mengetik draft rekomendasi dan
                                    meneruskan ke Fungsional Penyetaraan</li>
                                <li>Fungsional Penyetaraan memeriksa draft, jika menyetujui memaraf dan meneruskan ke
                                    Kabid.</li>
                                <li>Kabid memeriksa draft jika menyetujui memaraf dan meneruskannya ke Kepala Dinas</li>
                                <li>Kepala Dinas memelaah, jika menyetujui menandatangani rekomendasi yang ditujukan ke
                                    Kepala Dinas Ketahanan Pangan dan Peternakan Prov. Jabar</li>
                                <li>Petugas Sub Bag Umpeg mengagendakan surat rekomendasi (penomoran surat keluar)</li>
                                <li>Pelaksana mengarsipkan surat rekomendasi</li>
                                <li>Pemohon memperoleh tembusan surat rekomendasi</li>
                            </ul>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <ul class="ms-3">
                                <li>Pemohon mengajukan pelayanan pemeriksaan kesehatan hewan/Produk Hewan ditujukan
                                    secara tertulis</li>
                                <li>Petugas Sub Bag. Umpeg mengagendakan surat permohonan dan meneruskannya kepada
                                    Kepala Dinas</li>
                                <li>Kepala Dinas memerintahkan Kepala Bidang Peternakan dan Kesehatan Hewan untuk
                                    menindaklanjuti permohonan</li>
                                <li>Kepala Bidang memerintahkan Fungsional Penyetaraan Keswan dan Kesmavet untuk
                                    menindaklanjuti surat permohonan</li>
                                <li>Fungsional Penyetaraan menugaskan Paramedis Veteriner untuk memeriksa kelengkapan
                                    administrasi</li>
                                <li>Para Vet memeriksa kelengkapan administrasi, bila tidak lengkap dikembalikan kepada
                                    pemohon, bila sudah lengkap diteruskan kepada Dokter hewan Berwenang</li>
                                <li>Dokter Hewan Berwenang melakukan pemeriksaan klinis dan bila diperlukan melakukan
                                    pengambilan sampel untuk diuji secara laboratoris dalam mendukung diagnosa</li>
                                <li>Dokter Hewan berwenang memeriksa dan menetapkan diagnosa, Bila ternak sehat
                                    diterbitkan SKKH dan bila sakit ditolak (tidak diterbitkan SKKH)</li>
                                <li>Paramedis mencatat hasil pemeriksaan dalam blanko SKKH, menomori dan memberi
                                    stempel, mengarsipkan SKK Hewan/Produk Hewan</li>
                                <li>Pemohon memperoleh SKK Hewan/Produk Hewan</li>
                            </ul>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan :</p>
                            <ul class="ms-3">
                                <li>Pemohon mengajukan permohonan rekomendasi ditujukan secara tertulis</li>
                                <li>Petugas Sub Bag. Umpeg mengagendakan surat permohonan dan meneruskannya kepada
                                    Kepala Dinas</li>
                                <li>Kepala Dinas memerintahkan Kabid untuk menindaklanjuti permohonan</li>
                                <li>Kepala Bidang memerintahkan Fungsional Penyetaraan untuk menindaklanjuti surat
                                    permohonan</li>
                                <li>Kasi menugaskan Paramedis Veteriner/Calon Medik Veteriner untuk memeriksa
                                    kelengkapan administrasi</li>
                                <li>Para Vet memeriksa kelengkapan administrasi, bila tidak lengkap dikembalikan kepada
                                    pemohon, bila sudah lengkap diteruskan kepada Dokter hewan Berwenang</li>
                                <li>Dokter Hewan Berwenang bersama tim melakukan survey ke lokasi, melakukan pemeriksaan
                                    bila diperlukan dilakukan uji lab</li>
                                <li>Dokter Hewan berwenang memutuskan apakah produk hewan tersebut layak/tidak
                                    keluar/masuk ke Kab. Tasikmalaya</li>
                                <li>Paramedis/Calon Med Vet mencatat hasil pemeriksaan dalam blanko SKKH/SKKPH menomori
                                    dan memberi stempel, mengarsipkan SKKH/SKKPH</li>
                                <li>Kasi membuat draft rekomendasi pengeluaran/pemasukan produk ternak</li>
                                <li>Para Vet/Calon Med Vet mengetik rekomendasi</li>
                                <li>Kasi menyetujui draft rekomendasi</li>
                                <li>Kabid menyetujui draft rekomendasi</li>
                                <li>Kadis menyetujui draft rekomendasi</li>
                                <li>Pemohon memperoleh tembusan rekomendasi</li>
                            </ul>
                            <p>4. Pelayanan Penerbitan Rekomendasi Bantuan Ternak :</p>
                            <ul class="ms-3">
                                <li>Kelompok menyampaikan Surat Permohonan Rekomendasi dan Proposal ke Bagian Umpeg</li>
                                <li>Kepala Dinas memberikan Disposisi dan Pemeriksaan Surat Permohonan Rekomendasi dan
                                    Proposal</li>
                                <li>Subbagian Umpeg menyalurkan Disposisi surat ke Kepala Bidang</li>
                                <li>Tim Verifikator serta Kepala Bidang melakukan Pemeriksaan Surat Permohonan
                                    Rekomendasi dan Proposal</li>
                                <li>Tim teknis ditugaskan melaksanakan Calon Penerima Calon Lokasi (CPCL)</li>
                                <li>Pelaksanaan CPCL oleh Tim Teknis</li>
                                <li>Laporan Hasil CPCL oleh Tim Teknis</li>
                                <li>Pemeriksaan Laporan Hasil CPCL oleh Kepala Dinas, Tim Verifikator dan Kepala Bidang
                                </li>
                                <li>Penerbitan Surat Rekomendasi oleh pelaksana yang ditugaskan</li>
                            </ul>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <ul class="ms-3">
                                <li>Pemohon mengajukan Rekomendasi ditujukan ke Kepala Dinas Pertanian, Pangan dan
                                    Perikanan melalui Petugas Sub Bagian Umum Kepegawaian (Sekretariat)</li>
                                <li>Petugas Sub Bag. Umpeg mengagendakan surat permohonan dan meneruskannya kepada
                                    Kepala Dinas</li>
                                <li>Kepala Dinas memerintahkan Kepala Bidang Peternakan dan Kesehatan Hewan untuk
                                    menindaklanjuti permohonan</li>
                                <li>Kepala Bidang memerintahkan Fungsional Penyetaraan untuk menindaklanjuti surat
                                    permohonan</li>
                                <li>Fungsional Penyetaraan menugaskan Pengawas Penyakit dan Pengendali Penyakit Hewan
                                    untuk memeriksa kelengkapan administrasi</li>
                                <li>Pengawas Penyakit dan Pengendali Penyakit Hewan memeriksa kelengkapan administrasi,
                                    bila tidak lengkap dikembalikan kepada pemohon, bila sudah lengkap diteruskan kepada
                                    Fungsional Penyetaraan</li>
                                <li>Fungsional Penyetaraan melakukan survey lokasi, bila belum memenuhi persyaratan
                                    permohonan ditolak dengan saran perbaikan, bila memenuhi persyaratan teknis
                                    ditindaklanjuti dengan membuat draft rekomendasi</li>
                                <li>Pengawas Penyakit dan Pengendali Penyakit Hewan mengetik draft rekomendasi dan
                                    meneruskan ke Fungsional Penyetaraan</li>
                                <li>Fungsional Penyetaraan memeriksa draft, jika menyetujui memaraf dan meneruskan ke
                                    Kabid.</li>
                                <li>Kabid memeriksa draft jika menyetujui memaraf dan meneruskannya ke Kepala Dinas</li>
                                <li>Kepala Dinas memeriksa, jika menyetujui menandatangani rekomendasi yang ditujukan ke
                                    Kepala Dinas Perizinan dan Penanaman Modal Kab. Tasikmalaya</li>
                                <li>Pengawas Penyakit dan Pengendali Penyakit Hewan mengagendakan surat rekomendasi
                                    (penomoran surat keluar)</li>
                                <li>Pengawas Penyakit dan Pengendali Penyakit Hewan mengarsipkan surat rekomendasi</li>
                                <li>Pemohon memperoleh tembusan surat rekomendasi</li>
                            </ul>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <ul class="ms-3">
                                <li>Pemohon mengajukan Rekomendasi ditujukan ke Kepala Dinas Pertanian, Pangan dan
                                    Perikanan melalui Petugas Sub Bagian Umum Kepegawaian (Sekretariat)</li>
                                <li>Petugas Sub Bag. Umpeg mengagendakan surat permohonan dan meneruskannya kepada
                                    Kepala Dinas</li>
                                <li>Kepala Dinas memerintahkan Kepala Bidang Peternakan dan Kesehatan Hewan untuk
                                    menindaklanjuti permohonan</li>
                                <li>Kepala Bidang memerintahkan Fungsional Penyetaraan untuk menindaklanjuti surat
                                    permohonan</li>
                                <li>Fungsional Penyetaraan menugaskan Medik/Paramedik Veteriner untuk memeriksa
                                    kelengkapan administrasi</li>
                                <li>Medik/Paramedik Veteriner memeriksa kelengkapan administrasi, bila tidak lengkap
                                    dikembalikan kepada pemohon, bila sudah lengkap diteruskan kepada Kasi</li>
                                <li>Fungsional Penyetaraan bersama tim (pengawas mutu obat hewan) melakukan survey
                                    lokasi, bila belum memenuhi persyaratan permohonan ditolak dengan saran perbaikan,
                                    bila memenuhi persyaratan teknis ditindaklanjuti dengan membuat draft rekomendasi
                                </li>
                                <li>Medik/Paramedik Veteriner mengetik draft rekomendasi dan meneruskan ke Kasi</li>
                                <li>Fungsional Penyetaraan memeriksa draft, jika menyetujui memaraf dan meneruskan ke
                                    Kabid.</li>
                                <li>Kabid memeriksa draft jika menyetujui memaraf dan meneruskannya ke Kepala Dinas</li>
                                <li>Kepala Dinas memeriksa, jika menyetujui menandatangani rekomendasi yang ditujukan ke
                                    Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Atap Kab. Tasikmalaya</li>
                                <li>Petugas Sub Bag Umpeg mengagendakan surat rekomendasi (penomoran surat keluar)</li>
                                <li>Pelaksana mengarsipkan surat rekomendasi</li>
                                <li>Pemohon memperoleh tembusan surat rekomendasi</li>
                            </ul>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak :</p>
                            <ul class="ms-3">
                                <li>Atas dasar permintahan Pemohon mengajukan permohonan izin/rekomendasi usaha budidaya
                                    ternak</li>
                                <li>Tim teknis mengidentifikasi dan verifikasi Lokasi Usaha Budidaya Ternak yang
                                    diajukan Pemohon</li>
                                <li>Fungsional Penyetaraan mengusulan Penerbitan izin/rekomedasi Usaha Budidaya Ternak
                                </li>
                                <li>Usulan Penerbitan izin/rekomedasi Usaha Budidaya Ternak kepada Kepala Bidang Usulan
                                    Penerbitan izin/rekomedasi Usaha Budidaya Ternak kepada Kepala Dinas</li>
                                <li>Penyerahan Surat Izin/Rekomendasi Usaha Budidaya Ternak kepada Pemohon</li>
                                <li>Pembinaan, monitoring dan evaluasi</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                            03 Waktu Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner:</p>
                            <p class="ms-4">
                                2 Hari 1 Jam 40 Menit
                            </p>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <p class="ms-4">
                                1 Hari 1 Jam 20 Menit
                            </p>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan :</p>
                            <p class="ms-4">
                                2 Hari 2 Jam
                            </p>
                            <p>4. Pelayanan Penerbitan Rekomendasi Bantuan Ternak :</p>
                            <p class="ms-4">
                                11 Hari
                            </p>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <p class="ms-4">
                                2 Hari 1 Jam 40 Menit
                            </p>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <p class="ms-4">
                                2 Hari 1 Jam 40 Menit
                            </p>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak :</p>
                            <p class="ms-4">
                                9 Hari 30 Menit
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                            04 Biaya / Tarif
                        </button>
                    </h2>
                    <div id="collapseFour4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner:</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>4. Pelayanan Penerbitan Rekomendasi Bantuan Ternak :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive4" aria-expanded="false" aria-controls="collapseFive4">
                            05 Produk Pelayanan
                        </button>
                    </h2>
                    <div id="collapseFive4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner:</p>
                            <p class="ms-4">
                                Rekomendasi Nomor Kontrol Veteriner
                            </p>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <p class="ms-4">
                                SKKH/SKKPH
                            </p>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan :</p>
                            <p class="ms-4">
                                Rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan
                            </p>
                            <p>4. Pelayanan Penerbitan Rekomendasi Bantuan Ternak :</p>
                            <p class="ms-4">
                                Bantuan Ternak
                            </p>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <p class="ms-4">
                                Rekomendasi Izin praktek drh/klinik
                            </p>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <p class="ms-4">
                                Rekomendasi Izin Distributor Obat Hewan
                            </p>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak :</p>
                            <p class="ms-4">
                                Izin/Rekomendasi Usaha Budidaya Ternak
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix4" aria-expanded="false" aria-controls="collapseSix4">
                            06 Pengelolaan Pengaduan
                        </button>
                    </h2>
                    <div id="collapseSix4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pengaduan, saran dan masukan dapat disampaikan secara tertulis melalui surat yang
                                diajukan kepada:</p>
                            <p class="ms-4">
                                Sekretaris Dinas Pertanian, Pangan dan Perikanan Kabupaten Tasikmalaya Jl. Sukapura VI
                                Bojongkoneng Singaparna 46415/ email: dispertapp@tasikmalayakab.go.id
                            </p>
                            <p>2. Menyampaikan pengaduan dan masukan dapat disampaikan secara langsung via Tlp. (0265)
                                330 163/ Fax: (0265) 330 163</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Manufacturing -->
        <section class="section dark-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>MANUFACTURING</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                            01 Dasar Hukum
                        </button>
                    </h2>
                    <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner :</p>
                            <ul class="ms-3">
                                <li>Undang- undang No. 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan;</li>
                                <li>Undang-undang No.18 Tahun 2012 tentang Pangan;</li>
                                <li>Peraturan Pemerintah No. 28 Tahun 2004 tentang Keamanan. Mutu dan Gizi Pangan;</li>
                                <li>Peraturan Menteri Pertanian Nomor 11 Tahun 2020 tentang Sertifikasi Nomor Kontrol
                                    Veteriner Unit Usaha Produk Hewan;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, Ketahanan Pangan dan Perikanan.</li>
                            </ul>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <ul class="ms-3">
                                <li>Undang- undang No. 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan;</li>
                                <li>Peraturan Pemerintah Nomor 95 Tahun 2012 tentang Kesehatan Masyarakat Veteriner;
                                </li>
                                <li>Peraturan Pemerintah Nomor 47 Tahun 2014 tentang Pengendalian dan Penanggulangan
                                    Penyakit Hewan;</li>
                                <li>Peraturan Pemerintah Nomor 3 Tahun 2017 tentang Otoritas Veteriner Lembaran Negara
                                    Republik Indonesia Tahun 2017 Nomor 20, Tambahan Lembaran Negara Republik Indonesia
                                    Nomor 6019;Peraturan Presiden Nomor 30 Tahun 2011 tentang Pengendalian Zoonosis;
                                </li>
                                <li>Peraturan Menteri Pertanian Nomor 64/Permentan/OT.140/9/2007 Tahun 2007 tentang
                                    Pedoman Pelayanan Pusat Kesehatan;</li>
                                <li>Peraturan Menteri Pertanian Nomor 08 Tahun 2019 tentang Pejabat Otoritas Veteriner
                                    dan Dokter Hewan Berwenang;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, </li>
                                <li>Ketahanan Pangan dan Perikanan.</li>
                            </ul>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan :</p>
                            <ul class="ms-3">
                                <li>Undang- undang No. 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan;</li>
                                <li>Peraturan Pemerintah Nomor 95 Tahun 2012 tentang Kesehatan Masyarakat Veteriner;
                                </li>
                                <li>Peraturan Pemerintah Nomor 47 Tahun 2014 tentang Pengendalian dan Penanggulangan
                                    Penyakit Hewan;</li>
                                <li>Peraturan Pemerintah Nomor 3 Tahun 2017 tentang Otoritas Veteriner Lembaran Negara
                                    Republik Indonesia Tahun 2017 Nomor 20, Tambahan Lembaran Negara Republik Indonesia
                                    Nomor 6019;Peraturan Presiden Nomor 30 Tahun 2011 tentang Pengendalian Zoonosis;
                                </li>
                                <li>Peraturan Menteri Pertanian Nomor 64/Permentan/OT.140/9/2007 Tahun 2007 tentang
                                    Pedoman Pelayanan Pusat Kesehatan;</li>
                                <li>Peraturan Menteri Pertanian Nomor 08 Tahun 2019 tentang Pejabat Otoritas Veteriner
                                    dan Dokter Hewan Berwenang;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, </li>
                                <li>Ketahanan Pangan dan Perikanan.</li>
                            </ul>
                            <p>4. Pelayanan Surat Pengantar Registrasi Lahan Pertanian :</p>
                            <ul class="ms-3">
                                <li>UU No 23 Tahun 2014 tentang Pemda </li>
                                <li>Perbup Tasikmalaya No 147 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                    Pemerintahan Kabupaten Tasikmalaya</li>
                                <li>Perbup Tasikmalaya No 07 Tahun 2019 tentang Kedudukan, Susunan Organisasi, Tugas dan
                                    Fungsi Perangkat Daerah</li>
                                <li>Peraturan Bupati Tasikmalaya No 59 Tahun 2021 Tentang Tugas dan Fungsi Dinas
                                    Pertanian, Ketahanan Pangan, dan Perikanan</li>
                                <li>Undang-Undang No 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan</li>
                            </ul>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <ul class="ms-3">
                                <li>Undang- undang No. 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan;</li>
                                <li>Peraturan Pemerintah Nomor 03Tahun 2017 tentang Otoritas Veteriner;</li>
                                <li>Peraturan Menteri Pertanian Nomor 03 Tahun 2019 tentang Pelayanan Jasa Medik
                                    Veteriner;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, Ketahanan Pangan dan Perikanan.</li>
                            </ul>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <ul class="ms-3">
                                <li>Undang- undang No. 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan;</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, Ketahanan Pangan dan Perikanan.</li>
                            </ul>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak:</p>
                            <ul class="ms-3">
                                <li>Undang-Undang No 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan</li>
                                <li>Undang Undang Nomor 18 Tahun 2009 tentang Peternakan dan Kesehatan Hewan</li>
                                <li>Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                    Pertanian, Ketahanan Pangan dan Perikanan.</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                            02 Sarana dan Prasarana atau Fasilitas
                        </button>
                    </h2>
                    <div id="collapseTwo5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ruang Tamu ber-AC, kursi dan meja Tamu</p>
                            <p>2. Komputer dengan akses internet</p>
                            <p>3. Printer</p>
                            <p>4. Berkas</p>
                            <p>5. Handphone</p>
                            <p>6. ATK</p>
                            <p>7. Stetoskop</p>
                            <p>8. SKKH</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                            03 Kompetensi Pelaksan
                        </button>
                    </h2>
                    <div id="collapseThree5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner :</p>
                            <ul class="ms-3">
                                <li>Berpendidikan minimal D3 Peternakan/Kesehatan Hewan</li>
                                <li>Memahami peraturan yang berkaitan dengan Sertifikasi Veteriner</li>
                            </ul>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <ul class="ms-3">
                                <li>Berpendidikan minimal D3 Peternakan/Kesehatan Hewan</li>
                                <li>Memahami peraturan yang berkaitan kesehatan hewan</li>
                            </ul>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/Pemasukan Produk Hewan :</p>
                            <ul class="ms-3">
                                <li>Berpendidikan minimal D3 Peternakan/ Kesehatan Hewan</li>
                                <li>Memahami peraturan yang berkaitan dengan Kesehatan Hewan/Kesmavet</li>
                            </ul>
                            <p>4. Pelayanan Penerbitan Rekomendasi Bantuan Ternak</p>
                            <ul class="ms-3">
                                <li>Mampu mengoperasikan computer</li>
                                <li>Memiliki kompetensi dalam pengelolaan surat masuk/surat keluar</li>
                                <li>Memahami tatacara pembuatan surat rekomendasi</li>
                            </ul>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <ul class="ms-3">
                                <li>Berpendidikan minimal D3 Peternakan/Kesehatan Hewan</li>
                                <li>Memahami peraturan yang berkaitan kesehatan hewan</li>
                            </ul>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <ul class="ms-3">
                                <li>Berpendidikan minimal D3 Peternakan/Kesehatan Hewan</li>
                                <li>Memahami peraturan yang berkaitan kesehatan hewan</li>
                                <li>Memahami peraturan yang berkaitan dengan obat hewan</li>
                            </ul>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak:</p>
                            <ul class="ms-3">
                                <li>Berpendidikan minimal D3</li>
                                <li>Memiliki wawasan usaha budidaya ternak</li>
                                <li>Memiliki kemampuan dan pengetahuan tentang tataruang, PERDA dan perangkat hukum
                                    lainnya</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour5" aria-expanded="false" aria-controls="collapsefour5">
                            04 Pengawasan Internal
                        </button>
                    </h2>
                    <div id="collapseFour5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Atasan langsung</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                            05 jumplah Pelaksaan
                        </button>
                    </h2>
                    <div id="collapseFive5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Penerbitan Rekomendasi Nomor Kontrol Veteriner :</p>
                            <p class="ms-4">
                                5 Orang
                            </p>
                            <p>2. Pelayanan Penerbitan Surat Kesehatan Produk Hewan :</p>
                            <p class="ms-4">
                                7 Orang
                            </p>
                            <p>3. Pelayanan Penerbitan rekomendasi Teknis Pengeluaran/ Pemasukan Produk Hewan :</p>
                            <p class="ms-4">
                                7 Orang
                            </p>
                            <p>4. Pelayanan Penerbitan Rekomendasi Bantuan Ternak :</p>
                            <p class="ms-4">
                                6 Orang
                            </p>
                            <p>5. Pelayanan Penerbitan Rekomendasi Praktek Dokter Hewan/ Klinik Hewan :</p>
                            <p class="ms-4">
                                5 Orang
                            </p>
                            <p>6. Pelayanan Penerbitan Rekomendasi Distributor Obat Hewan :</p>
                            <p class="ms-4">
                                5 Orang
                            </p>
                            <p>7. Pelayanan Penyiapan Bahan Izin/Rekomendasi Usaha Budidaya Ternak:</p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix5" aria-expanded="false" aria-controls="collapseSix5">
                            06 Jaminan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSix5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Petugas pelayanan mempunyai kompetensi di bidang pelayanan publik dan bekerja sesuai
                                dengan ketentuan peraturan perundang-undangan</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven5" aria-expanded="false" aria-controls="collapseSeven5">
                            07 Jaminan Keselamatan dan Keselamatan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSeven5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ketelitian dalam melakukan verifikasi dan ketepatan waktu penyelesaian dokumen</p>
                            <p>2. Tersedianya satuan Pengamanan/Security</p>
                            <p>3. Tersedianya alat Pemadam Kebakaran</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight5" aria-expanded="false" aria-controls="collapseEight5">
                            08 Evaluasi Kinerja Pelaksanaan
                        </button>
                    </h2>
                    <div id="collapseEight5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Secara berkala dilaporkan kepada atasan dan menyampaikan laporan persemester</p>
                            <p>2. Dilakukannya survey kepuasan masyarakat</p>
                        </div>
                    </div>
                </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Bidang ketahananpangan-->
        <section id="ketahananPangan" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bidang Ketahanan Pangan</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="100">
                        <h5>JENIS PELAYANAN</h5>
                        <ul>
                            <li><i class="bi bi-1-circle"></i> <span>Pelayanan Persetujuan Registrasi PSAT PDUK</span>
                            </li>
                            <li><i class="bi bi-2-circle"></i> <span>Pelayanan Usulan Bantuan CPPD Pasca
                                    Bencana</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 why-us-img">
                        <img src="asset/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- End Section -->

        <!-- Section Service Delivery -->
        <section class="section light-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>SERVICE DELIVERY</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                            01 Persyaratan
                        </button>
                    </h2>
                    <div id="collapseOne6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <p class="ms-4">
                                Ball Point Formulir
                            </p>
                            <p>2. Pelayanan Usulan Bantuan CPPD Pasca Bencana :</p>
                            <p class="ms-4">
                                Surat Usulan dan Data Pendukung
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                            02 Prosedur
                        </button>
                    </h2>
                    <div id="collapseTwo6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <ul class="ms-3">
                                <li>Pemohon mengisi Formulir Pendaftaran dan kelengkapan yang dipersyaratkan (manual
                                    /OSS)</li>
                                <li>Penerimaan Dokumen Pendaftaran beserta Kelengkapannya oleh Adminstrasi OKKPD</li>
                                <li>Penelaahan berkas dan disposisi untuk proses penyelesaian Registrasi PSAT-PDUK oleh
                                    Kepala Dinas/ Ketua OKKPD</li>
                                <li>Penelaahan terhadap Berkas Dokumen Registrasi PSAT-PDUK oleh Kepala Bidang/
                                    Koordinasi Pengawasan OKKPD</li>
                                <li>Verifikasi Administrasi Dokumen Pendaftaran dan Kelengkapannya oleh Petugas Teknis
                                    OKKPD</li>
                                <li>Perbaikan Dokumen apabila hasil pemeriksaan OKKPD kurang lengkap atau tidak benar
                                    oleh Pemohon</li>
                                <li>Penyerahan Hasil Verifikasi oleh Kepala Bidang/ Koordinasi Pengawasan OKKPD</li>
                                <li>Penerbitan Registrasi PSAT-PDUK Pembinaan oleh Kepala Dinas/ Ketua OKKPD</li>
                                <li>Penyerahan Registrasi PSAT-PDUK Pembinaan oleh Adminstrasi OKKPD</li>
                                <li>Pengambilan Registrasi PSAT-PDUK Pembinaan oleh Pemohon</li>
                            </ul>
                            <p>2. Pelayanan Usulan Bantuan CPPD (Pasca Bencana) :</p>
                            <ul class="ms-3">
                                <li>Pemohon mengajukan usulan Bantuan CPPD</li>
                                <li>Fungsional Penyetaraan Memerintah menginventalisir, mengumpulkan data dasar
                                    kependudukan dan ekonomi desa/kecamatan, serta menghimpun data usulan permintaan
                                    bantuan pangan dari daerah untuk penyusunan rencana penyediaan dan pengelolaan
                                    cadangan pangan dan Penyiapan data informasi kerentanan & ketahanan pangan.</li>
                                <li>Pelaksana Mengumpulkan, mengolah dan menganalisa data data base kependudukan dan
                                    ekonomi desa/kecamatan, serta menghimpun data usulan permintaan bantuan pangan dari
                                    daerah.</li>
                                <li>Fungsional Penyetaraan Menyusun konsep Penyiapan pemanfaatan CPPD kabupaten
                                    Tasikmalaya serta Penyiapan data dan informasi kerentananan dan ketahanan Pangan.
                                </li>
                                <li>Pelaksana Mengetik draft / konsep Penyiapan pemanfaatan CPPD serta Penyiapan data
                                    dan informasi kerentananan dan ketahanan Pangan.</li>
                                <li>Fungsional Penyetaraan Mengoreksi data Draft Penyiapan pemanfaatan CPPD, serta data
                                    informasi kerentanan dan ketahanan pangan.</li>
                                <li>Kepala Bidang Mengoreksi data Draft Penyiapan pemanfaatan CPPD, serta data informasi
                                    kerentanan dan ketahanan pangan.</li>
                                <li>Fungsional Penyetaraan Menggandakan dan menyimpanPenyiapan pemanfaatan CPPD, serta
                                    data informasi kerentanan dan ketahanan pangan</li>
                                <li>Fungsional Penyetaraan Menyusun berkas usulan/bantuan CPPD dan membuat surat
                                    persetujuan /Nota Dinas ke Bupati</li>
                                <li>Kepala Bidang Mengoreksi data berkas usulan bantuan CPPD dan surat persetujuan
                                    bantaun /Nota Dinas ke Bupati. </li>
                                <li>Fungsional Penyetaraan Menyampaikan bahan/berkas untulan bantuan pangan/rawan
                                    pangan, serta Nota Dinas/srurat persetujuan kepada Bupati.</li>
                                <li>Penyaluran dan Pemanfaatan Cadangan Pangan Pemerih Kabupaten (CPPD), melalui
                                    kerjasama pengelolaan penyediaan CPPD dengan Bulog.</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                            03 Waktu Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree6" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <p class="ms-4">
                                6 Hari 5 Jam 30 Menit
                            </p>
                            <p>2. Pelayanan Usulan Bantuan CPPD (Pasca Bencana) :</p>
                            <p class="ms-4">
                                4 Minggu
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                            04 Biaya / Tarif
                        </button>
                    </h2>
                    <div id="collapseFour4" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>2. Pelayanan Usulan Bantuan CPPD (Pasca Bencana) :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive4" aria-expanded="false" aria-controls="collapseFive4">
                            05 Produk Pelayanan
                        </button>
                    </h2>
                    <div id="collapseFive4" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <p class="ms-4">
                                Dokumen Registrasi
                            </p>
                            <p>2. Pelayanan Usulan Bantuan CPPD (Pasca Bencana) :</p>
                            <p class="ms-4">
                                Bantuan CPPD
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix4" aria-expanded="false" aria-controls="collapseSix4">
                            06 Pengelolaan Pengaduan
                        </button>
                    </h2>
                    <div id="collapseSix4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pengaduan, saran dan masukan dapat disampaikan secara tertulis melalui surat yang
                                diajukan kepada:</p>
                            <p class="ms-4">
                                Sekretaris Dinas Pertanian, Pangan dan Perikanan Kabupaten Tasikmalaya Jl. Sukapura VI
                                Bojongkoneng Singaparna 46415/ email: dispertapp@tasikmalayakab.go.id
                            </p>
                            <p>2. Menyampaikan pengaduan dan masukan dapat disampaikan secara langsung via Tlp. (0265)
                                330 163/ Fax: (0265) 330 163</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Manufacturing -->
        <section class="section dark-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>MANUFACTURING</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                            01 Dasar Hukum
                        </button>
                    </h2>
                    <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <ul class="ms-3">
                                <li>Undang-Undang Nomor 18 Tahun 2012 tentang Pangan </li>
                                <li>Peraturan Pemerintah Nomor 68 Tahun 2002 tentang Ketahanan Pangan</li>
                                <li>Peraturan Presiden Nomor 22 Tahun 2009 tentang Kebijakan Percepatan Penganekaragaman
                                    Konsumsi Pangan Berbasis Sumber Daya Lokal;</li>
                                <li>Peraturan Menteri Pertanian Nomor:65/Permentan/Ot.140/12/2010 Tentang Standar
                                    Pelayanan Minimal Bidang Ketahanan Pangan Provinsi Dan Kabupaten/Kota</li>
                                <li>Peraturan Bupati Kabupaten Tasikmalaya Nomor 59 Tahun 2021 tentang Rincian Tugas dan
                                    Fungsi Dinas Pertanian, Ketahanan Pangan Dan Perikanan Kabupaten Tasikmalaya.</li>
                            </ul>
                            <p>2. Pelayanan Usulan Bantuan CPPD (Pasca Bencana) :</p>
                            <ul class="ms-3">
                                <li>Undang-Undang Nomor 18 Tahun 2012 tentang Pangan </li>
                                <li>Peraturan Pemerintah Nomor 68 Tahun 2002 tentang Ketahanan Pangan</li>
                                <li>Peraturan Pemerintah Nomor 17 Tahun 2015 tentang Ketahanan Pangan dan Gizi </li>
                                <li>Peraturan Menteri Pertanian Nomor:65/Permentan/Ot.140/12/2010 Tentang Standar
                                    Pelayanan Minimal Bidang Ketahanan Pangan Provinsi Dan Kabupaten/Kota</li>
                                <li>Peraturan Bupati Kabupaten Tasikmalaya Nomor 59 Tahun 2021 tentang Rincian Tugas dan
                                    Fungsi Dinas Pertanian, Ketahanan Pangan Dan Perikanan Kabupaten Tasikmalaya.</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                            02 Sarana dan Prasarana atau Fasilitas
                        </button>
                    </h2>
                    <div id="collapseTwo5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ruang Tamu ber-AC, kursi dan meja Tamu</p>
                            <p>2. Komputer dengan akses internet</p>
                            <p>3. Printer</p>
                            <p>4. Berkas</p>
                            <p>5. Handphone</p>
                            <p>6. ATK</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                            03 Kompetensi Pelaksana
                        </button>
                    </h2>
                    <div id="collapseThree5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <ul class="ms-3">
                                <li>Mengetahui dan memahami tugas dan fungsi analis ketahanan pangan</li>
                                <li>Kemampuan berkoordinasi dan berkomunikasi dengan baik dengan
                                    unit/instnasi/stakeholder terkait</li>
                                <li>Menguasai Komputer, Aplikasi Office dan Internet</li>
                            </ul>
                            <p>2. Pelayanan Usulan Bantuan CPPD (Pasca Bencana) :</p>
                            <ul class="ms-3">
                                <li>Mengetahui dan memahami tugas dan fungsi analis ketahanan pangan</li>
                                <li>Kemampuan berkoordinasi dan berkomunikasi dengan baik dengan
                                    unit/instnasi/stakeholder terkait</li>
                                <li>Menguasai Komputer, Aplikasi Office dan Internet</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour5" aria-expanded="false" aria-controls="collapsefour5">
                            04 Pengawasan Internal
                        </button>
                    </h2>
                    <div id="collapseFour5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Atasan langsung</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                            05 jumlah Pelaksaan
                        </button>
                    </h2>
                    <div id="collapseFive5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Persetujuan Registrasi PSAT PDUK :</p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                            <p>2. Pelayanan Usulan Bantuan CPPD (Pasca Bencana) :</p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix5" aria-expanded="false" aria-controls="collapseSix5">
                            06 Jaminan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSix5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Petugas pelayanan mempunyai kompetensi di bidang pelayanan publik dan bekerja sesuai
                                dengan ketentuan peraturan perundang-undangan</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven5" aria-expanded="false" aria-controls="collapseSeven5">
                            07 Jaminan Keselamatan dan Keselamatan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSeven5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ketelitian dalam melakukan verifikasi dan ketepatan waktu penyelesaian dokumen</p>
                            <p>2. Tersedianya satuan Pengamanan/Security</p>
                            <p>3. Tersedianya alat Pemadam Kebakaran</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight5" aria-expanded="false" aria-controls="collapseEight5">
                            08 Evaluasi Kinerja Pelaksanaan
                        </button>
                    </h2>
                    <div id="collapseEight5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Secara berkala dilaporkan kepada atasan dan menyampaikan laporan persemester</p>
                            <p>2. Dilakukannya survey kepuasan masyarakat</p>
                        </div>
                    </div>
                </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Bidang Perikanan-->
        <section id="perikanan" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Bidang Perikanan</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-7 content" data-aos="fade-up" data-aos-delay="100">
                        <h5>JENIS PELAYANAN</h5>
                        <ul>
                            <li><i class="bi bi-1-circle"></i> <span>1. Pelayanan Pembuatan Surat Keterangan Anak
                                    Pelaku Utama Usaha Perikanan</span></li>
                            <li><i class="bi bi-2-circle"></i> <span>2. Pelayanan Permohonan Rekomendasi Proposal
                                    Bantuan Perikanan</span></li>
                            <li><i class="bi bi-3-circle"></i> <span>3. Pelayanan Permohonan Dukungan Tarif Khusus
                                    PDAM dan PLN untuk Pelaku Usaha Perikanan</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2 why-us-img">
                        <img src="asset/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section><!-- End Section -->

        <!-- Section Service Delivery -->
        <section class="section light-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>SERVICE DELIVERY</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne6">
                            01 Persyaratan
                        </button>
                    </h2>
                    <div id="collapseOne6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Pembuatan Surat Keterangan Anak Pelaku Utama Usaha Perikanan :</p>
                            <p class="ms-4">
                                Surat Permohonan
                            </p>
                            <p>2. Pelayanan Permohonan Rekomendasi Proposal Bantuan Perikanan :</p>
                            <p class="ms-4">
                                Surat Permohonan dan Proposal
                            </p>
                            <p>3. Pelayanan Permohonan Dukungan Tarif Khusus PDAM dan PLN untuk Pelaku Usaha Perikanan:
                            </p>
                            <p class="ms-4">
                                Surat Permohonan dan Proposal
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                            02 Prosedur
                        </button>
                    </h2>
                    <div id="collapseTwo6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Pembuatan Surat Keterangan Anak Pelaku Utama Usaha Perikanan :</p>
                            <ul class="ms-3">
                                <li>Sekretaris menerima permohonan pembuatan surat keterangan sebagai anak pelaku utama
                                    kelautan dan perikanan dan berkas-berkas persyaratan</li>
                                <li>Pelaksana melakukan Verifikasi dokumen/kelengkapan berkas pembuatan surat keterangan
                                    sebagai anak pelaku utama kelautan dan perikanan( jika persyaratan tidak lengkap
                                    maka dikembalikan kepada sekretariat (pemohon)</li>
                                <li>Pelaksana menginput data surat keterangan sebagai anak pelaku utama kelautan dan
                                    perikanan</li>
                                <li>Fungsional Penyetaraan memeriksa dan memaraf surat keterangan sebagai anak pelaku
                                    utama kelautan dan perikanan (jika tidak sesuai dikembalikan pada JFU)</li>
                                <li>Kepala Bidang Memeriksa dan memaraf surat keterangan sebagai anak pelaku utama
                                    kelautan dan perikanan</li>
                                <li>Kepala Dinas Menandatangani surat keterangan sebagai anak pelaku utama kelautan dan
                                    perikanan</li>
                                <li>Sub Bagian Umpeg Penomoran Surat</li>
                            </ul>
                            <p>2. Pelayanan Permohonan Rekomendasi Proposal Bantuan Perikanan :</p>
                            <p class="ms-3">
                                a. Bantuan Langsung
                            </p>
                            <ul class="ms-4">
                                <li>Sekretariat Menerima permohonan bantuan perikanan</li>
                                <li>Pelaksana Bidang Perikanan menerima disposisi berkas permohonan bantuan perikanan
                                </li>
                                <li>Fungsional Penyetaraan Pemeriksaan kelengkapan usulan bantuan perikanan</li>
                                <li>Kepala Bidang memerintahkan verifikasi proposal dan survey lapangan</li>
                                <li>Fungsional Penyetaraan melaksanakan survey lapangan, monitoring keberadaan dan
                                    kelayakan serta kesiapan kelompok/ pemohon</li>
                                <li>Kepala Bidang memeriksa hasil laporan survey lapangan untuk menentukan kelayakan
                                    bantuan perikanan</li>
                                <li>Fungsional Penyetaraan menyusun laporan kelayakan bantuan</li>
                                <li>Sekretariat memasukan pemohon sebagai peserta penerima bantuan perikanan pada
                                    sasaran penerima bantuan selanjutnya</li>
                                <li>Kepala Dinas menerima laporan/ daftar penerima bantuan</li>
                            </ul>
                            <p class="ms-3">
                                b. Pelayanan Rekomendasi Proposal Bantuan Perikanan
                            </p>
                            <ul class="ms-4">
                                <li>Sekretariat menerima permohonan bantuan perikanan</li>
                                <li>Pelaksana Bidang Perikan menerima disposisi berkas permohonan bantuan perikanan</li>
                                <li>Fungsional Penyetaraan melakukan pemeriksaan kelengkapan usulan bantuan perikanan
                                </li>
                                <li>Kepala Bidang memerintahkan verifikasi proposal dan survey lapangan</li>
                                <li>Fungsional Penyetaraan melaksanakan survey lapangan, monitoring keberadaan dan
                                    kelayakan serta kesiapan kelompok/ pemohon</li>
                                <li>Kepala Bidang memeriksa hasil laporan survey lapangan untuk menentukan kelayakan
                                    bantuan perikanan</li>
                                <li>Fungsional Penyetaran Menyusun laporan kelayakan bantuan</li>
                                <li>Sekretariat membuat rekomendasi sebagai peserta penerima bantuan perikanan pada
                                    sasaran penerima bantuan selanjutnya</li>
                            </ul>
                            <p>3. Pelayanan Permohonan Dukungan Tarif Khusus PDAM dan PLN untuk Pelaku Usaha Perikanan:
                            </p>
                            <ul class="ms-3">
                                <li>Sekretariat menerima permohonan dukungan tarif khusus PDAM dan PLN</li>
                                <li>Pelaksana Menerima disposisi berkas permohonan dukungan tarif khusus PDAM dan PLN
                                </li>
                                <li>Fungsional Penyetaraan melakukan pemeriksaan kelengkapan usulan permohonan dukungan
                                    tarif khusus PDAM dan PLN</li>
                                <li>Kepala Bidang memerintahkan verifikasi proposal dan survey lapangan</li>
                                <li>Fungsional Penyetaraan melaksanakan survey lapangan, monitoring keberadaan dan
                                    kelayakan usaha perikanan</li>
                                <li>Kepala Bidang memeriksa hasil laporan survey lapangan untuk menentukan kelayakan
                                    usaha perikanan</li>
                                <li>Fungsional penyetaraan menyusun laporan kelayakan bantuan</li>
                                <li>Sekretariat membuat rekomendasi dukungan tarif khusus PDAM dan PLN untuk pelaku
                                    usaha perikanan</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                            03 Waktu Pelayanan
                        </button>
                    </h2>
                    <div id="collapseThree6" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Pembuatan Surat Keterangan Anak Pelaku Utama Usaha Perikanan :</p>
                            <p class="ms-4">
                                2 Jam 50 Menit
                            </p>
                            <p>2. Pelayanan Permohonan Rekomendasi Proposal Bantuan Perikanan :</p>
                            <p class="ms-4">
                                1 Hari 2 Jam 20 Menit
                            </p>
                            <p>3. Pelayanan Permohonan Dukungan Tarif Khusus PDAM dan PLN untuk Pelaku Usaha Perikanan:
                            </p>
                            <p class="ms-4">
                                1 Hari 2 Jam 20 Menit
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                            04 Biaya / Tarif
                        </button>
                    </h2>
                    <div id="collapseFour4" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Pembuatan Surat Keterangan Anak Pelaku Utama Usaha Perikanan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>2. Pelayanan Permohonan Rekomendasi Proposal Bantuan Perikanan :</p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                            <p>3. Pelayanan Permohonan Dukungan Tarif Khusus PDAM dan PLN untuk Pelaku Usaha Perikanan:
                            </p>
                            <p class="ms-4">
                                Rp. 0,- (GRATIS)
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive4" aria-expanded="false" aria-controls="collapseFive4">
                            05 Produk Pelayanan
                        </button>
                    </h2>
                    <div id="collapseFive4" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Pembuatan Surat Keterangan Anak Pelaku Utama Usaha Perikanan :</p>
                            <p class="ms-4">
                                Surat Keterangan Anak Pelaku Utama Usaha Perikanan
                            </p>
                            <p>2. Pelayanan Permohonan Bantuan Perikanan :</p>
                            <ul class="ms-3">
                                <li>Terdaftar Penerima Bantuan Langsung</li>
                                <li>Surat Rekomendasi Proposal Bantuan Perikanan</li>
                            </ul>
                            <p>3. Pelayanan Permohonan Dukungan Tarif Khusus PDAM dan PLN untuk Pelaku Usaha Perikanan:
                            </p>
                            <p class="ms-4">
                                Dukungan Tarif Khusus PDAM dan PLN untuk Pelaku Usaha Perikanan
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix4" aria-expanded="false" aria-controls="collapseSix4">
                            06 Pengelolaan Pengaduan
                        </button>
                    </h2>
                    <div id="collapseSix4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pengaduan, saran dan masukan dapat disampaikan secara tertulis melalui surat yang
                                diajukan kepada:</p>
                            <p class="ms-4">
                                Sekretaris Dinas Pertanian, Pangan dan Perikanan Kabupaten Tasikmalaya Jl. Sukapura VI
                                Bojongkoneng Singaparna 46415/ email: dispertapp@tasikmalayakab.go.id
                            </p>
                            <p>2. Menyampaikan pengaduan dan masukan dapat disampaikan secara langsung via Tlp. (0265)
                                330 163/ Fax: (0265) 330 163</p>
                        </div>
                    </div>
                </div>
            </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

        <!-- Section Manufacturing -->
        <section class="section dark-background">
            <div class="accordion m-5" id="accordionExample">
                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>MANUFACTURING</h3>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
                            01 Dasar Hukum
                        </button>
                    </h2>
                    <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Peraturan Bupati Nomor 71 Tahun 2019 tentang Tata Naskah Dinas di Lingkungan
                                Pemerintahan Kabupaten Tasikmalaya;</p>
                            <p>2. Peraturan Bupati Tasikmalaya Nomor 72 Tahun 2020 Tentang Pedoman Penyusunan Standar
                                Operasional Prosedur Administrasi Pemerintahan;</p>
                            <p>3. Peraturan Bupati Tasikmalaya Nomor 59 Tahun 2021 tentang Tugas dan Fungsi Dinas
                                Pertanian,Ketahanan Pangan, dan Perikanan.</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                            02 Sarana dan Prasarana atau Fasilitas
                        </button>
                    </h2>
                    <div id="collapseTwo5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ruang Tamu ber-AC, kursi dan meja Tamu</p>
                            <p>2. Komputer dengan akses internet</p>
                            <p>3. Printer</p>
                            <p>4. Berkas</p>
                            <p>5. Handphone</p>
                            <p>6. ATK</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                            03 Kompetensi Pelaksan
                        </button>
                    </h2>
                    <div id="collapseThree5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Mengetahui dan memehami tugas dan fungsi pengelolaan kepegawaian</p>
                            <p>2. Kemampuan berkoordinasi dan berkomunikasi dengan baik dengan init/ instansi/
                                stakeholder terkait</p>
                            <p>3. Menguasai Komputer, aplikasi Office dan internet</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour5" aria-expanded="false" aria-controls="collapsefour5">
                            04 Pengawasan Internal
                        </button>
                    </h2>
                    <div id="collapseFour5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Atasan langsung</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                            05 jumlah Pelaksaan
                        </button>
                    </h2>
                    <div id="collapseFive5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Pelayanan Pembuatan Surat Keterangan Anak Pelaku Utama Usaha Perikanan :</p>
                            <p class="ms-4">
                                5 Orang
                            </p>
                            <p>2. Pelayanan Permohonan Rekomendasi Proposal Bantuan Perikanan :</p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                            <p>3. Pelayanan Permohonan Dukungan Tarif Khusus PDAM dan PLN untuk Pelaku Usaha Perikanan:
                            </p>
                            <p class="ms-4">
                                4 Orang
                            </p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix5" aria-expanded="false" aria-controls="collapseSix5">
                            06 Jaminan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSix5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Petugas pelayanan mempunyai kompetensi di bidang pelayanan publik dan bekerja sesuai
                                dengan ketentuan peraturan perundang-undangan</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven5" aria-expanded="false" aria-controls="collapseSeven5">
                            07 Jaminan Keselamatan dan Keselamatan Pelayanan
                        </button>
                    </h2>
                    <div id="collapseSeven5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Ketelitian dalam melakukan verifikasi dan ketepatan waktu penyelesaian dokumen</p>
                            <p>2. Tersedianya satuan Pengamanan/Security</p>
                            <p>3. Tersedianya alat Pemadam Kebakaran</p>
                        </div>
                    </div>
                </div><!-- End Item -->

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight5" aria-expanded="false" aria-controls="collapseEight5">
                            08 Evaluasi Kinerja Pelaksanaan
                        </button>
                    </h2>
                    <div id="collapseEight5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>1. Secara berkala dilaporkan kepada atasan dan menyampaikan laporan persemester</p>
                            <p>2. Dilakukannya survey kepuasan masyarakat</p>
                        </div>
                    </div>
                </div><!-- End Item -->

            </div>
        </section><!-- End Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">dpkpp</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Komplek perkantoran, jl. Bojongkoneng, sukaasih.</p>
                        <p>Kec. Singaparna, Kab. Tasikmalaya 46415</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>085282898987</span></p>
                        <p><strong>Email:</strong> <span>dpkpp.tasik@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Umpeg</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Tanaman Pangan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Sarana&Prasarana</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Peternakan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Ketahanan Pangan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Perikanan</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Codemalaya</strong> <span>All Rights
                    Reserved</span>
            </p>
            <div class="credits">
                Designed by <a href="https://uncip.ac.id/">Universitas Cipasung Tasikmalaya</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/vendor/php-email-form/validate.js"></script>
    <script src="asset/vendor/aos/aos.js"></script>
    <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="asset/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="asset/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="asset/js/main.js"></script>

</body>

</html>
