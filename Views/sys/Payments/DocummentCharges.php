<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW EMPLOYEE</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Employee</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->
    
        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Document Paid Company List</div>
            <div class="card-body">

                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <?= form_open_multipart('Payments/DocummentCharges') ?>
                              
                                <!-- End Multi Columns Form -->
                           
         <!-- Table Variants -->
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                       
                    <div class="table-responsive">

                            <table id="DChargesTable" class="table table-striped thead-light datatable">
                            <thead style="text-align: center; vertical-align: middle; border-bottom: 2px solid #001a66; border-top:  2px solid #001a66">
                                        <tr>
                                            <th scope="col">Con. Number</th>
                                            <th scope="col">Procurement Number</th>
                                            <th scope="col">Title of the Procurement</th>
                                            <th scope="col">Document Charges</th>
                                            <th scope="col" class="col">Company Name</th> 
                                            <th scope="col" class="col">Payment Receipt</th>
                                            <th>Status</th>
                                                        
                                        </tr>
                                    </thead>
                                    <tbody  style="vertical-align: middle;">
                                        <?php
                                        $i = 1;
                                        foreach ($listP as $key => $resultP) {
                                            ?>
                                            <tr>
                                                <td><?= $i ?> </td>
                                                <td>STF/LOG/C/<?= $resultP['TenderId'] ?>/<?= substr($resultP['BStartDate'],0,4) ?> </td>
                                                <td><?= $resultP['Description'] ?> </td>
                                                <td><?= $resultP['DCharges'] ?></td>
                                                <td><?= $resultP['CompanyName'] ?></td>
                                                <td>
                                                        <a class="btn btn-primary btn-sm" href="<?= site_url('public/images/uploads/' . $resultP['payment_receipt']) ?>" target="_blank">
                                                            View Receipt
                                                        </a>
                                                    </td>
                                                    <td>

                                                            <?php if ($resultP['is_verified'] == '0') {
                                                                ?>
                                                                <a href="<?= site_url('Payments/DocummentCharges/' . $resultP['docid']) ?>"><button type="button" class="btn btn-primary btn-sm" style="color: white;">Processing</button></a>
                                                                <?php
                                                            }
                                                            ?>
                                                            <?php if ($resultP['is_verified'] == '1') {
                                                                ?>
                                                                <a href="<?= site_url('Payments/DocummentCharges/' . $resultP['docid']) ?>"><button type="button" class="btn btn-success btn-sm" style="color: white;" >Document Issued</button></a>
                                                                <?php
                                                            }
                                                            ?>
                                                            <?php if ($resultP['is_verified'] == '2') {
                                                                ?>
                                                                <a href="<?= site_url('Payments/DocummentCharges/' . $resultP['docid']) ?>"><button type="button" class="btn btn-warning btn-sm" style="color: white;">Reject </button></a>
                                                                <?php
                                                            }
                                                            ?>
                                                    </td>            
                                            </tr>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                            </tbody>
                </table>                            
                    </div>
                        
                </div>
            </div>
        </div>
 
  <?= form_close() ?> 
</main>

<script>
    function changeEntries(entries) {
        // Get all table rows
        var rows = document.querySelectorAll('#DChargesTable tbody tr');

        // Hide all rows
        rows.forEach(row => {
            row.style.display = 'none';
        });

        // Show the specified number of entries
        for (var i = 0; i < entries; i++) {
            if (rows[i]) {
                rows[i].style.display = '';
            }
        }
    }
</script>