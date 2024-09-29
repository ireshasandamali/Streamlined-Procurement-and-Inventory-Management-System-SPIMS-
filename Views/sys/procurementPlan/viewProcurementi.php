<main id="main" class="main">

    <div class="pagetitle">
       <h1>Dashboard</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">            
            <ol class="breadcrumb">
               <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWFJREFUSEvd1b1LHFEUxuFnEbERlRRBBCGklSj+AWlD1CaQOkUs/CgEBUklJpLaIo2FISBiLQQiKYJtilSCQREFJWBhpbYRE2dgdplcZu/uZt1mbzmc9/2dj3vPlLT4lFrsr/0BXXiJ5xjBI/zFGfbwFdu4qdbqWIvGsJaZxkZ1ghnsFgVVA7xLMn3bwAX4gzdYDTVFgBUsN2CeD53Hh/yHEDCBL/9pnsrSSp7ie9kjD+jGMfobAFzgM6ZymiM8KQ8+D5jNhlqv/xaW8CPRPQxELzLwPw9tJwker8M9zfp1dkU38apA87FcVb6CcwzUAGxgAVeIzSt9I6OpVx7wG50RwPvc7erFQSShSzwIAdfoiQAqfcUnTEZiU6++EPATQxHRIRaztTFXo5X7yQoZDgG1sqpj/pWQdUyHgHShpcvrPs4zfAsBHThN+jvYJOEXHuM2BDTpWyxv/z9a021reYvuAJ89NxlfzVfAAAAAAElFTkSuQmCC"/>
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">   
         <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Procurement Plan</div>
            <div class="card-body">
                <h5 class="card-title"></h5>        
              <?=form_open('procurementPlan/viewProcurementi')?>
             
              <div class="row mb-3"> 
                      <label for="Vote" class="col-sm-2 col-form-label">Vote</label>
                      <div class="col-sm-10">
                      <select id="Vote" class="form-select" name="Vote">
                          <option selected="">...</option>
                          <option value="1203" <?php if (set_value('Vote') == '1203') { echo 'selected';}?> > 1203</option>
                          <option value="1204" <?php if (set_value('Vote') == '1204') { echo 'selected';}?> >1204</option>
                          <option value="1205" <?php if (set_value('Vote') == '1205') { echo 'selected';}?> >1205</option>
                          <option value="2102" <?php if (set_value('Vote') == '2102') { echo 'selected';}?> >2102</option> 
                           <option value="2103" <?php if (set_value('Vote') == '2103') { echo 'selected';}?> >2103</option>
                          <option value="2509" <?php if (set_value('Vote') == '2509') { echo 'selected';}?> >2509</option> 
                           
                          <option value="Colombo" <?php if (set_value('District') == 'Colombo') { echo 'selected';}?>  >Colombo</option>
                      </select>
                       <span class="text-danger"><?= service('validation')->getError('Vote') ?></span>
                      </div>
               </div> 
                  
               <div class="row mb-3"> 
                      <label for="ICategory" class="col-sm-2 col-form-label">Item Category</label>
                      <div class="col-sm-10">
                      <select id="ICategory" class="form-select" name="ICategory">
                          <option selected="">...</option>
                          <option value="Stationery"<?php if (set_value('ICategory') == 'Stationery') { echo 'selected';}?> > Stationery </option>
                          <option value="Uniforms"<?php if (set_value('ICategory') == 'Uniforms') { echo 'selected';}?> >Uniforms </option>
                          <option value="MedicalSupplies"<?php if (set_value('ICategory') == 'MedicalSupplies') { echo 'selected';}?>>Medical Supplies  </option> 
                          <option value=" Others"<?php if (set_value('ICategory') == ' Others') { echo 'selected';}?> >  Others - 1205</option>
                          <option value="FurnitureOfficeEquipment"<?php if (set_value('ICategory') == 'FurnitureOfficeEquipment') { echo 'selected';}?> >Furniture and Office Equipment </option>
                          <option value="PlantMachineryEquipment"<?php if (set_value('ICategory') == 'PlantMachineryEquipment') { echo 'selected';}?> >Plant & Machinery and Equipment </option>
                          <option value="UNMission"<?php if (set_value('ICategory') == 'UNMission') { echo 'selected';}?> >UN Peace Keeping Mission  - 2509</option>
                      </select>
                      </div>
                  </div>
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
                         <option value="STF" <?php if (set_value('Authority') == 'STF') echo 'selected'; ?>>STF</option>
                         <option value="PC" <?php if (set_value('Authority') == 'PC') echo 'selected'; ?>>PC</option>
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
                  <button type="submit" class="btn btn-outline-primary rounded-0">Create</button>
                  <button type="save" class="btn btn-outline-primary rounded-0">Save</button>
                </div>
           <?=form_close()?><!-- End Horizontal Form -->

            </div>
          </div>
    </section>