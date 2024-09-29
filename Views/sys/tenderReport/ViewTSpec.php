
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

                    <!-- Table Variants -->
                    <?= form_open('TenderReport/updatespecststatus') ?>     
                    <table class="table">
                        <thead>
                            <?php
                            $i = 1;
                            foreach ($list as $key => $result) {
                                ?>
                                <tr>
                                    <td style="width:30%;"> <strong>Procurement Number </strong> </td>
                                    <th scope="row"><?= $i ?> </th>
                                </tr>
                                <tr>
                                    <td> <strong>Title of the Procurement </strong> </td>
                                    <td><?= $result['Description'] ?></td>
                                </tr>

                                <tr>
                                    <td> <strong>Sub Component </strong> </td>
                                    <td><?= $result['SubComponent'] ?></td>
                                </tr>
                                <tr>
                                    <td> <strong> Detail </strong> </td>
                                    <td><?= $result['Detail'] ?></td>
                                </tr>
                                <tr>
                                    <td> <strong> Priority Status </strong> </td>
                                    <td><?= $result['Detail'] ?></td>
                                </tr>
                                <tr>
                                    <td> <strong> Remarks </strong> </td>
                                    <td><?= $result['Remaks'] ?></td> 
                                </tr>

                                <?php
                                $i++;
                            }
                            ?>

                            </tbody>
                    </table>
                   
                    <!-- End Table Variants -->
                    <input type="hidden" name="specid" value="<?= $result['specid'] ?>"><button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="1">Approve</button>          
                    <button type="submit" class="btn btn-success btn-sm" style="color: white;" name="action" value="2">Reject</button>
                  <?= form_close() ?>
                </div>
            </div>

        </section>
</main>
