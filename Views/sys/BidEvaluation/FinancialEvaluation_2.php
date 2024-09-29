<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>TEC EVALUATION</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Bid Evaluation</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>TEC Evaluation</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->
        <!-- Tab navigation -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" id="openingFinancialTab" data-bs-toggle="tab" href="#openingFinancialContent">Financial Evaluation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="PreliminaryTab" data-bs-toggle="tab" href="#openedPreContent">Financial Evaluation Results</a>
            </li>


        </ul>



        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade" id="openingFinancialContent">

                <!-- Preliminary analysis-->  
                <section>
                    <div class="card" style="margin-top: 10px;"> 
                        <div class="card-header" style="background-color: #00cc44; color: white;">Financial Evaluation </div>
                        <?php
                        $i = 1;
                        foreach ($listC as $key => $resultC) {
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">The below table summarizes the cost information of the bidders & estimated cost for the procurement of <strong> <?= $resultC['Description'] ?> </strong> jointly conducted the bid evaluation and prepared the bid evaluation report. </h5>    
                            <?php } ?>
                            <?= form_open_multipart('BidEvaluation/SaveFanalysis') ?>
                           
                            <!--price Schedule table-->

                            <!-- Accepted bidder -->
                            <h6>Accepted Bidders</h6>
                            <div class="table-responsive">                  
                            <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                <thead>
                                     <tr>
                                          <th scope="col">Company Name</th>
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
                                <tbody>
                                    <?php
                                   // print_r($listItem);
                                    foreach ($listItem as $key => $resultItem) {
                                        ?>
                                        <tr>
                                            <th colspan="12" style="text-align:center"><?= $resultItem['Item'] ?>-<?= $resultItem['ItemName'] ?></th>
                                            
                                        </tr>
                                        <?php foreach ($BidderList as $key => $result) { ?>
                                            <?php foreach ($result as $key => $resulC) { ?>
                                               <?php if ($resulC['Itemid'] == $resultItem['Item']) { ?>
                                                    <tr>
                                                        <td><input type="hidden" class="form-control"name="CompanyName[<?= $resulC['UserId'] ?>][<?= $resulC['Itemid'] ?>]" value="<?= $resulC['business_name'] ?>"><?= $resulC['business_name'] ?></td>
                                                        <td><input type="hidden" class="form-control" name="Qty[<?= $resulC['UserId'] ?>][<?= $resulC['Itemid'] ?>]" value="<?= $resulC['Qty'] ?>"><?= $resulC['Qty'] ?></td>
                                                        <td><input type="hidden" class="form-control" name="Itemid[<?= $resulC['UserId'] ?>][<?= $resulC['Itemid'] ?>]" value="<?= $resulC['Itemid'] ?>"><?= $resulC['Unit_priceEV'] ?></td>
                                                        <td><input type="hidden" class="form-control" name="Unit_priceEV[<?= $resulC['UserId'] ?>][<?= $resulC['Itemid'] ?>]" value="<?= $resulC['Unit_priceEV'] ?>"><?= $resulC['PriceLItem'] ?></td>
                                                        <td><input type="hidden" class="form-control" name="TotalPIVat[<?= $resulC['UserId'] ?>][<?= $resulC['Itemid'] ?>]" value="<?= $resulC['TotalPEVat'] ?>"><?= $resulC['OPrice'] ?></td>
                                                        <td><input type="hidden" class="form-control" name="VendorId[<?= $resulC['UserId'] ?>][<?= $resulC['Itemid'] ?>]" value="<?= $resulC['UserId'] ?>"><?= $resulC['TotalPEVat'] ?></td>
                                                        <td><?= $resulC['Discount'] ?></td>
                                                        <td><?= $resulC['TotalwithDiscount'] ?></td>
                                                        <td><?= $resulC['VAT'] ?></td>                   
                                                        <td><?= $resulC['VatAmount'] ?></td>
                                                        <td><?= $resulC['TotalPIVat'] ?></td>
                                                        <td>
                                                            <input type="hidden" class="form-control" name="VendorId[<?= $resulC['UserId'] ?>]" value="<?= $resulC['UserId'] ?>">
                                                            <input type="text" class="form-control" id="marks" name="marks[<?= $resulC['UserId'] ?>]">
                                                            <span class="text-danger"><?= service('validation')->getError('marks') ?></span>
                                                        </td>
                                                          <?php } ?>
                                                  
                                                </tr>
                                                 <?php } ?>
                                                  <?php } ?>
                                            <?php } ?>
                                                
                                     
                                        
                                   
                                    </tbody>
                              
                            </table>
                        </div>
                            </div>


                        <!-- my reject bidder -->



                        
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="TenderId" value="<?= $TenderId ?>">
                                <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
                                <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                            </div>
                            <?= form_close() ?>



                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Result Page -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="openedPreContent">

            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">Financial Evaluation </div>
                <?php
                $i = 1;
                foreach ($listC as $key => $resultC) {
                    ?>
                    <div class="card-body">
                        <h5 class="card-title">The below table summarizes the cost information of the bidders & estimated cost for the procurement of <strong> <?= $resultC['Description'] ?> </strong> jointly conducted the bid evaluation and prepared the bid evaluation report. </h5>    
                    <?php } ?>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                            <thead>

                                <tr>

                                    <?php
                                    foreach ($listfacept as $key => $resultfacept) {
                                        ?>
                                        <th colspan="5"><?= $resultfacept['CompanyName'] ?></th>
                                    <?php } ?>   
                                </tr>

                                <tr>
                                    <th scope="col"><strong>No</strong></th>
                                    <th scope="col"><strong>Item</strong></th>
                                    <th scope="col"><strong>Quantity</strong></th>
                                    <th scope="col"><strong>Unit Cost Rs. (Without VAT)</strong></th>
                                    <th scope="col"><strong>Total Cost Rs.</strong></th>                                  
                                </tr>
                                <?php
                                $i = 1;
                                $TotalCostEVat = 0;
                                foreach ($listfacept as $key => $resultfacept) {
                                    $TotalCostEVat += $resultfacept['Unit_priceEV'];
                                    ?>

                                    <tr>                                           
                                        <td><?= $i ?> </td>
                                        <td><?= $resultfacept['ItemName'] ?> </td>
                                        <td><?= $resultfacept['Qty'] ?> </td>
                                        <td><?= number_format($resultfacept['Unit_priceEV'], 2) ?></td>
                                        <td><?= number_format($resultfacept['TotalPIVat'], 2) ?></td>                                          
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>

                                <tr>
                                    <th colspan="4">Total Cost without VAT Rs.</th>
                                    <td ><?= number_format($TotalCostEVat, 2) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="4">18% VAT Rs.</th>
                                    <th ><?= number_format($TotalCostEVat * 18 / 100, 2) ?></th>
                                </tr>
                                <tr>
                                    <th colspan="4">Total Cost with VAT Rs.</th>
                                    <th ><?= number_format($TotalCostEVat + ($TotalCostEVat * 18 / 100), 2) ?></th>
                                </tr>
                            </thead>
                        </table>
                        <div class="row mb-3">                  
                            <div class="col-sm-12">
                                <h6>Financial Evaluation Results</h6>
                            </div>
                        </div>
                        <div class="row mb-3">  
                            <div class="col-sm-12">
                                <textarea id="Fanalysis" name="Fanalysis" rows="6" style="width: 100%; border: 1px solid #ccc;"></textarea>
                                <span class="text-danger"><?= service('validation')->getError('Fanalysis') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</main>

 <script>
        // JavaScript to handle tab switching
        document.addEventListener('DOMContentLoaded', function () {
            // Remove active class from PreliminaryTab and openedPreContent
            document.getElementById('PreliminaryTab').classList.remove('active');
            document.getElementById('openedPreContent').classList.remove('show', 'active');

            // Add active class to openingFinancialTab and openingFinancialContent
            document.getElementById('openingFinancialTab').classList.add('active');
            document.getElementById('openingFinancialContent').classList.add('show', 'active');

            // Add event listeners to tab links
            document.getElementById('openingFinancialTab').addEventListener('click', function () {
                // Remove active class from PreliminaryTab and openedPreContent
                document.getElementById('PreliminaryTab').classList.remove('active');
                document.getElementById('openedPreContent').classList.remove('show', 'active');

                // Add active class to openingFinancialTab and openingFinancialContent
                document.getElementById('openingFinancialTab').classList.add('active');
                document.getElementById('openingFinancialContent').classList.add('show', 'active');
            });

            document.getElementById('PreliminaryTab').addEventListener('click', function () {
                // Remove active class from openingFinancialTab and openingFinancialContent
                document.getElementById('openingFinancialTab').classList.remove('active');
                document.getElementById('openingFinancialContent').classList.remove('show', 'active');

                // Add active class to PreliminaryTab and openedPreContent
                document.getElementById('PreliminaryTab').classList.add('active');
                document.getElementById('openedPreContent').classList.add('show', 'active');
            });
        });
    </script>
