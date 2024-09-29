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
        <header id="header" class="fixed-top" style="background: linear-gradient(to bottom, #3333cc 20%, #66ccff 80%); max-height: 90px; margin: 0 auto;">
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
                        <li><a class="nav-link scrollto active" href="#hero"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARxJREFUSEvt1EsuREEUxvFfr8JAgiaewx6S2IHYjIkdsCA2IEw7kYjHwGMgYRNIyb1SSvW9VVrPnFmdnPr+p+o8BmZsgxnrqwHM4QRv2MNrSXKlgCB+geVG9B7bJZASQBA/wyqeGsAi7rDbB+kDxJk/Y6cBnGMevS/pAuTE4xcUQSYBusTb2oZv6oXkACXixZAUUCNeBIkBcbeEy0M8lvQ6lvDQxH7rrhhwha1IsK/DUvZ75BhjFM6xyC3W/ghwg80U0Gq3mbTwfRxhI0n5Ggc4bfzpvU937hvSwBeE+uQsDNrKtIBsZkj9v37BP+BH7Yr+dpoahI25UDjBaViY/LABvizXpqHvj7FeCbnEYTQXE+egUrc7vHbfVMM/AMMeVBkx8bReAAAAAElFTkSuQmCC"/></li>Home</a></li>
                        <li><a class="nav-link scrollto" href="#services">Procurement</a></li>
                        <li><a class="nav-link scrollto " href="#portfolio"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAchJREFUSEu11UvoTVEUx/HP3yslAzOKCSWvFFJekZlkJhQjKULyiFJKMWBAGFAmTCmmMpOI5JEUJjIQYSxKFFr/9tGx2+eenbq7zmDvu9b6rrX2b687YshrZMjx9QHGYgOWYhGWpISe4jke4xZ+dSU6CDAT11PwQYU+xFa8Kxl1AXbiHCZVtvAr9uNqbl8C7MGlysC52W5cbh/mgFl4iYn/CfiG+e12tQFjcB8rsuClKhdiO/ZifGYfMdbgd5y3nVclQE0bG5tox65CtcvxKAccxpmCcZPEaEatFedz8brgcxAXcsBNbKwEvMFsrMWdgs8NbM4B7zF9AKB07yHN0Uyz9QEzcsAnTK0EhCBCzicxpeDzGdNywG2s62nREyzDOLzAnA45R6z1OeA0jlbcwRGcRUj1WYLlbqdwLAdsSbOnS6aNin5gHt7iOE4UktqEEM0/7yBeb5Qd6sjlGPu2TJtWxXlM1GbKxj4UFtV9zwGxX5DKntDR277jqG4xXjWGpTFwAOf7InX8vg8XS+Xn9jsSZHIl6AsO4UrXBZbixEO5hpU9kLvYho8lu76/zPCJ8RvTcXX6fuIB7qWvNIv+smoAlV0qmw0d8AdB8UwZPLzMvAAAAABJRU5ErkJggg=="/>Registration</a></li>                        
                        <li><a class="nav-link scrollto" href="#counts">About</a></li>
                        <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        <li class="dropdown"><a href="#" ><span>Publications</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="<?= site_url('web/Guidelines') ?>">Procurement Guidelines & Manuals</a></li>
                                <li class="dropdown"><a href="<?= site_url('web/Circulars') ?>"><span>Procurement Circulars</span> </a></i>

                                </li>
                                <li><a href="<?= site_url('web/standedbidingDOC') ?>">Standard Bidding Document</a></li>                                
                            </ul>
                        </li>

                        <li>                         
                            <a class="nav-link scrollto" href="<?= site_url('web/logout') ?>">
                                <button type="submit" class="btn btn-outline-primary btn-sm" style="border-radius: 30px; padding: 5px 8px; border-color: #000066">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZNJREFUSEvN1b9LVmEYxvGPDtWkIRgRODVIWClB5JBk4GBDjSItLUlDLjnUIi2FiA5umqAgioN/gRY0VItaIf5Cp6yliH6QtVX+4JFHeJH3fY/nwAue9dz3832u677PdcqU+Ckr8fmODKAerbiCq1H1G8xhGsuFnEhScAw9eIDyAodsow+P8e9gTTHAGbxAHX5gAG/xDgF8MSrqwkksoh3ruZAkBU9xDh34WUDBKYzgJr6iER/3a5MAaZZsDHcwgxtZAOEyQ+jE/zzk4/iAYG2wb2/waRSE2jDQWdzCtzyQR+hFPx5mBYS+L9Hz9wcgF7AUB96QC9i/XRrP/+IuJnKaKrCJ36gsJeAPAizTDIpZdBnzWMX5rIBiQ+7GEwzifhZAsTU9gQ2cRgtepgUkLcAkbuMVmg/7oYWoqIpydwoQwgYOxzgJUXEJnw8DqEHY82qs4RnG8Ss2B3CIhnuoxXdcx0qasDuLUVxL8Od5BH1KE9e5tWH92tAU03UrxvJrTGEh6w8nabCJ79OEXeJh+QpKDtgF+AFSGTIlXMIAAAAASUVORK5CYII="/>
                                    Log Out
                                </button>
                            </a>
                        </li> 
                        <li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                <img src="<?= base_url('public/images/uploads/' . session()->get('ProfileImage')) ?>" alt="Profile" class="rounded-circle">
                                <span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('UserName') ?></span>
                            </a><!-- End Profile Iamge Icon -->

                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6><?= session()->get('UserName') ?></h6>
                                    <img src="<?= base_url('public/images/uploads/' . session()->get('ProfileImage')) ?>">            
                                </li>
                                <li>  <i class="bi bi-person"></i> <span><?= session()->get('UserType') ?></span></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="<?= site_url('web/viewnonregisteredSupplier/' . session()->get('UserId')) ?>"
                                       <i class="bi bi-person"></i>
                                        <span>Update Profile</span>
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                        <i class="bi bi-gear"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                        <i class="bi bi-question-circle"></i>
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="<?= site_url('web/logout') ?>">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->



        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container" >
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <div class="card" style="background-color: #f2f2f2;">
                            <div>
                                <h1 style="text-align: center">STREAMLINE PROCUREMENT & INVENTORY MANAGEMENT SYSTEM</h1>
                            </div>
                        </div>


                        <a href="#about" class="btn-get-started scrollto">Procurement processes kept simple, made smarter, Gain transparency of the purchasing through the full automation of the procurement process. Streamlined approvals, smart budgeting and expense tracking, automated PR and PO processing all in one app.</a>
                        <!-- <div><a href="#about" class="btn-get-started scrollto">Get Started</a></div>-->
                    </div>
                </div>
            </div>

        </section>
        <!-- End Hero -->
        <main id="main">

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg" style=" background: linear-gradient(to bottom, #ccffcc 0%, #ccff99 100%);">
                <div class="container">
                    <div class="section-title">
                        <h2>PROCUREMENT MANAGEMENT</h2>
                        <p>Procurements of Goods, Works and Services</p>
                        <p>SPIMS system allows employees to create, manage, and track their own orders while the Purchasing department retains central control. This helps to ensure that policies and preferred pricing agreements are reflected in every transaction.</p>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4" data-wow="fade-right" data-wow-delay="0.1s">
                                <div class="icon-box" style="background-color: #cc8800; padding: 10px; max-width: 250px;">
                                    <img src="<?= base_url('public/assets_web/img/card/invitation.jpg') ?>" class="img-fluid mx-auto d-block service-image"  alt="">
                                    <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b;"></i></div>
                                    <!--I have remove this id check if errors show ('web/newBid/' . $list[0]['id']) ?>-->
                                    <h4 class="title"> <a href="<?= site_url('web/newBid/') ?>">Invitation For Bids</a></h4>
                                    <p class="description hidden">Invitation For Bids is a call for suppliers to submit a document for a specific product that an organization knows it needs.</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4" data-wow="fade-right" data-wow-delay="0.1s">
                                <div class="icon-box" style="background-color: #99ff66; padding: 10px; max-width: 250px;">
                                    <img src="<?= base_url('public/assets_web/img/card/procurementplan.jpg') ?>" class="img-fluid mx-auto d-block service-image"  alt="">
                                    <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06;"></i></div>
                                    <h4 class="title"><a href="<?= site_url('web/WebProcurementPlan/') ?>">Procurement Plan</a></h4>
                                    <p class="description hidden">Procurement Planning is the first step in the Procurement process provides direction and time targets for procurement activities.</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4"  data-wow="fade-left" data-wow-delay="0.1s">
                                <div class="icon-box" style="background-color: #ffff99; padding: 10px; max-width: 250px;">
                                    <img src="<?= base_url('public/assets_web/img/card/vote.png') ?>" class="img-fluid mx-auto d-block service-image"  alt="">
                                    <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7;"></i></div>
                                    <h4 class="title"><a href="<?= site_url('web/VoteLedger/') ?>">Vote Management</a></h4>                      
                                    <p class="description hidden">Departmental appropriation (Vote) Ledger on Account is a resolution to allocate funds for the activities of the government.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4" data-wow="fade-left" data-wow-delay="0.1s">
                                <div class="icon-box" style="background-color: #ffff4d; padding: 10px; max-width: 250px;">
                                    <img src="<?= base_url('public/assets_web/img/card/procurementmanagement.jpg') ?>" class="img-fluid mx-auto d-block service-image"  alt="">
                                    <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                                    <h4 class="title"><a href="<?= site_url('web/GeneralInfo/') ?>">GENERAL PROCUREMENT INFORMATION</a></h4>
                                    <p class="description hidden">Procurement rules and regulations stipulated by the Special Task Force in respect of quotations</p>
                                </div>
                            </div>


                        </div>                     
                    </div>
                </div>
            </section><!-- End Services Section -->


            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio" style="background: linear-gradient(to bottom, #ccff99 0%, #333300 100%);">
                <div class="container">

                    <div class="section-title">
                        <h2>Registration</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="container">
                        <div class="card-group">
                           
                               <div class="card"  onmouseover="displayMessage(this)" onmouseout="hideMessage(this)">
                                <img src="<?= base_url('public/assets_web/img/carousel/procurement 07.jpg') ?>" class="card-img-top" alt="Wild Landscape">
                                <div class="card-body">
                                    <h5 class="card-title">Non Registered Suppliers</h5>
                                     <div class="message" style="display: none;position: absolute; top: 50%;left: 50%;transform: translate(-50%, -50%);background-color: rgba(255, 255, 255, 0.9);
                                      padding: 10px;border-radius: 5px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); background-color: #79ff4d; width: 200px; height: 200px;">Are you a new supplier eager to expand your business opportunities? Register now our SPIMS System today and gain access to a host of new bids waiting for your expertise. </div>                                                                
                                 <a href="<?= site_url('web/nonregisteredSupplier') ?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Register</button></a>
                                </div>
                                
                            </div>
                            <div class="card"  onmouseover="displayMessage(this)" onmouseout="hideMessage(this)">
                                <img src="<?= base_url('public/assets_web/img/carousel/procurement 05.jpg') ?>" class="card-img-top" alt="Wild Landscape">
                                <div class="card-body">
                                    <h5 class="card-title">Registered Suppliers</h5>
                                     <div class="message" style="display: none;position: absolute; top: 50%;left: 50%;transform: translate(-50%, -50%);background-color: rgba(255, 255, 255, 0.9);
                                      padding: 10px;border-radius: 5px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);background-color: #79ff4d;">Bidders who registered at Ministry of public Security in terms of the Public Contract Act No. 3 of 1987
                                     </div>
                                    <a href="<?= site_url('web/registeredSupplier') ?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Register</button></a>
                                </div>
                                
                            </div>
                         
                        </div>
                    </div>

                </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container position-relative">
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="<?= base_url('public/assets_web/img/team/team01.jpg') ?>"  class="testimonial-img" alt="">
                                    <h3>SDIG Latiff Retires</h3>
                                    <h4>Former Commandant Special Task Force &amp; Procurement Chairman</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Procurement committee members play a crucial role in ensuring transparent and effective acquisition processes, overseeing vendor selection, negotiating contracts, and upholding ethical standards to achieve optimal value for the organization.                                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="<?= base_url('public/assets_web/img/team/team02.jpg') ?>" class="testimonial-img" alt="">
                                    <h3>Waruna Jayasundara</h3>
                                    <h4>Commandant Special Task Force &amp; Procurement Chairman</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Procurement committee members play a crucial role in ensuring transparent and effective acquisition processes, overseeing vendor selection, negotiating contracts, and upholding ethical standards to achieve optimal value for the organization.                                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="<?= base_url('public/assets_web/img/team/team03.jpg') ?>" class="testimonial-img" alt="">
                                    <h3>Dilani Rathnayake</h3>
                                    <h4>Member of TEC </h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Procurement committee members play a crucial role in ensuring transparent and effective acquisition processes, overseeing vendor selection, negotiating contracts, and upholding ethical standards to achieve optimal value for the organization.                                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="<?= base_url('public/assets_web/img/team/team04.jpg') ?>" class="testimonial-img" alt="">
                                    <h3>H.A.W.D.J Wijesooriya</h3>
                                    <h4>Procurement Officer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Procurement committee members play a crucial role in ensuring transparent and effective acquisition processes, overseeing vendor selection, negotiating contracts, and upholding ethical standards to achieve optimal value for the organization.                                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Team Section ======= 
            <section id="team" class="team section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Team</h2>
                        <p>Procurement committee members play a crucial role in ensuring transparent and effective acquisition processes, overseeing vendor selection, negotiating contracts, and upholding ethical standards to achieve optimal value for the organization.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('public/assets_web/img/team/team01.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>SDIG Latiff Retires</h4>
                                    <span>Commandant Special Task Force</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('public/assets_web/img/team/team02.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Waruna Jayasundara</h4>
                                    <span>Commandant Special Task Force</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('public/assets_web/img/team/team03.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>Procurement Committee Member</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="<?= base_url('public/assets_web/img/team/team04.jpg') ?>" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>-->
            <!--   </section><!-- End Team Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container">

                    <div class="text-center title">
                        <h3>What we have achieved so far</h3>
                        <p>SPIMS defined as the collaborative use of information and communications technologies by procurement staff and the bidding community in conducting ethical procurement activities of the  procurement process cycle for the procurement of goods, works and services, and management of contracts ensuring transparency, accountability and value-for-money in public procurement contributing to the socio-economic development of country.</p>
                    </div>

                    <div class="row counters position-relative">

                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end=<?= $nonregSuppliers ?> data-purecounter-duration="1" class="purecounter"></span>
                            <p>Registered Suppliers</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end=<?= $announcement ?> data-purecounter-duration="1" class="purecounter"></span>
                            <p>New NCB Procurement Announcement</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $sannouncement ?> " data-purecounter-duration="1" class="purecounter"></span>
                            <p>New National Shopping Procurement Announcement</p>
                        </div>
                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end=<?= $listItem ?> data-purecounter-duration="1" class="purecounter"></span>
                            <p>Registered Procurement Item</p>
                        </div>

                    </div>

                </div>
                <div class="col-lg-10 order-1 order-lg-2 mx-auto">
                    <div class="container">
                        <div class="carousel slide carousel-fade" data-ride="carousel" id="abc">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= base_url('public/assets_web/img/carousel/procurement 01.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 class="text-danger">Easy to Use</h3>
                                        <p class="text-warning">It has automated the purchasing procedure and has furnished excellent results for both, the companies and the suppliers</p>    
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="<?= base_url('public/assets_web/img/carousel/procurement 02.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 class="text-danger">Reduced supplier risk</h3>
                                        <p class="text-dark">It has automated the purchasing procedure and has furnished excellent results for both, the companies and the suppliers</p>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="<?= base_url('public/assets_web/img/carousel/procurement 03.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 class="text-danger">Improved efficiency</h3>
                                        <p class="text-primary">It has automated the purchasing procedure and has furnished excellent results for both, the companies and the suppliers</p>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="<?= base_url('public/assets_web/img/carousel/procurement 05.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 class="text-danger">Improved transparency</h3>
                                        <p class="text-primary">Procurement software allows complete purchasing control by centralizing purchase requisitions, streamlining approvals, and providing insights on real-time purchases and purchase history.</p>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="<?= base_url('public/assets_web/img/carousel/procurement 07.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 class="text-danger">Improved operational performance</h3>
                                        <p class="text-dark">Optimal purchase order management through elimination of incomplete, missing, or inaccurate purchase orders</p>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <img src="<?= base_url('public/assets_web/img/carousel/procurement 08.jpg') ?>" class="d-block w-100" alt="Wild Landscape">
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
            </section><!-- End Counts Section -->

            <!-- ======= Clients Section ======= -->

            <!--hide this part to add later--><!-- new client section -->

            <!--<div class="row">

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/images1.png') ?>"  alt="img21">
                     <figcaption>
                         <h1> Yearly<span>  Procurement Planning </span></h1>
                         <div>
                             <p>All the procuring entities shall prepare &amp; upload procurement plans</p>
                         </div>
                         <a href="?p=front_cont&amp;a=about_b1">View more</a>
                     </figcaption>
                 </figure>
             </div>

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/images2.jpg') ?>"  alt="img21">
                     <figcaption>
                         <h1> <span> Types of Procurements</span></h1>
                         <div>
                             <p>Types of procurements available through this system</p>
                         </div>
                         <a href="?p=front_cont&amp;a=steering_committee">View more</a>
                     </figcaption>
                 </figure>
             </div>

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/images3.png') ?>"  alt="img21">
                     <figcaption>
                         <h1>Indicative Functional Specifications</h1>
                         <div>
                             <p>Functional Specifications of commonly used goods compiled by a panel of experts are listed</p>
                         </div>
                         <a href="?p=front_cont&amp;a=e_government_procurement">View more</a>
                     </figcaption>
                 </figure>
             </div>

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/images4.png') ?>"  alt="img21">
                     <figcaption>
                         <h1> <span>Procurement Planning </span></h1>
                         <div>
                             <p>All the procuring entities shall prepare &amp; upload procurement plans</p>
                         </div>
                         <a href="?p=front_cont&amp;a=how_to_use_the_system">View more</a>
                     </figcaption>
                 </figure>
             </div>

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/image2.jpg') ?>"  alt="img21">
                     <figcaption>
                         <h1> <span> Procurements Management </span></h1>
                         <div>
                             <p>simplify the procurement activities of the special Task Force, using IPS-EMS System</p>
                         </div>
                         <a href="?p=front_cont&amp;a=registration_of_vendor">View more</a>
                     </figcaption>
                 </figure>
             </div>

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/images5.png') ?>"  alt="img21">
                     <figcaption>
                         <h1> <span> Registration of Procuring Entities </span></h1>
                         <div>
                             <p>Any public sector institution carry out procurement activities is required to register with the system</p>
                         </div>
                         <a href="?p=front_cont&amp;a=registration_of_procuring_entities">View more</a>
                     </figcaption>
                 </figure>
             </div>

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/images12.jpg') ?>" alt="img21">
                     <figcaption>
                         <h1>Registered <span> Vendors   </span></h1>
                         <div>
                             <p> 3450 vendors have already registered and 2348 vendors have been confirmed with the system for e-GP </p>
                         </div>
                         <a href="?p=front_cont&amp;a=registered_vendors">View more</a>
                     </figcaption>
                 </figure>
             </div>

             <div class="col-sm-4 col-md-3 col-xs-6">
                 <figure class="effect-julia">
                     <img src="<?= base_url('public/assets_web/img/carousel/images13.png') ?>"  alt="img21">
                     <figcaption>
                         <h1> <span>Registered Procuring Entities </span></h1>
                         <div>
                             <p>534 procuring entities have already registered and 394 procuring entities have been confirmed with the system for e-GP</p>
                         </div>
                         <a href="?p=front_cont&amp;a=registered_procuring_entities">View more</a>
                     </figcaption>
                 </figure>
             </div>


         </div>-->
            <!--end-->  <!--hide this part to add later-->



<!--old <section id="clients" class="clients">
  <div class="container">

    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= base_url('public/assets_web/img/clients/client-1.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= base_url('public/assets_web/img/clients/client-2.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= base_url('public/assets_web/img/clients/client-3.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= base_url('public/assets_web/img/clients/client-4.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= base_url('public/assets_web/img/clients/client-5.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= ('public/assets_web/img/clients/client-6.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= ('public/assets_web/img/clients/client-7.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-6">
        <div class="client-logo">
          <img src="<?= ('public/assets_web/img/clients/client-8.png') ?>" class="img-fluid" alt="">
        </div>
      </div>

    </div>

  </div>
</section><!-- End Clients Section -->



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
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-9.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-9.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-13.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-13.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-27.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-27.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-20.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-20.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-32.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-32.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-31.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-31.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-33.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-33.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="<?= base_url('public/assets_web/img/gallery/gallery-37.jpg') ?>" class="galleery-lightbox" data-gallery="gallery-item">
                                    <img src="<?= base_url('public/assets_web/img/gallery/gallery-37.jpg') ?>" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Gallery Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <img src="<?= base_url('public/assets_web/img/STF_SL_badge.png') ?>" alt="" class="img-fluid">

                        <p style="text-align: center; font-style: italic; font-weight: bold;">
                            Sri Lanka Police specialising in clandestine and covert operations, combat and patrolling in urban areas, combat search and rescue, counterinsurgency and counterterrorism operations, crowd control, executive protection, forward observer, hostage rescue, indirect fire, irregular warfare, jungle and mountain warfare, parachuting, psychological warfare, search and rescue people who are in distress or imminent danger from disaster. serving high-risk arrest and search warrants, special reconnaissance, support military operations, tactical emergency medical, tracking, and unconventional tactics. It was formed in 1983 not as a military force, but rather as a highly specialised armed police unit.
                        </p>
                    </div>

                    <div>
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.327776527296!2d79.8617649!3d6.8985872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259629fc772a3%3A0x68cc18cbe60342bc!2sS.T.F.%20Headquarters!5e0!3m2!1sen!2sus!4v1630400170408!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-4">
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

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit" class="btn btn-outline-primary rounded-0">Send Message</button></div>
                            </form>

                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

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

<!-- Template Main JS File -->
<script src="<?= ('public/assets_web/js/main.js') ?>"></script>
<script src="<?= ('public/assets_web/js/carousel.js') ?>"></script>
<script src="<?= ('public/assets_web/js/color-thief.js') ?>"></script>
<!-- Include jQuery and Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const heroSection = document.getElementById('hero');
        const imagePaths = [
            '<?= base_url('public/assets_web/img/gallery-12.jpg') ?>',
            '<?= base_url('public/assets_web/img/gallery-8.jpg') ?>',
            '<?= base_url('public/assets_web/img/gallery-02.jpg') ?>',
            '<?= base_url('public/assets_web/img/gallery-03.jpg') ?>',
            '<?= base_url('public/assets_web/img/gallery-01.jpg') ?>',
                    // Add more image paths as needed
        ];

        let currentIndex = 0;

        function changeBackground() {
            currentIndex = (currentIndex + 1) % imagePaths.length;
            heroSection.style.backgroundImage = `url('${imagePaths[currentIndex]}')`;
        }

        // Initial call
        changeBackground();

        // Change background every 5 seconds
        setInterval(changeBackground, 5000);
    });
</script>


<script>
    $(document).ready(function () {
        $('.service-image').hover(
                function () {
                    $(this).siblings('.description').removeClass('hidden');
                },
                function () {
                    $(this).siblings('.description').addClass('hidden');
                }
        );
    });
</script>

<!-- Add this script just before </body> -->
<script src="https://cdn.jsdelivr.net/npm/color-thief@2.3.0/dist/color-thief.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the hero section element
        var heroSection = document.getElementById('hero');

        // Get the image element within the hero section
        var heroImage = heroSection.querySelector('img');

        // Initialize ColorThief
        var colorThief = new ColorThief();

        // Get the dominant color of the image
        var dominantColor = colorThief.getColor(heroImage);

        // Set the color of h1 and h5 based on the dominant color
        var h1Element = document.querySelector('h1');
        var h5Element = document.querySelector('h5');

        h1Element.style.color = 'rgb(' + dominantColor.join(', ') + ')';
        h5Element.style.color = 'rgb(' + dominantColor.join(', ') + ')';
    });
</script>
<script>
  function displayMessage(card) {
    var message = card.querySelector('.message');
    message.style.display = 'block';
  }

  function hideMessage(card) {
    var message = card.querySelector('.message');
    message.style.display = 'none';
  }
</script>

<script>
  function displayMessage(icon-box) {
    var message = icon-box.querySelector('.message');
    message.style.display = 'block';
  }

  function hideMessage(icon-box) {
    var message = icon-box.querySelector('.message');
    message.style.display = 'none';
  }
</script>

</html>      
