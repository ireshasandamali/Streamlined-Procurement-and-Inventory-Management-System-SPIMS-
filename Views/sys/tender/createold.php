<main id="main" class="main">

    <div class="pagetitle">
       <h1>Dashboard</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">            
            <ol class="breadcrumb">
               <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWFJREFUSEvd1b1LHFEUxuFnEbERlRRBBCGklSj+AWlD1CaQOkUs/CgEBUklJpLaIo2FISBiLQQiKYJtilSCQREFJWBhpbYRE2dgdplcZu/uZt1mbzmc9/2dj3vPlLT4lFrsr/0BXXiJ5xjBI/zFGfbwFdu4qdbqWIvGsJaZxkZ1ghnsFgVVA7xLMn3bwAX4gzdYDTVFgBUsN2CeD53Hh/yHEDCBL/9pnsrSSp7ie9kjD+jGMfobAFzgM6ZymiM8KQ8+D5jNhlqv/xaW8CPRPQxELzLwPw9tJwker8M9zfp1dkU38apA87FcVb6CcwzUAGxgAVeIzSt9I6OpVx7wG50RwPvc7erFQSShSzwIAdfoiQAqfcUnTEZiU6++EPATQxHRIRaztTFXo5X7yQoZDgG1sqpj/pWQdUyHgHShpcvrPs4zfAsBHThN+jvYJOEXHuM2BDTpWyxv/z9a021reYvuAJ89NxlfzVfAAAAAAElFTkSuQmCC"/>
               <li class="breadcrumb-item"><a href="index.html">Procurement Management</a></li>
          <li class="breadcrumb-item active">Create Tender File</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Create Tender</h5>
        <hr style="height: 8px; background-color: red; margin-top: 1px;">
        <span class="text-success"><?= @$msg ?></span>

       <div class="card" style="margin-top: 10px;"> 
            <div class="card-body">
                <h5 class="card-title"></h5>
              <?=form_open('tender/create')?>
            
              <input type="hidden" class="form-control" id="RequestId" name="RequestId" value=" <?= $RequestId?>">
              <div class="row mb-3">
                  <label for="Description" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Description" name="Description">
                    <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                  </div>
                </div>
                  
              
                
                  <div class="row mb-3"> 
                      <label for="PType" class="col-sm-2 col-form-label">Procurement Method</label>
                      <div class="col-sm-10">
                      <select id="PType" class="form-select" name="PType">
                          <option value="" selected="">...</option>
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
                          <option value="" selected="">...</option>
                          <option value="Stationery" <?php if (set_value('ICategory') == 'Stationery') { echo 'selected';}?> > Stationery - 1201</option>
                          <option value="Uniforms" <?php if (set_value('ICategory') == 'Uniforms') { echo 'selected';}?> >Uniforms - 1203</option>
                          <option value="MedicalSupplies" <?php if (set_value('ICategory') == 'MedicalSupplies') { echo 'selected';}?> >Medical Supplies  - 1204</option> 
                          <option value=" Others" <?php if (set_value('ICategory') == ' Others') { echo 'selected';}?> >  Others - 1205</option>
                          <option value="FurnitureOfficeEquipment" <?php if (set_value('ICategory') == 'FurnitureOfficeEquipment') { echo 'selected';}?> >Furniture and Office Equipment - 2102</option>
                          <option value="PlantMachineryEquipment" <?php if (set_value('ICategory') == 'PlantMachineryEquipment') { echo 'selected';}?> >Plant & Machinery and Equipment  - 2103</option>
                          <option value="UNMission" <?php if (set_value('ICategory') == 'UNMission') { echo 'selected';}?> >UN Peace Keeping Mission  - 2509</option>
                       </select>
                          <span class="text-danger"><?= service('validation')->getError('ICategory') ?></span>
                      </div>
                  </div>
               <div class="row mb-3">
                 <label for="PStatus" class="col-sm-6 col-form-label">Priority Status</label>
               
                     <select id="PStatus" class="form-select col-sm-10" name="PStatus">
                         <option value="" selected>...</option>
                         <option value="Urgent" <?php if (set_value('PStatus') == 'ICB') echo 'selected'; ?>>Urgent</option>
                         <option value="Priority" <?php if (set_value('PStatus') == 'Priority') echo 'selected'; ?>>Priority</option>
                         <option value="Normal" <?php if (set_value('PStatus') == 'Normal') echo 'selected'; ?>>Normal</option>
                     </select>
                     <span class="text-danger"><?= service('validation')->getError('PStatus') ?></span>
                 
                 </div>
                  <div class="row mb-3">
                  <label for="BStartTime" class="col-sm-2 col-form-label">Bidding Process Start Time</label>
                  <div class="col-sm-4">
                    <input type="time" class="form-control" id="BStartTime" name="BStartTime">
                      <span class="text-danger"><?= service('validation')->getError('BStartTime') ?></span>
                  </div>
                
                  <label for="BStartDate" class="col-sm-2 col-form-label">Bidding Process Start Date</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="BStartDate" name="BStartDate">
                    <span class="text-danger"><?= service('validation')->getError('BStartDate') ?></span>
                  </div>
                </div>
              <div class="text-center">
                 
                  <button name="action" value="next" type="submit" class="btn btn-outline-primary rounded">Next</button>
                  <button name="action" value="save" type="submit" class="btn btn-outline-primary rounded">Save</button>
                </div>
           <?=form_close()?><!-- End Horizontal Form -->

            </div>
          </div>
    </section>