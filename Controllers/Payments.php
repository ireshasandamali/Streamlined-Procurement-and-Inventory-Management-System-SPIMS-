<?php

namespace App\Controllers;

use App\Models\SDocumentModel;
use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\SupplierModel;
use App\Models\AnnouncementModel;
use App\Models\TenderModel;
use App\Models\TenderItemModel;
use App\Models\VoteModel;
use App\Models\ProcurementPlanModel;
use App\Models\ProcurementItemModel;
use App\Models\SSpecificationModel;
use App\Models\InvitationModel;
use App\Models\BidbonddataModel;
use App\Models\SPriceScheduleModel;
use App\Models\PAnalysisMarksModel;
use App\Models\DocumentchargeModel;

class Payments extends BaseController {

    public function index() {
        
    }

    public function DocummentCharges() {
        helper('form');
        $data = array();
        $doccharges = new DocumentchargeModel();
        /* if ($this->request->getMethod() == 'post') {
          $data['listP'] = $doccharges->where('TenderId', $this->request->getPost('TenderId'))->findAll();
          } else {
          $data['listP'] = $doccharges->findAll();
          } */

        $data['listP'] = $doccharges->DocChargesDetails();
        // echo $doccharges->getLastQuery()->getQuery();
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('TenderId') && $this->request->getPost('CompanyName')) {
                // Both Designation and CompanyName provided, search with both conditions
                $data['listP'] = $doccharges
                        ->where('TenderId', $this->request->getPost('TenderId'))
                        ->where('CompanyName', $this->request->getPost('CompanyName'))
                        ->findAll();
            } elseif ($this->request->getPost('TenderId')) {
                // Only Designation provided, search by Designation
                $data['listP'] = $doccharges
                        ->where('TenderId', $this->request->getPost('TenderId'))
                        ->findAll();
            } elseif ($this->request->getPost('CompanyName')) {
                // Only CompanyName provided, search by CompanyName
                $data['listP'] = $doccharges
                        ->where('CompanyName', $this->request->getPost('CompanyName'))
                        ->findAll();
            } else {
                $data['listP'] = $doccharges->findAll();
            }
        }

         $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Payments/DocummentCharges", $data);
        echo view("sys/footer");
    }

    public function BidBondAdd($TId = null) {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $data['Tender_list'] = $tender->findAll();
        $bidBond = new PAnalysisMarksModel();
        //$data['listP'] = $bidBond->Getbidbondregistry();
        $data['Bidder_list'] = $bidBond->Getbidbond($TId);

        echo $bidBond->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Payments/BidBondAdd", $data);
        echo view("sys/footer");
    }

    public function createLetterofBbond($TId = null, $VId = null, $ADate = null, $LetterNo = null) {

        helper('form'); //load form
        $data = array();
        $bidBond = new PAnalysisMarksModel();
        $data['listP'] = $bidBond->Getbidbondregistry($TId, $VId);
        //  echo $bidBond->getLastQuery()->getQuery();
        $data['Bidder_list'] = $bidBond->Getbidbond($TId);

        $data['ADate'] = $ADate;
        $data['LetterNo'] = $LetterNo;
        $data['VendorId'] = $VId;
        $data['TenderId'] = $TId;
        // $data['VId'] = $VId;
        // $data['TId'] = $TId;
        //echo $VId;
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        //$email = 'sandamalipathirana0@gmail';

        if ($this->request->getMethod() == 'post') {
            $ADate = $this->request->getPost('ADate');
            $VId = $this->request->getPost('VendorId');
            $TId = $this->request->getPost('TenderId');
            $LetterNo = $this->request->getPost('LetterNo');
            $BSecurity = $this->request->getPost('BSecurity');
            $user = new UserModel();
            $useremail = $user->where('UserId', $VId)->first();

            $Remail = $useremail['email'];
            $rules = [
                'ADate' => ['label' => 'ADate', 'rules' => 'required'],
               // 'BidderList' => ['label' => 'BidderList', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $bonddata = new BidbonddataModel();
                $bonddata->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'VendorId' => $this->request->getPost('VendorId'),
                    'ADate' => $this->request->getPost('ADate'),
                    'BSecurity' => $this->request->getPost('BSecurity'),
                    'LetterNo' => $this->request->getPost('LetterNo'),
                ]);
                // Send verification email
                $email = \Config\Services::email();
                //$email->setTo($this->request->getPost('Email'));
                $email->setTo($Remail);
                $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Tender Awarding');
                $message = '<h1>You have Awarded Tender </h1>';
                $message .= '<a href="http://localhost/IPMS/Payments/viewLetterBBond/' . $TId . '/' . $VId . '/' . $ADate . '/' . $LetterNo . '">Hading Over supply Item on date</a>';
                $email->setMessage($message);
                $email->send();
                $data['msg'] = "Thuraly go trough this Letter . ";

                echo "Data Sucessfully Saved";

                $data['msg'] = "Data Sucessfully Saved";
            }
        }

        //  echo view("sys/header");
        // echo view('sys/menu_' . $user_type);
        echo view('sys/Payments/createLetterofBbond', $data);
        // echo view("sys/footer");
    }
    
    public function viewLetterBBond($TId = null, $VId = null, $ADate = null, $LetterNo = null) {
        // echo $TId;
        // echo $VId;
        // echo $ADate;


        helper('form'); //load form
        $data = array();
        //$PCmarks = new PcApprovaldataModel();
        $data['ADate'] = $ADate;
        $data['LetterNo'] = $LetterNo;
        $data['VendorId'] = $VId;
        $data['TenderId'] = $TId;
        $bidBond = new PAnalysisMarksModel();
        $data['listP'] = $bidBond->Getbidbondregistry($TId, $VId);
        //echo $VId;
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        $user = new UserModel();
        $useremail = $user->where('UserId', $VId)->first();
        // echo $useremail['email'];
        //  echo view("sys/header");
        // echo view('sys/menu_' . $user_type);
        echo view('sys/Payments/viewLetterBBond', $data);
        // echo view("sys/footer");
    }


    public function BidBond() {
        helper('form');
        $data = array();
        // $bidBond = new SDocumentModel();
        //$data['listP'] = $bidBond->getBidBonddetails();
       // $bidBond = new PAnalysisMarksModel();
        //$data['listP'] = $bidBond->Getbidbondregistry();
         $bonddata = new BidbonddataModel();
           $data['listP'] = $bonddata->GetBbondDetails();

        //echo $bonddata->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/Payments/BidBond", $data);
        echo view("sys/footer");
    }

    public function getDescription() {
        $tender = new TenderModel();
        $Description = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        echo $Description['Description'];
    }

    public function getBidderList() {
        $bidBond = new PAnalysisMarksModel();
        $TId = $this->request->getPost('TenderId');

        $data['Bidder_list'] = $bidBond->Getbidbond($TId);

        return view('sys/Payments/BidderList', $data);
    }

    public function bondreleasestatus($id = null, $Status = null) {
        //echo $id;
        $BidBond = new BidBondModel();
        $BidBond->update($id, [
            'Status' => $Status,
        ]);
        return redirect()->to('Payments/BidBond');

        //echo $employee->getLastQuery()->getQuery();
    }
}
