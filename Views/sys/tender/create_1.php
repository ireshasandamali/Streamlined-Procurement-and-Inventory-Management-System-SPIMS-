<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
         <div class="card" style="border: 2px solid #000066;">
            <div class="card-body">
              <h5 class="card-title">Procurement</h5>
              <span class="text-success"><?= @$msg ?></span>
              <?=form_open('tender/create')?>
             
              <div class="row mb-3">
                  <label for="Description" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Description" name="Description">
                    <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                  </div>
                </div>
                  
                <div class="row mb-3">
                    <label for="SItem" class="col-sm-2 col-form-label">Supply Registered Category</label>
                    <div class="col-sm-10">
                        
                        <div class="form-group">
                            
                            <select class="form-control" id="SItem" name="SItem">
                                <option selected="">...</option>
                                <option>G1</option>
                                <option>G2</option>
                                <option>G3</option>
                                <option>G4</option>
                                <option>G5</option>
                                <option>G6</option>
                                <option>G7</option>
                                <option>G8</option>
                                <option>G9</option>
                                <option>G10</option>
                                <option>S1</option>
                                <option>S2</option>
                                <option>S3</option>
                                <option>S4</option>
                                <option>S5</option>
                                <option>S6</option>
                                <option>S7</option>
                                <option>S8</option>
                                <option>S9</option>
                                <option>S10</option>
                            </select>
                        <span class="text-danger"><?= service('validation')->getError('SItem') ?></span>
                        </div>
                        
                     <!--<textarea  class="form-control" id="SItem" name="SItem" placeholder="Toners for Photocopy machine"></textarea>
                    -->
                     </div>
                </div>  
                <div class="row mb-3">
                  <label for="Category" class="col-sm-2 col-form-label">Supply Item</label>
                  <div class="col-sm-10">
                    <textarea  class="form-control" id="Category" name="Category" placeholder="Toners for Photocopy machine"></textarea>
                   <span class="text-danger"><?= service('validation')->getError('Category') ?></span>
                  </div>
                </div>
                 
                  <div class="row mb-3"> 
                      <label for="PType" class="col-sm-2 col-form-label">Procurement Method</label>
                      <div class="col-sm-10">
                      <select id="PType" class="form-select" name="PType">
                          <option selected="">...</option>
                          <option value="ICB" <?php if (set_value('PType') == 'ICB') { echo 'selected';}?> > ICB</option>
                          <option value="LIB" <?php if (set_value('PType') == 'LIB') { echo 'selected';}?> >LIB</option>
                          <option value="LNB" <?php if (set_value('PType') == 'LNB') { echo 'selected';}?> >LNB</option>
                          <option value="NCB" <?php if (set_value('PType') == 'NCB') { echo 'selected';}?> >NCB</option>  
                          <option value="NationalShopping" <?php if (set_value('PType') == 'NationalShopping ') { echo 'selected';}?> >National Shopping </option>  
                      </select>
                       <span class="text-danger"><?= service('validation')->getError('PType') ?></span>
                      </div>
                  </div> 
                 
                <div class="row mb-3"> 
                      <label for="ICategory" class="col-sm-2 col-form-label">Vote Category</label>
                      <div class="col-sm-10">
                      <select id="ICategory" class="form-select" name="ICategory">
                          <option selected="">...</option>
                          <option value="Stationery" <?php if (set_value('ICategory') == 'Stationery') { echo 'selected';}?> > Stationery - 1201</option>
                          <option value="Uniforms" <?php if (set_value('ICategory') == 'Uniforms') { echo 'selected';}?> >Uniforms - 1203</option>
                          <option value="MedicalSupplies" <?php if (set_value('ICategory') == 'MedicalSupplies') { echo 'selected';}?> >Medical Supplies  - 1204</option> 
                          <option value=" Others" <?php if (set_value('ICategory') == ' Others') { echo 'selected';}?> >  Others - 1205</option>
                          <option value="FurnitureOfficeEquipment" <?php if (set_value('ICategory') == 'FurnitureOfficeEquipment') { echo 'selected';}?> >Furniture and Office Equipment - 2102</option>
                          <option value="PlantMachineryEquipment" <?php if (set_value('ICategory') == 'PlantMachineryEquipment') { echo 'selected';}?> >Plant & Machinery and Equipment  - 2103</option>
                          <option value="UNMission" <?php if (set_value('ICategory') == 'UNMission') { echo 'selected';}?> >UN Peace Keeping Mission  - 2509</option>
                       </select>
                      </div>
                  </div>
                  <div class="row mb-3">
                  <label for="BStartTime" class="col-sm-2 col-form-label">Bidding Process Start Time</label>
                  <div class="col-sm-4">
                    <input type="time" class="form-control" id="BStartTime" name="BStartTime">
                  </div>
                
                  <label for="BStartDate" class="col-sm-2 col-form-label">Bidding Process Start Date</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="BStartDate" name="BStartDate">
                  </div>
                </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-outline-primary rounded-0">Next</button>
                  <button type="save" class="btn btn-outline-primary rounded-0">Save</button>
                </div>
           <?=form_close()?><!-- End Horizontal Form -->

            </div>
          </div>
    </section>