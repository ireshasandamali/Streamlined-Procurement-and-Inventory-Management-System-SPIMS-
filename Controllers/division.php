<?php

namespace App\Controllers;

use App\Models\CampModel;
use App\Models\TaskModel;

class division extends BaseController {

    public function index() {
        
    }

    public function addcamp() {

        helper('form');
        $data = array();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'CNo' => ['label' => 'CNo', 'rules' => 'required|validatecampNo[CNo,CName]|checkcampExistence[CNo]'],
                'CName' => ['label' => 'CName', 'rules' => 'required'],
            ];
             $errors = [
                'CNo'=>[
                    'validatecampNo'=>'The Camp  already exist .',
                     'checkcampExistence'=>'The Camp Number already exist .'
                ]
            ];

            if (!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
            } else {
                $camp = new CampModel();
                $camp->save([
                    'CNo' => $this->request->getPost('CNo'),
                    'CName' => $this->request->getPost('CName'),
                ]);

                $data['msg'] = "Camp Sucessfully Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/division/addcamp', $data);
        echo view("sys/footer");
    }

    public function viewCamp() {
        helper('form');
        $camp = new CampModel();
        $data['list'] = $camp->ViewCampbyoder();
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('CName') && $this->request->getPost('CNo')) {
                // Both Designation and NIC provided, search with both conditions
                $data['list'] = $camp
                        ->where('CName', $this->request->getPost('CName'))
                        ->where('CNo', $this->request->getPost('CNo'))
                        ->findAll();
            } elseif ($this->request->getPost('CName')) {
                // Only Designation provided, search by Designation
                $data['list'] = $camp
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } elseif ($this->request->getPost('CNo')) {
                // Only NIC provided, search by NIC
                $data['list'] = $camp
                        ->where('CNo', $this->request->getPost('CNo'))
                        ->findAll();
            } else {
                $data['list'] = $camp->ViewCampbyoder();
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/division/viewCamp', $data);
        echo view("sys/footer");
    }

    public function removeCamp($Campid) {

        $camp = new CampModel();
        $camp->where('id', $Campid);
        $camp->delete();
        $this->viewCamp();
    }

    public function editcamp($CampId = null) {
        helper('form');
        $camp = new CampModel();
        $data['list'] = $camp->findAll();
        $data['camp'] = $camp->where('id', $CampId)->first();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/division/editcamp", $data);
        echo view("sys/footer");
    }

    public function update() {

        helper('form');
        $data = array();
        $camp = new CampModel();
        $data['camp'] = $camp->where('id', $this->request->getPost('id'))->first();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'CNo' => ['label' => 'CNo', 'rules' => 'required'],
                'CName' => ['label' => 'CName', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                return view('sys/division/editcamp', $data);
            } else {
                $camp = new CampModel();
                $camp->update($this->request->getPost('id'), [
                    'CNo' => $this->request->getPost('CNo'),
                    'CName' => $this->request->getPost('CName'),
                ]);
                $data['msg'] = "Camp Sucessfully Updated";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/division/editcamp', $data);
        echo view("sys/footer");
    }
    //re viva task
    public function addTask() {

        helper('form');
        $data = array();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'CNo' => ['label' => 'CNo', 'rules' => 'required'],
                'CName' => ['label' => 'CName', 'rules' => 'required'],
            ];
            

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $Task = new TaskModel();
                $Task->save([
                    'CNo' => $this->request->getPost('CNo'),
                    'CName' => $this->request->getPost('CName'),
                ]);

                $data['msg'] = "Camp Sucessfully Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/division/addTask', $data);
        echo view("sys/footer");
    }

    public function viewTask() {
        helper('form');
        $Task = new TaskModel();
        $data['list'] = $Task->ViewCampbyoder();
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('CName') && $this->request->getPost('CNo')) {
                // Both Designation and NIC provided, search with both conditions
                $data['list'] = $Task
                        ->where('CName', $this->request->getPost('CName'))
                        ->where('CNo', $this->request->getPost('CNo'))
                        ->findAll();
            } elseif ($this->request->getPost('CName')) {
                // Only Designation provided, search by Designation
                $data['list'] = $Task
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } elseif ($this->request->getPost('CNo')) {
                // Only NIC provided, search by NIC
                $data['list'] = $Task
                        ->where('CNo', $this->request->getPost('CNo'))
                        ->findAll();
            } else {
                $data['list'] = $Task->ViewCampbyoder();
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/division/viewTask', $data);
        echo view("sys/footer");
    }
}
