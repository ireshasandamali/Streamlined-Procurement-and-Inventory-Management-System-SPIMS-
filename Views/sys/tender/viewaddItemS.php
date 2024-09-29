<main id="main" class="main">
<div class="pagetitle">
       <h1>Dashboard</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">            
            <ol class="breadcrumb">
               <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWFJREFUSEvd1b1LHFEUxuFnEbERlRRBBCGklSj+AWlD1CaQOkUs/CgEBUklJpLaIo2FISBiLQQiKYJtilSCQREFJWBhpbYRE2dgdplcZu/uZt1mbzmc9/2dj3vPlLT4lFrsr/0BXXiJ5xjBI/zFGfbwFdu4qdbqWIvGsJaZxkZ1ghnsFgVVA7xLMn3bwAX4gzdYDTVFgBUsN2CeD53Hh/yHEDCBL/9pnsrSSp7ie9kjD+jGMfobAFzgM6ZymiM8KQ8+D5jNhlqv/xaW8CPRPQxELzLwPw9tJwker8M9zfp1dkU38apA87FcVb6CcwzUAGxgAVeIzSt9I6OpVx7wG50RwPvc7erFQSShSzwIAdfoiQAqfcUnTEZiU6++EPATQxHRIRaztTFXo5X7yQoZDgG1sqpj/pWQdUyHgHShpcvrPs4zfAsBHThN+jvYJOEXHuM2BDTpWyxv/z9a021reYvuAJ89NxlfzVfAAAAAAElFTkSuQmCC"/>
               <li class="breadcrumb-item"><a href="index.html">Tender</a></li>
          <li class="breadcrumb-item active">view</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard
              <div class="card">
            <div class="card-body">
                <h5 class="card-title">Search Tender</h5>
                <span class="text-success"><?= @$msg ?></span>
                <!-- Multi Columns Form -->
                <?= form_open('tender/viewaddItemS') ?>
                
                <div class="row g-3">
             

                    <div class="col-md-6">
                        <label for="ICategory" class="form-label">Search By Category</label>
                        <select id="ICategory" class="form-select" name="ICategory">
                            <option selected="">...</option>
                            <option value="Stationery" <?php if (set_value('ICategory') == 'Stationery') {
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
                    <th></th>
                     
                    
                  </tr>
                </thead>
                <tbody>
                     <?php foreach ($list as $item): ?>
              
                  <tr>
                    <th scope="row"><?=  $item['TItemid']?> </th>
                    <td><?= $item['Item'] ?> </td>                   
                    <td><?= $item['Qty'] ?></td>
                    
                    <td><a href="<?= base_url('sys/tender/viewcestimate'
                            ) ?>" class="btn btn-info">View More</a>
                    </td>
                  </tr>
                    <?php endforeach; ?>
                  
                </tbody>
              </table>
              <!-- End Table Variants -->

            </div>
          </div>
    </section>
        </main>
