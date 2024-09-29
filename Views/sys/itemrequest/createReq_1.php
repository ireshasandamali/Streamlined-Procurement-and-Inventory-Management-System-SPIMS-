<main id="main" class="main">
    
    <div class="pagetitle">
      <h1>IPMS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title lead" style="text-align:center">Create Item Request</h2>
                <hr style="height: 3px; background-color: red;">
                 <span class="text-success"><?= @$msg ?></span>
             
        <?=form_open('itemRequest/createReq')?>
        <div class="row mb-3">
                  <label for="Description" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Description" name="Description">
                    <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                  </div>
        </div>
                
        <div class="row mb-3"> 
                      <label for="ICategory" class="col-sm-2 col-form-label">Item Category</label>
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
                  <label for="Purpose" class="col-sm-2 col-form-label">Purpose of request</label>
                  <div class="col-sm-10">
                    <textarea  class="form-control" id="Purpose" name="Purpose" placeholder="Toners for Photocopy machine"></textarea>
                   <span class="text-danger"><?= service('validation')->getError('Purpose') ?></span>
                  </div>
                </div>
                 
                 <div class="row mb-3">
                 <label for="PStatus" class="col-sm-2 col-form-label">Priority Status</label>
                 <div class="col-sm-10">
                     <select id="PStatus" class="form-select" name="PStatus">
                         <option value="" selected>...</option>
                         <option value="Urgent" <?php if (set_value('PStatus') == 'ICB') echo 'selected'; ?>>Urgent</option>
                         <option value="Priority" <?php if (set_value('PStatus') == 'Priority') echo 'selected'; ?>>Priority</option>
                         <option value="Normal" <?php if (set_value('PStatus') == 'Normal') echo 'selected'; ?>>Normal</option>
                     </select>
                     <span class="text-danger"><?= service('validation')->getError('PStatus') ?></span>
                 </div>
                 </div>
       <div class="row mb-3">
          
                  <label for="Item" class="col-sm-2 col-form-label">Request Item</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Item" name="Item">
                    <span class="text-danger"><?= service('validation')->getError('Item') ?></span>
                  </div>
                  <label for="Qty" class="col-sm-2 col-form-label">Request Quantity</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Qty" name="Qty">
                    <span class="text-danger"><?= service('validation')->getError('Qty') ?></span>
                  </div>
       </div>
                   <div class="row mb-3">
                  <label for="" class="col-sm-2 control-label"> </label>
                        <div class="col-sm-4">
                            <button class="btn btn-primary add_new_item"> <i class="bi bi-plus-square" aria-hidden="true"></i> <a href="<?= site_url('vote/add') ?>" style="color: black;">Add Item</a></button>
                        </div>
                   
       </div>
         <!-- <div class="row mb-3">
                <label for="Item" class="col-sm-2 col-form-label">Request Item</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Item" name="Item">
                    <span class="text-danger"><?= service('validation')->getError('Item') ?></span>
                  </div>
                
        </div>-->
        
         <div class="row mb-3"> 
             <label for="CName" class="col-sm-2 col-form-label">Camp</label>
             <div class="col-sm-4">

                 <select id="CName" class="form-select" name="CName">
                          <option value="" selected="">...</option>
                        <?php foreach ($camp_list as $key=>$result){ ?>
                            <option value="<?= $result['CName']?>"><?=$result['CName']?></option>
                        <?php }?>
                      </select>
                 <span class="text-danger"><?= service('validation')->getError('CName')?></span>
             </div>
             <label for="ReqDate" class="col-sm-2 col-form-label">Request Date</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="ReqDate" name="ReqDate">
                    <span class="text-danger"><?= service('validation')->getError('ReqDate') ?></span>
                  </div>
         </div>
                
                
                
        <div class="text-center">
                  <button type="submit" class="btn btn-outline-primary rounded">Create</button>
                  <button type="save" class="btn btn-outline-primary rounded">Cancel</button>
        </div>
            
        </div>
    </div>          
                
        <?=form_close()?>
    </section>
</main>
<figcaption>
                    <h1> About the <span>  e-GP System</span></h1>
                    <div>
                        <p>Integrating ICT into Public Procurement Process</p>
                    </div>
                    <a href="?p=front_cont&amp;a=about_b1">View more</a>
                </figcaption>

figure figcaption