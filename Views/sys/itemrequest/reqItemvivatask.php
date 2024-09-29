<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>CREATE PURCHASE REQUEST</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Item Request</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>Create Purchase Request</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">   
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #7070db; color: white;">Request Item</div>
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
                    <?= form_open_multipart('itemRequest/reqItem') ?>
                    <div class="row mb-3">
                        <label for="Vote" class="col-sm-6 col-form-label">Vote</label>
                        <label for="Vote" class="col-sm-6 col-form-label">Vote Description</label>

                        <label for="" class="col-sm-2 control-label"> </label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <select id="Vote" class="form-select" name="Vote" onchange="loadDiscription(this.value); loadItemCategory(this.value)">
                                <option selected="">...</option>
                                <?php foreach ($Item_list as $key => $result) { ?>
                                    <option value="<?= $result['Vote'] ?>"><?= $result['Vote'] ?></option>
                                <?php } ?>
                            </select>

                            <span class="text-danger"><?= service('validation')->getError('Vote') ?></span>
                        </div>

                        <div class="col-sm-6">                 
                            <input type="text" class="form-control" id="descriptionInput" name="Description" >

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Item" class="col-sm-6 col-form-label">Request Item Category</label>
                        <label for="Qty" class="col-sm-6 col-form-label">Item Name</label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div id="ItemCategoryList">
                                <select id="ItemNameInput"  class="form-select" name="ICatergory" >
                                    <option selected="">...</option>
                                    <?php foreach ($Item_list as $key => $result) { ?>
                                        <option value="<?= $result['ICatergory'] ?>"><?= $result['ICatergory'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span class="text-danger"><?= service('validation')->getError('ICatergory') ?></span>
                        </div>
                        <div class="col-sm-6">
                            <div  id="ItemNameList">
                                <select id="ItemList"  class="form-select" name="ItemName"  onchange="loadItemId(this.value);loadItemquantity(this.value)" >
                                    <option selected="">...</option>
                                    <?php foreach ($ItemName_list as $key => $resultn) { ?>
                                        <option value="<?= $resultn['id'] ?>"><?= $resultn['ItemName'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <span class="text-danger"><?= service('validation')->getError('ItemName') ?></span>
                        </div>
                    </div>
                    <div class="col-sm-4">

                        <input type="hidden" class="form-control" id="ItemIdInput" name="LItemid" >
                    </div>
                    
                    <div class="row mb-3">
                        <label for="EQty" class="col-sm-4 col-form-label">Existing Quantity</label>
                        <label for="RQty" class="col-sm-3 col-form-label">Requesting Quantity</label>
                        <label for="PQty" class="col-sm-5 col-form-label">Purchasing Quantity</label>

                    </div>


                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="quantity" name="EQty">
                            <span class="text-danger"><?= service('validation')->getError('EQty') ?></span>
                        </div>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="Qty" name="Qty" oninput="BQty()">
                        </div>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" id="PQty" name="PQty">
                            <span class="text-danger"><?= service('validation')->getError('PQty') ?></span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Unit" class="col-sm-5 col-form-label">Unit</label>
                        <label for="sample_image" class="col-sm-7 col-form-label">Upload Image</label>

                    </div>


                    <div class="row mb-3">
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Unit" name="Unit">
                        </div>
                        <div class="col-sm-7">
                            <input class="form-control" type="file" id="sample_image" name="sample_image">
                            <span class="text-danger"><?= service('validation')->getError('sample_image') ?></span>
                        </div>
                    </div>


                    <div class="text-center">
                        <input type="hidden" name="RId" id="RId" value="<?= $RId ?>">
                        <button type="submit" class="btn btn-outline-primary rounded">Submit</button>
                        <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                    </div>
                </div>          

            </div> 
    </div>

    <div class="card" style="border: 2px ">
        <div class="card-body">
            <h5 class="card-title"></h5>  
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Image</th>

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
                            <td><?= $result['PQty'] ?></td>
                            <td><img src="images/uploads/.<?= $result['sample_image'] ?>" alt=""></td>


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

</section>
</main>
<script>
    function  loadDiscription(did) {
        var formData = "VoteId=" + did + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('itemrequest/getvdiscription') ?>',
            data: formData,
            success: function (response) {
                // $("#result").html(response);
                $("#descriptionInput").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
    }
    function loadItemCategory(nid) {
        //alert(nid);
        var formData = "VoteId=" + nid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('itemrequest/getItemCategory') ?>',
            data: formData,
            success: function (response) {
                // alert(response);
                $("#ItemCategoryList").html(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
    }
    function loadItems(Iid) {
        // alert(Iid);
        var formData = "VoteId=" + Iid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('itemrequest/getItemName') ?>',
            data: formData,
            success: function (response) {

                //console.log(response);
                $("#ItemNameList").html(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
    }

    function loadItemId(Iid) {
        //alert(Iid);
        var formData = "RItemid=" + Iid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('itemrequest/getItemId') ?>',
            data: formData,
            success: function (response) {
                // alert(response); // Log the response to check if it's correct
                $("#ItemIdInput").val(response);
            },
            error: function (xhr, status, error) {
                alert(error); // Show any error message in an alert
            }
        });
    }

    function loadItemquantity(Iid) {
        //  alert(Iid);
        var formData = "RItemid=" + Iid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('itemrequest/getIteminventory') ?>',
            data: formData,
            success: function (response) {
                // alert(response); // Log the response to check if it's correct
                $("#quantity").val(response);
            },
            error: function (xhr, status, error) {
                alert(error); // Show any error message in an alert
            }
        });
    }



</script>

<script>
    function BQtybalance() {
        var EQty = parseFloat($('#quantity').val());
        var RQty = parseFloat($('#RQty').val());
        var PQty = EQty - RQty;
        if (!isNaN(PQty) && PQty >= 0) {
            $('#PQty').val(PQty.toFixed(2));
        } else {
            $('#PQty').val('');
        }
    }
</script>
<script>
function BQty() {
    var EQty = parseFloat($('#quantity').val());
    var Qty = parseFloat($('#Qty').val());
    
    // Check if EQty is greater than RQty
    if (EQty > Qty) {
        var PQty = -(EQty - Qty); // Negative value
    } else {
        var PQty = EQty - Qty;
    }

    if (!isNaN(PQty)) {
        $('#PQty').val(PQty.toFixed(2));
    } else {
        $('#PQty').val('');
    }
}
</script>








