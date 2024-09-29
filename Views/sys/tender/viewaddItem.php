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
        <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Tender Item</h5>
        <hr style="height: 8px; background-color: red; margin-top: 1px;">
        <span class="text-success"><?= @$msg ?></span>
       <div class="card" style="margin-top: 10px;"> 
            <div class="card-body">
                <h5 class="card-title"></h5>
                <!-- Multi Columns Form -->
                <?= form_open('tender/viewaddItem') ?>               
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="ICategory" class="form-label">Search By Category</label>
                        <select id="ICategory" class="form-select" name="ICategory">
                            <option selected="">...</option>
                            <option value="Stationery" <?php
                                    if (set_value('ICategory') == 'Stationery') {
                    echo 'selected';
                }
                ?>  >Stationery</option>
                <option value="Uniforms" <?php if (set_value('ICategory') == 'Uniforms') {
                    echo 'selected';
                }
                ?>  >Uniforms</option>
                <option value="MedicalSupplies" <?php if (set_value('ICategory') == 'MedicalSupplies') {
                    echo 'selected';
                }
                ?>  >MedicalSupplies</option>
                <option value="Others" <?php if (set_value('ICategory') == 'Others') {
                    echo 'selected';
                }
                ?>  >Others</option>
                <option value="FurnitureOfficeEquipment" <?php if (set_value('ICategory') == 'FurnitureOfficeEquipment') {
                    echo 'selected';
                }
                ?>  >FurnitureOfficeEquipment</option>
                <option value="FurnitureOfficeEquipment" <?php if (set_value('ICategory') == 'FurnitureOfficeEquipment') {
                    echo 'selected';
                }
                ?>  >FurnitureOfficeEquipment</option>
                <option value="PlantMachineryEquipment" <?php if (set_value('ICategory') == 'PlantMachineryEquipment') {
                    echo 'selected';
                }
                ?>  >PlantMachineryEquipment</option>
                            
                            <option value="UNMission" <?php
                if (set_value('ICategory') == 'UNMission') {
                    echo 'selected';
                }
                ?>>UNMission</option>
                        </select>
                    </div>



                    <div class="text-center">
                        <button type="Submit" class="btn btn-primary">Search</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div><!-- End Multi Columns Form -->
<?= form_close() ?>

            </div>
        </div>

             <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tender Items</h5>
              <!-- Table Variants -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                     <th scope="col">Sample</th>
                    <th>Action</th>
                     
                    
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    foreach ($list as $key=>$result){ ?>
                  <tr>
                    <th scope="row"><?= $i?> </th>
                    <td><?= $result['Item'] ?> </td>                   
                    <td><?= $result['Qty'] ?></td>
                    <td><?= $result['Sample'] ?></td>
                    <td><a href="<?= site_url() ?>">Remove Item</a>
                   
                     
                  </tr>
                    <?php
                    $i++;}
                    ?>
                  
                </tbody>
              </table>
              <!-- End Table Variants -->

            </div>
          </div>
    </section>
        </main>
