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
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #7070db; color: white;">Tender Item</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>           
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="border: 2px solid  #ccd9ff; border-radius: 0;">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <?= form_open('tender/addItem') ?>

                                    <div class="row mb-3">
                                        <label for="TId" class="col-sm-2 form-label">Tender Id Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="TId" id="TId" value="STF/LOG/C/<?= $Tender_details['Tenderid'] ?>/<?= substr($Tender_details['BStartDate'],0,4) ?>">
                                            <span class="text-danger"><?= service('validation')->getError('TId') ?></span>
                                        </div>
                                        <label for="TName" class="col-sm-2 form-label">Tender Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="TName" id="TName" value="<?= $Tender_details['Description'] ?>">
                                            <span class="text-danger"><?= service('validation')->getError('TName') ?></span>
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="Item" class="col-sm-2 col-form-label">Item</label>
                                        <div class="col-sm-4">
                                            <select id="Item" class="form-select col-sm-6 " name="Item"onchange="loadQty(this.value);loadItemname(this.value)">
                                                <option value="" selected="">...</option>
                                                <?php foreach ($Item_List as $key => $result) { ?>
                                                    <option value="<?= $result['ListItemId'] ?>"><?= $result['ItemName'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <span class="text-danger"><?= service('validation')->getError('Item') ?></span>     
                                        </div>

                                        <label for="Qty" class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="descriptionInput" name="Qty" >
                                            <span class="text-danger"><?= service('validation')->getError('Qty') ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Unit" class="col-sm-2 col-form-label">Unit</label>
                                        <div class="col-sm-4">
                                            <input type="hidden" name="ItemName" id="ItemNameInput" value="<?= $result['ItemName'] ?>">
                                            <input class="form-control" type="text" id="Unit" name="Unit">
                                        </div>
                                        <label for="Sample" class="col-sm-2 col-form-label">Sample</label>
                                        <div class="col-sm-4">
                                           <!-- <input type="textarea" class="form-control" id="Detail" name="Detail">-->
                                            <textarea class="form-control" id="Sample" name="Sample" aria-label="Sample"></textarea>
                                            <span class="text-danger"><?= service('validation')->getError('Sample') ?></span>
                                        </div>  
                                    </div>
                                    <div class="row mb-3">
                                        <div class="text-center">
                                            <input type="hidden" name="action" id="action" value="addItem">
                                            <input type="hidden" name="TId" id="TId" value="<?= $TId ?>">
                                            <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                                            <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                                        </div>
                                    </div>

                                    <div class="card" style="border: 2px ">
                                        <div class="card-header" style="background-color: #e6ecff; color: Black;"><strong>Tender Item List</strong></div>
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Item</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Sample</th>
                                                        <th scope="col">Actions</th> <!-- Added a column for actions -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($list as $key => $result) {
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?= $i ?></th>
                                                            <td><?= $result['ItemName'] ?></td>
                                                            <td><?= $result['Qty'] ?></td>
                                                            <td><?= $result['Sample'] ?></td>
                                                            <td>


                                                                <!-- delete confirmation message -->

                                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                                        onclick="confirmDeleteModal('TItemid')">Delete </button>                                        
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
                                                                     aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Are you sure you want to delete Item ID <?= $result['TItemid'] ?>?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                                <a href="<?= site_url('tender/removeItem/' . $result['TItemid'] . '/' . $result['TId']) ?>"> <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button></a>
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
                                        </div>
                                    </div>

                                    <?= form_close() ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</main>

<script>
    function getCurrentTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
        return timeString;
    }

    function confirmDeleteModal(itemId) {
        var formData = "ItemId=" + Iid + "&";
        // Set the item ID in the modal body
        $("#deleteModal .modal-body").text("Are you sure you want to delete item ID: " + itemId + "?");

        // Set the delete button's click event handler
        $("#confirmDelete").off("click").on("click", function () {
            // Perform the deletion logic here
            console.log("Deleting item ID: " + itemId);

            // Close the modal
            var deleteModal = bootstrap.Modal.getInstance(document.getElementById("deleteModal"));
            deleteModal.hide();

            // Show the toast message
            var toast = $(".toast");
            toast.find('.toast-body').text('Item 10 Deleted Successfully');
            $("#toastTime").text(getCurrentTime());
            toast.toast("show");
        });
    }



    function loadQty(did) {
        //alert(did);
        var formData = "ListItemId=" + did + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('tender/getQty') ?>',
            data: formData,
            success: function (response) {
                console.log(response); // Log the response to check if it's correct
                $("#descriptionInput").val(response);
            },
            error: function (xhr, status, error) {
                alert(error); // Show any error message in an alert
            }
        });
    }

    function loadItemname(aid) {
        //alert(aid);
        var formData = "RItemid=" + aid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('tender/getItemname') ?>',
            data: formData,
            success: function (response) {
                console.log(response); // Log the response to check if it's correct
                $("#ItemNameInput").val(response);
            },
            error: function (xhr, status, error) {
                alert(error); // Show any error message in an alert
            }
        });
    }
</script>


