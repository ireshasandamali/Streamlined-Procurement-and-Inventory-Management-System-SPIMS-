<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-6">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW PROCUREMENT PLAN</h1>       
            </div>
            <div class="col-6">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">PROCUREMENT PLAN</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Procurement Plan</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->

        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Procurement Plan Item List</div>
            <div class="card-body">
                <h5 class="card-title"></h5>           

                <!-- Multi Columns Form -->
                <?= form_open('procurementPlan/updateProcurementPlanstatus') ?>
                <div class="row mb-3">
                    <label for="PType" class="col-sm-4 col-form-label">Procurement Method</label>
                    <div class="col-sm-4">
                        <select id="PType" class="form-select" name="PType">
                            <option selected>...</option>
                            <option value="ICB" <?php if (set_value('PType') == 'ICB') echo 'selected'; ?>>ICB</option>
                            <option value="LIB" <?php if (set_value('PType') == 'LIB') echo 'selected'; ?>>LIB</option>
                            <option value="LNB" <?php if (set_value('PType') == 'LNB') echo 'selected'; ?>>LNB</option>
                            <option value="NCB" <?php if (set_value('PType') == 'NCB') echo 'selected'; ?>>NCB</option>
                            <option value="NationalShopping" <?php if (set_value('PType') == 'NationalShopping') echo 'selected'; ?>>National Shopping</option>
                        </select>
                        <span class="text-danger"><?= service('validation')->getError('PType') ?></span>
                    </div>

                    <div class="col-sm-4 text-center">
                        <button type="Submit" class="btn btn-primary">Search</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <!-- End Multi Columns Form -->
        </div>

           
            </div>
            </div>
             
             <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
               <table class="table">
                   <thead>
                      <?php
                                
                                foreach ($listP as $key => $resultP) {
                                    ?>
                  <tr>
                    <th scope="col">Vote</th>
                     <td><?= $resultP['Vote'] ?> </td> 
                  </tr>
                  <tr>
                   <th scope="col">Description</th>
                   <td><?= $resultP['Description'] ?> </td> 
                  </tr>
                  <tr>
                     <th scope="col">Allocation</th>
                     <td><?= $resultP['Allocation'] ?> </td> 
                  </tr>
                     <?php
                    }
                    ?>
                </thead>
                 </table>
              <!-- Table Variants -->
               <div class="table-responsive">
              <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
               <thead style="text-align: center; vertical-align: middle; border-bottom: 2px solid #001a66; border-top:  2px solid #001a66">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Procurement Status</th>
                    <th scope="col">Authority Level</th>
                    <th scope="col">Procurement Type</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Schedule date of Commencement</th>
                    <th scope="col">Schedule date of Completion</th>
                    
                  </tr>
                  
                  
                </thead>
                <tbody>
                    <?php
                    $TotalCost = 0;
                    $i=1;
                    foreach ($list as $key=>$result){ 
                         $TotalCost += $result['Cost'];
                        ?>
                  <tr>
                    <th scope="row"><?= $i?> </th>
                    <td><?= $result['ItemName'] ?></td>
                    <td><?= $result['Quantity'] ?></td>
                    <td><?= $result['Cost'] ?></td>
                    <td><?= $result['PStatus']?> </td>
                    <td><?= $result['Authority'] ?></td>
                    <td><?= $result['PType'] ?></td>
                    <td><?= $result['Progress'] ?></td>
                    <td><?= $result['CommeDate'] ?></td>
                    <td><?= $result['CompleateDate']?> </td>                  
                  </tr>                 
                    <?php
                    $i++;}
                    ?>
                  <tr>
                      <th scope="col" colspan="3">Grand Total</th>
                      <td><strong><?= $TotalCost ?> </strong></td>
                  </tr>
                </tbody>
              </table>
                   
                <input type="hidden" name="id" value="<?= $PId ?>"><button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="1">Approve</button>          
                <button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="2">Reject</button>
                <?= form_close() ?>
              </div>
        </div>
        </div>
    </section>
</main>
