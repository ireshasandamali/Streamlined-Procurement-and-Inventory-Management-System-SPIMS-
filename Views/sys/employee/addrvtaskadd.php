<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">

            <hr style="background-color: black; height: 2px;">
            <div class="col-8">
                <h1><img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtlE0OQDAUhD/nkEjEgtu4jI0bcCEHsbETEvcgRBN/1SdNbei282Y603Y8HC/PMT+vCqRAASSWrhogA6qZZ+tgAHxLcjXeAtFRYFx3bWPb8WzJfgGV/x+R8SF/ICJjBkLA8seuPppw3gg7CfRAYByTATogPDqY27QEYhmHFlUD+VWbSngf99XT5nQioEh1Dm8PKXHgXEByN1qMxIGVwAR45SIZPNjn9AAAAABJRU5ErkJggg=="/>REGISTER EMPLOYEE</h1>       
            </div>
            <div class="col-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
                    <ol class="breadcrumb">
                        <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                        <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><img  style="margin-right: 10px;"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbRJREFUSEvdlLsrx1EYxj8/chksDBgUi0UZlMFqtpgpl0XkMiiEchmQSwbltkgGFps/wGqhjFJiUSaTQpHvo/PT+R3n/M7XIOUdz3nO+7zP+z7nzfDLkfnl/PwpQSNQBFxEVApXDJz7cD4FAs8BY+bBGjALvDoJhNP5uIXTuxcb5xK0AAdAvZPsGugCzsx5CHcDdFq4nBksJFVORdqxDLwnVU5GcKtZZbaCGlN9a+DxqVGha6nMh+sF7gT0zaAHWAfKDdEjMArsO8TdBleRDxeyaRWwZQoYAB4CqiqBHdO2QR8uRFAHbBj79QO3AYIoziUoMQOcAEpN0mdAw12yLBjCrSRFLdpWtQnagE2gNlCtVIyYO6lT9b7QcIeBE3fI7cBu0nv11Reag/osRXsR3BBw7HORnCMHyUl2yEH62TovMATyug8nx8l5nxEasjwuryv0g9+AbaDBnF0BfUChg9NfyYl827QssWB1UsQ80BFo25HZR/eJwicfJraulXwmkDx7LNdMhzAxAr1rBg5TLEAvRxoCPXRXs/wude4K/0aSliD7sMmshctI276uf0qQNu8/IvgAxV1TGWiUz4EAAAAASUVORK5CYII="/>Register Employee</li>
                    </ol>
                </nav>   
            </div>
            <hr style="background-color: #00001a; height: 2px;">
        </div><!-- End Page Title -->
        <section class="section dashboard">        
            <div class="card" style="margin-top: 10px;"> 
                <div class="card-header" style="background-color: #7070db; color: white;">Employee Registration Form</div>
                <div class="card-body">
                    <!-- Alert Messages -->
                    <?php if (isset($msg)): ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= $msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <!-- End of Alert Messages -->

                    <!-- Multi Columns Form -->
                    <?= form_open_multipart('employee/add') ?>
                    <div class="row g-3" style="margin-top: 5px">
                        <div class="col-md-2">
                            <label for="CivilStatus" class="form-label">Title</label>
                            <select id="CivilStatus" class="form-select" name="CivilStatus">
                                <option selected="selected">...</option>
                                <option value="Mr" <?php
                                if (set_value('CivilStatus') == 'Mr') {
                                    echo 'selected';
                                }
                                ?> >Mr</option>
                                <option value="Mrs" <?php
                                if (set_value('CivilStatus') == 'Mrs') {
                                    echo 'selected';
                                }
                                ?> >Mrs</option>
                                <option value="Miss" <?php
                                if (set_value('CivilStatus') == 'Miss') {
                                    echo 'selected';
                                }
                                ?> >Miss</option>
                                <option value="Ms" <?php
                                if (set_value('CivilStatus') == 'Ms') {
                                    echo 'selected';
                                }
                                ?> >Ms</option>  
                                <option value="Rev" <?php
                                if (set_value('CivilStatus') == 'Rev') {
                                    echo 'selected';
                                }
                                ?> >Rev</option>  
                            </select>
                            <span class="text-danger"><?= service('validation')->getError('CivilStatus') ?></span>
                        </div>
                        <div class="col-md-4">
                            <label for="FirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?= set_value('FirstName') ?>">
                            <span class="text-danger"><?= service('validation')->getError('FirstName') ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="LastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="LastName" name="LastName" value="<?= set_value('LastName') ?>">
                            <span class="text-danger"><?= service('validation')->getError('LastName') ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="Email"value="<?= set_value('email') ?>">
                            <span class="text-danger"> <?= service('validation')->getError('email') ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="TelNo" class="form-label">Telephone Number</label>
                            <input type="text" class="form-control" id="TelNo" name="TelNo" value="<?= set_value('TelNo') ?>">
                             <span class="text-danger"><?= service('validation')->getError('TelNo') ?></span>
                        </div>
                        <div class="col-12">
                            <label for="Address" class="form-label">Address</label>
                            <textarea  class="form-control" id="Address"   name="Address" placeholder="1234 Main St"><?= set_value('Address') ?></textarea>
                            <span class="text-danger"><?= service('validation')->getError('Address') ?></span>
                        </div>

                        <div class="col-md-6">
                            <label for="DOB" class="form-label">DOB</label>
                            <input type="date" class="form-control" id="DOB" name="DOB" value="<?= set_value('DOB') ?>">
                            <span class="text-danger"><?= service('validation')->getError('DOB') ?></span>
                        </div>

                        <div class="col-md-6">
                            <label for="NIC" class="form-label">NIC</label>
                            <input type="text" class="form-control" id="NIC" name="NIC" value="<?= set_value('NIC') ?>">
                            <span class="text-danger"><?= service('validation')->getError('NIC') ?></span>
                        </div>

                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" value="<?= set_value('gender') ?>">
                                <label class="form-check-label" for="male">Male</label>
                                <span class="text-danger"><?= service('validation')->getError('gender') ?></span>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female"value="<?= set_value('gender') ?>">
                                <label class="form-check-label" for="female">Female</label>
                                <span class="text-danger"><?= service('validation')->getError('gender') ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="Division" class="form-label">Division</label>

                            <select id="Division" class="form-select" name="Division" value="<?= set_value('Division') ?>">
                                <option value="" selected="">...</option>
                                <option value="LogisticDivision" <?php
                                if (set_value('Division') == 'Logistic Division') {
                                    echo 'selected';
                                }
                                ?> > Admin</option>
                                <option value="Admin" <?php
                                if (set_value('Division') == 'Admin') {
                                    echo 'selected';
                                }
                                ?> > Planing Division</option>
                                <option value="Planing Division" <?php
                                        if (set_value('Division') == 'Planing Division') {
                                            echo 'selected';
                                        }
                                        ?> > Logistic Division</option>
                                <option value="TransportDivision" <?php
                                if (set_value('Division') == 'Transport Division') {
                                    echo 'selected';
                                }
                                ?> >Transport Division</option>
                                <option value="CommunicationDivision" <?php
                                if (set_value('Division') == 'Communication Division') {
                                    echo 'selected';
                                }
                                ?> >Communication Division</option>
                                <option value="ComputerDivision" <?php
                                        if (set_value('Division') == 'Computer Division') {
                                            echo 'selected';
                                        }
                                        ?> >Computer Division</option>  
                                <option value="CulturalDivision" <?php
                                if (set_value('Division') == 'Cultural Division') {
                                    echo 'selected';
                                }
                                ?> >Cultural Division</option>
                                <option value="HRMDDivision" <?php
                                if (set_value('Division') == 'HRMD Division') {
                                    echo 'selected';
                                }
                                ?> >HRMD Division</option>                           
                                <option value="SearchDivision" <?php
                                        if (set_value('Division') == 'Search Division') {
                                            echo 'selected';
                                        }
                                        ?> >Search Division</option>
                                <option value="Transportivision" <?php
                                        if (set_value('Division') == 'Transport Division ') {
                                            echo 'selected';
                                        }
                                        ?> >Transport Division</option>  
                                <option value="SWATDivision" <?php
                                if (set_value('Division') == 'SWAT Division ') {
                                    echo 'selected';
                                }
                                ?> >SWAT Division</option>
                                <option value="FinanceDivision" <?php
                                if (set_value('Division') == 'Finance Division ') {
                                    echo 'selected';
                                }
                                ?> >Finance</option>
                                <option value="MinistryDivision" <?php
                                if (set_value('Division') == 'Ministry ') {
                                    echo 'selected';
                                }
                                ?> >Ministry of Public Security</option>
                                <option value="OtherDivision" <?php
                                if (set_value('Division') == 'Other Division ') {
                                    echo 'selected';
                                }
                                ?> >Other Division</option>
                            </select>          
                            <span class="text-danger"><?= service('validation')->getError('Division') ?></span>
                        </div>     
                        <div class="row mb-3"> 
                            <label for="CName" class="col-sm-6 col-form-label">Camp</label>
                            <select id="CName" class="form-select col-sm-6 " name="CName" value="<?= set_value('CName') ?>">
                                <option value="" selected="">...</option>
                                <?php foreach ($camp_list as $key => $result) { ?>
                                    <option value="<?= $result['CName'] ?>"><?= $result['CName'] ?></option>
                                <?php } ?>
                            </select>
                            <span class="text-danger"><?= service('validation')->getError('CName') ?></span>
                        </div>

                        <div class="col-md-6">
                            <label for="Designation" class="form-label">Designation</label>
                            <select id="Designation" class="form-select" name="Designation" value="<?= set_value('Designation') ?>">
                                <option value="" selected="">...</option>
                                <?php foreach ($designation_list as $key => $result) { ?>
                                    <option value="<?= $result['Designation'] ?>"><?= $result['Designation'] ?></option>
                                        <?php } ?>
                            </select>
                            <span class="text-danger"><?= service('validation')->getError('Designation') ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="task" class="form-label">Task</label>
                            <select id="task" class="form-select" name="task" value="<?= set_value('task') ?>">
                                <option value="" selected="">...</option>
                                <?php foreach ($task_list as $key => $resultt) { ?>
                                    <option value="<?= $resultt['CName'] ?>"><?= $resultt['CName'] ?></option>
                                        <?php } ?>
                            </select>
                        </div>



                        <div class="col-md-6">
                            <label for="Division" class="form-label">Employee Type</label>

                            <select id="EmpType" class="form-select" name="EmpType" value="<?= set_value('EmpType') ?>">
                                <option value="" selected="">Choose Employee Type</option>
                                <option value="Administrtor" <?php
                                        if (set_value('EmpType') == 'Administrtor') {
                                            echo 'selected';
                                        }
                                        ?> > Admin</option>
                                <option value="Procurement Chairmen" <?php
                                if (set_value('EmpType') == 'Procurement Chairmen') {
                                    echo 'selected';
                                }
                                ?> >Procurement Chairmen</option>
                                <option value="Procurement Officer" <?php
                                if (set_value('EmpType') == 'Procurement Officer') {
                                    echo 'selected';
                                }
                                ?> >Procurement Office</option>
                                <option value="Procurement Planning Officer" <?php
                                if (set_value('EmpType') == 'Procurement Planning Officer') {
                                    echo 'selected';
                                }
                                ?> >Procurement Planning Officer</option>
                                <option value="TEC Chairmen" <?php
                                if (set_value('EmpType') == 'TEC Chairmen') {
                                    echo 'selected';
                                }
                                ?> >TEC Chairmen</option>  
                                <option value="TEC Member" <?php
                                if (set_value('EmpType') == 'TEC Member') {
                                    echo 'selected';
                                }
                                ?> >TEC Member</option>  
                                <option value="PC Member" <?php
                                if (set_value('EmpType') == 'Procurement Committee Member') {
                                    echo 'selected';
                                }
                                ?> >Procurement Committee Member</option>                           
                                <option value="Director Logistic" <?php
                                if (set_value('EmpType') == 'Director Logistic') {
                                    echo 'selected';
                                }
                                ?> >Director Logistic</option>
                                <option value="Divisional Director" <?php
                        if (set_value('EmpType') == 'Divisional Director') {
                            echo 'selected';
                        }
                                ?> >Divisional Director</option>                           
                                <option value="Requisitioner" <?php
                        if (set_value('EmpType') == 'Requisitioner') {
                            echo 'selected';
                        }
                                ?> >Requisitioner</option>
                                <option value="Requester" <?php
                        if (set_value('EmpType') == 'Requester ') {
                            echo 'selected';
                        }
                                ?> >Requester</option>  
                                <option value="Bid Opening Committee " <?php
                        if (set_value('EmpType') == 'Bid Opening Committee') {
                            echo 'selected';
                        }
                                ?> >Bid Opening Committee </option> 
                                <option value="Bid Opening Committee " <?php
                        if (set_value('EmpType') == 'BidOpeningCommitteeChairmen') {
                            echo 'selected';
                        }
                                ?> >Bid Opening Committee Chairmen </option> 
                            </select>          
                            <span class="text-danger"><?= service('validation')->getError('EmpType') ?></span>

                        </div>  
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="UserName">User Name</label>
                            <input type="text" name="UserName" class="form-control" id="UserName" >
                            <span class="text-danger"><?= service('validation')->getError('UserName') ?></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Password">Password</label>
                            <input type="password" name="Password" class="form-control" id="Password" >
                            <span class="text-danger"><?= service('validation')->getError('Password') ?></span>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Your Profile Image</label>
                        <input class="form-control" type="file" id="profile_image" name="profile_image">
                    </div>

                    <div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary rounded">Submit</button>                      
                            <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                        </div>

<?= form_close() ?>

                    </div>
                </div>
            </div>
        </section>
    </div>

</main>