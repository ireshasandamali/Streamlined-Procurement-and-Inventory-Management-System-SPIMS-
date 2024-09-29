<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <div class="container" style=" background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px;  border-radius: 10px;">        
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">                       
           <ol class="breadcrumb">
               <img style="margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAbJJREFUSEvN1TusTFEUxvHfEAShEoXk6ilEoZXokaiFEqUQz8YznveKGlHc3KjlJqLV6CmEXiEhOvFMPPYne5KTe8/MnJmYxC7P7L2+tdZ/fWt6pnx6U45vHIFdmMNXnMarLsl1EdiOm9jfCPgL8ziP98OEhglsxTUcxIoBQb7gDm6Vqj633WkT2IwLOFoEVnVpQ60ibx7iZ/NNU2AjzuE41nUMvPTa68rnaf+HpsDbksHMhIGXPlvEgXxsCjzB3mkKJPa+0p7b2Dah0BucQZL9e9ogr8SR8ttlBHiX86FcuoT7wyAn0BU8xgusr3N+sozh2gEq33AXN/CpZB4zps1JblkFe/Csfk+JKTUlb8F1HG744TceFVefLeP8DjFjvJAW5+zG87YWNRnErQvVE5mwHXVVxBsnypS8RMx4FYeqeGcGMVl6GgY/cK+272PNcFMVPlaqW40wuIgH4zDYUFtwqvR4TV1yWXZZG30u3wur2bqrsiomZhCIYdCfujBI+7Ls/hmDnXWxhU3W9f/JoDnukzBYZpcufzjxwSgGA93eRaD/uI3ByDUyjsDIYG0Xpi7wByv5bxkpZvL6AAAAAElFTkSuQmCC"/>
                <li class="breadcrumb-item"><a href="index.html">Employee</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
            </ol>
        </nav>    
        </div><!-- End Page Title -->
    <section class="section dashboard">        
         <div class="card" style="margin-top: 10px;"> 
            <div class="card-header" style="background-color: #7070db; color: white;">Employee Registration Form</div>
            <div class="card-body">
                <h5 class="card-title"></h5>    
                <!-- Multi Columns Form -->
                <?= form_open_multipart('employee/add') ?>
                <div class="row g-3" style="margin-top: 5px">
                    <div class="col-md-6">
                        <label for="FirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?= set_value('LastName') ?>">
                        <span class="text-danger"><?= service('validation')->getError('FirstName') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="LastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="LastName" name="LastName">
                        <span class="text-danger"><?= service('validation')->getError('LastName') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="Email">
                        <span class="text-danger"> <?= service('validation')->getError('email') ?></span>
                    </div>
                    <div class="col-md-6">
                        <label for="TelNo" class="form-label">Telephone Number</label>
                        <input type="text" class="form-control" id="TelNo" name="TelNo" >
                    </div>
                    <div class="col-12">
                        <label for="Address" class="form-label">Address</label>
                        <textarea  class="form-control" id="Address"   name="Address" placeholder="1234 Main St"><?= set_value('Address') ?></textarea>
                        <span class="text-danger"><?= service('validation')->getError('Address') ?></span>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="DOB" class="form-label">DOB</label>
                        <input type="date" class="form-control" id="DOB" name="DOB" >
                         <span class="text-danger"><?= service('validation')->getError('DOB') ?></span>
                    </div>
                    
                     <div class="col-md-6">
                        <label for="NIC" class="form-label">NIC</label>
                        <input type="text" class="form-control" id="NIC" name="NIC" >
                         <span class="text-danger"><?= service('validation')->getError('NIC') ?></span>
                    </div>
              
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                            <label class="form-check-label" for="male">Male</label>
                             <span class="text-danger"><?= service('validation')->getError('gender') ?></span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                             <span class="text-danger"><?= service('validation')->getError('gender') ?></span>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <label for="Division" class="form-label">Division</label>
                   
                      <select id="Division" class="form-select" name="Division">
                          <option value="" selected="">...</option>
                          <option value="LogisticDivision" <?php if (set_value('Division') == 'Logistic Division') { echo 'selected';}?> > Logistic Division</option>
                          <option value="TransportDivision" <?php if (set_value('Division') == 'Transport Division') { echo 'selected';}?> >Transport Division</option>
                          <option value="CommunicationDivision" <?php if (set_value('Division') == 'CommunicationDivision') { echo 'selected';}?> >Communication Division</option>
                          <option value="ComputerDivision" <?php if (set_value('Division') == 'ComputerDivision') { echo 'selected';}?> >Computer Division</option>  
                          <option value="CulturalDivision" <?php if (set_value('Division') == 'CulturalDivision') { echo 'selected';}?> >Cultural Division</option>
                          <option value="HRMDDivision" <?php if (set_value('Division') == 'HRMDDivision') { echo 'selected';}?> >HRMD Division</option>                           
                          <option value="SearchDivision" <?php if (set_value('Division') == 'SearchDivision') { echo 'selected';}?> >Search Division</option>
                          <option value="Transportivision" <?php if (set_value('Division') == 'Transportivision ') { echo 'selected';}?> >Transport Division</option>  
                          <option value="SWATDivision" <?php if (set_value('Division') == 'SWATDivision ') { echo 'selected';}?> >SWAT Division</option>
                          <option value="FinanceDivision" <?php if (set_value('Division') == 'FinanceDivision ') { echo 'selected';}?> >Finance Division</option>
                          <option value="MinistryDivision" <?php if (set_value('Division') == 'MinistryDivision ') { echo 'selected';}?> >Ministry of Public Security</option>
                          <option value="OtherDivision" <?php if (set_value('Division') == 'OtherDivision ') { echo 'selected';}?> >Other Division</option>
                      </select>          
                       <span class="text-danger"><?= service('validation')->getError('Division') ?></span>
                     </div>      

                    <div class="col-md-6">
                    <label for="Designation" class="form-label">Designation</label>
                        <select id="Designation" class="form-select" name="Designation" >
                           <option value="" selected="">...</option>
                            <?php foreach ($designation_list as $key => $result) { ?>
                                <option value="<?= $result['Designation']?>"><?=$result['Designation']?></option>
                               
                            <?php } ?>
                        </select>
                  <span class="text-danger"><?= service('validation')->getError('Designation') ?></span>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <label for="Division" class="form-label">Employee Type</label>
                   
                      <select id="EmpType" class="form-select" name="EmpType">
                          <option value="" selected="">Choose Employee Type</option>
                          <option value="Admin" <?php if (set_value('EmpType') == 'Admin') { echo 'selected';}?> > Admin</option>
                          <option value="ProcurementChairmen" <?php if (set_value('EmpType') == 'ProcurementChairmen') { echo 'selected';}?> >Procurement Chairmen</option>
                          <option value="ProcurementOfficer" <?php if (set_value('EmpType') == 'ProcurementOfficer') { echo 'selected';}?> >Procurement Officer</option>
                          <option value="TECMember" <?php if (set_value('EmpType') == 'TECMember') { echo 'selected';}?> >TEC Member</option>  
                          <option value="PCMember" <?php if (set_value('EmpType') == 'PCMember') { echo 'selected';}?> >Procurement Committee Member</option>                           
                          <option value="DirectorLogistic" <?php if (set_value('EmpType') == 'DirectorLogistic') { echo 'selected';}?> >Director Logistic</option>
                          <option value="DivisionalDirector" <?php if (set_value('EmpType') == 'DivisionalDirector') { echo 'selected';}?> >Divisional Director</option>                           
                          <option value="Requisitioner" <?php if (set_value('EmpType') == 'Requisitioner') { echo 'selected';}?> >Requisitioner</option>
                          <option value="CampOfficer" <?php if (set_value('EmpType') == 'CampOfficer ') { echo 'selected';}?> >Inventory Clerk</option>  
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
                        <input type="text" name="Password" class="form-control" id="Password" >
                        <span class="text-danger"><?= service('validation')->getError('Password') ?></span>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Your Profile Image</label>
                    <input class="form-control" type="file" id="profile_image" name="profile_image">
                </div>
                           
                    <div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-primary rounded" onclick="openPopup()">Submit</button>
                        <div class="popup">
                            <img src="<?= site_url('public/assets/img/tick.png')?>" alt="" style="width:80px; height:90px">
                            <h2>Welcome to SPIMS System</h2>
                            <p>You have registered Successfully...!!!</p>
                            <button type="button" onclick="openPopup()>OK</button>
                        </div>
                        <button type="reset" class="btn btn-outline-primary rounded">Reset</button>
                    </div>
               
<?= form_close() ?>

            </div>
        </div>
            <script></<script s></script>
    </section>
    </div>
</main>