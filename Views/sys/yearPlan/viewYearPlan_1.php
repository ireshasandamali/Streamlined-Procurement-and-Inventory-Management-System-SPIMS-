<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>Year Procurement Plan</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Reports</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>Year Procurement Plan</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->


        <div class="card">
            <div class="card-header" style="background-color: #7070db; color: white;"> Procurement Plan <?= date('Y') ?>  </div>
            <h5 class="card-title"></h5>

            <div class="table-responsive">
                <table class="table table-sm table-striped table-coler-#b3d9ff  datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Procurement Status</th>
                            <th scope="col">Authority Level</th>
                            <th scope="col">Procurement Type</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Schedule date of Commencement</th>
                            <th scope="col">Schedule date of Completion</th>
                        </tr>

                    </thead>
                    <tbody> 
                        <?php
                        $TotalAllocation = 0;
                        foreach ($list as $key => $result) {
                            $TotalAllocation += $result['Allocation'];
                            ?>
                            <tr>
                                <th></th>
                                <th ><?= $result['Vote'] ?></th><th></th><th></th>
                                <th ><?= $result['Description'] ?></th></th><th></th><th></th></th><th></th><th></th>
                                <th ><?= number_format($result['Allocation'], 2) ?></th>
                            </tr>

                            <?php $j = 1;
                            foreach ($listi as $key => $resulti) { ?>
        <?php if ($result['id'] == $resulti['PId']) { ?>
                                    <tr>
                                        <th scope="row"><?= $j ?> </th>
                                        <td><?= $resulti['ItemName'] ?></td>
                                        <td><?= $resulti['Quantity'] ?></td>
                                        <td style="text-align: right"><?= number_format($resulti['Cost'], 2) ?></td>
                                        <td><?= $resulti['PStatus'] ?> </td>
                                        <td><?= $resulti['Authority'] ?></td>
                                        <td><?= $resulti['PType'] ?></td>
                                        <td><?= $resulti['Progress'] ?></td>
                                        <td><?= $resulti['CommeDate'] ?></td>
                                        <td><?= $resulti['CompleateDate'] ?> </td>
                                    </tr>
                                <?php } ?>
                                <?php
                                $j++;
                            }
                            ?>

                            <?php
                        }
                        ?>
                        <tr>
                            <th colspan="3">Total Allocation</th>
                            <th style="text-align: right"><?= number_format($TotalAllocation, 2) ?></th>
                        </tr>

                    </tbody>
                </table>

            </div>

            </section>
            </main>
