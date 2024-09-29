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
        </head>

        <body>
            <section class="section dashboard"> 
                <?= form_open('Tender/updatecestimateststatus') ?>  


                <div class="card" style="margin-top: 10px;"> 
                    <div class="card-header" style="background-color: #7070db; color: white;">Cost Estimate</div>
                    <div class="card-body">
                        <!-- Table Variants -->

                        <table class="table">
                            <thead>
                                <?php
                                foreach ($list as $key => $result) {
                                    ?>
                                    <tr>
                                        <td style="width:30%;"> <strong>Procurement Number </strong> </td>
                                        <td> STF/LOG/C/<?= $result['Tenderid'] ?>/<?= substr($result['BStartDate'], 0, 4) ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Title of the Procurement </strong> </td>
                                        <td> <?= $result['Description'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> Vote </strong> </td>
                                        <td><?= $result['ICategory'] ?></td>
                                    </tr>
                                   
                                    <?php
                                }
                                ?>
                                </tbody>
                        </table>
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
                                        <td><?= number_format($result['UCost'], 2) ?></td>
                                        <td><?= $result['vat'] ?></td>
                                        <td><?= number_format($result['Total_Cost'], 2) ?></td>
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
                                        <?php
                                        $i++;
                                    }
                                    ?>  
                                <tr>
                                    <td colspan="4">Total Other Cost</td>
                                    <th  scope="col"><?= $TotalOtherCost ?></th>
                                </tr>

                                <tr>
                                    <td><strong>Grand Total Cost</strong></td><td colspan="4"></td>
                                    <th  scope="col" style="text-align: right"><?= number_format(($grandTotalOCost + $TotalCost), 2) ?></th>
                                </tr>
                                <tr><td><strong>Total VAT Amount </strong></td><td colspan="4"></td>
                                    <th  scope="col" style="text-align: right"><?= number_format(($TotalCost + $grandTotalOCost) * $result['vat'] / 100, 2) ?></th>
                                </tr>
                                <tr><td><strong>Total Estimated Cost</strong></td><td colspan="4"></td>
                                    <th  scope="col" style="text-align: right"><?= number_format(($grandTotalOCost + $TotalCost) + (($TotalCost + $grandTotalOCost) * $result['vat'] / 100), 2) ?></th> 
                                </tr>

                            </tbody>
                        </table>  


                        <?php if ((session()->get('UserType')) == 'ProcurementChairmen') { ?>
                            <input type="hidden" name="TId" value="<?= $TId ?>"><button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="1">Approve</button>          
                            <button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="2">Reject</button>
                        <?php } ?>

                        <?= form_close() ?>
                    </div>
                </div>
                <div class="card" style="margin-top: 10px;"> 
                    <div class="card-header" style="background-color: #7070db; color: white;">VOTE Details</div>
                    <div class="card-body"> 
                         <h6 class="card-title"></h6>
                        <?php
                        foreach ($list as $key => $result) {
                            $voteBalance = $result['balanceamount'] - (($grandTotalOCost + $TotalCost) + (($TotalCost + $grandTotalOCost) * $result['VAT'] / 100));
                            ?>
                          <div class="form-group row mb-3"> 
                                <label for="employee_tel" class="col-sm-3 col-form-label">Vote</label>
                                <div class="col-sm-9">
                                    <input style="border-radius: 40px; border: 1px solid #000066" type="text" class="form-control" id="employee_tel" value="<?= $result['ICategory'] ?>" readonly>
                                </div>
                            </div>
                           <div class="form-group row mb-3"> 
                                <label for="employee_tel" class="col-sm-3 col-form-label">Vote Allocation</label>
                                <div class="col-sm-9">
                                    <input style="border-radius: 40px; border: 1px solid #000066" type="text" class="form-control" id="employee_tel" value="<?= number_format($result['balanceamount'], 2) ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row mb-3"> 
                                <label for="employee_tel" class="col-sm-3 col-form-label">New Vote Balance</label>
                                <div class="col-sm-9">
                                    <input style="border-radius: 40px; border: 1px solid #000066" type="text" class="form-control" id="employee_tel" value="<?= number_format($voteBalance, 2) ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>



                    <?php
                }
                ?>


            </section>
            </main>
