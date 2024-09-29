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

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h1>Procurement processes kept simple, made smarter</h1>
                        <h2>Gain transparency of the purchasing through the full automation of the procurement process. Streamlined approvals, smart budgeting and expense tracking, automated Procurement processing all in one app.</h2>                                    
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="<?= site_url('public/assets_website/img/profirst.jpg') ?>"  class="img-fluid animated alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients section-bg">
                <div class="container">

                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?= site_url('public/assets_website/img/clients/client-1.png" class="img-fluid') ?>" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?= site_url('public/assets_website/img/clients/client-2.png') ?> class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?= site_url('public/assets_website/img/clients/client-3.png') ?> class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?= site_url('public/assets_website/img/clients/client-4.png') ?> class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?= site_url('public/assets_website/img/clients/client-5.png') ?> class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?= site_url('public/assets_website/img/clients/client-6.png') ?> class="img-fluid" alt="">
                        </div>

                    </div>

                </div>
            </section><!-- End Cliens Section -->

            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>About Us</h2>
                        <h1 class="logo me-auto"><a href="index.html" class="logo">  
                        <img src="<?= base_url('public/assets_website/img/STF_SL_badge.png') ?>" alt="" class="img-fluid"> </a></h1>
                    </div>

                    <div class="row content">
                        <div class="col-lg-4">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                            </ul>
                        </div>
                             <!-- new image -->
                    <div class="col-lg-8 order-1 order-lg-2">
                        <div class="container">
                            <div class="carousel slide carousel-fade" data-ride="carousel" id="abc">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= base_url('public/assets_website/img/carousel/procurement 01.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-danger">Easy to Use</h3>
                                            <p class="text-warning">It has automated the purchasing procedure and has furnished excellent results for both, the companies and the suppliers</p>    
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="<?= base_url('public/assets_website/img/carousel/procurement 02.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-danger">Reduced supplier risk</h3>
                                            <p class="text-dark">It has automated the purchasing procedure and has furnished excellent results for both, the companies and the suppliers</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="<?= base_url('public/assets_website/img/carousel/procurement 03.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-danger">Improved efficiency</h3>
                                            <p class="text-primary">It has automated the purchasing procedure and has furnished excellent results for both, the companies and the suppliers</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="<?= base_url('public/assets_website/img/carousel/procurement 05.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-danger">Improved transparency</h3>
                                            <p class="text-primary">Procurement software allows complete purchasing control by centralizing purchase requisitions, streamlining approvals, and providing insights on real-time purchases and purchase history.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="<?= base_url('public/assets_website/img/carousel/procurement 07.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-danger">Improved operational performance</h3>
                                            <p class="text-dark">Optimal purchase order management through elimination of incomplete, missing, or inaccurate purchase orders</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <img src="<?= base_url('public/assets_website/img/carousel/procurement 08.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3 class="text-danger">Transparency</h3>
                                            <p class="text-primary">It has automated the purchasing procedure and has furnished excellent results for both, the companies and the suppliers</p>
                                        </div>
                                    </div>
                                    <!-- Add more carousel items here -->
                                </div>
                                <a href="#abc" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a href="#abc" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        
                    </div>

                </div>
            </section><!-- End About Us Section -->

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us section-bg">
                <div class="container-fluid" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                            <div class="content">
                                <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p>
                            </div>

                            <div class="accordion-list">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                            <p>
                                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                            <p>
                                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                            <p>
                                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                    </div>

                </div>
            </section><!-- End Why Us Section -->

            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="<?= site_url('public/assets_website/img/skills.png') ?> "class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.
                            </p>

                            <div class="skills-content">

                                <div class="progress">
                                    <span class="skill">HTML <i class="val">100%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">CSS <i class="val">90%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">JavaScript <i class="val">75%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">Photoshop <i class="val">55%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </section><!-- End Skills Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>PROCUREMENT MANAGEMENT</h2>
                        <p>Procurements of Goods, Works and Services</p>
                        <p>SPIMS system allows employees to create, manage, and track their own orders while the Purchasing department retains central control. This helps to ensure that policies and preferred pricing agreements are reflected in every transaction.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box" style="background-color: #cc8800; padding: 10px; max-width: 250px;">
                                <img src="<?= ('public/assets_website/img/card/invitation.jpg') ?>" class="img-fluid mx-auto d-block" alt="">                                                              
                                <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>
                                <h4 class="title"> <a href="<?= site_url('website/newBid/' . $list[0]['id']) ?>">INVITATION FOR BIDS</a></h4>                              
                                <p class="description">Invitation for Bid is a call for suppliers to submit a document for a specific product that an organization knows it needs. </p>                                    
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box" style="background-color: #99ff66; padding: 10px; max-width: 250px;">
                                <img src="<?= ('public/assets_website/img/card/procurementplan.jpg') ?>" class="img-fluid mx-auto d-block" alt=""> 
                                <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06;"></i></div>
                                <h4 class="title"><a href="<?= site_url('website/WebProcurementPlan/') ?>">Procurement Plan</a></h4>
                                <p class="description">Procurement Planning is the first step in the Public Procurement process provides direction and time targets for procurement activities.</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box" style="background-color: #ffff99; padding: 10px; max-width: 250px;">
                                <img src="<?= ('public/assets_website/img/card/vote.png') ?>" class="img-fluid mx-auto d-block" alt=""> 
                                <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7;"></i></div>
                                <h4 class="title"><a href="<?= site_url('web/VoteLedger/') ?>">Vote Management</a></h4>                      
                                <p class="description">Departmental appropriation (Vote) Ledger on Account is a resolution to allocate funds for the activities of the government.</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box" style="background-color:  #00e6e6; padding: 10px; max-width: 250px;">
                                <img src="<?= ('public/assets_website/img/card/request.jpg') ?>" class="img-fluid mx-auto d-block" alt=""> 
                                <div class="icon"><i class="bi bi-credit-card-2-front" style="color:#41cf2e;"></i></div>
                                <h4 class="title"><a href="<?= site_url('web/WebRequest/') ?>">Request Management</a></h4>
                                <p class="description">Managing purchase requests is essential for maintaining a well-Organized procurement process and ensuring timely delivery of goods.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box" style="background-color: #ffff4d; padding: 10px; max-width: 250px;">
                                <img src="<?= ('public/assets_website/img/card/procurementmanagement.jpg') ?>" class="img-fluid mx-auto d-block" alt=""> 
                                <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                                <h4 class="title"><a href="<?= site_url('web/GeneralInfo/') ?>">GENERAL PROCUREMENT INFORMATION</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box" style="background-color: #00b33c; padding: 10px; max-width: 250px;">
                                <img src="<?= ('public/assets_website/img/card/inventory4.jpg') ?>" class="img-fluid mx-auto d-block" alt=""> 
                                <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                                <h4 class="title"><a href="">Inventory Management</a></h4>
                                <p class="description">Manage the flow of raw materials from their procurement to finished products. It responsible for ordering and tracking stock as it arrives. </p>                            </div>
                            </div>                        
                       
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                        <div class="icon-box" style="background-color: #b36b00; padding: 10px; max-width: 250px;">
                            <img src="<?= ('public/assets_website/img/card/spesification.jpg') ?>" class="img-fluid mx-auto d-block" alt=""> 
                            <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a href="">SPECIFICATION</a></h4>
                            <p class="description">Technical Specifications will be prepared by a panel of experts and shared on the system to use as a guide for drafting technical specifications.</p> 
                        </div>                      
                        </div>
                    </div>
            </section><!-- End Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-12 text-center text-lg-start">
                             <div class="section-title">
                        <h2>Registration</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="container">
                        <div class="card-group text-center mb-4">                      
                            <div class="card">
                                <img src="<?= base_url('public/assets_web/img/carousel/procurement 07.jpg') ?>" class="card-img-top" alt="Wild Landscape">
                                <div class="card-body">
                                    <h5 class="card-title">Registered Suppliers</h5>
                                    <p class="card-text" style="color: #000033"> Bidders who registered at Ministry of public Security in terms of the Public Contract Act No. 3 of 1987 </p>
                                    <a href="<?= site_url('web/registeredSupplier')?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Register</button></a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last Updated 3 Min Ago</small>
                                    <small class="text-muted">1456</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="<?= base_url('public/assets_web/img/carousel/procurement 05.jpg') ?>" class="card-img-top" alt="Wild Landscape">
                                <div class="card-body">
                                    <h5 class="card-title">Non Registered Suppliers</h5>
                                    <p class="card-text" style="color: #000033"> Embark on a journey of opportunity and growth by registering as a supplier with our SPIMS System.</p>
                                     <a href="<?= site_url('web/registeredSupplier')?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Register</button></a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last Updated 3 Min Ago</small>
                                    <small class="text-muted">1689</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="<?= base_url('public/assets_web/img/carousel/procurement 04.jpg') ?>" class="card-img-top" alt="Wild Landscape">
                                <div class="card-body">
                                    <h5 class="card-title">Procuring Entities</h5>
                                    <p class="card-text" style="color: #000033"> Now you can enjoy your </p>
                                    <a href="<?= site_url('web/registeredSupplier')?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Register</button></a>

                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last Updated 3 Min Ago</small>
                                    <small class="text-muted">45  </small>
                                </div>
                            </div>
                        </div>
                    </div>
                       
                </div>
                    </div>
                </div>
            </section><!-- End Portfolio Section -->
                      
            <!-- End Cta Section -->

            <!-- ======= Gallery Section ======= -->
            <section id="gallery" class="gallery">
                <div class="container">

                    <div class="section-title">
                        <h2>Gallery</h2>
                        <p style="font-style: italic; font-weight: bold;">Explore the dynamic and intense moments captured in our Gallery, showcasing the unwavering commitment and expertise of the Special Task Force as they navigate through challenging operations, execute precision maneuvers, and exemplify the essence of service and sacrifice.</p>
                    </div>

                    <div class="row no-gutters">

                        <div class="col-lg-3 col-md-4 col-4">


                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-9.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-9.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-13.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-13.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-27.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-27.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-20.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-20.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-32.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-32.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-31.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-31.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-33.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-33.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_website/img/gallery/gallery-37.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_website/img/gallery/gallery-37.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Gallery Section -->


            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Team</h2>
                        <p>Procurement committee members play a crucial role in ensuring transparent and effective acquisition processes, overseeing vendor selection, negotiating contracts, and upholding ethical standards to achieve optimal value for the organization.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="<?= site_url('public/assets_website/img/team/team01.jpg') ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>SDIG Latiff Retires</h4>
                                    <span>Commandant Special Task Force</span>
                                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="<?= site_url('public/assets_website/img/team/team02.jpg') ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Waruna Jayasundara</h4>
                                    <span>Commandant Special Task Force</span>
                                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="<?= site_url('public/assets_website/img/team/team03.jpg') ?>"class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>Procurement Committee Member</span>
                                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="<?= site_url('public/assets_website/img/team/team04.jpg') ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Team Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Frequently Asked Questions</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="500">
                                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <p style="text-align: center; font-style: italic; font-weight: bold;">
                            Sri Lanka Police specializing in clandestine and covert operations, combat and patrolling in urban areas, combat search and rescue, counterinsurgency and counterterrorism operations, crowd control, executive protection, forward observer, hostage rescue, indirect fire, irregular warfare, jungle and mountain warfare, parachuting, psychological warfare, search and rescue people who are in distress or imminent danger from disaster. serving high-risk arrest and search warrants, special reconnaissance, support military operations, tactical emergency medical, tracking, and unconventional tactics. It was formed in 1983 not as a military force, but rather as a highly specialised armed police unit.
                        </p>        
                    </div>

                    <div class="row">

                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                     <p>Colombo 07, Boudhaloka Mawatha, No 223</p>
                                </div>
                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>oic.stf.tender@police.gov.lk</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>0112505221</p>
                                </div>

                                <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.327776527296!2d79.8617649!3d6.8985872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259629fc772a3%3A0x68cc18cbe60342bc!2sS.T.F.%20Headquarters!5e0!3m2!1sen!2sus!4v1630400170408!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" rows="10" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

           <!-- <div class="footer-newsletter">
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
            </div>-->

            <div class="footer-top" style=" background: linear-gradient(to bottom, #669999 0%, #999966 100%);">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-4 footer-contact">
                            <h3>SPIMS</h3>
                            <p>
                                STF Headqraters<br>
                                No 223<br>
                                Boudhaloka Mawatha, Colombo 07<br><br>
                                <strong>Phone:</strong> 011 2505221<br>
                                <strong>Email:</strong>oic.stf.tender@police.gov.lk <br>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-4 footer-links">
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

                        <div class="col-lg-3 col-md-4 footer-links">
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

                        <div class="col-lg-3 col-md-4 footer-links">
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

            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?= ('public/assets_website/vendor/aos/aos.js') ?>"></script>
        <script src="<?= ('public/assets_website/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= ('public/assets_website/vendor/glightbox/js/glightbox.min.js') ?>"></script>
        <script src="<?= ('public/assets_website/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
        <script src="<?= ('public/assets_website/vendor/swiper/swiper-bundle.min.js') ?>"></script>
        <script src="<?= ('public/assets_website/vendor/waypoints/noframework.waypoints.js') ?>"></script>
        <script src="<?= ('public/assets_website/vendor/php-email-form/validate.js') ?>"></script>

        <!-- Template Main JS File -->
        <script src="<?= ('public/assets_website/js/main.js') ?>"></script>

    </body>

</html>