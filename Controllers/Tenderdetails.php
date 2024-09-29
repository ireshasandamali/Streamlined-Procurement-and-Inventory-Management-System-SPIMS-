<?php

namespace App\Controllers;

use App\Models\TenderModel;
use App\Models\TenderItemModel;
use App\Models\SpecModel;

class Tenderdetails extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }
    


 
    public function tenderdetails($Tenderid) {
    
        helper('form');
        $data = array();         
        $tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['item'] = $tender->where('TId', $Tenderid)->first();
        $data['item'] = $tender->find($Tenderid);
        $data['TId'] = $Tenderid;
        echo view('sys/header');
        echo view('sys/menu');
        echo view('sys/Tenderdetails/tenderdetails', $data);
        echo view('sys/footer');
   
}
}