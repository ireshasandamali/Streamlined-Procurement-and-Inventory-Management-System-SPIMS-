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
        <header id="header" class="fixed-top" style=" background: linear-gradient(to bottom, #3333cc 0%, #66ccff 100%);">
            <div class="container d-flex align-items-center justify-content-between">

                <div class="d-flex align-items-center justify-content-between">
                    <a href="index.html" class="logo">   <img src="<?= site_url('public/assets_website/img/logopr.png')?>" alt="" style="width:80px; height:90px"></a>
                   <!-- <span class="d-none d-lg-block" style="color: #0d6efd; font-family: 'Arial', sans-serif; font-size: 24px;">SPIMS</span>-->
                    <span class="d-none d-lg-block" style="color:white !important; font-family: 'Arial', sans-serif; font-size: 24px;"><strong>SPIMS</strong></span>
                    </a>

                </div><!-- End Logo -->               

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARxJREFUSEvt1EsuREEUxvFfr8JAgiaewx6S2IHYjIkdsCA2IEw7kYjHwGMgYRNIyb1SSvW9VVrPnFmdnPr+p+o8BmZsgxnrqwHM4QRv2MNrSXKlgCB+geVG9B7bJZASQBA/wyqeGsAi7rDbB+kDxJk/Y6cBnGMevS/pAuTE4xcUQSYBusTb2oZv6oXkACXixZAUUCNeBIkBcbeEy0M8lvQ6lvDQxH7rrhhwha1IsK/DUvZ75BhjFM6xyC3W/ghwg80U0Gq3mbTwfRxhI0n5Ggc4bfzpvU937hvSwBeE+uQsDNrKtIBsZkj9v37BP+BH7Yr+dpoahI25UDjBaViY/LABvizXpqHvj7FeCbnEYTQXE+egUrc7vHbfVMM/AMMeVBkx8bReAAAAAElFTkSuQmCC"/></li>Home</a></li>
                        <li><a class="nav-link scrollto" href="#counts">About</a></li>
                        <li><a class="nav-link scrollto" href="#services">Procurement</a></li>
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
                         <li><a class="nav-link scrollto " href="#portfolio"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAchJREFUSEu11UvoTVEUx/HP3yslAzOKCSWvFFJekZlkJhQjKULyiFJKMWBAGFAmTCmmMpOI5JEUJjIQYSxKFFr/9tGx2+eenbq7zmDvu9b6rrX2b687YshrZMjx9QHGYgOWYhGWpISe4jke4xZ+dSU6CDAT11PwQYU+xFa8Kxl1AXbiHCZVtvAr9uNqbl8C7MGlysC52W5cbh/mgFl4iYn/CfiG+e12tQFjcB8rsuClKhdiO/ZifGYfMdbgd5y3nVclQE0bG5tox65CtcvxKAccxpmCcZPEaEatFedz8brgcxAXcsBNbKwEvMFsrMWdgs8NbM4B7zF9AKB07yHN0Uyz9QEzcsAnTK0EhCBCzicxpeDzGdNywG2s62nREyzDOLzAnA45R6z1OeA0jlbcwRGcRUj1WYLlbqdwLAdsSbOnS6aNin5gHt7iOE4UktqEEM0/7yBeb5Qd6sjlGPu2TJtWxXlM1GbKxj4UFtV9zwGxX5DKntDR277jqG4xXjWGpTFwAOf7InX8vg8XS+Xn9jsSZHIl6AsO4UrXBZbixEO5hpU9kLvYho8lu76/zPCJ8RvTcXX6fuIB7qWvNIv+smoAlV0qmw0d8AdB8UwZPLzMvAAAAABJRU5ErkJggg=="/></li>Registration</a></li>
                        <!-- <li><a class="nav-link scrollto" href="<?= site_url('web/login') ?>"><li><button type="submit" class="btn btn-outline-primary rounded"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZNJREFUSEvN1b9LVmEYxvGPDtWkIRgRODVIWClB5JBk4GBDjSItLUlDLjnUIi2FiA5umqAgioN/gRY0VItaIf5Cp6yliH6QtVX+4JFHeJH3fY/nwAue9dz3832u677PdcqU+Ckr8fmODKAerbiCq1H1G8xhGsuFnEhScAw9eIDyAodsow+P8e9gTTHAGbxAHX5gAG/xDgF8MSrqwkksoh3ruZAkBU9xDh34WUDBKYzgJr6iER/3a5MAaZZsDHcwgxtZAOEyQ+jE/zzk4/iAYG2wb2/waRSE2jDQWdzCtzyQR+hFPx5mBYS+L9Hz9wcgF7AUB96QC9i/XRrP/+IuJnKaKrCJ36gsJeAPAizTDIpZdBnzWMX5rIBiQ+7GEwzifhZAsTU9gQ2cRgtepgUkLcAkbuMVmg/7oYWoqIpydwoQwgYOxzgJUXEJnw8DqEHY82qs4RnG8Ss2B3CIhnuoxXdcx0qasDuLUVxL8Od5BH1KE9e5tWH92tAU03UrxvJrTGEh6w8nabCJ79OEXeJh+QpKDtgF+AFSGTIlXMIAAAAASUVORK5CYII="/></li>Login</button></a></li>
                   -->
                   <li>
                       <a class="nav-link scrollto" href="<?= site_url('web/login') ?>">
                           <button type="submit" class="btn btn-outline-primary rounded" style="border-radius: 50px; padding: 10px 20px; border-color: #000066">
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
     </div><!-- End Page Title -->
     <main>
     <section id="services" class="services section-bg">
         <div class="container">
             <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">            
                 <ol class="breadcrumb">
                     <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWFJREFUSEvd1b1LHFEUxuFnEbERlRRBBCGklSj+AWlD1CaQOkUs/CgEBUklJpLaIo2FISBiLQQiKYJtilSCQREFJWBhpbYRE2dgdplcZu/uZt1mbzmc9/2dj3vPlLT4lFrsr/0BXXiJ5xjBI/zFGfbwFdu4qdbqWIvGsJaZxkZ1ghnsFgVVA7xLMn3bwAX4gzdYDTVFgBUsN2CeD53Hh/yHEDCBL/9pnsrSSp7ie9kjD+jGMfobAFzgM6ZymiM8KQ8+D5jNhlqv/xaW8CPRPQxELzLwPw9tJwker8M9zfp1dkU38apA87FcVb6CcwzUAGxgAVeIzSt9I6OpVx7wG50RwPvc7erFQSShSzwIAdfoiQAqfcUnTEZiU6++EPATQxHRIRaztTFXo5X7yQoZDgG1sqpj/pWQdUyHgHShpcvrPs4zfAsBHThN+jvYJOEXHuM2BDTpWyxv/z9a021reYvuAJ89NxlfzVfAAAAAAElFTkSuQmCC"/>
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item active"><a href="index.html">Dashboard</a></li>
                     <li class="breadcrumb-item active"><a href="index.html">INVITATION FOR BIDS</a></li>
                     <li class="breadcrumb-item active"><a href="index.html">Apply for BID</a></li>
                 </ol>
             </nav>
             <div class="section-title">
                 <h2>INVITATION FOR BIDS (IFB)</h2>
                 <h5 class="card-title">(Procurements of Goods, Works and Services)<br>SPECIAL TASK FORCE<br>(SRI LANKA POLICE)</h5> 
             </div>

        <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;">
             <div class="card-header" style="background-color: #7070db; color: white;">Invitation For Bids</div>
        <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 

            <div class="card-body">
                <h5 class="card-title"></h5> 
                <?php
                foreach ($listP as $key => $resultP) {
                    ?>
                    <h4 _ngcontent-c24="" class="society-section-header"><?= $resultP['Description'] ?></h4><div _ngcontent-c24=""><hr>

                        <?php
                    }
                    ?>                     
                    <?= form_open_multipart('web/viewtender') ?>

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped  ">
                            <tbody>
                                <?php
                                foreach ($list as $key => $result) {
                                    ?>  
                                
                                    <tr>
                                          
                                        <td> <strong><input type="hidden" name="AnnounceId" value="<?= $result['id'] ?>">BID Validation Period</strong> </td>
                                        <td> <?= $result['BStart'] ?> To  <?= $result['BEnd'] ?></td>
                                    </tr>
                                    <tr>
                                        <td> <strong> BID Opening Date &amp; Time </strong> </td>
                                        <td><?= $result['BOpen'] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                <?php
                                foreach ($listP as $key => $resultP) {
                                    ?>
                                    <tr>
                                        <td> <strong><input type="hidden" name="TenderId" value="<?= $resultP['TId'] ?>">Procurement Number</strong> </td>
                                        <td>STF/LOG/C/<?= $resultP['TId'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> Title of the Procurement</strong> </td>
                                        <td><?= $resultP['Description'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> Geographic Location (for the delivery of goods)</strong> </td>
                                        <td><?= $resultP['Location'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Document Charges</strong> </td>
                                        <td><?= $resultP['DCharges'] ?></td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Bid Security</strong> </td>
                                        <td><?= $resultP['BSecurity'] ?></td>
                                    </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 
                <div class="card-body">
                    <h5 class="card-title"></h5> 
                    <h3 _ngcontent-c24="" class="society-section-header">Price Schedule</h3><div _ngcontent-c24=""><hr>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                <thead style="text-align: center; vertical-align: middle;">
                                    <tr>    
                                        <th scope="col">Item ID</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Sample</th>
                                        <th scope="col">Unit Price Excluding VAT</th>
                                        <th scope="col">Price per Line Item</th>
                                        <th scope="col">Inland transportation,Insurance and other related services to deliver the goods to their final destination if not include <a href="">Column 4</a></th>
                                        <th scope="col">Total Price Excluding VAT</th>
                                        <th scope="col">Discount (if any)</th>
                                        <th scope="col">Discounted Total Price Excluding VAT</th>
                                        <th scope="col">VAT</th>
                                        <th scope="col">VAT Amount</th>
                                        <th scope="col">Total Price Including VAT</th>

                                    </tr>
                                </thead>
                                <tbody  style="text-align: center; vertical-align: middle;">
                                        <?php
                                        $i = 1;
                                        foreach ($listi as $key => $resulti) {
                                            ?>
                                        <tr>
                                            <th scope="row"><?= $i ?> </th>
                                           
                                            <td><?= $resulti['Item'] ?> </td>                   
                                            <td><input type="hidden" name="Qty[<?= $resulti['TItemid'] ?>]" value="<?= $resulti['Qty'] ?>"><?= $resulti['Qty'] ?></td>
                                            <td><input type="hidden" name="Sample[<?= $resulti['TItemid'] ?>]" value="<?= $resulti['Sample'] ?>"><?= $resulti['Sample'] ?></td>                                           
                                            <td><input type="text" class="form-control" id="Unit_priceEV" name="Unit_priceEV[<?= $resulti['TItemid'] ?>]"></td>
                                            <td><input type="text" class="form-control" id="PriceLItem" name="PriceLItem[<?= $resulti['TItemid'] ?>]"></td>
                                            <td><input type="text" class="form-control" id="OPrice" name="OPrice[<?= $resulti['TItemid'] ?>]"></td>
                                            <td><input type="text" class="form-control" id="TotalPEVat" name="TotalPEVat[<?= $resulti['TItemid'] ?>]"></td> 
                                            <td><input type="text" class="form-control" id="Discount" name="Discount[<?= $resulti['TItemid'] ?>]"></td>
                                            <td><input type="text" class="form-control" id="TotalwithDiscount" name="TotalwithDiscount[<?= $resulti['TItemid'] ?>]"></td>
                                            <td><input type="text" class="form-control" id="VAT" name="VAT[<?= $resulti['TItemid'] ?>]"></td>
                                            <td><input type="text" class="form-control" id="VatAmount" name="VatAmount[<?= $resulti['TItemid'] ?>]"></td>
                                            <td><input type="text" class="form-control" id="TotalPIVat" name="TotalPIVat[<?= $resulti['TItemid'] ?>]"></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 

                <div class="card-body">
                    <h3 _ngcontent-c24="" class="society-section-header">Specification</h3><div _ngcontent-c24=""><hr>
                        <h5 class="card-title"></h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Sub Component</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Priority Status</th>
                                    <th scope="col">Bidders Offer</th>
                                    <th scope="col">Remarks</th>                   
                                </tr>


                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($lists as $key => $results) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i ?> </th>//check
                                        <td><input type="hidden" name="TenderId" value="<?= $results['TId'] ?>"><?= $results['Item'] ?></td>
                                        <td><?= $results['SubComponent'] ?></td>
                                        <td><?= $results['Detail'] ?></td>
                                        <td><?= $results['Priority'] ?> </td>
                                        <td><select class="form-control" id="Cost" name="BiddersOffer[<?= $results['Item'] ?>]">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select></td>
                                        <td><textarea  class="form-control col-sm-10" id="Remarks" name="Remarks[<?= $results['Item'] ?>]" placeholder="Toners for Photocopy machine"></textarea></td>                   
                                    </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;">             
                <div class="card-body mb-4">
                    <h5 class="card-title"></h5>
                    <!-- comment -->
                    <div class="container uploaded-container">
                        <h3 class="society-section-header">Documents</h3>
                        <div class="row uploaded-row">
                            <hr>
                            <div class="col-9 doc">
                                <h5>BID Submission Form</h5>
                                <button type="button" class="btn btn-outline-dark btn-light btn-sm"><i class="bi bi-download"></i> Download </button>
                            </div>
                            <!----><!---->
                        </div>
                        <div class="row uploaded-row">
                            <div class="col-12 doc">
                                <div class="mb-3">
                                    <h5>Upload NCB Bidding Documents</h5><hr>
                                    <label for="formFile" class="form-label">Upload Your Document</label>
                                    <input class="form-control" type="file" id="profile_image" name="profile_image">
                                    <p><strong>Once You finalized the bid document, please upload the finalized Bid document as a PDF file.</strong></p>
                                </div>
                            </div>
                            <!----><!---->
                        </div>
                    </div>
                    <!-- comment -->
                </div>
                
                <div class="row mb-4">
                    <div class="text-center">
                      
                        <button class="btn btn-success rounded-5" type="submit">Submit BID</button>
                        <button class="btn btn-success rounded-5" type="reset">Reset</button>
                        
                    </div>
                </div>

               
<?= form_close() ?> 
        </div>
        </div>
           </div>
    </section>
</main>
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

                                            <div class="col-lg-4 col-md-8 footer-contact">
                                                <h3>SPIMS</h3>
                                                <p>
                                                    STF Headqraters<br>
                                                     No 223<br>
                                                    Boudhaloka Mawatha, Colombo 07<br><br>
                                                    <strong>Phone:</strong> 011 2505221<br>
                                                    <strong>Email:</strong> oic.stf.tender@police.gov.lk <br>
                                                </p>
                                            </div>

                                            <div class="col-lg-4 col-md-8 footer-links">
                                                <h4>Useful Links</h4>
                                                <ul>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Procurement</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Publications</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Registration</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
                                                
                                                </ul>
                                            </div>

                                            <div class="col-lg-4 col-md-8 footer-links">
                                                <h4>Contact Us</h4>
                                                <ul>
                                                    <li> <a href="#">Procurement Chairman  </a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">Direct: 011-2505933 / 2556506</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">General	:  011-2500471 Ext: 251</a></li>
                                                    <li> <a href="#">Procurement Officer</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">011-2589741</a></li>
                                                    <li><a href="#">Vendor Registrations</a></li>
                                                    <li><i class="bx bx-chevron-right"></i> <a href="#">011-2505937</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="container py-4">
                                    <div class="copyright">
                                        &copy; Copyright <strong><span>SPIMS</span></strong>. All Rights Reserved
                                    </div>
                                    <div class="credits">
                                        <!-- All the links in the footer should remain intact. -->
                                        <!-- You can delete the links only if you purchased the pro version. -->
                                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
                                        Designed by <i><a href="">ID Creations</a></i>
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
