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
                <a class="nav-link active" id="PreliminaryTab" data-bs-toggle="tab" href="#openedPreContent">Preliminary Evaluation </a>
            </li>
            
           
        </ul>

        
        <div class="tab-content">
            <div class="tab-pane fade" id="openingFinancialContent">
                    
                <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">Financial Evaluation </div>
               <?php
                                $i = 1;
                                foreach ($listC as $key => $resultC) {?>
                <div class="card-body">
                    <h5 class="card-title">The below table summarizes the cost information of the bidders & estimated cost for the procurement of <strong> <?= $resultC['Description'] ?> </strong> jointly conducted the bid evaluation and prepared the bid evaluation report. </h5>    
                     <?php } ?>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                            <thead>
                               
                                <tr><th scope="col"><strong>No</strong></th>
                                    <th scope="col"><strong>Item</strong></th>
                                    <th scope="col"><strong>Quantity</strong></th>
                                    <th scope="col"><strong>Estimated Unit Price</strong></th>
                                     <?php foreach ($listf as $key => $resultf) { ?>
                                    <td><?= $resultf['CompanyName'] ?></td>
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
                                            foreach ($listf as $key => $resultf) {
                                                ?>
                                                <td <?= ($key == $lowestPriceIndex) ? 'style="text-decoration: underline;"' : '' ?>>
                                                    <?= number_format($resultf['Unit_priceEV'], 2) ?>
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
            </div>
            
            <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="openedPreContent">
                <!-- Preliminary analysis-->  
                <section>
                       <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">Financial Evaluation </div>
               <?php
                                $i = 1;
                                foreach ($listC as $key => $resultC) {?>
                <div class="card-body">
                    <h5 class="card-title">The below table summarizes the cost information of the bidders & estimated cost for the procurement of <strong> <?= $resultC['Description'] ?> </strong> jointly conducted the bid evaluation and prepared the bid evaluation report. </h5>    
                     <?php } ?>
                   <?= form_open_multipart('BidEvaluation/SaveSpecStatus') ?>
                            <table class="table table-striped">

                                 <?php foreach ($listf as $key => $resultf) { ?>
                                   
                               
                                    <tr>
                                        <td> <input  type="hidden" id="CompanyName" name="CompanyName[]" value="<?= $resultf['CompanyName']; ?>"><?= $resultf['CompanyName'] ?></td>                                                                     
                                        <td>
                                            <a class="btn btn-primary target="_blank" href="<?= site_url('BidEvaluation/viewSriseSchuduledetails/' . $resultf['VendorId'] . '/' . $resultf['TenderId']) ?>" >View Specification</a>
                                        </td>
                                    </tr>




                                    <?php
                                }
                                ?> 
                            </table>   
                            <div class="text-center">
                                
                            </div>
                            <?= form_close() ?>

                        </div>
                    </div>
                </section>
                </main>

            <script>
                // JavaScript to handle tab switching
                document.addEventListener('DOMContentLoaded', function () {
                    // Select the default active tab (PreliminaryTab)
                    document.getElementById('PreliminaryTab').classList.add('active');
                    document.getElementById('openedPreContent').classList.add('show', 'active');


                    // Add event listeners to tab links
                    document.getElementById('PreliminaryTab').addEventListener('click', function () {
                        document.getElementById('PreliminaryTab').classList.add('active');
                        document.getElementById('openedPreContent').classList.add('show', 'active');

                        document.getElementById('openingTETab').classList.remove('active');
                        document.getElementById('openingTEcContent').classList.remove('show', 'active');

                        document.getElementById('openingFinancialTab').classList.remove('active');
                        document.getElementById('openingFinancialContent').classList.remove('show', 'active');
                    });

                    document.getElementById('openingTETab').addEventListener('click', function () {
                        document.getElementById('openingTETab').classList.add('active');
                        document.getElementById('openingTEcContent').classList.add('show', 'active');

                        document.getElementById('PreliminaryTab').classList.remove('active');
                        document.getElementById('openedPreContent').classList.remove('show', 'active');

                        document.getElementById('openingFinancialTab').classList.remove('active');
                        document.getElementById('openingFinancialContent').classList.remove('show', 'active');
                    });

                    document.getElementById('openingFinancialTab').addEventListener('click', function () {
                        document.getElementById('openingFinancialTab').classList.add('active');
                        document.getElementById('openingFinancialContent').classList.add('show', 'active');

                        document.getElementById('PreliminaryTab').classList.remove('active');
                        document.getElementById('openedPreContent').classList.remove('show', 'active');

                        document.getElementById('openingTETab').classList.remove('active');
                        document.getElementById('openingTEcContent').classList.remove('show', 'active');
                    });

                });
            </script>


