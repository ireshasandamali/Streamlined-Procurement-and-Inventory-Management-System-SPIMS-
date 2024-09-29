<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="container" style=" background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px;  border-radius: 10px;">        
         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
           <ol class="breadcrumb">
               <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                <li class="breadcrumb-item"><a href="index.html">Submitted Bid</a></li>
                <li class="breadcrumb-item active" aria-current="page">View Submitted Bit List</li>
            </ol>
        </nav>    
    </div><!-- End Page Title -->
    
        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Submitted Bidders List</div>
            <div class="card-body">
                <h5 class="card-title"></h5>           
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border: 2px solid  #ccd9ff; border-radius: 0;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>

                            </div>
                        </div>
                    </div>

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
                                          <td>STF/LOG/C<?= $resultP['TId'] ?> </td>                                       
                                     </tr>
                                 </thead>
                                 <tbody  style="vertical-align: middle;">
                                        <tr>                                               
                                             <th scope="col">Title of the Procurement</th>
                                             <td><?= $resultP['Description'] ?> </td>
                                         <tr>
                                         <tr>                                               
                                             <th scope="col">Document Charges</th>
                                             <td><?= number_format($resultP['DCharges'],2) ?></td>
                                         <tr>  
                                             
                                         <tr>                                               
                                             <th scope="col">Bid Security</th>
                                             <td><?= number_format($resultP['BSecurity'],2) ?></td>
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
                    <th scope="col">Submission Date</th>
                    <th scope="col">Bid Value</th>
                    <th scope="col">Bid Security</th>
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
                    <td><?= $resultB['SubmittedDate'] ?></td>
                    <td><?= number_format($resultB['TotalPIVat'],2) ?></td>
                    <td><?= $resultB['TenderId'] ?></td>
                    <td> 
                    <a class="btn btn-primary" type="button" href="<?= site_url('BidEvaluation/ViewBidderDOC/'.$resultP['IFBId'].'/'.$resultP['TId'].'/'.$resultB['UserId']) ?>"style="color: white;">View</a>
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