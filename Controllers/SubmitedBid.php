<?php

namespace App\Controllers;

use App\Models\RegSupplierModel;
use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\SupplierModel;
use App\Models\AnnouncementModel;
use App\Models\SAnnouncementModel;
use App\Models\TenderModel;
use App\Models\TenderItemModel;
use App\Models\VoteModel;
use App\Models\ProcurementPlanModel;
use App\Models\ProcurementItemModel;
use App\Models\OpeningCommitteememberModel;
use App\Models\InvitationModel;
use App\Models\ShopingModel;
use App\Models\SpecModel;
use App\Models\SPriceScheduleModel;
use App\Models\SSpecificationModel;
use App\Models\SgoodsDeliveryModel;
use App\Models\SDocumentModel;
use App\Models\OpeningRemarksModel;
use App\Models\EmployeeModel;

class SubmitedBid extends BaseController {

    public function index() {
        
    }

    public function OpeningBid() {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $data['list'] = $announcement->NewBidDetails();
        $sannouncement = new SAnnouncementModel();
        
        /*$BOpen = $this->request->getPost('BOpen');

        // Check if BOpen date is provided in the post request
        if ($BOpen) {
            // Format BOpen date to match the database date format
            $formattedBOpen = date('Y-m-d', strtotime($BOpen));

            // Fetch announcements with BOpen date matching the provided date
            $data['list'] = $announcement->where('DATE(BOpen)', $formattedBOpen)->findAll();
        } else {
            // If no BOpen date is provided, fetch all announcements
            $data['list'] = $announcement->findAll();
        }*/
        
        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $announcement->where('BStart', $this->request->getPost('BStart'))->findAll();
          $data['lists'] = $sannouncement->where('BStarts', $this->request->getPost('BStarts'))->findAll();
          } else {
          $data['list'] = $announcement->findAll();
          $data['lists'] = $sannouncement->findAll();
          } */
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpeningBid", $data);
        echo view("sys/footer");
    }

    public function OpenedBid($AId = null) {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $UserId = session()->get('UserId');
        $employee = new EmployeeModel();
        $employid = $employee->where('UserId',$UserId)->first();
        $Ocommittee = new OpeningCommitteememberModel();
        $data['lista'] = $Ocommittee->joinCommitteememberDetails($employid['id'],$AId);
        
        
       // echo $Ocommittee -> getLastQuery()->getQuery();
        /*if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement->where('BStart', $this->request->getPost('BStart'))->findAll();
        } else {
            $data['list'] = $announcement->findAll();
        }*/


        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailssys($AId);

        //echo $invitation->getLastQuery()->getQuery();
        //$supplier = new SPriceScheduleModel();
        //$data['listB'] = $supplier->joinBidderDetailsforViewBidders($IFBId, $TId);
        // $data['supplier_list'] = $supplier->findall();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpenedBid", $data);
        echo view("sys/footer");
    }

    public function OpenedSBid($AId = null) {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement->where('BStart', $this->request->getPost('BStart'))->findAll();
        } else {
            $data['list'] = $announcement->findAll();
        }


        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailssys($AId);

        echo $invitation->getLastQuery()->getQuery();
        //$supplier = new SPriceScheduleModel();
        //$data['listB'] = $supplier->joinBidderDetailsforViewBidders($IFBId, $TId);
        // $data['supplier_list'] = $supplier->findall();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpenedSBid", $data);
        echo view("sys/footer");
    }

    public function OpenedSBidch($AId = null) {
        helper('form');
        $data = array();
        $sannouncement = new SAnnouncementModel();
        if ($this->request->getMethod() == 'post') {
            $data['lists'] = $sannouncement->where('BStarts', $this->request->getPost('BStarts'))->findAll();
        } else {
            $data['lists'] = $sannouncement->findAll();
        }


        $sannouncement = new $sannouncement();
        $Sinvitation = new ShopingModel();
        $data['list'] = $sannouncement->getSAnnounceDetails($AId);
        $data['listP'] = $Sinvitation->getinvitationDetailssys($AId);

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpenedSBidch", $data);
        echo view("sys/footer");
    }

    public function ViewBidders($IFBId = null, $TId = null) {
        $Bidder = new SPriceScheduleModel();
        $data['Bidder_list'] = $Bidder->findall();
        $data['listB'] = $Bidder->joinBidderDetailsforViewBidders($IFBId, $TId);

        $invitation = new InvitationModel();
        $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        // echo $invitation->getLastQuery()->getQuery();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/ViewBidders", $data);
        echo view("sys/footer");
    }

    public function OpenedTender($IFBId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $SSpec = new SSpecificationModel();
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $TItem = new TenderItemModel();
        $SPSchedule = new SPriceScheduleModel();
        $Sgoodsdelivery = new SgoodsDeliveryModel();
        $SDocument = new SDocumentModel();
        $Spec = new SpecModel();
        // to get data acording to item
        // use this priviously
        //$data['listP'] = $SPSchedule->GetPriseScheduleDetails($UserId);
        $data['listP'] = $SPSchedule->GetPriseSchedule($TId, $UserId);
        //echo $SPSchedule->getLastQuery()->getQuery();
        $data['listG'] = $Sgoodsdelivery->GetSgoodsDeliveryDetails($TId, $UserId);

        $data['listD'] = $SDocument->GetSDocumentDetails($TId, $UserId);

        $data['listJ'] = $Spec->getspecDetailsbyTId($TId);
        $data['lists'] = $SSpec->GetSpecDetails($TId, $UserId);

        $data['list'] = $announcement->getAnnounceDetails($IFBId);
        $data['listi'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        $data['listB'] = $SPSchedule->joinBidderDetails($IFBId, $TId, $UserId);
        echo $SPSchedule->getLastQuery()->getQuery();
        $data['listt'] = $TItem->jointenderItemDetails($TId);

        $data['AnnounceId'] = $IFBId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'remarks' => ['label' => 'remarks', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                echo view("sys/header");
                echo view('sys/menu_' . $user_type);
                echo view("sys/SubmitedBid/OpenedTender", $data);
                echo view("sys/footer");
            } else {
                $Openreult = new OpeningRemarksModel();
                $Openreult->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'VendorId' => $this->request->getPost('VendorId'),
                    'remarks' => $this->request->getPost('remarks'),
                    'CompanyName' => $this->request->getPost('CompanyName'),
                    'AnnounceId' => $this->request->getPost('AnnounceId'),
                    'OCMember' => session()->get('UserId'),
                    'OpenDate' => date("Y-m-d"),
                ]);

                $data['msg'] = "Opened Tender Succsessfully";
            }
        }

        //echo $SPSchedule -> getLastQuery()->getQuery();
        //echo $Bidder -> getLastQuery()->getQuery();
        //$data['lists'] = $specification->getspecDetailsbyTId($TId);
        //echo $specification -> getLastQuery()->getQuery();
        //$data['listi'] = $TItem->getBidtenderItemDetails($TId);
        //$data['listb'] = $SPSchedule->getAppliedBidDetailsbyTId($TId,$Iid);
        //echo $supplierBid -> getLastQuery()->getQuery();

        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpenedTender", $data);
        echo view("sys/footer");
    }

    public function OpenedBReport($IFBId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $SSpec = new SSpecificationModel();
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $TItem = new TenderItemModel();
        $SPSchedule = new SPriceScheduleModel();
        $Sgoodsdelivery = new SgoodsDeliveryModel();
        $SDocument = new SDocumentModel();
        $Spec = new SpecModel();
        $OMarks = new OpeningRemarksModel();
        // to get data acording to item
        // use this priviously
        //$data['listP'] = $SPSchedule->GetPriseScheduleDetails($UserId);
        $data['listP'] = $SPSchedule->GetPriseSchedule($TId, $UserId);
        //echo $SPSchedule->getLastQuery()->getQuery();
        $data['listG'] = $Sgoodsdelivery->GetSgoodsDeliveryDetails($TId, $UserId);

        $data['listD'] = $SDocument->GetSDocumentDetails($TId, $UserId);

        $data['listJ'] = $Spec->getspecDetailsbyTId($TId);
        $data['lists'] = $SSpec->GetSpecDetails($TId, $UserId);

        $data['list'] = $announcement->getAnnounceDetails($IFBId);
        $data['listi'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        $data['listB'] = $SPSchedule->joinBidderDetails($IFBId, $TId, $UserId);
        //echo $SPSchedule->getLastQuery()->getQuery();
        $data['listt'] = $TItem->jointenderItemDetails($TId);

        $data['AnnounceId'] = $IFBId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'remarks' => ['label' => 'remarks', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                echo view("sys/header");
                echo view('sys/menu_' . $user_type);
                echo view("sys/SubmitedBid/OpenedTender", $data);
                echo view("sys/footer");
            } else {
                $Openreult = new OpeningRemarksModel();
                $Openreult->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'VendorId' => $this->request->getPost('VendorId'),
                    'remarks' => $this->request->getPost('remarks'),
                    'CompanyName' => $this->request->getPost('CompanyName'),
                    'AnnounceId' => $this->request->getPost('AnnounceId'),
                    'OCMember' => session()->get('UserId'),
                    'OpenDate' => date("Y-m-d"),
                ]);

                $data['msg'] = "Opened Tender Succsessfully";
            }
        }

        $data['listOR'] = $OMarks->GetopeningDetails($IFBId, $TId, $UserId);

        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpenedBReport", $data);
        echo view("sys/footer");
    }

    public function BidsubmitedList($AId = null, $Tenderid = null) {
        $data = array();
        date_default_timezone_set("Asia/Colombo");
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $tender = new TenderModel();

        $data['list'] = $tender->where(['PType' => 'NCB'])->findAll();

        /* $submitBidS = new SPriceScheduleModel();       
          //$TItem = new TenderItemModel();
          //$specification = new SpecModel();
          $data['lista'] = $announcement->getAnnounceDetails($AId);
          $data['listP'] = $invitation->getinvitationDetails($AId);
          $data['list'] = $tender->getNCBTenderDetails($Tenderid);

          //$data['listb'] = $submitBidS->getsubmitBIDDetails($BId);
          // $data['listi'] = $TItem->getBidtenderItemDetails($TId);
          // $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId); */
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/BidsubmitedList", $data);
        echo view("sys/footer");
    }

    public function BidList($AId = null, $Tenderid = null) {
        $data = array();
        helper('form');
        date_default_timezone_set("Asia/Colombo");
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $tender = new TenderModel();
        $data['lista'] = $announcement->joinAnnouncementInvitationDetails();
        $supplier = new SPriceScheduleModel();
        $data['supplier_list'] = $supplier->findall();
        //echo $supplier->getLastQuery()->getQuery();
        //To get Supplier user id does not correct
        /* $user = new UserModel();
          $user_type = strtolower(session()->get('UserType'));
          $data['$user_list'] = $user->findAll();
          $supplier = new SPriceScheduleModel();
          if($user_type == strtolower('supplier')){
          $data['supplier_list'] =$supplier->where('UserId',session()->get('UserId'))->findAll();
          } */
        //echo $announcement->getLastQuery()->getQuery();
        //$data['listi'] = $invitation->joinAnnouncementInvitationDetails();
        //echo $invitation->getLastQuery()->getQuery();
        //$data['list'] = $tender->where(['PType' => 'NCB'])->findAll();
        //$submitBidS = new SPriceScheduleModel();       
        //$TItem = new TenderItemModel();
        //$specification = new SpecModel();
        //$data['listP'] = $invitation->getinvitationDetails($AId);
        //$data['list'] = $tender->getNCBTenderDetails($Tenderid);
        //$data['listb'] = $submitBidS->getsubmitBIDDetails($BId);
        // $data['listi'] = $TItem->getBidtenderItemDetails($TId);
        // $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);*/
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/BidList", $data);
        echo view("sys/footer");
    }

    public function TenderOpeningReport() {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $BOpen = $this->request->getPost('BOpen');

        // Check if BOpen date is provided in the post request
        if ($BOpen) {
            // Format BOpen date to match the database date format
            $formattedBOpen = date('Y-m-d', strtotime($BOpen));

            // Fetch announcements with BOpen date matching the provided date
            $data['list'] = $announcement->where('DATE(BOpen)', $formattedBOpen)->findAll();
        } else {
            // If no BOpen date is provided, fetch all announcements
            $data['list'] = $announcement->findAll();
        }

        //$sannouncement = new SAnnouncementModel();
        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $announcement->where('BOpen', $this->request->getPost('BOpen'))->findAll();

          } else {
          $data['list'] = $announcement->findAll();

          } */



        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/TenderOpeningReport", $data);
        echo view("sys/footer");
    }

    public function OpenedBidreport($AId = null) {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement->where('BStart', $this->request->getPost('BStart'))->findAll();
        } else {
            $data['list'] = $announcement->findAll();
        }


        $invitation = new InvitationModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailssys($AId);
        //echo $invitation->getLastQuery()->getQuery();
        //$supplier = new SPriceScheduleModel();
        //$data['listB'] = $supplier->joinBidderDetailsforViewBidders($IFBId, $TId);
        // $data['supplier_list'] = $supplier->findall();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpenedBidreport", $data);
        echo view("sys/footer");
    }

    public function ViewBiddersreport($IFBId = null, $TId = null) {
        $Bidder = new SPriceScheduleModel();
        $data['Bidder_list'] = $Bidder->findall();
        $data['listB'] = $Bidder->joinBidderDetailsforViewBidders($IFBId, $TId);
        echo $Bidder->getLastQuery()->getQuery();
        $invitation = new InvitationModel();
        $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);

        echo $invitation->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/ViewBiddersreport", $data);
        echo view("sys/footer");
    }

    public function ViewSBidders($IFBId = null, $TId = null) {
        $Bidder = new SPriceScheduleModel();
        $data['Bidder_list'] = $Bidder->findall();
        $data['listB'] = $Bidder->joinBidderDetailsforViewSBidders($IFBId, $TId);
        echo $Bidder->getLastQuery()->getQuery();
        $invitation = new InvitationModel();
        $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        // echo $invitation->getLastQuery()->getQuery();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/ViewSBidders", $data);
        echo view("sys/footer");
    }

    public function OpenedSTender($IFBId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $SSpec = new SSpecificationModel();
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $TItem = new TenderItemModel();
        $SPSchedule = new SPriceScheduleModel();
        $Sgoodsdelivery = new SgoodsDeliveryModel();
        $SDocument = new SDocumentModel();
        $Spec = new SpecModel();
        // to get data acording to item
        // use this priviously
        //$data['listP'] = $SPSchedule->GetPriseScheduleDetails($UserId);
        $data['listP'] = $SPSchedule->GetPriseSchedule($TId, $UserId);
        //echo $SPSchedule->getLastQuery()->getQuery();
        $data['listG'] = $Sgoodsdelivery->GetSgoodsDeliveryDetails($TId, $UserId);
        echo $Sgoodsdelivery->getLastQuery()->getQuery();
        $data['listD'] = $SDocument->GetSDocumentDetails($TId, $UserId);

        $data['listJ'] = $Spec->getspecDetailsbyTId($TId);
        $data['lists'] = $SSpec->GetSpecDetails($TId, $UserId);

        $data['list'] = $announcement->getAnnounceDetails($IFBId);
        $data['listi'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        $data['listB'] = $SPSchedule->joinSBidderDetails($IFBId, $TId, $UserId);

        $data['listt'] = $TItem->jointenderItemDetails($TId);

        $data['AnnounceId'] = $IFBId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'remarks' => ['label' => 'remarks', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                echo view("sys/header");
                echo view('sys/menu_' . $user_type);
                echo view("sys/SubmitedBid/OpenedTender", $data);
                echo view("sys/footer");
            } else {
                $Openreult = new OpeningRemarksModel();
                $Openreult->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'VendorId' => $this->request->getPost('VendorId'),
                    'remarks' => $this->request->getPost('remarks'),
                    'CompanyName' => $this->request->getPost('CompanyName'),
                    'AnnounceId' => $this->request->getPost('AnnounceId'),
                    'OCMember' => session()->get('UserId'),
                    'OpenDate' => date("Y-m-d"),
                ]);

                $data['msg'] = "Opened Tender Succsessfully";
            }
        }

        //echo $SPSchedule -> getLastQuery()->getQuery();
        //echo $Bidder -> getLastQuery()->getQuery();
        //$data['lists'] = $specification->getspecDetailsbyTId($TId);
        //echo $specification -> getLastQuery()->getQuery();
        //$data['listi'] = $TItem->getBidtenderItemDetails($TId);
        //$data['listb'] = $SPSchedule->getAppliedBidDetailsbyTId($TId,$Iid);
        //echo $supplierBid -> getLastQuery()->getQuery();

        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/SubmitedBid/OpenedSTender", $data);
        echo view("sys/footer");
    }
}
