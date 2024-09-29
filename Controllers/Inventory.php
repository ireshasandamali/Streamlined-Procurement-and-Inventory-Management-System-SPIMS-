<?php

namespace App\Controllers;

use App\Models\InventoryModel;
use App\Models\PcApprovaldataModel;
use App\Models\TenderModel;

class Inventory extends BaseController {

    public function index() {
        
    }

    public function add($TId = null, $ItemId = null) {

        helper('form');
        $data = array();
        
        $PCmarks = new PcApprovaldataModel();

        $data['Item_list'] = $PCmarks->groupBy('TenderId')->findall();
        $tender = new TenderModel();
        $data['Tender_list'] = $tender->findAll();
        //$data['list'] = $Fmarks->GetlointentDetails();
        $data['Bidder_list'] = $PCmarks->GetlointentDetails($TId);
        $data['Avalue_list'] = $PCmarks->GetlointentDetails($TId);
 
        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
               // 'Itemid' => ['label' => 'Itemid', 'rules' => 'required'],
                //'ItemName' => ['label' => 'ItemName', 'rules' => 'required'],
                'PDate' => ['label' => 'PDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $inventory = new InventoryModel();
                $inventory->save([
                     'TenderId' => $this->request->getPost('Tenderid'),
                    'Itemid' => $this->request->getPost('ICatergory'),
                    'ItemName' => $this->request->getPost('ItemName'),
                    'Qty' => $this->request->getPost('Qty'),
                    'PDate' => $this->request->getPost('PDate'),
                    
                ]);
                $data['msg'] = "Item Sucseesfully added to the Inventory";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/inventory/add", $data);
        echo view("sys/footer");
    }

    public function view($ItemId=null) {
        helper('form');
        $inventory = new InventoryModel();
        helper('form');
        $data = array();
         $data['list'] = $inventory->findAll();
       echo $inventory->getLastQuery()->getQuery();
        //$data['list'] = $inventory->getInventroyData();
        $data['Item_List'] = $inventory->getInventroybalance($ItemId);
           
           
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('ItemName') && $this->request->getPost('Itemid')) {
                $data['list'] = $inventory
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->where('Itemid', $this->request->getPost('Itemid'))
                        ->findAll();
            } elseif ($this->request->getPost('ItemName')) {
                $data['list'] = $inventory
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->findAll();
            } elseif ($this->request->getPost('Itemid')) {
                $data['list'] = $inventory
                        ->where('Itemid', $this->request->getPost('Itemid'))
                        ->findAll();
            } else {
                $data['list'] = $inventory->findAll();
            }
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/inventory/view', $data);
        echo view("sys/footer");
    }
    
     public function changestatus($id = null, $Status = null) {
        //echo $id;
        $inventory = new InventoryModel();
        $inventory->update($id, [
            'Status' => $Status,
             "IssueDate" => date("Y-m-d"),
        ]);
        return redirect()->to('inventory/view');

        //echo $employee->getLastQuery()->getQuery();
    }

    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/inventory/edit");
        echo view("sys/footer");
    }
     public function viewmore($ItemId=null) {
         
        helper('form');
        $inventory = new InventoryModel();
       
        $data = array();
        $data['Item_List'] = $inventory->getInventroyde($ItemId);
       
       echo $inventory->getLastQuery()->getQuery();
       //  $data['list'] = $inventory->findAll();
           
         
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/inventory/viewmore", $data);
        echo view("sys/footer");
    }
    
    public function getDescription() {
        $tender = new TenderModel();
        $Description = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        echo $Description['Description'];
    }

    public function getBidderList() {
        $PCmarks = new PcApprovaldataModel();
        $TId = $this->request->getPost('TenderId');

        $data['Bidder_list'] = $PCmarks->GetlointentDetailsBidder($TId);

        return view('sys/inventory/ItemList', $data);
    }

    public function getValue() {

        //echo 100;
        $PCmarks = new PcApprovaldataModel();
        $TId = $this->request->getPost('TenderId');
        $Itemid = $this->request->getPost('Itemid');
        $Avalue_list = $PCmarks->GetinventorytDetails($TId, $Itemid);
        //echo $PCmarks->getLastQuery()->getQuery();
         echo $Avalue_list[0]['Qty'];
    }
    
    
     public function ItemName() {

        //echo 100;
        $PCmarks = new PcApprovaldataModel();
        $TId = $this->request->getPost('TenderId');
        $Itemid = $this->request->getPost('Itemid');
        $Avalue_list = $PCmarks->GetinventorytDetails($TId, $Itemid);
        //echo $PCmarks->getLastQuery()->getQuery();
         echo $Avalue_list[0]['ItemName'];
    }
    
    
    public function viewall( ) {
        helper('form');
        $inventory = new InventoryModel();
        helper('form');
        $data = array();
         //$data['list'] = $inventory->findAll();
       // echo $inventory->getLastQuery()->getQuery();
        //$data['list'] = $inventory->getInventroyData();
        $data['list'] = $inventory->getInventroyall();
           
           
        /*if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('ItemName') && $this->request->getPost('Itemid')) {
                $data['list'] = $inventory
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->where('Itemid', $this->request->getPost('Itemid'))
                        ->findAll();
            } elseif ($this->request->getPost('ItemName')) {
                $data['list'] = $inventory
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->findAll();
            } elseif ($this->request->getPost('Itemid')) {
                $data['list'] = $inventory
                        ->where('Itemid', $this->request->getPost('Itemid'))
                        ->findAll();
            } else {
                $data['list'] = $inventory->findAll();
            }
        }*/

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/inventory/viewall', $data);
        echo view("sys/footer");
    }
    public function viewbalance( ) {
        helper('form');
        $inventory = new InventoryModel();
        helper('form');
        $data = array();
         //$data['list'] = $inventory->findAll();
       // echo $inventory->getLastQuery()->getQuery();
        //$data['list'] = $inventory->getInventroyData();
        $data['list'] = $inventory->getInventroyall();
           
     

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/inventory/viewbalance', $data);
        echo view("sys/footer");
    }
}
