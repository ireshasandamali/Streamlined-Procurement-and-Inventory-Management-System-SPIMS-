<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="container" style=" background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px;  border-radius: 10px;">        
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                <ol class="breadcrumb">
                    <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                    <li class="breadcrumb-item"><a href="index.html">Procurement Plan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Procurement Plan</li>
                </ol>
            </nav>    
        </div><!-- End Page Title -->

        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Procurement Plan</div>
            <div class="card-body">
                <h5 class="card-title"></h5>           
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border: 2px solid  #ccd9ff; border-radius: 0;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <!-- Multi Columns Form -->
                <?= form_open('procurementPlan/updateProcurementPlanstatus') ?>
                
            <div class="row mb-4">
                    <label for="Year" class="col-sm-2 col-form-label">Year</label>
                    <div class="col-sm-10">
                        <select  class="form-control" id="Year" name="Year">
                            <option value="">--</option>
                            <?php
                            $cyear = date('Y');

                            for ($i = 2023; $i <= 2030; $i++) {
                                ?>
                                <option value="<?= $i ?>" <?php
                                if ($i == $cyear) {
                                    echo 'selected';
                                }
                                ?>><?= $i ?></option>
                                    <?php } ?>
                        </select>
                        <span class="text-danger"><?= service('validation')->getError('Year') ?></span>
                    </div>
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
              <h5 class="card-title"></h5>
              <!-- Table Variants -->
              <table class="table">
                <thead style="text-align: center; vertical-align: middle;">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Year</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Description</th>
                    <th scope="col">Allocation</th>
                    <th colspan="3" style="text-align: center;">Action</th>  
                  </tr>
                  
                  
                </thead>
                <tbody  style="vertical-align: middle;">
                    <?php
                    $i=1;
                    foreach ($list as $key=>$result){ 
                        $disabled = null;
                        ?>
                  <tr>
                    <th scope="row"><?= $i?> </th>
                    <td><?= $result['Year'] ?> </td>
                    <td><?= $result['Vote'] ?> </td> 
                    <td><?= $result['Description'] ?> </td> 
                    <td><?= $result['Allocation'] ?> </td> 
                    <td>
                            <?php
                            //this change later
                            if ($result['Status'] == '1') {
                                $disabled = 'disabled';
                            }
                            ?>

                            <a href="<?= site_url('ProcurementItem/add/' . $result['id']) ?>"> <button class="btn btn-primary <?= $disabled ?>" type="button">Add Item</button></a>
                        </td>  
                    <td><a href="<?= site_url('ProcurementItem/viewItem/'.$result['id']) ?>"><button type="button" class="btn btn-success" style="color: black;">View Item</button></a></td>
                    <td>
                                                    <?php if ($result['Status'] == '0') {
                                                        ?>
                                                        <a href="<?= site_url('ProcurementItem/viewItem/' . $result['id']) ?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Processing</button></a>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php if ($result['Status'] == '1') {
                                                        ?>
                                                        <a href="<?= site_url('ProcurementItem/viewItem/' . $result['id']) ?>"><button type="button" class="btn btn-success btn-sm" style="color: white;" >Approved</button></a>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php if ($result['Status'] == '2') {
                                                        ?>
                                                        <a href="<?= site_url('ProcurementItem/viewItem/' . $result['id']) ?>"><button type="button" class="btn btn-warning btn-sm" style="color: white;">Reject </button></a>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
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
