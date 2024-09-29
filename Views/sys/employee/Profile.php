<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>EMPLOYEE PROFILE</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>Profile</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div>
        <!-- End Page Title -->
        <!-- updateProfile.php -->
        <section class="section dashboard">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>                          
                            <div class="text-center">
                                <h2 style="font-family: Algerian;font-style:  italic;"><?= session()->get('UserName') ?></h2>
                                <img src="<?= base_url('public/images/uploads/' . session()->get('ProfileImage')) ?>" style="border-radius: 50%; width: 100px; height: 100px; position: absolute; top: 10px; right: 10px;" alt="Profile Image">
                            </div>
                            
                                                        <?php foreach ($list as $key => $result): ?>
                                <div class="form-group">
                                    <label for="employee_name" class="form-label">Name</label>
                                    <input style="border-radius: 40px;border: 1px solid  #000066"  type="text" class="form-control" id="employee_name" value="<?= $result['CivilStatus'] ?> . <?= $result['FirstName'] ?> <?= $result['LastName'] ?>" readonly>
                                </div>
                            
                                <div class="form-group">
                                    <label for="employee_email" class="form-label">Email</label>
                                    <input style="border-radius: 40px;border: 1px solid  #000066"type="email" class="form-control" id="employee_email" value="<?= $result['Email'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="employee_tel" class="form-label">Telephone Number</label>
                                    <input style="border-radius: 40px;border: 1px solid  #000066" type="text" class="form-control" id="employee_tel" value="<?= $result['TelNo'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="employee_address" class="form-label">Address</label>
                                    <textarea style="border-radius: 40px;border: 1px solid  #000066" class="form-control" id="employee_address" readonly><?= $result['Address'] ?></textarea>
                                </div>
                             <div class="form-group">
                                    <label for="employee_name" class="form-label">Division</label>
                                    <input style="border-radius: 40px;border: 1px solid  #000066"  type="text" class="form-control" id="employee_name" value="<?= $result['Division'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="employee_email" class="form-label">Designation</label>
                                    <input style="border-radius: 40px;border: 1px solid  #000066"type="email" class="form-control" id="employee_email" value="<?= $result['Designation'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="employee_tel" class="form-label">Employee Type</label>
                                    <input style="border-radius: 40px;border: 1px solid  #000066" type="text" class="form-control" id="employee_tel" value="<?= $result['EmpType'] ?>" readonly>
                                </div>
                            <?php endforeach; ?>
                     
                
               
            <div class="text-center mt-4">
                <a href="<?= base_url('employee/view') ?>" class="btn btn-outline-primary">Back to Employee List</a>
            </div>
                    </div>
                 </div>
        </section>
  
</main>



<script>
    function changeEntries(entries) {
        // Get all table rows
        var rows = document.querySelectorAll('#employeeTable tbody tr');

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

