<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\DesignationModel;
use App\Models\RegSupplierModel;
use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\SupplierModel;
use App\Models\AnnouncementModel;
use App\Models\TenderModel;
use App\Models\TenderItemModel;
use App\Models\VoteModel;
use App\Models\ProcurementPlanModel;
use App\Models\ProcurementItemModel;
use App\Models\RequestModel;
use App\Models\InvitationModel;
use App\Models\SpecModel;
use App\Models\SPriceScheduleModel;
use App\Models\SSpecificationModel;
use App\Models\CommitteememberModel;
use App\Models\AssignCommitteeModel;
use App\Models\CostEstimateMasterModel;
use App\Models\EstimateOtherModel;
use App\Models\NonRegisteredSupplierModel;
use App\Models\PCriteriaModel;
use App\Models\SDocumentModel;
use App\Models\PAnalysisMarksModel;
use App\Models\TecAnalysisMarksModel;
use App\Models\SgoodsDeliveryModel;
use App\Models\DTECRemarksModel;

class DOCEvaluation extends BaseController {

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
        $UserId = session()->get('UserId');

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
                        // 'EmpId[]' => $id,
                ]);

                $TMId = $Committee->getInsertID();
                $EmpId = $this->request->getPost('EmpId');
                $CMember = new CommitteememberModel();
                print_r($this->request->getPost('EmpId'));
                foreach ($EmpId as $id) {
                    $CMember->save([
                        'EmpId' => $id,
                        'TMId' => $TMId,
                    ]);
                }
                $data['msg'] = "Meeting Successfully  Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/BidEvaluation/EvaluationCommittee', $data);
        echo view("sys/footer");
    }

    //for display tenders
    public function getDescription() {
        $tender = new TenderModel();
        $Description = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        echo $Description['Description'];
    }

    public function DTECMeeting() {
        helper('form'); //load form
        $data = array();
        $Committee = new AssignCommitteeModel();
        //$CMember= new CommitteememberModel();
        //$UserId = session()->get('UserId'); 
        $data['listC'] = $Committee->getAssignDCommitteeDetails();

        echo $Committee -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/DOCEvaluation/DTECMeeting", $data);
        echo view("sys/footer");
    }

    public function DTECevaluation($Tenderid = null) {
       helper('form');
       $data = array();
       $data['TId'] = $Tenderid;
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['listr'] = $Tender->getTenderDetails($Tenderid);
        $data['list'] = $Tender->gettenderdetailsviewtender($Tenderid);
        $data['listi'] = $TItem->gettenderitemDetails($Tenderid);
        $UserId = session()->get('UserId');
        $emp = new EmployeeModel();
        $empId= $emp->where('UserId',$UserId)->first();
        $CMember = new CommitteememberModel();
        $data['listmember'] = $CMember->joinDCommitteememberDetails($empId['UserId'],$Tenderid);
       // echo $CMember -> getLastQuery()->getQuery();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Remarks' => ['label' => 'Remarks', 'rules' => 'required'],
                
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $DTECremarks = new DTECRemarksModel();
                $DTECremarks->save([
                    'TenderId' => $this->request->getPost('Tenderid'),
                    'Remarks' =>  $this->request->getPost('Remarks'),
                    'SubmitedDate' =>  date("Y-m-d"),
                    'Mchairmen' => session()->get('UserId'),
                   
                ]);
             
                $data['TenderId'] = $this->request->getPost('Tenderid'); //Does not clear TId when click on submit button
                $data['msg'] = "Updated DTEC Report Succsessfully";
            }
        }

       

        
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/DOCEvaluation/DTECevaluation", $data);
        echo view("sys/footer");
    }
    
    public function DTECResult($Tenderid = null, $TId = null) {
        helper('form');
         $Tender = new TenderModel();
        $data = array();
        $data['TId'] = $Tenderid;
        $DTECremarks = new DTECRemarksModel();
       
      
        //$tender->where(['Tenderid' => $this->request->getPost('TId')]);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Remarks' => ['label' => 'Remarks', 'rules' => 'required'],
                
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $DTECremarks = new DTECRemarksModel();
                $DTECremarks->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'Remarks' =>  $this->request->getPost('Remarks'),
                    'SubmitedDate' =>  date("Y-m-d"),
                    'Mchairmen' => session()->get('UserId'),
                   
                ]);
             
                $data['TenderId'] = $this->request->getPost('TenderId'); //Does not clear TId when click on submit button
                $data['msg'] = "Updated DTEC Report Succsessfully";
            }
        }

        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/DOCEvaluation/DTECevaluation", $data);
        echo view("sys/footer");
    }
    
    
    
    
    
    public function DTECevaluationold($Tenderid = null) {
        helper('form'); //load form
        $data = array();
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['list'] = $Tender->findAll();
        $Committee = new AssignCommitteeModel();
        //$CMember= new CommitteememberModel();
        //$UserId = session()->get('UserId'); 
        $data['listC'] = $Committee->getAssignCommitteeDetails();
        $data['listr'] = $Tender->getTenderDetails($Tenderid);
        $data['list'] = $Tender->joinTenderDetailswithannouncement($Tenderid);
        $data['listi'] = $TItem->gettenderitemDetails($Tenderid);

        //echo $Committee -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/DOCEvaluation/DTECevaluation", $data);
        echo view("sys/footer");
    }

    public function DTECreport() {
        helper('form'); //load form
        $data = array();
        $Committee = new AssignCommitteeModel();
        //$CMember= new CommitteememberModel();
        //$UserId = session()->get('UserId'); 
        $data['listC'] = $Committee->getAssignCommitteeDetails();

        //echo $Committee -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/DOCEvaluation/DTECreport", $data);
        echo view("sys/footer");
    }
}
