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
                <a class="nav-link active" id="TecEvaluationTab" data-bs-toggle="tab" href="#openedPreContent">Technical Evaluation </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="TecresultTab" data-bs-toggle="tab" href="#openingTEcContent">Technical Evaluation Results</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="TecEvaluationTab">
                <!-- Preliminary analysis-->  
                <section>
                    <div class="card" style="margin-top: 10px;"> 
                        <div class="card-header" style="background-color: #267326; color: white;">Preliminary Evaluation </div>
                        <div class="card-body">
                            <h5 class="card-title">Preliminary analysis will examine the basic qualifications that the bid must meet both contractual and technical requirements according to the issued bidding document of this procurement</h5>    

                            <?= form_open_multipart('BidEvaluation/SaveSpecStatus') ?>
                            <table class="table table-striped">

                                <?php
                                foreach ($listB as $key => $resultB) {
                                    ?>
                                    <tr>
                                        <td colspan="3"><?= $resultB['CompanyName']; ?></td>
                                        <td> <input  type="hidden" id="CompanyName" name="CompanyName[]" value="<?= $resultB['CompanyName']; ?>"></td>
                                        <td> <input  type="hidden" id="VendorId" name="VendorId[]" value="<?= $resultB['VendorId']; ?>"></td>
                                        <td> <input  type="hidden" id="TenderId" name="TenderId" value="<?= $resultB['TenderId']; ?>"></td>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary target="_blank" href="<?= site_url('BidEvaluation/viewSpecdetails/' . $resultB['VendorId'] . '/' . $resultB['TenderId']) ?>" >View Specification</a>
                                        </td>
                                    </tr>




                                    <?php
                                }
                                ?> 
                            </table>   
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
                                <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                            </div>
                            <?= form_close() ?>

                        </div>
                    </div>
                     </div>
            <!-- Second page -->
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
                        <?php  foreach ($listItem as $key => $resultItem){
                       ?>
                        <tr>
                            <td><?= $resultItem['ItemName'] ?> </td>
                        </tr>
                        <?php
                        $i = 1;
                        $TotalMarks = 0;
                        foreach ($listT as $key => $resultT) {
                            
                            if($resultItem['Item']== $resultT['Item']){
                            ?>

                            <tr>
                                <th scope="row"><?= $i ?> </th>
                                <td><input  type="hidden" id="TenderId" name="TenderId" value="<?= $resultT['TId']; ?>"><?php// $resultT['ItemName'] ?></td>
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
                        }}
                        ?>
                             <tr><th colspan="5">Total Marks</th>
                            <?php
                            // $TotalMarks = 0;
                            foreach ($listz as $key => $resultz) {
                                if($resultz['Itemid']==$resultItem['Item']){
                                ?>

                                <td><?= $resultz['TOTAL'] ?>
                                </td>
                                
                            <?php }} ?>
                        </tr>
                            <?php
                        }
                        ?>
                            

                       
                    </tbody>    
                </table>
               
                <!-- my reject bidder -->
                <h6>Rejected Company</h6>
                <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Company  Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                     <?php foreach ($listrejected as $key => $resultreject)  { ?>
                        <tr>
                            <td>
                         <?= $resultreject['Itemid'] ?>
                            </td>
                            <td><?= $resultreject['CompanyName'] ?></td>
                           </tr> 
                   <?php } ?>
                  
                  
                    </tbody>
              
                </table>


                        </tbody>
                        </thead>
                    </table>
                    <!--check-->

                    <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                        <thead>

                            <tr>
                                <th>Item Name</th> 
                                <th>Quantity</th>
                                <th>Selected Company</th>
                                <th>Rejected Company</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listk as $key => $resultk) { ?>
                                <tr>
                                    <td>
                                        <input  type="text" class="form-control" id="company_name" value="<?= $resultk['ItemName'] ?>" readonly>
                                    </td>
                                    <td>
                                        <input  type="text" class="form-control" id="company_name" value="<?= $resultk['Qty'] ?>" readonly>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php } ?> 

                        </tbody>

                    </table>
                </div>

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
            <!--end second page-->
            
                </section>
                </main>

<script>
    // JavaScript to handle tab switching
    document.addEventListener('DOMContentLoaded', function () {
        // Select the default active tab (openedBidTab)
        document.getElementById('TecresultTab').classList.add('active');
        document.getElementById('TecEvaluationTab').classList.add('show', 'active');
        
        document.getElementById('TecresultTab').addEventListener('click', function () {
            document.getElementById('TecresultTab').classList.add('active');
            document.getElementById('TecEvaluationTab').classList.add('show', 'active');
            
            document.getElementById('TecresultTab').classList.remove('active');
            document.getElementById('TecEvaluationTab').classList.remove('show', 'active');
        });
        
        document.getElementById('TecresultTab').addEventListener('click', function () {
            document.getElementById('TecresultTab').classList.add('active');
            document.getElementById('TecEvaluationTab').classList.add('show', 'active');
            
            document.getElementById('TecresultTab').classList.remove('active');
            document.getElementById('TecEvaluationTab').classList.remove('show', 'active');
        });
    });
</script>


