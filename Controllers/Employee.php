<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\DesignationModel;
use App\Models\UserModel;
use App\Models\CampModel;
use App\Models\TaskModel;

class Employee extends BaseController {

    public function index() {
        
    }

    public function changestatus($id = null, $Status = null) {
        //echo $id;
        $employee = new EmployeeModel();
        $employee->update($id, [
            'Status' => $Status,
        ]);
        return redirect()->to('employee/view');

        //echo $employee->getLastQuery()->getQuery();
    }
     public function add() {
         helper('form');
        $data = array();
        $emp = new EmployeeModel();
        $userreg = new UserModel();
        $tasklist = new TaskModel();
        $data['task_list'] = $tasklist->findAll();
        $designation = new DesignationModel();
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $data['designation_list'] = $designation->findAll();
        $data['emp_list'] = $emp->findAll();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'CivilStatus' => ['label' => 'CivilStatus', 'rules' => 'required'],
                'FirstName' => ['label' => 'FirstName', 'rules' => 'required'],
                'LastName' => ['label' => 'LastName', 'rules' => 'required'],
                'Address' => ['label' => 'Address', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'],
                'TelNo' => ['label' => 'TelNo', 'rules' => 'required|max_length[10]|min_length[10]'],
                'DOB' => ['label' => 'DOB', 'rules' => 'required'],
                'NIC' => ['label' => 'NIC', 'rules' => 'required|max_length[12]'],
                'gender' => ['label' => 'gender', 'rules' => 'required'],
                'Division' => ['label' => 'Division', 'rules' => 'required'],
                'Designation' => ['label' => 'Designation', 'rules' => 'required'],
                'EmpType' => ['label' => 'EmpType', 'rules' => 'required'],
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'profile_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[profile_image]|permit_empty'
                    . '|is_image[profile_image]'
                    . '|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[profile_image,100]'
                    . '|max_dims[profile_image,1024,768]',
                ],
            ];
           
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                echo view("sys/header");
                echo view('sys/menu_' . $user_type);
                echo view("sys/employee/add", $data);
                echo view("sys/footer");
            } else {
                $newName = null;
                $profile_image = $this->request->getFile('profile_image');
                if (!empty($profile_image->getName())) {
                    $newName = $profile_image->getRandomName();
                    $profile_image->move('public/images/' . 'uploads', $newName);
                }
                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'email' => $this->request->getPost('Email'),
                    'Password' => $this->request->getPost('Password'),
                    'UserType' => $this->request->getPost('EmpType'),
                    'profile_image' => $newName,
                ]);
                $UserId = $userreg->getInsertID();
                $employee = new EmployeeModel();
                $employee->save([
                    'CivilStatus' => $this->request->getPost('CivilStatus'),
                    'FirstName' => $this->request->getPost('FirstName'),
                    'LastName' => $this->request->getPost('LastName'),
                    'Address' => $this->request->getPost('Address'),
                    'Email' => $this->request->getPost('Email'),
                    'TelNo' => $this->request->getPost('TelNo'),
                    'DOB' => $this->request->getPost('DOB'),
                    'NIC' => $this->request->getPost('NIC'),
                    'gender' => $this->request->getPost('gender'),
                    'Division' => $this->request->getPost('Division'),
                    'CName' => $this->request->getPost('CName'),
                    'Designation' => $this->request->getPost('Designation'),
                    'EmpType' => $this->request->getPost('EmpType'),
                    'UserId' => $UserId,
                ]);
                $data['msg'] = "Employee Succseefuly Saved";
            }
        }
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/employee/add", $data);
        echo view("sys/footer");
    }


    public function addrvtask() {
         helper('form');
        $data = array();
        $emp = new EmployeeModel();
        $userreg = new UserModel();
        $tasklist = new TaskModel();
        $data['task_list'] = $tasklist->findAll();
        $designation = new DesignationModel();
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $data['designation_list'] = $designation->findAll();
        $data['emp_list'] = $emp->findAll();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'CivilStatus' => ['label' => 'CivilStatus', 'rules' => 'required'],
                'FirstName' => ['label' => 'FirstName', 'rules' => 'required'],
                'LastName' => ['label' => 'LastName', 'rules' => 'required'],
                'Address' => ['label' => 'Address', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'],
                'TelNo' => ['label' => 'TelNo', 'rules' => 'required|max_length[10]|min_length[10]'],
                'DOB' => ['label' => 'DOB', 'rules' => 'required'],
                'NIC' => ['label' => 'NIC', 'rules' => 'required|max_length[12]|validate_NIC[NIC]'],
                'gender' => ['label' => 'gender', 'rules' => 'required'],
                'Division' => ['label' => 'Division', 'rules' => 'required'],
                'Designation' => ['label' => 'Designation', 'rules' => 'required'],
                'EmpType' => ['label' => 'EmpType', 'rules' => 'required'],
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'profile_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[profile_image]|permit_empty'
                    . '|is_image[profile_image]'
                    . '|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[profile_image,100]'
                    . '|max_dims[profile_image,1024,768]',
                ],
            ];
            $errors = [
                'NIC'=>[
                    'validate_NIC'=>'The NIC field cannot be more than 12 characters.'
                ]
            ];

            if (!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
                echo view("sys/header");
                echo view('sys/menu_' . $user_type);
                echo view("sys/employee/addrvtask", $data);
                echo view("sys/footer");
            } else {
                $newName = null;
                $profile_image = $this->request->getFile('profile_image');
                if (!empty($profile_image->getName())) {
                    $newName = $profile_image->getRandomName();
                    $profile_image->move('public/images/' . 'uploads', $newName);
                }
                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'email' => $this->request->getPost('Email'),
                    'Password' => $this->request->getPost('Password'),
                    'UserType' => $this->request->getPost('EmpType'),
                    'profile_image' => $newName,
                ]);
                $UserId = $userreg->getInsertID();
                $employee = new EmployeeModel();
                $employee->save([
                    'CivilStatus' => $this->request->getPost('CivilStatus'),
                    'FirstName' => $this->request->getPost('FirstName'),
                    'LastName' => $this->request->getPost('LastName'),
                    'Address' => $this->request->getPost('Address'),
                    'Email' => $this->request->getPost('Email'),
                    'TelNo' => $this->request->getPost('TelNo'),
                    'DOB' => $this->request->getPost('DOB'),
                    'NIC' => $this->request->getPost('NIC'),
                    'gender' => $this->request->getPost('gender'),
                    'Division' => $this->request->getPost('Division'),
                    'task' => $this->request->getPost('task'),
                    'CName' => $this->request->getPost('CName'),
                    'Designation' => $this->request->getPost('Designation'),
                    'EmpType' => $this->request->getPost('EmpType'),
                    'UserId' => $UserId,
                ]);
                $data['msg'] = "Employee Succseefuly Saved";
            }
        }
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/employee/addrvtask", $data);
        echo view("sys/footer");
    }

    public function view() {
        helper('form'); //load form
        $data = array();
        $employee = new EmployeeModel();
        $data['list'] = $employee->findAll();
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('Designation') && $this->request->getPost('NIC')) {
                // Both Designation and NIC provided, search with both conditions
                $data['list'] = $employee
                        ->where('Designation', $this->request->getPost('Designation'))
                        ->where('NIC', $this->request->getPost('NIC'))
                        ->findAll();
            } elseif ($this->request->getPost('Designation')) {
                // Only Designation provided, search by Designation
                $data['list'] = $employee
                        ->where('Designation', $this->request->getPost('Designation'))
                        ->findAll();
            } elseif ($this->request->getPost('NIC')) {
                // Only NIC provided, search by NIC
                $data['list'] = $employee
                        ->where('NIC', $this->request->getPost('NIC'))
                        ->findAll();
            } else {
                $data['list'] = $employee->findAll();
            }
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/employee/view', $data);
        echo view("sys/footer");
    }

    public function viewEmp($EmpId = null) {
        helper('form'); //load form
        $employee = new EmployeeModel(); //to create object from the emp model
        //$user = new UserModel();
        //$data['employee'] = $employee->where('id', $EmpId)->first();
        $data['list'] = $employee->viewEmpprofile($EmpId);

        echo $employee->getLastQuery()->getQuery();
        //$data['list'] =  $employee->where('id',$EmpId)->first();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/employee/viewEmp', $data);
        echo view("sys/footer");
    }

    public function updateProfile($EmpId = null) {
        helper('form'); //load form
        $employee = new EmployeeModel(); //to create object from the emp model     
        $data['list'] = $employee->joinupdateprofile($EmpId);
        //$user = new UserModel();
        //$EmpId = session()->get('UserId');
        //$data['list'] =  $employee->where('id',$EmpId)->first();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/employee/updateProfile', $data);
        echo view("sys/footer");
    }

    public function Profile($EmpId = null) {
        helper('form'); //load form
        $employee = new EmployeeModel(); //to create object from the emp model
        $user = new UserModel();
        $EmpId = session()->get('UserId');
        $data['list'] = $employee->joinupdateprofile($EmpId);

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/employee/Profile', $data);
        echo view("sys/footer");
    }

    public function edit($EmpId = null) {
        helper('form'); //load form
        $employee = new EmployeeModel(); //to create object from the emp model
        $designation = new DesignationModel();
        $data['designation_list'] = $designation->findAll();
        $data['employee'] = $employee->where('id', $EmpId)->first();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/employee/edit", $data);
        echo view("sys/footer");
    }

    public function update() {
        $emp = new EmployeeModel();
        $userreg = new UserModel();
        helper('form');
        $data = array();
        $designation = new DesignationModel();
        $data['designation_list'] = $designation->findAll();
        $data['emp_list'] = $emp->findAll();
        $data['employee'] = $emp->where('id', $this->request->getPost('id'))->first();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'FirstName' => ['label' => 'FirstName', 'rules' => 'required'],
                'LastName' => ['label' => 'LastName', 'rules' => 'required'],
                'Address' => ['label' => 'Address', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'],
                'TelNo' => ['label' => 'TelNo', 'rules' => 'required'],
                'DOB' => ['label' => 'DOB', 'rules' => 'required'],
                'NIC' => ['label' => 'NIC', 'rules' => 'required'],
                'gender' => ['label' => 'gender', 'rules' => 'required'],
                'EmpType' => ['label' => 'EmpType', 'rules' => 'required'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {


                $employee = new EmployeeModel();
                $employee->update($this->request->getPost('id'), [
                    'CivilStatus' => $this->request->getPost('CivilStatus'),
                    'FirstName' => $this->request->getPost('FirstName'),
                    'LastName' => $this->request->getPost('LastName'),
                    'Address' => $this->request->getPost('Address'),
                    'Email' => $this->request->getPost('Email'),
                    'TelNo' => $this->request->getPost('TelNo'),
                    'DOB' => $this->request->getPost('DOB'),
                    'NIC' => $this->request->getPost('NIC'),
                    'gender' => $this->request->getPost('gender'),
                    'Division' => $this->request->getPost('Division'),
                    'Designation' => $this->request->getPost('Designation'),
                    'EmpType' => $this->request->getPost('EmpType'),
                    'UserId' => $this->request->getPost('UserId'),
                ]);
                $data['msg'] = "Employee Succseefuly Updated";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/employee/edit", $data);
        echo view("sys/footer");
    }

    public function changePassword($EmpId = null) {
        helper('form'); //load form
        $employee = new EmployeeModel(); //to create object from the emp model
        $designation = new DesignationModel();
        $data['designation_list'] = $designation->findAll();
        $data['employee'] = $employee->where('id', $EmpId)->first();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/employee/changePassword", $data);
        echo view("sys/footer");
    }

    public function updatepassword() {
        $emp = new EmployeeModel();
        $userreg = new UserModel();
        helper('form');
        $data = array();
        $designation = new DesignationModel();
        $data['designation_list'] = $designation->findAll();
        $data['emp_list'] = $emp->findAll();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'newPassword' => ['label' => 'newPassword', 'rules' => 'required|min_length[8]'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                return view('employee/changePassword', $data);
            } else {


                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'Password' => $this->request->getPost('Password'),
                    'newPassword' => $this->request->getPost('newPassword'),
                    'UserType' => 'employee',
                    'profile_image' => $newName,
                ]);
                $UserId = $userreg->getInsertID();
                $employee = new EmployeeModel();
                $employee->save([
                    'CivilStatus' => $this->request->getPost('CivilStatus'),
                    'FirstName' => $this->request->getPost('FirstName'),
                    'LastName' => $this->request->getPost('LastName'),
                    'Address' => $this->request->getPost('Address'),
                    'Email' => $this->request->getPost('Email'),
                    'TelNo' => $this->request->getPost('TelNo'),
                    'DOB' => $this->request->getPost('DOB'),
                    'NIC' => $this->request->getPost('NIC'),
                    'gender' => $this->request->getPost('gender'),
                    'Division' => $this->request->getPost('Division'),
                    'Designation' => $this->request->getPost('Designation'),
                    'EmpType' => $this->request->getPost('EmpType'),
                    'UserId' => $UserId,
                ]);
                $data['msg'] = "Employee Succseefuly Saved";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/employee/changePassword", $data);
        echo view("sys/footer");
    }

    public function removeItem($empid) {

        $employee = new EmployeeModel();
        $employee->where('id', $empid);
        $employee->delete();
        $this->view();
    }

    public function adddesignation() {

        helper('form');
        $data = array();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Designation' => ['label' => 'Designation', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $designation = new DesignationModel();
                $designation->save([
                    'Designation' => $this->request->getPost('Designation'),
                ]);

                $data['msg'] = "Designation Sucessfully Added";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/employee/adddesignation', $data);
        echo view("sys/footer");
    }

    public function contact() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/employee/contact', $data);
        echo view("sys/footer");
    }
    
   
}
