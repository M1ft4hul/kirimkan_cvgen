<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kirimkan.id - Kirim paket dari dan ke Indonesia-Jerman</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="kirim paket, jastip, jasa penitipan" name="keywords">
    <meta content="Kami berkomitmen untuk melayani Masyarakat Indonesia menerima dan mengirimkan paket dari Indonesia ke Jerman ataupun sebaliknya." name="description">

    <!-- Favicon -->
    <link href="<?= base_url() ?>/img/kirimkan-icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
    <style>
        .info {
            background-color: #ffacad;
            padding: 9px;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="<?= base_url() ?>/" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Kirimkan.id</h2>
        </a>
        <div class="d-block d-lg-none d-xl-none ms-auto">
            <?php if (session()->get('logged_in') == true &&  session()->get('level') == 0) { ?>
                <a href="<?= base_url('/paketku') ?>" class="nav-item nav-link">
                    <i class="bi bi-cart4 position-relative fs-5 p-0">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;"><?= $jumlah ?><span class="visually-hidden">unread messages</span>
                        </span>
                    </i>
                </a>
            <?php } else { ?>
                <a href="<?= base_url('/login') ?>" class="nav-item nav-link">
                    <i class="bi bi-cart4 position-relative"></i>
                </a>
            <?php } ?>
        </div>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= base_url('/') ?>" class="nav-item nav-link active">Home</a>
                <a href="<?= base_url('/#jerin') ?>" class="nav-item nav-link">Jerman ke Indonesia</a>
                <a href="<?= base_url('/#injer') ?>" class="nav-item nav-link">Indonesia ke Jerman</a>
                <a href="<?php echo base_url('/PageJadwal') ?>" class="nav-item nav-link">Jadwal</a>
                <a href="<?= base_url('/#panduan') ?>" class="nav-item nav-link">FAQ</a>
                <!--<a href="</?= base_url() ?>/login" class="nav-item nav-link">Login</a>-->
                <!--<div class="d-none d-lg-block d-xl-block ms-auto">-->
                <!--    </?php if (session()->get('logged_in') == true &&  session()->get('level') == 0) { ?>-->
                <!--        <a href="</?= base_url('/paketku') ?>" class="nav-item nav-link">-->
                <!--            <i class="bi bi-cart4 position-relative fs-5 p-0">-->
                <!--                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;"></?= $jumlah ?><span class="visually-hidden">unread messages</span>-->
                <!--                </span>-->
                <!--            </i>-->
                <!--        </a>-->
                <!--    </?php } else { ?>-->
                <!--        <a href="</?= base_url('/login') ?>" class="nav-item nav-link">-->
                <!--            <i class="bi bi-cart4 position-relative"></i>-->
                <!--        </a>-->
                <!--    </?php } ?>-->
                <!--</div>-->
            </div>
            <h7 class="m-0 pe-lg-5 d-none d-lg-block"><a href="whatsapp://send?text=Salam Admin saya butuh bantuan, apakah ada waktu untuk konsultasi?.&phone=+6285397802428&abid=+6285397802428"><i class="fa fa-headphones text-primary me-3"></i>+62-85397802428</a></h7>

        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?= base_url() ?>/img/carousel-1.jpg" alt="kirimkan.id">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <p class="fs-1 text-white"> PT. KIRIMKAN JASTIP INDONESIA in Collaboration with PT. CVGEN APP SUPPORT
                                </p> <br> <br>
                            </div>
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Titip Paket Jerman-Indonesia-Jerman</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Solusi untuk <span class="text-primary">Kirim Paket</span> Anda</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Melayani dengan ramah dan flexible.</p>
                                <!-- <? //php if (session()->get('logged_in') == true &&  session()->get('level') == 0) { 
                                        ?>
                                    <a href="<?= base_url() ?>/kirim" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Dashboard</a>
                                    <a href="<?= base_url() ?>/logout" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Logout</a>
                                <? //php } elseif (session()->get('logged_in') == true && session()->get('level') == 1) { 
                                ?>
                                    <a href="<?= base_url() ?>/admin" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Dashboard</a>
                                    <a href="<?= base_url() ?>/logout" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Logout</a>
                                <? //php } else { 
                                ?>
                                    <a href="<?= base_url() ?>/login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Loginnn</a>
                                    <a href="<?= base_url() ?>/daftar" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Kirim</a>
                                <? //php } 
                                ?> -->
                                <a href="https://api.whatsapp.com/send/?phone=6285397802428&text=Hi+kirimkan.id&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Hubungi Admin</a>
                                <!-- <a href="https://api.whatsapp.com/send/?phone=6285298649951&text=Jastip+kirimkan+Tgl..........&type=phone_number&app_absent=0" target="_blank" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Kirim</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?= base_url() ?>/img/carousel-2.jpg" alt="kirimkan.id">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <p class="fs-1 text-white"> PT. KIRIMKAN JASTIP INDONESIA in Collaboration with PT. CVGEN APP SUPPORT
                                </p> <br> <br>
                            </div>
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Terima Paket Jerman-Indonesia-Jerman</h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Solusi untuk <span class="text-primary">Terima Paket</span> Anda</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Melayani dengan ramah dan flexible.</p>
                                <!-- <? //php if (session()->get('logged_in') == true &&  session()->get('level') == 0) { 
                                        ?>
                                    <a href="<?= base_url() ?>/kirim" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Dashboard</a>
                                    <a href="<?= base_url() ?>/logout" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Logout</a>
                                <? //php } elseif (session()->get('logged_in') == true && session()->get('level') == 1) { 
                                ?>
                                    <a href="<?= base_url() ?>/admin" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Dashboard</a>
                                    <a href="<?= base_url() ?>/logout" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Logout</a>
                                <? //php } else { 
                                ?>
                                    <a href="<?= base_url() ?>/login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Loginn</a>
                                    <a href="<?= base_url() ?>/daftar" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Kirim</a>
                                <? //php } 
                                ?> -->
                                <a href="https://api.whatsapp.com/send/?phone=6285397802428&text=Hi+kirimkan.id&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Hubungi Admin</a>
                                <!-- <a href="https://api.whatsapp.com/send/?phone=6285298649951&text=Jastip+kirimkan+Tgl..........&type=phone_number&app_absent=0" target="_blank" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Kirim</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="jerin">
        <div class="container py-5">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url() ?>/img/about.jpg" style="object-fit: cover;" alt="kirimkan.id">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">Titip Paket Jerman ke Indonesia</h6>
                    <h1 class="mb-1">Titip paket Jerman ke Indonesia</h1>
                    <p>Dengan langkah mudah ini: </p>
                    <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <ol>
                            <li>Bungkus rapi/pesan dari amazon Jerman atau online shop.</li>
                            <li>Kirim ke alamat admin di Jerman</li>
                            <li>Konsultasi & Konfirmasi. WA CS: +6285397802428</li>
                            <!--<li>Catatan:<br>-->
                            <!--    Cantumkan di secarik kertas dalam paket alamat penerima di Indonesia<br>-->
                            <!--    <strong>Ada pertanyaan?</strong><br>-->
                            <!--    WA CS: +6285298649951-->
                            <!--</li>-->
                        </ol>
                    </div>
                    <div class="d-flex flex-column mb-4">
                        <span class="fw-bold fs-6">Alamat Admin di Jerman:</span>
                        <span class="fw-bold fs-6">Penerima: Sinta Alfatah</span>
                        <span class="fw-bold fs-6">Alamat: Hillinstrasse 36, Trier,.54296 Germany</span>
                    </div>


                   <a href="https://api.whatsapp.com/send/?phone=6285397802428&text=Hi+kirimkan.id,+Jerman+ke+Indonesia+&type=phone_number&app_absent=0" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>

                    <!-- </?php if (session()->get('logged_in') == true &&  session()->get('level') == 0) { ?>
                        <a href="</?= base_url() ?>/kirim" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>
                    </?php } elseif (session()->get('logged_in') == true && session()->get('level') == 1) { ?>
                        <a href="</?= base_url() ?>/paket" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cek Paket</a>
                    </?php } else { ?>
                        <a href="</?= base_url() ?>/login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>
                        <a href="https://api.whatsapp.com/send/?phone=4917677857140&text=Jastip+kirimkan+Tgl........&type=phone_numb er&app_absent=0" target="_blank" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Hubungi Admin</a>
                    </?php } ?> -->

                    <!--<a href="https://api.whatsapp.com/send/?phone=6285298649951&text=Jastip+Jerman+Indo+Tgl........&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- layanan -->
    <div class="container-xxl py-5" id="injer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Titip Paket Indonesia ke Jerman</h6>
                    <h1 class="mb-5">Titip paket Indonesia ke Jerman</h1>
                    <p>Dengan langkah mudah ini:</p>
                    <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <ol>
                            <li>Bungkus rapi / pesanan ecommerce (shopee, tokped, dll) atau online shop</li>
                            <li>Kirim ke alamat admin di Indonesia</li>
                            <li>Konsultasi & Konfirmasi. WA CS: +6285397802428</li>
                            <!--<li>Catatan:<br>-->
                            <!--    Cantumkan di secarik kertas dalam paket alamat penerima di Jerman-->
                            <!--    <br><strong>Ada pertanyaan?</strong><br>WA CS: +6285298649951-->
                            <!--</li>-->
                        </ol>
                    </div>
                    <div class="d-flex flex-column mb-4">
                        <span class="fw-bold fs-6">Alamat Admin di Indonesia:</span>
                        <span class="fw-bold fs-6">Penerima: Ibnu Alfatah</span>
                        <span class="fw-bold fs-6">Alamat: Ruko Saladin Mansion, Jalan margonda raya blok E No.9 Pancoran mas depok (Ruko Smartfren)</span>
                        <!--<span class="fw-bold fs-6">Alamat: Perkantoran Buncit Mas, Jl. Mampang Prpt. Raya No.CC8, RT.1/RW.1, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760</span>-->
                        <span class="fw-bold fs-6">HP: 6281235235857</span>
                        <!--<span class="fw-bold fs-6">HP: 6285397802428</span>-->
                    </div>
                    
                   <a href="https://api.whatsapp.com/send/?phone=6285397802428&text=Hi+kirimkan.id,+Indonesia+ke+Jerman+&type=phone_number&app_absent=0" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>

                    <!-- </?php if (session()->get('logged_in') == true &&  session()->get('level') == 0) { ?>
                        <a href="</?= base_url() ?>/kirim" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>
                    </?php } elseif (session()->get('logged_in') == true && session()->get('level') == 1) { ?>
                        <a href="</?= base_url() ?>/paket" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cek Paket</a>
                    </?php } else { ?>
                        <a href="</?= base_url() ?>/login" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>
                        <a href="https://api.whatsapp.com/send/?phone=6285298649951&text=Jastip+kirimkan+Tgl........&type=phone_numb er&app_absent=0" target="_blank" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Hubungi Admin</a>
                    </?php } ?> -->
                    
                    <!--<a href="https://api.whatsapp.com/send/?phone=6285298649951&text=Jastip+Indo+Jerman+Tgl........&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Kirim Paket</a>-->

                </div>
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url() ?>/img/feature.jpg" style="object-fit: cover;" alt="kirimkan.id">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- panduan-->
    <div class="container-xxl " id="panduan">
        <div class="container ">
            <div class="row g-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h6 class="text-secondary text-uppercase mb-3">Frequently Asked Questions</h6>
                    <h1>FAQ</h1>
                    <!-- <div class="info"><strong>Perhatian:</strong> Pilih salah satu rekening pembayaran berikut ini. Mohon lakukan pembayaran sesuai dengan nominal yang tertera, agar mudah dilakukan pengecekan Admin kami. Terimakasih</div> -->
                </div>
                <div class="container feature px-lg-0">
                    <ul class="list-group">
                        <li>Berapa harga titip paket dari Indonesia ke Jerman?<br><span class="fw-bold">25 Euro/kg Gratis Ongkir di dalam Jerman</span></li>
                        <li>Berapa harga titip paket dari Jerman ke Indonesia?<br><span class="fw-bold">25 Euro/kg Gratis Ongkir di dalam Indonesia</span></li>
                        <li>Berapa harga untuk titip dokumen?<br>
                            <span class="fw-bold">- Per lembar 1.5euro</span><br>
                            <span class="fw-bold">- Jika ingin hitungan kilogram untuk dokumen, harga sama dengan harga normal</span>
                        </li>
                        <!--<li>Bagaimana cara bayar di kirimkan.id?<br>-->
                        <!--    <span class="fw-bold">Setelah klik checkout, anda akan diarahkan ke pilihan bayar sesuai tagihan paket anda dan ke nomor rekening mana.</span>-->
                        <!--</li>-->
                        <li>Bagaimana caranya menghindari penipuan yang mengatasnamakan kirimkan.id? <br>
                            <span class="fw-bold">Pastikan melakukan pembayaran hanya ke rekening atas nama PT.KIRIMKAN JASTIP INDONESIA baik rekening RUPIAH maupun rekening EURO</span>
                        </li>                        <!--<li class="list-group-item">-->
                        <!--    <div class="row gy-4">-->
                        <!--        <div class="col-lg-6">-->
                        <!--            <ul class="list-group">-->
                        <!--                <li class="list-group-item bg-secondary text-white">-->
                        <!--                    <h6>Bank Transfer RUPIAH</h6>-->
                        <!--                </li>-->
                        <!--                <li class="list-group-item p-0 text-center">-->
                        <!--                    <div class="d-flex flex-column mb-1">-->
                        <!--                        <div class="p-2">-->
                        <!--                            <img src="</?= base_url() ?>/img/bni.jpg" class="img-fluid" style="width: 150px;" alt="kirimkan.id">-->
                        <!--                        </div>-->
                        <!--                        <div class="p-2">-->
                        <!--                            <div class="d-flex flex-column">-->
                        <!--                                <span class="fs-6 fw-bold">PT. KIRIMKAN JASTIP INDONESIA</span>-->
                        <!--                                <span class="fs-6 ">BANK: BNI</span>-->
                        <!--                                <span class="fs-6 fw-bold">No. Rek: 173 125 8180</span>-->
                        <!--                            </div>-->

                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </li>-->

                        <!--            </ul>-->
                        <!--        </div>-->
                        <!--        <div class="col-lg-6">-->
                        <!--            <ul class="list-group">-->
                        <!--                <li class="list-group-item bg-secondary ">-->
                        <!--                    <h6>Bank Transfer EURO</h6>-->
                        <!--                </li>-->
                        <!--                <li class="list-group-item p-0 text-center">-->
                        <!--                    <div class="row">-->
                        <!--                        <div class="d-flex flex-column mb-1">-->
                        <!--                            <div class="p-2">-->
                        <!--                                <img src="</?= base_url() ?>/img/atmuro.jpg" class="img-fluid" style="width: 150px;" alt="kirimkan.id">-->
                        <!--                            </div>-->
                        <!--                            <div class="p-2">-->
                        <!--                                <div class="d-flex flex-column">-->
                        <!--                                    <span class="fs-6 fw-bold">ACCOUNT HOLDER : PT KIRIMKAN JASTIP INDONESIA</span>-->
                        <!--                                    <span class="fs-6 ">BIC: : TRWIBEB1XXX</span>-->
                        <!--                                    <span class="fs-6 fw-bold">IBAN: : BE10 9676 2837 9504</span>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </li>-->
                        <!--            </ul>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <!--<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Perkantoran Buncit Mas, Jl. Mampang Prpt. Raya No.CC8, RT.1/RW.1, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760</p>-->
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hillinstraße 36, Trier, 54296, Germany</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62-85397802428</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sinta@kirimkan.id</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Links</h4>
                    <a class="btn btn-link" href="#jerin">Jerman-Indonesia</a>
                    <a class="btn btn-link" href="#injer">Indonesia-Jerman</a>
                    <a class="btn btn-link" href="<?= base_url() ?>/terms">Syarat & Ketentuan</a>
                    <a class="btn btn-link" href="https://api.whatsapp.com/send/?phone=6285397802428&text=Hi+kirimkan.id&type=phone_number&app_absent=0">Bantuan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Media Sosial</h4>
                    <a class="btn btn-link" href="https://www.youtube.com/@PTKIRIMKANJASTIPINDONESI-ld5is/featured"><i class="fab fa-youtube"></i> Youtube</a>
                    <a class="btn btn-link" href="https://www.facebook.com/kirimkan.id/"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a class="btn btn-link" href="https://www.linkedin.com/in/pt-kirimkan-jastip-indonesia-15767a29a/"><i class="fab fa-linkedin-in"></i> Linkedin</a>
                    <a class="btn btn-link" href=""><i class="fab fa-google"></i> Google Business</a>
                    <a class="btn btn-link" href="https://instagram.com/pt_kirimkanjastipindonesia?igshid=MXAyZHFqaW9mamdieQ=="><i class="fab fa-instagram"></i> Instagram</a>
                    <a class="btn btn-link" href="https://www.tiktok.com/@kirimkan.id2?_t=8hAFTRHayiP&_r=1"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <g transform="scale(5.12,5.12)">
                                    <path d="M9,4c-2.75042,0 -5,2.24958 -5,5v32c0,2.75042 2.24958,5 5,5h32c2.75042,0 5,-2.24958 5,-5v-32c0,-2.75042 -2.24958,-5 -5,-5zM9,6h32c1.67158,0 3,1.32842 3,3v32c0,1.67158 -1.32842,3 -3,3h-32c-1.67158,0 -3,-1.32842 -3,-3v-32c0,-1.67158 1.32842,-3 3,-3zM26.04297,10c-0.5515,0.00005 -0.99887,0.44655 -1,0.99805c0,0 -0.01098,4.87522 -0.02148,9.76172c-0.0053,2.44325 -0.01168,4.88902 -0.01562,6.73047c-0.00394,1.84145 -0.00586,3.0066 -0.00586,3.10352c0,1.81526 -1.64858,3.29883 -3.52734,3.29883c-1.86379,0 -3.35156,-1.48972 -3.35156,-3.35352c0,-1.86379 1.48777,-3.35156 3.35156,-3.35156c0.06314,0 0.1904,0.02075 0.4082,0.04688c0.28415,0.03406 0.56927,-0.05523 0.78323,-0.24529c0.21396,-0.19006 0.33624,-0.46267 0.33591,-0.74885v-4.20117c-0.00005,-0.528 -0.41054,-0.965 -0.9375,-0.99805c-0.15583,-0.0098 -0.35192,-0.0293 -0.58984,-0.0293c-5.24953,0 -9.52734,4.27782 -9.52734,9.52734c0,5.24953 4.27782,9.52734 9.52734,9.52734c5.24938,0 9.52734,-4.27782 9.52734,-9.52734v-9.04883c1.45461,1.16341 3.26752,1.90039 5.26953,1.90039c0.27306,0 0.53277,-0.01618 0.78125,-0.03906c0.51463,-0.04749 0.90832,-0.47927 0.9082,-0.99609v-4.66992c0.0003,-0.52448 -0.40463,-0.9601 -0.92773,-0.99805c-3.14464,-0.22561 -5.65141,-2.67528 -5.97852,-5.79102c-0.05305,-0.50925 -0.48214,-0.89619 -0.99414,-0.89648zM27.04102,12h2.28125c0.72678,3.2987 3.30447,5.8144 6.63672,6.44531v2.86523c-2.13887,-0.10861 -4.01749,-1.1756 -5.12305,-2.85742c-0.24284,-0.36962 -0.69961,-0.53585 -1.12322,-0.40877c-0.4236,0.12708 -0.71344,0.51729 -0.71272,0.95955v11.53516c0,4.16848 -3.35873,7.52734 -7.52734,7.52734c-4.16848,0 -7.52734,-3.35887 -7.52734,-7.52734c0,-4.00052 3.12077,-7.17588 7.05469,-7.43164v2.17578c-2.71358,0.25252 -4.87891,2.47904 -4.87891,5.25586c0,2.94421 2.40735,5.35352 5.35156,5.35352c2.92924,0 5.52734,-2.30609 5.52734,-5.29883c0,0.04892 0.00186,-1.25818 0.00586,-3.09961c0.0039,-1.84143 0.01037,-4.28722 0.01563,-6.73047c0.0094,-4.3869 0.0177,-7.91447 0.01953,-8.76367z"></path>
                                </g>
                            </g>
                        </svg> Tiktok</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="https://www.kirimkan.id/">www.kirimkan.id</a> - All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>/js/main.js"></script>
    <script type="text/javascript" src="//www.privacypolicies.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function() {
            cookieconsent.run({
                "notice_banner_type": "simple",
                "consent_type": "express",
                "palette": "dark",
                "language": "en",
                "page_load_consent_levels": ["strictly-necessary"],
                "notice_banner_reject_button_hide": false,
                "preferences_center_close_button_hide": false,
                "page_refresh_confirmation_buttons": false
            });
        });
    </script>
</body>

</html>