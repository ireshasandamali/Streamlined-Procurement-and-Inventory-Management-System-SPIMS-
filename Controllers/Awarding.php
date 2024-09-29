<?php

namespace App\Controllers;

use App\Models\LoIModel;
use App\Models\TenderModel;
use App\Models\PcApprovaldataModel;
use App\Models\AwardingdataModel;
use App\Models\UserModel;

class Awarding extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function LetterofIntent($TId = null, $VId = null) {
        helper('form'); //load form
        $data = array();
        //$Fmarks = new FAnalysisMarksModel();
        $PCmarks = new PcApprovaldataModel();

        $data['Item_list'] = $PCmarks->groupBy('TenderId')->findall();
        $tender = new TenderModel();
        $data['Tender_list'] = $tender->findAll();
        //$data['list'] = $Fmarks->GetlointentDetails();
        $data['Bidder_list'] = $PCmarks->GetlointentDetails($TId);
        $data['Avalue_list'] = $PCmarks->GetlointentDetails($TId);

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/LetterofIntent', $data);
        echo view("sys/footer");
    }

    public function AwardingLetter($TId = null, $VId = null) {
        helper('form'); //load form
        $data = array();
        //$Fmarks = new FAnalysisMarksModel();
        $PCmarks = new PcApprovaldataModel();

        $data['Item_list'] = $PCmarks->groupBy('TenderId')->findall();
        $tender = new TenderModel();
        $data['Tender_list'] = $tender->findAll();
        //$data['list'] = $Fmarks->GetlointentDetails();
        $data['Bidder_list'] = $PCmarks->GetlointentDetails($TId);
        $data['Avalue_list'] = $PCmarks->GetlointentDetails($TId);

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/AwardingLetter', $data);
        echo view("sys/footer");
    }

    public function savedate() {
        helper('form'); //load form
        $data = array();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'ADate' => ['label' => 'ADate', 'rules' => 'required'],
                'PBond' => ['label' => 'PBond', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $LetteroI = new LoIModel();
                $LetteroI->save([
                    // 'TenderId' => $TId,
                    // 'VendorId' => $VId,
                    // 'TAwarding' => $this->request->getPost('Awarding'),
                    'ADate' => $this->request->getPost('ADate'),
                    'PBond' => $this->request->getPost('PBond'),
                    'CreateDate' => date("Y-m-d"),
                ]);

                $data['msg'] = "Data Sucessfully Saved";
            }
        }
    }

    public function agrrementdate($TId = null, $VId = null, $ADate = null,) {
        helper('form'); //load form
        $data = array();
        $LoIntent = new LoIModel();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'ADate' => ['label' => 'ADate', 'rules' => 'required'],
                'PBond' => ['label' => 'PBond', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $LetteroI = new LoIModel();
                $LetteroI->save([
                    // 'TenderId' => $TId,
                    // 'VendorId' => $VId,
                    // 'TAwarding' => $this->request->getPost('Awarding'),
                    'ADate' => $this->request->getPost('ADate'),
                    'PBond' => $this->request->getPost('PBond'),
                    'CreateDate' => date("Y-m-d"),
                ]);

                $data['msg'] = "Data Sucessfully Saved";
            }
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/agrrementdate', $data);
        echo view("sys/footer");
    }

    public function createLetterofIntent($TId = null, $VId = null, $ADate = null, $PBond = null, $PBondl = null, $VDate = null, $LDate = null, $LetterNo = null) {
        //echo $TId;
        // echo $VId;
        //echo $ADate;

        helper('form'); //load form
        $data = array();
        $PCmarks = new PcApprovaldataModel();
        $data['listBidder'] = $PCmarks->JoinBidderDetails($TId, $VId);
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $data['PBond'] = $PBond;
        $data['ADate'] = $ADate;
        $data['PBond1'] = $PBondl;
        $data['VDate'] = $VDate;
        $data['LDate'] = $LDate;
        $data['LetterNo'] = $LetterNo;

        if ($this->request->getMethod() == 'post') {
            $ADate = $this->request->getPost('ADate');
            $VId = $this->request->getPost('VendorId');
            $TId = $this->request->getPost('TenderId');
            $PBond = $this->request->getPost('PBond');
            $VDate = $this->request->getPost('VDate');
            $PBond1 = $this->request->getPost('PBond1');
            $LetterNo = $this->request->getPost('LetterNo');
            $user = new UserModel();
            $useremail = $user->where('UserId', $VId)->first();

            //$Remail = $useremail['email'];
            // Send verification email
            $email = \Config\Services::email();
            //$email->setTo($this->request->getPost('Email'));
            $email->setTo('sandamalipathirana0@gmail.com');
            $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
            $email->setSubject('Tender Awarding');
            $message = '<h1>You have Awarded Tender </h1>';
            $message .= '<a href="http://localhost/IPMS/Awarding/viewletterofintent/' . $TId . '/' . $VId . '/' . $ADate . '/' . $PBond . '/' . $PBondl . '/' . $VDate . '/' . $LDate . '/' . $LetterNo . '">Hading Over supply Item on date</a>';
            $email->setMessage($message);
            $email->send();
            $data['msg'] = "Thuraly go trough this Letter . ";

            echo "Data Sucessfully Saved";

            $data['msg'] = "Data Sucessfully Saved";
        }

        // echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/createLetterofIntent', $data);
    }

    public function viewletterofintent($TId = null, $VId = null, $ADate = null, $PBond = null, $PBondl = null, $VDate = null, $LDate = null, $LetterNo = null) {
        // echo $TId;
        // echo $VId;
        // echo $ADate;


        helper('form'); //load form
        $data = array();
        $PCmarks = new PcApprovaldataModel();

        $data['PBond'] = $PBond;
        $data['PBond1'] = $PBondl;
        $data['VDate'] = $VDate;
        $data['LDate'] = $LDate;
        $data['ADate'] = $ADate;
        $data['LetterNo'] = $LetterNo;
        $data['VendorId'] = $VId;
        $data['TenderId'] = $TId;
        $data['listBidder'] = $PCmarks->JoinBidderDetails($TId, $VId);
        // echo $PCmarks->getLastQuery()->getQuery();
        $data['listitem'] = $PCmarks->awardingBidder($TId, $VId);
        //echo $VId;
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        $user = new UserModel();
        $useremail = $user->where('UserId', $VId)->first();
        // echo $useremail['email'];
        //  echo view("sys/header");
        // echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/viewletterofintent', $data);
        // echo view("sys/footer");
    }

    public function createLetterofaward($TId = null, $VId = null, $ADate = null, $LetterNo = null) {
        // echo $TId;
        // echo $VId;
        // echo $ADate;


        helper('form'); //load form
        $data = array();
        $PCmarks = new PcApprovaldataModel();
        $data['ADate'] = $ADate;
        $data['LetterNo'] = $LetterNo;
        $data['VendorId'] = $VId;
        $data['TenderId'] = $TId;
        $data['listBidder'] = $PCmarks->JoinBidderDetails($TId, $VId);
        // echo $PCmarks->getLastQuery()->getQuery();
        $data['listitem'] = $PCmarks->awardingBidder($TId, $VId);
        //echo $VId;
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        //$email = 'sandamalipathirana0@gmail';

        if ($this->request->getMethod() == 'post') {
            $ADate = $this->request->getPost('ADate');
            $VId = $this->request->getPost('VendorId');
            $TId = $this->request->getPost('TenderId');
            $LetterNo = $this->request->getPost('LetterNo');
            $user = new UserModel();
            $useremail = $user->where('UserId', $VId)->first();

            $Remail = $useremail['email'];
            $rules = [
                'ADate' => ['label' => 'ADate', 'rules' => 'required'],
                'Totalcost' => ['label' => 'Totalcost', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $Awarddata = new AwardingdataModel();
                $Awarddata->save([
                    'TenderId' => $this->request->getPost('TenderId'),
                    'VendorId' => $this->request->getPost('VendorId'),
                    'ADate' => $this->request->getPost('ADate'),
                    'Totalcost' => $this->request->getPost('Totalcost'),
                ]);
                // Send verification email
                $email = \Config\Services::email();
                //$email->setTo($this->request->getPost('Email'));
                $email->setTo($Remail);
                $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Tender Awarding');
                $message = '<h1>You have Awarded Tender </h1>';
                $message .= '<a href="http://localhost/IPMS/Awarding/viewletteraward/' . $TId . '/' . $VId . '/' . $ADate . '/' . $LetterNo . '">Hading Over supply Item on date</a>';
                $email->setMessage($message);
                $email->send();
                $data['msg'] = "Thuraly go trough this Letter . ";

                echo "Data Sucessfully Saved";

                $data['msg'] = "Data Sucessfully Saved";
            }
        }

        //  echo view("sys/header");
        // echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/createLetterofaward', $data);
        // echo view("sys/footer");
    }

    public function viewletteraward($TId = null, $VId = null, $ADate = null, $LetterNo = null) {
        // echo $TId;
        // echo $VId;
        // echo $ADate;


        helper('form'); //load form
        $data = array();
        $PCmarks = new PcApprovaldataModel();
        $data['ADate'] = $ADate;
        $data['LetterNo'] = $LetterNo;
        $data['VendorId'] = $VId;
        $data['TenderId'] = $TId;
        $data['listBidder'] = $PCmarks->JoinBidderDetails($TId, $VId);
        // echo $PCmarks->getLastQuery()->getQuery();
        $data['listitem'] = $PCmarks->awardingBidder($TId, $VId);
        //echo $VId;
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        $user = new UserModel();
        $useremail = $user->where('UserId', $VId)->first();
        // echo $useremail['email'];
        //  echo view("sys/header");
        // echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/viewletteraward', $data);
        // echo view("sys/footer");
    }

    public function createLetterofawardreplace($TId = null, $VId = null, $ADate = null, $PBond = null, $PBondl = null, $VDate = null) {
        echo $TId;
        echo $VId;
        echo $ADate;

        helper('form'); //load form
        $data = array();
        $PCmarks = new PcApprovaldataModel();
        $data['listBidder'] = $PCmarks->JoinBidderDetails($TId, $VId);
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $data['PBond'] = $PBond;
        $data['ADate'] = $ADate;
        $data['PBond1'] = $PBondl;
        $data['VDate'] = $VDate;

        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/Awarding/createLetterofaward', $data);
        echo view("sys/footer");
    }

    public function getDescription() {
        $tender = new TenderModel();
        $Description = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        echo $Description['Description'];
    }

    public function getBidderList() {
        $PCmarks = new PcApprovaldataModel();
        $TId = $this->request->getPost('TenderId');

        $data['Bidder_list'] = $PCmarks->GetlointentDetailsBidder($TId);

        return view('sys/Awarding/BidderList', $data);
    }

    public function getValue() {

        //echo 100;
        $PCmarks = new PcApprovaldataModel();
        $TId = $this->request->getPost('TenderId');
        $VendorId = $this->request->getPost('VendorId');
        $Avalue_list = $PCmarks->GetlointentDetails($TId, $VendorId);
        echo $Avalue_list[0]['Awarding'];
    }
}
