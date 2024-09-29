<?php

namespace App\Controllers;

use App\Models\ProcurementPlanModel;
use App\Models\VoteModel;
use App\Models\ProcurementItemModel;

class ProcurementPlan extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function createPro() {
        helper('form');
        $data = array();
        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Year' => ['label' => 'Year', 'rules' => 'required'],
                'Vote' => ['label' => 'Vote', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $procurementPlan = new ProcurementPlanModel();

                $procurementPlan->save([
                    'Year' => $this->request->getPost('Year'),
                    'Vote' => $this->request->getPost('Vote'),
                    'Description' => $this->request->getPost('Description'),
                    'Allocation' => $this->request->getPost('Allocation'),
                ]);
                $data['msg'] = "Procurement Plan Successfully Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/procurementPlan/createPro", $data);
        echo view("sys/footer");
    }

    /* Call getvdiscription function */

    public function getvdiscription() {
        $Vote = new VoteModel();
        $Votediscription = $Vote->where('Vote', $this->request->getpost('VoteId'))->first();

        echo $Votediscription['Description'];
    }

    public function getvallocation() {
        $Vote = new VoteModel();
        $VoteAllocation = $Vote->where('Vote', $this->request->getpost('VoteId'))->first();

        echo $VoteAllocation['Allocation'];
    }

    public function viewPro() {
        helper('form');
        $procurementPlan = new ProcurementPlanModel();
        $data['list'] = $procurementPlan->findAll();

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('Vote') && $this->request->getPost('Description')) {
                $data['list'] = $procurementPlan
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
            } elseif ($this->request->getPost('Vote')) {
                $data['list'] = $procurementPlan
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->findAll();
            } elseif ($this->request->getPost('Description')) {
                $data['list'] = $procurementPlan
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
            } else {
                $data['list'] = $procurementPlan->findAll();
            }
        }
        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $procurementPlan->where('Vote', $this->request->getPost('Vote'))->findAll();
          } else {
          $data['list'] = $procurementPlan->findAll();
          } */

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/procurementPlan/viewPro', $data);
        echo view("sys/footer");
    }

    public function updateProcurementPlanstatus() {
        helper('form');
        $procurementPlan = new ProcurementPlanModel();
        $procurementItem = new ProcurementItemModel();
        $newdata = [
            "Status" => $this->request->getPost('action'),
            "ApprovedDate" => date("Y-m-d")
        ];
        $procurementPlan->where(['id' => $this->request->getPost('id')])->set($newdata)->update();
        $data['list'] = $procurementPlan->findAll();
        /* $data['list'] = $itemrequest->getrequestDetails();
          $data['listi'] =$item->getrequestitemDetails($this->request->getPost('RequestID')); */
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/procurementPlan/viewPro', $data);
        echo view('sys/footer');
    }

    public function editProcurement($ReqId = null) {
        helper('form'); //load form
        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();
        $procurementPlan = new ProcurementPlanModel();
        $procurementItem = new ProcurementItemModel();

        $designation = new DesignationModel();
        $data['designation_list'] = $designation->findAll();
        $data['employee'] = $employee->where('id', $EmpId)->first();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/procurementPlan/editProcurement", $data);
        echo view("sys/footer");
    }

    public function updateProt() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/procurementPlan/updatePro");
        echo view("sys/footer");
    }
}
