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
                <?= form_open('tender/viewreqItem') ?>                               
                <table class="table">

                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($listr as $key => $resultr) {
                            ?>
                            
                            <tr>
                                <th>Description</th> <td><?= $resultr['Description'] ?></td>
                            </tr>
                            
                            <tr>
                                <th>Purpose</th><td><?= $resultr['Purpose'] ?></td>
                            </tr>                  
                            <tr>
                                <th>Priority Status</th>  <td><?= $resultr['PStatus'] ?></td>
                            </tr>
                            <tr>
                                <th>Camp</th>  <td><?= $resultr['CName'] ?></td>
                            </tr>
                            <tr>
                                <th>Request Date</th> <td><?= $resultr['ReqDate'] ?></td>

                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Item</th>
                            <th scope="col">Quantity</th>
                             <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($list as $key => $result) {
                            ?>
                            <tr>
                                <th scope="row"><?= $result['RItemid'] ?></th>
                                <td><?= $result['ItemName'] ?></td>
                                <td><?= $result['Qty'] ?></td>
                                <td><img src="images/uploads/.<?= $result['sample_image'] ?>" alt=""></td>
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
