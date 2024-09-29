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
                <a class="nav-link active" id="PreliminaryTab" data-bs-toggle="tab" href="#openedPreContent">Preliminary Evaluation </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="openingTETab" data-bs-toggle="tab" href="#openingTEcContent">Preliminary Evaluation Results </a>
            </li>
            
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="openedPreContent">
                <!-- Preliminary analysis-->  
                <section>
                    <div class="card" style="margin-top: 10px;"> 
                        <div class="card-header" style="background-color: #267326; color: white;">Preliminary Evaluation </div>
                        <div class="card-body">
                            <h5 class="card-title">Preliminary analysis will examine the basic qualifications that the bid must meet both contractual and technical requirements according to the issued bidding document of this procurement</h5>    

                            <?= form_open_multipart('BidEvaluation/SaveDOCStatus') ?>
                            <table class="table table-striped">
                                <tr>
                                    <th>Total Number of Bids Received:</th>
                                    <td colspan="2"><?= $numberOfBusinessNames ?></td>
                                </tr>
                                <?php
                                foreach ($listB as $key => $resultB) {
                                    ?>                             
                                    <tr>
                                        <td colspan="3"> <?= $resultB['business_name']; ?><input  type="hidden" id="CompanyName" name="CompanyName[<?= $resultB['UserId']; ?>]" value="<?= $resultB['business_name']; ?>"><input  type="hidden" id="VendorId" name="VendorId[]" value="<?= $resultB['UserId']; ?>"><input  type="hidden" id="TenderId" name="TenderId" value="<?= $resultB['TenderId']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <a target="_blank" href="<?= site_url('BidEvaluation/openbidDOC/' . $resultB['UserId'] . '/' . $resultB['TId'] ) ?>" >Completeness of Bid submission form (Duly signed & filled)</a>
                                        </td>
                                        <td>
                                            <select id="DocStatus" class="form-select" name="BidSubmissionform[<?= $resultB['UserId']; ?>]">
                                                <option value="" selected=""></option>
                                                <option value="Yes" <?php
                                                if (set_value('DocStatus') == 'Yes') {
                                                    echo 'selected';
                                                }
                                                ?> >Yes</option>
                                                <option value="No" <?php
                                                if (set_value('DocStatus') == 'NO') {
                                                    echo 'selected';
                                                }
                                                ?> > No</option>                                
                                            </select>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <a target="_blank" href="<?= site_url('BidEvaluation/openBidSguarantee/' . $resultB['UserId'] . '/' . $resultB['TId']) ?>" >Bid security guarantee</a>

                                        </td>
                                        <td>

                                            <select id="DocStatus" class="form-select" name="Bidbond[<?= $resultB['UserId']; ?>]">
                                                <option selected="selected">...</option>                                   
                                                <option > yes</option>
                                                <option > No</option>
                                            </select>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <a target="_blank" href="<?= site_url('BidEvaluation/openBRegistration/' . $resultB['UserId'] . '/' . $resultB['TId']) ?>" >Submission of Business registration</a>

                                        </td>
                                        <td>

                                            <select id="DocStatus" class="form-select" name="BRegistration[<?= $resultB['UserId']; ?>]">
                                                <option selected="selected">...</option>                                   
                                                <option > yes</option>
                                                <option > No</option>
                                            </select>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <a target="_blank" href="<?= site_url('BidEvaluation/openPCA3/' . $resultB['UserId'] . '/' . $resultB['TId']) ?>" >Submission of Registration under Public contract Act (PCA3)</a>

                                        </td>
                                        <td>

                                            <select id="DocStatus" class="form-select" name="PCA3[<?= $resultB['UserId']; ?>]">
                                                <option selected="selected">...</option>                                   
                                                <option > yes</option>
                                                <option > No</option>
                                            </select>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <a target="_blank" href="<?= site_url('BidEvaluation/opentechnicalbrochures/' . $resultB['UserId'] . '/' . $resultB['TId']) ?>" >Submission of Manufacture’s original technical brochures</a>

                                        </td>
                                        <td>

                                            <select id="DocStatus" class="form-select" name="manufacturebrochures[<?= $resultB['UserId']; ?>]">
                                                <option selected="selected">...</option>                                   
                                                <option > yes</option>
                                                <option > No</option>
                                            </select>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>

                                        <td>
                                            <a target="_blank" href="<?= site_url('BidEvaluation/openMAuthorization/' . $resultB['UserId'] . '/' . $resultB['TId']) ?>" >Submission of Manufacture Authorization</a>

                                        </td>
                                        <td>
                                            <select id="DocStatus" class="form-select" name="ManufactureAuthorization[<?= $resultB['UserId']; ?>]">
                                                <option selected="selected">...</option>                                   
                                                <option > yes</option>
                                                <option > No</option>
                                            </select>

                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?> 
                            </table>   
                             <?php if((session()->get('UserType'))=='TEC Chairmen'){ ?> 
                             <?php if($listmember){ ?>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
                                <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                            </div>
                             <?php } ?>
                             <?php } ?>
                            <?= form_close() ?>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- end Preliminary analysis--> 
        <div class="tab-content">
            <div class="tab-pane fade" id="openingTEcContent">
                <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #267326; color: white;">Preliminary Evaluation Results</div>
                <div class="card-body">
                    <h5 class="card-title">Preliminary analysis will examine the basic qualifications that the bid must meet both contractual and technical requirements according to the issued bidding document of this procurement</h5>    
                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('BidEvaluation/PreliminaryEvaluation') ?>
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
                                    <td><?= number_format($resultB['TotalPIVat'],2) ?></td>                                    
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
                    
                          
                    </div>
                </div> 

            </div>
           </div>
            </div>
        </div>

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


