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
                                      <?php
                                        $i++;
                                    }
                                    ?>
                            </tbody>
                            <?php
                            $unique_business_names = array(); // Initialize an empty array to store unique business names
                            foreach ($listB as $key => $resultB) {
                                $business_name = $resultB['business_name'];
                                if (!in_array($business_name, $unique_business_names)) {
                                    $unique_business_names[] = $business_name; // Add the business name to the unique names array if it's not already present
                                }
                            }
                            $unique_business_count = count($unique_business_names); // Count the number of unique business names
                            ?>

                            <!-- Display the count -->
                           <p>Total number of Unique applied Bidders: <?= $unique_business_count ?></p>
                            
                            <p>Total Number of Bidder:  <?= $total_rows = count($listB)?></p>

                            <!-- Display the table -->
                            <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Company Name</th>                                     
                                        <th scope="col">Submission Date</th>
                                         <?php if((session()->get('UserType'))=='Bid Opening Committee '){ ?>
                                        <th scope="col">Open</th>
                                         <?php }?>
                                        <th scope="col">View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($listB as $key => $resultB) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td><?= $resultB['business_name'] ?></td>
                                            <td><?= $resultB['SubmittedDate'] ?></td>
                                              <?php if((session()->get('UserType'))=='Bid Opening Committee '){ ?>
                                            <td> 
                                                <a class="btn btn-primary" type="button" href="<?= site_url('SubmitedBid/OpenedTender/' . $resultP['IFBId'] . '/' . $resultP['TId'] . '/' . $resultB['UserId']) ?>" style="color: white;">Open</a>
                                            </td>
                                              <?php }?>
                                            <td> 
                                                <a class="btn btn-primary" type="button" href="<?= site_url('SubmitedBid/OpenedBReport/' . $resultP['IFBId'] . '/' . $resultP['TId'] . '/' . $resultB['UserId']) ?>" style="color: white;">View</a>
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