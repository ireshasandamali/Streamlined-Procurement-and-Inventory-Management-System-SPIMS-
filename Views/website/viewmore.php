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
        <div class="card" style="margin-top: 5px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Item Request</div>
            <div class="card-body">
                <h5 class="card-title"></h5> 

                <!-- First Card -->  
                <?= form_open('web/viewmore') ?>                               
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">BID ID</th>                    
                    <th scope="col">BID Validation Period</th>
                    <th scope="col">BID Opening Date</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    foreach ($list as $key=>$result){ ?>
                  <tr>
                    <th scope="row"><?= $i?> </th>                 
                    <td><?= $result['BStart'] ?> To  <?= $result['BEnd'] ?></td>
                    <td><?= $result['BOpen'] ?></td>
                    <td><a href="<?= site_url('Invitation/add/'.$result['id']) ?>"><button class="btn btn-warning">Add Item</button></a></td>
                    <td><a href="<?= site_url('Invitation/view/'.$result['id']) ?>"><button type="button" class="btn btn-success" style="color: black;">View Item</button></a></td>

                        
                  </tr>
                    <?php
                    $i++;}
                    ?>
                  
                </tbody>
              </table>
                <!-- invitation table--> 
                 <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">Procurement Number</th>
                    <th scope="col">Document Charges</th>
                    <th scope="col">Bid Security</th>
                    <th scope="col">BID ID</th>
                    
                  </tr>
                </thead>
                <tbody>
                        <?php
                        $i = 1;
                        foreach ($listi as $key => $resulti) {
                            ?>
                            <tr>
                                <th scope="row"><?= $resulti['id'] ?></th>
                                <td>STF/LOG/C<?= $result['TId'] ?></td>
                                <td><?= $result['DCharges'] ?></td>
                                <td><?= $result['BSecurity'] ?></td>
                                <td><?= $result['IFBId'] ?> </td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>


                <?= form_close() ?>

            </div>
        </div>
        </div>
    </section>
</main>
