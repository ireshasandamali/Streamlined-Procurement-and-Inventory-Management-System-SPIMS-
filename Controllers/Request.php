<?php

namespace App\Controllers;

use App\Models\RequestModel;
use App\Models\CampModel;
use App\Models\RequestItemModel;
use App\Models\RequestselectionModel;

class Request extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function requestadd() {
        helper('form');
        $data = array();
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'ICategory' => ['label' => 'ICategory', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
                'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],                
                'CName' => ['label' => 'Camp', 'rules' => 'required'],
                'ReqDate' => ['label' => 'ReqDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $itemrequest = new RequestModel();

                $itemrequest->save([
                    'Description' => $this->request->getPost('Description'),
                    'ICategory' => $this->request->getPost('ICategory'),
                    'Purpose' => $this->request->getPost('Purpose'),
                    'PStatus' => $this->request->getPost('PStatus'),                    
                    'CName' => $this->request->getPost('CName'),
                    'ReqDate' => $this->request->getPost('ReqDate')
                ]);
                
                $RequestID = $itemrequest->getInsertID();
                $action=$this->request->getPost('action');
                if($action=='add'){
                    return $this->reqItem($RequestID);                    
                }
                $data['msg'] = "Request Successfully Created";
            }
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/Request/requestadd", $data);
        echo view("sys/footer");
    }

    public function viewReq() {
        helper('form');
        $itemrequest = new RequestModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $itemrequest->where('ICategory', $this->request->getPost('ICategory'))->findAll();
        } else {
            $data['list'] = $itemrequest->findAll();
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/itemrequest/viewReq', $data);
        echo view("sys/footer");
    }
    //ask from sir
    public function SelectRequest() {
        helper('form');
        $data = array();
        $itemrequest = new RequestModel();
        
       if ($this->request->getMethod() == 'post') {
            $rules = [
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'ReqDate' => ['label' => 'ReqDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
               $selectrequest = new RequestselectionModel();

                $selectrequest->save([
                    'Description' => $this->request->getPost('Description'),  
                    'Description' => $this->request->getPost('Description'),                                    
                    'CName' => $this->request->getPost('CName'),
                    'ReqDate' => $this->request->getPost('ReqDate'),
                    'date' => date("Y-m-d"),
                ]);


            }
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/itemrequest/viewReq', $data);
        echo view("sys/footer");
    }

    public function removeReq($RequestID) {

        $Request = new RequestModel();
        $Request->where('RequestID', $RequestID);
        $Request->delete();

        $this->viewReq($RequestID);
    }
    
     public function reqItem($RequestID=null) {
        helper('form');
        $data = array();
        $Request = new RequestModel();
        $data['RId'] = $RequestID;
       // $data['Item_details'] =  $Request->where('RId', $RequestID)->first();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Item' => ['label' => 'Item', 'rules' => 'required'],
                'Qty' => ['label' => 'Qty', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $item = new RequestItemModel();

                $item->save([
                    'RItemid' => $this->request->getPost('RItemid'),
                    'RId' => $this->request->getPost('RId'),                    
                    'Item' => $this->request->getPost('Item'),
                    'Qty' => $this->request->getPost('Qty'),
                ]);
                $data['RId'] = $this->request->getPost('RId'); 
                $data['msg'] = "Items Successfully added";
            }
        }
        
       $item = new RequestItemModel();

        if ($this->request->getMethod() == 'post' && $this->request->getPost('action') == 'reqItem') {
            $data['list'] = $item->where('RId', $this->request->getPost('RId'))->findAll();
            $data['Item_details'] = $Request->where('RId', $this->request->getPost('RId'))->first();
        } else {
            $data['list'] = $item->where('RId', $data['RId'])->findAll();
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/request/request", $data);
        echo view("sys/footer");
    }

}
