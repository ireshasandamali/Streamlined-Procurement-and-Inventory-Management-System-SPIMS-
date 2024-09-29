<?php

namespace App\Controllers;

use App\Models\DTECRemarksModel;
use App\Models\PCdocRemarksModel;
use App\Models\EmployeeModel;
use App\Models\TenderModel;
use App\Models\InvitationModel;
use App\Models\SpecModel;
use App\Models\SPriceScheduleModel;
use App\Models\SSpecificationModel;
use App\Models\CommitteememberModel;
use App\Models\AssignCommitteeModel;
use App\Models\CostEstimateMasterModel;
use App\Models\EstimateOtherModel;
use App\Models\AnnouncementModel;
use App\Models\SAnnouncementModel;
use App\Models\PCriteriaModel;
use App\Models\pcommiteeModel;
use App\Models\ProcurmentMeetingModel;
use App\Models\SgoodsDeliveryModel;
use App\Models\TECreportModel;
use App\Models\PAnalysisMarksModel;
use App\Models\TecAnalysisMarksModel;
use App\Models\PcApprovaldataModel;
use App\Models\FAnalysisMarksModel;
use App\Models\TenderItemModel;
use App\Models\OpeningCommitteememberModel;
use App\Models\AssignopeningCommitteeModel;
use App\Models\AssignopeningOpeningCommitteeModel;
use App\Models\OpeningCommitteemembershopModel;
use App\Models\DTECCommitteememberModel;
use App\Models\PCreportModel;

class Procurement extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function ProcurementCommitteemeeting() {
        helper('form'); //load form
        $data = array();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'PMDate' => ['label' => 'PMDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $pMeeting = new pcommiteeModel();
                $pMeeting->save([
                    'PMDate' => $this->request->getPost('PMDate'),
                ]);

                $PMId = $pMeeting->getInsertID();
                $action = $this->request->getPost('action');
                if ($action == 'add') {
                    return $this->CreateMeeting($PMId);
                }
                $data['msg'] = "Procurement Meeting Successfully Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Procurement/ProcurementCommitteemeeting', $data);
        echo view("sys/footer");
    }

    public function CreateMeeting($PMId = null) {
        helper('form');
        $data = array();
        $pMeeting = new pcommiteeModel();
        $data['PmeetingId'] = $PMId;
        $t = new TenderModel();
        //$data['TId'] = $Tenderid;
        $data['Tender_list'] = $t->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Tenderid' => ['label' => 'Tenderid', 'rules' => 'required'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'PMatter' => ['label' => 'PMatter', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $PCMeeting = new ProcurmentMeetingModel();

                $PCMeeting->save([
                    'PmeetingId' => $this->request->getPost('PmeetingId'),
                    'Tenderid' => $this->request->getPost('Tenderid'),
                    'Description' => $this->request->getPost('Description'),
                    'PMatter' => $this->request->getPost('PMatter'),
                ]);
                $data['PmeetingId'] = $this->request->getPost('PmeetingId');
                $data['msg'] = "Meeting Successfully created";
            }
        }


        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/CreateMeeting", $data);
        echo view("sys/footer");
    }
    
  public function OpeningCreateMeeting() {
    helper('form'); // Load form helper
    $data = array();
    
    $employee = new EmployeeModel(); // Create object from the emp model
    $data['list'] = $employee->openingmember();
    
    $announcement = new AnnouncementModel();
    $sannouncement = new SAnnouncementModel();
    $data['lista'] = $announcement->OpeningAnnounceDetails();
    $data['lists'] = $sannouncement->OpeningSAnnounceDetails();

    if ($this->request->getMethod() == 'post') {
          $announcement = new AnnouncementModel();
            $Opendate = $announcement->where('id', $this->request->getPost('BOpenId'))->first();
            $openday =  $Opendate['BOpen'];
         //   echo  $Opendate['BOpen'];
        $rules = [
            'BOpen' => ['label' => 'BOpen', 'rules' => 'required|validatetender[BOpen,Purpose]'],
            'MDate' => ['label' => 'MDate', 'rules' => 'required'],
            'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
        ];

        $errors = [
            'BOpen' => ['validatetender' => 'Meeting Already Created..!']
        ];

        if (!$this->validate($rules, $errors)) {
            $data['validation'] = $this->validator;
            echo 'error';
        } else {
            $OCommittee = new AssignopeningCommitteeModel();
            
            $OCommittee->save([
                'BOpenId' => $this->request->getPost('BOpenId'),
                'BOpen' => $openday,
                'MDate' => $this->request->getPost('MDate'),
                'Purpose' => $this->request->getPost('Purpose'),
            ]);

            $TMId = $OCommittee->getInsertID();
            $EmpId = $this->request->getPost('EmpId');

            foreach ($EmpId as $id) {
                $OpeningCMember = new OpeningCommitteememberModel();
                $OpeningCMember->save([
                    'EmpId' => $id,
                    'TMId' => $TMId,
                ]);

                //to  Get email address for selected employee
                $employeeData = $employee->find($id);
                $employeeEmail = $employeeData['Email'];

                // Send verification email
                $email = \Config\Services::email();
                $email->setTo($employeeEmail);
                $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Tender Opening Meeting');
                $message = '<h1>Tender Opening Meeting will be held on ' . $openday . '</h1>'; // Include BOpen value in the email body
                $message .= '<a href="http://localhost/IPMS/sys/">Login to the SPIM System</a>';
                $email->setMessage($message);
                $email->send();
            }
            $data['msg'] = "Meeting Successfully Created";
        }
    }

    $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
    echo view("sys/header");
    echo view('sys/menu_' . $user_type);
    echo view("sys/Procurement/OpeningCreateMeeting", $data);
    echo view("sys/footer");
}

  
    
     public function OpeningCreateMeetingshop() {
        helper('form'); //load form
        $data = array();
        $employee = new EmployeeModel(); //to create object from the emp model

        $data['list'] = $employee->openingmember();
        
        $sannouncement = new SAnnouncementModel();
        $data['lista'] = $sannouncement->OpeningSAnnounceDetails();
      


        if ($this->request->getMethod() == 'post') {
             $sannouncement = new SAnnouncementModel();
              $Opendate = $sannouncement->where('ids', $this->request->getPost('BOpenId'))->first();
            $openday =  $Opendate['BOpens'];
             
             
             
            // $Opendate = $sannouncement->where('ids',$this->request->getPost('BOpenId'));
             //$openday = $opendate['BOpens'];
                // $openday =  $Opendate['BOpens'];
            $rules = [
                'BOpen' => ['label' => 'BOpen', 'rules' => 'required|validatetender[BOpen,Purpose]'],
                'MDate' => ['label' => 'MDate', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
            ];

             $errors=[
                
                'BOpen'=>[
                    'validatetender'=>'Meeting Already Created..!'
                ]
            ];

            if (!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
                echo 'error';
            } else {
                $OCommittee = new AssignopeningOpeningCommitteeModel();
                //echo $id;
                $OCommittee->save([
                    'BOpenId' => $this->request->getPost('BOpenId'),
                    'BOpen' => $openday,
                    'MDate' => $this->request->getPost('MDate'),
                    'Purpose' => $this->request->getPost('Purpose'),
                        // 'EmpId[]' => $id,
                ]);

                $TMId = $OCommittee->getInsertID();
                $EmpId = $this->request->getPost('EmpId');
                $OpeningCMember = new OpeningCommitteemembershopModel();
                //print_r($this->request->getPost('EmpId'));
                foreach ($EmpId as $id) {
                    $OpeningCMember->save([
                        'EmpId' => $id,
                        'TMId' => $TMId,
                    ]);

                   
                //to  Get email address for selected employee
                $employeeData = $employee->find($id);
                $employeeEmail = $employeeData['Email'];

                // Send verification email
                $email = \Config\Services::email();
                $email->setTo($employeeEmail);
                $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Tender Opening Meeting');
                $message = '<h1>Tender Opening Meeting will be held on ' . $openday . '</h1>'; // Include BOpen value in the email body
                $message .= '<a href="http://localhost/IPMS/sys/">Login to the SPIM System</a>';
                $email->setMessage($message);
                $email->send();
                }
                $data['msg'] = "Meeting Successfully  Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/OpeningCreateMeetingshop", $data);
        echo view("sys/footer");
    }

    public function PCReccomendation() {
        helper('form'); //load form
        $data = array();
        $PCMeetingdate = new pcommiteeModel();
        //$data['Mdate'] = $PCMeetingdate->where('id',$VoteId)->findAll();
        $data['listC'] = $PCMeetingdate->findAll();
        //echo $PCMeetingdate -> getLastQuery()->getQuery();
        // $data['listC'] = $PCMeeting->getPCommitteeDetails();
        //echo $Committee -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/PCReccomendation", $data);
        echo view("sys/footer");
    }

    public function procurementrecommend($PMId = null) {
        helper('form'); //load form
        $data = array();
        $data['id'] = $PMId;
        $PCMeetingdate = new pcommiteeModel();
        //$data['Mdate'] = $PCMeetingdate->where('id',$VoteId)->findAll();
        $data['list'] = $PCMeetingdate->getMeetingDetails($PMId);
        $PCMeeting = new ProcurmentMeetingModel();
        //$CMember= new CommitteememberModel();
        //$UserId = session()->get('UserId'); 
        $data['listC'] = $PCMeeting->getPCommitteeDetails($PMId);

        //echo $Committee -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/procurementrecommend", $data);
        echo view("sys/footer");
    }

    public function TECRecomendReport() {
        helper('form'); //load form
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $data['listC'] = $Committee->getAssignCommitteeDetails();

        //to view meeting only apppointed user
        if ((session()->get('UserType')) == 'TECMember' || 'TEC Chairmen') {
            $data['listi'] = $CMember->where('EmpId', session()->get('UserId'))->findAll();
        } else {
            $data['listi'] = $CMember->findAll();
        }


        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/TECRecomendReport", $data);
        echo view("sys/footer");
    }
     public function PCApprovedReport() {
        helper('form'); //load form
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $data['listC'] = $Committee->getAssignCommitteeDetails();

        //to view meeting only apppointed user
        if ((session()->get('UserType')) == 'TECMember' || 'TEC Chairmen') {
            $data['listi'] = $CMember->where('EmpId', session()->get('UserId'))->findAll();
        } else {
            $data['listi'] = $CMember->findAll();
        }


        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/PCApprovedReport", $data);
        echo view("sys/footer");
    }


    public function TECReport($TId = null, $UserId = null, $TItemId = null) {
        helper('form'); //load form
        $data = array();
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;
        $Bidder = new SPriceScheduleModel();
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $Dilivery = new SgoodsDeliveryModel();
        $Spec = new SpecModel();
        $SSpec = new SSpecificationModel();
        $PAnalysisMarks = new PAnalysisMarksModel();
        $TECMarks = new TecAnalysisMarksModel();
        $titem = new TenderItemModel();
        $TECRec = new TECreportModel();
        $UserId = session()->get('UserId');
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $data['listz'] = $TECMarks->GetTECtotalmarks($TId);
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        $data['lista'] = $PAnalysisMarks->GetdocstatusDetails($TId);
        $data['listr'] = $PAnalysisMarks->GetaprovedBidderDetails($TId);
        $data['rejected_list'] = $PAnalysisMarks->GetrejectedBidderDetails();
        $data['listE'] = $Mestimate->getCostEstinateDetails($TId);
        $data['listk'] = $titem->getBidtenderItemDetails($TId);
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listD'] = $Dilivery->GetgoodsDeliveryDetails($TId);
        // $data['listT'] = $TECMarks->GetTECAmarksDetails($TId,$UserId);
        $data['listT'] = $TECMarks->GetTECAmarksDetails($TId);
        $data['marks'] = $TECMarks->getMarks($TId);
        $data['listy'] = $TECMarks->GetrejectBidders($TId);

        $data['listv'] = $TECMarks->GetAceptBidders($TId);
        $data['listf'] = $TECMarks->GetAceptBiddersCEstimate($TId);
        $data['listlowest'] = $TECMarks->GetLowestAceptBidders($TId);
        $data['listrejected'] = $TECMarks->rejectedbidder($TId);
        //TEC Evaluation
        $data['listbidders'] = $TECMarks->GetAcceptedBidderlist($TId);
        $data['listItem'] = $TECMarks->GetTECAmarkItem($TId);
        $arrBidder = [];
        foreach ($data['listItem'] AS $key => $Item) {
            $listbidders = $TECMarks->GetAcceptedBidderlist($TId, $Item['Item']);

            $arrBidder[$Item['Item']] = $listbidders;
        }
        $data['BidderList'] = $arrBidder;

        //F Evaluation
        $data['listrejected'] = $TECMarks->rejectedbidder($TId);
        //financial evaluation 
        $FMarks = new FAnalysisMarksModel();
        $data['listfacept'] = $FMarks->GetaceptbidderDetails($TId);
        //echo $FMarks -> getLastQuery()->getQuery();
        $data['listItemf'] = $TECMarks->GetTECAmarkItem($TId);
        $data['listbidders'] = $Bidder->AcceptedBidderList($TId);
        $data['listfItem'] = $TECMarks->GetallItem($TId);

        $arrBidderf = [];
        foreach ($data['listItemf'] AS $key => $Item) {
            $listbidders = $Bidder->AcceptedBidderList($TId, $Item['Item']);

            $arrBidderf[$Item['Item']] = $listbidders;
        }
        $data['BidderListf'] = $arrBidderf;
        //Fmarks
        $FMarks = new FAnalysisMarksModel();
        $data['listcompany'] = $FMarks->where('TenderId', $TId)->where('marks', 1)->groupBy('VendorId')->findAll();
        $data['listrec'] = $TECRec->GetTECRecomendDetails($TId);
        
        
        

       
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/TECReport", $data);
        echo view("sys/footer");
    }

    public function Savepcapproval() {
        helper('form');
        
        $PCdata = new PcApprovaldataModel();
        if ($this->request->getMethod() == 'post') {
            $TenderId = $this->request->getPost('TenderId');
            $ItemName = $this->request->getPost('ItemName');
            $Itemid = $this->request->getPost('Itemid');
            $Qty = $this->request->getPost('Qty');
            $Unit_priceEV = $this->request->getPost('Unit_priceEV');
            $TotalPIVat = $this->request->getPost('TotalPIVat'); 
            $CompanyName = $this->request->getPost('CompanyName');
            $marks = $this->request->getPost('marks');
            $VendorId = $this->request->getPost('VendorId'); 
            $PCdata = new PcApprovaldataModel();
            $i = 0;
             foreach ($Itemid as $key => $value) {
               //  print_r($CompanyName);
               $PCdata->save([
                    'TenderId' => $TenderId,
                    'CompanyName' => $CompanyName[$key],
                    'Qty' => $Qty[$key],
                    'ItemName' => $ItemName[$key],
                    'Unit_priceEV' => $Unit_priceEV[$key],
                   'TotalPIVat' => $TotalPIVat[$key],
                    'Itemid' => $value,
                    'VendorId' => $VendorId[$key],
                    'Unit_priceEV' => $Unit_priceEV[$key],
                    'marks' => $marks[$key]
                ]);
            
                $i++;
            }
        }
        
        
          if ($this->request->getMethod() == 'post') {
            $rules = [
                'TenderId' => ['label' => 'TenderId', 'rules' => 'required'],
                'Approval' => ['label' => 'Approval', 'rules' => 'required'],
               
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $PCApproval = new PCreportModel();
                $PCApproval->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'Approval' => $this->request->getPost('Approval'),                    
                    'date_submitted' => date("Y-m-d"),
                ]);

            }
        }
      $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");     
        echo view("sys/Procurement/sucsess");
    
    }
    
    public function PCEvaluation($Tenderid = null) {
       helper('form');
       $data = array();
       $data['TId'] = $Tenderid;
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        $DTECRemarks = new DTECRemarksModel();
        $data['listr'] = $Tender->getTenderDetails($Tenderid);     
        $data['listi'] = $TItem->gettenderitemDetails($Tenderid);
        $data['listdmarks'] = $DTECRemarks->getDTECmarks($Tenderid);
        
        
         //change after viva
        $data['list'] = $Tender->getviewtender($Tenderid);
       //  $data['list'] = $Tender->gettenderdetailsviewtender($Tenderid);
        
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Remarks1' => ['label' => 'Remarks1', 'rules' => 'required'],
                
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $PCdocremarks = new PCdocRemarksModel();
                $PCdocremarks->save([
                    'TenderId' => $this->request->getPost('Tenderid'),
                    'Remarks1' =>  $this->request->getPost('Remarks1'),
                    'SubmitedDate' =>  date("Y-m-d"),
                    'Pchairmen' => session()->get('UserId'),
                   
                ]);
             
                $data['TenderId'] = $this->request->getPost('Tenderid'); //Does not clear TId when click on submit button
                $data['msg'] = "Updated PC Report Succsessfully";
            }
        }

       

        //echo $Committee -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/PCEvaluation", $data);
        echo view("sys/footer");
    }
    
    
      public function PCAReport($TId = null, $UserId = null, $TItemId = null) {
        helper('form'); //load form
        $data = array();
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;
        $Bidder = new SPriceScheduleModel();
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $Dilivery = new SgoodsDeliveryModel();
        $Spec = new SpecModel();
        $SSpec = new SSpecificationModel();
        $PAnalysisMarks = new PAnalysisMarksModel();
        $TECMarks = new TecAnalysisMarksModel();
        $titem = new TenderItemModel();
        $TECRec = new TECreportModel();
        $PCAreport = new PCreportModel();
        
        $UserId = session()->get('UserId');
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $data['listz'] = $TECMarks->GetTECtotalmarks($TId);
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        $data['lista'] = $PAnalysisMarks->GetdocstatusDetails($TId);
        $data['listr'] = $PAnalysisMarks->GetaprovedBidderDetails($TId);
        $data['rejected_list'] = $PAnalysisMarks->GetrejectedBidderDetails();
        $data['listE'] = $Mestimate->getCostEstinateDetails($TId);
        $data['listk'] = $titem->getBidtenderItemDetails($TId);
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listD'] = $Dilivery->GetgoodsDeliveryDetails($TId);
        // $data['listT'] = $TECMarks->GetTECAmarksDetails($TId,$UserId);
        $data['listT'] = $TECMarks->GetTECAmarksDetails($TId);
        $data['marks'] = $TECMarks->getMarks($TId);
        $data['listy'] = $TECMarks->GetrejectBidders($TId);

        $data['listv'] = $TECMarks->GetAceptBidders($TId);
        $data['listf'] = $TECMarks->GetAceptBiddersCEstimate($TId);
        $data['listlowest'] = $TECMarks->GetLowestAceptBidders($TId);
        $data['listrejected'] = $TECMarks->rejectedbidder($TId);
        //TEC Evaluation
        $data['listbidders'] = $TECMarks->GetAcceptedBidderlist($TId);
        $data['listItem'] = $TECMarks->GetTECAmarkItem($TId);
        $arrBidder = [];
        foreach ($data['listItem'] AS $key => $Item) {
            $listbidders = $TECMarks->GetAcceptedBidderlist($TId, $Item['Item']);

            $arrBidder[$Item['Item']] = $listbidders;
        }
        $data['BidderList'] = $arrBidder;

        //F Evaluation
        $data['listrejected'] = $TECMarks->rejectedbidder($TId);
        //financial evaluation 
        $FMarks = new FAnalysisMarksModel();
        $data['listfacept'] = $FMarks->GetaceptbidderDetails($TId);
        //echo $FMarks -> getLastQuery()->getQuery();
        $data['listItemf'] = $TECMarks->GetTECAmarkItem($TId);
        $data['listbidders'] = $Bidder->AcceptedBidderList($TId);
        $data['listfItem'] = $TECMarks->GetallItem($TId);

        $arrBidderf = [];
        foreach ($data['listItemf'] AS $key => $Item) {
            $listbidders = $Bidder->AcceptedBidderList($TId, $Item['Item']);

            $arrBidderf[$Item['Item']] = $listbidders;
        }
        $data['BidderListf'] = $arrBidderf;
        //Fmarks
        $FMarks = new FAnalysisMarksModel();
        $data['listcompany'] = $FMarks->where('TenderId', $TId)->where('marks', 1)->groupBy('VendorId')->findAll();
        $data['listrec'] = $TECRec->GetTECRecomendDetails($TId);
        $data['listpca'] = $PCAreport->GetPCRecomendDetails($TId);
        
        
        

       
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/PCAReport", $data);
        echo view("sys/footer");
    }
    public function DTECEvaluationCommittee($Tenderid = null) {
        helper('form'); //load form
        $data = array();
        $employee = new EmployeeModel(); //to create object from the emp model
        $t = new TenderModel();
        $data['TId'] = $Tenderid;
        $data['Tender_list'] = $t->findAll();
        $data['list'] = $employee->TECmember();
        //echo $employee -> getLastQuery()->getQuery();
        $UserId = session()->get('UserId');

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'PNumber' => ['label' => 'PNumber', 'rules' => 'required'],
                'MNumber' => ['label' => 'MNumber', 'rules' => 'required'],
                'MDate' => ['label' => 'MDate', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                echo 'error';
            } else {
                $DCommittee = new AssignDTECCommitteeModel();
                //echo $id;
                $DCommittee->save([
                    'PNumber' => $this->request->getPost('PNumber'),
                    'Description' => $this->request->getPost('Description'),
                    'MNumber' => $this->request->getPost('MNumber'),
                    'MDate' => $this->request->getPost('MDate'),
                    'Purpose' => $this->request->getPost('Purpose'),
                        // 'EmpId[]' => $id,
                ]);

                $TMId = $DCommittee->getInsertID();
                $EmpId = $this->request->getPost('EmpId');
                $DCMember = new DTECCommitteememberModel();
                //print_r($this->request->getPost('EmpId'));
                foreach ($EmpId as $id) {
                    $DCMember->save([
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
        echo view('sys/Procurement/DTECEvaluationCommittee', $data);
        echo view("sys/footer");
    }

    public function EvaluationCommittee($Tenderid = null) {
        helper('form'); //load form
        $data = array();
        $employee = new EmployeeModel(); //to create object from the emp model
        $t = new TenderModel();
        $data['TId'] = $Tenderid;
        $data['Tender_list'] = $t->findAll();

        $data['list'] = $employee->TECmember();
        echo $employee->getLastQuery()->getQuery();
        $UserId = session()->get('UserId');

        if ($this->request->getMethod() == 'post') {
             $t = new TenderModel();
             $tenders = $t->where('Tenderid',$this->request->getPost('PNumber'))->first();
             $tname = $tenders['Description'];
             $tNo = $tenders['Tenderid'];
              $MDate = $this->request->getPost('MDate');
             
             
             
                //$Opendate = $sannouncement->where('ids', $this->request->getPost('BOpenId'))->first();
            //$openday =  $Opendate['BOpens'];
            $rules = [
                'PNumber' => ['label' => 'PNumber', 'rules' => 'required'],
                'NPC' => ['label' => 'NPC', 'rules' => 'required'],
                'ProEntity' => ['label' => 'ProEntity', 'rules' => 'required'],
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
                    'MDate' => $this->request->getPost('MDate'),
                    'Purpose' => $this->request->getPost('Purpose'),
                        // 'EmpId[]' => $id,
                ]);

                $TMId = $Committee->getInsertID();
                $EmpId = $this->request->getPost('EmpId');
                $CMember = new CommitteememberModel();
                //print_r($this->request->getPost('EmpId'));
                foreach ($EmpId as $id) {
                    $CMember->save([
                        'EmpId' => $id,
                        'TMId' => $TMId,
                    ]);
                    
                $employeeData = $employee->find($UserId);
                $employeeEmail = $employeeData['Email'];

                // Send verification email
                $email = \Config\Services::email();
                $email->setTo($employeeEmail);
                $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Tender evaluation Meeting');
                $message = '<h1>Tender Evaluation Meeting will be held on ' . $MDate . ' STF/LOG/C/ '. $tNo . ' for ' . $tname . '</h1>';
                $message .= '<a href="http://localhost/IPMS/sys/">Login to the SPIM System</a>';
                $email->setMessage($message);
                $email->send();
                }
                $data['msg'] = "Meeting Successfully  Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Procurement/EvaluationCommittee', $data);
        echo view("sys/footer");
    }

    //for display tenders
    public function getDescription() {
        $tender = new TenderModel();
        $Description = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        echo $Description['Description'];
        //echo $tender -> getLastQuery()->getQuery();
    }

    //use to get date
    public function getOpendate() {
        $announcement = new AnnouncementModel();
        $BOpendate = $announcement->where('id', $this->request->getpost('id'))->first();
        echo $BOpendate['BOpen'];

        //echo $announcement -> getLastQuery()->getQuery();
    }
 //use to get date
    public function getOpendates() {
        $sannouncement = new SAnnouncementModel();
        $BOpendate = $sannouncement->where('ids', $this->request->getpost('ids'))->first();
        echo $BOpendate['BOpens'];

        //echo $sannouncement -> getLastQuery()->getQuery();
    }
    public function Preliminaryanalysiscriteria() {
        helper('form'); //load form
        $data = array();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'PCriteria' => ['label' => 'PCriteria', 'rules' => 'required'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                echo 'error';
            } else {
                $PCriteria = new PCriteriaModel();

                $PCriteria->save([
                    'PCriteria' => $this->request->getPost('PCriteria'),
                ]);

                $data['msg'] = "Meeting Successfully  Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Procurement/Preliminaryanalysiscriteria', $data);
        echo view("sys/footer");
    }

    public function TECMeeting() {
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
        echo view("sys/Procurement/TECMeeting", $data);
        echo view("sys/footer");
    }

    public function ProcurementCommittee() {
        echo "-----Welcome to my first project-------";
    }

    public function OpeningReport() {

        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $sannouncement = new SAnnouncementModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement->where('BStart', $this->request->getPost('BStart'))->findAll();
            $data['lists'] = $sannouncement->where('BStarts', $this->request->getPost('BStarts'))->findAll();
        } else {
            $data['list'] = $announcement->findAll();
            $data['lists'] = $sannouncement->findAll();
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/OpeningReport", $data);
        echo view("sys/footer");
    }

    public function OpenedBid() {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement->where('BStart', $this->request->getPost('BStart'))->findAll();
        } else {
            $data['list'] = $announcement->findAll();
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/OpenedBid", $data);
        echo view("sys/footer");
    }

    public function OpenedTenders($AId = null) {

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetails($AId);
        $supplier = new SPriceScheduleModel();
        $data['supplier_list'] = $supplier->findall();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/OpenedTenders", $data);
        echo view("sys/footer");
    }

    public function ViewBiddersList($IFBId = null, $TId = null) {
        $Bidder = new SPriceScheduleModel();
        $data['Bidder_list'] = $Bidder->findall();
        $data['listB'] = $Bidder->joinBidderDetailsforViewBidders($IFBId, $TId);
        $invitation = new InvitationModel();
        $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);

        //echo $invitation -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/ViewBiddersList", $data);
        echo view("sys/footer");
    }

    public function ViewBidderDOC($IFBId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
        $SSpec = new SSpecificationModel();
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        //$TItem = new TenderItemModel();
        $specification = new SpecModel();
        $SPSchedule = new SPriceScheduleModel();

        //$Supplier = new SupplierModel();
        $Bidder = new SSpecificationModel();
        // to get data acording to item
        $data['listP'] = $SPSchedule->GetPriseScheduleDetails($UserId);

        $data['lists'] = $SSpec->GetSpecDetails($UserId);
        $data['list'] = $announcement->getAnnounceDetails($IFBId);
        $data['listi'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        $data['listB'] = $SPSchedule->joinBidderDetails($IFBId, $TId, $UserId);
        //echo $SPSchedule -> getLastQuery()->getQuery();
        //echo $Bidder -> getLastQuery()->getQuery();
        //$data['lists'] = $specification->getspecDetailsbyTId($TId);
        //echo $specification -> getLastQuery()->getQuery();
        //$data['listi'] = $TItem->getBidtenderItemDetails($TId);
        //$data['listb'] = $SPSchedule->getAppliedBidDetailsbyTId($TId,$Iid);
        //echo $supplierBid -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/ViewBidderDOC", $data);
        echo view("sys/footer");
    }

    public function TECEvaluation($TId = null, $UserId = null) {
        helper('form'); //load form
        $data = array();
        $Bidder = new SPriceScheduleModel();
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $Spec = new SpecModel();
        $UserId = session()->get('UserId');
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $SSpec = new SSpecificationModel();
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listi'] = $SSpec->JionBidderDetails($TId);
        echo $SSpec->getLastQuery()->getQuery();
        //echo $Bidder -> getLastQuery()->getQuery();
        //$data['listP'] = $Bidder->GetPriseScheduleDetailsbyTId($TId,$UserId);
        // $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluations($TId,$UserId);
        //echo $Bidder -> getLastQuery()->getQuery();
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        $data['listP'] = $Bidder->GetestimateDetails($TId);
        //$data['listP'] = $Bidder->GetPriseScheduleDetails($UserId);
        //echo $Bidder -> getLastQuery()->getQuery();
        $data['listE'] = $Mestimate->getCostEstinateMasterDetails($TId);
        // echo $Mestimate -> getLastQuery()->getQuery();

        echo $TId;

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Procurement/TECEvaluation", $data);
        echo view("sys/footer");
    }
}
