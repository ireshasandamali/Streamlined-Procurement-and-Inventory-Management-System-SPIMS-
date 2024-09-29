<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\DesignationModel;
use App\Models\UserModel;

class EmpProffile extends BaseController {

    public function index() {
        
    }

    
   public function updateProfile($EmpId=null) {
    helper('form');//load form
    $employee = new EmployeeModel();//to create object from the emp model
    $user = new UserModel();
    $EmpId = session()->get('UserId');
    $data['list'] = $employee->joinupdateprofile($EmpId);
  
    echo view("sys/header");
    echo view("sys/menu");
    echo view('sys/employee/updateProfile', $data);
    echo view("sys/footer");
}
 public function save_change_password() {
        helper('form');
        $data = array();
        
        if ($this->request->getMethod() == 'post') {
            $rules = [
              
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'new_password' => ['label' => 'new_password', 'rules' => 'required|min_length[8]'],
                'confirm_password' => ['label' => 'confirm_password', 'rules' => 'required|min_length[8]'],
               
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
             
            } else {
               
                // Generate a unique verification code
                $verificationCode = bin2hex(random_bytes(16));
                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'Password' => $this->request->getPost('Password'),
                    'UserType' => 'employee',
                    'new_password' => $this->request->getPost('new_password'),
                    'confirm_password' => $this->request->getPost('confirm_password'),                   
                    'is_verified' => 0,
                    'verification_code' => $verificationCode
                ]);

                $userid = $userreg->getInsertID();

                $EmpProfile = new UpdateEmpProfileModel();
                $EmpProfile->save([
                    'new_password' => $this->request->getPost('new_password'),
                    'confirm_password' => $this->request->getPost('confirm_password'),                   
                    'UserId' => $userid,
                ]);
                 // Send verification email
            $email = \Config\Services::email();
            $email->setTo($this->request->getPost('Email'));
            $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
            $email->setSubject('Change Password  Verification');
            $message = '<h1>Account Verification</h1>';
            $message .= '<a href="http://localhost/IPMS/sys/verifymyaccount/' . $verificationCode . '">Click here to verify your account</a>';
            $email->setMessage($message);
            $email->send();

            return view('sys/login');
                
     
/*echo '<div class="pagetitle">';
echo '<div class="container" style="max-width: 6000px; margin: 0 auto;  background: linear-gradient(to bottom, #669999 0%, #669900 100%); padding: 100px; border-radius: 10px;">';
echo '    <h1 style="text-align: center; color: white;">Welcome to the SPIMS System</h1>';
echo '    <div class="container" style="max-width: 600px; margin: 0 auto; background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px; border-radius: 10px;">';
echo '        <nav style="--bs-breadcrumb-divider: \'>\';" aria-label="breadcrumb">';
echo '            <div class="col-6 d-flex align-items-center" style="text-align: center;">';
echo '                <div class="modal-body">';
echo '                    <img src="' . site_url('public/assets_web/img/tick.png') . '" alt="" style="width: 80px; height: 90px; margin: 0 auto;">';
echo '                    <p style="color: green; font-size: 18px; font-weight: bold; text-align: center;">Successfully Registered to the SPIMS...!</p>';
echo '                    <p style="text-align: center;">Your Registration Id is</p>';
echo '                    <p style="text-align: center;">You Will Receive Email Verification Shortly..!</p>';
echo '                </div>';
echo '                <div class="modal-footer" style="text-align: center;">';
echo '<button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="' . site_url('web') . '">Go To HOME Page</a></button>';
echo '                </div>';
echo '            </div>';
echo '        </nav>';
echo '    </div><!-- End Page Title -->';
echo '</div>';
echo '</div>';*/


            }
    }
    
         return view('sys/login', $data);
    }
     public function verifymyaccount($verificationCode = null) {
       if (!$verificationCode) {
            // Handle the case where no verification code is provided
            // For example, show an error message or redirect to a specific page
            echo "Verification code is missing.";
            return;
        }
        $userModel = new UserModel();
        $user = $userModel->where('verification_code', $verificationCode)->first();
         if ($user) {
            // User found, verify the account
            $userModel->update($user['UserId'], ['is_verified' => 1, 'verification_code' => null]); // Set is_verified to true and clear the verification code
            // Display a success message or redirect to a success page
            echo "Your account has been successfully verified.";
        } else {
           // No user found with the provided verification code
            // Handle this case appropriately, such as showing an error message
           echo "Invalid or expired verification code";
        }
        
        //ooo
    }
    
    public function edit() {
        helper('form');//load form
        $employee = new EmployeeModel();//to create object from the emp model
        if ($this->request->getMethod() == 'post') {
            if($this->request->getPost('Designation')){
            $data['list'] = $employee->where('Designation', $this->request->getPost('Designation'))->findAll();          
            } elseif($this->request->getPost('NIC')){
            $data['list'] = $employee->where('NIC', $this->request->getPost('NIC'))->findAll();
            }
        }
        else {
            $data['list'] = $employee->findAll();
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/employee/edit",$data);
        echo view("sys/footer");
    }
}
