
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-6">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW SUBMITTED BIT LIST</h1>       
            </div>
            <div class="col-6">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">BID OPENING</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Submitted Bit List</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
        <section class="section dashboard">        


            <!-- Table Variants -->
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;">

               
                    <div class="card-header" style="background-color: #7070db; color: white;"><?= $listB[0]['business_name'] ?> (Bid Submitted on <?= $listB[0]['SubmittedDate'] ?>)

                    </div>
                           
                <div class="card-body">

                    <h5 class="card-title"></h5>


                    <?= form_open_multipart("SubmitedBid/OpenedSTender/$AnnounceId/$TenderId/$VendorId") ?>

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
                                foreach ($listi as $key => $resulti) {
                                    ?>
                                    <tr>
                                        <td> <strong><input type="hidden" name="TenderId" value="<?= $resulti['TId'] ?>">Procurement Number</strong> </td>
                                        <td>STF/LOG/C/<?= $resulti['TId'] ?>/<?= substr($resulti['BStartDate'],0,4) ?></td>  
                                    </tr>
                                    <tr>
                                        <td> <strong> Title of the Procurement</strong> </td>
                                        <td><?= $resulti['Description'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> Geographic Location (for the delivery of goods)</strong> </td>
                                        <td><?= $resulti['Location'] ?> </td>
                                    </tr>
                                    
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!--check table-->

            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 
                <div class="card-body">
                    <h5 class="card-title"></h5> 

                    <table class="table">
                        <thead style="vertical-align: middle;">
                           
                                <tr>
                                    <th>Name of the Bidder    </th>
                                    <td><input type="hidden" name="VendorId" value="<?= $listB[0]['UserId'] ?>"><input type="hidden" class="form-control"  value="<?= $listB[0]['business_name'] ?>" name="CompanyName"><?= $listB[0]['business_name'] ?></td>
                                </tr>
                                <tr>
                                    <th>Bid Submitted Date    </th>
                                    <td><?= $listB[0]['SubmittedDate'] ?></td>
                                </tr>
                             
                        </thead>
                    </table>
                    <!--price Schedule table-->
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
                                    foreach ($listP as $key => $resultP) {
                                        ?>
                                        <tr>
                                            <td><?= $i ?> </td>  
                                            <td style="text-align: left"><?= $resultP['ItemName'] ?> </td>                   
                                            <td><?= $resultP['Qty'] ?></td>
                                            <td><?= $resultP['Sample'] ?></td>
                                            <td style="text-align: right"><?= $resultP['Unit_priceEV'] ?> </td>                   
                                            <td  style="text-align: right"><?= $resultP['PriceLItem'] ?></td>
                                            <td  style="text-align: right"><?= $resultP['OPrice'] ?></td> 
                                            <td  style="text-align: right"><?= $resultP['TotalPEVat'] ?> </td>                   
                                            <td  style="text-align: right"><?= $resultP['Discount'] ?></td>
                                            <td  style="text-align: right"><?= $resultP['TotalwithDiscount'] ?></td>
                                            <td  style="text-align: right"><?= $resultP['VAT'] ?> </td>                   
                                            <td  style="text-align: right"><?= $resultP['VatAmount'] ?></td>
                                            <td  style="text-align: right"><?= $resultP['TotalPIVat'] ?></td> 
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

            <!--Spec table-->
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 

                <div class="card-body"><br>
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
                                        <td style="text-align: left"><?= $results['ItemName'] ?></td>
                                        <td><?= $results['SubComponent'] ?></td>
                                        <td><?= $results['Detail'] ?></td>
                                        <td><?= $results['Priority'] ?> </td>         
                                        <td><?= $results['BiddersOffer'] ?></td>
                                        <td><?= $results['Remarks'] ?> </td>                                       
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
            <!--Spec table-->

            <!--List of Goods & Delivery schedule table-->
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 

                <div class="card-body"><br>
                    <h3 _ngcontent-c24="" class="society-section-header">List of Goods & Delivery schedule</h3><div _ngcontent-c24=""><hr>
                        <h5 class="card-title"></h5>

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
                                    foreach ($listG as $key => $resultG) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $i ?> </th>
                                            <td style="text-align: left"><?= $resultG['ItemName'] ?> </td>                   
                                            <td><input type="hidden" name="Qty[<?= $resultG['TItemid'] ?>]" value="<?= $resultG['Qty'] ?>" id="qty[<?= $resultG['TItemid'] ?>]"><?= $resultG['Qty'] ?></td>
                                            <td><?= $resultG['Location'] ?></td>
                                            <td> <input type="text" class="form-control" id="EDate" name="EDate" placeholder='30 days'></td>
                                            <td> <input type="text" class="form-control" id="LDate" name="LDate" placeholder='90 days'></td>
                                            <td> <input type="text" class="form-control" id="FDate" name="FDate" value="<?= $resultG['deliverydate'] ?>"readonly></td>
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
            <!--Spec table-->

            <!--List of Goods & Delivery schedule table-->
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Uploaded Document</th>
                                <th>View Document</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($listD as $key => $resultD) { ?>

                                <tr>
                                    <td><?= $resultD['fileType'] ?></td>
                                    <td> <a href="<?= site_url('public/images/uploads/' . $resultD['BidDOC']) ?>" target="_blank">View Documents</a></td>
                                </tr>

                            <?php } ?>


                        </tbody>

                    </table>  
                    <div class="row mb-3">  
                        <div class="col-sm-12">

                            <textarea id="remarks" name="remarks" rows="6" style="width: 100%; border: 1px solid #ccc;"></textarea>
                            <span class="text-danger"><?= service('validation')->getError('remarks') ?></span>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    <!--Spec table-->
    <div class="text-center">
        <input type="hidden" name="TenderId" value="<?= $TenderId ?>">

        <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
        <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
    </div>

    <?= form_close() ?> 
</div>
</div>
</div>

<!-- End Table Variants -->

</div>

</div>

</main>