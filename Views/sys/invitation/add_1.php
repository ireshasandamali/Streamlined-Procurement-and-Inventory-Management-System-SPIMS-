<main id="main" class="main">
    <div class="pagetitle">
        <h1>SPIMS</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">invitation for BID</a></li>
                <li class="breadcrumb-item active">Create IFB</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">INVITATION FOR BID</h5>

                <!-- Multi Columns Form -->
                <?= form_open('invitation/add') ?>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="PNumber" class="form-label">Procurement No</label>
                        <input type="text" class="form-control" id="PNumber" name="PNumber" value="<?= set_value('LastName') ?>">
                        <span class="text-danger"><?= service('validation')->getError('FirstName') ?></span>
                    </div>
                    
                    
                     <div class="col-md-6">
                    <label for="PNumber" class="form-label">Procurement No</label>
                        <select id="Designation" class="form-select" name="Designation" >
                           <option selected="">...</option>
                           
                            
                           <option value="<?= $PNumber ?>">STF/LOG/C/<?= $PNumber ?></option>
                        </select>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <label for="Description" class="form-label">Description of Items</label>
                        <input type="text" class="form-control" id="Description" name="Description">
                        <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="Qty" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="Qty" name="Qty">
                        <span class="text-danger"> <?= service('validation')->getError('Qty') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="DCharges" class="form-label">Document Charges</label>
                        <input type="text" class="form-control" id="DCharges" name="DCharges">
                        <span class="text-danger"> <?= service('validation')->getError('DCharges') ?></span>
                    </div>
                    <div class="col-12">
                        <label for="BSecurity" class="form-label">Value of Bid Security</label>
                        <input type="text" class="form-control" id="BSecurity" name="BSecurity">
                        <span class="text-danger"> <?= service('validation')->getError('BSecurity') ?></span>
                    </div>
                   <div class="col-12">
                       <label for="IFBid" class="form-label">Invitation for BID id Number</label>
                       <input type="text" class="form-control" name="IFBId" id="IFBId" value="<?=$IFBId ?>">
                   </div>

                    <div class="text-center">
                        
                        <button type="submit" class="btn btn-outline-primary rounded-0">Submit</button>
                        <button type="reset" class="btn btn-outline-primary rounded-0">Reset</button>
                    </div>
                </div><!-- End Multi Columns Form -->
                <?= form_close() ?>

            </div>
        </div>

    </section>
</main>