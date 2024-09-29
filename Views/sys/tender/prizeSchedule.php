<main id="main" class="main">

    <div class="pagetitle" style="  background: linear-gradient(to bottom, #0066ff 0%, #ccffff 100%); padding: 10px;  border-radius: 10px;">
         <h1>Dashboard</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">            
            <ol class="breadcrumb">
                <li><a class="nav-link scrollto active" href="#hero"><li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/></li>Dashboard</a></li>
               <li class="breadcrumb-item active">Tender</li>
                <li class="breadcrumb-item active"><a href="<?= site_url('tender/view') ?>">View Tender</a></li>
                <li class="breadcrumb-item active"><a href="<?= site_url('tender/viewmore') ?>">View More</a></li>
                <li class="breadcrumb-item active">Prize List</li>
                    
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">   
                <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Price List </div>
            <div class="card-body">
                <h5 class="card-title"></h5>  

                <?= form_open('tender/prizeSchedule') ?>

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
                    <label for="Item" class="col-sm-6 form-label">Item List</label>
                    <label for="Qty" class="col-sm-6 form-label">Quantity</label>
                   
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <select id="Item" class="form-select" name="Item" onchange="loadQuantity(this.value)">
                            <option value="" selected="">...</option>
                            <?php foreach ($TItem_details as $key => $result) { ?>
                                <option value="<?= $result['TItemid'] ?>"><?= $result['Item'] ?></option>
                            <?php } ?>
                        </select>
                        <span class="text-danger"><?= service('validation')->getError('Item') ?></span>
                    </div>

                    <!--get Quantity from onchange-->   
                    <div class="col-sm-6 ">                           
                        <input type="text" class="form-control" id="result" name="Qty" >
                    </div>              

                    
                </div>
                 <div class="row mb-3">
                    <label for="OtherCost" class="col-6 form-label">Make & Model</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description_1" name="Description_1" >
                        <span class="text-danger"><?= service('validation')->getError('Description_1') ?></span>
                    </div>
                    </div>
                <div class="row mb-3">
                    <label for="OtherCost" class="col-6 form-label">Country of  Manufacture</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description_2" name="Description_2" >
                        <span class="text-danger"><?= service('validation')->getError('Description_2') ?></span>
                    </div>
                    </div>
                <div class="row mb-3">
                    <label for="OtherCost" class="col-6 form-label">Manufactured Year</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description_3" name="Description_3" >
                        <span class="text-danger"><?= service('validation')->getError('Description_3') ?></span>
                    </div>
                    </div>
                <div class="row mb-3">
                    <label for="OtherCost" class="col-6 form-label">Warranty Period</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="Warranty" name="Warranty" >
                        <span class="text-danger"><?= service('validation')->getError('Warranty') ?></span>
                    </div>
                    </div>
                
                <div class="row mb-3">
                    <label for="OtherCost" class="col-6 form-label">Sample</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="Description_4" name="Description_4" >
                        <span class="text-danger"><?= service('validation')->getError('Description_4') ?></span>
                    </div>
                    </div>
                <div class="row mb-3">
                    <label for="OtherCost" class="col-6 form-label">Unit Prize</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="UCost" name="UCost" >
                        <span class="text-danger"><?= service('validation')->getError('UCost') ?></span>
                    </div>
                    </div>              
                <div class="row mb-3">
                    <label for="vat" class="col-sm-6 form-label">VAT/TAX Rate</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="vat" id="vat">
                        <span class="text-danger"><?= service('validation')->getError('vat') ?></span>
                    </div>
                </div>
                </div>

            <div class="row mb-3">
                <div class="text-center">                       
                    <!--<input type="hidden" name="EID" id="EID" value="<?= $TId ?>">-->
                    <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                    <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                </div>
            </div>
            
            
             <div class="card">
            <div class="card-body">
                <h5 class="card-title">Prize Schedule</h5>
                <!-- Table Variants -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Schedule ID</th>
                             <th scope="col">Item</th>
                             <th scope="col">Quantity</th>
                             <th scope="col">Make & Model</th>
                             <th scope="col">Country of  Manufacture</th>
                             <th scope="col">Manufactured Year</th>
                             <th scope="col">Warranty Period</th>
                             <th scope="col">Sample</th>
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
                             <td><?= $result['Description_1'] ?></td>
                             <td><?= $result['Description_2'] ?></td>
                             <td><?= $result['Description_3'] ?></td>
                             <td><?= $result['Warranty'] ?></td>
                             <td><?= $result['Description_4'] ?></td>
                             <td><?= $result['UCost'] ?></td>
                             <td><?= $result['vat'] ?></td>
                             <td><?= $result['Total_Cost'] ?></td>
                             
                            
                        </tr>
                        <?php 
                         $i++;
                        }?>
                        
                    </tbody>
                      </table>

            <?= form_close() ?>

        </div>
        </div>

    </section>
</main>
<script>
    function  loadQuantity(Iid) {
        var formData = "ItemId=" + Iid + "&";
        //alert(formData);
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