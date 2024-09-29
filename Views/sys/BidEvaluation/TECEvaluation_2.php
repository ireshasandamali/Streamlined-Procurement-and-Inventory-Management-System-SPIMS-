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
                <div class="card-body">
                    <h5 class="card-title">Commandant Special Task Force has appointed the Technical Evaluation Committee (TEC) for the procurement of <strong> Brand New Machinery Equipment for STF Transport Division </strong> jointly conducted the bid evaluation and prepared the bid evaluation report. </h5>    
                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('BidEvaluation/PreliminaryEvaluation') ?>
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
                                        <td><?= $resultC['MNumber'] ?></td>
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

                <?= form_close() ?>

            </div>
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #267326; color: white;">Preliminary Evaluation </div>
                <div class="card-body">
                    <h5 class="card-title">Preliminary analysis will examine the basic qualifications that the bid must meet both contractual and technical requirements according to the issued bidding document of this procurement</h5>    
                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('BidEvaluation/TECEvaluation') ?>
                    <h5>Contractual/ Commercial Compliances. (Post Qualification Requirements</h5>



                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                            <thead>
                                <tr>                                     
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>

                                <?php foreach ($Criteria_list as $key => $result) { ?>
                                    <tr>
                                        <td><strong><?= $result['PCriteria'] ?></strong></td>

                                        <td>
                                            <a class="btn btn-primary btn-sm" href="<?= site_url('BidEvaluation/ViewPAnalysis/' . $result['id'] . '/' . $TId) ?>" style="color: white;">View Bidders</a>
                                        </td>



                                    </tr>
                                <?php } ?>  

                            </thead>
                        </table>

                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                <thead>

                                    <tr>
                                    <th scope="col"><strong>Description</strong></th>
                                    </tr>
                                    <tr>
                                    <th scope="col">
                                        <a href="<?= site_url('BidEvaluation/ViewPAnalysis/' . $TId) ?>" style="color: black;">
                                            Completeness of Bid submission form (Duly signed & filled)
                                        </a>
                                    </th>
                                    </tr>

                                    <tr>
                                        <th scope="col">
                                        <a href="<?= site_url('BidEvaluation/ViewPAnalysis/' . $TId) ?>" style="color: black;">
                                            Completeness of technical specification
                                        </a>
                                    </th>
                                    </tr>
                                    <tr>
                                    <th scope="col">
                                        <a href="<?= site_url('BidEvaluation/ViewPAnalysis/' . $TId) ?>" style="color: black;">
                                            Completeness of price schedule
                                        </a>
                                    </th>
                                    </tr> 
                                    <tr>
                                        <th scope="col">
                                        <a href="<?= site_url('BidEvaluation/ViewPAnalysis/' . $TId) ?>" style="color: black;">
                                            Bid Value Rs. (with VAT)
                                        </a>
                                    </th>
                                    </tr>
                                    <tr><th scope="col">Submission of Registration under Public contract Act (PCA3)</th>
                                    </tr>
                                    <tr><th scope="col">Submission of Manufacture’s original technical brochures</th>
                                    </tr>
                                    <tr><th scope="col" >Submission of delivery period</th>
                                    </tr>
                                    <tr><th scope="col" >Submission of Business registration</th>
                                    </tr>
                                    <tr><th scope="col">Submission of Manufacture Authorization</th>
                                    </tr>
                                    <tr><th scope="col">Conditions on Bid</th>
                                    </tr>
                                    <tr><th scope="col">Eligibility of the bidders</th>
                                    </tr>

                                    <tr><th scope="col"><strong>Substantially Responsiveness</strong></th>
                                    </tr>

                                </thead>

                                <tbody>


                                </tbody>
                            </table>
                            <div class="row mb-3">                  
                                <div class="col-sm-12">
                                    <h6>Preliminary analysis Results</h6>
                                </div>
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
            <!-- End Preliminary Evaluation  Table  -->

            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">Technical Evaluation </div>
                <div class="card-body">
                    <h5 class="card-title">The TEC decided that technical evaluation is to be done by Comparing the technical specifications & technical brochures which are submitted by the bidders. Following criteria are considered in detailed.</h5>    
                    <!-- Multi Columns Form PreliminaryEvaluation-->

                    <?= form_open_multipart('BidEvaluation/TECEvaluation') ?>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Technical Details</th>
                                    <th scope="col">Bid Specification</th>
                                    <th scope="col">Priority Status</th>
                                    <?php foreach ($listB as $key => $resultB) { ?>
                                        <td><?= $resultB['business_name'] ?></td>
                                    <?php } ?>  
                                </tr>


                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($lists as $key => $results) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i ?> </th>
                                        <td><?= $results['Item'] ?></td>
                                        <td><?= $results['SubComponent'] ?></td>
                                        <td><?= $results['Detail'] ?></td>
                                        <td><?= $results['Priority'] ?> </td> 
                                        <?php foreach ($listi as $key => $resulti) { ?>  
                                            <th><?= ($resulti['Remarks']) ?></th>
                                        <?php } ?> 
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>                                        
                            </tbody>    
                        </table>

                        <div class="row mb-3">                  
                            <div class="col-sm-12">
                                <h6>Technical evaluation Results</h6>
                            </div>
                        </div>
                        <div class="row mb-3">  
                            <div class="col-sm-12">
                                <textarea id="Panalysis" name="Panalysis" rows="6" style="width: 100%; border: 1px solid #ccc;"></textarea>
                                <span class="text-danger"><?= service('validation')->getError('Panalysis') ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <!-- End Preliminary Evaluation  Table  -->

            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">Financial Evaluation </div>
                <div class="card-body">
                    <h5 class="card-title">The TEC decided that technical evaluation is to be done by Comparing the technical specifications & technical brochures which are submitted by the bidders. Following criteria are considered in detailed.</h5>    
                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('BidEvaluation/TECEvaluation') ?>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col"  colspan="6">Contractual/ Commercial Compliances. (Post Qualification Requirements</th>
                                </tr>
                                <tr><th scope="col"><strong>No</strong></th>
                                    <th scope="col"><strong>Item</strong></th>
                                    <th scope="col"><strong>Quantity</strong></th>
                                    <th scope="col"><strong>Estimated Unit Price</strong></th>
                                    <?php foreach ($listB as $key => $resultB) { ?>
                                        <th><?= $resultB['business_name'] ?></th>
                                    <?php } ?> 
                                </tr>

                                <?php
                                $i = 1;
                                foreach ($listE as $key => $resultE) {
                                    $lowestPrice = PHP_INT_MAX; // Initialize with a very high value
                                    $lowestPriceIndex = -1;

                                    foreach ($listB as $key => $resultB) {
                                        // Update lowest price and its index if the current price is lower
                                        if ($resultB['Unit_priceEV'] < $lowestPrice) {
                                            $lowestPrice = $resultB['Unit_priceEV'];
                                            $lowestPriceIndex = $key;
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $i ?> </td>
                                        <td><?= $resultE['ItemName'] ?> </td>
                                        <td><?= $resultE['Qty'] ?> </td>
                                        <th><?= number_format($resultE['UCost'], 2) ?></th>

                                        <?php
                                        foreach ($listB as $key => $resultB) {
                                            ?>
                                            <td <?= ($key == $lowestPriceIndex) ? 'style="text-decoration: underline;"' : '' ?>>
                                                <?= number_format($resultB['Unit_priceEV'], 2) ?>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
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
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">Recommendation of TEC </div>
                <div class="card-body">
                    <h5 class="card-title">Recommendation of TEC</h5>    

                    <div class="row mb-3">  
                        <div class="col-sm-12">
                            <textarea id="Fanalysis" name="Fanalysis" rows="6" style="width: 100%; border: 1px solid #ccc;"></textarea>
                            <span class="text-danger"><?= service('validation')->getError('Fanalysis') ?></span>
                        </div>
                    </div><!-- Multi Columns Form -->
                </div>
            </div>  
            <?= form_close() ?>
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
