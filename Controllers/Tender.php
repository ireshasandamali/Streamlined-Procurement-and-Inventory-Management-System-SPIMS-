<?php

namespace App\Controllers;

use App\Models\TenderModel;
use App\Models\TenderItemModel;
use App\Models\SpecModel;
use App\Models\TenderRequestModel;
use App\Models\CostEstimateMasterModel;
use App\Models\EstimateOtherModel;
use App\Models\PrizeSchuleModel;
use App\Models\AnnouncementModel;
use App\Models\VoteModel;
use App\Models\RequestModel;
use App\Models\RequestItemModel;
use App\Models\AssignCommitteeModel;
use App\Models\CampModel;

class Tender extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function create($Tenderid = null) {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $data['tender_list'] = $tender->findall();
        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();
        // var_dump( $data['vote_list']);
        //echo $vote->getLastQuery()->getQuery();
        //$data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();
        $req = new RequestModel();
        $reqdate = new TenderRequestModel();
        $data['listdate'] = $reqdate->getcreatedate($Tenderid);
        $data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        $action = $this->request->getPost('action');

        if ($this->request->getMethod() == 'post' && $action == 'createTender') {

            $xdata = [
                'requestId' => $this->request->getPost('requestId'),
            ];
            // print_r($data);
            session()->set($xdata);
            // $data['RequestId'] = implode(",", $this->request->getPost('requestId'));
        }
        if ($this->request->getMethod() == 'post' && $action == 'next') {

            $rules = [
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'PType' => ['label' => 'PType', 'rules' => 'required'],
                'ICategory' => ['label' => 'ICategory', 'rules' => 'required'],
                'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],
                'Location' => ['label' => 'Location', 'rules' => 'required'],
                'BStartDate' => ['label' => 'BStartDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $tender = new TenderModel();

                $tender->save([
                    'Description' => $this->request->getPost('Description'),
                    'PType' => $this->request->getPost('PType'),
                    'ICategory' => $this->request->getPost('ICategory'),
                    'PStatus' => $this->request->getPost('PStatus'),
                    'Location' => $this->request->getPost('Location'),
                    'BStartDate' => $this->request->getPost('BStartDate'),
                ]);

                $TenderId = $tender->getInsertID(); //get last insert ID
                $requstId = explode(",", $this->request->getPost('RequestId'));

                $request = new TenderRequestModel();
                foreach (session('requestId') as $RId) {
                    $request->save([
                        'TenderId' => $TenderId,
                        'RequestId' => $RId
                    ]);
                }
            }
            return $this->addItem($TenderId);
            $data['msg'] = "Tender Successfully Created";
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/tender/create", $data);
        echo view("sys/footer");
    }

    public function view() {
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
        echo view('sys/tender/view', $data);
        echo view("sys/footer");
    }

    /* function for add Item for each tender did not create separate controller */

    public function addItemold($Tenderid = null, $RequestID = null) {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $itemrequest = new RequestModel();
        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();

        //$data['tender_Status'] = $itemrequest->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        //$RequestID = explode(",", $this->request->getPost('RequestId'));
        $data['Item_List'] = $itemrequest->getrequestItemDetails();
        // echo $reqItem -> getLastQuery()->getQuery();
        // $data['tender_list'] = $tender->findall();does not need all the data
        $data['TId'] = $Tenderid;
        $data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Item' => ['label' => 'Item', 'rules' => 'required'],
                'Qty' => ['label' => 'Qty', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $TItem = new TenderItemModel();

                $TItem->save([
                    'TId' => $this->request->getPost('TId'),
                    'TName' => $this->request->getPost('TName'),
                    'Item' => $this->request->getPost('Item'),
                    'ItemName' => $this->request->getPost('ItemName'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Unit' => $this->request->getPost('Unit'),
                    'Sample' => $this->request->getPost('Sample')
                ]);

                $email = \Config\Services::email();
                //check to get mail
                $email->setTo('stfdirectorlogistic@gmail.com');
                $email->setFrom((session()->get('email')), 'SPIMS');
                $email->setSubject('Requesting prurchasing New Item ');
                $message = '<h1>Requesting New Item that not in procurement Item Category List</h1>';
                $message .= '<a href="http://localhost/IPMS/sys/">Click here to verify view new Item Request</a>';
                $email->setMessage($message);
                $email->send();
                $data['msg'] = "Your item request submitted to the STF Procurement Division for verification and approval. Once your payment is approved, we will notify you with an email.";
            }
        }
        $data['TId'] = $this->request->getPost('TId'); //Does not clear TId when click on submit button
        $data['msg'] = "Tender Successfully Created";

        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post' && $this->request->getPost('action') == 'addItem') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }


        $requestIds = session('requestId');
        foreach ($requestIds as $requestId) {

            $newdata = [
                "createTenderStatus" => '3',
            ];
            $itemrequest->where(['RequestID' => $requestId])->set($newdata)->update();
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/tender/addItem", $data);
        echo view("sys/footer");
    }

    public function addItem($Tenderid = null, $RequestID = null) {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $reqItem = new RequestItemModel();
        $itemrequest = new RequestModel();
        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();
        //$data['tender_Status'] = $itemrequest->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        //$RequestID = explode(",", $this->request->getPost('RequestId'));
        $data['Item_List'] = $itemrequest->getrequestItemDetails();
        // echo $reqItem -> getLastQuery()->getQuery();
        // $data['tender_list'] = $tender->findall();does not need all the data
        $data['TId'] = $Tenderid;
        $data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Item' => ['label' => 'Item', 'rules' => 'required'],
                'Qty' => ['label' => 'Qty', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $TItem = new TenderItemModel();

                $TItem->save([
                    'TId' => $this->request->getPost('TId'),
                    'TName' => $this->request->getPost('TName'),
                    'Item' => $this->request->getPost('Item'),
                    'ItemName' => $this->request->getPost('ItemName'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Sample' => $this->request->getPost('Sample')
                ]);
                $data['TId'] = $this->request->getPost('TId'); //Does not clear TId when click on submit button
                $data['msg'] = "Tender Successfully Created";
            }
        }
        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post' && $this->request->getPost('action') == 'addItem') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }

        $itemrequest = new RequestModel();
        $requestIds = session('requestId');
        foreach ($requestIds as $requestId) {

            $newdata = [
                "createTenderStatus" => '3',
            ];
            $itemrequest->where(['RequestID' => $requestId])->set($newdata)->update();
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/tender/addItem", $data);
        echo view("sys/footer");
    }

    public function viewaddItem($TId) {
        helper('form');
        $TItem = new TenderItemModel();
        $req = new RequestModel();
        $data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $TItem->where('TId', $TId)->findAll();
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewaddItem', $data);
        echo view("sys/footer");
    }

    public function createSpec($Tenderid = null, $TId = null) {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['TId'] = $Tenderid;
        $data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'SubComponent' => ['label' => 'SubComponent', 'rules' => 'required'],
                'Detail' => ['label' => 'Detail', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $specification = new SpecModel();
                $specification->save([
                    'specid' => $this->request->getPost('specid'),
                    'Description' => $this->request->getPost('Description'),
                    'Item' => $this->request->getPost('Item'),
                    'ItemName' => $this->request->getPost('ItemName'),
                    'SubComponent' => $this->request->getPost('SubComponent'),
                    'Detail' => $this->request->getPost('Detail'),
                    'Priority' => $this->request->getPost('Priority'),
                    'TId' => $this->request->getPost('TId'),
                    'IId' => $this->request->getPost('IId')
                ]);
                
                // Send verification email
                    $email = \Config\Services::email();
                    //check to get mail
                    //$email->setTo($this->request->getPost('Email'));
                    $email->setTo('stfprocurementbranch@gmail.com');
                    $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                    $email->setSubject('Tender Document for DTEC evaluation');
                    $message = '<h1>New Tender Document for DTEC evaluation </h1>';
                    $message .= '<a href="http://localhost/IPMS/sys/' . '">login to the SPIM System</a>';
                    $email->setMessage($message);
                    $email->send();

                $TenderId = $tender->getInsertID();
                $data['TId'] = $this->request->getPost('TId'); //Does not clear TId when click on submit button

                $data['msg'] = "Specification Successfully Created";
            }
        }
        $specification = new SpecModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $specification->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
            $data['TItem_details'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll(); //to remain item list when click submit, post eken enna dila
        } else {
            $data['list'] = $specification->where('TId', $data['TId'])->findAll();
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/tender/createSpec", $data);
        echo view("sys/footer");
    }

    public function viewspec($TId) {
        helper('form');
        $specification = new SpecModel();
        $TItem = new TenderItemModel();
        $data['list'] = $specification->joinspecdetailswithTItemView($TId);

        //old
        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $specification->where('TId', $this->request->getPost('TId'))->findAll();
          } else {
          $data['list'] = $specification->where('TId', $TId)->findAll();
          } */
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewspec', $data);
        echo view("sys/footer");
    }

    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/tender/edit");
        echo view("sys/footer");
    }

    public function removeItem($ItemId, $TenderId) {

        $TItem = new TenderItemModel();
        $TItem->where('TItemid', $ItemId);
        $TItem->delete();

        $this->addItem($TenderId);
    }

    public function viewtender($Tenderid = null) {

        helper('form');
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();

        $data['listr'] = $Tender->getTenderDetails($Tenderid);
       
        //echo $TItem->getLastQuery()->getQuery();
        //echo $Tender->getLastQuery()->getQuery();
        $data['listi'] = $TItem->gettenderitemDetails($Tenderid);
        
        //change after viva
        $data['list'] = $Tender->getviewtender($Tenderid);
       //  $data['list'] = $Tender->gettenderdetailsviewtender($Tenderid);
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewtender', $data);
        echo view('sys/footer');
    }

    public function viewmore($Tenderid = null) {

        helper('form');
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['listr'] = $Tender->getTenderDetails($Tenderid);
        $data['list'] = $Tender->joinTenderDetailswithannouncement($Tenderid);
        $data['listi'] = $TItem->gettenderitemDetails($Tenderid);

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewmore', $data);
        echo view('sys/footer');
    }

    public function viewreqItem($Tenderid = null, $RequestID = null) {

        /* helper('form');
          $Tender = new TenderModel();
          $TItem = new TenderItemModel();
          $data['listr'] = $Tender->getTenderDetails($Tenderid);
          $data['list'] = $Tender->joinTenderDetailswithannouncement($Tenderid);
          $data['listi'] = $TItem->gettenderitemDetails($Tenderid); */

        helper('form');
        $Request = new RequestModel();
        // $item = new RequestItemModel();
        $data['list'] = $Request->getrequesttenderDetails($Tenderid);
        $data['listr'] = $Request->getrequestDetailsviewtender($Tenderid);
        // $data['listi'] =$item->getrequestitemDetails($Tenderid);


        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewreqItem', $data);
        echo view('sys/footer');
    }

    public function viewmorechangefordoc($Tenderid = null) {

        helper('form');
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        //$announcement = new AnnouncementModel();
        //$invitation = new InvitationModel();
        $data['list'] = $Tender->joinTenderDetailswithannouncement($Tenderid);
        echo $TItem->getLastQuery()->getQuery();
        // $data['list'] = $Tender->getTenderDetails($Tenderid);
        $data['listi'] = $TItem->gettenderitemDetails($Tenderid);
        //$data['lista'] = $announcement->getAnnounceDetails($AId);
        //$data['listP'] = $invitation->getinvitationDetails($AId);
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewmorechangefordoc', $data);
        echo view('sys/footer');
    }

    public function createcostestimate($Tenderid = null, $Estimate_ID = null, $TId = null) {

        helper('form');
        $data = array();
        $tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['TId'] = $Tenderid;
        $data['EID'] = $Estimate_ID;
        $data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();
        //echo $tender -> getLastQuery()->getQuery();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Item' => ['label' => 'Item', 'rules' => 'required'],
                'UCost' => ['label' => 'UCost', 'rules' => 'required|validatecostestimate[Item,UCost]'],
                
                    //'TCost' => ['label' => 'TCost', 'rules' => 'required'],
            ];
            $errors = [
                'UCost' => [
                    'validatecostestimate' => 'Cost Already added..!',
                    ]                   
            ];
            if (!$this->validate($rules,$errors)) {
                $data['validation'] = $this->validator;
            } else {
                $Mestimate = new CostEstimateMasterModel();

                $Mestimate->save([
                    'TId' => $this->request->getPost('TId'),
                    'Item' => $this->request->getPost('Item'),
                    'ItemName' => $this->request->getPost('ItemName'),
                    'UCost' => $this->request->getPost('UCost'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Total_Cost' => $this->request->getPost('UCost') * $this->request->getPost('Qty'),
                    //'TOCost' => $this->request->getPost('$amounts[$key]') + $this->request->getPost('$amounts[$key]'),
                    'vat' => $this->request->getPost('vat'),
                    //'vatAmmount' => $this->request->getPost('UCost') * $this->request->getPost('Qty') * $this->request->getPost('vat') / 100,
                    'vatAmmount' => floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) * floatval($this->request->getPost('vat')) / 100,
                    'ETotalC' => floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) * floatval($this->request->getPost('vat')) / 100),
                        //'ETotalC' => $this->request->getPost('UCost') * $this->request->getPost('Qty') + $this->request->getPost('UCost') * $this->request->getPost('Qty') * $this->request->getPost('vat') / 100,
                ]);
                $Estimate_ID = $Mestimate->getInsertID();
                $TenderId = $tender->getInsertID();
                $Otherestimate = new EstimateOtherModel();

                // Get arrays for 'Description' and 'Amount'
                $descriptions = $this->request->getPost('Description');
                $amounts = $this->request->getPost('Amount');
                $totalOther = 0;
                // Ensure that arrays are set and have the same length
                if (!empty($descriptions) && !empty($amounts) && count($descriptions) == count($amounts)) {
                    // Iterate through arrays to save each set
                    foreach ($descriptions as $key => $description) {
                        if (!empty($description)) {
                            $amount = $amounts[$key];

                            $totalOther += $amount;

                            $Otherestimate->save([
                                'EID' => $Estimate_ID,
                                'TId' => $this->request->getPost('TId'),
                                'Description' => $description,
                                'Amount' => $amount,
                                'TotalOthers' => $totalOther,
                            ]);
                        }
                    }

                    $data['EID'] = $this->request->getPost('EID');
                    $data['msg'] = "Cost Estimate Successfully Created";

                    $TenderId = $tender->getInsertID();
                    $data['TId'] = $this->request->getPost('TId'); //Does not clear TId when click on submit button
                }
            }
        }

        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
            $data['TItem_details'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll(); //to remain item list when click submit, post eken enna dila
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }

        // create table
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        if ($this->request->getMethod() == 'post') {
            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($this->request->getPost('TId'));
            // echo $tender -> getLastQuery()->getQuery();
            $data['listO'] = $Otherestimate->where('TId', $this->request->getPost('TId'))->findAll();
        } else {

            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($Tenderid);
            // var_dump( $data['listM']);
            // echo $Mestimate -> getLastQuery()->getQuery();
            $data['listO'] = $Otherestimate->where('TId', $Tenderid)->findAll();
        }

        //$TenderId = $tender->getInsertID();
        // $TItemid = $TItem->getInsertID();
        // $data['TId'] = $this->request->getPost('TId'); -->//Does not clear TId when click on submit button

          $data['list'] = $tender->getviewtendercostestimate($Tenderid);
        //echo $tender -> getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/createcostestimate', $data);
        echo view('sys/footer');
    }

    public function viewcreatecostestimate($Tenderid = null) {
        helper('form');
        $data = array();
        $data['TId'] = $Tenderid;
        $TItem = new TenderItemModel();
        $tender = new TenderModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }

        // create table

        if ($this->request->getMethod() == 'post') {
            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($this->request->getPost('TId'));

            $data['listO'] = $Otherestimate->where('TId', $this->request->getPost('TId'))->findAll();
        } else {

            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($Tenderid);
            $data['listO'] = $Otherestimate->where('TId', $Tenderid)->findAll();
        }
        echo $Mestimate->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewcreatecostestimate', $data);
        echo view("sys/footer");
    }

    public function editcreatecostestimate($Tenderid = null) {
        helper('form');
        $data = array();
        $data['TId'] = $Tenderid;
        $TItem = new TenderItemModel();
        $tender = new TenderModel();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }

        // create table

        if ($this->request->getMethod() == 'post') {
            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($this->request->getPost('TId'));

            $data['listO'] = $Otherestimate->where('TId', $this->request->getPost('TId'))->findAll();
        } else {

            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($Tenderid);
            $data['listO'] = $Otherestimate->where('TId', $Tenderid)->findAll();
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/editcreatecostestimate', $data);
        echo view("sys/footer");
    }

    public function updatecostestimate($Tenderid = null, $Estimate_ID = null) {

        helper('form');
        $data = array();
        $tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['TId'] = $Tenderid;
        $data['EID'] = $Estimate_ID;
        $data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'UCost' => ['label' => 'UCost', 'rules' => 'required'],
                    //'TCost' => ['label' => 'TCost', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $Mestimate = new CostEstimateMasterModel();

                $Mestimate->save([
                    'TId' => $this->request->getPost('TId'),
                    'IId' => $this->request->getPost('Item'),
                    'IId' => $this->request->getPost('Item'),
                    'ItemName' => $this->request->getPost('ItemName'),
                    'UCost' => $this->request->getPost('UCost'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Total_Cost' => $this->request->getPost('UCost') * $this->request->getPost('Qty'),
                    //'TOCost' => $this->request->getPost('$amounts[$key]') + $this->request->getPost('$amounts[$key]'),
                    'vat' => $this->request->getPost('vat'),
                    //'vatAmmount' => $this->request->getPost('UCost') * $this->request->getPost('Qty') * $this->request->getPost('vat') / 100,
                    'vatAmmount' => floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) * floatval($this->request->getPost('vat')) / 100,
                    'ETotalC' => floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) * floatval($this->request->getPost('vat')) / 100),
                        //'ETotalC' => $this->request->getPost('UCost') * $this->request->getPost('Qty') + $this->request->getPost('UCost') * $this->request->getPost('Qty') * $this->request->getPost('vat') / 100,
                ]);
                $Estimate_ID = $Mestimate->getInsertID();
                $TenderId = $tender->getInsertID();
                $Otherestimate = new EstimateOtherModel();

                // Get arrays for 'Description' and 'Amount'
                $descriptions = $this->request->getPost('Description');
                $amounts = $this->request->getPost('Amount');
                $totalOther = 0;
                // Ensure that arrays are set and have the same length
                if (!empty($descriptions) && !empty($amounts) && count($descriptions) == count($amounts)) {
                    // Iterate through arrays to save each set
                    foreach ($descriptions as $key => $description) {
                        if (!empty($description)) {
                            $amount = $amounts[$key];

                            $totalOther += $amount;

                            $Otherestimate->save([
                                'EID' => $Estimate_ID,
                                'TId' => $this->request->getPost('TId'),
                                'Description' => $description,
                                'Amount' => $amount,
                                'TotalOthers' => $totalOther,
                            ]);
                        }
                    }

                    $data['EID'] = $this->request->getPost('EID');
                    $data['msg'] = "Cost Estimate Successfully Created";
                }
            }
        }

        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }

        // create table
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        if ($this->request->getMethod() == 'post') {
            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($this->request->getPost('TId'));

            $data['listO'] = $Otherestimate->where('TId', $this->request->getPost('TId'))->findAll();
        } else {

            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($Tenderid);
            // var_dump( $data['listM']);
            // echo $Mestimate -> getLastQuery()->getQuery();
            $data['listO'] = $Otherestimate->where('TId', $Tenderid)->findAll();
        }



        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/editcreatecostestimate', $data);
        echo view('sys/footer');
    }

//for Cost Estimate Table
    public function getQuantity() {
        $TItem = new TenderItemModel();
        $Quantity = $TItem->where('Item', $this->request->getpost('ItemId'))->first();
        echo $Quantity['Qty'];
    }

    public function getEsitmateItemName() {
        $TItem = new TenderItemModel();
        $ItemName = $TItem->where('Item', $this->request->getpost('ItemId'))->first();
        echo $ItemName['ItemName'];
    }

    public function prizeSchedule($Tenderid = null) {

        helper('form');
        $data = array();
        $tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['TId'] = $Tenderid;
        $data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'UCost' => ['label' => 'UCost', 'rules' => 'required'],
                    //'TCost' => ['label' => 'TCost', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $pschudule = new PrizeSchuleModel();

                $pschudule->save([
                    'TId' => $this->request->getPost('TId'),
                    'IId' => $this->request->getPost('Item'),
                    //'Item' => $this->request->getPost('Item'),                    
                    'Qty' => $this->request->getPost('Qty'),
                    'Description_1' => $this->request->getPost('Description_1'),
                    'Description_2' => $this->request->getPost('Description_2'),
                    'Description_3' => $this->request->getPost('Description_3'),
                    'Warranty' => $this->request->getPost('Warranty'),
                    'Description_4' => $this->request->getPost('Description_4'),
                    'UCost' => $this->request->getPost('UCost'),
                    'Total_Cost' => $this->request->getPost('UCost') * $this->request->getPost('Qty'),
                    'vat' => $this->request->getPost('vat'),
                    'vatAmmount' => $this->request->getPost('UCost') * $this->request->getPost('Qty') * $this->request->getPost('vat') / 100,
                    'ETotalC' => $this->request->getPost('UCost') * $this->request->getPost('Qty') + $this->request->getPost('UCost') * $this->request->getPost('Qty') * $this->request->getPost('vat') / 100,
                ]);
                $TenderId = $tender->getInsertID();

                $data['TId'] = $this->request->getPost('TId'); //Does not clear TId when click on submit button
                $data['msg'] = "Prize Schedule Successfully Created";
            }
        }
        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }

        // create table
        $pschudule = new PrizeSchuleModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $pschudule->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $pschudule->where('TId', $data['TId'])->findAll();
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/prizeSchedule', $data);
        echo view('sys/footer');
    }

    // TO CHECK
    public function viewaddItemS($TId) {
        helper('form');
        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $TItem->where('TId', $TId)->findAll();
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewaddItemS', $data);
        echo view("sys/footer");
    }

    public function viewcestimate() {
        $tender = new TenderModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $tender->where('Tenderid', $Tenderid)->first();
        } else {
            $data['list'] = $tender->findAll();
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewcestimate', $data);
        echo view("sys/footer");
    }

    public function viewTspec($Tenderid = null) {
        helper('form');
        $specification = new SpecModel();
        $TItem = new TenderItemModel();
        $tender = new TenderModel();
        $data['list'] = $tender->getTenderDetailsre($Tenderid);       
        $data['lists'] = $specification->getspecDetails($Tenderid);
        echo $specification -> getLastQuery()->getQuery();
        $data['TId'] = $Tenderid;

        /* if ($this->request->getMethod() == 'post') {
          $data['lists'] = $specification->where('TId', $this->request->getPost('TId'))->findAll();
          $data['list'] = $tender->where('ICategory', $this->request->getPost('ICategory'))->findAll();
          } else {
          $data['lists'] = $specification->where('TId', $TId)->findAll();
          $data['list'] = $tender->findAll();
          } */
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewTspec', $data);
        echo view("sys/footer");
    }

    public function updatedtecststatus($Tenderid = null, $TId = null) {
        helper('form');
        $Committee = new AssignCommitteeModel();
        $tender = new TenderModel();

        // Update tender status
        $newdata = [
            "DTECStatus" => $this->request->getPost('action'),
            "specApprovedDate" => date("Y-m-d"),
        ];
        $tender->where(['Tenderid' => $this->request->getPost('PNumber')])->set($newdata)->update();

        // Update Remarks in specification table
        // Redirect to appropriate page
        return redirect()->to('Procurement/EvaluationCommittee/' . $this->request->getPost('TId'));
    }

    public function ViewTCEstimate($Tenderid = null) {
        helper('form');
        $data = array();
        $data['TId'] = $Tenderid;
        $TItem = new TenderItemModel();
        $tender = new TenderModel();
        $data['listtender'] = $tender->getTenderDetails($Tenderid);
        //echo $tender -> getLastQuery()->getQuery();
        $Mestimate = new CostEstimateMasterModel();
        $Otherestimate = new EstimateOtherModel();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
            //echo $TItem -> getLastQuery()->getQuery();
        }

        if ($this->request->getMethod() == 'post') {
            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($this->request->getPost('TId'));

            $data['listO'] = $Otherestimate->where('TId', $this->request->getPost('TId'))->findAll();
        } else {

            $data['listM'] = $Mestimate->getCostEstinateMasterDetails($Tenderid);
            //echo $Mestimate -> getLastQuery()->getQuery();
            $data['listO'] = $Otherestimate->where('TId', $Tenderid)->findAll();

            //echo $Otherestimate -> getLastQuery()->getQuery();
        }

        
         //change after viva
        $data['list'] = $tender->getviewtendercostestimate($Tenderid);
        //echo $tender -> getLastQuery()->getQuery();
       //  $data['list'] = $Tender->gettenderdetailsviewtender($Tenderid);
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/ViewTCEstimate', $data);
        echo view("sys/footer");
    }

    public function updatecestimateststatus() {
        helper('form');
        $Cestimate = new CostEstimateMasterModel();
        $TItem = new TenderItemModel();
        $tender = new TenderModel();
        $newdata = [
            "costStatus" => $this->request->getPost('action'),
            "estimateApprovedDate" => date("Y-m-d"),
        ];
        $tender->where(['Tenderid' => $this->request->getPost('TId')])->set($newdata)->update();
        $data['lists'] = $tender->findAll();
        return redirect()->to('Procurement/PCevaluation/' . $this->request->getPost('TId'));
    }

    public function updatespecststatus($Tenderid = null, $TId = null) {
        helper('form');
        $specification = new SpecModel();
        $tender = new TenderModel();

        // Update tender status
        $newdata = [
            "specStatus" => $this->request->getPost('action'),
            "specApprovedDate" => date("Y-m-d"),
        ];
        $tender->where(['Tenderid' => $this->request->getPost('TId')])->set($newdata)->update();

        // Update Remarks in specification table
        if ($this->request->getMethod() == 'post') {
            $Remarks = $this->request->getPost('Remarks');
            foreach ($Remarks as $specid => $value) {
                $specification->update($specid, [
                    'Remarks' => $value,
                ]);
            }
        }

        // Redirect to appropriate page
        return redirect()->to('DOCEvaluation/DTECevaluation/' . $this->request->getPost('TId'));
    }

    public function ViewprizeSchedule($Tenderid = null) {

        helper('form');
        $data = array();
        $tender = new TenderModel();
        $TItem = new TenderItemModel();
        $data['TId'] = $Tenderid;
        $data['Tender_details'] = $tender->where('Tenderid', $Tenderid)->first();
        $data['TItem_details'] = $TItem->where('TId', $Tenderid)->findAll();

        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
            $data['Tender_details'] = $tender->where('Tenderid', $this->request->getPost('TId'))->first();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'])->findAll();
        }

        // create table
        $pschudule = new PrizeSchuleModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $pschudule->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $pschudule->where('TId', $data['TId'])->findAll();
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/ViewprizeSchedule', $data);
        echo view('sys/footer');
    }

    public function TenderProgress() {

        helper('form');
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        $Mestimate = new CostEstimateMasterModel();
        $data['listcost'] = $Mestimate->findAll();
        $data['list'] = $Tender->getTenderprogressre();
     //echo $Tender -> getLastQuery()->getQuery();
        if ($this->request->getMethod() == 'post') {     
       $data['list'] = $Tender->getTenderprogressre($this->request->getPost('PType'),$this->request->getPost('ICategory'));                    
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/TenderProgress', $data);
        echo view('sys/footer');
    }
     public function TenderProgressrvtask() {

        helper('form');
        $Tender = new TenderModel();
        $TItem = new TenderItemModel();
        $Mestimate = new CostEstimateMasterModel();
        $data['listcost'] = $Mestimate->findAll();
        $data['list'] = $Tender->getTenderprogressre();
      echo $Tender -> getLastQuery()->getQuery();
        if ($this->request->getMethod() == 'post') {     
       $data['list'] = $Tender->getTenderprogressre($this->request->getPost('ryear'),$this->request->getPost('PType'),$this->request->getPost('ICategory'),$this->request->getPost('rmonth'));                    
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/TenderProgressrvtask', $data);
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
