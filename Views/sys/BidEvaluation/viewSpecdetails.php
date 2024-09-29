
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-6">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW SUBMITTED BIT LIST</h1>       
            </div>
            <div class="col-6">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">BID OPENING</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Submitted Bit List</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
        <section class="section dashboard">        


            <!--Spec table-->
            <section>
                    <div class="card" style="margin-top: 10px;"> 
                        <div class="card-header" style="background-color: #267326; color: white;">Technical Evaluation </div>
                        <div class="card-body">
                              <?= form_open_multipart('BidEvaluation/SaveSpecStatus') ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Sub Component</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Priority Status</th>
                                    <th scope="col">Bidders Offer</th>
                                    <th scope="col">Remarks</th>
                                    <th scope="col">Marks</th>
                                </tr>


                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($lists as $key => $results) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?= $i ?> </th>
                                        <td><input type="hidden" name="Item[<?= $results['SpecId'] ?>]" value="<?= $results['IId'] ?>"><input type="hidden" class="form-control" id="SpecId" name="SpecId[<?= $results['SpecId'] ?>]"value="<?= $results['SpecId'] ?>"><?= $results['ItemName'] ?></td>
                                        <td><input type="hidden" name="Itemid[<?= $results['SpecId'] ?>]" value="<?= $results['Item'] ?>"><?= $results['SubComponent'] ?></td>
                                        <td><?= $results['Detail'] ?></td>
                                        <td><?= $results['Priority'] ?> </td>         
                                        <td><input type="hidden" name="BiddersOffer[<?= $results['SpecId'] ?>]" value="<?= $results['BiddersOffer'] ?>"><?= $results['BiddersOffer'] ?></td>
                                        <td><input type="hidden" name="Remarks[<?= $results['SpecId'] ?>]" value="<?= $results['Remarks'] ?>"><?= $results['Remarks'] ?> </td>
                                        <td>
                                        <input type="text" class="form-control" id="Marks" name="Marks[<?= $results['SpecId'] ?>]">

                                            <span class="text-danger"> <?= service('validation')->getError('Marks') ?></span>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                                    
                            </tbody>
                        </table>
                    <div class="text-center">
                        <input  type="hidden" id="CompanyName" name="CompanyName" value="<?= $results['business_name']; ?>">
                        <input type="hidden" name="TenderId" value="<?= $TenderId ?>"><input type="hidden" name="VendorId" value="<?= $VendorId ?>">
                                <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
                                <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                            </div>
                            <?= form_close() ?>

                        </div>
                    </div>
                </section>

</main>