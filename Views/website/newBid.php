<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Streamlined Procurement and Inventory Management System </title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="<?= base_url('public/assets_website/img/favicon.png') ?>"  rel="icon">
        <link href="<?= base_url('public/assets_website/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?= base_url('public/assets_website/vendor/aos/aos.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets_website/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets_website/vendor/bootstrap-icons/bootstrap-icons.css') ?>"  rel="stylesheet">
        <link href="<?= base_url('public/assets_website/vendor/boxicons/css/boxicons.min.css') ?>"  rel="stylesheet">
        <link href="<?= base_url('public/assets_website/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets_website/vendor/remixicon/remixicon.css') ?>"  rel="stylesheet">
        <link href="<?= base_url('public/assets_website/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?= base_url('public/assets_website/css/style.css') ?>" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Arsha
        * Updated: Sep 18 2023 with Bootstrap v5.3.2
        * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center">

                <h1 class="logo me-auto"><a href="index.html" class="logo">  
                        <img style="margin-right: 10px"; src="<?= site_url('public/assets_website/img/logopr.png') ?>" alt="" style="width:80px; height:90px">SPIMS</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    <ul>

                        <li><a class="nav-link scrollto active" href="#hero"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARxJREFUSEvt1EsuREEUxvFfr8JAgiaewx6S2IHYjIkdsCA2IEw7kYjHwGMgYRNIyb1SSvW9VVrPnFmdnPr+p+o8BmZsgxnrqwHM4QRv2MNrSXKlgCB+geVG9B7bJZASQBA/wyqeGsAi7rDbB+kDxJk/Y6cBnGMevS/pAuTE4xcUQSYBusTb2oZv6oXkACXixZAUUCNeBIkBcbeEy0M8lvQ6lvDQxH7rrhhwha1IsK/DUvZ75BhjFM6xyC3W/ghwg80U0Gq3mbTwfRxhI0n5Ggc4bfzpvU937hvSwBeE+uQsDNrKtIBsZkj9v37BP+BH7Yr+dpoahI25UDjBaViY/LABvizXpqHvj7FeCbnEYTQXE+egUrc7vHbfVMM/AMMeVBkx8bReAAAAAElFTkSuQmCC"/></li>Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#services">Procurement</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAchJREFUSEu11UvoTVEUx/HP3yslAzOKCSWvFFJekZlkJhQjKULyiFJKMWBAGFAmTCmmMpOI5JEUJjIQYSxKFFr/9tGx2+eenbq7zmDvu9b6rrX2b687YshrZMjx9QHGYgOWYhGWpISe4jke4xZ+dSU6CDAT11PwQYU+xFa8Kxl1AXbiHCZVtvAr9uNqbl8C7MGlysC52W5cbh/mgFl4iYn/CfiG+e12tQFjcB8rsuClKhdiO/ZifGYfMdbgd5y3nVclQE0bG5tox65CtcvxKAccxpmCcZPEaEatFedz8brgcxAXcsBNbKwEvMFsrMWdgs8NbM4B7zF9AKB07yHN0Uyz9QEzcsAnTK0EhCBCzicxpeDzGdNywG2s62nREyzDOLzAnA45R6z1OeA0jlbcwRGcRUj1WYLlbqdwLAdsSbOnS6aNin5gHt7iOE4UktqEEM0/7yBeb5Qd6sjlGPu2TJtWxXlM1GbKxj4UFtV9zwGxX5DKntDR277jqG4xXjWGpTFwAOf7InX8vg8XS+Xn9jsSZHIl6AsO4UrXBZbixEO5hpU9kLvYho8lu76/zPCJ8RvTcXX6fuIB7qWvNIv+smoAlV0qmw0d8AdB8UwZPLzMvAAAAABJRU5ErkJggg=="/></li>Registration</a></li>
                        <li class="dropdown"><a href="#" ><span>Publications</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= site_url('web/Guidelines') ?>">Procurement Guidelines & Manuals</a></li>
                                <li class="dropdown"><a href="<?= site_url('web/Circulars') ?>"><span>Procurement Circulars</span> </a><i class="bi bi-chevron-right"></i>
                                    <ul>
                                        <li><a href="#">08/2019(i)</a></li>
                                        <li><a href="#">Annex-08/2019(i)</a></li>
                                        <li><a href="#">08/2019</a></li>
                                        <li><a href="#">Public Finance Circular Letter No:05</a></li>
                                        <li><a href="#">05/2018</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Standard Bidding Document</a></li>
                                <li><a href="#">Standard RFPs</a></li>
                                <li><a href="#">Indicative Specifications</a></li>
                                <li><a href="#">Standard EOIs</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        <li><a class="getstarted scrollto" href="#about"><img style="margin-right: 10px"; src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZNJREFUSEvN1b9LVmEYxvGPDtWkIRgRODVIWClB5JBk4GBDjSItLUlDLjnUIi2FiA5umqAgioN/gRY0VItaIf5Cp6yliH6QtVX+4JFHeJH3fY/nwAue9dz3832u677PdcqU+Ckr8fmODKAerbiCq1H1G8xhGsuFnEhScAw9eIDyAodsow+P8e9gTTHAGbxAHX5gAG/xDgF8MSrqwkksoh3ruZAkBU9xDh34WUDBKYzgJr6iER/3a5MAaZZsDHcwgxtZAOEyQ+jE/zzk4/iAYG2wb2/waRSE2jDQWdzCtzyQR+hFPx5mBYS+L9Hz9wcgF7AUB96QC9i/XRrP/+IuJnKaKrCJ36gsJeAPAizTDIpZdBnzWMX5rIBiQ+7GEwzifhZAsTU9gQ2cRgtepgUkLcAkbuMVmg/7oYWoqIpydwoQwgYOxzgJUXEJnw8DqEHY82qs4RnG8Ss2B3CIhnuoxXdcx0qasDuLUVxL8Od5BH1KE9e5tWH92tAU03UrxvJrTGEh6w8nabCJ79OEXeJh+QpKDtgF+AFSGTIlXMIAAAAASUVORK5CYII="/>Login</a></li>
                    </ul>

                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->


<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title">
            <h2>INVITATION FOR BIDS (IFB)</h2>
            <p>Procurements of Goods, Works and Services</p>
            <p>Commandant / Special Task Force, STF Headquarters, No: 223, Bauddhaloka Mawatha, Colombo 07, now invite for sealed bids from eligible bidders for the following procurements to the Special Task Force (STF) Sri Lanka Police.</p>
        </div>

        <div class="row">
            <?php
            $i = 1;
            foreach ($list as $key => $result) {
                ?>

                <div class="col-lg-4 col-md-6">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>                       
                        <p class="description"><?= $result['BStart'] ?> To  <?= $result['BEnd'] ?></p>
                        <p class="description"><?= $result['BOpen'] ?></p>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="button">
                                <a href="<?= site_url('web/viewmore/' . $result['id']) ?>"style="color: white;">View More</a>
                            </button>

                        </div>
                    </div>
                </div>
<?php } ?>

                            <!-- ======= Footer ======= -->
                            <footer id="footer">

                                <div class="footer-newsletter">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-6">
                                                <h4>Join Our Newsletter</h4>
                                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                                                <form action="" method="post">
                                                    <input type="email" name="email"><input type="submit" value="Subscribe">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-top">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-lg-3 col-md-6 footer-contact">
                                                <h3>Butterfly</h3>
                                                <p>
                                                    A108 Adam Street <br>
                                                    New York, NY 535022<br>
                                                    United States <br><br>
                                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                                    <strong>Email:</strong> info@example.com<br>
                                                </p>
                                            </div>

                                            <div class="col-lg-3 col-md-6 footer-links">
                                                <h4>Useful Links</h4>
                                                <ul>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-3 col-md-6 footer-links">
                                                <h4>Our Services</h4>
                                                <ul>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-3 col-md-6 footer-links">
                                                <h4>Our Social Networks</h4>
                                                <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                                                <div class="social-links mt-3">
                                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="container py-4">
                                    <div class="copyright">
                                        &copy; Copyright <strong><span>Butterfly</span></strong>. All Rights Reserved
                                    </div>
                                    <div class="credits">
                                        <!-- All the links in the footer should remain intact. -->
                                        <!-- You can delete the links only if you purchased the pro version. -->
                                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
                                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                    </div>
                                </div>
                            </footer><!-- End Footer -->

                            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

                            <!-- Vendor JS Files -->
                            <script src="<?= ('public/assets_web/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
                            <script src="<?= ('public/assets_web/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
                            <script src="<?= ('public/assets_web/vendor/glightbox/js/glightbox.min.js') ?>"></script>
                            <script src="<?= ('public/assets_web/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
                            <script src="<?= ('public/assets_web/vendor/swiper/swiper-bundle.min.js') ?>"></script>
                            <script src="<?= ('public/assets_web/vendor/php-email-form/validate.js') ?>"></script>

                            <!-- Template Main JS File -->
                            <script src="<?= ('public/assets_web/js/main.js') ?>"></script>
                            <script src="<?= ('public/assets_web/js/carousel.js') ?>"></script>
                            <!-- Include jQuery and Bootstrap JavaScript -->
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                            </body>



                            </html>
