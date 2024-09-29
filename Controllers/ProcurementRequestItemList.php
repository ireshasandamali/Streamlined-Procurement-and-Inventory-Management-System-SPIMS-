<?php

namespace App\Controllers;

use App\Models\InvitationModel;
use App\Models\AnnouncementModel;
use App\Models\VoteModel;
use App\Models\SAnnouncementModel;
use App\Models\TenderModel;
use App\Models\ShopingModel;
use App\Models\ItemcategoryModel;
use App\Models\ItemNamecategoryModel;
use App\Models\ProcurementPlanModel;

class ProcurementRequestItemList extends BaseController {

    public function index() {
        
    }

    public function add() {

        helper('form');
        $data = array();
        $PItem = new ProcurementPlanModel();
        $data['vote_list'] = $PItem->findall();
        $data['ItemName_list'] = $PItem->ProPlanDetails();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Vote' => ['label' => 'Vote', 'rules' => 'required'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'ICatergory' => ['label' => 'ICatergory', 'rules' => 'required'],
                'ItemName' => ['label' => 'ItemName', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $ItemVList = new ItemcategoryModel();
                $ItemVList->save([
                    'Vote' => $this->request->getPost('Vote'),
                    'Description' => $this->request->getPost('Description'),
                    'ICatergory' => $this->request->getPost('ICatergory'),
                    'ItemName' => $this->request->getPost('ItemName'),
                ]);

                $data['msg'] = "Item Sucessfully Saved";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/ProcurementRequestItemList/add", $data);
        echo view("sys/footer");
    }

    public function view() {
        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['Tender_list'] = $t->findAll();
        $ItemVList = new ItemcategoryModel();
        $data['list'] = $ItemVList->findAll();

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('Vote') && $this->request->getPost('Description') && $this->request->getPost('ICatergory') && $this->request->getPost('ItemName')) {
                $data['list'] = $ItemVList
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->where('Description', $this->request->getPost('Description'))
                        ->where('ICatergory', $this->request->getPost('ICatergory'))
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->findAll();
            } elseif ($this->request->getPost('Vote')) {
                $data['list'] = $ItemVList
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->findAll();
            } elseif ($this->request->getPost('Description')) {
                $data['list'] = $ItemVList
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
             } elseif ($this->request->getPost('ICatergory')) {
                $data['list'] = $ItemVList
                        ->where('ICatergory', $this->request->getPost('ICatergory'))
                        ->findAll();
            } elseif ( $this->request->getPost('ItemName')) {
                $data['list'] = $ItemVList
                        ->where('ItemName',  $this->request->getPost('ItemName'))
                        ->findAll();
            
            } else {
                $data['list'] = $ItemVList->findAll();
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/ProcurementRequestItemList/view', $data);
        echo view("sys/footer");
    }
public function viewhistoryold($IId=null) {
        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['Tender_list'] = $t->findAll();
        $ItemVList = new ItemcategoryModel();
        $data['list'] = $ItemVList->findAll();
        $data['listtender'] = $ItemVList->getrequesttenderhistroy($IId);
     echo $ItemVList -> getLastQuery()->getQuery();
        if ($this->request->getMethod() == 'post') {
            $IId=$this->request->getPost('id');
            if ($this->request->getPost('Vote') && $this->request->getPost('Description') && $this->request->getPost('ICatergory') && $this->request->getPost('ItemName')) {
                $data['list'] = $ItemVList
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->where('Description', $this->request->getPost('Description'))
                        ->where('ICatergory', $this->request->getPost('ICatergory'))
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->findAll();
            } elseif ($this->request->getPost('Vote')) {
                $data['list'] = $ItemVList
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->findAll();
            } elseif ($this->request->getPost('Description')) {
                $data['list'] = $ItemVList
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
             } elseif ($this->request->getPost('ICatergory')) {
                $data['list'] = $ItemVList
                        ->where('ICatergory', $this->request->getPost('ICatergory'))
                        ->findAll();
            } elseif ( $this->request->getPost('ItemName')) {
                $data['list'] = $ItemVList
                        ->where('ItemName',  $this->request->getPost('ItemName'))
                        ->findAll();
            
            } else {
                $data['list'] = $ItemVList->findAll();
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/ProcurementRequestItemList/viewhistory', $data);
        echo view("sys/footer");
    }
    
    
    public function viewhistory($ItemId=null) {
         helper('form');
        $data = array();
        $t = new TenderModel();
        $data['Tender_list'] = $t->findAll();
        $ItemVList = new ItemcategoryModel();
        $data['list'] = $ItemVList->findAll();
          echo $ItemVList -> getLastQuery()->getQuery();
        $data['listtender'] = $ItemVList->getrequesttenderhistroy($ItemId);
          // $data['Item_List'] = $inventory->getInventroybalance($ItemId);
           
        //$data['listtender'] = $ItemVList->getrequesttenderhistroy($this->request->getPost('Item'));
     //echo $ItemVList -> getLastQuery()->getQuery();
       // echo $inventory->getLastQuery()->getQuery();
        //$data['list'] = $inventory->getInventroyData();
        /*$data['Item_List'] = $inventory->getInventroybalance($ItemId);
           
           
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
        }*/

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/ProcurementRequestItemList/viewhistory', $data);
        echo view("sys/footer");
    }
    
 public function viewmore($ItemId=null) {
         
        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['Tender_list'] = $t->findAll();
        $ItemVList = new ItemcategoryModel();
        $data['list'] = $ItemVList->findAll();
         echo $ItemVList->getLastQuery()->getQuery();
        $data['listtender'] = $ItemVList->getrequesttenderhistroy($ItemId);
       // $data['Item_List'] = $inventory->getInventroyde($ItemId);
       
      // echo $ItemVList->getLastQuery()->getQuery();
       //  $data['list'] = $inventory->findAll();
           
         
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/ProcurementRequestItemList/viewmore", $data);
        echo view("sys/footer");
    }
    
    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/ProcurementRequestItemList/edit");
        echo view("sys/footer");
    }

    /* Call getvdiscription function */

    public function getvdiscription() {
        $Vote = new ProcurementPlanModel();
        $Votediscription = $Vote->where('Vote', $this->request->getpost('VoteId'))->first();

        echo $Votediscription['Description'];
    }

    public function getItemCategory() {
        $ItemList = new ProcurementPlanModel();
        $VoteId = $this->request->getPost('VoteId');

        $data['ItemName_list'] = $ItemList->JoinProPlanDetails($VoteId);
        // echo $ItemList -> getLastQuery()->getQuery();

        return view('sys/ProcurementRequestItemList/itemCategory', $data);
    }

    public function removeItem($Itemid) {

        $ItemVList = new ItemcategoryModel();
        $ItemVList->where('id', $Itemid);
        $ItemVList->delete();
        $this->view();
    }
    
     public function viewrvtask() {
        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['Tender_list'] = $t->findAll();
        $ItemVList = new ItemcategoryModel();
        $data['list'] = $ItemVList->findAll();

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('Vote') && $this->request->getPost('Description') && $this->request->getPost('ICatergory') && $this->request->getPost('ItemName')) {
                $data['list'] = $ItemVList
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->where('Description', $this->request->getPost('Description'))
                        ->where('ICatergory', $this->request->getPost('ICatergory'))
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->findAll();
            } elseif ($this->request->getPost('Vote')) {
                $data['list'] = $ItemVList
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->findAll();
            } elseif ($this->request->getPost('Description')) {
                $data['list'] = $ItemVList
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
             } elseif ($this->request->getPost('ICatergory')) {
                $data['list'] = $ItemVList
                        ->where('ICatergory', $this->request->getPost('ICatergory'))
                        ->findAll();
            } elseif ( $this->request->getPost('ItemName')) {
                $data['list'] = $ItemVList
                        ->where('ItemName',  $this->request->getPost('ItemName'))
                        ->findAll();
            
            } else {
                $data['list'] = $ItemVList->findAll();
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/ProcurementRequestItemList/viewrvtask', $data);
        echo view("sys/footer");
    }

}
