<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <hr style="background-color: black; height: 2px;">
            <div class="col-7">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>CREATE PROCUREMENT PLAN</h1>       
            </div>
            <div class="col-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">PROCUREMENT PLAN</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>Create Procurement Plan</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
    <section class="section dashboard">  
         <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Procurement Item</div>
            <div class="card-body">
                <h5 class="card-title"></h5>  
                <!-- Alert Messages -->
                    <?php if (isset($msg)): ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= $msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <!-- End of Alert Messages -->
              <?=form_open('procurementItem/add')?>
              <div class="row mb-4">
                  <div class="col-md-2">
                      <label for="ItemName" class="form-label">Item Name</label>
                      <input type="text" class="form-control" id="ItemName" name="ItemName">
                      <span class="text-danger"><?= service('validation')->getError('ItemName') ?></span>
                  </div>
                  <div class="col-md-4">
                      <label for="Quantity" class="form-label">Quantity</label>
                      <input type="text" class="form-control" id="Quantity" name="Quantity">
                      <span class="text-danger"><?= service('validation')->getError('Quantity') ?></span>
                  </div>
                  <div class="col-md-6">
                      <label for="Cost" class="form-label">Estimated Cost</label>
                      <input type="text" class="form-control" id="Cost" name="Cost">
                      <span class="text-danger"><?= service('validation')->getError('Cost') ?></span>
                  </div>
              </div>
             <div class="row mb-3">
                 <label for="PStatus" class="col-sm-2 col-form-label">Priority Status</label>
                 <div class="col-sm-4">
                     <select id="PStatus" class="form-select" name="PStatus">
                         <option selected>...</option>
                         <option value="Urgent" <?php if (set_value('PStatus') == 'ICB') echo 'selected'; ?>>Urgent</option>
                         <option value="Priority" <?php if (set_value('PStatus') == 'Priority') echo 'selected'; ?>>Priority</option>
                         <option value="Normal" <?php if (set_value('PStatus') == 'Normal') echo 'selected'; ?>>Normal</option>
                     </select>
                     <span class="text-danger"><?= service('validation')->getError('PStatus') ?></span>
                 </div>

                 <label for="Authority" class="col-sm-2 col-form-label">Level of Authority</label>
                 <div class="col-sm-4">
                     <select id="Authority" class="form-select" name="Authority">
                         <option selected>...</option>
                         <option value="STF" <?php if (set_value('Authority') == 'STF') echo 'selected'; ?>>STF PC</option>
                         <option value="MPC" <?php if (set_value('Authority') == 'MPC') echo 'selected'; ?>>MPC</option>
                         <option value="CAPC" <?php if (set_value('Authority') == 'CAPC') echo 'selected'; ?>>CAPC</option>
                     </select>
                     <span class="text-danger"><?= service('validation')->getError('Authority') ?></span>
                 </div>
             </div>
              <div class="row mb-3"> 
              <label for="PType" class="col-sm-2 col-form-label">Procurement Method</label>
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

                 <label for="Progress" class="col-sm-2 col-form-label">Current Progress of Procurement Preparedness activities</label>
                 <div class="col-sm-4">
                     <select id="Progress" class="form-select" name="Progress">
                         <option selected>...</option>
                         <option value="DocumentPrepared" <?php if (set_value('Authority') == 'DocumentPrepared') echo 'selected'; ?>>Document Prepared</option>
                         <option value="AsperRequirements" <?php if (set_value('Authority') == 'AsperRequirements ') echo 'selected'; ?>>As per Requirements </option>
                     </select>
                     <span class="text-danger"><?= service('validation')->getError('Progress') ?></span>
                 </div>
             </div>
             <div class="row mb-3">
                 <label for="CommeDate" class="col-sm-2 col-form-label">Schedule date of Commencement</label>
                 <div class="col-sm-4">
                     <input type="date" class="form-control" id="CommeDate" name="CommeDate">
                 </div>

                 <label for="CompleateDate" class="col-sm-2 col-form-label">Schedule date of Completion</label>
                 <div class="col-sm-4">
                     <input type="date" class="form-control" id="CompleateDate" name="CompleateDate">
                 </div>
             </div>
            

              <div class="text-center">
                   <input type="hidden" name="PId" id="PId" value="<?=$PId ?>">
                  <button type="submit" class="btn btn-outline-primary rounded-0">Create</button>
                  <button type="reset" class="btn btn-outline-primary rounded-0">Reset</button>
                </div>
           <?=form_close()?><!-- End Horizontal Form -->

            </div>
          </div>
        </div>
    </section>
</main>