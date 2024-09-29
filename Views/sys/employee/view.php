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
            <div class="card-header" style="background-color: #7070db; color: white;">Employee List</div>
            <div class="card-body">

                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <?= form_open('employee/view') ?>
                                <div class="row g-3">                              
                                        <!-- check -->
                                        <!-- Add this code before the table -->
                                       
                                            <div class="col-md-1">
                                             <label for="entries" class="form-label">Show </label>
                                            </div>
                                        <div class="col-md-2">
                                                <select style="border-radius: 40px;border: 1px solid  #000066" id="entries" class="form-select" onchange="changeEntries(this.value)">
                                                    <option value="5">5</option>
                                                    <option value="10" selected>10</option>
                                                    <option value="15">15</option>
                                                    <option value="50">50</option>
                                                </select>
                                            </div>
                                        <div class="col-md-1">
                                             <label for="entries" class="form-label">Designation</label>
                                            </div>
                                        <div class="col-md-2">
                                        <select style="border-radius: 40px;border: 1px solid  #000066" id="Designation" class="form-select" name="Designation" >
                                            <option selected=""></option>
                                            <option value="Accountant" <?php
                                            if (set_value('Designation') == 'Accountant') {
                                                echo 'selected';
                                            }
                                            ?>  >Accountant</option>
                                            <option value="Director" <?php
                                            if (set_value('Designation') == 'Director') {
                                                echo 'selected';
                                            }
                                            ?>>Director</option>
                                            <option value="ASP" <?php
                                            if (set_value('Designation') == 'ASP') {
                                                echo 'selected';
                                            }
                                            ?>>ASP</option>
                                            <option value="Commandant" <?php
                                            if (set_value('Designation') == 'Commandant') {
                                                echo 'selected';
                                            }
                                            ?>>Commandant</option>

                                            <option value="Procurement Officer" <?php
                                            if (set_value('Designation') == 'Procurement Officer') {
                                                echo 'selected';
                                            }
                                            ?>>Procurement Officer</option>
                                            <option value="Camp OIC" <?php
                                            if (set_value('Designation') == 'Camp OIC') {
                                                echo 'selected';
                                            }
                                            ?>>Camp OIC</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                          <input style="border-radius: 40px;border: 1px solid  #000066"  type="text" class="form-control" id="NIC" name="NIC" placeholder="NIC">
                                             <span class="text-danger"><?= service('validation')->getError('NIC') ?></span>
                                     </div>
                                   <div class="col-md-2">
                                       <button style="border-radius: 40px;border: 1px solid  #000066"  type="submit" class="btn btn-primary">
                                           Search
                                           <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbtJREFUSEvV1UuITnEYx/HPkJUMKYmd2dq4bS0kIxuXmoRSQkmR5JZZDKVoynWmJoqkRBaKjShZYCe3srOxsnArYmEWM/6P/m+deZvznqP3nYX/6jyn83++z/V3ukzx6Zpi/8oA83AYy7EkB/EaL3AeX+oGNhlgO4Yxu8TJN+zE/TqQZsB+DOWLdzGCJ9lenSLfh43Z3obbVZAioAfvMS2X51zJ5RPp/Un8wiJ8bgUpAiLavbiDLRWRPcRaDOBUXcBHLMhNfVsB6MUjvMSKuoBRzEgRTU+RjVUA5uIrfrQYhr8uiiX6iZmYlXoQz61ON77jE+bXzeAdFmMlnlcAVuXpeow1dQGncTz14B42VQCi/tGH2JmbdQEL8SH34QjOllwcxFHEZi/7lz2Ib3fgemHRLuFZtjdgD9Zl+0Lel5YDMZlUbE7jegVzSqKLybmcs4i+HcODskzKxC4m41AWu6WpN7/xCk9xLYtdCF9jB0K7DmC8GdSOXK9vEryLaXQPdhIQvm5ha8HpGfQXIe1kEH5i8wPSV3AaJdzdsNsFNPxcxa5sTMiiU4CQ+BvpX/EmSc0Eme8UoHTf/n/AH9BmShm5CxJHAAAAAElFTkSuQmCC"/>
                                       </button>
                                   </div>
                                   <div class="col-md-2">
                                       <a style="border-radius: 40px;border: 1px solid  #000066" type="reset" class="btn btn-secondary"href="<?= site_url('employee/view') ?>">
                                    Reset
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcpJREFUSEu11T+oj3EUx/HXTflvQaGITSiEJN2FhcLAouRvslHMysJsuQw20l1uXVEGBhkkoQwiBiEzBixMnqPz+/X0cJ/f98n9faen5/v9nvc553PO+Y4Y8hoZsn1dAPNwBSe6OFUKWIM7WIlZ0w04mZ7PTsPf8BaPMIFnbcCSCI7iGnqApr0AncbLf4FKAHFvHSaxCqHFrtRiP2bgFw7idhNSCoh78zNVx2tGluEqAvQDG/C+DukCaEv1OA7hIXYOAzAHH7AkAQH6s7pEMIZeeq7jTCOkc7icKQvROwHCeP9S3o2mq0O24Hkl9puqfNd2BXxPketOh6gLaj8WVU58TrH7/5sp+oKFiMNfa5dLAFFlcS5sLJ4qgqfYim2I794qSVH0yquqR55g+1SAmzhcNc9FXGiIOEjk87hUNWMUQH8gNlO0B3czl8vxs634a3tRpp8yNbtxv03kmC2juFEry0Gc8PpYaaOtyAm5FLdwqiF4HRbVEsYPpMCbqhS/K+nk9XiQIUfpRQNFjb/AzGqobcSOHHDxRnzEXrxuhtrWyasRM2bzgPw8xpEcFX8dLRkV+3A2X7OYnnPT03vT9eAMErh1vySC/wL8BrLNURk1ZlSoAAAAAElFTkSuQmCC"/>
                                       </a>
                                   </div> 
                                    
                                </div>
                                <!-- End Multi Columns Form -->
                                <?= form_close() ?>

                            </div>
                        </div>
                    </div>
                    
                    <!-- Table Variants -->
                    <div class="card">
                    <div class="card-header" style="background-color: #7070db; color: white;"> Number Of Registered Employees <?= count($list) ?>  </div>
                        <h5 class="card-title"></h5>
                    <div class="table-responsive">
                   
                        <!--<table class="table table-dark">-->
                        <!--<table class="table table-sm  table-coler-#b3d9ff table-bordered" > -->
                        
                                 <!--<thead style="border-bottom: 2px solid #ff0000;" >-->
                            <table id="employeeTable" class="table table-borderless datatable">
                            <thead style="text-align: center; vertical-align: middle; border-bottom: 2px solid #001a66; border-top:  2px solid #001a66">
                                <tr>
                                    <th scope="col" class="text-center align-middle">Name</th>
                                    <th scope="col" class="text-center align-middle">Address</th>
                                    <th scope="col" class="text-center align-middle">Tel.No</th>
                                    <th scope="col" class="text-center align-middle">Email</th>
                                    <th scope="col" class="text-center align-middle">DOB</th>
                                    <th scope="col" class="text-center align-middle">NIC</th>
                                    <th scope="col" class="text-center align-middle">Gender</th>
                                    <th scope="col" class="text-center align-middle">Division</th>
                                    <th scope="col" class="text-center align-middle">Designation</th>
                                    <th scope="col" class="text-center align-middle">Employee Type</th>
                                       <?php if((session()->get('UserType'))=='Administrator'){ ?> 
                                    <th></th>
                                     <th></th>
                                       <th></th><?php } ?>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $i = 1;
                                //$NumberofEployees = 0;
                                foreach ($list as $key => $result) {                                 
                                    //$NumberofEployees += $result['TelNo'];
                                    ?>
                                    <tr>
                                        <td style="font-size: 12px;">00<?= $result['id'] ?>-<?= $result['CivilStatus'] ?> . <?= $result['FirstName'] ?> <?= $result['LastName'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['Address'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['TelNo'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['Email'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['DOB'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['NIC'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['gender'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['Division'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['Designation'] ?></td>
                                        <td style="font-size: 12px;"><?= $result['EmpType'] ?></td>
                                         <?php if((session()->get('UserType'))=='Administrator'){ ?> 
                                        <td>
                                            
                                            <?php
                                            if($result['Status']==1){   
                                            ?>
                                           <a class="btn btn-info btn-sm" href="<?= site_url('employee/changestatus/' . $result['id'].'/0') ?>">Inactive</a>
                                            <?php
                                                
                                            } else {   
                                             ?>
                                            
                                            <a class="btn btn-danger btn-sm" href="<?= site_url('employee/changestatus/' . $result['id'].'/1') ?>">Active</a>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td style="font-size: 12px;"><a class="btn btn-primary btn-sm" href="<?= site_url('employee/edit/' . $result['id']) ?>">Edit</a></td>
                                   <td style="font-size: 12px;"><a class="btn btn-primary btn-sm" href="<?= site_url('employee/viewEmp/' . $result['id']) ?>">View</a></td>
                                    <td>        
                                            <!-- delete confirmation message -->
                                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $result['id'] ?>" onclick="confirmDeleteModal('<?= $result['id'] ?>')">Delete</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal<?= $result['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $result['id'] ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel<?= $result['id'] ?>">Confirm Deletion</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" id="msg<?= $result['id'] ?>"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <a class="btn btn-danger" id="confirmDelete<?= $result['id'] ?>" href="<?= site_url('employee/removeItem/' . $result['id']) ?>">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                         <?php } ?>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                                 </tbody>
                        </table>
                        

               <!-- End Table Variants -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
     function confirmDeleteModal(empid) {
                        // Construct the ID of the modal and its related elements using the Employee ID
                        var modalId = "#deleteModal" + empid;
                        var msgId = "#msg" + empid;
                        var confirmDeleteId = "#confirmDelete" + empid;

                        // Set the item ID in the modal body
                        $(msgId).html("Are you sure you want to delete Employee ID: " + empid + "?");

                        // Set the delete button's click event handler
                        $(confirmDeleteId).off("click").on("click", function () {
                            // Perform the deletion logic here
                            console.log("Deleting Employee ID: " + empid);

                            // Close the modal
                            var deleteModal = bootstrap.Modal.getInstance(document.getElementById(modalId.substring(1)));
                            deleteModal.hide();

                          
                        });
                    }

    
    
    function changeEntries(entries) {
        // Get all table rows
        var rows = document.querySelectorAll('#employeeTable tbody tr');

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

