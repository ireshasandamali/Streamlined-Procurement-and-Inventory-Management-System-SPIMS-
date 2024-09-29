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

        <div class="col-md-12">
            <label for="business_name" class="form-label">Bidder List</label>              
            <select style="border-radius: 40px;border: 1px solid  #000066" id="business_name" class="form-select" name="business_name" >
                <option value="" selected="">...</option>
                <?php foreach ($listB as $key => $resultB) { ?>
                    <option  value="<?= $resultB['business_name'] ?>"><?= $resultB['business_name'] ?></option>
                <?php } ?>
            </select>
            <span class="text-danger"><?= service('validation')->getError('business_name') ?></span>
        </div>
        <section class="section dashboard">   
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">THE TECHNICAL EVALUATION COMMITTEE MEETING</div>
                <?php
                $i = 1;
                foreach ($listC as $key => $resultC) {
                    ?>
                    <div class="card-body">
                        <h5 class="card-title">Commandant Special Task Force has appointed the Technical Evaluation Committee (TEC) for the procurement of <strong> <?= $resultC['Description'] ?> </strong> jointly conducted the bid evaluation and prepared the bid evaluation report. </h5>    

                    <?php } ?>
                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('BidEvaluation/TECEvaluationreport') ?>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                            <thead>
                                <?php
                                $i = 1;
                                foreach ($listC as $key => $resultC) {
                                    ?>
                                    <tr>
                                        <th scope="col"  colspan="6">THE TECHNICAL EVALUATION COMMITTEE MEETING</th>
                                    </tr>
                                    <tr><th scope="col">Nature of the Procurement Committee</th>
                                        <td colspan="2"><?= $resultC['NPC'] ?></td>
                                        <th colspan="2" scope="col">Name of the Procuring  Entity</th>
                                        <td><?= $resultC['ProEntity'] ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="col"  colspan="6">Title of the Procurement <br><br> <strong>Procurement of <?= $resultC['Description'] ?></strong> <br><br> <strong>STF/LOG/C/<?= $resultC['PNumber'] ?> </strong></th>
                                    </tr>
                                    <tr><th scope="col">Meeting No.</th>
                                        <td><?= $resultC['Committeeid'] ?></td>
                                        <th scope="col">Date</th>
                                        <td><?= $resultC['MDate'] ?></td>
                                        <th scope="col">Purpose</th>
                                        <td><?= $resultC['Purpose'] ?></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>

                                <!--<?php print_r($listM); ?>-->
                                <tr><th scope="col"  colspan="6">Members of TEC</th></tr>
                                <?php
                                $i = 1;
                                foreach ($listM as $key => $resultM) {
                                    ?>
                                    <tr>                                                                                                      
                                        <td colspan="6">00<?= $i ?>-<?= $resultM['CivilStatus'] ?> . <?= $resultM['FirstName'] ?> <?= $resultM['LastName'] ?> - (<?= $resultM['EmpType'] ?>)</td>     
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>

                            </thead>
                        </table>
                    </div>
                </div>

                <!-- End Table Variants -->



            </div>
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #267326; color: white;">Preliminary Evaluation Results</div>
                <div class="card-body">
                    <h5 class="card-title">Preliminary analysis will examine the basic qualifications that the bid must meet both contractual and technical requirements according to the issued bidding document of this procurement</h5>    
                    <!-- Multi Columns Form -->

                    <h5>Contractual/ Commercial Compliances. (Post Qualification Requirements)</h5>

                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                            <thead>


                                <tr><th scope="col"><strong>Description</strong></th>
                                    <?php foreach ($listB as $key => $resultB) { ?>
                                        <td><?= $resultB['business_name'] ?></td>
                                    <?php } ?>  
                                </tr>
                                <tr><th scope="col">Completeness of Bid submission form (Duly signed & filled)</th>
                                    <?php foreach ($lista as $key => $resulta) { ?>
                                        <?php if ($resulta['docid'] == 'BidSubmissionform') { ?>
                                            <td><input type="text" class="form-control" value="<?= $resulta['DocStatus'] ?>"readonly></td>
                                        <?php } ?> 
                                    <?php } ?>    
                                </tr>

                                <tr><th scope="col">Bid security guarantee</th>
                                    <?php foreach ($lista as $key => $resulta) { ?>
                                        <?php if ($resulta['docid'] == 'Bid Bond') { ?>
                                            <td><input type="text" class="form-control" value="<?= $resulta['DocStatus'] ?>"readonly></td>
                                        <?php } ?> 
                                    <?php } ?>    
                                </tr>
                                <tr><th scope="col" >Submission of Business registration</th>
                                    <?php foreach ($lista as $key => $resulta) { ?>
                                        <?php if ($resulta['docid'] == 'BRegistration') { ?>
                                            <td><input type="text" class="form-control" value="<?= $resulta['DocStatus'] ?>"readonly></td>
                                        <?php } ?> 
                                    <?php } ?>    
                                </tr>
                                <tr><th scope="col">Submission of Registration under Public contract Act (PCA3)</th>
                                    <?php foreach ($lista as $key => $resulta) { ?>
                                        <?php if ($resulta['docid'] == 'PCA3') { ?>
                                            <td><input type="text" class="form-control" value="<?= $resulta['DocStatus'] ?>"readonly></td>
                                        <?php } ?> 
                                    <?php } ?>    
                                </tr>
                                <tr><th scope="col">Submission of Manufacture’s original technical brochures</th>
                                    <?php foreach ($lista as $key => $resulta) { ?>
                                        <?php if ($resulta['docid'] == 'manufacturebrochures') { ?>
                                            <td><input type="text" class="form-control" value="<?= $resulta['DocStatus'] ?>"readonly></td>
                                        <?php } ?> 
                                    <?php } ?>    
                                </tr>

                                <tr><th scope="col">Submission of Manufacture Authorization</th>
                                    <?php foreach ($lista as $key => $resulta) { ?>
                                        <?php if ($resulta['docid'] == 'Manufacture Authorization') { ?>
                                            <td><input type="text" class="form-control" value="<?= $resulta['DocStatus'] ?>"readonly></td>
                                        <?php } ?> 
                                    <?php } ?>    
                                </tr>
                                <tr><th scope="col">Bid security guarantee(get from table)</th>
                                    <?php foreach ($listB as $key => $resultB) { ?>
                                        <td><?= $resultB['SubmittedDate'] ?></td>
                                    <?php } ?> 
                                </tr>

                                <tr><th scope="col">Bid Value Rs. (with VAT)</th>
                                    <?php foreach ($listB as $key => $resultB) { ?>                                    
                                        <td><?= number_format($resultB['TotalPIVat'], 2) ?></td>                                    
                                    <?php } ?> 
                                </tr>
                                <tr><th scope="col">Completeness of price schedule</th>
                                    <?php foreach ($lista as $key => $resulta) { ?>
                                        <?php if ($resulta['docid'] == 'Bid Bond') { ?>
                                            <td><input type="text" class="form-control" value="<?= $resulta['DocStatus'] ?>"readonly></td>
                                        <?php } ?> 
                                    <?php } ?>    
                                </tr>
                                <tr><th scope="col" >Submission of delivery period</th>
                                    <?php foreach ($listD as $key => $resultD) { ?>
                                        <td><input type="text" class="form-control" value="<?= $resultD['deliverydate'] ?>"readonly></td>
                                    <?php } ?> 
                                </tr>                               

                                </tbody>
                            </thead>
                        </table>
                        <div class="row mb-3">                  
                            <div class="col-sm-12">
                                <h6>Preliminary analysis Results</h6>
                            </div>
                        </div>
                        <div class="table">
                            <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                <thead>

                                    <tr>
                                        <th>Selected Company</th>


                                        <?php foreach ($listr as $key => $resultr) { ?>

                                            <td>
                                                <input  type="text" class="form-control" id="company_name" value="<?= $resultr['CompanyName'] ?>" readonly>
                                            </td>
                                        <?php } ?> 
                                    </tr>

                                    <tr>
                                        </tbody>
                                </thead>
                            </table>
                            <div class="table-responsive">
                                <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                    <thead>
                                    <th>Reject Company</th>

                                    <?php foreach ($rejected_list as $key => $resultj) { ?>

                                        <td>
                                            <input  type="text" style="color:red"class="form-control" id="company_name" value="<?= $resultj['CompanyName'] ?>" readonly>
                                        </td>
                                    <?php } ?> 

                                    </tr>

                                    </tbody>
                                    </thead>
                                </table>


                            </div>
                            <div class="row mb-3">  
                                <div class="col-sm-12">

                                    <textarea id="Panalysis" name="Panalysis" rows="6" style="width: 100%; border: 1px solid #ccc;"></textarea>
                                    <span class="text-danger"><?= service('validation')->getError('Panalysis') ?></span>
                                </div>
                            </div>

                        </div>
                    </div> 

                </div>
            </div>
    </div>
    <!-- End Preliminary Evaluation  Table  -->
    <div class="card" style="margin-top: 10px;"> 
        <div class="card-header" style="background-color: #00cc44; color: white;">Technical Evaluation </div>
        <div class="card-body">
            <h5 class="card-title">The TEC decided that technical evaluation is to be done by Comparing the technical specifications & technical brochures which are submitted by the bidders. Following criteria are considered in detailed.</h5>    
            <!-- Multi Columns Form PreliminaryEvaluation-->


            <div class="table-responsive">
                <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered table-sm">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Item</th>
                            <th scope="col">Technical Details</th>
                            <th scope="col">Bid Specification</th>
                            <th scope="col">Priority Status</th>
                            <?php foreach ($listr as $key => $resultr) { ?>
                                <td><?= $resultr['CompanyName'] ?></td>
                            <?php } ?>  
                        </tr>


                    </thead>
                    <tbody> 
                        <?php foreach ($listItem as $key => $resultItem) {
                            ?>
                            <tr>
                                <th colspan="5" style="text-align: center"><?= $resultItem['ItemName'] ?> </th>
                            </tr>
                            <?php
                            $i = 1;
                            $TotalMarks = 0;
                            foreach ($listT as $key => $resultT) {

                                if ($resultItem['Item'] == $resultT['Item']) {
                                    ?>

                                    <tr>
                                        <th scope="row"><?= $i ?> </th>
                                        <td><input  type="hidden" id="TenderId" name="TenderId" value="<?= $resultT['TId']; ?>"><?php // $resultT['ItemName']     ?></td>
                                        <td><?= $resultT['SubComponent'] ?></td>
                                        <td><?= $resultT['Detail'] ?></td>
                                        <td><input type="hidden" class="form-control" value="<?= $resultT['specid'] ?>"><?= $resultT['Priority'] ?> </td> 
                                        <?php
                                        foreach ($marks as $key => $M) {
                                            $TotalMarks += $M['marks'];
                                            ?>
                                            <?php if ($M['SpecId'] == $resultT['specid']) { ?>
                                                <td>
                                                    <?= $M['marks'] ?>

                                                </td>
                                            <?php } ?>
                                        <?php } ?>  
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            }
                            ?>
                            <tr><th colspan="5">Total Marks</th>
                                <?php
                                // $TotalMarks = 0;
                                foreach ($listz as $key => $resultz) {
                                    if ($resultz['Itemid'] == $resultItem['Item']) {
                                        ?>

                                        <td><?= $resultz['TOTAL'] ?>
                                        </td>

                                        <?php
                                    }
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        ?>



                    </tbody>    
                </table>



                <!-- Accepted bidder -->
                <h6>Accepted Bidders</h6>
                <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                    <thead>
                        <?php
                        // print_r($BidderList);
                        foreach ($listItem as $key => $resultItem) {
                            ?>
                            <tr>
                                <th><?= $resultItem['Item'] ?>-<?= $resultItem['ItemName'] ?></th>
                            </tr>

                            <?php foreach ($BidderList as $key => $value) { ?>
                                <?php foreach ($value as $key => $Company) { ?>
                                    <?php if ($Company['Itemid'] == $resultItem['Item']) { ?>
                                        <tr>
                                            <td>
                                                <input  type="text" class="form-control" id="company_name" value="<?= $Company['CompanyName'] ?>" readonly>
                                            </td>
                                        <?php } ?>
                                    </tr>


                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                        </tbody>
                    </thead>
                </table>
            </div>


            <!-- my reject bidder -->
            <h6>Rejected Bidders</h6>
            <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Company  Name</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($listrejected as $key => $resultreject) { ?>
                        <tr>
                            <td>
                                <?= $resultreject['Itemid'] ?>
                            </td>
                            <td><?= $resultreject['CompanyName'] ?></td>
                        </tr> 
                    <?php } ?>


                </tbody>

            </table>


            <div class="table-responsive">

                <!--check-->


                <div class="row mb-3">                  
                    <div class="col-sm-12">
                        <h6>Technical evaluation Results</h6>
                    </div>
                </div>
                <div class="row mb-3">  
                    <div class="col-sm-12">
                        <textarea id="Tanalysis" name="Tanalysis" rows="6" style="width: 100%; border: 1px solid #ccc;"></textarea>
                        <span class="text-danger"><?= service('validation')->getError('Tanalysis') ?></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End Preliminary Evaluation  Table  -->

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
                foreach ($listfItem as $key => $resultfItem) {
                    ?>
                    <tr>
                        <th colspan="2" style="text-align:center"><?= $resultfItem['Item'] ?>-<?= $resultfItem['ItemName'] ?></th>
                        <th colspan="10" style="text-align:left"><?= $resultfItem['UCost'] ?></th>

                    </tr>
                    <?php foreach ($BidderListf as $key => $result) { ?>
                        <?php foreach ($result as $key => $resulC) { ?>
                            <?php if ($resulC['Itemid'] == $resultfItem['Item']) { ?>
                                <tr>
                                    <td><input type="hidden" class="form-control" name="CompanyName[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['business_name'] ?>"><?= $resulC['business_name'] ?></td>
                                    <td><input type="hidden" class="form-control" name="Qty[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['Qty'] ?>"><?= $resulC['Qty'] ?></td>

                                    <td><input type="hidden" class="form-control" name="Itemid[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['Itemid'] ?>"><?= $resulC['Unit_priceEV'] ?></td>
                                    <td><input type="hidden" class="form-control" name="Unit_priceEV[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['Unit_priceEV'] ?>"><?= $resulC['PriceLItem'] ?></td>
                                    <td><input type="hidden" class="form-control" name="TotalPEVat[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['TotalPEVat'] ?>"><?= $resulC['OPrice'] ?></td>
                                    <td><input type="hidden" class="form-control" name="VendorId[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['UserId'] ?>"><?= $resulC['TotalPEVat'] ?></td>
                                    <td><input type="hidden" class="form-control" name="ItemName[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['ItemName'] ?>"><?= $resulC['Discount'] ?></td>
                                    <td><?= $resulC['TotalwithDiscount'] ?></td>
                                    <td><?= $resulC['VAT'] ?></td>                   
                                    <td><?= $resulC['VatAmount'] ?></td>
                                    <td><?= $resulC['TotalPIVat'] ?></td>
                                    <td>
                                        <input type="hidden" class="form-control" name="VendorId[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]" value="<?= $resulC['UserId'] ?>">
                                        <input type="text" class="form-control" id="marks" name="marks[<?= $resulC['UserId'] . $resultfItem['Item'] ?>]">
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
<div class="card" style="margin-top: 10px;"> 
    <div class="card-header" style="background-color: #00cc44; color: white;">Recommendation of TEC </div>

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
                        <th scope="col"><strong>No</strong></th>
                        <th scope="col"><strong>Item</strong></th>
                        <th scope="col"><strong>Quantity</strong></th>
                        <th scope="col"><strong>Unit Cost Rs. (Without VAT)</strong></th>
                        <th scope="col"><strong>Total Cost Rs.</strong></th>                                  
                    </tr>

                    <?php foreach ($listcompany as $key => $resultcompany) { ?>

                        <tr>
                            <td colspan="5"><?= $resultcompany['CompanyName'] ?> </td>
                        </tr>
                        <?php
                        $i = 1;
                        $TotalCostEVat = 0;
                        foreach ($listfacept as $key => $resultfacept) {
                            if ($resultcompany['VendorId'] == $resultfacept['VendorId']) {
                                $TotalCostEVat += $resultfacept['TotalPIVat'];
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

                    <?php } ?>

                </thead>
            </table>
        </div>

        <div class="row mb-3">  
            <div class="col-sm-12">
                <textarea id="Recomend" name="Recomend" rows="6" style="width: 100%; border: 1px solid #ccc;"></textarea>
                <span class="text-danger"><?= service('validation')->getError('Recomend') ?></span>
            </div>
        </div><!-- Multi Columns Form -->
    </div>
</div>  
<div class="text-center">
    <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
    <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
</div>
<?= form_close() ?>

</div>
</div>
</section>
</main>
<script>
    function  loadOpenedTender(Tid) {
        var formData = "Tenderid=" + Tid + "&";
        //alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('invitation/getDescription') ?>',
            data: formData,
            success: function (response) {
                $("#result").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
    }
</script>
