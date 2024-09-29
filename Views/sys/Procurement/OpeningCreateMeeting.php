<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-6">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>ASSIGN COMMITTEE</h1>       
            </div>
            <div class="col-6">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">BID EVALUATION</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>Assign Committee</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
        <!-- Alert Messages -->
        <?php if (isset($msg)): ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <?= $msg; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <!-- End of Alert Messages -->
        <section class="section dashboard">        
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #7070db; color: white;">BID Evaluation Committee Members</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>    
                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('Procurement/OpeningCreateMeeting') ?>

                    <div class="row g-3">                  
                        <label for="PNumber" class="col-sm-12 form-label">List of Tender Opening</label>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <div class="row g-3">
                                <div class="col-sm-12">
                                    <select id="BOpenId" class="form-select" name="BOpenId"  onchange="loadopendate(this.value)">
                                        <option value="" selected="">...</option>
                                        <?php foreach ($lista as $key => $resulta) { ?>

                                            <option value="<?= $resulta['id'] ?>"><?= $resulta['BOpen'] ?></option>

                                        <?php } ?>
                                    </select>
                                    <span class="text-danger"><?= service('validation')->getError('BOpenId') ?></span>
                                </div>

                            </div>

                        </div>
                      
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="BOpendate" name="BOpen">
                            </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="MDate" class="form-label">Meeting Assign Date</label>   
                                <input type="datetime-local" class="form-control" id="MDate" name="MDate">
                                <span class="text-danger"><?= service('validation')->getError('MDate') ?></span>
                            </div>
                            <div class="col-sm-6">
                                <label for="Purpose" class="form-label">Purpose</label>                                     
                                <input type="text" class="form-control" id="Purpose" name="Purpose" value="Bid Opening">   
                                <span class="text-danger"><?= service('validation')->getError('Purpose') ?></span>
                            </div>

                        </div>



                        <div class="row g-3">
                            <div class="table-responsive" style="margin-top: 20px;"> <!-- Added margin-top to create space -->
                                <table class="table table-sm table-striped table-coler-#b3d9ff table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center align-middle">Full Name</th>
                                            <th scope="col" class="text-center align-middle">Tel.No</th>
                                            <th scope="col" class="text-center align-middle">Email</th>
                                            <th scope="col" class="text-center align-middle">Division</th>
                                            <th scope="col" class="text-center align-middle">Designation</th>
                                            <th scope="col" class="text-center align-middle">Committee</th>
                                            <th>Select Request</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($list as $key => $result) {
                                            ?>
                                            <tr>
                                                <td style="font-size: 12px;">00<?= $i ?>-<?= $result['CivilStatus'] ?> . <?= $result['FirstName'] ?> <?= $result['LastName'] ?></td>
                                                <td style="font-size: 12px;"><?= $result['TelNo'] ?></td>
                                                <td style="font-size: 12px;"><?= $result['Email'] ?></td>
                                                <td style="font-size: 12px;"><?= $result['Division'] ?></td>
                                                <td style="font-size: 12px;"><?= $result['Designation'] ?></td>
                                                <td style="font-size: 12px;"><?= $result['EmpType'] ?></td>
                                                <td> <input type="checkbox" class="form-check" id="EmpId<?= $i ?>" name="EmpId[<?= $result['id'] ?>]" value="<?= $result['id'] ?>"></td>
                                                <!-- try to save cmember table
                                               <td><input type="hidden" name="Name" value="<?= $i ?>-<?= $result['CivilStatus'] ?> . <?= $result['FirstName'] ?> <?= $result['LastName'] ?>"></td> -->
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <!-- End Table Variants -->
                                <button type="submit" nsme="assignTEC" class="btn btn-outline-primary rounded">Assign opening Committee</button>

                                <?= form_close() ?>

                            </div>
                        </div>

                        </section>
                    </div>
                    </main>


                    <script>
                        function  loadopendate(Oid) {
                           alert(Oid);
                            var formData = "id=" + Oid + "&";
                            //alert(formData);
                            $.ajax({
                                type: 'POST',
                                url: '<?= site_url('Procurement/getOpendate') ?>',
                                data: formData,
                                success: function (response) {
                                    //alert(response);
                                    $("#BOpendate").val(response);
                                },
                                error: function (xhr, status, error) {
                                    alert(error);
                                }
                            });
                        }
                    </script>

