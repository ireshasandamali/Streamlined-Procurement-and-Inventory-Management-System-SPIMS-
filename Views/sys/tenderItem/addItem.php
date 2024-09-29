<<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Add Item</a></li>
                 
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <div class="card" style="border: 2px solid #CCCCFF;">
            <div class="card-body">
                <h5 class="card-title"  style="text-align:center">Tender Item</h5>
                <hr style="height: 3px; background-color: red;">
                <span class="text-success"><?= @$msg ?></span>
                <?= form_open('vote/add') ?>

                <div class="row mb-4">
                    <div class="row mb-3">
                        <label for="TItem" class="col-sm-2 col-form-label">Item Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="TItem" name="TItem">
                            <span class="text-danger"><?= service('validation')->getError('TItem') ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="quantity" name="quantity">
                            <span class="text-danger"><?= service('validation')->getError('quantity') ?></span>
                        </div>

                        <!--<div class="text-center col-sm-4 ">
                              <button type="submit" class="btn btn-outline-primary rounded-0">Submit</button>
                           
                        </div>-->
                    </div>
                     <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary rounded-0">Save</button>
                        <button type="reset" class="btn btn-outline-primary rounded-0">Reset</button>
                    </div>

                    <?= form_close() ?><!-- End Horizontal Form -->

                </div>
            </div>
    </section>
</main>
