<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>VIEW VOTE</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">VOTE</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>View Vote</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
        <!-- Search Bar -->
        <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Vote</div>
            <div class="card-body">
                <h5 class="card-title"></h5>                           

                <!-- Multi Columns Form -->
                <?= form_open('vote/voteLedger') ?>
                <div class="row g-3">  
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
                        <label for="year" class="form-label">Year</label>
                    </div>
                   <div class="col-md-1">
                           
                            <select id="Year" name="Year" class="form-select" style="border-radius: 40px;border: 1px solid  #000066" >
                                <?php for ($y = date('Y'); $y >= 2000; $y--): 
                                    echo "<option value='{$y}'>{$y}</option>";
                                endfor; ?>
                            </select>
                        </div>
                    <div class="col-md-1">
                        <input style="border-radius: 40px;border: 1px solid  #000066" type="text" class="form-control" id="Vote" name="Vote" placeholder="Vote">
                        <span class="text-danger"><?= service('validation')->getError('Vote') ?></span>
                    </div>
                    <div class="col-md-2">
                        <input style="border-radius: 40px;border: 1px solid  #000066"type="text" class="form-control" id="Description" name="Description" placeholder="Description">
                        <span class="text-danger"><?= service('validation')->getError('Description') ?></span>
                    </div>
                    <div class="col-md-2">
                        <button style="border-radius: 40px;border: 1px solid  #000066"  type="submit" class="btn btn-primary">
                            Search
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbtJREFUSEvV1UuITnEYx/HPkJUMKYmd2dq4bS0kIxuXmoRSQkmR5JZZDKVoynWmJoqkRBaKjShZYCe3srOxsnArYmEWM/6P/m+deZvznqP3nYX/6jyn83++z/V3ukzx6Zpi/8oA83AYy7EkB/EaL3AeX+oGNhlgO4Yxu8TJN+zE/TqQZsB+DOWLdzGCJ9lenSLfh43Z3obbVZAioAfvMS2X51zJ5RPp/Un8wiJ8bgUpAiLavbiDLRWRPcRaDOBUXcBHLMhNfVsB6MUjvMSKuoBRzEgRTU+RjVUA5uIrfrQYhr8uiiX6iZmYlXoQz61ON77jE+bXzeAdFmMlnlcAVuXpeow1dQGncTz14B42VQCi/tGH2JmbdQEL8SH34QjOllwcxFHEZi/7lz2Ib3fgemHRLuFZtjdgD9Zl+0Lel5YDMZlUbE7jegVzSqKLybmcs4i+HcODskzKxC4m41AWu6WpN7/xCk9xLYtdCF9jB0K7DmC8GdSOXK9vEryLaXQPdhIQvm5ha8HpGfQXIe1kEH5i8wPSV3AaJdzdsNsFNPxcxa5sTMiiU4CQ+BvpX/EmSc0Eme8UoHTf/n/AH9BmShm5CxJHAAAAAElFTkSuQmCC"/>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <a style="border-radius: 40px;border: 1px solid  #000066" type="reset" class="btn btn-secondary"href="<?= site_url('vote/voteLedger') ?>">
                            Reset
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcpJREFUSEu11T+oj3EUx/HXTflvQaGITSiEJN2FhcLAouRvslHMysJsuQw20l1uXVEGBhkkoQwiBiEzBixMnqPz+/X0cJ/f98n9faen5/v9nvc553PO+Y4Y8hoZsn1dAPNwBSe6OFUKWIM7WIlZ0w04mZ7PTsPf8BaPMIFnbcCSCI7iGnqApr0AncbLf4FKAHFvHSaxCqHFrtRiP2bgFw7idhNSCoh78zNVx2tGluEqAvQDG/C+DukCaEv1OA7hIXYOAzAHH7AkAQH6s7pEMIZeeq7jTCOkc7icKQvROwHCeP9S3o2mq0O24Hkl9puqfNd2BXxPketOh6gLaj8WVU58TrH7/5sp+oKFiMNfa5dLAFFlcS5sLJ4qgqfYim2I794qSVH0yquqR55g+1SAmzhcNc9FXGiIOEjk87hUNWMUQH8gNlO0B3czl8vxs634a3tRpp8yNbtxv03kmC2juFEry0Gc8PpYaaOtyAm5FLdwqiF4HRbVEsYPpMCbqhS/K+nk9XiQIUfpRQNFjb/AzGqobcSOHHDxRnzEXrxuhtrWyasRM2bzgPw8xpEcFX8dLRkV+3A2X7OYnnPT03vT9eAMErh1vySC/wL8BrLNURk1ZlSoAAAAAElFTkSuQmCC"/>
                        </a>
                    </div>              
                </div>                           
                <!-- End Multi Columns Form -->

                <?= form_close() ?>
            </div>
        </div>

        <!-- End Search Bar -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <!-- Table Variants -->
                <table id="voteTable" class="table">
                    <thead style="vertical-align: middle; border-bottom: 2px solid #001a66; border-top:  2px solid #001a66">
                        <tr>
                            <th scope="col">Year</th>
                            <th scope="col">Vote</th>
                            <th scope="col">Description</th>
                            <th scope="col" style="text-align: center">Allocation</th>
                            <th scope="col">Expenditure</th>
                            <th scope="col" style="text-align: right">Balance</th>
                            <th scope="col">Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $TAllocation = 0;
                        $TExpenditure = 0;
                        $TBalance = 0;
                        foreach ($list as $key => $result) {
                            $TAllocation += $result['Allocation'];
                            $TExpenditure += $result['tCost'];
                            $TBalance += $result['balanceamount'];
                            ?>
                            <tr>
                                <th scope="row"><?= $result['Year'] ?> </th>
                                <td><?= $result['Vote'] ?></td>
                                <td><?= $result['Description'] ?></td>
                                <td style="text-align: right"><?= number_format($result['Allocation'], 2) ?></td>
                                <td style="text-align: right"><?= number_format($result['tCost'], 2) ?></td>
                                <td style="text-align: right"><?= number_format($result['balanceamount'], 2) ?></td>        
                                <td><?= $result['percentage'] ?>%</td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                        <tr>
                            <td colspan="3"></td>
                            <th style="text-align: right "><?= number_format($TAllocation, 2) ?></th>
                            <th style="text-align: right "><?= number_format($TExpenditure, 2) ?></th>
                            <th style="text-align: right "><?= number_format($TBalance, 2) ?></th>

                        </tr>

                    </tbody>
                </table>
                <!-- End Table Variants -->

            </div>
        </div>
        </section>
</main>

<script>
    function confirmDelete(id) {
        if (confirm("Are you sure you want to delete this record?")) {
            window.location.href = '<?= site_url("vote/removeItem/") ?>' + id;
        }
    }
    function getCurrentTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
        return timeString;
    }

    function confirmDeleteModal(voteid) {
        alert(voteid);
        var formData = "voteid=" + voteid + "&";
        // Set the item ID in the modal body
        $("#msg").html("Are you sure you want to delete item ID: " + voteid + "?");

        // Set the delete button's click event handler
        $("#confirmDelete").off("click").on("click", function () {
            // Perform the deletion logic here
            console.log("Deleting item ID: " + voteid);

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
</script>

<script>
    function changeEntries(entries) {
        // Get all table rows
        var rows = document.querySelectorAll('#voteTable tbody tr');

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