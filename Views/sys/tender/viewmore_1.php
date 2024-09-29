
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">            
                <ol class="breadcrumb">
                    <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWFJREFUSEvd1b1LHFEUxuFnEbERlRRBBCGklSj+AWlD1CaQOkUs/CgEBUklJpLaIo2FISBiLQQiKYJtilSCQREFJWBhpbYRE2dgdplcZu/uZt1mbzmc9/2dj3vPlLT4lFrsr/0BXXiJ5xjBI/zFGfbwFdu4qdbqWIvGsJaZxkZ1ghnsFgVVA7xLMn3bwAX4gzdYDTVFgBUsN2CeD53Hh/yHEDCBL/9pnsrSSp7ie9kjD+jGMfobAFzgM6ZymiM8KQ8+D5jNhlqv/xaW8CPRPQxELzLwPw9tJwker8M9zfp1dkU38apA87FcVb6CcwzUAGxgAVeIzSt9I6OpVx7wG50RwPvc7erFQSShSzwIAdfoiQAqfcUnTEZiU6++EPATQxHRIRaztTFXo5X7yQoZDgG1sqpj/pWQdUyHgHShpcvrPs4zfAsBHThN+jvYJOEXHuM2BDTpWyxv/z9a021reYvuAJ89NxlfzVfAAAAAAElFTkSuQmCC"/>
                    <li class="breadcrumb-item"><a href="index.html">Procurement Notice </a></li>
                    <li class="breadcrumb-item active">BID Reference </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->     
    </head>

    <body>
        <section class="section dashboard">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"> Primary Details</h3>

                    <div class="box-tools pull-right">

                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <?= form_open('TenderReport/updatespecststatus') ?>  
                    <table class="table table-striped  ">
                        <tbody>
                            <?php
                            foreach ($list as $key => $result) {
                                ?>
                                <tr>
                                    <td style="width:30%;"> <strong>Procurement Number </strong> </td>
                                    <td> STF/LOG/C/<?= $result['Tenderid'] ?> </td>
                                </tr>
                                <tr>
                                    <td> <strong>Title of the Procurement </strong> </td>
                                    <td> <?= $result['Description'] ?> </td>
                                </tr>
                                <tr>
                                    <td> <strong>Procurement Type </strong> </td>
                                    <td> <?= $result['PType'] ?></td>
                                </tr>
                                <tr>
                                    <td> <strong> Vote </strong> </td>
                                    <td><?= $result['ICategory'] ?></td>
                                </tr>
                                <tr>
                                    <td> <strong> Bidding Process Start Date &amp; Time </strong> </td>
                                    <td> <?= $result['BStartDate'] ?> <?= "Time" ?> <?= $result['BStartTime'] ?> </td>
                                </tr>           
                                <tr>
                                    <td> <strong>Bid Opening Date &amp; Time </strong> </td>
                                    <td> 2023-12-01 15:00:00 </td>
                                </tr>
                                <tr>
                                    <td> <strong>Bid Closing Date &amp; Time </strong> </td>
                                    <td> 2023-12-01 14:00:00 </td>
                                </tr>
                                <tr>
                                    <td> <strong> Procurement Method </strong> </td>
                                    <td> Request for Quotations / Shopping </td>
                                </tr>
                                <tr>
                                    <td> <strong> Funding </strong> </td>
                                    <td> Local </td>
                                </tr>
                                <tr>
                                    <td> <strong> Geographic Location (for the delivery of goods, Works to be executed, Services to be
                                            provided) </strong> </td>
                                    <td> Panadura </td>
                                </tr>
                                <tr>
                                    <td> <strong> A brief description </strong> </td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td> <strong> Emergency </strong> </td>
                                    <td> No </td>
                                </tr>
                                <?php
                                break;
                            }
                            ?>

                        </tbody>
                    </table>

                </div>

                <!-- Table Variants -->
                <table class="table">
                    <thead style="text-align: center; vertical-align: middle;">
                        <tr>    
                            <th scope="col">Item ID</th>
                            <th scope="col">Item</th>
                            <th scope="col">Quantity</th>

                        </tr>
                    </thead>
                    <tbody  style="text-align: center; vertical-align: middle;">
                        <?php
                        $i = 1;
                        foreach ($listi as $key => $resulti) {
                            ?>
                            <tr>
                                <th scope="row"><?= $i ?> </th>
                                <td><?= $resulti['Item'] ?> </td>                   
                                <td><?= $resulti['Qty'] ?></td>

                            </tr>
                            <?php
                            $i++;
                        }
                        ?>

                    </tbody>
                </table>
                <!-- End Table Variants -->

                <table class="table table-bordered border-primary">
                    <thead style="text-align: center; vertical-align: middle;">

                        <tr>

                            <th scope="col">Reports</th>
                            <th scope="col">Status</th>
                            <th scope="col">Approved Date</th>
                            <th scope="col">Remarks</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($list as $key => $result) {
                            ?>
                            <tr>
                                <td>
                                    <a href="<?= site_url('TenderReport/viewTspec/' . $result['Tenderid']) ?>">
                                        <button type="button" class="btn btn-warning btn-sm" style="color: black;">Specification</button>
                                    </a>
                                    <a href="<?= site_url('tender/prizeSchedule/' . $result['Tenderid']) ?>"><button type="button" class="btn btn-success btn-sm" style="color: black; margin-left: 5px;">Prize List</button></a>
                                <td>
                                    <?php if ($result['Status'] == '0') {
                                        ?>
                                        <a href="<?= site_url('TenderReport/viewTspec/' . $result['specid']) ?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Processing</button></a>
                                        <?php
                                    }
                                    ?>
                                    <?php if ($result['Status'] == '1') {
                                        ?>
                                        <a href="<?= site_url('TenderReport/viewTspec/' . $result['specid']) ?>"><button type="button" class="btn btn-success btn-sm" style="color: white;" >Approved</button></a>
                                        <?php
                                    }
                                    ?>
                                    <?php if ($result['Status'] == '2') {
                                        ?>
                                        <a href="<?= site_url('TenderReport/viewTspec/' . $result['specid']) ?>"><button type="button" class="btn btn-warning btn-sm" style="color: white;">Reject </button></a>
                                        <?php
                                    }
                                    ?>
                                </td>

                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td><a href="<?= site_url('tender/createcostestimate/' . $result['Tenderid']) ?>"><button type="button" class="btn btn-success btn-sm" style="color: black;">Cost Estimate</button></a></td>
                                <td>
                                    <select id="status" class="form-select" name="status">
                                        <option value="" selected="">...</option>
                                        <option value="approved" <?php
                                        if (set_value('status') == 'approved') {
                                            echo 'selected';
                                        }
                                        ?> > approved</option>
                                        <option value="Rejected" <?php
                                        if (set_value('status') == 'Rejected') {
                                            echo 'selected';
                                        }
                                        ?> > Rejected</option>                
                                </td>                    
                                <td></td>                        
                                <td></td>

                            </tr>
    <?php
    $i++;
}
?>
                    </tbody>
                </table>
                 <?= form_close() ?>
                <!-- End of the Status table -->
            </div>
            </div>
            </div>
            </div>
        </section>
</main>
