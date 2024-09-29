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

                    <!-- Table Variants -->
                   <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;">
           
             <?php
                       foreach ($listB as $key => $resultB) {
                            ?>
                 <div class="card-header" style="background-color: #7070db; color: white;"><?= $resultB['business_name'] ?>
                     
             </div>
                    <?php
                }
                ?>                  
            <div class="card-body">
               
                <h5 class="card-title"></h5>
               
                    
                    <?= form_open_multipart('SubmitedBid/OpenedTender') ?>

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped  ">
                            <tbody>
                                <?php
                                foreach ($list as $key => $result) {
                                    ?>  
                                
                                    <tr>
                                          
                                        <td> <strong><input type="hidden" name="AnnounceId" value="<?= $result['id'] ?>">BID Validation Period</strong> </td>
                                        <td> <?= $result['BStart'] ?> To  <?= $result['BEnd'] ?></td>
                                    </tr>
                                    <tr>
                                        <td> <strong> BID Opening Date &amp; Time </strong> </td>
                                        <td><?= $result['BOpen'] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                <?php
                                foreach ($listi as $key => $resulti) {
                                    ?>
                                    <tr>
                                        <td> <strong><input type="hidden" name="TenderId" value="<?= $resulti['TId'] ?>">Procurement Number</strong> </td>
                                        <td>STF/LOG/C<?= $resulti['TId'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> Title of the Procurement</strong> </td>
                                        <td><?= $resulti['Description'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong> Geographic Location (for the delivery of goods)</strong> </td>
                                        <td><?= $resulti['Location'] ?> </td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Document Charges</strong> </td>
                                        <td><?= $resulti['DCharges'] ?></td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Bid Security</strong> </td>
                                        <td><?= $resulti['BSecurity'] ?></td>
                                    </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                   
            </div>

            <!--check table-->
            
             <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 
                <div class="card-body">
                    <h5 class="card-title"></h5> 
                    
                <table class="table">
                    <thead style="vertical-align: middle;">
                        <?php
                       foreach ($listB as $key => $resultB) {
                            ?>
                            <tr>
                                <th>Name of the Bidder    </th>
                                <td><?= $resultB['business_name'] ?></td>
                            </tr>
                            <tr>
                                <th>Bid Submitted Date    </th>
                                <td><?= $resultB['SubmittedDate'] ?></td>
                            </tr>
                             <?php
                }
                ?>   
                        </thead>
                    </table>
                    
                    <h3 _ngcontent-c24="" class="society-section-header">Price Schedule</h3><div _ngcontent-c24=""><hr>
                        
                        <div class="table-responsive">
                            <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                <thead style="text-align: center; vertical-align: middle;">
                                    <tr>    
                                        <th scope="col">Item ID</th>
                                        <th scope="col">Item</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Sample</th>
                                        <th scope="col">Unit Price Excluding VAT</th>
                                        <th scope="col">Price per Line Item</th>
                                        <th scope="col">Inland transportation,Insurance and other related services to deliver the goods to their final destination if not include <a href="">Column 4</a></th>
                                        <th scope="col">Total Price Excluding VAT</th>
                                        <th scope="col">Discount (if any)</th>
                                        <th scope="col">Discounted Total Price Excluding VAT</th>
                                        <th scope="col">VAT</th>
                                        <th scope="col">VAT Amount</th>
                                        <th scope="col">Total Price Including VAT</th>

                                    </tr>
                                </thead>
                                <tbody  style="text-align: center; vertical-align: middle;">
                                        <?php
                                       $i=1;
                                        foreach ($listP as $key => $resultP) {
                                            ?>
                                        <tr>
                                            <td><?= $i ?> </td>  
                                            <td><?= $resultP['Item'] ?> </td>                   
                                            <td><?= $resultP['Qty'] ?></td>
                                            <td><?= $resultP['Sample'] ?></td>
                                            <td><?= $resultP['Unit_priceEV'] ?> </td>                   
                                            <td><?= $resultP['PriceLItem'] ?></td>
                                            <td><?= $resultP['OPrice'] ?></td> 
                                            <td><?= $resultP['TotalPEVat'] ?> </td>                   
                                            <td><?= $resultP['Discount'] ?></td>
                                            <td><?= $resultP['TotalwithDiscount'] ?></td>
                                            <td><?= $resultP['VAT'] ?> </td>                   
                                            <td><?= $resultP['VatAmount'] ?></td>
                                            <td><?= $resultP['TotalPIVat'] ?></td> 
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

  <!--check table-->
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;"> 

                <div class="card-body"><br>
                    <h3 _ngcontent-c24="" class="society-section-header">Specification</h3><div _ngcontent-c24=""><hr>
                        <h5 class="card-title"></h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Sub Component</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Priority Status</th>
                                    <th scope="col">Bidders Offer</th>
                                    <th scope="col">Remarks</th>                   
                                </tr>


                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($lists as $key => $results) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i ?> </th>
                                        <td><?= $results['Item'] ?></td>
                                        <td><?= $results['SubComponent'] ?></td>
                                        <td><?= $results['Detail'] ?></td>
                                        <td><?= $results['Priority'] ?> </td>
                                        <td><?= $results['BiddersOffer'] ?></td>
                                        <td><?= $results['Remarks'] ?> </td>
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
            
            <div class="card" style="margin-top: 5px; margin-left: 25px;margin-right: 25px;">             
                <div class="card-body mb-4">
                    <h5 class="card-title"></h5>
                    <!-- comment -->
                    <div class="container uploaded-container">
                        <h3 class="society-section-header">Documents</h3>
                        <div class="row uploaded-row">
                            <hr>
                            <div class="col-9 doc">
                                <h5>BID Submission Form</h5>
                                <button type="button" class="btn btn-outline-dark btn-light btn-sm"><i class="bi bi-download"></i> Download </button>
                            </div>
                            <!----><!---->
                        </div>
                        <div class="row uploaded-row">
                            <div class="col-12 doc">
                                <div class="mb-3">
                                    <h5>Upload File</h5><hr>
                                    <label for="formFile" class="form-label">Upload Your Document</label>
                                    <input class="form-control" type="file" id="profile_image" name="profile_image">
                                </div>
                            </div>
                            <!----><!---->
                        </div>
                    </div>
                    <!-- comment -->
                </div>
                
                <div class="row mb-4">
                    <div class="text-center">
                      
                        <button class="btn btn-success rounded-5" type="submit">Submit BID</button>
                        <button class="btn btn-success rounded-5" type="reset">Reset</button>
                        
                    </div>
                </div>

               
<?= form_close() ?> 
        </div>
        </div>
           </div>
                        
                    <!-- End Table Variants -->
                                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>