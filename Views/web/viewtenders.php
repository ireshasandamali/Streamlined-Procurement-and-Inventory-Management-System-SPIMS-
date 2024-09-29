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
        <div class="row" style="background: #00ace6;border: 2px solid black;">
            <div class="col-8" style="padding: 10px;">
                <h6 style="color: white;"><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW BID INVITATION</h6>       
            </div>
            <div class="col-4" style=" padding: 10px;">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html"style="color: white;">PROCUREMENT</a></li>
                        <li class="breadcrumb-item active" aria-current="page"style="color: white;"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>INVITATION FOR BIDS</li>
                    </ol>
                </nav>   
            </div>
        </div>

        <!-- End navigation Title -->
            <div class="section-title">
                <h3>INVITATION FOR BIDS (IFB)</h3>
                <h5 class="card-title">(Procurements of Goods, Works and Services)<br>SPECIAL TASK FORCE<br>(SRI LANKA POLICE)</h5> 
            </div>

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
                        <?= form_open_multipart('web/viewtenders',['novalidate'=> 'novalidate']) ?>

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
                                            <td>STF/LOG/C/<?= $resultP['TId'] ?>/<?= substr($resultP['BStartDate'],0,4) ?> </td>
                                        </tr>
                                        <tr>
                                            <td> <strong> Title of the Procurement</strong> </td>
                                            <td><?= $resultP['Description'] ?> </td>
                                        </tr>
                                        <tr>
                                            <td> <strong> Geographic Location (for the delivery of goods)</strong> </td>
                                            <td><?= $resultP['Location'] ?> </td>
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
                                             <th scope="col">Unit</th>
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

                                                <td><?= $resulti['ItemName'] ?> </td>                   
                                                <td><input type="hidden" name="Qty[<?= $resulti['TItemid'] ?>]" value="<?= $resulti['Qty'] ?>" id="qty<?= $resulti['TItemid'] ?>"><input type="hidden" name="ItemName[<?= $resulti['TItemid'] ?>]" value="<?= $resulti['ItemName'] ?>" id="ItemName<?= $resulti['TItemid'] ?>"><?= $resulti['Qty'] ?></td>
                                              <td><input type="hidden" name="Unit[<?= $resulti['TItemid'] ?>]" value="<?= $resulti['Unit'] ?>" id="Unit<?= $resulti['TItemid'] ?>"><?= $resulti['Unit'] ?></td>
                                                <td><input type="hidden" name="Sample[<?= $resulti['TItemid'] ?>]" value="<?= $resulti['Sample'] ?>"><input type="hidden" name="Itemid[<?= $resulti['TItemid'] ?>]" value="<?= $resulti['Item'] ?>"><?= $resulti['Sample'] ?></td>                                           
                                                <td><input type="text" class="form-control" id="Unit_priceEV<?= $resulti['TItemid'] ?>" name="Unit_priceEV[<?= $resulti['TItemid'] ?>]" onchange="PriceLItem(<?= $resulti['TItemid'] ?>)"></td>
                                                <td><input type="text" class="form-control" id="PriceLItem<?= $resulti['TItemid'] ?>" name="PriceLItem[<?= $resulti['TItemid'] ?>]"></td>
                                                <td><input type="text" class="form-control" id="OPrice<?= $resulti['TItemid'] ?>" name="OPrice[<?= $resulti['TItemid'] ?>]"onchange="TotalPEVat(<?= $resulti['TItemid'] ?>)"></td>
                                                <td><input type="text" class="form-control" id="TotalPEVat<?= $resulti['TItemid'] ?>" name="TotalPEVat[<?= $resulti['TItemid'] ?>]"></td> 
                                                <td><input type="text" class="form-control" id="Discount<?= $resulti['TItemid'] ?>" name="Discount[<?= $resulti['TItemid'] ?>]"onchange="TotalwithDiscount(<?= $resulti['TItemid'] ?>)"></td>
                                                <td><input type="text" class="form-control" id="TotalwithDiscount<?= $resulti['TItemid'] ?>" name="TotalwithDiscount[<?= $resulti['TItemid'] ?>]"></td>
                                                <td><input type="text" class="form-control" id="VAT<?= $resulti['TItemid'] ?>" name="VAT[<?= $resulti['TItemid'] ?>]"onchange="VatAmount(<?= $resulti['TItemid'] ?>);TotalPIVat(<?= $resulti['TItemid'] ?>)"></td>
                                                <td><input type="text" class="form-control" id="VatAmount<?= $resulti['TItemid'] ?>" name="VatAmount[<?= $resulti['TItemid'] ?>]"></td>
                                                <td><input type="text" class="form-control" id="TotalPIVat<?= $resulti['TItemid'] ?>" name="TotalPIVat[<?= $resulti['TItemid'] ?>]"></td>
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
                                            <th scope="row"><?= $i ?> </th>
                                            <td><input type="hidden" name="TenderId" value="<?= $results['TId'] ?>"><input type="hidden" name="Items" value="<?= $results['Item'] ?>"><input type="hidden" name="IId[<?= $results['specid'] ?>]"  value="<?= $results['IId'] ?>"><?= $results['ItemName'] ?></td>
                                            <td><input type="hidden" name="Item[<?= $results['specid'] ?>]" value="<?= $results['Item'] ?>"><input type="hidden" name="ItemName[<?= $results['specid'] ?>]" value="<?= $results['ItemName'] ?>"><input type="hidden" name="SubComponent[<?= $results['specid'] ?>]" value="<?= $results['SubComponent'] ?>">
                                                <?= $results['SubComponent'] ?></td>
                                            <td><input type="hidden" name="Detail[<?= $results['specid'] ?>]" value="<?= $results['Detail'] ?>"><?= $results['Detail'] ?></td>
                                            <td><input type="hidden" name="Priority[<?= $results['specid'] ?>]" value="<?= $results['Priority'] ?>"><?= $results['Priority'] ?> </td>
                                            <td><select class="form-control" id="Cost" name="BiddersOffer[<?= $results['specid'] ?>]">
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select></td>
                                            <td><textarea  class="form-control col-sm-10" id="Remarks" name="Remarks[<?= $results['specid'] ?>]" ></textarea></td>                   
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
                <!--Start of List of Goods & Delivery schedule -->
                <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 
                    <div class="card-body">
                        <h5 class="card-title"></h5> 
                        <h3 _ngcontent-c24="" class="society-section-header">List of Goods & Delivery schedule</h3><div _ngcontent-c24=""><hr>
                            <div class="table-responsive">
                                <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                    <thead style="text-align: center; vertical-align: middle;">
                                        <tr>    
                                            <th scope="col">Item ID</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Final destination as specified in BDS</th>
                                            <th scope="col">Earliest Delivery Date</th>
                                            <th scope="col">Latest Delivery Date</th>
                                            <th>Bidder's offered Delivery date(to be provided by the bidder)</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody  style="text-align: center; vertical-align: middle;">
                                        <?php
                                        $i = 1;
                                        foreach ($listt as $key => $resultt) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?= $i ?> </th>
                                                <td><input type="hidden" name="TenderId" value="<?= $resultt['TId'] ?>"><?= $resultt['ItemName'] ?> </td>                   
                                                <td><input type="hidden" name="Qty[<?= $resultt['Item'] ?>]" value="<?= $resultt['Qty'] ?>" id="qty<?= $resultt['Item'] ?>"><?= $resultt['Qty'] ?></td>
                                                <td><input type="hidden" name="Location[<?= $resultt['Item'] ?>]" value="<?= $resultt['Location'] ?>"><?= $resultt['Location'] ?></td>
                                                <td> <input type="text" class="form-control" id="EDate" name="EDate[<?= $resultt['Item'] ?>]" placeholder='30 days'></td>
                                                <td> <input type="text" class="form-control" id="LDate" name="LDate[<?= $resultt['Item'] ?>]" placeholder='90 days'></td>
                                                <td> <input type="text" class="form-control" id="deliverydate" name="deliverydate[<?= $resultt['Item'] ?>]"></td>
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
<!--end of List of Goods & Delivery schedule -->
                <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;">             
                    <div class="card-body mb-4">
                        <h5 class="card-title"></h5>
                        <!-- comment -->
                        <div class="container uploaded-container">
                            <h3 class="society-section-header">Documents</h3><hr>
                            <div class="row uploaded-row">
                                <h5>Download NCB Bidding Documents</h5>
                                <div class="row mb-3">
                                <div class="col-6 doc">
                                    <h5>BID Submission Form</h5>
                                    <a class="btn btn-outline-dark btn-light btn-sm" href="<?= site_url('public/images/uploads/Bid Submission Form.pdf') ?>"><i class="bi bi-download"></i> Download </a>
                                </div>
                                
                                <div class="col-6 doc">
                                    <h5>STF Slandered Bidding Document  </h5>
                                    <a class="btn btn-outline-dark btn-light btn-sm" href="<?= site_url('public/images/uploads/NCB Bidding Document.pdf') ?>"><i class="bi bi-download"></i> Download </a>
                                </div>
                                </div>
                                <!----><!---->
                            </div>
                            <br>
                            <div class="row uploaded-row">
                                <div class="col-12 doc">
                                    <div class="mb-3">
                                        <h5>Upload NCB Bidding Documents</h5><hr>
                                        <p   style="color: red;"><strong>Upload the finalized Bid document should be as a PDF file.</strong></p>                                    
                                        <p class=" small text-muted"> (Bid Submission Form/Submission of Registration under Public contract Act (PCA3) /Registration / 
                                            performance Documents If Any)</p>

                                        <!----><!----> 
                                        <div class="row mb-3">
                                            <label for="BidSubmissionform" class="col-sm-2 control-label">Bid Submission Form </label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control"  id="BidSubmissionform" name="BidSubmissionform" required="required" extension="pdf" filesize="9000000">
                                                <span class="text-danger"><?= service('validation')->getError('BidSubmissionform') ?></span>

                                            </div>
                                            <label for="BIDBond" class="col-sm-2 control-label">BID Bond</label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control"  id="BIDBond" name="BIDBond" required="required" extension="png" filesize="9000000">
                                            </div>
                                           
                                        </div>
                                        <div class="row mb-3">
                                             <label for="BRegistration" class="col-sm-2 control-label">Business registration </label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control" id="BRegistration" name="BRegistration" extension="pdf" filesize="9000000">
                                                  </div>
                                            <label for="PCA3" class="col-sm-2 control-label">Registration under Public contract Act (PCA3) </label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control"  id="PCA3" name="PCA3"  extension="pdf" filesize="9000000">
                                            </div>
                                           
                                        </div>
                                        <div class="row mb-3">
                                             <label for="manufactureAuthorization" class="col-sm-2 control-label">Manufacture Authorization </label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control"  id="manufactureAuthorization" name="manufactureAuthorization"  extension="pdf" filesize="9000000">
                                            </div>
                                            <label for="manufacturebrochures" class="col-sm-2 control-label">Manufacture’s original technical brochures </label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control"  id="manufacturebrochures" name="manufacturebrochures" extension="pdf" filesize="9000000">
                                            </div>
                                           
                                        </div>
                                        <div class="row mb-3">
                                             <label for="otherDOC" class="col-sm-2 control-label">Other Documents</label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control"  id="otherDOC" name="otherDOC" extension="pdf" filesize="9000000">
                                            </div>
                                          
                                        </div>


                                    </div>
                                </div>
                                <!---->
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
                                
                            </footer><!-- End Footer -->                  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

<script>
function PriceLItem(id) {

    var Unit_priceEV = $('#Unit_priceEV' + id).val();
    var Qty = $('#qty' + id).val();
    var OtherPrice = $('#OPrice' + id).val();
    var Discount = $('#Discount' + id).val();
    var VAT = $('#VAT' + id).val();
    $("#PriceLItem" + id).val(Unit_priceEV * Qty);
    $("#TotalPEVat" + id).val((Unit_priceEV * Qty) + OtherPrice);
    $("#TotalwithDiscount" + id).val(((Unit_priceEV * Qty) + OtherPrice) - Discount);
    $("#VatAmount" + id).val((((Unit_priceEV * Qty) + OtherPrice) - Discount) * VAT / 100);
    $("#TotalPIVat" + id).val(((Unit_priceEV * Qty) + OtherPrice) - ((((Unit_priceEV * Qty) + OtherPrice) - Discount) * VAT / 100));

}
function TotalPEVat(id){
    var Unit_priceEV = $('#Unit_priceEV' + id).val();
    var Qty = $('#qty' + id).val();
    var OtherPrice = $('#OPrice' + id).val();
     $("#TotalPEVat" + id).val((Unit_priceEV * Qty) + OtherPrice);
}
function TotalwithDiscount(id){
    var Unit_priceEV = $('#Unit_priceEV' + id).val();
    var Qty = $('#qty' + id).val();
    var OtherPrice = $('#OPrice' + id).val();
    var Discount = $('#Discount' + id).val();
    $("#TotalwithDiscount" + id).val(((Unit_priceEV * Qty) + OtherPrice) - Discount);
    
}
function VatAmount(id){
    var Unit_priceEV = $('#Unit_priceEV' + id).val();
    var Qty = $('#qty' + id).val();
    var OtherPrice = $('#OPrice' + id).val();
    var Discount = $('#Discount' + id).val();
    var VAT = $('#VAT' + id).val();
    $("#VatAmount" + id).val((((Unit_priceEV * Qty) + OtherPrice) - Discount) * VAT / 100);
}

function TotalPIVat(id){
    var Unit_priceEV = $('#Unit_priceEV' + id).val();
    var Qty = $('#qty' + id).val();
    var OtherPrice = $('#OPrice' + id).val();
    var Discount = $('#Discount' + id).val();
    var VAT = $('#VAT' + id).val();
    $("#TotalPIVat" + id).val(((Unit_priceEV * Qty) + OtherPrice) + ((((Unit_priceEV * Qty) + OtherPrice) - Discount) * VAT / 100));

}
</script>
</body>
</html>
