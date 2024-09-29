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

        <!-- Multi Columns Form -->

        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Tender Awarding</div>
            <div class="card-body">
                <h5 class="card-title"></h5>           
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="border: 2px solid  #ccd9ff; border-radius: 0;">
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
                                <?= form_open('Awarding/AwardingLetter') ?>

                                <div class="row mb-3">
                                    <label for="Tenderid" class="col-sm-2 form-label">Tender Id Number</label>
                                    <div class="col-md-12">  

                                        <select id="Tenderid" class="form-select" name="Tenderid" onchange="loadDescription(this.value); loadItemCategory(this.value);">
                                            <option value="" selected="">...</option>
                                            <?php foreach ($Tender_list as $key => $result) { ?>
                                                <?php if ($result['PType'] == 'NCB'): ?>
                                                    <option value="<?= $result['Tenderid'] ?>">STF/LOG/C/<?= $result['Tenderid'] ?>/<?= substr($result['BStartDate'], 0, 4) ?></option>
                                                <?php endif; ?>
                                            <?php } ?>
                                            <span class="text-danger"><?= service('validation')->getError('Tenderid') ?></span>                   
                                        </select>
                                    </div> 

                                    <!--get Description from onchange-->   
                                    <div class="col-md-12">  
                                        <label for="Description" class="form-label">Tender Description</label>
                                        <input type="text" class="form-control" id="result" name="Description" >
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <label for="Item" class="col-sm-6 col-form-label">List of Bidders</label>
                                    <label for="Qty" class="col-sm-6 col-form-label">Total Cost without Vat</label>
                                </div>
                                <div class="row mb-3">                               
                                    <div class="col-sm-6"> 
                                        <div id="ItemCategoryList">
                                            <select id="ICatergory"  class="form-select" name="ICatergory"  >

                                                <option selected="">...</option>
                                                <?php foreach ($Bidder_list as $key => $resultn) { ?>
                                                    <option value="<?= $resultn['VendorId'] ?>"><?= $resultn['CompanyName'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <span class="text-danger"><?= service('validation')->getError('ICatergory') ?></span>
                                    </div>

                                    <div class="col-sm-6" id="ItemNameList">

                                        <input type="text" class="form-control" id="Costtotal" name="TAwarding"  >
                                    </div>
                                </div>

                                    <div class="row mb-3">
                                        <label for="ADate" class="col-sm-6 col-form-label">Date of Sign Agreement</label>
                                          <label for="PBond" class="col-sm-6 col-form-label">Bond Validity Period</label>
                                        
                                    </div>
                                    <div class="row mb-3">                               
                                        <div class="col-sm-6"> 
                                            <input type="date" class="form-control" id="ADate" name="ADate"  >
                                            <span class="text-danger"><?= service('validation')->getError('ADate') ?></span>
                                        </div>

                                        <div class="col-sm-6">
                                             <input type="date" class="form-control" id="VDate" name="VDate">
                                            <span class="text-danger"><?= service('validation')->getError('VDate') ?></span>                                                                               
                                        </div>
                                        <span class="text-danger"><?= service('validation')->getError('VDate') ?></span>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="PBond" class="col-sm-6 col-form-label">Performance Bond</label>
                                        <label for="ADate" class="col-sm-6 col-form-label">Performance Bond in Letter</label>
                                    </div>
                                    <div class="row mb-3">                               
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="PBond" name="PBond">                                                                       
                                        <span class="text-danger"><?= service('validation')->getError('PBondl') ?></span>
                                         </div>
                                        <div class="col-sm-6"> 
                                             <input type="text" class="form-control" id="PBondl" name="PBondl">
                                            <span class="text-danger"><?= service('validation')->getError('PBondl') ?></span>
                                        </div>
                                    </div>
 
                                    <div class="text-center">
                                        <!-- use submit button -->
                                        <button type="button" class="btn btn-primary btn-sm"  onclick="constructURLAndRedirect()">Letter of Intent</button>
                                    </div>


                             
   </div>


                                <?= form_close() ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<script>
    function constructURLAndRedirect() {
        //alert('ok');
        var tenderId = document.getElementById('Tenderid').value;
        var vendorId = document.getElementById('ICatergory').value;
        var ADate = document.getElementById('ADate').value;
        var PBond = document.getElementById('PBond').value;
         var PBond = document.getElementById('PBond').value;
        var PBondl = document.getElementById('PBondl').value;
        var VDate = document.getElementById('VDate').value;
        //alert(vendorId);

        var url = "<?= site_url('Awarding/createLetterofIntent/') ?>" + tenderId + '/' + vendorId + '/' + ADate + '/' + PBond + '/' +PBondl + '/' + VDate;
        //alert(url);
        window.location.href = url;
    }


</script>


<script>
    function  loadDescription(Tid) {
        //alert(Tid)
        var formData = "Tenderid=" + Tid + "&";
        //alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('Awarding/getDescription') ?>',
            data: formData,
            success: function (response) {
                $("#result").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
    }



    function loadItemCategory(nid) {
        //alert(nid);
        var formData = "TenderId=" + nid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('Awarding/getBidderList') ?>',
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
        //alert(Iid);
        var VendorId = $("#ICatergory").val();
        var TenderId = $("#Tenderid").val();
        var formData = "TenderId=" + TenderId + "&";
        formData += "VendorId=" + VendorId + "&";
        // alert(formData);
        $.ajax({
            type: 'POST',
            url: '<?= site_url('Awarding/getValue') ?>',
            data: formData,
            success: function (response) {
                // alert(response);
                $("#Costtotal").val(response);
            },
            error: function (xhr, status, error) {
                alert(error);
            }
        });
    }
</script>

<script>
    function getTenderAndVendorIds() {
        var tenderId = document.getElementById('Tenderid').value;
        var vendorId = document.getElementById('ICatergory').value;

        // You can use the retrieved tenderId and vendorId as needed, for example:
        console.log("TenderId: " + tenderId);
        console.log("VendorId: " + vendorId);

        // Optionally, you can redirect to the intended URL with the TenderId and VendorId as parameters
        // window.location.href = "URL_TO_REDIRECT?TenderId=" + tenderId + "&VendorId=" + vendorId;
    }
</script>

