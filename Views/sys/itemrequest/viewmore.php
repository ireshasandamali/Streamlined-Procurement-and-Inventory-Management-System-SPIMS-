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

                <?= form_open_multipart('itemRequest/viewmore') ?>
               
                    <div class="col-sm-6" id="ItemNameList">
                        <select id="ItemList"  class="form-select" name="ItemName"  onchange="loadItemId(this.value)" >
                            <option selected="">...</option>
                            <?php foreach ($ItemName_list as $key => $resultn) { ?>
                                <option value="<?= $resultn['ItemName'] ?>"><?= $resultn['ItemName'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <span class="text-danger"><?= service('validation')->getError('ItemName') ?></span>

                </div>
                <div class="col-sm-4">
                    
                    <input type="hidden" class="form-control" id="ItemIdInput" name="LItemid" >
                </div>

                <div class="row mb-3">
                    <label for="Qty" class="col-sm-4 col-form-label">Quantity</label>
                    <label for="Unit" class="col-sm-3 col-form-label">Unit</label>
                    <label for="sample_image" class="col-sm-5 col-form-label">Upload Image</label>

                </div>
                
                
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="Qty" name="Qty">
                        <span class="text-danger"><?= service('validation')->getError('Qty') ?></span>
                    </div>
                    <div class="row mb-3">
                           <?php foreach ($Item_List as $key => $resultitem) { ?>
                    <div class="col-sm-3">
                         <label for="AQty" class="col-sm-4 col-form-label">Available Quantity</label>
                         <input type="text" class="form-control" id="AQty" name="AQty" value="<?= $result['Balanace'] ?>">
                        <span class="text-danger"><?= service('validation')->getError('Qty') ?></span>
                    </div>
                           <?php } ?>
                   
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
                                <td><?= $result['Qty'] ?></td>
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
                // alert(response);
                $("#ItemList").html(response);
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
                console.log(response); // Log the response to check if it's correct
                $("#ItemIdInput").val(response);
            },
            error: function (xhr, status, error) {
                alert(error); // Show any error message in an alert
            }
        });
    }

</script>








