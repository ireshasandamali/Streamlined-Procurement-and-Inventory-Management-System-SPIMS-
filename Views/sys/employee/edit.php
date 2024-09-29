<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="container" style=" background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px;  border-radius: 10px;">        
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
           <ol class="breadcrumb">
               <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Employee</li>
            </ol>
        </nav>    
    </div><!-- End Page Title -->
    <section class="section dashboard">        
         <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Employee Registration Form</div>
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

                <!-- Multi Columns Form -->
                <?= form_open('employee/update') ?>
                <div class="row g-3" style="margin-top: 5px">
                     <div class="col-md-2">
                            <label for="CivilStatus" class="form-label">Title</label>
                            <select id="CivilStatus" class="form-select" name="CivilStatus">
                                <option selected="selected"><?= ($employee['CivilStatus']) ?></option>
                                <option value="Mr" <?php
                                if ($employee['CivilStatus'] == 'Mr') {
                                    echo 'selected';
                                }
                                ?> >Mr</option>
                                <option value="Mrs" <?php
                                if ($employee['CivilStatus']  == 'Mrs') {
                                    echo 'selected';
                                }
                                ?> >Mrs</option>
                                <option value="Miss" <?php
                                if ($employee['CivilStatus'] == 'Miss') {
                                    echo 'selected';
                                }
                                ?> >Miss</option>
                                <option value="Ms" <?php
                                if ($employee['CivilStatus'] == 'Ms') {
                                    echo 'selected';
                                }
                                ?> >Ms</option>  
                                <option value="Rev" <?php
                                if ($employee['CivilStatus'] == 'Rev') {
                                    echo 'selected';
                                }
                                ?> >Rev</option>  
                            </select>
                            <span class="text-danger"><?= service('validation')->getError('CivilStatus') ?></span>
                        </div>
                    <div class="col-md-5">
                        <label for="FirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?= set_value('FirstName',$employee['FirstName']) ?>">                        
                        <span class="text-danger"><?= service('validation')->getError('FirstName') ?></span>
                    </div>
                    <div class="col-md-5">
                        <label for="LastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="LastName" name="LastName" value="<?= set_value('LastName',$employee['LastName']) ?>">
                        <span class="text-danger"><?= service('validation')->getError('LastName') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="Email" value="<?= set_value('Email',$employee['Email']) ?>">
                        <span class="text-danger"> <?= service('validation')->getError('email') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="TelNo" class="form-label">Telephone Number</label>
                        <input type="text" class="form-control" id="TelNo" name="TelNo" value="<?= set_value('TelNo',$employee['TelNo']) ?>" >
                    </div>
                    <div class="col-12">
                        <label for="Address" class="form-label">Address</label>
                        <textarea  class="form-control" id="Address"   name="Address" placeholder="1234 Main St"><?= set_value('Address',$employee['Address']) ?></textarea>
                        <span class="text-danger"><?= service('validation')->getError('Address') ?></span>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="DOB" class="form-label">DOB</label>
                        <input type="date" class="form-control" id="DOB" name="DOB" value="<?= set_value('DOB',$employee['DOB']) ?>" >
                         <span class="text-danger"><?= service('validation')->getError('DOB') ?></span>
                    </div>
                    
                     <div class="col-md-6">
                        <label for="NIC" class="form-label">NIC</label>
                        <input type="text" class="form-control" id="NIC" name="NIC"  value="<?= set_value('NIC',$employee['NIC']) ?>">
                         <span class="text-danger"><?= service('validation')->getError('NIC') ?></span>
                    </div>
              
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php if ($employee['gender'] == 'Male') {
                        echo 'checked';
                    } ?>>
                            <label class="form-check-label" for="male">Male</label>
                            <span class="text-danger"><?= service('validation')->getError('gender') ?></span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php if ($employee['gender'] == 'Female') {
                        echo 'checked';
                    } ?>>
                            <label class="form-check-label" for="female">Female</label>
                            <span class="text-danger"><?= service('validation')->getError('gender') ?></span>
                        </div>
                    </div>

                               <div class="col-md-6">
                <label for="Division" class="form-label">Division</label>
                <select id="Division" class="form-select" name="Division" >
                    <option value="" <?php if ($employee['Division'] == '') { echo 'selected'; } ?>><?= ($employee['Division']) ?></option>
                    <option value="LogisticDivision" <?php if  ($employee['Division'] == 'LogisticDivision') { echo 'selected'; } ?>>Logistic Division</option>
                    <option value="TransportDivision" <?php if ($employee['Division'] == 'Transport Division') { echo 'selected'; } ?>>Transport Division</option>
                    <option value="CommunicationDivision" <?php if ($employee['Division'] == 'Communication Division') { echo 'selected'; } ?>>Communication Division</option>
                    <option value="ComputerDivision" <?php if ($employee['Division'] == 'Computer Division') { echo 'selected'; } ?>>Computer Division</option>  
                    <option value="CulturalDivision" <?php if ($employee['Division'] == 'Cultural Division') { echo 'selected'; } ?>>Cultural Division</option>
                    <option value="HRMDDivision" <?php if ($employee['Division'] == 'HRMD Division') { echo 'selected'; } ?>>HRMD Division</option>                           
                    <option value="SearchDivision" <?php if ($employee['Division'] == 'Search Division') { echo 'selected'; } ?>>Search Division</option>
                    <option value="SWATDivision" <?php if ($employee['Division'] == 'SWAT Division') { echo 'selected'; } ?>>SWAT Division</option>  
                    <option value="OtherDivision" <?php if ($employee['Division'] == 'Other Division') { echo 'selected'; } ?>>Other Division</option>
                    <option value="FinanceDivision" <?php if ($employee['Division'] == 'Finance Division') { echo 'selected'; } ?>>Finance Division</option>
                </select>          
                <span class="text-danger"><?= service('validation')->getError('Division') ?></span>
            </div>

                    <div class="col-md-6">
                    <label for="Designation" class="form-label">Designation</label>
                        <select id="Designation" class="form-select" name="Designation" value="<?= set_value('Designation',$employee['Designation']) ?>" >
                                                   <option value="" <?php if ($employee['Designation'] == '') { echo 'selected'; } ?>><?= ($employee['Designation']) ?></option>
                            <?php foreach ($designation_list as $key => $result) { ?>
                                <option value="<?= $result['Designation']?>"><?=$result['Designation']?></option>
                               
                            <?php } ?>
                        </select>
                  <span class="text-danger"><?= service('validation')->getError('Designation') ?></span>
                    </div>
                    
                    
                    <div class="col-md-6">
                      <label for="EmpType" class="form-label">Employee Type</label>                 
                      <select id="EmpType" class="form-select" name="EmpType" >
                          <option value=""><?= ($employee['EmpType']) ?></option>
                          <option value="Admin" <?php if ($employee['EmpType'] == 'Admin') { echo 'selected';}?> > Admin</option>
                          <option value="ProcurementChairmen" <?php if ($employee['EmpType']  == 'Procurement Chairmen') { echo 'selected';}?> >Procurement Chairmen</option>
                          <option value="ProcurementOfficer" <?php if ($employee['EmpType'] == 'Procurement Officer') { echo 'selected';}?> >Procurement Officer</option>
                          <option value="TECMember" <?php if ($employee['EmpType'] == 'TEC Member') { echo 'selected';}?> >TEC Member</option>  
                          <option value="PCMember" <?php if ($employee['EmpType']  == 'PC Member') { echo 'selected';}?> >Procurement Committee Member</option>                           
                          <option value="DirectorLogistic" <?php if ($employee['EmpType'] == 'Director Logistic') { echo 'selected';}?> >Director Logistic</option>
                          <option value="DivisionalDirector" <?php if ($employee['EmpType']  == 'Divisional Director') { echo 'selected';}?> >Divisional Director</option>                           
                          <option value="Requisitioner" <?php if ($employee['EmpType'] == 'Requisitioner') { echo 'selected';}?> >Requisitioner</option>
                          <option value="CampOfficer" <?php if ($employee['EmpType'] == 'Camp Officer ') { echo 'selected';}?> >Inventory Clerk</option>  
                      </select>          
                       <span class="text-danger"><?= service('validation')->getError('EmpType') ?></span>
                       
                     </div>  
                      </div>
               </div>
                    <div class="mb-3">

                    <div class="text-center">
                       <input type="hidden" class="form-control" id="UserId" name="UserId" value="<?= set_value('UserId',$employee['UserId']) ?>">
                       <input type="hidden" class="form-control" id="id" name="id" value="<?= set_value('id',$employee['id']) ?>">
                        <button type="submit" class="btn btn-outline-primary rounded">Save</button>
                        <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                    </div>
                </div>
<?= form_close() ?>

            </div>
        </div>

    </section>
</main>