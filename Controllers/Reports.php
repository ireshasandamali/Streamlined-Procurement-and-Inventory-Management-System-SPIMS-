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
use App\Models\RequestModel;
use App\Models\SgoodsDeliveryModel;
use App\Models\TECreportModel;
use App\Models\PAnalysisMarksModel;
use App\Models\TecAnalysisMarksModel;
use App\Models\PcApprovaldataModel;
use App\Models\FAnalysisMarksModel;
use App\Models\TenderItemModel;
use App\Models\OpeningCommitteememberModel;
use App\Models\AssignopeningCommitteeModel;
use App\Models\DTECCommitteememberModel;
use App\Models\PCreportModel;

class Reports extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function tenderReports() {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $data['list'] = $tender->findAll();
        $req = new RequestModel();
        $data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('PType') && $this->request->getPost('ICategory')) {
                // Both Designation and NIC provided, search with both conditions
                $data['list'] = $tender
                        ->where('PType', $this->request->getPost('PType'))
                        ->where('ICategory', $this->request->getPost('ICategory'))
                        ->findAll();
            } elseif ($this->request->getPost('PType')) {
                // Only Designation provided, search by Designation
                $data['list'] = $tender
                        ->where('PType', $this->request->getPost('PType'))
                        ->findAll();
            } elseif ($this->request->getPost('ICategory')) {
                // Only NIC provided, search by NIC
                $data['list'] = $tender
                        ->where('ICategory', $this->request->getPost('ICategory'))
                        ->findAll();
            } elseif ($this->request->getPost('rmonth')) {
                // Only NIC provided, search by NIC
                $data['list'] = $tender
                          ->where('YEAR(BStartDate)', $this->request->getPost('ryear'))
                        ->where('MONTH(BStartDate)', $this->request->getPost('rmonth'))
                        ->findAll();
                echo $tender -> getLastQuery()->getQuery();
            } else {
                $data['list'] = $tender->findAll();
            }
        }



        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $tender->where('ICategory', $this->request->getPost('ICategory'))->findAll();
          } else {
          $data['list'] = $tender->findAll();
          } */

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Reports/tenderReports', $data);
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
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTIdTECR($TId);       
        $data['listM'] = $CMember->joinCommitteememberDetailswithemployeetable($TId);
        //echo $CMember -> getLastQuery()->getQuery();
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
        echo view("sys/Reports/TECReport", $data);
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
        //$data['listC'] = $Committee->getAssignCommitteeDetailsbyTId($TId);
        $data['listC'] = $Committee->getAssignCommitteeDetailsbyTIdTECR($TId);   
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
        echo view("sys/Reports/PCAReport", $data);
        echo view("sys/footer");
    }

    public function TenderProgress() {

        helper('form');
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        $Mestimate = new CostEstimateMasterModel();
        $data['listcost'] = $Mestimate->findAll();
        $data['list'] = $Tender->getTenderprogress();
        echo $Tender->getLastQuery()->getQuery();
        // $data['list'] = $Tender->getTenderDetails($Tenderid);
        //$data['listi'] = $TItem->gettenderitemDetails($Tenderid);

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/TenderProgress', $data);
        echo view('sys/footer');
    }

    public function getIId() {
        $TItem = new TenderItemModel();
        $Itemdiscription = $TItem->where('Item', $this->request->getpost('ItemId'))->first();
        echo $Itemdiscription['TItemid'];
    }

    //for Spec table
    public function getSpecItemname() {
        $TItem = new TenderItemModel();
        $Itemdiscription = $TItem->where('Item', $this->request->getpost('ItemId'))->first();
        echo $Itemdiscription['ItemName'];
    }

    public function getQty() {
        $ItemId = $this->request->getPost('ListItemId');
        $itemRequestModel = new RequestModel();
        $quantity = $itemRequestModel->addrequestItemDetails($ItemId);

        echo $quantity[0]['totalQty'];
        //echo $itemRequestModel -> getLastQuery()->getQuery();
    }

    public function getItemname() {
        $ItemId = $this->request->getPost('RItemid');
        $itemRequestModel = new RequestModel();
        $ItemName = $itemRequestModel->addrequestItemDetails($ItemId);

        echo $ItemName[0]['ItemName'];
        //echo $itemRequestModel -> getLastQuery()->getQuery();
    }

    public function removespecItem($Iid) {
        $data = array();

        $specification = new SpecModel();
        $specification->where('specid', $Iid);
        $specification->delete();
        //$this->view();
        $this->createSpec($TId = null);
    }
}
