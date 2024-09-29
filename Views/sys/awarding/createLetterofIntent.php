<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>SPIMS_Dashboard</title>
        <!-- Vendor CSS Files -->
        <link href="<?= base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
        <link href="<?= base_url('public/assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="<?= base_url('public/assets/css/style.css') ?>" rel="stylesheet">
    </head>

    <main id="main" class="main">
        <div class="pagetitle">
            <div class="row">


                <!-- Tender->View -->

                <?= form_open('Awarding/createLetterofIntent') ?>

                <div class="row mb-3">
                    <img src="<?= base_url('public/images/uploads/letterhead.png') ?>" class="img-fluid mx-auto d-block service-image"  alt="">

                    <br>  

                    <?php foreach ($listBidder as $key => $result) { ?>
                        <p><?= $result['business_name'] ?></p> 
                        <p><?= $result['Titles'] ?>.<?= $result['business_owner_Fname'] ?> <?= $result['business_owner_Lname'] ?></p>
                        <p><?= $result['street'] ?>,<?= $result['city'] ?>,<?= $result['province'] ?>,<?= $result['country'] ?></p>
                        <br><br>
                        <p>Tel.<?= $result['phone'] ?></p> 
                        <p>Email. <?= $result['Email'] ?></p>

                        <div class="col-sm-4" id="ItemNameList">
                            <p id="currentDate"></p>
                        </div>
                        <h2 style="text-align: center">Award of Procurement</h2>
                        <h3 style="text-align: center">STF/LOG/C/<?= $result['Tenderid'] ?>/<?= substr($result['BStartDate'], 0, 4) ?> - <?= $result['Description'] ?> </h3>
                        <h4 style="text-align: center">Total Cost -Rs.<?= number_format((($result['Awarding']) * (($result['VAT']) / 100)), 2) ?>(With VAT<?= $result['VAT'] ?> %)</h4>
                        <p>I am pleased to inform you that the STF Procurement Committee (up to 25 Million) has decided to award you the Procurement to <?= $result['Description'] ?> Spares as per the Bid submitted by you on <?= $result['SubmittedDate'] ?></p>
                        <br><br>
                        <p>To issue the formal Letter of Intent and to sign the agreement with regard to the above tender, please be present at the Special Task Force Headquarters, No: 223, Bauddhaloka Mawatha, Colombo 07 on <strong><?= $ADate ?> </strong>along with two witnesses, your company seal and together with an on-demand unconditional encashable Performance Bond in favor of the Commandant, Special Task Force for Rs. <strong><?= number_format($PBond, 2) ?></strong>
                            (<strong><?= $PBond1 ?> </strong>) valid up to <strong><?= $VDate ?> </strong> issued by any Commercial Bank Opening in Sri Lanka approved by Central bank. The inability to sign the contract on the stipulated period will cause to take action under the government tender regulations. </p>
                        <br><br><!-- add date and amount -->
                        <p>The inability to produce the above-mentioned documents on the prescribed date could result in to cancellation of the tender and to forfeiting of your Bid Bond. Accordantly take action to sign the agreement on or before the date mentioned above. The format of the performance Bond is herewith attached. If you need further clarifications, please contact the OIC/Procurement STF on T.P. 0112556506.</p>
                        <br><br>
                        <p>Failure to attend the signing of an agreement on the scheduled day may cause a reduction in the Supply period. </p>                              
                        <br><br>
                        <p>In order to identify the three representatives authorized by your company to sign the agreement, please send their Names and National Identity card numbers on Company letterhead to this office. </p>

                        <p>Director / Logistics,</p> <br><br>
                        <p>Special Task Force.</p>   

                    <?php } ?>


                </div> 

            </div>
        </div>
  <?php if((session()->get('UserType'))=='ProcurementOfficer'){ ?>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
                            <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                        </div>
                    <?php } ?> 


        <?= form_close() ?>

    </div>
</div>
</div>
</div>
</div>

</main>



<script>
    function  loadDescription(Tid) {
        alert(Tid)
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
        alert(Iid);
        var formData = "TenderId=" + Iid + "&";
        $.ajax({
            type: 'POST',
            url: '<?= site_url('Awarding/getValue') ?>',
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
</script>
<script>
    // Get current date
    var currentDate = new Date();

    // Format the date as YYYY-MM-DD
    var formattedDate = currentDate.toISOString().split('T')[0];

    // Set the content of the <p> tag
    document.getElementById('currentDate').textContent = formattedDate;
</script>
