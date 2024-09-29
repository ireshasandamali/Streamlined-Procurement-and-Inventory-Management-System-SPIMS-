<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>IPMS-Login</title>

        <!-- Vendor CSS Files -->
        <link href="<?= base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?= base_url('public/assets/css/style.css') ?>" rel="stylesheet">


    </head>
    <body style="background-color: #99e6ff;">

        <main>
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">

                                <span class="d-none d-lg-block" style="text-align:center">Streamlined Procurement and Inventory Management System (SPIMS)</span>                           
                                <!--<img src="public/assets/img/stflogo.png" class="mx-auto d-block" alt="" style=" width:150px;">-->
                                <hr>
                            </a>
                        </div><!-- End Logo -->
                        <div class="row content">
                            <div class="card mb-3 mx-auto" style="max-width: 900px; background-color: #99e6ff; margin-top:5px"> <!-- Set a max-width to reduce the size -->



                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <img src="<?= base_url('public/assets/img/images6.jpg') ?>" alt="Left Side Image" style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 2px; border-bottom-left-radius: 2px;margin-right: 0px">
                                        </div>
                                        <div class="col-lg-5 pt-4 pt-lg-0">
                                            <div class="login-container">

                                                <div class="right-side d-flex flex-column align-items-center justify-content-center">
                                                    <div class="card mb-3">

                                                        <div class="card-body bg-light">
                                                            <div class="pt-4 pb-2">                          
                                                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                                                <p class="text-center"><b><i>Let's get Started!</i></b></p>
                                                            </div>
                                                            <!-- this login form for customer or supplier login-->
                                                            <?= form_open('web/login_validate', array("class" => "row", "novalidate" => "novalidate")) ?>
                                                            <div class="col-12">
                                                                <label for="yourUsername" class="form-label">Username</label>
                                                                <div class="input-group has-validation">
                                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                                    <input type="text" name="username" class="form-control" id="yourUsername" value="<?= set_value('username') ?>" >
                                                                </div>
                                                                <span class="text-danger"><?= service('validation')->getError('username') ?></span>
                                                            </div>

                                                            <div class="col-12">
                                                                <label for="yourPassword" class="form-label">Password</label>
                                                                <input type="password" name="password" class="form-control" id="yourPassword" >
                                                                <span class="text-danger"><?= service('validation')->getError('password') ?></span>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button class="btn btn-outline-primary rounded-0 w-100" type="submit"><a href="<?= site_url('web/index') ?>">Login</a></button>
                                                            </div>
                                                            <div class="col-12">
                                                                <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                                                                <p style="text-align:center">Forgot My Password</p>                                        </div>
                                                                <?= form_close(); ?>
                                                             <a href="<?= site_url('user/resetpassword') ?>">Reset my password</a>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                </div>
                </div>
            </section>

        </main><!-- End #main -->

        <!-- End Logo -->
</html>