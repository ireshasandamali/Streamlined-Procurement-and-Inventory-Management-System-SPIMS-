<?php

namespace App\Controllers;
use App\Models\ProcurementPlanModel;
use App\Models\ProcurementItemModel;
use App\Models\VoteModel;

class ProcurementItem extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function add($id = null) {
        helper('form');
        $data = array();
        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();
        $data['PId'] = $id;
        $TotalCost = 0;
        if ($this->request->getMethod() == 'post') {
            //my method to create rule for cost check and ask from sir 
            /* foreach ($ItemName as $key => $ItemName) {
                        if (!empty($ItemName)) {
                            $Cost = $Total[$key];

                        $GrandTotal += $Cost;
                        
                        }
             } */
            $rules = [
                'ItemName' => ['label' => 'ItemName', 'rules' => 'required'],
                'Quantity' => ['label' => 'Quantity', 'rules' => 'required'],
                'Cost' => ['label' => 'Cost', 'rules' => 'required'],
                'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],
                'Authority' => ['label' => 'Authority', 'rules' => 'required'],
                'PType' => ['label' => 'PType', 'rules' => 'required'],
                'Progress' => ['label' => 'Progress', 'rules' => 'required'],
                'CommeDate' => ['label' => 'CommeDate', 'rules' => 'required'],
                'CompleateDate' => ['label' => 'CompleateDate', 'rules' => 'required'],
            ];
             
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $ProcurementItem = new ProcurementItemModel();

                $ProcurementItem->save([
                    'ItemName' => $this->request->getPost('ItemName'),
                    'Quantity' => $this->request->getPost('Quantity'),
                    'Cost' => $this->request->getPost('Cost'),
                    'PStatus' => $this->request->getPost('PStatus'),
                    'Authority' => $this->request->getPost('Authority'),
                    'PType' => $this->request->getPost('PType'),
                    'Progress' => $this->request->getPost('Progress'),
                    'CommeDate' => $this->request->getPost('CommeDate'),
                    'CompleateDate' => $this->request->getPost('CompleateDate'),
                    'PId' => $this->request->getPost('PId')
                ]);
                $data['PId'] = $this->request->getPost('PId');//Does not clear TId when click on submit button
                $data['msg'] = "Procurement Plan Item Successfully Created";
            }
        }
          $user_type = str_replace(' ','',strtolower(session()->get('UserType')));
  echo view("sys/header");
  echo view('sys/menu_' . $user_type);
        echo view("sys/ProcurementItem/add", $data);
        echo view("sys/footer");
    }

    public function viewItem($PId) {
        helper('form');
        $procurementItem = new ProcurementItemModel();
        $procurementPlan = new ProcurementPlanModel();
        $data['listP'] = $procurementPlan->getProPlanDetails($PId);
        if ($this->request->getMethod() == 'post') {
            
            $data['list'] = $procurementItem->where('PId', $this->request->getPost('PId'))->findAll();
            $data['PId']=$this->request->getPost('PId');
        } else {
            $data['list'] = $procurementItem->where('PId', $PId)->findAll();
            //$data['listP'] = $procurementPlan->findAll();
            $data['PId']=$PId;
        }
        
        
        //search bar
        
        /*if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('ItemName') && $this->request->getPost('PType')) {
                $data['list'] = $procurementItem
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->where('PType', $this->request->getPost('PType'))
                        ->findAll();
            } elseif ($this->request->getPost('ItemName')) {
                $data['list'] = $procurementItem
                        ->where('ItemName', $this->request->getPost('ItemName'))
                        ->findAll();
            } elseif ($this->request->getPost('PType')) {
                $data['list'] = $procurementItem
                        ->where('PType', $this->request->getPost('PType'))
                        ->findAll();
            } else {
                $data['list'] = $procurementItem->findAll();
            }
        }*/
        $user_type = str_replace(' ','',strtolower(session()->get('UserType')));
  echo view("sys/header");
  echo view('sys/menu_' . $user_type);
        echo view('sys/procurementItem/viewItem', $data);
        echo view("sys/footer");
    }

    public function updateProt() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/procurementItem/updatePro");
        echo view("sys/footer");
    }
}
