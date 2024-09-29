<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW TENDER</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">TENDER</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Tender</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->   

        <section class="section dashboard">
            <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Edit Cost Estimate</h5>
            <hr style="height: 8px; background-color: red; margin-top: 1px;">
            <span class="text-success"><?= @$msg ?></span>
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <?= form_open('tender/updatecostestimate') ?>

                    <!-- display Table-->

                    <!-- Table Variants -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Estimate ID</th>
                                <th scope="col">Item</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Prize</th>
                                <th scope="col">VAT</th>
                                <th scope="col">Total Prize</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $TotalCost = 0;
                            $grandTotalOCost = 0;
                            $i = 1;
                            foreach ($listM as $key => $result) {
                                $TotalCost += $result['Total_Cost'];
                                ?>
                                <tr>
                                    <th scope="row"><?= $i ?> </th>
                                    <td> 
                                        <input type="text" class="form-control col-sm-7" id="Item" name="Item" value="<?= set_value('Item', $result['Item']) ?>">    
                                    </td>
                                    <td> 
                                        <input type="text" class="form-control col-sm-7" id="Qty" name="Qty" value="<?= set_value('Qty', $result['Qty']) ?>">    
                                    </td>
                                    <td>
                                        <input type="text" class="form-control col-sm-7" id="UCost" name="UCost" value="<?= set_value('UCost', $result['UCost']) ?>">    
                                    </td>
                                    <td>
                                        <input type="text" class="form-control col-sm-7" id="vat" name="vat" value="<?= set_value('vat', $result['vat']) ?>">    
                                    </td>
                                    <td>
                                        <input type="text" class="form-control col-sm-7" id="Total_Cost" name="Total_Cost" value="<?= set_value('Total_Cost', $result['Total_Cost']) ?>">    
                                    </td>
                                </tr>
                                  <?php
                                $i++;
                            }
                            ?>   
                                 </tbody>
                                   </table> 
                    <table>
                        <thead>
                                <tr>
                                    <th  colspan="3" scope="col">Description</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Total Other Cost</th>
                                    <th scope="col"></th
                                </tr>
                                 <?php
                            $TotalCost = 0;
                            $grandTotalOCost = 0;
                            $i = 1;
                            foreach ($listM as $key => $result) {
                                $TotalCost += $result['Total_Cost'];
                                ?>
                                <?php
                                $TotalOtherCost = 0;
                                foreach ($listO as $keyo => $resulto) {
                                    if ($resulto['EID'] == $result['Estimate_ID']) {
                                        $TotalOtherCost += $resulto['Amount'];
                                        $grandTotalOCost += $resulto['Amount'];
                                        ?>
                                
                                        <tr>                        
                                            <td  colspan="3"><?= $resulto['Description'] ?></td>
                                            <td ><?= $resulto['Amount'] ?></td>
                                            <td colspan="2"></td> 
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>

                                <tr>
                                    <td colspan="5">Total Other Cost</td>
                                    <th  scope="col"><?= $TotalOtherCost ?></th>
                                </tr>
                                <tr>

                                <tr>
                                    <td><strong>Grand Total Cost</strong></td><td colspan="5"></td>
                                    <th  scope="col"><?= number_format(($grandTotalOCost + $TotalCost), 2) ?></th>
                                </tr>
                                <tr><td><strong>Total VAT Amount </strong></td><td colspan="5"></td>
                                    <th  scope="col"><?= number_format(($TotalCost + $grandTotalOCost) * $result['vat'] / 100, 2) ?></th>
                                </tr>
                                <tr><td><strong>Total Estimated Cost</strong></td><td colspan="5"></td>
                                    <th  scope="col"><?= number_format(($grandTotalOCost + $TotalCost) + (($TotalCost + $grandTotalOCost) * $result['vat'] / 100), 2) ?></th> 
                                </tr>

                                <?php
                                $i++;
                            }
                            ?>                                                
                        </tbody>
                    </table> 
                    <!-- Other Cost Table -->

                    <div class="row mb-3">
                        <div class="text-center">
                            <input type="hidden" class="form-control" id="Tenderid" name="Tenderid" value="<?= $TId ?>">
                            <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                            <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                        </div>
                    </div>
                </div>
            </div>


            <?= form_close() ?>

    </div>
</div>

</section>
</main>
