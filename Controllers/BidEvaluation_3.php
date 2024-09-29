<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\DesignationModel;
use App\Models\UserModel;
use App\Models\TenderModel;
use App\Models\AssignCommitteeModel;
use App\Models\SPriceScheduleModel;
use App\Models\SupplierModel;

class BidEvaluation extends BaseController {

    public function index() {
        
    }

   

    public function EvaluationCommittee($Tenderid = null) {
        helper('form'); //load form
        $data = array();
        $employee = new EmployeeModel(); //to create object from the emp model
        $t = new TenderModel();
        $data['TId'] = $Tenderid;
        $data['Tender_list'] = $t->findAll();
        $data['list'] = $employee->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'PNumber' => ['label' => 'PNumber', 'rules' => 'required'],
                'NPC' => ['label' => 'NPC', 'rules' => 'required'],
                'ProEntity' => ['label' => 'ProEntity', 'rules' => 'required'],
                'MNumber' => ['label' => 'MNumber', 'rules' => 'required'],
                'MDate' => ['label' => 'MDate', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                echo 'error';
            } else {
                $EmpId = $this->request->getPost('EmpId');
                //$UserId = $employee->where('UserId', $this->request->getPost('id'))->findAll();
                foreach ($EmpId as $id) {
                    $Committee = new AssignCommitteeModel();
                    //echo $id;
                    $Committee->save([
                        'PNumber' => $this->request->getPost('PNumber'),
                        'Description' => $this->request->getPost('Description'),
                        'NPC' => $this->request->getPost('NPC'),
                        'ProEntity' => $this->request->getPost('ProEntity'),
                        'MNumber' => $this->request->getPost('MNumber'),
                        'MDate' => $this->request->getPost('MDate'),
                        'Purpose' => $this->request->getPost('Purpose'),
                        'EmpId[]' => $id,
                        //'UserId' => $UserId,
                        //Ask From Sir
                        'UserId' => $this->request->getPost('UserId'),
                    ]);
                    }
                    $data['msg'] = "Meeting Successfully  Created";
                
            }
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/BidEvaluation/EvaluationCommittee', $data);
        echo view("sys/footer");
    }

    //for display tenders
    public function getDescription() {
        $tender = new TenderModel();
        $Description = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        echo $Description['Description'];
    }
     public function TECMeeting($userId=null) {
        helper('form'); //load form
        $Committee = new AssignCommitteeModel();
        $userId = session()->get('UserId'); 
        $data['listC'] = $Committee->getAssignCommitteeDetails($userId);
        
         //echo $Committee -> getLastQuery()->getQuery();
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/TECMeeting", $data);
        echo view("sys/footer");
    }
    
     public function PCMeeting() {
        helper('form'); //load form
        $Committee = new AssignCommitteeModel();
        $userId = session()->get('UserId'); 
        $data['listC'] = $Committee->getAssignCommitteeDetails($userId);
        //$data['listC'] = $Committee->joincommitteeBidderDetailsforViewBidders($userId,$TId);
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/PCMeeting", $data);
        echo view("sys/footer");
    }
     public function TECEvaluation($userId=null,$TId=null) {
        helper('form'); //load form
        $Bidder = new SPriceScheduleModel();
        $Committee = new AssignCommitteeModel();
        $userId = session()->get('UserId'); 
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $data['listC'] = $Committee->getAssignCommitteeDetails($userId);
        
        
        
       
        echo $Bidder -> getLastQuery()->getQuery();
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/TECEvaluation", $data);
        echo view("sys/footer");
    }
   
     public function PCEvaluation() {
        helper('form'); //load form

        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/PCEvaluation");
        echo view("sys/footer");
    }
}
