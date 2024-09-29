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
                    <?= form_open('Payments/BidBond') ?>
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
                            </select>
                        </div>
                        <div class="col-md-1">
                            <label for="entries" class="form-label">Entries</label>
                        </div>

                        <div class="col-md-2">
                            <input style="border-radius: 40px;border: 1px solid  #000066"  type="text" class="form-control" id="TenderNo" name="TenderId" placeholder="Procurement Number">                                      
                        </div>
                        <div class="col-md-2">
                            <input style="border-radius: 40px;border: 1px solid  #000066"  type="text" class="form-control" id="CompanyName" name="CompanyName" placeholder="Company Name">
                        </div>

                        <div class="col-md-2">
                            <button style="border-radius: 40px;border: 1px solid  #000066"  type="submit" class="btn btn-primary">
                                Search
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbtJREFUSEvV1UuITnEYx/HPkJUMKYmd2dq4bS0kIxuXmoRSQkmR5JZZDKVoynWmJoqkRBaKjShZYCe3srOxsnArYmEWM/6P/m+deZvznqP3nYX/6jyn83++z/V3ukzx6Zpi/8oA83AYy7EkB/EaL3AeX+oGNhlgO4Yxu8TJN+zE/TqQZsB+DOWLdzGCJ9lenSLfh43Z3obbVZAioAfvMS2X51zJ5RPp/Un8wiJ8bgUpAiLavbiDLRWRPcRaDOBUXcBHLMhNfVsB6MUjvMSKuoBRzEgRTU+RjVUA5uIrfrQYhr8uiiX6iZmYlXoQz61ON77jE+bXzeAdFmMlnlcAVuXpeow1dQGncTz14B42VQCi/tGH2JmbdQEL8SH34QjOllwcxFHEZi/7lz2Ib3fgemHRLuFZtjdgD9Zl+0Lel5YDMZlUbE7jegVzSqKLybmcs4i+HcODskzKxC4m41AWu6WpN7/xCk9xLYtdCF9jB0K7DmC8GdSOXK9vEryLaXQPdhIQvm5ha8HpGfQXIe1kEH5i8wPSV3AaJdzdsNsFNPxcxa5sTMiiU4CQ+BvpX/EmSc0Eme8UoHTf/n/AH9BmShm5CxJHAAAAAElFTkSuQmCC"/>
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a style="border-radius: 40px;border: 1px solid  #000066" type="reset" class="btn btn-secondary"href="<?= site_url('Payments/DocummentCharges') ?>">
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
            <div class="card-body">
                <h5 class="card-title"></h5>
                <?= form_open_multipart('Payments/BidBond') ?>
                <div class="table-responsive">

                    <table id="DChargesTable" class="table table-striped thead-light">
                        <thead style="text-align: center; vertical-align: middle; border-bottom: 2px solid #001a66; border-top:  2px solid #001a66">
                            <tr>
                                <th scope="col">Con. Number</th>
                                <th scope="col">Procurement Number</th>
                                <th scope="col">Title of the Procurement</th>
                                <th scope="col">Bid Bond</th>
                                <th scope="col" class="col">Company Name</th> 
                                <th scope="col">Bid Bond Starting Date</th>
                                <th scope="col">Bid Bond Closing Date</th>

                                <th scope="col" class="col">Payment Receipt</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody  style="vertical-align: middle;">
                            <?php
                            $i = 1;
                            foreach ($listP as $key => $resultP) {
                                ?>
                                <tr>
                                    <td><?= $i ?> </td>
                                    <td> <input type="hidden" class="form-control" id="TenderId" name="TenderId" value="<?= $resultP['TenderId'] ?>">STF/LOG/C/<?= $resultP['TenderId'] ?></td>
                                    <td><input type="hidden" class="form-control" id="Description" name="Description" value="<?= $resultP['Description'] ?>"><?= $resultP['Description'] ?> </td>
                                    <td><input type="hidden" class="form-control" id="BSecurity" name="BSecurity" value="<?= $resultP['BSecurity'] ?>"><?= $resultP['BSecurity'] ?></td>
                                    <td><input type="hidden" class="form-control" id="business_name" name="business_name" value="<?= $resultP['business_name'] ?>"><?= $resultP['business_name'] ?></td>
                                    <td><input type="hidden" class="form-control" id="BStart" name="BStart" value="<?= $resultP['BEnd'] ?>"><?= $resultP['BEnd'] ?></td>
                                    <td><input type="hidden" class="form-control" id="VendorId" name="VendorId" value="<?= $resultP['UserId'] ?>">
                                        <?php
                                        $closingDate = date('Y-m-d', strtotime($resultP['BOpen'] . ' +30 days'));
                                        $highlightColor = '';

                                        // Check if the current date is equal to $resultP['BOpen'] + 23 days
                                        if (date('Y-m-d') == date('Y-m-d', strtotime($resultP['BOpen'] . ' +23 days'))) {
                                            $highlightColor = 'background-color: red;';
                                        }
                                        ?>
                                        <button type="button" class="btn" style="<?= $highlightColor ?>"> <?= $closingDate ?> </button>
                                    </td>
                                    <td> <a href="<?= site_url('public/images/uploads/' . $resultP['BidDOC']) ?>" target="_blank">View Documents</a></td>
                                    <td><?= $resultP['LetterNo'] ?></td>
                                   

                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>                            
                </div>
                <?= form_close() ?> 
            </div>
        </div>
    </div>
</div>

</main>

<script>
    function changeEntries(entries) {
        // Get all table rows
        var rows = document.querySelectorAll('#DChargesTable tbody tr');

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