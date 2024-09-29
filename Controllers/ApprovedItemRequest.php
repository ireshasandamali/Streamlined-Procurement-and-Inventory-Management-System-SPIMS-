<?php

namespace App\Controllers;
use App\Models\RequestModel;
use App\Models\CampModel;
use App\Models\RequestItemModel;

class ApprovedItemRequest extends BaseController {

    public function updateItemrequeststatus(){
        helper('form');
        $itemrequest = new RequestModel();
        $newdata=[
            "Status"=>$this->request->getPost('action')
        ];
        $itemrequest->where(['RequestID'=>$this->request->getPost('RequestID')])->set($newdata)->update();
        

        echo view('sys/header');
        echo view('sys/menu');
        echo view('sys/itemRequest/viewItem', $data);
        echo view('sys/footer');        
        
    }
}