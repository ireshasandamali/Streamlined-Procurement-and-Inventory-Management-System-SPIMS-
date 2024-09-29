<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW PROCUREMENT PLAN</h1>       
            </div>
            <div class="col-4">
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
    <section class="section dashboard">
        <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Procurement Item</h5>
        <hr style="height: 8px; background-color: red; margin-top: 1px;">
        <span class="text-success"><?= @$msg ?></span>

       <div class="card" style="margin-top: 10px;"> 
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
              <?=form_open('procurementPlan/createPro')?>
              
             <div class="row mb-3"> 
                      <label for="Year" class="col-sm-2 col-form-label">Year</label>
                      <div class="col-sm-10">
                      <input type="date" class="form-control" id="Year" name="Year">
                      <span class="text-danger"><?= service('validation')->getError('Year') ?></span>
                      </div>
                  
              </div>
             
              <div class="row mb-3"> 
                      <label for="Vote" class="col-sm-2 col-form-label">Vote</label>
                      <div class="col-sm-10">
                      <select id="Vote" class="form-select" name="Vote">
                          <option selected="">...</option>
                        <?php foreach ($vote_list as $key=>$result){ ?>
                            <option value="<?= $result['Vote']?>"><?=$result['Vote']?></option>
                        <?php }?>
                        
                          
                      </select>
                       <span class="text-danger"><?= service('validation')->getError('Vote') ?></span>
                      </div>
               </div> 
                  
               <div class="row mb-3"> 
                      <label for="Description" class="col-sm-2 col-form-label">Item Category</label>
                      <div class="col-sm-10">
                      <select id="Description" class="form-select" name="Description">
                          <option selected="">...</option>
                          <option value="Stationery"<?php if (set_value('Description') == 'Stationery') { echo 'selected';}?> > Stationery </option>
                          <option value="Uniforms"<?php if (set_value('Description') == 'Uniforms') { echo 'selected';}?> >Uniforms </option>
                          <option value="MedicalSupplies"<?php if (set_value('Description') == 'MedicalSupplies') { echo 'selected';}?>>Medical Supplies  </option> 
                          <option value=" Others"<?php if (set_value('Description') == ' Others') { echo 'selected';}?> >  Others - 1205</option>
                          <option value="FurnitureOfficeEquipment"<?php if (set_value('Description') == 'FurnitureOfficeEquipment') { echo 'selected';}?> >Furniture and Office Equipment </option>
                          <option value="PlantMachineryEquipment"<?php if (set_value('Description') == 'PlantMachineryEquipment') { echo 'selected';}?> >Plant & Machinery and Equipment </option>
                          <option value="UNMission"<?php if (set_value('Description') == 'UNMission') { echo 'selected';}?> >UN Peace Keeping Mission  - 2509</option>
                      </select>
                      </div>
                  </div>
              <div class="row mb-3"> 
                      <label for="Cost" class="col-sm-2 col-form-label">Estimated Cost</label>
                       <div class="col-sm-10">
                      <input type="text" class="form-control" id="Cost" name="Cost">
                      <span class="text-danger"><?= service('validation')->getError('Cost') ?></span>
                      </div>
                  
              
              <div class="text-center">
                  <button type="submit" class="btn btn-outline-primary rounded-0">Create</button>
                  <button type="save" class="btn btn-outline-primary rounded-0">Save</button>
                </div>
           <?=form_close()?><!-- End Horizontal Form -->

            </div>
          </div>
    </section>
</main>