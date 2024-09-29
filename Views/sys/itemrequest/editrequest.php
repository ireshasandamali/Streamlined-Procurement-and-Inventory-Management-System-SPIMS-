<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW PURCHASE REQUEST</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Item Request</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Purchase Request</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->
    <section class="section dashboard">
        <div class="card" style="margin-top: 5px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Item Request</div>
            <div class="card-body">
                <h5 class="card-title"></h5> 

                <!-- First Card -->  
                <?= form_open('itemrequest/updaterequest') ?>                               
                <table class="table">

                    <tbody>

                        <tr>
                            <th>Description</th>
                            <td>              
                                <input type="text" class="form-control col-sm-10" id="Description" name="Description" value="<?= set_value('Description', $request['Description']) ?>">
                                <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                            </td>
                        </tr>
                
                        <tr>
                            <th>Purpose</th>
                            <td>
                                <textarea class="form-control col-sm-10" id="Purpose" name="Purpose"><?= set_value('Purpose', $request['Purpose']) ?></textarea>
                                <span class="text-danger"><?= service('validation')->getError('Purpose') ?></span>
                            </td>
                        </tr>

                        <tr>
                            <th>Priority Status</th>  
                            <td>
                                <select id="PStatus" class="form-select col-sm-10" name="PStatus">
                                    <option value="" <?php if (set_value('PStatus', $request['PStatus']) == '') echo 'selected'; ?>>...</option>
                                    <option value="Urgent" <?php if (set_value('PStatus', $request['PStatus']) == 'Urgent') echo 'selected'; ?>>Urgent</option>
                                    <option value="Priority" <?php if (set_value('PStatus', $request['PStatus']) == 'Priority') echo 'selected'; ?>>Priority</option>
                                    <option value="Normal" <?php if (set_value('PStatus', $request['PStatus']) == 'Normal') echo 'selected'; ?>>Normal</option>
                                </select>
                                <span class="text-danger"><?= service('validation')->getError('PStatus') ?></span>

                            </td>             </tr>
                        <tr>
                            <th>Camp</th>
                            <td>
                                <select id="CName" class="form-select col-sm-6" name="CName">
                                    <option value="" <?php if (set_value('CName', $request['CName']) == '') echo 'selected'; ?>>...</option>
<?php foreach ($camp_list as $result) { ?>
                                        <option value="<?= $result['CName'] ?>" <?php if (set_value('CName', $request['CName']) == $result['CName']) echo 'selected'; ?>><?= $result['CName'] ?></option>
<?php } ?>
                                </select>
                                <span class="text-danger"><?= service('validation')->getError('CName') ?></span>

                            </td>
                        </tr>
                        <tr>
                            <th>Request Date</th>
                            <td>
                                <input type="date" class="form-control col-sm-6 " id="ReqDate" name="ReqDate" value="<?= set_value('ReqDate', $request['ReqDate']) ?>">
                                <span class="text-danger"><?= service('validation')->getError('ReqDate') ?></span>

                            </td>

                        </tr>

                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Item</th>
                            <th scope="col">Quantity</th>
                             <?php if((session()->get('UserType'))=='Requester'){ ?> 
                                    <th scope="col">Delete</th> <!-- Added a column for actions -->
                                    <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($listi as $key => $resulti) {
                        ?>
                            <tr>
                                <th scope="row"><?= $resulti['RItemid'] ?></th>
                                <td>
                                    <input type="hidden" name="RItemid[]" value="<?= $resulti['RItemid'] ?>">
                                    <input type="text" class="form-control col-sm-7" id="ItemName" name="ItemName[]" value="<?= set_value('ItemName', $resulti['ItemName']) ?>">
                                    <span class="text-danger"><?= service('validation')->getError('ItemName') ?></span>
                                </td>
                                <td>
                                    <input type="text" class="form-control col-sm-7" id="Qty" name="Qty[]" value="<?= set_value('Qty', $resulti['Qty']) ?>">
                                    <span class="text-danger"><?= service('validation')->getError('Qty') ?></span>
                                </td>
                                  <td>        
                                    <!-- delete confirmation message -->
                                    <input type="hidden" name="id" value="<?= $resulti['RItemid'] ?>">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $resulti['RItemid'] ?>" onclick="confirmDeleteModal('<?= $resulti['RItemid'] ?>')">Delete</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?= $resulti['RItemid'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $resulti['RItemid'] ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel<?= $resulti['RItemid'] ?>">Confirm Deletion</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" id="msg<?= $resulti['RItemid'] ?>"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-danger" id="confirmDelete<?= $resulti['RItemid'] ?>" href="<?= site_url('itemrequest/removeItem/' . $resulti['RItemid']) ?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                      
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>

                <div class="mb-3">
                    <div class="text-center">
                        <input type="hidden" class="form-control" id="RequestID" name="RequestID" value="<?= set_value('RequestID', $request['RequestID']) ?>">
                        <a class="btn btn-success btn-sm" href="<?= site_url('itemRequest/reqItem/' . $request['RequestID']) ?>"> <i class="bi bi-plus-square" aria-hidden="true"></i> Add New Item </a>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </section>
</main>
<script>

    function confirmDeleteModal(Iid) {
        // Construct the ID of the modal and its related elements using the vote ID
        var modalId = "#deleteModal" + Iid;
        var msgId = "#msg" + Iid;
        var confirmDeleteId = "#confirmDelete" + Iid;

        // Set the item ID in the modal body
        $(msgId).html("Are you sure you want to delete item ID: " + Iid + "?");

        // Set the delete button's click event handler
        $(confirmDeleteId).off("click").on("click", function () {
            // Perform the deletion logic here
            console.log("Deleting item ID: " + Iid);

            // Close the modal
            var deleteModal = bootstrap.Modal.getInstance(document.getElementById(modalId.substring(1)));
            deleteModal.hide();


        });
    }

</script>
