<?php

namespace App\Controllers;

use App\Models\InvitationModel;
use App\Models\AnnouncementModel;
use App\Models\SAnnouncementModel;
use App\Models\TenderModel;
use App\Models\ShopingModel;

class Invitation extends BaseController {

    public function index() {
        
    }

    public function add($id = null, $Tenderid = null) {

        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['IFBId'] = $id;
        $data['TId'] = $Tenderid;
        $data['Tender_list'] = $t->findAll();
        $announcement = new AnnouncementModel();
        //$data['announcement_list'] = $announcement->findall();
        $data['announcement_list'] = $announcement->where('id', $id)->first();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'PNumber' => ['label' => 'PNumber', 'rules' => 'required'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'Location' => ['label' => 'Location', 'rules' => 'required'],
                'PMethod' => ['label' => 'PMethod', 'rules' => 'required'],
                'DCharges' => ['label' => 'DCharges', 'rules' => 'validinvitation[PNumber,DCharges]|validateinvitation[PMethod,DCharges]|validateDocumentCharges[PMethod,DCharges]'],
                'BSecurity' => ['label' => 'BSecurity', 'rules' => 'validateBSecurity[PMethod,BSecurity]|validateBidSecurity[PMethod,BSecurity]'],
            ];
            $errors = [
                'DCharges' => [
                    'validinvitation' => 'Tender Already Invite..!',
                    'validateinvitation' => 'Document Charges is required when Procurement Method is NCB',
                    'validateDocumentCharges' => 'Document Charges not required when Procurement Method is National Shopping'],
                'BSecurity' => [
                    'validateBSecurity' => 'Bid Security is required when Procurement Method is NCB',
                    'validateBidSecurity'  => 'Bid Security not required when Procurement Method is National Shopping'
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $invitation = new InvitationModel();
                $invitation->save([
                    'TId' => $this->request->getPost('PNumber'),
                    'Description' => $this->request->getPost('Description'),
                    'Location' => $this->request->getPost('Location'),
                    'PMethod' => $this->request->getPost('PMethod'),
                    'DCharges' => $this->request->getPost('DCharges'),
                    'BSecurity' => $this->request->getPost('BSecurity'),
                    'IFBId' => $this->request->getPost('IFBId'),
                ]);
                $id = $announcement->getInsertID();

                $data['TId'] = $this->request->getPost('PNumber'); //Does not clear TId when click on submit button
                $data['msg'] = "Create IFB Succsessfully";
            }
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/invitation/add", $data);
        echo view("sys/footer");
    }

    public function view($AId = null) {
        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['Tender_list'] = $t->findAll();
        $invitation = new InvitationModel();
        $announcement = new AnnouncementModel();

        $data['lista'] = $announcement->getAnnounceDetails($AId);
        $data['list'] = $invitation->viewinvitationDetails($AId);
        // $data['list'] = $invitation->findAll();
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('TId') && $this->request->getPost('BSecurity')) {
                // Both Designation and NIC provided, search with both conditions
                $data['list'] = $invitation
                        ->where('TId', $this->request->getPost('TId'))
                        ->where('BSecurity', $this->request->getPost('BSecurity'))
                        ->findAll();
            } elseif ($this->request->getPost('TId')) {
                // Only Designation provided, search by Designation
                $data['list'] = $invitation
                        ->where('TId', $this->request->getPost('TId'))
                        ->findAll();
            } elseif ($this->request->getPost('BSecurity')) {
                // Only NIC provided, search by NIC
                $data['list'] = $invitation
                        ->where('BSecurity', $this->request->getPost('BSecurity'))
                        ->findAll();
            } else {
                $data['list'] = $invitation->findAll();
                //$data['lista'] =$announcement ->findAll();
            }
        }


        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/invitation/view', $data);
        echo view("sys/footer");
    }

    public function viewold($IFBId = null) {
        helper('form');
        $invitation = new InvitationModel();
        $t = new TenderModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $invitation->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $invitation->where('IFBId', $IFBId)->findAll();
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/invitation/view', $data);
        echo view("sys/footer");
    }

    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/invitation/edit");
        echo view("sys/footer");
    }

    public function getDescription() {
        $tender = new TenderModel();
        $Description = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        echo $Description['Description'];
    }

    public function gettotalcost() {
        $tender = new TenderModel();
        $Tenderid = $this->request->getPost('Tenderid');
        $listcost = $tender->getTendercost($Tenderid);
        //echo $tender -> getLastQuery()->getQuery();
        echo $listcost[0]['TCost'];
    }

    public function getLocation() {
        $tender = new TenderModel();
        $Location = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        //echo $TItem -> getLastQuery()->getQuery();
        echo $Location['Location'];
    }

    public function getPMethod() {
        $tender = new TenderModel();
        $PMethod = $tender->where('Tenderid', $this->request->getpost('Tenderid'))->first();
        //echo $TItem -> getLastQuery()->getQuery();
        echo $PMethod['PType'];
    }

    //ask from sir 

    public function updateInvitationDetails() {

        $invitation = new InvitationModel();
        $result = $invitation->UpdateInvitationDetails();
        //$data['list'] = $invitation->findAll();
        $data['list'] = $result;
        $newdata = [
            "DCharges_Status" => $this->request->getPost('action')
        ];
        $invitation->where(['id' => $this->request->getPost('id')])->set($newdata)->update();
        $data['list'] = $invitation->findAll();

        //return $this->response->setJSON($result);
        echo view('sys/header');
        echo view('sys/menu');
        echo view('sys/invitation/updateInvitationDetails', $data);
        echo view('sys/footer');
    }

    public function shoppingadd($id = null, $Tenderid = null) {

        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['sannounceId'] = $id;
        $data['TId'] = $Tenderid;
        $data['Tender_list'] = $t->findAll();
        $sannouncement = new SAnnouncementModel();
        //$data['announcement_list'] = $announcement->findall();
        $data['announcement_list'] = $sannouncement->where('ids', $id)->first();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'PNumber' => ['label' => 'PNumber', 'rules' => 'required'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'Location' => ['label' => 'Location', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $NSPData = new ShopingModel();
                $NSPData->save([
                    'TId' => $this->request->getPost('PNumber'),
                    'Description' => $this->request->getPost('Description'),
                    'Location' => $this->request->getPost('Location'),
                    'sannounceId' => $this->request->getPost('sannounceId'),
                ]);

                // Send verification email
                $email = \Config\Services::email();
                //check to get mail
                //$email->setTo($this->request->getPost('Email'));
                $email->setTo('sandamalipathirana0@gmail.com');
                $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('New Procurement Invitation');
                $message = '<h1>New Procurement Invitation</h1>';
                $message .= '<a href="http://localhost/IPMS/web/viewtender">Click here to view new procurement announcement</a>';
                $email->setMessage($message);
                $email->send();
                $data['msg'] = "We are kindly inform ";

                $id = $sannouncement->getInsertID();

                $data['TId'] = $this->request->getPost('PNumber'); //Does not clear TId when click on submit button
                $data['msg'] = "Create IFB Succsessfully";
            }
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/invitation/shoppingadd", $data);
        echo view("sys/footer");
    }

    public function sview($AId = null) {
        helper('form');
        $data = array();
        $t = new TenderModel();
        $data['Tender_list'] = $t->findAll();
        $Shoppingdata = new ShopingModel();
        $sannouncement = new SAnnouncementModel();
        $data['lista'] = $sannouncement->getSAnnounceDetails($AId);
        $data['list'] = $Shoppingdata->viewSinvitationDetails($AId);
        // $data['list'] = $invitation->findAll();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $Shoppingdata->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $Shoppingdata->findAll();
        }



        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/invitation/sview', $data);
        echo view("sys/footer");
    }
}
