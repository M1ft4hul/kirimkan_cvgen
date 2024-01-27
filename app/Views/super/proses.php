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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
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
                <a href="<?= base_url('/') ?>" class="nav-item nav-link ">Home</a>
                <a href="<?= base_url('/profil-admins') ?>" class="nav-item nav-link">Profil</a>
                <a href="<?= base_url('/pakets') ?>" class="nav-item nav-link">Kirim</a>
                <a href="<?= base_url('/Pagejadwal')?>" class="nav-item nav-link">Jadwal</a>
                <a href="<?= base_url('/prosess') ?>" class="nav-item nav-link active">Proses</a>
                <a href="<?= base_url('/tuntass') ?>" class="nav-item nav-link">Tuntas</a>
                <a href="<?= base_url('/logout') ?>" class="nav-item nav-link">Keluar</a>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Kiriman Diproses</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Kiriman diproses
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
                    <h1>KIRIMAN DIPROSES</h1>
                </div>
                <div class="container feature px-lg-0" style="font-size: 12px;">
                    <table class="table table-bordered display responsive" id="paket" width="100%">
                        <thead>
                            <tr>
                                <th>Kode Paket</th>
                                <th>Nama Paket</th>
                                <th>Pengirim</th>
                                <th>Penerima</th>
                                <th>Negara Tujuan</th>
                                <th>Status Paket</th>
                                <th>Berat</th>
                                <th>Biaya</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($paketku as $x) { ?>
                                <tr>
                                    <td class="fw-bold"><?= $x->kode_paket ?></td>
                                    <td><?= $x->nama_paket ?></td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold"><?= $x->nama ?></span>
                                            <span>Alamat: <?= nl2br($x->alamat) ?></span>
                                            <span>WA/HP: <br><a href="whatsapp://send?text=Paket sedang dikirim.&phone=+62<?= $x->wa ?>&abid=+62<?= $x->wa ?>" class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a> <a href="tel:+62<?= $x->hp ?>" class="btn btn-primary btn-sm"><i class="bi bi-telephone-forward-fill"></i></a></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fw-bold"><?= $x->nama_penerima ?></span>
                                            <span>Alamat: <?= nl2br($x->alamat_penerima . '- kodepos ' . $x->kodepos) ?></span>
                                            <span>WA/HP: <br><a href="whatsapp://send?text=Paket sedang dikirim.&phone=+62<?= $x->wa_penerima ?>&abid=+62<?= $x->wa_penerima ?>" class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a> <a href="tel:+62<?= $x->hp_penerima ?>" class="btn btn-primary btn-sm"><i class="bi bi-telephone-forward-fill"></i></a></span>
                                        </div>
                                    </td>
                                    <td><?= $x->negara ?></td>
                                    <td>
                                        <?php switch ($x->status) {
                                            case 0:
                                                echo '<span class="text-danger">Paket dari Jerman ke Indonesia, sedang dikirim ke Admin Jerman. Ongkos kirim akan dihitung setelah paket tiba di Admin Jerman.</span>';
                                                break;
                                            case 1:
                                                echo '<span class="text-danger">Paket telah diterima Admin Jerman, Paket akan dikirim ke Indonesia setelah pembayaran dinyatakan Valid.</span><br><span class="badge bg-danger">Menunggu pembayaran</span>';
                                                break;
                                            case 2:
                                                echo '<span class="text-info">Pembayaran diterima, Paket sedang diproses untuk dikirim ke Indonesia.</span>';
                                                break;
                                            case 3:
                                                echo '<span class="text-info">Paket sudah dikirim ke Indonesia, menunggu konfirmasi Admin Indonesia.</span>';
                                                break;
                                            case 4:
                                                echo '<span class="text-info">Paket sudah diterima Admin Indonesia, Paket sedang diproses untuk dikirim ke Alamat penerima.</span>';
                                                break;
                                            default:
                                                echo '<span class="text-success">Sudah diterima pemilik di alamat tujuan.</span>';
                                        } ?>
                                    </td>
                                    <td>
                                        <strong><?= $x->berat ?> Kg </strong>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span>IDR. <span class="fs-6 fw-bold"><?= $x->harga ?>,-</span></span>
                                            <span>EURO. <span class="fs-6 fw-bold"><?= $x->harga_euro ?>,-</span></span>
                                            <?php switch ($x->status) {
                                                case 1:
                                                    echo '<span>Jatuh tempo:</span><span><?= $x->bayar_sebelum ?></span>';
                                                    break;
                                            } ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php switch ($x->status) {
                                            case 1:
                                                echo '<button type="button" class="btn btn-warning btn-sm" onclick="ubah_proses(\'' . $x->kode_paket . '\')"><i class="bi bi-pencil-square"></i></button>';
                                                break;
                                            case 2:
                                                echo '<button type="button" class="btn btn-warning btn-sm" onclick="ubah_proses2(\'' . $x->kode_paket . '\')"><i class="bi bi-pencil-square"></i></button>';
                                                break;
                                            default:
                                                echo '<span class="text-info">Dikirim</span>';
                                        } ?>


                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ubah_proses" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update data Kiriman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url() ?>/ubah-proses" method="POST">
                    <?= csrf_field() ?>
                    <div class="modal-body">
                        <input type="hidden" name="id_paket" id="id_paket" class="onIDpaket">
                        <p>Sebelum mengubah status Kiriman, pastikan Customer telah melakukan pembayaran. <span class="text-danger">Setelah menekan tombol YA, Aksi ini tidak dapat di ubah.</span></p>
                        <strong>Apakah Pembayaran sudah VALID?</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Iya, Valid</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ubah_proses2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update data Kiriman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url() ?>/ubah-kirim" method="POST">
                    <?= csrf_field() ?>
                    <div class="modal-body">
                        <input type="hidden" name="id_paket2" id="id_paket2" class="onIDpaket2">
                        <p>Sebelum mengubah status Kiriman, pastikan paket sudah siap dikirim. <span class="text-danger">Setelah menekan tombol YA, Aksi ini tidak dapat di ubah.</span></p>
                        <strong>Apakah paket siap dikirim?</strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Iya, Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- About End -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
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
    <script src="<?= base_url() ?>/js/pesan.js"></script>
    <script>
        $(document).ready(function() {
            $('#paket').DataTable({
                responsive: true,
            });

        })

        function ubah_proses(id) {
            $(".onIDpaket").val(id);
            $("#ubah_proses").modal('show');
        }

        function ubah_proses2(id) {
            $(".onIDpaket2").val(id);
            $("#ubah_proses2").modal('show');
        }
    </script>
</body>

</html>