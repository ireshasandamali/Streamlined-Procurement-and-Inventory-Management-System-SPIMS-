
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


            <!--Spec table-->
            <section>
                   
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 
                <div class="card-body">
                    <h5 class="card-title"></h5> 
 <?= form_open_multipart('BidEvaluation/SaveSpecStatus') ?>
                    <table class="table">
                        <thead style="vertical-align: middle;">
                        
                              <?php foreach ($listf as $key => $resultf) { ?>
                              
                                <tr>
                                    <th>Name of the Bidder    </th>
                                    <td><?= $resultf['CompanyName'] ?></td>
                                </tr>
                                             <?php
                            }
                            ?>   
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
                                        <th scope="col">Unit Price Excluding VAT</th>
                                        <th scope="col">Price per Line Item</th>
                                        <th scope="col">Inland transportation,Insurance and other related services to deliver the goods to their final destination if not include <a href="">Column 4</a></th>
                                        <th scope="col">Total Price Excluding VAT</th>
                                        <th scope="col">Discount (if any)</th>
                                        <th scope="col">Discounted Total Price Excluding VAT</th>
                                        <th scope="col">VAT</th>
                                        <th scope="col">VAT Amount</th>
                                        <th scope="col">Total Price Including VAT</th>
                                        <th scope="col">Marks</th>

                                    </tr>
                                </thead>
                                <tbody  style="text-align: center; vertical-align: middle;">
                                    <?php
                                    $i = 1;
                                   foreach ($listf as $key => $resultf){
                                        ?>
                                        <tr>
                                            <td><?= $i ?> </td>  
                                            <td> <input type="text" class="form-control" name="Item" value="<?= $resultf['Item'] ?>"><?= $resultf['Item'] ?> </td>                   
                                            <td><input type="text" name="Item" value="<?= $resultf['Item'] ?>"><?= $resultf['Qty'] ?></td>
                                            <td><?= $resultf['Unit_priceEV'] ?> </td>                   
                                            <td><?= $resultf['PriceLItem'] ?></td>
                                            <td><?= $resultf['OPrice'] ?></td> 
                                            <td><?= $resultf['TotalPEVat'] ?> </td>                   
                                            <td><?= $resultf['Discount'] ?></td>
                                            <td><?= $resultf['TotalwithDiscount'] ?></td>
                                            <td><?= $resultf['VAT'] ?> </td>                   
                                            <td><?= $resultf['VatAmount'] ?></td>
                                            <td><?= $resultf['TotalPIVat'] ?></td> 
                                             <td>
                                        <input type="text" class="form-control" id="Marks" name="Marks[<?= $resultf['Item'] ?>]">

                                            <span class="text-danger"> <?= service('validation')->getError('Marks') ?></span>
                                        </td>
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
                    <div class="text-center">
                        <input type="text" name="TenderId" value="<?= $TenderId ?>"><input type="hidden" name="VendorId" value="<?= $VendorId ?>">
                                <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
                                <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                            </div>
                            <?= form_close() ?>

                        </div>
                    </div>
                </section>

</main>