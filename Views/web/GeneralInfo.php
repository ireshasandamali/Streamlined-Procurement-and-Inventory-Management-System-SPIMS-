<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Interactive Procurement and Supply Equipment Management System </title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="<?= base_url('public/assets_web/img/favicon.png') ?>" rel="icon">
        <link href="<?= base_url('public/assets_web/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?= base_url('public/assets_web/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets_web/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets_web/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets_web/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets_web/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?= base_url('public/assets_web/css/style.css') ?>" rel="stylesheet">
        <style>
            #services {
                margin-top: 40px;
                padding-top: 40px;
            }
        </style>

        <!-- =======================================================
        * Template Name: Butterfly
        * Updated: Jul 27 2023 with Bootstrap v5.3.1
        * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>


        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top" style="background: linear-gradient(to bottom, #3333cc 20%, #66ccff 80%); max-height: 80px; margin: 0 auto;">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between">
                    <i>
                        <a href="index.html" class="logo">
                            <img src="<?= site_url('public/assets_web/img/spims5.png') ?>" alt="" style="width: 155px; height: 250px; border-radius: 50%">

                        </a>
                    </i>
                </div><!-- End Logo -->
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active"href="<?= site_url('web') ?> "><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARxJREFUSEvt1EsuREEUxvFfr8JAgiaewx6S2IHYjIkdsCA2IEw7kYjHwGMgYRNIyb1SSvW9VVrPnFmdnPr+p+o8BmZsgxnrqwHM4QRv2MNrSXKlgCB+geVG9B7bJZASQBA/wyqeGsAi7rDbB+kDxJk/Y6cBnGMevS/pAuTE4xcUQSYBusTb2oZv6oXkACXixZAUUCNeBIkBcbeEy0M8lvQ6lvDQxH7rrhhwha1IsK/DUvZ75BhjFM6xyC3W/ghwg80U0Gq3mbTwfRxhI0n5Ggc4bfzpvU937hvSwBeE+uQsDNrKtIBsZkj9v37BP+BH7Yr+dpoahI25UDjBaViY/LABvizXpqHvj7FeCbnEYTQXE+egUrc7vHbfVMM/AMMeVBkx8bReAAAAAElFTkSuQmCC"/></li>Home</a></li>
                        <li><a class="nav-link scrollto"href="<?= site_url('web#services') ?>">Procurement</a></li>
                        <li><a class="nav-link scrollto "  href="<?= site_url('web#portfolio') ?>"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAchJREFUSEu11UvoTVEUx/HP3yslAzOKCSWvFFJekZlkJhQjKULyiFJKMWBAGFAmTCmmMpOI5JEUJjIQYSxKFFr/9tGx2+eenbq7zmDvu9b6rrX2b687YshrZMjx9QHGYgOWYhGWpISe4jke4xZ+dSU6CDAT11PwQYU+xFa8Kxl1AXbiHCZVtvAr9uNqbl8C7MGlysC52W5cbh/mgFl4iYn/CfiG+e12tQFjcB8rsuClKhdiO/ZifGYfMdbgd5y3nVclQE0bG5tox65CtcvxKAccxpmCcZPEaEatFedz8brgcxAXcsBNbKwEvMFsrMWdgs8NbM4B7zF9AKB07yHN0Uyz9QEzcsAnTK0EhCBCzicxpeDzGdNywG2s62nREyzDOLzAnA45R6z1OeA0jlbcwRGcRUj1WYLlbqdwLAdsSbOnS6aNin5gHt7iOE4UktqEEM0/7yBeb5Qd6sjlGPu2TJtWxXlM1GbKxj4UFtV9zwGxX5DKntDR277jqG4xXjWGpTFwAOf7InX8vg8XS+Xn9jsSZHIl6AsO4UrXBZbixEO5hpU9kLvYho8lu76/zPCJ8RvTcXX6fuIB7qWvNIv+smoAlV0qmw0d8AdB8UwZPLzMvAAAAABJRU5ErkJggg=="/>Registration</a></li>                        
                        <li><a class="nav-link scrollto"  href="<?= site_url('web#about') ?>">About</a></li>
                        <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                        <li><a class="nav-link scrollto" href="<?= site_url('web#contact') ?>">Contact</a></li>
                        <li class="dropdown"><a href="#" ><span>Publications</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= site_url('web/Guidelines') ?>">Procurement Guidelines & Manuals</a></li>
                                <li class="dropdown"><a href="<?= site_url('web/Circulars') ?>"><span>Procurement Circulars</span> </a></i>
                                <li><a href="<?= site_url('web/standedbidingDOC') ?>">Standard Bidding Document</a></li>                                
                            </ul>
                        </li>

                        <li>
                            <a class="nav-link scrollto" href="<?= site_url('web/login') ?>">
                                <button type="submit" class="btn btn-outline-primary btn-sm" style="border-radius: 30px; padding: 5px 8px; border-color: #000066">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZNJREFUSEvN1b9LVmEYxvGPDtWkIRgRODVIWClB5JBk4GBDjSItLUlDLjnUIi2FiA5umqAgioN/gRY0VItaIf5Cp6yliH6QtVX+4JFHeJH3fY/nwAue9dz3832u677PdcqU+Ckr8fmODKAerbiCq1H1G8xhGsuFnEhScAw9eIDyAodsow+P8e9gTTHAGbxAHX5gAG/xDgF8MSrqwkksoh3ruZAkBU9xDh34WUDBKYzgJr6iER/3a5MAaZZsDHcwgxtZAOEyQ+jE/zzk4/iAYG2wb2/waRSE2jDQWdzCtzyQR+hFPx5mBYS+L9Hz9wcgF7AUB96QC9i/XRrP/+IuJnKaKrCJ36gsJeAPAizTDIpZdBnzWMX5rIBiQ+7GEwzifhZAsTU9gQ2cRgtepgUkLcAkbuMVmg/7oYWoqIpydwoQwgYOxzgJUXEJnw8DqEHY82qs4RnG8Ss2B3CIhnuoxXdcx0qasDuLUVxL8Od5BH1KE9e5tWH92tAU03UrxvJrTGEh6w8nabCJ79OEXeJh+QpKDtgF+AFSGTIlXMIAAAAASUVORK5CYII="/>
                                    Login
                                </button>
                            </a>
                        </li>                   
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->

        <section id="services" class="services section-bg"> 
            <div class="row" style="background: #00ace6;border: 2px solid black;">
                <div class="col-6" style="padding: 10px;">
                    <h6 style="color: white;"><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>GENERAL PROCUREMENT INFORMATION</h6>       
                </div>
                <div class="col-6" style=" padding: 10px;">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                        <ol class="breadcrumb">
                            <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                            <li class="breadcrumb-item"><a href="index.html"style="color: white;">PROCUREMENT</a></li>
                            <li class="breadcrumb-item active" aria-current="page"style="color: white;"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>General Procurement Information</li>
                        </ol>
                    </nav>   
                </div>
            </div>

            <!-- End navigation Title -->


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
<footer id="footer" style=" background: linear-gradient(to bottom, #669999 0%, #999966 100%);">                                                                
    <div class="footer-top" style=" background: linear-gradient(to bottom, #669999 0%, #999966 100%);">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-8 footer-contact">
                    <h3>SPIMS</h3>
                    <p><strong>
                            STF Headqraters<br>
                            No 223<br>
                            Boudhaloka Mawatha, Colombo 07<br><br>
                            <strong>Phone:</strong> 011 2505221<br>
                            <strong>Email:</strong> oic.stf.tender@police.gov.lk <br>
                        </strong></p>
                </div>

                <div class="col-lg-4 col-md-8 footer-links">
                    <h4>Useful Links</h4>
                    <ul><strong>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Procurement</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Publications</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Registration</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>

                        </strong></ul>
                </div>

                <div class="col-lg-4 col-md-8 footer-links">
                    <h4>Contact Us</h4>
                    <ul> <strong> 
                            <li> <a href="#">Procurement Chairman  </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">011-2505931</a></li>
                            <li> <a href="#">Director / Logistics </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Direct: 011-2505933 / 2556506</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">General	:  011-2500471 Ext: 251</a></li>
                            <li> <a href="#">Procurement Officer</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">011-2589741</a></li>
                            <li><a href="#">Vendor Registrations</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">011-2505937</a></li>
                        </strong></ul>
                </div>
                <div class="container py-">
                    <div class="copyright">
                        &copy; Copyright <strong><span>SPIMS</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->

                        <div class="row">
                            <div class="col-4">
                                <i><a href=""><img src="<?= site_url('public/assets_web/img/logo.png') ?>" alt="" style="width:50px; height:60px" class="rounded-circle"></a></i>
                            </div>
                            <div class="col-8">
                                <strong> Designed by <i> <a href=""><br></strong>ID Creations</a></i>
                            </div> </div>
                    </div>
                </div>
            </div                                        
        </div>
    </div>
</div                                        
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
