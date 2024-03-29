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

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/r-2.4.0/datatables.min.css" />

    <style>
        span.mata {
            position: relative;
            top: -45px;
            margin: 0px 10px;
            float: right;
            font-size: 24px;
        }

        .harga {
            font-size: 2rem;
        }

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
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= base_url('/') ?>" class="nav-item nav-link active">Home</a>
                <a href="<?= base_url('/profil-member') ?>" class="nav-item nav-link">Profil</a>
                <a href="<?= base_url('/paketku') ?>" class="nav-item nav-link">Paketku</a>
                <a href="<?= base_url('/kirim') ?>" class="nav-item nav-link">Kirim Paket</a>
                <a href="<?= base_url('/logout') ?>" class="nav-item nav-link">Keluar</a>
            </div>
            <h4 class="m-0 pe-lg-5 d-none d-lg-block"><a href="whatsapp://send?text=Salam Admin saya butuh bantuan, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951"><i class="fa fa-headphones text-primary me-3"></i>+62-85298649951</a></h4>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 3rem">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Bayar Kiriman</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Bayar kiriman
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl ">
        <div class="container ">
            <div class="row g-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h1>BAYAR KIRIMANKU</h1>
                    <div class="info"><strong>Perhatian:</strong> Pilih salah satu rekening pembayaran berikut ini. Mohon lakukan pembayaran sesuai dengan nominal yang tertera, agar mudah dilakukan pengecekan Admin kami. Terimakasih</div>
                </div>
                <div class="container feature px-lg-0" style="font-size: 12px;">
                    <ul class="list-group">

                        <li class="list-group-item text-center">
                            <span class="fw-bold fs-5">Bayar sebelum: <?= $bayar->bayar_sebelum ?></span>
                        </li>
                        <li class="list-group-item">
                            <div class="row gy-4">
                                <div class="col-lg-6">
                                    <ul class="list-group">
                                        <li class="list-group-item bg-secondary text-white">
                                            <h6>Bank Transfer RUPIAH</h6>
                                        </li>
                                        <li class="list-group-item p-0 text-center">
                                            <div class="d-flex flex-column mb-1">
                                                <div class="p-2">
                                                    <img src="<?= base_url() ?>/img/btpn.png" class="img-fluid" style="width: 150px;" alt="kirimkan.id">
                                                </div>
                                                <div class="p-2">
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-bold">SINTA BELA ALFATAH</span>
                                                        <span class="fs-6 ">BANK: BTPN, Jenius</span>
                                                        <span class="fs-6 fw-bold">No. Rek: 900 1229 7934</span>
                                                    </div>
                                                    <p class="fw-bold mb-0">IDR: <span class="harga"><?= $bayar->harga ?>,-</span></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-0 text-center fs-6 fw-bold">
                                            KODE PAKET: <sapan class="text-danger"><?= $bayar->kode_paket ?></sapan>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-group">
                                        <li class="list-group-item bg-secondary ">
                                            <h6>Bank Transfer EURO</h6>
                                        </li>
                                        <li class="list-group-item p-0 text-center">
                                            <div class="row">
                                                <div class="d-flex flex-column mb-1">
                                                    <div class="p-2">
                                                        <img src="<?= base_url() ?>/img/sparkasse.png" class="img-fluid" style="width: 150px;" alt="kirimkan.id">
                                                    </div>
                                                    <div class="p-2">
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-bold">SINTA BELA ALFATAH</span>
                                                            <span class="fs-6 ">BANK: SPARKASSE</span>
                                                            <span class="fs-6 fw-bold">IBAN: DE18 4165 1770 0000 7241 53</span>
                                                        </div>
                                                        <p class="fw-bold mb-0">EURO: <span class="harga"><?= $bayar->harga_euro ?>,-</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-0 text-center fs-6 fw-bold">
                                            KODE PAKET: <sapan class="text-danger"><?= $bayar->kode_paket ?></sapan>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item text-center">
                            <span class="fw-bold fs-6">Hubungi Admin jika Anda sudah melakukan pembayaran.</span><br>
                            <a href="whatsapp://send?text=Salam, Admin. Paket dengan KODE *<?= $bayar->kode_paket ?>* sudah dibayar, mohon di cek, Terimakasih.&phone=+6285298649951&abid=+6285298649951" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft">Hubungi Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- About End -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-light mb-4">Alamat</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Perkantoran Buncit Mas, Jl. Mampang Prpt. Raya No.CC8, RT.1/RW.1, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Hillinstraße 36, Trier, 54296, Germany</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62-85298649951</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@kirimkan.id</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Layanan</h4>
                    <a class="btn btn-link" href="">Kirim Paket</a>
                    <a class="btn btn-link" href="">Jemput Paket</a>
                    <a class="btn btn-link" href="">Road Freight</a>
                    <a class="btn btn-link" href="">Logistic Solutions</a>
                    <a class="btn btn-link" href="">Industry solutions</a>
                </div> -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Links</h4>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Layanan</a>
                    <a class="btn btn-link" href="">Syarat & Ketentuan</a>
                    <a class="btn btn-link" href="">Bantuan</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Media Sosial</h4>
                    <a class="btn btn-link" href=""><i class="fab fa-twitter"></i> Twitter</a>
                    <a class="btn btn-link" href=""><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a class="btn btn-link" href=""><i class="fab fa-youtube"></i> Youtube</a>
                    <a class="btn btn-link" href=""><i class="fab fa-linkedin-in"></i> Linkedin</a>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="https://www.kirimkan.id/">www.kirimkan.id</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                        <!-- </br>Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/r-2.4.0/datatables.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="<?= base_url() ?>/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#paket').DataTable({
                responsive: true,
            });

            $(function() {
                $("#show_eye").click(function() {
                    $(this).toggleClass("bi bi-eye-slash-fill");
                    var type = $(this).hasClass("bi-eye-slash-fill") ? "text" : "password";
                    $("#password").attr("type", type);
                });
            });
        })
    </script>
</body>

</html>