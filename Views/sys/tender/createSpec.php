<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW TENDER</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">TENDER</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Tender</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->   
        <section class="section dashboard">
            <h5 class="card-title" style="text-align: center; background-color: #7070db; color: white; margin-bottom: 0;">Specification</h5>
            <hr style="height: 8px; background-color: red; margin-top: 1px;">
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-body">
                    <h5 class="card-title"></h5> 
                    <!-- Alert Messages -->
                    <?php if (isset($msg)): ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= $msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <!-- End of Alert Messages -->
                    <?= form_open_multipart('tender/createSpec') ?>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="TId" class="form-label">Tender Id Number</label>
                            <input type="text" class="form-control" name="TId" id="TId" value="STF/LOG/C/<?= $Tender_details['Tenderid'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="Description" class="form-label">Tender Name</label>
                            <input type="text" class="form-control" name="Description" id="Description" value="<?= $Tender_details['Description'] ?>">
                        </div>
                    </div>
                    <?php foreach ($TItem_details as $key => $result) { ?>

                    <?php } ?>

                    <div class="row mb-3">
                        <label for="Item" class="col-sm-2 form-label">Item List</label>

                        <div class="col-sm-4">
                            <select id="Item" class="form-select" name="Item" onchange="loadIId(this.value);loadItemName(this.value)">
                                <option value="" selected="">...</option>
                                <?php foreach ($TItem_details as $key => $result) { ?>

                                    <option value="<?= $result['Item'] ?>"><?= $result['ItemName'] ?></option>

                                <?php } ?>
                            </select>

                            <span class="text-danger"><?= service('validation')->getError('Item') ?></span>
                        </div>  

                        <label for="SubComponent" class="col-sm-2 col-form-label">Sub Component</label>
                        <div class="col-sm-4">
                            <input type="hidden" class="form-control" id="ItemName" name="ItemName">
                            <input type="text" class="form-control" id="SubComponent" name="SubComponent">
                            <span class="text-danger"><?= service('validation')->getError('SubComponent') ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Detail" class="col-sm-2 col-form-label">Detail</label>
                        <div class="col-sm-4">
                           <!-- <input type="textarea" class="form-control" id="Detail" name="Detail">-->
                            <textarea class="form-control" id="Detail" name="Detail" aria-label="Detail"></textarea>
                            <span class="text-danger"><?= service('validation')->getError('Detail') ?></span>
                        </div>

                        <label for="Priority" class="col-sm-2 col-form-label">Priority</label>
                        <div class="col-sm-4">
                            <select id="Priority" class="form-select" name="Priority">
                                <option value="" selected="">...</option>
                                <option value="Critical" <?php
                                if (set_value('Priority') == 'Critical') {
                                    echo 'selected';
                                }
                                ?> >Critical</option>
                                <option value="Optional" <?php
                                if (set_value('Priority') == 'Optional') {
                                    echo 'selected';
                                }
                                ?> >Optional</option>
                            </select>          
                            <span class="text-danger"><?= service('validation')->getError('Priority') ?></span>
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="sample_image" name="sample_image"></div>
                    </div>
                    <div class="text-center">
                        <!--Load ItemId-->    
                        <input type="hidden" class="form-control" id="IIdInput" name="IId" >  
                        <input type="hidden" name="TId" id="TId" value="<?= $TId ?>">
                        <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                        <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>                         
                                <th scope="col">Item</th>
                                <th scope="col">Sub Component</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Priority Status</th>

                            </tr>


                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($list as $key => $result) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $i ?> </th>                               
                                    <td><?= $result['ItemName'] ?></td>
                                    <td><?= $result['SubComponent'] ?></td>
                                    <td><?= $result['Detail'] ?></td>
                                    <td><?= $result['Priority'] ?> </td>
                                    <td>        
                                        <!-- delete confirmation message -->
                                        <input type="hidden" name="id" value="<?= $result['specid'] ?>">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $result['specid'] ?>" onclick="confirmDeleteModal('<?= $result['specid'] ?>')">Delete</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal<?= $result['specid'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $result['specid'] ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel<?= $result['specid'] ?>">Confirm Deletion</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" id="msg<?= $result['specid'] ?>"></div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <a class="btn btn-danger" id="confirmDelete<?= $result['specid'] ?>" href="<?= site_url('tender/removespecItem/' . $result['specid']) ?>">Delete</a>
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

                    <?= form_close() ?>

                </div>
            </div>

        </section>
</main>

<script>
    function  loadItemName(did) {
        var formData = "ItemId=" + did + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('tender/getSpecItemname') ?>',
            data: formData,
            success: function (response) {
                // $("#result").html(response);
                $("#ItemName").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });

    }

    function  loadIId(did) {
        var formData = "ItemId=" + did + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('tender/getIId') ?>',
            data: formData,
            success: function (response) {
                // $("#result").html(response);
                $("#IIdInput").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });

    }

</script>

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
