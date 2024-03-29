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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        span.mata {
            position: relative;
            top: -45px;
            margin: 0px 10px;
            float: right;
            font-size: 24px;
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #cc3234;
            color: #fff;
            font-size: 1em;
        }
    </style>
</head>

<body>
    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
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
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Kirim Paket ke Jerman</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Kirim ke Jerman
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl ">
        <div class="container ">
            <div class="row g-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <h1>KIRIM PAKET KE JERMAN</h1>
                    <p>Nomor HP dan Nomor Whatsapp WAJIB menggunakan KODE NEGARA (Contoh: 6281xxxx, 4912xxxx)</p>
                </div>
                <div class="container feature px-lg-0">
                    <div class="row g-5 mx-lg-0">
                        <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" hidden>
                            <h3 class="mb-2">Data Pengirim</h3>
                            <p>Data PENGIRIM diambil dari data Pemilik Akun, ubah melalui profil Anda.</p>
                            <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="row g-3">
                                    <div class="col-lg-6 form-floating">
                                        <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" value="<?= $dataku->nama ?>" readonly />
                                        <label for="nama_pengirim">Nama Pengirim</label>
                                    </div>
                                    <div class="col-lg-6 form-floating">
                                        <input type="email" class="form-control" id="email_pengirim" name="email_pengirim" value="<?= $dataku->email ?>" readonly />
                                        <label for="email_pengirim">Email</label>
                                    </div>
                                    <div class="col-lg-6 form-floating">
                                        <input type="number" class="form-control" id="wa_pengirim" name="wa_pengirim" value="<?= $dataku->wa ?>" readonly />
                                        <label for="wa_pengirim">Whatsapp</label>
                                    </div>
                                    <div class="col-lg-6 form-floating">
                                        <input type="number" class="form-control" id="hp_pengirim" name="hp_pengirim" value="<?= $dataku->hp ?>" readonly />
                                        <label for="hp_pengirim">Nomor HP</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" id="alamat_pengirim" name="alamat_pengirim" style="height: 100px" readonly><?= nl2br($dataku->alamat) ?></textarea>
                                        <label for="alamat_pengirim">Alamat</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="kodepos_pengirim" name="kode_pos" value="<?= $dataku->kodepos ?>" readonly />
                                        <label for="kodepos_pengirim">Kode Pos</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col feature-text wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <h3 class="mb-2">Data Penerima</h3>
                            <p>Masukkan data PENERIMA dengan Lengkap Untuk di Verifikasi.</p>
                            <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <form action="<?= base_url() ?>/kirim-kejerman" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="row g-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control <?= ($validation->hasError('nama_paket')) ? 'is-invalid'  : ''; ?>" id="nama_paket" name="nama_paket" value="<?= old('nama_paket') ?>" placeholder="nama_paket Penerima" />
                                            <label for="nama_paket">Nama Paket</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('nama_paket'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-floating">
                                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid'  : ''; ?>" id="nama" name="nama" value="<?= old('nama') ?>" placeholder="Nama Penerima" />
                                            <label for="nama">Nama Penerima</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('nama'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-floating">
                                            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid'  : ''; ?>" id="email" name="email" value="<?= old('email') ?>" placeholder="Email: email@email.com" />
                                            <label for="email">Email</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('email'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-floating">
                                            <input type="number" class="form-control <?= ($validation->hasError('wa')) ? 'is-invalid'  : ''; ?>" id="wa" name="wa" value="<?= old('wa') ?>" placeholder="Whatsapp wajib kode negara" />
                                            <label for="wa">Whatsapp</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('wa'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-floating">
                                            <input type="number" class="form-control <?= ($validation->hasError('hp')) ? 'is-invalid'  : ''; ?>" id="hp" name="hp" value="<?= old('hp') ?>" placeholder="Nomor HP wajib kode negara" />
                                            <label for="hp">Nomor HP</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('hp'); ?>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid'  : ''; ?>" id="alamat" name="alamat" style="height: 100px" placeholder="Tuliskan alamat lengkap"><?= old('alamat') ?></textarea>
                                            <label for="alamat">Alamat Lengkap</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <input type="number" class="form-control <?= ($validation->hasError('kodepos')) ? 'is-invalid'  : ''; ?>" id="kodepos" name="kodepos" value="<?= old('kodepos') ?>" placeholder="kode pos" />
                                            <label for="kodepos">Kode Pos</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('kodepos'); ?>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control <?= ($validation->hasError('catatan')) ? 'is-invalid'  : ''; ?>" id="catatan" name="catatan" style="height: 100px" placeholder="Catatan Tambahan"><?= old('catatan') ?></textarea>
                                            <label for="catatan">Catatan Tambahan</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('catatan'); ?>
                                            </div>
                                        </div>
                                        <small><strong class="text-danger">Catatan Tambahan:</strong> Tulis NAMA PENGIRIM, HP/WA dan ALAMAT Pengirim, Tuliskan juga apakah Paket akan dijemput.</small>

                                    </div>
                                    <button class="btn btn-primary w-100 py-3 mt-4" type="submit">
                                        Kirimkan
                                    </button>
                                </form>
                            </div>

                        </div>

                    </div>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="<?= base_url() ?>/js/main.js"></script>
    <script src="<?= base_url() ?>/js/pesan.js"></script>
    <script>
        $(function() {
            $("#show_eye").click(function() {
                $(this).toggleClass("bi bi-eye-slash-fill");
                var type = $(this).hasClass("bi-eye-slash-fill") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });
    </script>
</body>

</html>