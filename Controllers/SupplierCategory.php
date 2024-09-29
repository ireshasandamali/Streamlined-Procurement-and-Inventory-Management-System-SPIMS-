<?php

namespace App\Controllers;

use App\Models\SupplierCatergoryModel;

class SupplierCategory extends BaseController {

    public function index() {
        
    }

    public function add() {

        helper('form');
        $data = array();
        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'category' => ['label' => 'category', 'rules' => 'required|checkcategoryExistence[category]'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
            ];
            $errors=[
                
                'category'=>[
                    'checkcategoryExistence'=>'category Already Exist...!'
                ]
            ];

            if (!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
            } else {
                $SCategory = new SupplierCatergoryModel();
                $SCategory->save([
                    'category' => $this->request->getPost('category'),
                    'Description' => $this->request->getPost('Description'),
                ]);

                $data['msg'] = "Supplier Category Sucessfully Created";
            }
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/SupplierCategory/add', $data);
        echo view("sys/footer");
    }

    public function view() {
        helper('form');
        $SCategory = new SupplierCatergoryModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $SCategory->where('category', $this->request->getPost('category'))->findAll();
        } else {
            $data['list'] = $SCategory->findAll();
        }


        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/SupplierCategory/view', $data);
        echo view("sys/footer");
    }

    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/vote/edit");
        echo view("sys/footer");
    }

    //check
    public function removeItems($Cid = null, $categoryid = null) {
        $SCategory = new SupplierCatergoryModel();
        $SCategory->where('categoryid', $Cid);
        $SCategory->delete();
        $this->view($categoryid);
    }

    public function removeItem($Cid) {

        $SCategory = new SupplierCatergoryModel();
        $SCategory->where('categoryid', $Cid);
        $SCategory->delete();
        $this->view();
    }
}
