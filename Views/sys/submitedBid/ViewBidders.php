<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>View Submitted Bid List</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Submitted Bid</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Submitted Bid List</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->


    
        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Submitted Bidders List</div>
            <div class="card-body">
                <h5 class="card-title"></h5>           
                

                    <!-- Table Variants -->
                   
                        <!-- End Table Variants -->
                         <div class="table-responsive">
                        
                             <table class="table">
                                 <thead style="vertical-align: middle;">
                                      <?php
                                     $i = 1;
                                     foreach ($listP as $key => $resultP) {
                                         ?>
                                     <tr>
                                         <th scope="col">Procurement Number</th>
                                          <td>STF/LOG/C/<?= $resultP['TId'] ?>/<?= substr($resultP['BStartDate'],0,4) ?></td>                                     
                                     </tr>
                                 </thead>
                                 <tbody  style="vertical-align: middle;">
                                        <tr>                                               
                                             <th scope="col">Title of the Procurement</th>
                                             <td><?= $resultP['Description'] ?> </td>
                                         <tr>
                                         <tr>                                               
                                             <th scope="col">Document Charges</th>
                                             <td><?= $resultP['DCharges'] ?></td>
                                         <tr>  
                                             
                                         <tr>                                               
                                             <th scope="col">Bid Security</th>
                                             <td><?= $resultP['BSecurity'] ?></td>
                                         <tr> 
                                         
                                             <?php
                                             $i++;
                                         }
                                         ?>
                                 </tbody>
                             </table>     
                 <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Tel NO</th>
                    <th scope="col">Email</th>
                    <th scope="col">Submission Date</th>
                    <th scope="col">Action</th>
                  </tr>
                  
                  
                </thead>
                <tbody>
                    
                   <?php
                    $i = 1;
                    foreach ($listB as $key => $resultB) {
                        ?>
                  <tr>
                    <th scope="row"><?= $i?> </th>
                    <td><?= $resultB['business_name'] ?></td>
                    <td><?= $resultB['street'] ?></td>
                    <td><?= $resultB['phone'] ?></td>
                    <td><?= $resultB['Email'] ?></td>
                    <td><?= $resultB['SubmittedDate'] ?></td>
                     <td> 
                                <a class="btn btn-primary" type="button" href="<?= site_url('SubmitedBid/OpenedTender/'.$resultP['IFBId'].'/'.$resultP['TId'].'/'.$resultB['UserId']) ?>"style="color: white;">OPen</a>
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
    </div>

</main>