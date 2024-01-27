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
                <a href="<?= base_url('/') ?>" class="nav-item nav-link">Home</a>
                <a href="<?= base_url('/profil-member') ?>" class="nav-item nav-link active">Profil</a>
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
            <h1 class="display-3 text-white mb-3 animated slideInDown">Profilku</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Profilku
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
                    <h1>DATA PROFILKU</h1>
                </div>
                <div class="container feature px-lg-0">
                    <div class="row g-5 mx-lg-0">
                        <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <h3 class="mb-2">Data Profilku</h3>
                            <p>Data profil Anda saat ini.</p>
                            <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="row g-3">
                                    <div class="col-lg-6 form-floating">
                                        <input type="text" class="form-control" id="nama_lama" name="nama_lama" value="<?= $member->nama ?>" readonly />
                                        <label for="nama_lama">Nama Lengkap</label>
                                    </div>
                                    <div class="col-lg-6 form-floating">
                                        <input type="email" class="form-control" id="email_lama" name="email_lama" value="<?= $member->email ?>" readonly />
                                        <label for="email_lama">Email</label>
                                    </div>
                                    <div class="col-lg-6 form-floating">
                                        <input type="number" class="form-control" id="wa_lama" name="wa_lama" value="<?= $member->wa ?>" readonly />
                                        <label for="wa_lama">Whatsapp</label>
                                    </div>
                                    <div class="col-lg-6 form-floating">
                                        <input type="number" class="form-control" id="hp_lama" name="hp_lama" value="<?= $member->hp ?>" readonly />
                                        <label for="hp_lama">Nomor HP</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" id="alamat_lama" name="alamat_lama" style="height: 100px" readonly><?= $member->alamat ?></textarea>
                                        <label for="alamat_lama">Alamat</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="kodepos_lama" name="kodepos_lama" value="<?= $member->kodepos ?>" readonly />
                                        <label for="kodepos_lama">Kode Pos</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <h3 class="mb-2">Ubah Data Profilku</h3>
                            <p>Ubah data profil Anda.</p>
                            <div class="d-flex mb-1 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <form action="<?= base_url() ?>/simpan-profil" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="row g-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid'  : ''; ?>" id="nama" name="nama" value="<?= old('nama') ?>" placeholder="Nama Lengkap" />
                                            <label for="nama">Nama Lengkap</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('nama'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-floating">
                                            <input type="number" class="form-control <?= ($validation->hasError('wa')) ? 'is-invalid'  : ''; ?>" id="wa" name="wa" value="<?= old('wa') ?>" placeholder="Whatsapp" />
                                            <label for="wa">Whatsapp</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('wa'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 form-floating">
                                            <input type="number" class="form-control <?= ($validation->hasError('hp')) ? 'is-invalid'  : ''; ?>" id="hp" name="hp" value="<?= old('hp') ?>" placeholder="Nomor HP" />
                                            <label for="hp">Nomor HP</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('hp'); ?>
                                            </div>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid'  : ''; ?>" placeholder="Tuliskan alamat dengan detail" id="alamat" name="alamat" style="height: 100px"><?= old('alamat') ?></textarea>
                                            <label for="alamat">Alamat</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <input type="number" class="form-control <?= ($validation->hasError('kodepos')) ? 'is-invalid'  : ''; ?>" id="kodepos" name="kodepos" value="<?= old('kodepos') ?>" placeholder="Kodepos" />
                                            <label for="kodepos">Kode Pos</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('kodepos'); ?>
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
                                            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid'  : ''; ?>" id="password" name="password" value="<?= old('password') ?>" placeholder="Password" />
                                            <span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
                                            <label for="password">Password</label>
                                            <div class="invalid-feedback ps-2">
                                                <?= $validation->getError('password'); ?>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100 py-3" type="submit">
                                            Ubah Profil
                                        </button>
                                    </div>
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
                    <a class="btn btn-link" href="<?php echo base_url('/privacy') ?>">Privacy policy</a>
                    <a class="btn btn-link" href="<?php echo base_url('/imprint') ?>">Imprint</a>
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