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
                <div class="card mb-3 mx-auto" style="max-width: 500px; margin-top:5px;">
                    <!-- Set a max-width to the card -->
                    <div class="modal-body text-center">
                        <img src="<?= site_url('public/assets_web/img/tick.png') ?>" alt="" style="width: 150px; height: 150px">
                        <br> <br><p style="color: #4CAF50; font-size: 18px; font-weight: bold;">Successfully Registered to the SPIMS...!</p>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <div class="col-sm-6">
                            <a class="btn btn-outline-primary rounded-0 w-100" href="<?= site_url('sys') ?>" style="background-color: #4CAF50; border-color: #4CAF50;">Go To Dashboard Page</a>
                        </div> <br> <br> <br> <br>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    <!-- End Logo -->
</body>

</html>
