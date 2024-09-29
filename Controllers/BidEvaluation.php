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
use App\Models\TECreportModel;
use App\Models\FAnalysisMarksModel;

class BidEvaluation extends BaseController {

    public function index() {
        
    }

    public function EvaluationCommitteebid($Tenderid = null) {
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

    public function TECMeeting() {
        helper('form'); //load form
        $data = array();
        $Committee = new AssignCommitteeModel();
        //$CMember= new CommitteememberModel();
        //$UserId = session()->get('UserId'); 
        $data['listC'] = $Committee->getAssignCommitteeDetails();

        //echo $Committee->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/TECMeeting", $data);
        echo view("sys/footer");
    }

    public function TECMeetingPreliminary() {
        helper('form'); //load form
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $data['listC'] = $Committee->getAssignCommitteeDetails();
        
        
        
        //echo $CMember -> getLastQuery()->getQuery();
        //to view meeting only apppointed user
        if ((session()->get('UserType')) == 'TECMember' || 'TEC Chairmen') {
            $data['listi'] = $CMember->where('EmpId', session()->get('UserId'))->findAll();
        } else {
            $data['listi'] = $CMember->findAll();
        }



        //$CMember= new CommitteememberModel();
        //$UserId = session()->get('UserId'); 
        //$data['listC'] = $Committee->getAssignCommitteeDetails();
        //echo $Committee -> getLastQuery()->getQuery();

        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/TECMeetingPreliminary", $data);
        echo view("sys/footer");
    }

    public function TECMeetingtechnical() {
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
        echo view("sys/BidEvaluation/TECMeetingtechnical", $data);
        echo view("sys/footer");
    }

    public function TECMeetingfinacial() {
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
        echo view("sys/BidEvaluation/TECMeetingfinacial", $data);
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
        echo view("sys/BidEvaluation/OpenedBid", $data);
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
        echo view("sys/BidEvaluation/OpenedTenders", $data);
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
        echo view("sys/BidEvaluation/ViewBiddersList", $data);
        echo view("sys/footer");
    }

    public function openbidDOC($UserId = null, $TId = null) {
        helper('form');
        $data = array();
        $SDoc = new SDocumentModel();
        $data = $SDoc->where(['UserId' => $UserId, 'TenderId' => $TId, 'fileType' => 'BidSubmissionform'])->first();
        $filepath = FCPATH . 'public/images/uploads2/' . $data['BidDOC'];
        $this->response->setHeader('Content-Type', mime_content_type($filepath));
        $this->response->setHeader('Content-Disposition', 'inline; filename="example.pdf"');
        $this->response->setHeader('Content-Length', filesize($filepath));

        // Output the PDF file content
        $this->response->setBody(file_get_contents($filepath));

        // Send the response
        return $this->response;
    }

    public function openBidSguarantee($UserId = null, $TId = null) {
        helper('form');
        $data = array();
        $SDoc = new SDocumentModel();
        $data = $SDoc->where(['UserId' => $UserId, 'TenderId' => $TId, 'fileType' => 'Bid Bond'])->first();

        // Check if data is retrieved successfully
        if (!$data) {
            // Handle error (e.g., log, display message)
            return "Error: No data found for the specified user and tender ID.";
        }

        $filepath = FCPATH . 'public/images/uploads2/' . $data['BidDOC'];

        // Check if file exists
        if (!file_exists($filepath)) {
            // Handle error (e.g., log, display message)
            return "Error: File not found at path: $filepath";
        }

        $this->response->setHeader('Content-Type', mime_content_type($filepath));
        $this->response->setHeader('Content-Disposition', 'inline; filename="example.pdf"');
        $this->response->setHeader('Content-Length', filesize($filepath));

        // Output the PDF file content
        $this->response->setBody(file_get_contents($filepath));

        // Send the response
        return $this->response;
    }

    public function openBRegistration($UserId = null, $TId = null) {
        helper('form');
        $data = array();
        $SDoc = new SDocumentModel();
        $data = $SDoc->where(['UserId' => $UserId, 'TenderId' => $TId, 'fileType' => 'BRegistration'])->first();
        $filepath = FCPATH . 'public/images/uploads2/' . $data['BidDOC'];
        $this->response->setHeader('Content-Type', mime_content_type($filepath));
        $this->response->setHeader('Content-Disposition', 'inline; filename="example.pdf"');
        $this->response->setHeader('Content-Length', filesize($filepath));

        // Output the PDF file content
        $this->response->setBody(file_get_contents($filepath));

        // Send the response
        return $this->response;
    }

    public function openPCA3($UserId = null, $TId = null) {
        helper('form');
        $data = array();
        $SDoc = new SDocumentModel();
        $data = $SDoc->where(['UserId' => $UserId, 'TenderId' => $TId, 'fileType' => 'PCA3'])->first();
        $filepath = FCPATH . 'public/images/uploads2/' . $data['BidDOC'];
        $this->response->setHeader('Content-Type', mime_content_type($filepath));
        $this->response->setHeader('Content-Disposition', 'inline; filename="example.pdf"');
        $this->response->setHeader('Content-Length', filesize($filepath));

        // Output the PDF file content
        $this->response->setBody(file_get_contents($filepath));

        // Send the response
        return $this->response;
    }

    public function opentechnicalbrochures($UserId = null, $TId = null) {
        helper('form');
        $data = array();
        $SDoc = new SDocumentModel();
        $data = $SDoc->where(['UserId' => $UserId, 'TenderId' => $TId, 'fileType' => 'manufacturebrochures'])->first();
        $filepath = FCPATH . 'public/images/uploads2/' . $data['BidDOC'];
        $this->response->setHeader('Content-Type', mime_content_type($filepath));
        $this->response->setHeader('Content-Disposition', 'inline; filename="example.pdf"');
        $this->response->setHeader('Content-Length', filesize($filepath));

        // Output the PDF file content
        $this->response->setBody(file_get_contents($filepath));

        // Send the response
        return $this->response;
    }

    public function openMAuthorization($UserId = null, $TId = null) {
        helper('form');
        $data = array();
        $SDoc = new SDocumentModel();
        $data = $SDoc->where(['UserId' => $UserId, 'TenderId' => $TId, 'fileType' => 'Manufacture Authorization'])->first();
        $filepath = FCPATH . 'public/images/uploads2/' . $data['BidDOC'];
        $this->response->setHeader('Content-Type', mime_content_type($filepath));
        $this->response->setHeader('Content-Disposition', 'inline; filename="example.pdf"');
        $this->response->setHeader('Content-Length', filesize($filepath));

        // Output the PDF file content
        $this->response->setBody(file_get_contents($filepath));

        // Send the response
        return $this->response;
    }

    public function SaveDOCStatus() {
        $BidSubmissionform = $this->request->getPost('BidSubmissionform');
        $Bidbond = $this->request->getPost('Bidbond');
        $BRegistration = $this->request->getPost('BRegistration');
        $PCA3 = $this->request->getPost('PCA3');
        $manufacturebrochures = $this->request->getPost('manufacturebrochures');
        $ManufactureAuthorization = $this->request->getPost('ManufactureAuthorization');
        $CompanyName = $this->request->getPost('CompanyName');
        //print_r($BidSubmissionform);
        //print_r($CompanyName);
        foreach ($BidSubmissionform as $key => $value) {
            $PanalysisMarks = new PAnalysisMarksModel();
            $PanalysisMarks->save([
                'docid' => 'BidSubmissionform',
                'VendorId' => $key,
                'TenderId' => $this->request->getPost('TenderId'),
                'CompanyName' => $CompanyName[$key],
                'DocStatus' => $value,
                'CommitteeId' => session()->get('UserId'),
            ]);
        }
        foreach ($Bidbond as $key => $value) {
            $PanalysisMarks = new PAnalysisMarksModel();
            $PanalysisMarks->save([
                'docid' => 'Bid Bond',
                'VendorId' => $key,
                'TenderId' => $this->request->getPost('TenderId'),
                'DocStatus' => $value,
                'CompanyName' => $CompanyName[$key],
                'DocStatus' => $value,
                'CommitteeId' => session()->get('UserId'),
            ]);
        }

        foreach ($BRegistration as $key => $value) {
            $PanalysisMarks = new PAnalysisMarksModel();
            $PanalysisMarks->save([
                'docid' => 'BRegistration',
                'VendorId' => $key,
                'TenderId' => $this->request->getPost('TenderId'),
                'DocStatus' => $value,
                'CompanyName' => $CompanyName[$key],
                'DocStatus' => $value,
                'CommitteeId' => session()->get('UserId'),
            ]);
        }

        foreach ($PCA3 as $key => $value) {
            $PanalysisMarks = new PAnalysisMarksModel();
            $PanalysisMarks->save([
                'docid' => 'PCA3',
                'VendorId' => $key,
                'TenderId' => $this->request->getPost('TenderId'),
                'DocStatus' => $value,
                'CompanyName' => $CompanyName[$key],
                'DocStatus' => $value,
                'CommitteeId' => session()->get('UserId'),
            ]);
        }
        foreach ($manufacturebrochures as $key => $value) {
            $PanalysisMarks = new PAnalysisMarksModel();
            $PanalysisMarks->save([
                'docid' => 'manufacturebrochures',
                'VendorId' => $key,
                'TenderId' => $this->request->getPost('TenderId'),
                'DocStatus' => $value,
                'CompanyName' => $CompanyName[$key],
                'DocStatus' => $value,
                'CommitteeId' => session()->get('UserId'),
            ]);
        }
        foreach ($ManufactureAuthorization as $key => $value) {
            $PanalysisMarks = new PAnalysisMarksModel();
            $PanalysisMarks->save([
                'docid' => 'Manufacture Authorization',
                'VendorId' => $key,
                'TenderId' => $this->request->getPost('TenderId'),
                'DocStatus' => $value,
                'CompanyName' => $CompanyName[$key],
                'DocStatus' => $value,
                'CommitteeId' => session()->get('UserId'),
            ]);
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");     
        echo view("sys/BidEvaluation/sucsess");
    
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
        echo view("sys/BidEvaluation/ViewBidderDOC", $data);
        echo view("sys/footer");
    }

    public function TECEvaluation($TId = null, $UserId = null, $TItemId = null) {
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
        
         $FMarks = new FAnalysisMarksModel();
         $data['listfacept'] = $FMarks->GetaceptbidderDetails($TId);
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
        $data['listcompany'] =$FMarks->where('TenderId',$TId)->where('marks',1)->groupBy('VendorId')->findAll();
       
        

        // echo $TECMarks -> getLastQuery()->getQuery();
        //$data['listi'] = $SSpec->JionBidderDetails($TId);
// Fetch the list of bidders
        //$listB = $Bidder->joinBidderDetailsforBidEvaluation($TId);
// Extract the 'business_name' column from the result set
        // $businessNames = array_column($listB, 'business_name');
// Count the unique business names
        // $uniqueBusinessNames = array_unique($businessNames);
        // $numberOfBusinessNames = count($uniqueBusinessNames);
        // $data['numberOfBusinessNames'] = $numberOfBusinessNames;
// Output the count
//echo "Number of unique business names: " . $numberOfBusinessNames;
        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'TenderId' => ['label' => 'TenderId', 'rules' => 'required'],
                'Panalysis' => ['label' => 'Panalysis', 'rules' => 'required'],
                'Tanalysis' => ['label' => 'Tanalysis', 'rules' => 'required'],
                'Fanalysis' => ['label' => 'Fanalysis', 'rules' => 'required'],
                'Recomend' => ['label' => 'Recomend', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $TECRecomend = new TECreportModel();
                $TECRecomend->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'Panalysis' => $this->request->getPost('Panalysis'),
                    'Tanalysis' => $this->request->getPost('Tanalysis'),
                    'Fanalysis' => $this->request->getPost('Fanalysis'),
                    'Recomend' => $this->request->getPost('Recomend'),
                    'date_submitted' => date("Y-m-d"),
                ]);

//echo view("sys/employee/add_success",$data);
                //$data['msg'] = "Data Saved";
            }
        }






        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/TECEvaluation", $data);
        echo view("sys/footer");
    }

    public function PreliminaryEvaluation($TId = null, $UserId = null) {
        helper('form'); //load form
        $data = array();
        $UserId = session()->get('UserId');
        $Bidder = new SPriceScheduleModel();
        //$data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $PAnalysisMarks = new PAnalysisMarksModel();
        $data['lista'] = $PAnalysisMarks->GetdocstatusDetails($TId);
        //$data['rejcted_list'] = $PAnalysisMarks->where('DocStatus','No')->first();
        $data['rejected_list'] = $PAnalysisMarks->GetrejectedBidderDetails();

        $data['listr'] = $PAnalysisMarks->GetaprovedBidderDetails();
        $Dilivery = new SgoodsDeliveryModel();
        $data['listD'] = $Dilivery->GetgoodsDeliveryDetails($TId);

        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $Spec = new SpecModel();

        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        // echo $Bidder -> getLastQuery()->getQuery();
        $SSpec = new SSpecificationModel();
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listi'] = $SSpec->JionBidderDetails($TId);

        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        $data['listP'] = $Bidder->GetestimateDetails($TId);
        $data['listE'] = $Mestimate->getCostEstinateMasterDetails($TId);

        $Criteria = new PCriteriaModel();
        $data['Criteria_list'] = $Criteria->findAll();
        //$data['TId'] = $TId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

// Fetch the list of bidders
        $listB = $Bidder->joinBidderDetailsforBidEvaluation($TId);
// Extract the 'business_name' column from the result set
        $businessNames = array_column($listB, 'business_name');
// Count the unique business names
        $uniqueBusinessNames = array_unique($businessNames);
        $numberOfBusinessNames = count($uniqueBusinessNames);
        $data['numberOfBusinessNames'] = $numberOfBusinessNames;
// Output the count
//echo "Number of unique business names: " . $numberOfBusinessNames;

        $UserId = session()->get('UserId');
        $employee = new EmployeeModel();
        $empUserId = $employee->where('UserId',$UserId)->first();
        $CMember = new CommitteememberModel();
        $data['listmember'] = $CMember->joinCommitteememberDetails($empUserId['UserId'],$TId);
         //echo $CMember->getLastQuery()->getQuery();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/PreliminaryEvaluation", $data);
        echo view("sys/footer");
    }

    public function TechnicalEvaluation($TId = null, $UserId = null) {
        helper('form'); //load form
        $data = array();
        $Bidder = new SPriceScheduleModel();
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $Spec = new SpecModel();
        $UserId = session()->get('UserId');
        //$data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $titem = new TenderItemModel();
        $PAnalysisMarks = new PAnalysisMarksModel();
        $TECMarks = new TecAnalysisMarksModel();
        //$data['lista'] = $PAnalysisMarks->GetdocstatusDetails($TId);
        $data['listB'] = $PAnalysisMarks->GetaprovedBidderDetails($TId);

        $SSpec = new SSpecificationModel();
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listi'] = $SSpec->JionBidderDetails($TId);
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        $data['listP'] = $Bidder->GetestimateDetails($TId);
        $data['listE'] = $Mestimate->getCostEstinateMasterDetails($TId);
        $data['listk'] = $titem->getBidtenderItemDetails($TId);
        $data['listT'] = $TECMarks->GetTECAmarksDetails($TId);
        $data['marks'] = $TECMarks->getMarks($TId);
        $data['listz'] = $TECMarks->GetTECtotalmarks($TId);
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        $data['listr'] = $PAnalysisMarks->GetaprovedBidderDetails($TId);
        //accepted bidder
        $data['listItem'] = $TECMarks->GetTECAmarkItem($TId);
        $data['listbidders'] = $TECMarks->GetAcceptedBidderlist($TId);
        $data['listrejected'] = $TECMarks->rejectedbidder($TId);
        //echo $TECMarks->getLastQuery()->getQuery();
        $arrBidder = [];
        foreach ($data['listItem'] AS $key => $Item) {
            $listbidders = $TECMarks->GetAcceptedBidderlist($TId, $Item['Item']);
            //print_r($listbidders);
            // foreach ($listbidders AS $key=> $Bidder){
            $arrBidder[$Item['Item']] = $listbidders;

            // }  
        }
        $data['BidderList'] = $arrBidder;

        $UserId = session()->get('UserId');
        $employee = new EmployeeModel();
        $empUserId = $employee->where('UserId',$UserId)->first();
        $CMember = new CommitteememberModel();
        $data['listmember'] = $CMember->joinCommitteememberDetails($empUserId['UserId'],$TId);
        
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/TechnicalEvaluation", $data);
        echo view("sys/footer");
    }

    public function FinancialEvaluation($TId = null) {
        helper('form'); //load form
        $data = array();
        $Bidder = new SPriceScheduleModel();
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $Mestimate = new CostEstimateMasterModel();
        //$Otherestimate = new EstimateOtherModel();
        $Spec = new SpecModel();
        $TECMarks = new TecAnalysisMarksModel();
        // $FANMArks = new TecAnalysisMarksModel();
        $FMarks = new FAnalysisMarksModel();
        //$UserId = session()->get('UserId');
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        // echo $Bidder -> getLastQuery()->getQuery();
        $SSpec = new SSpecificationModel();
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listi'] = $SSpec->JionBidderDetails($TId);
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        $data['listP'] = $Bidder->GetestimateDetails($TId);
        $data['listE'] = $Mestimate->getCostEstinateMasterDetails($TId);
        // echo $Mestimate -> getLastQuery()->getQuery();
        $data['listf'] = $TECMarks->GetAceptBiddersCEstimate($TId);
        $Criteria = new PCriteriaModel();
        $data['Criteria_list'] = $Criteria->findAll();
        //$data['TId'] = $TId;
        $data['TenderId'] = $TId;
        //$data['VendorId'] = $UserId;
        //tec evaluation 
        $data['listrejected'] = $TECMarks->rejectedbidder($TId);
        //financial evaluation 
        $data['listItem'] = $TECMarks->GetallItem($TId);
        // echo $TECMarks->getLastQuery()->getQuery();
        $data['listbidders'] = $Bidder->AcceptedBidderList($TId);
        
        
        $arrBidder = [];
        foreach ($data['listItem'] AS $key => $Item) {
            $listbidders = $Bidder->AcceptedBidderList($TId, $Item['Item']);

            $arrBidder[$Item['Item']] = $listbidders;

            // }
        }
        $data['BidderList'] = $arrBidder;
        
       
        $FMarks = new FAnalysisMarksModel();
        $data['listfacept'] = $FMarks->GetaceptbidderDetails($TId);
        $data['listcompany'] =$FMarks->where('TenderId',$TId)->where('marks',1)->groupBy('VendorId')->findAll();
       // echo $FMarks->getLastQuery()->getQuery();
         $UserId = session()->get('UserId');
        $employee = new EmployeeModel();
        $empUserId = $employee->where('UserId',$UserId)->first();
        $CMember = new CommitteememberModel();
        $data['listmember'] = $CMember->joinCommitteememberDetails($empUserId['UserId'],$TId);
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/FinancialEvaluation", $data);
        echo view("sys/footer");
    }

    public function SaveFanalysis() {
        helper('form');
        //$CompanyName = $this->request->getPost('CompanyName');
        // $TotalPEVat = $this->request->getPost('TotalPEVat');
        //print_r($TotalPEVat);
        // Get form inputs
        $FAMarks = new FAnalysisMarksModel();
        if ($this->request->getMethod() == 'post') {
            $marks = $this->request->getPost('marks');
            $TenderId = $this->request->getPost('TenderId');
            $ItemName = $this->request->getPost('ItemName');
            $Itemid = $this->request->getPost('Itemid');
            $Qty = $this->request->getPost('Qty');
            $Unit_priceEV = $this->request->getPost('Unit_priceEV');
            $TotalPEVat = $this->request->getPost('TotalPEVat'); //is it correct? no sir
            $CompanyName = $this->request->getPost('CompanyName');
            $VendorId = $this->request->getPost('VendorId'); //***********************
            $FAMarks = new FAnalysisMarksModel();
            $i = 0;
            foreach ($CompanyName as $key => $value) {

                $FAMarks->save([
                    'TenderId' => $TenderId,
                    'Itemid' => $Itemid[$key],
                    'Qty' => $Qty[$key],
                    'ItemName' => $ItemName[$key],
                    'Unit_priceEV' => $Unit_priceEV[$key],
                    'TotalPIVat' => $TotalPEVat[$key],
                    'CompanyName' => $value,
                    'VendorId' => $VendorId[$key],
                    'Unit_priceEV' => $Unit_priceEV[$key],
                    'marks' => $marks[$key]
                ]);
                $i++;
            }
        }
  $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");     
        echo view("sys/BidEvaluation/sucsess");
    
    }

    public function ViewPAnalysis($TId = null, $UserId = null) {
        helper('form'); //load form $id=null,
        $data = array();
        $Bidder = new SPriceScheduleModel();
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $Document = new SDocumentModel();
        $data['listD'] = $Document->joinsupplierwithSDocumentDetails($TId);
        echo $Document->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/ViewPAnalysis", $data);
        echo view("sys/footer");
    }

    public function PCMeeting() {
        helper('form'); //load form
        $Committee = new AssignCommitteeModel();
        $UserId = session()->get('UserId');
        $data['listC'] = $Committee->getAssignCommitteeDetails($UserId);
        //$data['listC'] = $Committee->joincommitteeBidderDetailsforViewBidders($userId,$TId);
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/PCMeeting", $data);
        echo view("sys/footer");
    }

    public function PCEvaluation() {
        helper('form'); //load form

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/PCEvaluation");
        echo view("sys/footer");
    }

    public function TECMeetingcheck($UserId = null) {
        helper('form'); //load form
        $Committee = new AssignCommitteeModel();
        $CMember = new CommitteememberModel();
        $UserId = session()->get('UserId');
        $data['listC'] = $Committee->getAssignCommitteeDetails($UserId);

        //echo $Committee -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/TECMeeting", $data);
        echo view("sys/footer");
    }

    public function viewSpecdetails($UserId = null, $TId = null) {

        helper('form');
        $data = array();
        $SSpec = new SSpecificationModel();
        //$data['lists'] = $SSpec->technicalevaluationBidderDetails($UserId, $TId);
        $data['lists'] = $SSpec->technicalevaluationBidders($UserId, $TId);
        echo $SSpec->getLastQuery()->getQuery();
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/viewSpecdetails", $data);
        echo view("sys/footer");
    }

    public function SaveSpecStatus() {
        helper('form');
        $Marks = $this->request->getPost('Marks');
        $TenderId = $this->request->getPost('TenderId');
        $Item = $this->request->getPost('Item');
        $Itemid = $this->request->getPost('Itemid');
        $BiddersOffer = $this->request->getPost('BiddersOffer');
        $Remarks = $this->request->getPost('Remarks');

        $TechAMarks = new TecAnalysisMarksModel();
        foreach ($Marks as $key => $value) {
            echo $Itemid[$key];
            // Save data to the database
            $TechAMarks->save([
                'VendorId' => $this->request->getPost('VendorId'),
                'CompanyName' => $this->request->getPost('CompanyName'),
                'TenderId' => $TenderId,
                'Itemid' => $Itemid[$key],
                'Item' => $Item[$key],
                'BiddersOffer' => $BiddersOffer[$key],
                'Remarks' => $Remarks[$key],
                'SpecId' => $key,
                'marks' => $value
            ]);
        }
 $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");     
        echo view("sys/BidEvaluation/sucsess");
    
    }

    public function viewSriseSchuduledetails($UserId = null, $TId = null) {

        helper('form');
        $data = array();
        $TECMarks = new TecAnalysisMarksModel();
        //$data['lists'] = $SSpec->technicalevaluationBidderDetails($UserId, $TId);

        $data['listf'] = $TECMarks->GetAceptBiddersCEstimate($TId);

        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/BidEvaluation/viewSriseSchuduledetails", $data);
        echo view("sys/footer");
    }

    public function SaveTECReport() {
        helper('form');
        $TenderId = $this->request->getPost('TenderId');

        $data = array();
        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'TenderId' => ['label' => 'TenderId', 'rules' => 'required'],
                'Panalysis' => ['label' => 'Panalysis', 'rules' => 'required'],
                'Tanalysis' => ['label' => 'Tanalysis', 'rules' => 'required'],
                'Fanalysis' => ['label' => 'TenderId', 'rules' => 'Fanalysis'],
                'Recomend' => ['label' => 'Recomend', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $TECRecomend = new TECreportModel();
                $TECRecomend->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'Panalysis' => $this->request->getPost('Panalysis'),
                    'Tanalysis' => $this->request->getPost('Tanalysis'),
                    'Fanalysis' => $this->request->getPost('Fanalysis'),
                    'Recomend' => $this->request->getPost('Recomend'),
                ]);

//echo view("sys/employee/add_success",$data);
                //$data['msg'] = "Data Saved";
            }
        }
   $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");     
        echo view("sys/BidEvaluation/sucsess");
    
    }
}
