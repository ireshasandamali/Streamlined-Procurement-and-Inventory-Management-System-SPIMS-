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
        <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Create Item Request</h5>
        <hr style="height: 8px; background-color: red; margin-top: 1px;">
        <span class="text-success"><?= @$msg ?></span>

       <div class="card" style="margin-top: 10px;"> 
            <div class="card-body">
                <h5 class="card-title"></h5>
            <!-- First Card -->  
                    <?= form_open('itemrequest/viewItem') ?>                               
        <table class="table">

            <tbody>
                <?php
                $i = 1;
                foreach ($list as $key => $result) {
                    ?>
                    <tr>
                        <th>No</th>    <th scope='row'><?= $i ?></th>
                    </tr>
                    <tr>
                        <th>Description</th> <td><?= $result['Description'] ?></td>
                    </tr>
                    <tr>
                        <th>Item Category</th><td><?= $result['ICategory'] ?></td>
                    </tr>
                    <tr>
                        <th>Purpose</th><td><?= $result['Purpose'] ?></td>
                    </tr>                  
                    <tr>
                        <th>Priority Status</th>  <td><?= $result['PStatus'] ?></td>
                    </tr>
                    <tr>
                        <th>Camp</th>  <td><?= $result['CName'] ?></td>
                    </tr>
                    <tr>
                        <th>Request Date</th> <td><?= $result['ReqDate'] ?></td>

                    </tr>
                    
                     <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Quantity</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                $i = 1;
                                foreach ($listI as $keyI => $resultI) {
                                    ?>
                                <tr>
                                        <th scope="row"><?= $resultI['RItemid'] ?></th>
                                        <td><?= $resultI['Item'] ?></td>
                                        <td><?= $resultI['Qty'] ?></td>


                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    <tr><td></td>
                        <td> <input type="hidden" name="RequestID" value="<?= $result['RequestID'] ?>"><button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="1">Approve</button>          
                            <button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="2">Reject</button>
                        </td>
                    </tr>
 
                    
                    <?php
                    $i++;
                }
                ?>
           
                       
               
            <?= form_close() ?>
            </tbody>
        </table>

                </div>
            </div>
        </div>
    </section>
</main>
