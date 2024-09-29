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
                    <h2>General Tender Information</h2>
                    <h5 id="currentYear"></h5>

                </div>


                    <div class="entry-content">
                        <div data-elementor-type="wp-post" data-elementor-id="2515" class="elementor elementor-2515">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-fedbf9d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fedbf9d" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-52ec224" data-id="52ec224" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-edf86ac elementor-widget elementor-widget-text-editor" data-id="edf86ac" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <style>/*! elementor - v3.18.0 - 08-12-2023 */
                                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{
                                                            background-color:#69727d;
                                                            color:#fff
                                                        }
                                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{
                                                            color:#69727d;
                                                            border:3px solid;
                                                            background-color:transparent
                                                        }
                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{
                                                            margin-top:8px
                                                        }
                                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{
                                                            width:1em;
                                                            height:1em
                                                        }
                                                        .elementor-widget-text-editor .elementor-drop-cap{
                                                            float:left;
                                                            text-align:center;
                                                            line-height:1;
                                                            font-size:50px
                                                        }
                                                        .elementor-widget-text-editor .elementor-drop-cap-letter{
                                                            display:inline-block
                                                        }</style>				<div>My No.: STF/LOG/A1/20/2023</div><div>M/s. ………………………………….</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;………………………………….</div><div>&nbsp;</div><div>Dear Sir/ Madam,</div><div>&nbsp;</div><div style="text-align: center;"><strong>RULES AND REGULATIONS FOR REGISTERED SUPPLIERS TO SUPPLY OF MATERIALS </strong></div><div style="text-align: center;"><strong>&amp; SERVICES TO SPECIAL TASK FORCE  HEAD OFFICE FOR THE YEAR 2023</strong></div><div>&nbsp;</div><div>The registered suppliers are requested to comply with the following rules and regulations stipulated by the Special Task Force  in respect of quotations.</div><div>&nbsp;</div><div>01. Quotation should be submitted under sealed cover. Quotation number, time and date of closing should be clearly indicated on the top left hand corner of the envelope. <span style="text-decoration: underline;">Please use separate covers for different quotation numbers</span>. Quotations may be placed in the Box provided for the purpose at Supplies Section by Registered Post.</div><div>&nbsp;</div><div>02. Wherever the offered item is imported, the Country of Origin and Brand Name, if any must be indicated.</div><div>&nbsp;</div><div>03. Samples and literature of items offered, wherever applicable, shall be provided.</div><div>&nbsp;</div><div>04. Suppliers, who fail to quote for three consecutive occasions in response to the enquiries, will be deleted from the Register of Suppliers.</div><div>&nbsp;</div><div>05. Normally, quotation will be called from the registered suppliers. But the Board reserves the right to obtain quotations from other suppliers as well whenever necessary.</div><div>&nbsp;</div><div>06. The Board reserves the right, to accept or reject any quotation in part or in full irrespective of whether prices are the lowest or not.</div><div>&nbsp;</div><div><strong>07. Bid Bonds</strong></div><div>&nbsp;</div><div>A) In the case of quotations where the value exceeds Rs. 100,000.00 a Bid Bond should accompany the quotation to the value of 1% – 2% of total value. Bid Bond should be valid for 90 days.</div><div>&nbsp;</div><div>B) Collective Bid Bonds are permitted provided supplier agrees to such Bonds being retained by the Board until all the quotations covered by such Bonds are finalized.</div><div>&nbsp;</div><div>C) However, collective Bid Bonds should not be sent in respect of quotations where closing dates fall on different dates.</div><div>&nbsp;</div><div>D) As soon as quotations are finalized, Bid Bond will be returned to suppliers with the exception of the successful suppliers to whom the Bid Bond will be returned after a Performance Bond is received.&nbsp;</div><div>&nbsp;</div><div><strong>08. Performance Bond</strong></div><div>&nbsp;</div><div>A) Performance Bond will be required from the successful supplier to a value of 10% of the total value on any purchase exceeding Rs. 250,000.00. Performance Bond should be valid for 90 days unless otherwise specified on award.&nbsp;</div><div>&nbsp;</div><div>B) The successful supplier on each quotation will be informed by way of Letter of Award (Applicable only to quotation where the value exceeds Rs. 100,000.00 and a Purchase Order for value less than 100,000.00) on receipt of the Letter of Award the successful supplier should make immediate arrangements to submit the Performance Bond.&nbsp; And the Bid Bond Will be released thereafter.</div><div>&nbsp;</div><div>C) In the event of the successful supplier failing to submit the Performance Bond after receiving the Letter of Award within the stipulated time, the Bid Bond will be forfeited if the supplier fails to supply the items or services within the delivery period to compensate for damages caused to the Board.</div><div>&nbsp;</div><div>D) On receipt of a Purchase Order/Letter of Award, the successful supplier should comply with the requirements specified therein such as delivery of goods or supply of services to the required specifications and standards. Failure on the part of the supplier to comply with these requirements shall constitute sufficient grounds for annulment to the Purchase Order and forfeiture of the Performance Bond.</div><div>&nbsp;</div><div><strong>09. General Instructions</strong></div><div>&nbsp;</div><div>A) All supplies should always conform to the International Standards and suppliers should indicate on the <span style="text-decoration: underline;">“Quotation Form”</span>&nbsp; the standard offered. Specific standards will be stipulated on Quotation Form wherever necessary. The Special Task Force  always expects the registered suppliers to quote for material, which conform to acceptable International Standard. Any material, which does not meet the standard set by this Board, will be rejected.</div><div>&nbsp;</div><div>B) In cases where samples are required and approved, the supplier should deliver the materials in strict accordance with the samples submitted by them.</div><div>&nbsp;</div><div>C) The deliveries must be made within the validity period stipulated on Purchase Order/ Letter of Award. Only on proven unavoidable circumstances the extension is required a letter must be forwarded to the Commandant (Supplies &amp; Materials Management ) to that effect, prior to the lapsing of validity of order.</div><div>&nbsp;</div><div>D) Extensions will not be considered under any circumstances on Purchase Order where validity periods have already been extended more than thrice.</div><div>&nbsp;</div><div>E) Name of suppliers who fail to deliver material completely even after three extensions of validity are granted as per under 9 (d) above, in response of their request and at the discretion of the Special Task Force , will be deleted from the Register of Suppliers. Names of Suppliers, who do not request extension, although delivery dates have lapsed on the orders awarded to them will be treated as defaulted Suppliers and will be deleted from the Register of Suppliers without notice.</div><div>&nbsp;</div><div>F) The suppliers who default, delay, dishonor the awards made by Special Task Force or deliver inferior quality products on Purchase Orders will be blacklisted and their names will be intimated to all Government Institutions.</div><div>&nbsp;</div><div>G) In addition to the above General Instructions, the Board will apply further instructions any conditions as and when necessary wherever quotations are invited.</div><div>&nbsp;</div><div><strong>10. Advance Payment</strong></div><div>&nbsp;</div><div>Supplier’s who offers credit facilities on the applications for registration but demand advance payment when Purchase Order are sent to them, will also be deleted from the Registration of Suppliers, if they fail to submit satisfactory reasons for their demand. However suppliers, may indicate their terms of payment for consideration at the time of quoting.</div><div>&nbsp;</div><div>11. Suppliers are requested to closely follow above rules and regulations in this Circular No: DGM/S/A1/20/2021. All registered suppliers are strongly advised that their quotations throughout the year 2021 shall be governed by the rules and regulations stipulated in this circular.</div><div>&nbsp;</div><div>Yours faithfully</div><div>&nbsp;</div><div><strong>Commandant(Procurement chairman)</strong></div><div><strong>Special Task Force</strong></div><div>&nbsp;</div><div>Tel: 011-2505933 <br>Fax: 011-2556506<br>Email: oic.stf.tender@police.gov.lk</div>						</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>


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
