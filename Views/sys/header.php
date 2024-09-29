<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SPIMS_Dashboard</title>
    <!-- Vendor CSS Files -->
    <link href="<?=base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?=base_url('public/assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?=base_url('public/assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <a href="index.html" class="logo">
                        <img src="<?= site_url('public/assets_web/img/spims5.png') ?>" alt="" style="width: 135px; height: 390px; border-radius: 50%">
                    </a>
                    <i class="bi bi-list toggle-sidebar-btn"></i>
                </div>
                 <div class="col-auto">
                   
                     <p style="color: blue; font-size: 19px; font-weight: bold; text-align: center;font-family: Algerian;"><i>Streamlined Procurement & Inventory Management System</i></p>
                  <!--   <p style="color: green; font-size: 18px; font-weight: bold; text-align: center;">Special Task Force</p>-->

                </div>
                <div class="col-auto">
             
                </div>
                <div class="col-auto">
                    <!-- Navigation Icons -->
                    <nav class="header-nav">
                        <ul class="d-flex align-items-center">
                            <li class="nav-item d-block d-lg-none">
                                <a class="nav-link nav-icon search-bar-toggle" href="#">
                                    <i class="bi bi-search"></i>
                                </a>
                            </li><!-- End Search Icon-->

        <!--<li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">*</span>
          </a><!-- End Notification Icon -->

          <!--<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
                
              You have  new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2"></span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
           
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

       <!-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

        <!--  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?php // site_url('public/assets/img/messages-2.jpg')?>" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="<?php // site_url('public/assets/img/messages-3.jpg')?>" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
           <!-- <img src="<?= site_url('public/assets/img/profile-img.jpg')?>" alt="Profile" class="rounded-circle">-->
            <img src="<?= base_url('public/images/uploads/'.session()->get('ProfileImage')) ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('UserName') ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= session()->get('UserName') ?></h6>
                <img src="<?= base_url('public/images/uploads/'.session()->get('ProfileImage')) ?>">            
            </li>
            <li style="text-align: center">  <i class="bi bi-person"></i> <span><?= session()->get('UserType') ?></span></li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= site_url('employee/updateProfile/'.session()->get('UserId'))?>"
                <i class="bi bi-person"></i>
                <span>View Your Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= site_url('user/logout') ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

