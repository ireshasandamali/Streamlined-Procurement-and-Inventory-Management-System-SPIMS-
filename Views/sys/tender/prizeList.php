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
        <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Prize List</h5>
        <hr style="height: 8px; background-color: red; margin-top: 1px;">
        <span class="text-success"><?= @$msg ?></span>

       <div class="card" style="margin-top: 10px;"> 
            <div class="card-body">
                <h5 class="card-title"></h5>
                <?= form_open('tender/createcostestimate') ?>

                <div class="row mb-3">
                    <label for="TId" class="col-sm-2 form-label">Tender Id Number</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="TenderId" id="TenderId" value="STF/LOG/C/<?= $Tender_details['Tenderid'] ?>">
                        <input type="hidden" class="form-control" name="TId" id="TId" value="<?= $Tender_details['Tenderid'] ?>">
                        <span class="text-danger"><?= service('validation')->getError('Item') ?></span>
                    </div>
                    <label for="TName" class="col-sm-2 form-label">Tender Name</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="TName" id="TName" value="<?= $Tender_details['Description'] ?>">
                        <span class="text-danger"><?= service('validation')->getError('Qty') ?></span>
                    </div>

                </div>

                <div class="row mb-3">
                    <label for="Item" class="col-sm-4 form-label">Item List</label>
                    <label for="Qty" class="col-sm-4 form-label">Quantity</label>
                    <label for="UCost" class="col-sm-4 form-label">Unit Prize</label>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-4">
                        <select id="Item" class="form-select" name="Item" onchange="loadQuantity(this.value)">
                            <option value="" selected="">...</option>
                            <?php foreach ($TItem_details as $key => $result) { ?>
                                <option value="<?= $result['TItemid'] ?>"><?= $result['Item'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="text-danger"><?= service('validation')->getError('Item') ?></span>
                    </div>

                    <!--get Quantity from onchange-->   
                    <div class="col-sm-4 ">                           
                        <input type="text" class="form-control" id="result" name="Qty" >
                    </div>              

                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="UCost" name="UCost" >
                        <span class="text-danger"><?= service('validation')->getError('UCost') ?></span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="OtherCost" class="col-6 form-label">Other Cost</label>

                    <label for="Cost_1" class="col-6 form-label">Amount</label>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description[]" name="Description" >
                        <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Amount" name="Amount" >
                        <span class="text-danger"><?= service('validation')->getError('Amount') ?></span>
                    </div>
                </div>

               <!-- <div class="row mb-3">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description[]" name="Description[]" >
                        <span class="text-danger"><?= service('validation')->getError('Description[]') ?></span>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Amount[]" name="Amount[]" >
                        <span class="text-danger"><?= service('validation')->getError('Amount[]') ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description[]" name="Description[]" >
                        <span class="text-danger"><?= service('validation')->getError('Description[]') ?></span>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Amount[]" name="Amount[]" >
                        <span class="text-danger"><?= service('validation')->getError('Amount[]') ?></span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description[]" name="Description[]" >
                        <span class="text-danger"><?= service('validation')->getError('Description[]') ?></span>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Amount[]" name="Amount[]" >
                        <span class="text-danger"><?= service('validation')->getError('Amount[]') ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description[]" name="Description[]" >
                        <span class="text-danger"><?= service('validation')->getError('Description[]') ?></span>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Amount[]" name="Amount[]" >
                        <span class="text-danger"><?= service('validation')->getError('Amount[]') ?></span>
                    </div>
                </div>-->
                <div class="row mb-3">
                    <label for="vat" class="col-sm-2 form-label">VAT/TAX Rate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="vat" id="vat">
                        <span class="text-danger"><?= service('validation')->getError('vat') ?></span>
                    </div>
                </div>
                </div>

            <div class="row mb-3">
                <div class="text-center">                       
                    <!--<input type="hidden" name="EID" id="EID" value="<?= $EID ?>">-->
                    <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                    <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                </div>
            </div>

<!-- display Table-->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cost Estimate</h5>
                <!-- Table Variants -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Estimate ID</th>
                             <th scope="col">Item</th>
                             <th scope="col">Quantity</th>
                             <th scope="col">Unit Prize</th>
                             <th scope="col">VAT</th>
                             <th scope="col">Total Prize</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        foreach ($list as $key => $result) {
                        ?>
                        <tr>
                            <th scope="row"><?= $i ?> </th>
                             <td><?= $result['IId'] ?></td>
                             <td><?= $result['Qty'] ?></td>
                             <td><?= $result['UCost'] ?></td>
                             <td><?= $result['vat'] ?></td>
                             <td><?= $result['Total_Cost'] ?></td>
                             
                            
                        </tr>
                        <?php 
                         $i++;
                        }?>
                        
                    </tbody>
                      </table>
                <!-- Other Cost Table -->
                 <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Description</th>
                             <th scope="col">Other Cost</th>                                                       
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $j = 1;
                        foreach ($listO as $key => $result) {
                        ?>
                        <tr>                        
                             <td><?= $result['Description'] ?></td>
                             <td><?= $result['Amount'] ?></td>   
                        </tr>
                        <?php 
                         $j++;
                        }?>
                        
                    </tbody>
                      </table>
        
         </div>
        </div>
             
              
            <?= form_close() ?>

        </div>
        </div>

    </section>
</main>
<script>
    function  loadQuantity(Iid) {
        var formData = "ItemId=" + Iid + "&";
        alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('tender/getQuantity') ?>',
            data: formData,
            success: function (response) {
                $("#result").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });


    }



</script>