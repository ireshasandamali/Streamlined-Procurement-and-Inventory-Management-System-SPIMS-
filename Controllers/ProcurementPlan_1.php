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
                ]);
                $data['msg'] = "Procurement Plan Successfully Created";
            }
        }
        echo view("sys/header");
        echo view("sys/menu");
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
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $procurementPlan->where('Vote', $this->request->getPost('Vote'))->findAll();
        } else {
            $data['list'] = $procurementPlan->findAll();
        }

        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/procurementPlan/viewPro', $data);
        echo view("sys/footer");
    }

    public function updateProt() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/procurementPlan/updatePro");
        echo view("sys/footer");
    }
}
