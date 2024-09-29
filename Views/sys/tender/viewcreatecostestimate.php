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
        <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Cost Estimate</h5>
        <hr style="height: 8px; background-color: red; margin-top: 1px;">
        <span class="text-success"><?= @$msg ?></span>
        

                <?= form_open('tender/viewcreatecostestimate') ?>
                 <!--<div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                <div class="row mb-3">
                    <label for="TId" class="col-sm-2 form-label">Item Name</label>
                   <div class="col-sm-6">
                        <select id="Item" class="form-select" name="Item">
                            <option value="" selected="">...</option>
                            <?php foreach ($listM as $key => $result) { ?>
                                <option value="<?= $result['ItemName'] ?>"><?= $result['ItemName'] ?></option>
                            <?php } ?>
                        </select>                       
                    </div>
                    <div class="col-md-2">
                            <button style="border-radius: 40px;border: 1px solid  #000066"  type="submit" class="btn btn-primary">
                                Search
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbtJREFUSEvV1UuITnEYx/HPkJUMKYmd2dq4bS0kIxuXmoRSQkmR5JZZDKVoynWmJoqkRBaKjShZYCe3srOxsnArYmEWM/6P/m+deZvznqP3nYX/6jyn83++z/V3ukzx6Zpi/8oA83AYy7EkB/EaL3AeX+oGNhlgO4Yxu8TJN+zE/TqQZsB+DOWLdzGCJ9lenSLfh43Z3obbVZAioAfvMS2X51zJ5RPp/Un8wiJ8bgUpAiLavbiDLRWRPcRaDOBUXcBHLMhNfVsB6MUjvMSKuoBRzEgRTU+RjVUA5uIrfrQYhr8uiiX6iZmYlXoQz61ON77jE+bXzeAdFmMlnlcAVuXpeow1dQGncTz14B42VQCi/tGH2JmbdQEL8SH34QjOllwcxFHEZi/7lz2Ib3fgemHRLuFZtjdgD9Zl+0Lel5YDMZlUbE7jegVzSqKLybmcs4i+HcODskzKxC4m41AWu6WpN7/xCk9xLYtdCF9jB0K7DmC8GdSOXK9vEryLaXQPdhIQvm5ha8HpGfQXIe1kEH5i8wPSV3AaJdzdsNsFNPxcxa5sTMiiU4CQ+BvpX/EmSc0Eme8UoHTf/n/AH9BmShm5CxJHAAAAAElFTkSuQmCC"/>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a style="border-radius: 40px;border: 1px solid  #000066" type="reset" class="btn btn-secondary"href="<?= site_url('tender/viewcreatecostestimate') ?>">
                                Reset
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcpJREFUSEu11T+oj3EUx/HXTflvQaGITSiEJN2FhcLAouRvslHMysJsuQw20l1uXVEGBhkkoQwiBiEzBixMnqPz+/X0cJ/f98n9faen5/v9nvc553PO+Y4Y8hoZsn1dAPNwBSe6OFUKWIM7WIlZ0w04mZ7PTsPf8BaPMIFnbcCSCI7iGnqApr0AncbLf4FKAHFvHSaxCqHFrtRiP2bgFw7idhNSCoh78zNVx2tGluEqAvQDG/C+DukCaEv1OA7hIXYOAzAHH7AkAQH6s7pEMIZeeq7jTCOkc7icKQvROwHCeP9S3o2mq0O24Hkl9puqfNd2BXxPketOh6gLaj8WVU58TrH7/5sp+oKFiMNfa5dLAFFlcS5sLJ4qgqfYim2I794qSVH0yquqR55g+1SAmzhcNc9FXGiIOEjk87hUNWMUQH8gNlO0B3czl8vxs634a3tRpp8yNbtxv03kmC2juFEry0Gc8PpYaaOtyAm5FLdwqiF4HRbVEsYPpMCbqhS/K+nk9XiQIUfpRQNFjb/AzGqobcSOHHDxRnzEXrxuhtrWyasRM2bzgPw8xpEcFX8dLRkV+3A2X7OYnnPT03vT9eAMErh1vySC/wL8BrLNURk1ZlSoAAAAAElFTkSuQmCC"/>
                            </a>
                        </div> 
                </div>
                    </div>
                 </div>-->

                <!-- display Table-->

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
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
                            $ContractValue = 0;
                            $i = 1;
                            foreach ($listM as $key => $result) {
                                $TotalCost += $result['Total_Cost'];
                                   $ContractValue += $result['UCost'];
                                  
                                ?>
                                <tr>
                                    <th scope="row"><?= $i ?> </th>
                                    <td><?= $result['ItemName'] ?></td>
                                    <td><?= $result['Qty'] ?></td>
                                    <td><?= number_format($result['UCost'],2) ?></td>
                                    <td><?= $result['vat'] ?></td>
                                    <td><?= number_format($result['Total_Cost'],2) ?></td>
                                </tr>
                                <tr>
                                    <th  colspan="3" scope="col">Description</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Total Other Cost</th>
                                    <th scope="col"></th
                                </tr>
                                <?php
                                $TotalOtherCost = 0;
                                foreach ($listO as $keyo => $resulto) {
                                    if ($resulto['EID'] == $result['Estimate_ID']) {
                                        $TotalOtherCost += $resulto['Amount'];
                                        $grandTotalOCost += $resulto['Amount'];
                                         $Fvalue += $result['Total_Cost']+ $resulto['Amount'];
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

                               

                                <?php
                                $i++;
                            }
                            ?>    
                                <tr>
                                    <td><strong>Grand Total Cost</strong></td><td colspan="4"></td>
                                    <th  scope="col" style="text-align: right"><?= number_format(($grandTotalOCost + $TotalCost),2) ?></th>
                                </tr>
                                <tr><td><strong>Total VAT Amount </strong></td><td colspan="4"></td>
                                    <th  scope="col" style="text-align: right"><?= number_format(($TotalCost + $grandTotalOCost) * $result['vat'] / 100,2) ?></th>
                                </tr>
                                <tr><td><strong>Total Estimated Cost</strong></td><td colspan="4"></td>
                                    <th  scope="col" style="text-align: right"><?= number_format(($grandTotalOCost + $TotalCost) + (($TotalCost + $grandTotalOCost) * $result['vat'] / 100),2) ?></th> 
                                </tr>
                        </tbody>
                    </table> 
                        <!-- Other Cost Table -->


                    </div>
                </div>


                <?= form_close() ?>

            </div>
        </div>

    </section>
</main>
