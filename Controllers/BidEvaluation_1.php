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

    public function TECMeeting() {
        helper('form'); //load form
        $data = array();
        $Committee = new AssignCommitteeModel();
        //$CMember= new CommitteememberModel();
        //$UserId = session()->get('UserId'); 
        $data['listC'] = $Committee->getAssignCommitteeDetails();

        //echo $Committee -> getLastQuery()->getQuery();
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/TECMeeting", $data);
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
        echo view("sys/header");
        echo view("sys/menu");
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
        echo view("sys/header");
        echo view("sys/menu");
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
        echo view("sys/header");
        echo view("sys/menu");
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

        $filepath = FCPATH . 'public/images/uploads/' . $data['BidDOC'];

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
        $filepath = FCPATH . 'public/images/uploads/' . $data['BidDOC'];
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
        $filepath = FCPATH . 'public/images/uploads/' . $data['BidDOC'];
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
        $filepath = FCPATH . 'public/images/uploads/' . $data['BidDOC'];
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
        $filepath = FCPATH . 'public/images/uploads/' . $data['BidDOC'];
        $this->response->setHeader('Content-Type', mime_content_type($filepath));
        $this->response->setHeader('Content-Disposition', 'inline; filename="example.pdf"');
        $this->response->setHeader('Content-Length', filesize($filepath));

        // Output the PDF file content
        $this->response->setBody(file_get_contents($filepath));

        // Send the response
        return $this->response;
    }

    public function SavePAnalysisMarks($UserId = null, $TId = null) {
        helper('form');
        $data = array();
        $SDoc = new SDocumentModel();
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;
        echo $TId;
        $data['TenderId'] = $TId;

        echo $TId;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'DocStatus' => ['label' => 'DocStatus', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $PanalysisMarks = new PAnalysisMarksModel();
                $PanalysisMarks->save([
                    //'docid'=>$this->request->getPost('docid'),
                    'VendorId' => $UserId,
                'CompanyName' => $this->request->getPost('CompanyName'),
                'TenderId' => $TId,
                'DocStatus' => $this->request->getPost('DocStatus'),
                        // 'CommitteeId' =>$this->request->getPost('CommitteeId'),
                ]);
            }
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/SavePAnalysisMarks", $data);
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
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/ViewBidderDOC", $data);
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
        // echo $Bidder -> getLastQuery()->getQuery();
        $SSpec = new SSpecificationModel();
        $data['lists'] = $Spec->getspecDetailsbyTIdTECEvaluation($TId);
        $data['listi'] = $SSpec->JionBidderDetails($TId);
        //echo $SSpec->getLastQuery()->getQuery();
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

        $Criteria = new PCriteriaModel();
        $data['Criteria_list'] = $Criteria->findAll();
        //$data['TId'] = $TId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;
        echo $TId;
        if ($this->request->getMethod() == 'post') {
           print_r($this->request->getPost('DocStatus'));
                $DocStatus = $this->request->getPost('DocStatus');
         foreach ($DocStatus as $key => $value) {
               echo $key;
               echo $value;
                $PanalysisMarks = new PAnalysisMarksModel();
                $PanalysisMarks->save([
                    'DocStatus' => $value,
                    /*'docid'=>$this->request->getPost('docid'),
                    'VendorId' => $UserId,
                    'CompanyName' => $this->request->getPost('CompanyName'),
                    'VendorId' => $this->request->getPost('VendorId'),
                     TenderId' => $TId,
                     'DocStatus' => $this->request->getPost('DocStatus'),
                     'CommitteeId' =>$this->request->getPost('CommitteeId'),*/
                  ]);
                }
            }

        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/TECEvaluation", $data);
        echo view("sys/footer");
    }

    public function ViewPAnalysis($TId = null, $UserId = null) {
        helper('form'); //load form $id=null,
        $data = array();
        $Bidder = new SPriceScheduleModel();
        $data['listB'] = $Bidder->joinBidderDetailsforBidEvaluation($TId);
        $Document = new SDocumentModel();
        $data['listD'] = $Document->joinsupplierwithSDocumentDetails($TId);
        echo $Document->getLastQuery()->getQuery();
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/ViewPAnalysis", $data);
        echo view("sys/footer");
    }

    public function PCMeeting() {
        helper('form'); //load form
        $Committee = new AssignCommitteeModel();
        $UserId = session()->get('UserId');
        $data['listC'] = $Committee->getAssignCommitteeDetails($UserId);
        //$data['listC'] = $Committee->joincommitteeBidderDetailsforViewBidders($userId,$TId);
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/PCMeeting", $data);
        echo view("sys/footer");
    }

    public function PCEvaluation() {
        helper('form'); //load form

        echo view("sys/header");
        echo view("sys/menu");
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
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/BidEvaluation/TECMeeting", $data);
        echo view("sys/footer");
    }
}
