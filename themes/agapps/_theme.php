<!DOCTYPE html>
<html lang="<?= CONF_SITE_LANG ?>">

<head>
    <meta charset="utf-8">

    <meta name="mit" content="2023-04-21T04:07:47+02:00">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?= $head; ?>

    <!-- Favicons -->
    <link href="<?= theme("assets/img/favicon.png"); ?>" rel="icon">
    <link href="<?= theme("assets/img/apple-touch-icon.png"); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= theme("assets/vendor/animate.css/animate.min.css"); ?>" rel="stylesheet">
    <link href="<?= theme("assets/vendor/aos/aos.css"); ?>" rel="stylesheet">
    <link href="<?= theme("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?= theme("assets/vendor/bootstrap-icons/bootstrap-icons.css"); ?>" rel="stylesheet">
    <link href="<?= theme("assets/vendor/boxicons/css/boxicons.min.css"); ?>" rel="stylesheet">
    <link href="<?= theme("assets/vendor/glightbox/css/glightbox.min.css"); ?>" rel="stylesheet">
    <link href="<?= theme("assets/vendor/remixicon/remixicon.css"); ?>" rel="stylesheet">
    <link href="<?= theme("assets/vendor/swiper/swiper-bundle.min.css"); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= theme("assets/css/style.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= theme("assets/style.css"); ?>"/>
</head>

<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="<?= url('/'); ?>">AG Apps</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active" href="<?= url('/'); ?>">Home</a></li>
                <li><a class="nav-link" href="<?= url("/sobre"); ?>">Sobre</a></li>
                <li><a class="nav-link" href="<?= url("/planos"); ?>">Planos</a></li>
                <li><a class="nav-link" href="<?= url("/sobre"); ?>#contact">Contato</a></li>
                <?php if (\Source\Models\Auth::user()): ?>
                    <li><a class="link" title="Controlar"
                           href="<?= url("/admin"); ?>">Controlar</a></li>
                <?php else: ?>
                    <li><a class="link" title="Entrar"
                           href="<?= url("/entrar"); ?>">Entrar</a></li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">
    <?= $v->section("content"); ?>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3><?=CONF_SITE_NAME?></h3>
                        <p class="pb-3"><em><?=CONF_SITE_DESC?></em></p>
                        <p>
                            <?=CONF_SITE_ADDR_STREET?> <br>
                            <?=CONF_SITE_ADDR_NUMBER?> <?=CONF_SITE_ADDR_COMPLEMENT?><br>
                            <?=CONF_SITE_ADDR_CITY?> / <?=CONF_SITE_ADDR_STATE?><br><br>
                            <strong>Whatsapp:</strong> <a href="<?=CONF_SOCIAL_WHATSAPP?>" target="_blank"> (33) 9 9143 - 7706</a><br>
                            <strong>Email:</strong> contato@agapps.com.br<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span><?=CONF_SITE_TITLE?></span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/multi-responsive-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/"><?=CONF_SITE_TITLE?></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= url("shared/scripts/jquery.min.js"); ?>"></script>
<script src="<?= url("shared/scripts/jquery.form.js"); ?>"></script>
<script src="<?= url("shared/scripts/jquery.mask.js"); ?>"></script>
<script src="<?= theme("assets/vendor/purecounter/purecounter_vanilla.js"); ?>"></script>
<script src="<?= theme("assets/vendor/aos/aos.js"); ?>"></script>
<script src="<?= theme("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="<?= theme("assets/vendor/glightbox/js/glightbox.min.js"); ?>"></script>
<script src="<?= theme("assets/vendor/isotope-layout/isotope.pkgd.min.js"); ?>"></script>
<script src="<?= theme("assets/vendor/swiper/swiper-bundle.min.js"); ?>"></script>
<script src="<?= theme("assets/vendor/php-email-form/validate.js"); ?>"></script>

<!-- Template Main JS File -->
<script src="<?= theme("assets/js/main.js"); ?>"></script>
<script src="<?= theme("assets/js/scripts.js"); ?>"></script>
<?= $v->section("scripts"); ?>
</body>

</html>