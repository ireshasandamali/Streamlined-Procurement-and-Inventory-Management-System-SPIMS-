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
        <div class="card" style="border: 2px solid #000066;">
            <div class="card-body">
                <div class="text-center">
                    <h5 class="card-title">Cost Estimate</h5>
                </div>
                <span class="text-success"><?= @$msg ?></span>
                <?= form_open('tender/tenderdetails') ?>
  </table>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Qty</th>
                            <th>Unit Cost</th>
                            <th>Other Cost</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($TItem_details as $key => $result) {
                            ?>
                            <tr>
                                <td><?= $result['Item'] ?></td>
                                <td><?= $result['Qty'] ?></td>
                                <td> <input type="text" class="form-control" id="UCost" name="UCost"></td>
                                <td><input type="text" class="form-control" id="OtherCost" name="OtherCost"></td>
                                <td><input type="text" class="form-control" id="TCost" name="TCost"></td>                                
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table
                
                
                <?= form_close() ?>

            </div>
        </div>

    </section>
</main>