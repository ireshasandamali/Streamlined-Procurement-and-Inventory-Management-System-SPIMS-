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



<li> <!--<a class="nav-link scrollto" href="<?= site_url('web/login') ?>">
       <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZNJREFUSEvN1b9LVmEYxvGPDtWkIRgRODVIWClB5JBk4GBDjSItLUlDLjnUIi2FiA5umqAgioN/gRY0VItaIf5Cp6yliH6QtVX+4JFHeJH3fY/nwAue9dz3832u677PdcqU+Ckr8fmODKAerbiCq1H1G8xhGsuFnEhScAw9eIDyAodsow+P8e9gTTHAGbxAHX5gAG/xDgF8MSrqwkksoh3ruZAkBU9xDh34WUDBKYzgJr6iER/3a5MAaZZsDHcwgxtZAOEyQ+jE/zzk4/iAYG2wb2/waRSE2jDQWdzCtzyQR+hFPx5mBYS+L9Hz9wcgF7AUB96QC9i/XRrP/+IuJnKaKrCJ36gsJeAPAizTDIpZdBnzWMX5rIBiQ+7GEwzifhZAsTU9gQ2cRgtepgUkLcAkbuMVmg/7oYWoqIpydwoQwgYOxzgJUXEJnw8DqEHY82qs4RnG8Ss2B3CIhnuoxXdcx0qasDuLUVxL8Od5BH1KE9e5tWH92tAU03UrxvJrTGEh6w8nabCJ79OEXeJh+QpKDtgF+AFSGTIlXMIAAAAASUVORK5CYII="/>
       Login  -->                        
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
            <div class="container">

                <div class="section-title">
                    <h2 style=" margin-top: 50px;">Supplier Registration</h2>

                    <p style="font-family: 'TSG Bolt', 'Ittali'; color: #000000;font-size: 22px;">Ministry of Public Security</p>
                    <p style="font-family: 'TSG Bolt', 'Ittali'; color: #000000;font-size: 22px;">Special Task Force</p>
                    <p style="font-family: 'Bolt'">All the suppliers registered with the system will be able to submit their bids, have access to the tender notices, seek clarification and interpretation on any matter pertaining to the respective procurement system, and have access to the decisions of procurement committees online from any geographic location in the world. This will reduce the cost of bidding on the part of suppliers, which will eventually help reduce the cost of goods and services to the government.</p>
                </div>
                <!-- ======= Contact Section ======= -->
                <div class="card" style="border: 2px solid #CCCCFF; margin-left: 50px; margin-right: 50px;" > <!-- Adjust the margin value as needed -->
                    <div class="card-header" style="background-color: #7070db; color: white;">
                        <h2>Supplier Registration Form</h2>
                    </div>
                    <?= form_open_multipart('web/viewnonregisteredSupplier') ?>

                    <div class="card-body">
                        <!-- Company Details -->
                        <div class="card" style="border: 2px;">
                            <div class="card-body">
                                <fieldset class="form-group border p-2">
                                    <legend style="text-align: center; width: 100%;">Company Details</legend>
                                    <?php foreach ($list as $key => $result) { ?>

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="business_reg_no" class="form-label">Business Registration No<span class="star" style="color:red"> * </span></label>
                                                <div class="input-group">
                                                    <input  type="business_reg_no" class="form-control" id="business_reg_no" value="<?= $result['business_reg_no'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('business_reg_no') ?></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="business_name" class="form-label">Business Name<span class="star" style="color:red"> * </span></label>
                                                <div class="input-group">
                                                    <input  type="text" class="form-control" name="business_name" value="<?= $result['business_name'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('business_name') ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="business_reg_Date" class="form-label">Business Registration Date<span class="star" style="color:red"> * </span></label>
                                                <div class="input-group">
                                                    <input type="date" class="form-control" name="business_reg_Date" id="business_reg_Date" value="<?= $result['business_reg_Date'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('business_reg_Date') ?></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="website" class="form-label">Website</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="website" placeholder="https://www.yoursite.com/" data-validation="url" value="<?= $result['website'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('website') ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="MinValue" class="form-label">Minimum Value of Procurement <span class="star" style="color:red"> * </span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="MinmumValue" id="MinmumValue" value="<?= $result['MinmumValue'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('MinmumValue') ?></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="MaxmumValue" class="form-label">Maximum Value of Procurement<span class="star" style="color:red"> * </span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="MaxmumValue" id="MaxmumValue" value="<?= $result['MaxmumValue'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('MaxmumValue') ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">                                        
                                            <div class="col-md-12">
                                                <label for="location" class="form-label">Company Location<span class="star" style="color:red"> * </span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="location" id="location" value="<?= $result['location'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('location') ?></span>
                                                </div>
                                            </div>
                                        </div
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="Address" class="form-label">Registered Address<span class="star" style="color:red"> * </span></label>
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="street" placeholder="Street" value="<?= $result['street'] ?>,<?= $result['city'] ?>,<?= $result['province'] ?>,<?= $result['country'] ?>" readonly>
                                                        <span class="text-danger"><?= service('validation')->getError('street') ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                    </fieldset>


                                    <hr style="color: red; height: 2px; border-width: 4px;">


                                    <fieldset class="form-group border p-2">
                                        <legend style="text-align: center;">Owner Details</legend>
                                        <div class="row g-3">
                                            <!-- Second Column -->
                                            <div class="col-12">
                                                <div class="form-group col-12">
                                                    <label for="business_owner_Fname" class="form-label"> Name<span class="star" style="color:red">*</span></label>
                                                    <input type="text" class="form-control" name="business_owner_Fname" value="<?= $result['Titles'] ?>.<?= $result['business_owner_Fname'] ?> <?= $result['business_owner_Lname'] ?>" readonly>                                            <span class="text-danger"><?= service('validation')->getError('business_owner_Fname') ?></span>
                                                </div>
                                            </div>

                                            <!-- Third Column -->


                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label for="Address" class="form-label">Address<span class="star" style="color:red"> * </span></label>
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="ostreet" placeholder="Street"  value="<?= $result['ostreet'] ?>,<?= $result['ocity'] ?>" readonly>
                                                            <span class="text-danger"><?= service('validation')->getError('ostreet') ?></span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-12">
                                                    <label for="NIC" class="form-label">NIC<span class="star" style="color:red"> * </span></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nic" id="nic" value="<?= $result['nic'] ?>" readonly>
                                                        <span class="text-danger"><?= service('validation')->getError('nic') ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-12 col-xs-12 control-label">Mobile phone No <span class="star" style="color:red"> * </span></label>
                                                <div class="row g-3">
                                                    <div class="col-2">
                                                        <input type="text" class="form-control" name="prefix" id="prefix" placeholder="94" maxlength="3" value="94" required="" readonly="">
                                                        <span class="text-danger"><?= service('validation')->getError('prefix') ?></span>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="phone" id="phone"  value="<?= $result['phone'] ?>" readonly>
                                                        <span class="text-danger"><?= service('validation')->getError('phone') ?></span>
                                                    </div>
                                                    <div class="col-xs-1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 col-xs-12 control-label">Email <span class="star" style="color:red"> * </span> </label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" name="Email" id="Email" value="<?= $result['Email'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('Email') ?></span>
                                                </div>
                                                <div class="col-xs-1"></div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label for="Branch" class="form-label">Branch<span class="star" style="color:red"> * </span></label>
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="Branch"  value="<?= $result['Branch'] ?>" readonly>
                                                            <span class="text-danger"><?= service('validation')->getError('Branch') ?></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <label for="Account" class="form-label">Account Number<span class="star" style="color:red"> * </span></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="Account" id="Account" value="<?= $result['Account'] ?>" readonly>
                                                        <span class="text-danger"><?= service('validation')->getError('Account') ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                    </fieldset>

                                    <!-- Contract Person Details -->
                                    <hr style="color: red; height: 2px; border-width: 4px;">
                                    <fieldset class="form-group border p-2">
                                        <legend style="text-align: center;">Contact Person Details</legend>
                                        <div class="row g-3">
                                            <!-- Second Column -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="Contact_person_Fname" class="form-label">Name<span class="star" style="color:red">*</span></label>
                                                    <input type="text" class="form-control" name="Contact_person_Fname" value="<?= $result['CTitles'] ?>.<?= $result['Contact_person_Fname'] ?> <?= $result['Contact_person_Lname'] ?>" maxlength="200" required="">
                                                    <span class="text-danger"><?= service('validation')->getError('Contact_person_Fname') ?></span>
                                                </div>
                                            </div>



                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <label for="Address" class="form-label">Address<span class="star" style="color:red"> * </span></label>
                                                    <div class="col-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="Cstreet" placeholder="Street" value="<?= $result['Cstreet'] ?>.<?= $result['Ccity'] ?>"readonly>
                                                            <span class="text-danger"><?= service('validation')->getError('Cstreet') ?></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="CNIC" class="form-label">NIC<span class="star" style="color:red"> * </span></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="Cnic" id="Cnic" placeholder="NIC" value="<?= $result['Cnic'] ?>" readonly>
                                                        <span class="text-danger"><?= service('validation')->getError('Cnic') ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 col-xs-12 control-label">Mobile phone No <span class="star" style="color:red"> * </span></label>
                                                <div class="row g-3">
                                                    <div class="col-2">
                                                        <input type="text" class="form-control" name="Cprefix" id="Cprefix" placeholder="94" maxlength="3" value="94" required="" readonly="">
                                                        <span class="text-danger"><?= service('validation')->getError('Cprefix') ?></span>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="text" class="form-control" name="Cphone" id="Cphone" placeholder="0712345678" value="<?= $result['Cphone'] ?>" readonly>
                                                        <span class="text-danger"><?= service('validation')->getError('Cphone') ?></span>
                                                    </div>
                                                    <div class="col-xs-1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-sm-2 col-xs-12 control-label">Email <span class="star" style="color:red"> * </span> </label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" name="CEmail" id="CEmail" value="<?= $result['CEmail'] ?>" readonly>
                                                    <span class="text-danger"><?= service('validation')->getError('CEmail') ?></span>
                                                </div>
                                                <div class="col-xs-1"></div>
                                            </div>


                                            <!-- end Section-->
                                            <?= form_close() ?>
                                            <?php
                                        }
                                        ?>

                                    </div>


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
                                                           <i><a href=""><img src="<?= site_url('public/assets_web/img/logo.png')?>" alt="" style="width:50px; height:60px" class="rounded-circle"></a></i>
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
