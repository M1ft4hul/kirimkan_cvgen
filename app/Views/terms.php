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
                <!-- <div class="d-none d-lg-block d-xl-block ms-auto">
                    </?php if (session()->get('logged_in') == true &&  session()->get('level') == 0) { ?>
                        <a href="</?= base_url('/paketku') ?>" class="nav-item nav-link">
                            <i class="bi bi-cart4 position-relative fs-5 p-0">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;"></?= $jumlah ?><span class="visually-hidden">unread messages</span>
                                </span>
                            </i>
                        </a>
                    </?php } else { ?>
                        <a href="</?= base_url('/login') ?>" class="nav-item nav-link">
                            <i class="bi bi-cart4 position-relative"></i>
                        </a>
                    </?php } ?>
                </div> -->
            </div>
            <h7 class="m-0 pe-lg-5 d-none d-lg-block"><a href="whatsapp://send?text=Salam Admin saya butuh bantuan, apakah ada waktu untuk konsultasi?.&phone=+6285298649951&abid=+6285298649951"><i class="fa fa-headphones text-primary me-3"></i>+62-85298649951</a></h7>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Terms and Conditions</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        Terms and Conditions
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- layanan -->
    <div class="container-xxl" id="layanan">
        <div class="container">
            <div class="row g-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <div class="ps-4">
                            <h2><strong>Terms and Conditions</strong></h2>

                            <p>Welcome to Kirimkan.id!</p>

                            <p>These terms and conditions outline the rules and regulations for the use of Kirimkan.id's Website, located at https://kirimkan.id/.</p>

                            <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Kirimkan.id if you do not agree to take all of the terms and conditions stated on this page.</p>

                            <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same. Our Terms and Conditions were created with the help of the <a href="https://www.privacypolicyonline.com/terms-conditions-generator/">Terms & Conditions Generator</a>.</p>

                            <h3><strong>Cookies</strong></h3>

                            <p>We employ the use of cookies. By accessing Kirimkan.id, you agreed to use cookies in agreement with the Kirimkan.id's Privacy Policy.</p>

                            <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

                            <h3><strong>License</strong></h3>

                            <p>Unless otherwise stated, Kirimkan.id and/or its licensors own the intellectual property rights for all material on Kirimkan.id. All intellectual property rights are reserved. You may access this from Kirimkan.id for your own personal use subjected to restrictions set in these terms and conditions.</p>

                            <p>You must not:</p>
                            <ul>
                                <li>Republish material from Kirimkan.id</li>
                                <li>Sell, rent or sub-license material from Kirimkan.id</li>
                                <li>Reproduce, duplicate or copy material from Kirimkan.id</li>
                                <li>Redistribute content from Kirimkan.id</li>
                            </ul>

                            <p>This Agreement shall begin on the date hereof.</p>

                            <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Kirimkan.id does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Kirimkan.id,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Kirimkan.id shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

                            <p>Kirimkan.id reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

                            <p>You warrant and represent that:</p>

                            <ul>
                                <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                                <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                                <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                                <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                            </ul>

                            <p>You hereby grant Kirimkan.id a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

                            <h3><strong>Hyperlinking to our Content</strong></h3>

                            <p>The following organizations may link to our Website without prior written approval:</p>

                            <ul>
                                <li>Government agencies;</li>
                                <li>Search engines;</li>
                                <li>News organizations;</li>
                                <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                            </ul>

                            <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

                            <p>We may consider and approve other link requests from the following types of organizations:</p>

                            <ul>
                                <li>commonly-known consumer and/or business information sources;</li>
                                <li>dot.com community sites;</li>
                                <li>associations or other groups representing charities;</li>
                                <li>online directory distributors;</li>
                                <li>internet portals;</li>
                                <li>accounting, law and consulting firms; and</li>
                                <li>educational institutions and trade associations.</li>
                            </ul>

                            <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Kirimkan.id; and (d) the link is in the context of general resource information.</p>

                            <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

                            <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Kirimkan.id. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

                            <p>Approved organizations may hyperlink to our Website as follows:</p>

                            <ul>
                                <li>By use of our corporate name; or</li>
                                <li>By use of the uniform resource locator being linked to; or</li>
                                <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                            </ul>

                            <p>No use of Kirimkan.id's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

                            <h3><strong>iFrames</strong></h3>

                            <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

                            <h3><strong>Content Liability</strong></h3>

                            <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

                            <h3><strong>Reservation of Rights</strong></h3>

                            <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

                            <h3><strong>Removal of links from our website</strong></h3>

                            <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

                            <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

                            <h3><strong>Disclaimer</strong></h3>

                            <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

                            <ul>
                                <li>limit or exclude our or your liability for death or personal injury;</li>
                                <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                                <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                                <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                            </ul>

                            <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

                            <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->




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
</body>

</html>