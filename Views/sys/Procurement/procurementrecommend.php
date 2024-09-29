<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>TEC EVALUATION</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Bid Evaluation</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>TEC Evaluation</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->
        
     
        <section class="section dashboard">   
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #00cc44; color: white;">STF PROCUREMENT COMMITTEE MEETING</div>
                <div class="card-body">
                     <?php  $i=1; foreach ($list as $key => $result){ ?>
                    <h5 class="card-title">The Special Task Force Committee Meeting will be held on <strong>  <?= $result['PMDate'] ?> </strong> at the Conference Hall at STF Headquarters. The Following Procurements will be taken up for Discussion</h5>    
                    <?php  $i++;} ?>
                    
                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('Procurement/procurementrecommend') ?>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                            <thead>
                              
                                <tr><th scope="col">Meeting No</th>
                                    <th>Procurement Number</th>
                                    <th colspan="2">Procurement Purpose</th>
                                </tr>
                                <tr>
                                    <th scope="col"  colspan="4"><strong>Award</strong></th>
                                </tr>
                                <tr>
                            </thead>
                            <tbody>
                                
                               <?php  $i=1; foreach ($listC as $key => $resultC){ ?>
                                <?php if ($resultC['PMatter'] == 'Award'): ?>
                                <tr>
                                    <td><?= $i ?></td>                                   
                                    <td>STF/LOG/C<?= $resultC['Tenderid'] ?></td>                                  
                                    <td><?= $resultC['Description'] ?></td>
                                    <td><a class="btn btn-primary btn-sm" href="<?= site_url('Procurement/TECReport/' . $resultC['Tenderid']) ?>">View</a></td>
                                      </tr>
                                <?php endif; ?>
                               <?php  $i++;} ?>
                                
                                <tr>
                                    <th scope="col"  colspan="4"><strong>Decision</strong></th>
                                </tr> 
                                      
                                        <?php  $i=1; foreach ($listC as $key => $resultC){ ?>
                                <?php if ($resultC['PMatter'] == 'Decision'): ?>
                                <tr>
                                    <td><?= $i ?></td>                                   
                                    <td>STF/LOG/C<?= $resultC['Tenderid'] ?></td>                                  
                                    <td><?= $resultC['Description'] ?></td>   
                                    <td><a class="btn btn-primary btn-sm" href="<?= site_url('Procurement/viewTender/' . $resultC['Tenderid']) ?>">View</a></td>
                                </tr>
                                <?php endif; ?>
                               <?php  $i++;} ?>
                                 
                                 <tr>
                                    <th scope="col"  colspan="4"><strong>Cost Estimate</strong></th>
                                </tr> 
                                      
                                <?php  $i=1; foreach ($listC as $key => $resultC){ ?>
                                <?php if ($resultC['PMatter'] == 'Cost Estimate'): ?>
                                <tr>
                                    <td><?= $i ?></td>                                   
                                    <td>STF/LOG/C<?= $resultC['Tenderid'] ?></td>                                  
                                    <td><?= $resultC['Description'] ?></td>   
                                    <td><a class="btn btn-primary btn-sm" href="<?= site_url('Procurement/PCevaluation/' . $resultC['Tenderid']) ?>">View</a></td>
                                      
                                </tr>
                                <?php endif; ?>
                               <?php  $i++;} ?>
                                      
                                      
                                <tr>
                                    <th scope="col"  colspan="4"><strong>Procurement Committee Approval</strong></th>
                                </tr> 
                                      
                                <?php  $i=1; foreach ($listC as $key => $resultC){ ?>
                                <?php if ($resultC['PMatter'] == 'Approval'): ?>
                                <tr>
                                    <td><?= $i ?></td>                                   
                                    <td>STF/LOG/C<?= $resultC['Tenderid'] ?></td>                                  
                                    <td><?= $resultC['Description'] ?></td>
                                    <td><a class="btn btn-primary btn-sm" href="<?= site_url('Procurement/viewTenderapproval/' . $resultC['Tenderid']) ?>">View</a></td>
                                    
                                      </tr>
                                <?php endif; ?>
                               <?php  $i++;} ?>
                                  
                             </tbody>     
                         
                        </table>
                    </div>
                </div>

                <!-- End Table Variants -->

                <?= form_close() ?>

            </div>
            
</section>

</main>

<script>
    function  loadOpenedTender(Tid) {
        var formData = "Tenderid=" + Tid + "&";
        //alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('invitation/getDescription') ?>',
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
