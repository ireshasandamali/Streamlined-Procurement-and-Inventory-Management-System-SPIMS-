<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\SupplierModel;
use App\Models\NonRegisteredSupplierModel;
use App\Models\AnnouncementModel;
use App\Models\SAnnouncementModel;
use App\Models\ShopingModel;
use App\Models\TenderModel;
use App\Models\TenderItemModel;
use App\Models\VoteModel;
use App\Models\ProcurementPlanModel;
use App\Models\ProcurementItemModel;
use App\Models\RequestModel;
use App\Models\InvitationModel;
use App\Models\SpecModel;
use App\Models\SPriceScheduleModel;
use App\Models\SupplierCatergoryModel;
use App\Models\SSpecificationModel;
use App\Models\DocumentchargeModel;
use App\Models\SDocumentModel;
use App\Models\SgoodsDeliveryModel;
use App\Models\DchargepaidModel;
use App\Models\MassageModel;
use App\Models\ItemcategoryModel;
use App\Models\OpeningRemarksModel;

class Web extends BaseController {

    public function index() {
        helper('form');
        $data = array();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Name' => ['label' => 'Name', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $massage = new MassageModel();
                $massage->save([
                    'Name' => $this->request->getPost('Name'),
                    'Email' => $this->request->getPost('Email'),
                    'Subject' => $this->request->getPost('Subject'),
                    'Receiver' => $this->request->getPost('Receiver'),
                ]);

                $data['msg'] = "Massage Sucessfully Send";
            }
        }//end massage
        $announcement = new AnnouncementModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement->where('RefNumber', $this->request->getPost('RefNumber'))->findAll();
        } else {
            $data['list'] = $announcement->findAll();
        }


        // get non registered Suppliers data
        $nonregSuppliers = new NonRegisteredSupplierModel();
        $data['listB'] = $nonregSuppliers->findAll();
        $nonregSuppliers = count($data['listB']);
        $data['nonregSuppliers'] = $nonregSuppliers;
        
        // get registered Suppliers data
        $regSuppliers = new SupplierModel();
        $data['listZ'] = $regSuppliers->findAll();
        $regSuppliers = count($data['listZ']);
        $data['regSuppliers'] = $regSuppliers;
        // get request data
        $itemrequest = new RequestModel();
        $data['listR'] = $itemrequest->findAll();
        $itemrequest = count($data['listR']);
        $data['itemrequest'] = $itemrequest;

        // get item data
        $item = new ItemcategoryModel();
        $data['listItem'] = $item->findAll();
        $item = count($data['listItem']);
        $data['listItem'] = $item;

        //new ncbannoune
        $annonce = new AnnouncementModel();
        $data['announcement'] = $annonce->newannounce();
         echo $annonce->getLastQuery()->getQuery();
        $annonce = count($data['announcement']);
        $data['announcement'] = $annonce;

        $sannonce = new SAnnouncementModel();
        $data['sannouncement'] = $sannonce->newannounce();
               $sannonce = count($data['sannouncement']);
        $data['sannouncement'] = $sannonce;

        return view('web/index', $data);
    }

    public function login() {
        helper('form');
        echo view("web/login");
    }

    //validate supplier login only
    public function login_validate() {
        helper(['form']);
        $data = array();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => ['label' => 'Username', 'rules' => 'required'],
                'password' => ['label' => 'Password', 'rules' => 'required|validateUser[username,password]'],
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'You are entering the wrong username or Password'
                ]
            ];

            if ($this->validate($rules, $errors)) {
                //$data['validation'] = $this->validator;
                //} else {
                $model = new UserModel();
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');
                $user = $model->where('UserName', $this->request->getVar('username'))->first();
                //echo $user->getQuery();
                //echo $model -> getLastQuery()->getQuery();
                //print_r($user);
                //paste
                if ($user) {
                    if ($user['is_verified'] == 0) {
                        // User is not verified
                        $data['error'] = 'Your account is not verified. Please check your email for the verification link.';
                    } else if (password_verify($password, $user['Password'])) {
                        // Valid user and password
                        // Perform login actions here (e.g., setting session data)
                        // Assuming you set user data in session after successful login
                        $this->setUserSession($user);
                        //show dashboard when succes login

                        return redirect()->to('web/dashboard'); // Redirect to dashboard or relevant page
                    } else {
                        // Invalid password
                        $data['error'] = 'Invalid login credentials. Please try again.';
                    }
                } else {
                    // User not found
                    $data['error'] = 'User does not exist.';
                }
                //paste
                //$this->setUserSession($user);
                //show dashboard when succes login
                //return redirect()->to('web/dashboard');
            }
        }

        //show supplier login form when error comes
        return view('web/login');
    }

    //create session to store login details
    private function setUserSession($user) {
        $data = [
            'UserId' => $user['UserId'],
            'UserName' => $user['UserName'],
            'UserType' => $user['UserType'],
            'ProfileImage' => $user['profile_image'],
            'isLoggedIn' => true,
        ];
        // print_r($data);
        session()->set($data);
        return true;
    }

//creat logout to when suplier logut the dashboard
    public function logout() {
        /* if (session()->get('isLoggedIn')===true){
          echo 'yes';
          } */
        session()->destroy();
        return redirect()->to('web');
    }

    public function dashboard() {
        helper('form');
        $data = array();
        // get registered Suppliers data
        $nonregSuppliers = new NonRegisteredSupplierModel();
        $data['listB'] = $nonregSuppliers->findAll();
        $nonregSuppliers = count($data['listB']);
        $data['nonregSuppliers'] = $nonregSuppliers;
        
        // get registered Suppliers data
        $regSuppliers = new SupplierModel();
        $data['listZ'] = $regSuppliers->findAll();
        $regSuppliers = count($data['listZ']);
        $data['regSuppliers'] = $regSuppliers;

        // get request data
        $itemrequest = new RequestModel();
        $data['listR'] = $itemrequest->findAll();
        $itemrequest = count($data['listR']);
        $data['itemrequest'] = $itemrequest;

        // get item data
        $item = new ItemcategoryModel();
        $data['listItem'] = $item->findAll();
        $item = count($data['listItem']);
        $data['listItem'] = $item;

        //new ncbannoune
        $annonce = new AnnouncementModel();
        $data['announcement'] = $annonce->newannounce();
        $annonce = count($data['announcement']);
        $data['announcement'] = $annonce;

        $sannonce = new SAnnouncementModel();
        $data['sannouncement'] = $sannonce->newannounce();
        $sannonce = count($data['sannouncement']);
        $data['sannouncement'] = $sannonce;
        if (session()->get('isLoggedIn') === true) {
            echo view('web/dashboard', $data);
            //return view('web/dashboard', $data);
        }
        //return view('web/dashboard', $data);
    }

    //show supplier dashboard
    public function dashboardche() {
        helper('form');
        $data = array();
        // get registered Suppliers data
        $nonregSuppliers = new NonRegisteredSupplierModel();
        $data['listB'] = $nonregSuppliers->findAll();
        $nonregSuppliers = count($data['listB']);
        $data['nonregSuppliers'] = $nonregSuppliers;

        // get request data
        $itemrequest = new RequestModel();
        $data['listR'] = $itemrequest->findAll();
        $itemrequest = count($data['listR']);
        $data['itemrequest'] = $itemrequest;

        // get item data
        $item = new ItemcategoryModel();
        $data['listItem'] = $item->findAll();
        $item = count($data['listItem']);
        $data['listItem'] = $item;

        //new ncbannoune
        $annonce = new AnnouncementModel();
        $data['announcement'] = $annonce->newannounce();
        $annonce = count($data['announcement']);
        $data['announcement'] = $annonce;

        $sannonce = new SAnnouncementModel();
        $data['sannouncement'] = $sannonce->newannounce();
        $sannonce = count($data['sannouncement']);
        $data['sannouncement'] = $sannonce;

        if (session()->get('isLoggedIn') === true) {
            echo view('web/dashboard', $data);
            //return view('web/dashboard', $data);
        }
    }

    public function newBid() {
        $user = new UserModel();
        $data['$user_list'] = $user->findAll();
        $announcement = new AnnouncementModel();
        $sannouncement = new SAnnouncementModel();

        $data['list'] = $announcement->NewBidDetails();
        //echo $announcement->getLastQuery()->getQuery();
        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $announcement->where('BStart', $this->request->getPost('BStart'))->findAll();
          $data['lists'] = $sannouncement->where('BStarts', $this->request->getPost('BStarts'))->findAll();
          } else {
          $data['list'] = $announcement->findAll();
          $data['lists'] = $sannouncement->findAll();
          } */

        return view('web/newBid', $data);
    }

    //correct one
    public function viewdetailedBids($AId = null, $UserId = null) {
        date_default_timezone_set("Asia/Colombo");

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $doccharges = new DocumentchargeModel();
        //$data['listD'] = $doccharges->getDocumentchargeDetails($IFBId,$TId,$UserId);
        $data['list'] = $announcement->getAnnounceDetails($AId);
        //  $data['listP'] = $invitation->getinvitationDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailswebdisable($AId, $UserId);

        //$data['listR'] = $invitation->getinvitationDetailswebdisable($AId,$TId,$UserId);
        // $data['listP'] = $invitation->joininvitationDOCChargesbyTId($AId,$TId);

        return view('web/viewdetailedBid', $data);
    }

    public function viewdetailedBid($AId = null, $IFBId = null, $TId = null, $UserId = null) {
        date_default_timezone_set("Asia/Colombo");

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $doccharges = new DocumentchargeModel();
        $data['listD'] = $doccharges->getDocumentchargeDetails($IFBId, $TId, $UserId);
        $data['list'] = $announcement->getAnnounceDetails($AId);
        //  $data['listP'] = $invitation->getinvitationDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailswebdisable($AId, $UserId);
        //$data['listR'] = $invitation->getinvitationDetailswebdisable($AId,$TId,$UserId);
        // echo $invitation -> getLastQuery()->getQuery();
        // $data['listP'] = $invitation->joininvitationDOCChargesbyTId($AId,$TId);

        return view('web/viewdetailedBid', $data);
    }

    public function viewBid($IFBId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $TItem = new TenderItemModel();
        $specification = new SpecModel();
        $data['list'] = $announcement->getAnnounceDetails($IFBId);
        $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        // echo $invitation -> getLastQuery()->getQuery();
        $data['lists'] = $specification->getspecDetailsbyTId($TId);
        //echo $specification -> getLastQuery()->getQuery();
        $data['listi'] = $TItem->getBidtenderItemDetails($TId);
        return view('web/viewBid', $data);
    }

    public function payDocumentCharges($IFBId = null, $TId = null) {
        if (session()->get('isLoggedIn') === true) {
            helper('form');
            $data = array();
            $announcement = new AnnouncementModel();
            $invitation = new InvitationModel();
            $TItem = new TenderItemModel();
            $specification = new SpecModel();
            $data['list'] = $announcement->getAnnounceDetails($IFBId);
            $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
            $data['lists'] = $specification->getspecDetailsbyTId($TId);
            //echo $specification -> getLastQuery()->getQuery();
            $data['listi'] = $TItem->getBidtenderItemDetails($TId);

            return view('web/payDocumentCharges', $data);
        } else {
            return redirect()->to('web/login');
        }
    }

    public function DOCCharges($IFBId = null, $TId = null) {
        if (session()->get('isLoggedIn') === true) {
            helper(['form']);
            $data = array();
            date_default_timezone_set("Asia/Colombo");
            $announcement = new AnnouncementModel();
            $invitation = new InvitationModel();
            $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);

            if ($this->request->getMethod() == 'post') {
                $vendor = new NonRegisteredSupplierModel();
                $vendoremail = $vendor->where('UserId', session()->get('UserId'))->first();
                $Vemail = $vendoremail['Email'];

                $rules = [
                    'TenderNo' => ['label' => 'TenderNo', 'rules' => 'required'],
                    'Description' => ['label' => 'Description', 'rules' => 'required'],
                    'DCharges' => ['label' => 'DCharges', 'rules' => 'required'],
                    'CompanyName' => ['label' => 'CompanyName', 'rules' => 'required'],
                    'payment_receipt' => [
                        'label' => 'Image File',
                        'rules' => 'uploaded[payment_receipt]'
                        . '|is_image[payment_receipt]'
                        . '|mime_in[payment_receipt,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                        . '|max_size[payment_receipt,100]'
                        . '|max_dims[payment_receipt,1024,768]',
                    ],
                ];
                if (!$this->validate($rules)) {
                    $data['validation'] = $this->validator;
                    return view('web/DOCCharges', $data);
                } else {
                    $payment_receipt = $this->request->getFile('payment_receipt');
                    $newName = $payment_receipt->getRandomName();
                    $payment_receipt->move('public/images/' . 'uploads', $newName);
                    $doccharges = new DocumentchargeModel();
                    $verificationCode = bin2hex(random_bytes(16));
                    $doccharges->save([
                        'payment_receipt' => $newName,
                        'CompanyName' => $this->request->getPost('CompanyName'),
                        'date' => date("Y-m-d"),
                        'payment_receipt' => $newName,
                        'TenderId' => $this->request->getPost('TenderId'),
                        'IFBId' => $this->request->getPost('IFBId'),
                        'Description' => $this->request->getPost('Description'),
                        'DCharges' => $this->request->getPost('DCharges'),
                        'UserId' => session()->get('UserId'),
                        'is_verified' => 0,
                        'verification_code' => $verificationCode
                    ]);
                    $id = $doccharges->getInsertID(); //get last insert ID
                    $dchargespaid = new DchargepaidModel();
                    $dchargespaid->save([
                        'date' => date("Y-m-d"),
                        'TenderId' => $this->request->getPost('TenderId'),
                        'IFBId' => $this->request->getPost('IFBId'),
                        'UserId' => session()->get('UserId'),
                        'PaidDocId' => $id,
                    ]);
                    // Send verification email
                    $email = \Config\Services::email();
                    //check to get mail
                    //$email->setTo($this->request->getPost('Email'));
                    $email->setTo('sandamalipathirana0@gmail.com');
                    $email->setTo($Vemail);
                    $email->setFrom($Vemail, 'SPIMS');
                    $email->setSubject('Document Charges Verification');
                    $message = '<h1>Document Charges Verification</h1>';
                    $message .= '<a href="http://localhost/IPMS/web/verifyDOCCharges/' . $verificationCode . '">Click here to verify payment of Document Charges</a>';
                    $email->setMessage($message);
                    $email->send();
                    $data['msg'] = "Your payment details will be submitted to the STF Procurement Division for verification and approval. Once your payment is approved, we will notify you with an email.";
                }
            }

            return view('web/DOCCharges', $data);
        } else {
            return redirect()->to('web/login');
        }
    }

    // verifyDOCCharges
    public function verifyDOCCharges($verificationCode = null) {
        if (!$verificationCode) {
            // Handle the case where no verification code is provided
            // For example, show an error message or redirect to a specific page
            echo "Verification code is missing.";
            return;
        }

        $doccharges = new DocumentchargeModel();
        $DOC = $doccharges->where('verification_code', $verificationCode)->first();
        if ($DOC) {
            // User found, verify the account
            $doccharges->update($DOC['docid'], ['is_verified' => 1, 'verification_code' => null]); // Set is_verified to true and clear the verification code
            // Display a success message or redirect to a success page
            echo "Your Request has been successfully verified, Now You can Apply for Bid";
        } else {
            // No user found with the provided verification code
            // Handle this case appropriately, such as showing an error message
            echo "Invalid or expired verification code";
        }

        //ooo
    }

    public function viewOpenedBid($AId = null, $TId = null, $UserId = null) {
        date_default_timezone_set("Asia/Colombo");

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailssys($AId);
        echo $invitation->getLastQuery()->getQuery();

        return view('web/viewOpenedBid', $data);
    }

    //end Verification of payment
    public function viewtender($IFBId = null, $TId = null) {
        if (session()->get('isLoggedIn') === true) {
            $docs = new DocumentchargeModel();
            $pay = $docs->Where(['UserId' => session()->get('UserId'), 'TenderId' => $TId])->first();
            $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
            // if ($pay !== null && $pay['is_verified'] == '1') {
            helper('form');
            $data = array();
            $announcement = new AnnouncementModel();
            $invitation = new InvitationModel();
            $TItem = new TenderItemModel();
            $specification = new SpecModel();
            //$user = new UserModel();
            //$data['$user_list'] = $user->findAll();
            $data['list'] = $announcement->getAnnounceDetails($IFBId);
            $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
            $data['lists'] = $specification->getspecDetailsbyTId($TId);
            //echo $specification -> getLastQuery()->getQuery();
            $data['listi'] = $TItem->getBidtenderItemDetails($TId);

            $data['listt'] = $TItem->jointenderItemDetails($TId);
            $PSchedule = new SPriceScheduleModel();
            if ($this->request->getMethod() == 'post') {
                // print_r($this->request->getPost('Unit_priceEV'));
                $Unit_priceEV = $this->request->getPost('Unit_priceEV');
                $Qty = $this->request->getPost('Qty');
                $PriceLItem = $this->request->getPost('PriceLItem');
                $OPrice = $this->request->getPost('OPrice');
                $TotalPEVat = $this->request->getPost('TotalPEVat');
                $Discount = $this->request->getPost('Discount');
                $TotalwithDiscount = $this->request->getPost('TotalwithDiscount');
                $VAT = $this->request->getPost('VAT');
                $VatAmount = $this->request->getPost('VatAmount');
                $TotalPIVat = $this->request->getPost('TotalPIVat');
                $Remarks = $this->request->getPost('Remarks');
                $ItemName = $this->request->getPost('ItemName');
                $Itemid = $this->request->getPost('Itemid');
                foreach ($Unit_priceEV as $key => $value) {
                    //echo $OPrice[$key];
                    //echo $key;
                    $PSchedule->save([
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'TenderId' => $this->request->getPost('TenderId'),
                        'Itemid' => $Itemid[$key],
                        'ItemName' => $ItemName[$key],
                        'Item' => $key,
                        'Qty' => $Qty[$key],
                        'Unit_priceEV' => $value,
                        'PriceLItem' => floatval($Qty[$key]) * floatval($value),
                        'OPrice' => $OPrice[$key],
                        'TotalPEVat' => floatval(($Qty[$key] * $value)) + floatval($OPrice[$key]),
                        'Discount' => $Discount[$key],
                        'TotalwithDiscount' => (floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key]),
                        'VAT' => $VAT[$key],
                        'VatAmount' => ((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) * floatval($VAT[$key]) / 100,
                        'TotalPIVat' => ((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) + (((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) * floatval($VAT[$key]) / 100),
                        'SubmittedDate' => date("Y-m-d"),
                    ]);
                }
            }
            $SSpec = new SSpecificationModel();
            if ($this->request->getMethod() == 'post') {
                $SubComponent = $this->request->getPost('SubComponent');
                $Detail = $this->request->getPost('Detail');
                $Priority = $this->request->getPost('Priority');
                $BiddersOffer = $this->request->getPost('BiddersOffer');
                $Remarks = $this->request->getPost('Remarks');
                $Item = $this->request->getPost('Item');
                $IId = $this->request->getPost('IId');
                $ItemName = $this->request->getPost('ItemName');
                foreach ($BiddersOffer as $key => $value) {
                    $SSpec->save([
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'IId' => $IId[$key],
                        'Item' => $Item[$key],
                        'ItemName' => $ItemName[$key],
                        'SubComponent' => $SubComponent[$key],
                        'Detail' => $Detail[$key],
                        'Priority' => $Priority[$key],
                        'SpecId' => $key,
                        'TenderId' => $this->request->getPost('TenderId'),
                        'BiddersOffer' => $value,
                        'Remarks' => $Remarks[$key],
                        'SubmittedDate' => date("Y-m-d"),
                    ]);
                }
            }

            // Assuming you've already included the SgoodsDeliveryModel
            // Assuming you've wrapped your form inputs inside a form element and it's being submitted via POST method
            $SDelivery = new SgoodsDeliveryModel();
            if ($this->request->getMethod() == 'post') {
                $deliverydate = $this->request->getPost('deliverydate');
                foreach ($deliverydate as $key => $value) {
                    $SDelivery->save([
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'Item' => $key,
                        'TenderId' => $this->request->getPost('TenderId'),
                        'deliverydate' => $value,
                        'SubmittedDate' => date("Y-m-d"),
                    ]);
                }
            }
            if ($this->request->getMethod() == 'post') {
                $BidSubmissionform = $this->request->getFile('BidSubmissionform');
                $rules = [
                    'BidSubmissionform' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BidSubmissionform]|permit_empty'
                        . '|mime_in[BidSubmissionform,application/pdf]'
                        . '|max_size[BidSubmissionform,1000]', // Adjust the maximum file size as needed
                    ],
                    'BIDBond' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BIDBond]|permit_empty'
                        . '|mime_in[BIDBond,application/pdf]'
                        . '|max_size[BIDBond,10000]',
                    ],
                    'BRegistration' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BRegistration]|permit_empty'
                        . '|mime_in[BRegistration,application/pdf]'
                        . '|max_size[BRegistration,1000]', // Adjust the maximum file size as needed
                    ],
                    'PCA3' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[PCA3]|permit_empty'
                        . '|mime_in[PCA3,application/pdf]'
                        . '|max_size[PCA3,1000]', // Adjust the maximum file size as needed
                    ],
                    'manufactureAuthorization' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[manufactureAuthorization]|permit_empty'
                        . '|mime_in[manufactureAuthorization,application/pdf]'
                        . '|max_size[manufactureAuthorization,1000]', // Adjust the maximum file size as needed
                    ],
                    'manufacturebrochures' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[manufacturebrochures]|permit_empty'
                        . '|mime_in[manufacturebrochures,application/pdf]'
                        . '|max_size[manufacturebrochures,1000]', // Adjust the maximum file size as needed
                    ],
                    'otherDOC' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[otherDOC]|permit_empty'
                        . '|mime_in[otherDOC,application/pdf]'
                        . '|max_size[otherDOC,10000]',
                    ],
                ];

                if (!$this->validate($rules)) {
                    $data['validation'] = $this->validator;
                    //return view('web/viewtender',$data);
                } else {
                    //print_r($BidSubmissionform);
                    echo $BidSubmissionform->getName();
                    if (!empty($BidSubmissionform->getName())) {

                        $BSubmissionnewName = $BidSubmissionform->getRandomName();
                        $BidSubmissionform->move('public/images/' . 'uploads2', $BSubmissionnewName);

                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BSubmissionnewName,
                            'fileType' => 'BidSubmissionform',
                        ]);
                    }
                    $BIDBond = $this->request->getFile('BIDBond');
                    if (!empty($BIDBond->getName())) {
                        $BIDBondnewName = $BIDBond->getRandomName();
                        $BIDBond->move('public/images/' . 'uploads2', $BIDBondnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BIDBondnewName,
                            'fileType' => 'Bid Bond',
                        ]);
                    }
                    $BRegistration = $this->request->getFile('BRegistration');
                    if (!empty($BRegistration->getName())) {
                        $BRegistrationnewName = $BRegistration->getRandomName();
                        $BRegistration->move('public/images/' . 'uploads2', $BRegistrationnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BRegistrationnewName,
                            'fileType' => 'BRegistration',
                        ]);
                    }
                    $PCA3 = $this->request->getFile('PCA3');
                    if (!empty($PCA3->getName())) {
                        $PCA3newName = $PCA3->getRandomName();
                        $PCA3->move('public/images/' . 'uploads2', $PCA3newName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $PCA3newName,
                            'fileType' => 'PCA3',
                        ]);
                    }
                    $manufactureAuthorization = $this->request->getFile('manufactureAuthorization');
                    if (!empty($manufactureAuthorization->getName())) {
                        $manufactureAuthorizationnewName = $manufactureAuthorization->getRandomName();
                        $manufactureAuthorization->move('public/images/' . 'uploads2', $manufactureAuthorizationnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $manufactureAuthorizationnewName,
                            'fileType' => 'Manufacture Authorization',
                        ]);
                    }
                    $manufacturebrochures = $this->request->getFile('manufacturebrochures');
                    if (!empty($manufacturebrochures->getName())) {
                        $manufacturebrochuresnewName = $manufacturebrochures->getRandomName();
                        $manufacturebrochures->move('public/images/' . 'uploads2', $manufacturebrochuresnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $manufacturebrochuresnewName,
                            'fileType' => 'manufacturebrochures',
                        ]);
                    }
                    $otherDOC = $this->request->getFile('otherDOC');
                    if (!empty($otherDOC->getName())) {
                        $otherDOCnewName = $otherDOC->getRandomName();
                        $otherDOC->move('public/images/' . 'uploads2', $otherDOCnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $otherDOCnewName,
                            'fileType' => 'Other Document',
                        ]);
                    }
                }
            }

            return view('web/viewtender', $data);
            /* }else{
              return view('web/payDocumentCharges');
              //echo 'pay';

              } */
        } else {
            return redirect()->to('web/login');
        }
    }

    //check viewtender
    public function viewtenderaddmoreimage($IFBId = null, $TId = null) {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $TItem = new TenderItemModel();
        $specification = new SpecModel();
        //$user = new UserModel();
        //$data['$user_list'] = $user->findAll();
        $data['list'] = $announcement->getAnnounceDetails($IFBId);
        $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        $data['lists'] = $specification->getspecDetailsbyTId($TId);
        //echo $specification -> getLastQuery()->getQuery();
        $data['listi'] = $TItem->getBidtenderItemDetails($TId);
        $PSchedule = new SPriceScheduleModel();
        if ($this->request->getMethod() == 'post') {
            // print_r($this->request->getPost('Unit_priceEV'));
            $Unit_priceEV = $this->request->getPost('Unit_priceEV');
            $Qty = $this->request->getPost('Qty');
            $PriceLItem = $this->request->getPost('PriceLItem');
            $OPrice = $this->request->getPost('OPrice');
            $TotalPEVat = $this->request->getPost('TotalPEVat');
            $Discount = $this->request->getPost('Discount');
            $TotalwithDiscount = $this->request->getPost('TotalwithDiscount');
            $VAT = $this->request->getPost('VAT');
            $VatAmount = $this->request->getPost('VatAmount');
            $TotalPIVat = $this->request->getPost('TotalPIVat');
            $Remarks = $this->request->getPost('Remarks');
            foreach ($Unit_priceEV as $key => $value) {
                //echo $OPrice[$key];
                $PSchedule->save([
                    'UserId' => session()->get('UserId'),
                    'AnnounceId' => $this->request->getPost('AnnounceId'),
                    'TenderId' => $this->request->getPost('TenderId'),
                    'Item' => $key,
                    'Qty' => $Qty[$key],
                    'Unit_priceEV' => $value,
                    'PriceLItem' => $Qty[$key] * $value,
                    'OPrice' => $OPrice[$key],
                    'TotalPEVat' => $TotalPEVat[$key],
                    'Discount' => $Discount[$key],
                    'TotalwithDiscount' => $TotalwithDiscount[$key],
                    'VAT' => $VAT[$key],
                    'VatAmount' => $VatAmount[$key],
                    'TotalPIVat' => $TotalPIVat[$key],
                    'SubmittedDate' => date("Y-m-d"),
                ]);
            }
        }
        $SSpec = new SSpecificationModel();
        if ($this->request->getMethod() == 'post') {
            $BiddersOffer = $this->request->getPost('BiddersOffer');
            $Remarks = $this->request->getPost('Remarks');
            foreach ($BiddersOffer as $key => $value) {
                $SSpec->save([
                    'UserId' => session()->get('UserId'),
                    'AnnounceId' => $this->request->getPost('AnnounceId'),
                    'Item' => $key,
                    'TenderId' => $this->request->getPost('TenderId'),
                    'BiddersOffer' => $value,
                    'Remarks' => $Remarks[$key],
                    'SubmittedDate' => date("Y-m-d"),
                ]);
            }
        }
        //check
        $SDOC = new SDocumentModel();
        // if ($this->request->getMethod() == 'post') {
        if (isset($_POST['submit'])) {
            // Loop through each uploaded file
            for ($i = 0; $i < count($_FILES['profile_image']['name']); $i++) {
                $file_name = $_FILES['profile_image']['name'][$i];
                $file_tmp = $_FILES['profile_image']['tmp_name'][$i];
                $file_size = $_FILES['profile_image']['size'][$i];
                $file_type = $_FILES['profile_image']['type'][$i];

                $file_name_db = $_POST['file_name'][$i];

                // Upload file to a desired directory
                $upload_dir = "uploads/";
                move_uploaded_file($file_tmp, $upload_dir . $file_name);

                // Insert file data into the database
                $sql = "INSERT INTO your_table_name (file_name, file_size, file_type, file_title) VALUES ('$file_name', '$file_size', '$file_type', '$file_name_db')";
                if ($conn->query($sql) === TRUE) {
                    echo "File uploaded successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        $conn->close();

        /* $profile_image[] = $this->request->getPost('profile_image[]');
          $file_name[] = $this->request->getPost('file_name[]');
          $newName = $profile_image->getRandomName();
          $profile_image->move('public/images/' . 'uploads', $newName);
          foreach ($file_name as $key => $value) {
          $SDOC->save([
          'UserId' => session()->get('UserId'),
          'AnnounceId' => $this->request->getPost('AnnounceId'),
          'TenderId' => $this->request->getPost('TenderId'),
          'BiddersOffer' => $value,
          'profile_image[]' => profile_image[$key],
          'file_name[]' => $key,
          'SubmittedDate' => date("Y-m-d"),
          ]);
          } */



        return view('web/viewtender', $data);
    }

//check

    public function viewSubmitedBid($IFBId = null, $TId = null, $specId = null) {
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $TItem = new TenderItemModel();
        $specification = new SpecModel();
        $data['list'] = $announcement->getAnnounceDetails($IFBId);
        $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        $data['lists'] = $specification->getspecDetailsbyTId($specId, $TId);
        $data['listi'] = $TItem->getBidtenderItemDetails($TId);
        $PSchedule = new SPriceScheduleModel();

        return view('web/viewSubmitedBid', $data);
    }

    public function WebProcurementPlan() {
        helper('form');
        $data = array();
        $procurementPlan = new ProcurementPlanModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $procurementPlan->where('Vote', $this->request->getPost('Vote'))->findAll();
        } else {
            $data['list'] = $procurementPlan->findAll();
        }
        return view('web/WebProcurementPlan', $data);
    }

    public function viewprocurement($PId = null) {
        helper('form');
        $data = array();
        $procurementPlan = new ProcurementPlanModel();
        $procurementItem = new ProcurementItemModel();

        $data['list'] = $procurementPlan->getProPlanDetails($PId);

        $data['listI'] = $procurementItem->getProItemdetails($PId);
        /* echo $procurementItem->getLastQuery()->getQuery();
          if ($this->request->getMethod() == 'post') {
          $data['list'] = $procurementPlan->where('Vote', $this->request->getPost('Vote'))->findAll();
          $data['listI'] = $procurementItem->where('PId', $this->request->getPost('PId'))->findAll();

          } else {
          $data['list'] = $procurementPlan->findAll();
          $data['listI'] = $procurementItem->where('PId', $PId)->findAll();
          } */


        return view('web/viewprocurement', $data);
    }

    public function VoteLedger() {

        $vote = new VoteModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $vote->where('Vote', $this->request->getPost('Vote'))->findAll();
        } else {
            $data['list'] = $vote->findAll();
        }
        return view('web/VoteLedger', $data);
    }

    public function WebRequest() {

        $itemrequest = new RequestModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $itemrequest->where('ICategory', $this->request->getPost('ICategory'))->findAll();
        } else {
            $data['list'] = $itemrequest->findAll();
        }
        return view('web/WebRequest', $data);
    }

    public function GeneralInfo() {


        return view('web/GeneralInfo');
    }

    public function circulars() {

        return view('web/circulars');
    }

    public function Guidelines() {

        return view('web/Guidelines');
    }

    public function standedbidingDOC() {

        return view('web/standedbidingDOC');
    }

    public function viewmore($TId = null, $IFBId = null) {
        helper('form');
        $invitation = new InvitationModel();
        $t = new TenderModel();
        $announcement = new AnnouncementModel();
        $data['announcement'] = $announcement->findall();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement->where('id', $this->request->getPost('id'))->findAll();
            $data['listi'] = $invitation->where('IFBId', $this->request->getPost('IFBId'))->findAll();
        } else {
            $data['list'] = $announcement->findAll();
            $data['listi'] = $invitation->findAll();
        }
        return view('web/viewmore', $data);
    }

    public function registeredSupplier() {
        helper('form');
        $data = array();
        $SCategory = new SupplierCatergoryModel();
        $data['Category_list'] = $SCategory->findAll();
        return view('web/registeredSupplier', $data);
    }

    public function nonregisteredSupplier() {
        helper('form');
        $data = array();
        $SCategory = new SupplierCatergoryModel();
        $data['Category_list'] = $SCategory->findAll();
        return view('web/nonregisteredSupplier', $data);
    }

    public function save_nonregisteredSupplier() {
        helper('form');
        $data = array();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'business_reg_no' => ['label' => 'Business reg_no', 'rules' => 'required'],
                'business_name' => ['label' => 'Business Name', 'rules' => 'required'],
                'business_reg_Date' => ['label' => 'Business Registration Date', 'rules' => 'required'],
                'website' => ['label' => 'Website', 'rules' => 'required'],
                'MinmumValue' => ['label' => 'MinmumValue', 'rules' => 'required'],
                'MaxmumValue' => ['label' => 'MaxmumValue', 'rules' => 'required'],
                'location' => ['label' => 'Business Location', 'rules' => 'required'],
                'street' => ['label' => 'Street', 'rules' => 'required'],
                'city' => ['label' => 'City', 'rules' => 'required'],
                'province' => ['label' => 'Province', 'rules' => 'required'],
                'country' => ['label' => 'Country', 'rules' => 'required'],
                'Titles' => ['label' => 'Titles', 'rules' => 'required'],
                'business_owner_Fname' => ['label' => 'Business Owner Fname', 'rules' => 'required'],
                'business_owner_Lname' => ['label' => 'Business Owner Lname', 'rules' => 'required'],
                'ostreet' => ['label' => 'Owner Street', 'rules' => 'required'],
                'ocity' => ['label' => 'City', 'rules' => 'required'],
                'nic' => ['label' => 'NIC', 'rules' => 'required'],
                'prefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'phone' => ['label' => 'Phone', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'],
                'Branch' => ['label' => 'Branch', 'rules' => 'required'],
                'Account' => ['label' => 'Account', 'rules' => 'required'],
                'CTitles' => ['label' => 'Titles', 'rules' => 'required'],
                'Contact_person_Fname' => ['label' => 'Contact person Fname', 'rules' => 'required'],
                'Contact_person_Lname' => ['label' => 'Contact person Lname', 'rules' => 'required'],
                'Cstreet' => ['label' => 'Contact person Street', 'rules' => 'required'],
                'Ccity' => ['label' => 'Contact person City', 'rules' => 'required'],
                'Cnic' => ['label' => 'NIC', 'rules' => 'required'],
                'Cprefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'Cphone' => ['label' => 'Phone', 'rules' => 'required'],
                'CEmail' => ['label' => 'Email', 'rules' => 'required'],
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'profile_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[profile_image]'
                    . '|is_image[profile_image]'
                    . '|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[profile_image,100]'
                    . '|max_dims[profile_image,1024,768]',
                ],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                //return view('web/registeredSupplier', $data); //check not in gayan form
            } else {
                $profile_image = $this->request->getFile('profile_image');
                $newName = $profile_image->getRandomName();
                $profile_image->move('public/images/' . 'uploads', $newName);
                // Generate a unique verification code
                $verificationCode = bin2hex(random_bytes(16));
                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'Password' => $this->request->getPost('Password'),
                    'UserType' => 'nonregisteredsuppliers',
                    'profile_image' => $newName,
                    'is_verified' => 0,
                    'verification_code' => $verificationCode
                ]);

                $userid = $userreg->getInsertID();

                $nonregSuppliers = new NonRegisteredSupplierModel();
                $nonregSuppliers->save([
                    'business_reg_no' => $this->request->getPost('business_reg_no'),
                    'business_name' => $this->request->getPost('business_name'),
                    'business_reg_Date' => $this->request->getPost('business_reg_Date'),
                    'website' => $this->request->getPost('website'),
                    'MinmumValue' => $this->request->getPost('MinmumValue'),
                    'MaxmumValue' => $this->request->getPost('MaxmumValue'),
                    'location' => $this->request->getPost('location'),
                    'SType' => $this->request->getPost('SType'),
                    'street' => $this->request->getPost('street'),
                    'city' => $this->request->getPost('city'),
                    'province' => $this->request->getPost('province'),
                    'country' => $this->request->getPost('country'),
                    'Titles' => $this->request->getPost('Titles'),
                    'business_owner_Fname' => $this->request->getPost('business_owner_Fname'),
                    'business_owner_Lname' => $this->request->getPost('business_owner_Lname'),
                    'ostreet' => $this->request->getPost('ostreet'),
                    'ocity' => $this->request->getPost('ocity'),
                    'nic' => $this->request->getPost('nic'),
                    'prefix' => $this->request->getPost('prefix'),
                    'phone' => $this->request->getPost('phone'),
                    'Email' => $this->request->getPost('Email'),
                    'Branch' => $this->request->getPost('Branch'),
                    'Account' => $this->request->getPost('Account'),
                    'CTitles' => $this->request->getPost('CTitles'),
                    'Contact_person_Fname' => $this->request->getPost('Contact_person_Fname'),
                    'Contact_person_Lname' => $this->request->getPost('Contact_person_Lname'),
                    'Cstreet' => $this->request->getPost('Cstreet'),
                    'Ccity' => $this->request->getPost('Ccity'),
                    'Cnic' => $this->request->getPost('Cnic'),
                    'Cprefix' => $this->request->getPost('Cprefix'),
                    'Cphone' => $this->request->getPost('Cphone'),
                    'CEmail' => $this->request->getPost('CEmail'),
                    'UserId' => $userid,
                ]);
                // Send verification email
                $email = \Config\Services::email();
                $email->setTo('sandamalipathirana0@gmail.com');
                $email->setFrom($this->request->getPost('Email'), 'SPIMS');
                // $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Account Verification');
                $message = '<h1>Account Verification</h1>';
                $message .= '<a href="http://localhost/IPMS/web/verifymyaccount/' . $verificationCode . '">Click here to verify your account</a>';
                $email->setMessage($message);
                $email->send();

                return view('web/Welcome');

                /* echo '<div class="pagetitle">';
                  echo '<div class="container" style="max-width: 6000px; margin: 0 auto;  background: linear-gradient(to bottom, #669999 0%, #669900 100%); padding: 100px; border-radius: 10px;">';
                  echo '    <h1 style="text-align: center; color: white;">Welcome to the SPIMS System</h1>';
                  echo '    <div class="container" style="max-width: 600px; margin: 0 auto; background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px; border-radius: 10px;">';
                  echo '        <nav style="--bs-breadcrumb-divider: \'>\';" aria-label="breadcrumb">';
                  echo '            <div class="col-6 d-flex align-items-center" style="text-align: center;">';
                  echo '                <div class="modal-body">';
                  echo '                    <img src="' . site_url('public/assets_web/img/tick.png') . '" alt="" style="width: 80px; height: 90px; margin: 0 auto;">';
                  echo '                    <p style="color: green; font-size: 18px; font-weight: bold; text-align: center;">Successfully Registered to the SPIMS...!</p>';
                  echo '                    <p style="text-align: center;">Your Registration Id is</p>';
                  echo '                    <p style="text-align: center;">You Will Receive Email Verification Shortly..!</p>';
                  echo '                </div>';
                  echo '                <div class="modal-footer" style="text-align: center;">';
                  echo '<button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="' . site_url('web') . '">Go To HOME Page</a></button>';
                  echo '                </div>';
                  echo '            </div>';
                  echo '        </nav>';
                  echo '    </div><!-- End Page Title -->';
                  echo '</div>';
                  echo '</div>'; */
            }
        }

        return view('web/nonregisteredSupplier', $data);
    }

    //after viva
    public function save_registeredSupplier() {
        helper('form');
        $data = array();
        $SCategory = new SupplierCatergoryModel();
        $data['Category_list'] = $SCategory->findAll();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'business_reg_no' => ['label' => 'Business reg_no', 'rules' => 'required'],
                'business_name' => ['label' => 'Business Name', 'rules' => 'required'],
                'business_reg_Date' => ['label' => 'Business Registration Date', 'rules' => 'required'],
                'website' => ['label' => 'Website', 'rules' => 'required'],
                'MinmumValue' => ['label' => 'MinmumValue', 'rules' => 'required'],
                'MaxmumValue' => ['label' => 'MaxmumValue', 'rules' => 'required'],
                'SType' => ['label' => 'Supplier Registration Category', 'rules' => 'required'],
                'location' => ['label' => 'Business Location', 'rules' => 'required'],
                'street' => ['label' => 'Street', 'rules' => 'required'],
                'city' => ['label' => 'City', 'rules' => 'required'],
                'province' => ['label' => 'Province', 'rules' => 'required'],
                'country' => ['label' => 'Country', 'rules' => 'required'],
                'Titles' => ['label' => 'Titles', 'rules' => 'required'],
                'business_owner_Fname' => ['label' => 'Business Owner Fname', 'rules' => 'required'],
                'business_owner_Lname' => ['label' => 'Business Owner Lname', 'rules' => 'required'],
                'ostreet' => ['label' => 'Owner Street', 'rules' => 'required'],
                'ocity' => ['label' => 'City', 'rules' => 'required'],
                'nic' => ['label' => 'NIC', 'rules' => 'required'],
                'prefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'phone' => ['label' => 'Phone', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'],
                'Branch' => ['label' => 'Branch', 'rules' => 'required'],
                'Account' => ['label' => 'Account', 'rules' => 'required'],
                'CTitles' => ['label' => 'Titles', 'rules' => 'required'],
                'Contact_person_Fname' => ['label' => 'Contact person Fname', 'rules' => 'required'],
                'Contact_person_Lname' => ['label' => 'Contact person Lname', 'rules' => 'required'],
                'Cstreet' => ['label' => 'Contact person Street', 'rules' => 'required'],
                'Ccity' => ['label' => 'Contact person City', 'rules' => 'required'],
                'Cnic' => ['label' => 'NIC', 'rules' => 'required'],
                'Cprefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'Cphone' => ['label' => 'Phone', 'rules' => 'required'],
                'CEmail' => ['label' => 'Email', 'rules' => 'required'],
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'profile_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[profile_image]'
                    . '|is_image[profile_image]'
                    . '|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[profile_image,100]'
                    . '|max_dims[profile_image,1024,768]',
                ],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                //return view('web/registeredSupplier', $data); //check not in gayan form
            } else {
                $profile_image = $this->request->getFile('profile_image');
                $newName = $profile_image->getRandomName();
                $profile_image->move('public/images/' . 'uploads', $newName);
                //areviva second image
                $RegDOC = $this->request->getFile('RegDOC');
                $newName1 = $RegDOC->getRandomName();
                $RegDOC->move('public/images/' . 'uploads', $newName1);
                // Generate a unique verification code
                $verificationCode = bin2hex(random_bytes(16));
                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'Password' => $this->request->getPost('Password'),
                    'UserType' => 'registeredsuppliers',
                    'profile_image' => $newName,
                    'is_verified' => 0,
                    'verification_code' => $verificationCode
                ]);

                $userid = $userreg->getInsertID();

                $regSuppliers = new SupplierModel();
                $regSuppliers->save([
                    'business_reg_no' => $this->request->getPost('business_reg_no'),
                    'business_name' => $this->request->getPost('business_name'),
                    'business_reg_Date' => $this->request->getPost('business_reg_Date'),
                    'website' => $this->request->getPost('website'),
                    'MinmumValue' => $this->request->getPost('MinmumValue'),
                    'MaxmumValue' => $this->request->getPost('MaxmumValue'),
                    'SType' => $this->request->getPost('SType'),
                    'location' => $this->request->getPost('location'),
                    'street' => $this->request->getPost('street'),
                    'city' => $this->request->getPost('city'),
                    'province' => $this->request->getPost('province'),
                    'country' => $this->request->getPost('country'),
                    'Titles' => $this->request->getPost('Titles'),
                    'business_owner_Fname' => $this->request->getPost('business_owner_Fname'),
                    'business_owner_Lname' => $this->request->getPost('business_owner_Lname'),
                    'ostreet' => $this->request->getPost('ostreet'),
                    'ocity' => $this->request->getPost('ocity'),
                    'nic' => $this->request->getPost('nic'),
                    'prefix' => $this->request->getPost('prefix'),
                    'phone' => $this->request->getPost('phone'),
                    'Email' => $this->request->getPost('Email'),
                    'Branch' => $this->request->getPost('Branch'),
                    'Account' => $this->request->getPost('Account'),
                    'CTitles' => $this->request->getPost('CTitles'),
                    'Contact_person_Fname' => $this->request->getPost('Contact_person_Fname'),
                    'Contact_person_Lname' => $this->request->getPost('Contact_person_Lname'),
                    'Cstreet' => $this->request->getPost('Cstreet'),
                    'Ccity' => $this->request->getPost('Ccity'),
                    'Cnic' => $this->request->getPost('Cnic'),
                    'Cprefix' => $this->request->getPost('Cprefix'),
                    'Cphone' => $this->request->getPost('Cphone'),
                    'CEmail' => $this->request->getPost('CEmail'),
                    'RegDOC' => $newName1,
                    'UserId' => $userid,
                ]);
                // Send verification email
                $email = \Config\Services::email();
                $email->setTo('sandamalipathirana0@gmail.com');
                $email->setFrom($this->request->getPost('Email'), 'SPIMS');
                // $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Account Verification');
                $message = '<h1>Account Verification</h1>';
                $message .= '<a href="http://localhost/IPMS/web/verifymyaccount/' . $verificationCode . '">Click here to verify your account</a>';
                $email->setMessage($message);
                $email->send();

                return view('web/Welcome');

                /* echo '<div class="pagetitle">';
                  echo '<div class="container" style="max-width: 6000px; margin: 0 auto;  background: linear-gradient(to bottom, #669999 0%, #669900 100%); padding: 100px; border-radius: 10px;">';
                  echo '    <h1 style="text-align: center; color: white;">Welcome to the SPIMS System</h1>';
                  echo '    <div class="container" style="max-width: 600px; margin: 0 auto; background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px; border-radius: 10px;">';
                  echo '        <nav style="--bs-breadcrumb-divider: \'>\';" aria-label="breadcrumb">';
                  echo '            <div class="col-6 d-flex align-items-center" style="text-align: center;">';
                  echo '                <div class="modal-body">';
                  echo '                    <img src="' . site_url('public/assets_web/img/tick.png') . '" alt="" style="width: 80px; height: 90px; margin: 0 auto;">';
                  echo '                    <p style="color: green; font-size: 18px; font-weight: bold; text-align: center;">Successfully Registered to the SPIMS...!</p>';
                  echo '                    <p style="text-align: center;">Your Registration Id is</p>';
                  echo '                    <p style="text-align: center;">You Will Receive Email Verification Shortly..!</p>';
                  echo '                </div>';
                  echo '                <div class="modal-footer" style="text-align: center;">';
                  echo '<button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="' . site_url('web') . '">Go To HOME Page</a></button>';
                  echo '                </div>';
                  echo '            </div>';
                  echo '        </nav>';
                  echo '    </div><!-- End Page Title -->';
                  echo '</div>';
                  echo '</div>'; */
            }
        }

        return view('web/registeredSupplier', $data);
    }

    public function save_registeredSupplierviva() {
        helper('form');
        $data = array();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'business_reg_no' => ['label' => 'Business reg_no', 'rules' => 'required'],
                'business_name' => ['label' => 'Business Name', 'rules' => 'required'],
                'business_reg_Date' => ['label' => 'Business Registration Date', 'rules' => 'required'],
                'website' => ['label' => 'Website', 'rules' => 'required'],
                'MinmumValue' => ['label' => 'MinmumValue', 'rules' => 'required'],
                'MaxmumValue' => ['label' => 'MaxmumValue', 'rules' => 'required'],
                'SType' => ['label' => 'Supplier Registration Category', 'rules' => 'required'],
                'location' => ['label' => 'Business Location', 'rules' => 'required'],
                'street' => ['label' => 'Street', 'rules' => 'required'],
                'city' => ['label' => 'City', 'rules' => 'required'],
                'province' => ['label' => 'Province', 'rules' => 'required'],
                'country' => ['label' => 'Country', 'rules' => 'required'],
                'Titles' => ['label' => 'Titles', 'rules' => 'required'],
                'business_owner_Fname' => ['label' => 'Business Owner Fname', 'rules' => 'required'],
                'business_owner_Lname' => ['label' => 'Business Owner Lname', 'rules' => 'required'],
                'ostreet' => ['label' => 'Owner Street', 'rules' => 'required'],
                'ocity' => ['label' => 'ocity', 'rules' => 'required'],
                'nic' => ['label' => 'NIC', 'rules' => 'required'],
                'prefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'phone' => ['label' => 'Phone', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'],
                'CTitles' => ['label' => 'Titles', 'rules' => 'required'],
                'Contact_person_Fname' => ['label' => 'Contact person Fname', 'rules' => 'required'],
                'Contact_person_Lname' => ['label' => 'Contact person Lname', 'rules' => 'required'],
                'Cstreet' => ['label' => 'Contact person Street', 'rules' => 'required'],
                'Ccity' => ['label' => 'Contact person City', 'rules' => 'required'],
                'Cnic' => ['label' => 'NIC', 'rules' => 'required'],
                'Cprefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'Cphone' => ['label' => 'Phone', 'rules' => 'required'],
                'CEmail' => ['label' => 'Email', 'rules' => 'required'],
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'profile_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[profile_image]'
                    . '|is_image[profile_image]'
                    . '|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[profile_image,100]'
                    . '|max_dims[profile_image,1024,768]',
                ],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                //return view('web/registeredSupplier', $data); //check not in gayan form
            } else {
                $profile_image = $this->request->getFile('profile_image');
                $newName = $profile_image->getRandomName();
                $profile_image->move('public/images/' . 'uploads', $newName);
                // Generate a unique verification code
                $verificationCode = bin2hex(random_bytes(16));
                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'email' => $this->request->getPost('Email'),
                    'Password' => $this->request->getPost('Password'),
                    'UserType' => 'registeredsuppliers',
                    'profile_image' => $newName,
                    'is_verified' => 0,
                    'verification_code' => $verificationCode
                ]);

                $userid = $userreg->getInsertID();

                $regSuppliers = new SupplierModel();
                $regSuppliers->save([
                    'business_reg_no' => $this->request->getPost('business_reg_no'),
                    'business_name' => $this->request->getPost('business_name'),
                    'business_reg_Date' => $this->request->getPost('business_reg_Date'),
                    'website' => $this->request->getPost('website'),
                    'MinmumValue' => $this->request->getPost('MinmumValue'),
                    'MaxmumValue' => $this->request->getPost('MaxmumValue'),
                    'SType' => $this->request->getPost('SType'),
                    'location' => $this->request->getPost('location'),
                    'street' => $this->request->getPost('street'),
                    'ocity' => $this->request->getPost('ocity'),
                    'province' => $this->request->getPost('province'),
                    'country' => $this->request->getPost('country'),
                    'Titles' => $this->request->getPost('Titles'),
                    'business_owner_Fname' => $this->request->getPost('business_owner_Fname'),
                    'business_owner_Lname' => $this->request->getPost('business_owner_Lname'),
                    'ostreet' => $this->request->getPost('ostreet'),
                    'nic' => $this->request->getPost('nic'),
                    'prefix' => $this->request->getPost('prefix'),
                    'phone' => $this->request->getPost('phone'),
                    'Email' => $this->request->getPost('Email'),
                    'Branch' => ['label' => 'Branch', 'rules' => 'required'],
                    'Account' => ['label' => 'Account', 'rules' => 'required'],
                    'CTitles' => $this->request->getPost('CTitles'),
                    'Contact_person_Fname' => $this->request->getPost('Contact_person_Fname'),
                    'Contact_person_Lname' => $this->request->getPost('Contact_person_Lname'),
                    'Cstreet' => $this->request->getPost('Cstreet'),
                    'Ccity' => $this->request->getPost('Ccity'),
                    'Cnic' => $this->request->getPost('Cnic'),
                    'Cprefix' => $this->request->getPost('Cprefix'),
                    'Cphone' => $this->request->getPost('Cphone'),
                    'CEmail' => $this->request->getPost('CEmail'),
                    'UserId' => $userid,
                ]);
                // Send verification email
                $email = \Config\Services::email();
                $email->setTo($this->request->getPost('Email'));
                $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                $email->setSubject('Account Verification');
                $message = '<h1>Account Verification</h1>';
                $message .= '<a href="http://localhost/IPMS/web/verifymyaccount/' . $verificationCode . '">Click here to verify your account</a>';
                $email->setMessage($message);
                $email->send();

                return view('web/Welcome');

                /* echo '<div class="pagetitle">';
                  echo '<div class="container" style="max-width: 6000px; margin: 0 auto;  background: linear-gradient(to bottom, #669999 0%, #669900 100%); padding: 100px; border-radius: 10px;">';
                  echo '    <h1 style="text-align: center; color: white;">Welcome to the SPIMS System</h1>';
                  echo '    <div class="container" style="max-width: 600px; margin: 0 auto; background: linear-gradient(to bottom, #ffffff 0%, #99ccff 100%); padding: 10px; border-radius: 10px;">';
                  echo '        <nav style="--bs-breadcrumb-divider: \'>\';" aria-label="breadcrumb">';
                  echo '            <div class="col-6 d-flex align-items-center" style="text-align: center;">';
                  echo '                <div class="modal-body">';
                  echo '                    <img src="' . site_url('public/assets_web/img/tick.png') . '" alt="" style="width: 80px; height: 90px; margin: 0 auto;">';
                  echo '                    <p style="color: green; font-size: 18px; font-weight: bold; text-align: center;">Successfully Registered to the SPIMS...!</p>';
                  echo '                    <p style="text-align: center;">Your Registration Id is</p>';
                  echo '                    <p style="text-align: center;">You Will Receive Email Verification Shortly..!</p>';
                  echo '                </div>';
                  echo '                <div class="modal-footer" style="text-align: center;">';
                  echo '<button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="' . site_url('web') . '">Go To HOME Page</a></button>';
                  echo '                </div>';
                  echo '            </div>';
                  echo '        </nav>';
                  echo '    </div><!-- End Page Title -->';
                  echo '</div>';
                  echo '</div>'; */
            }
        }

        return view('web/registeredSupplier', $data);
    }

    public function verifymyaccount($verificationCode = null) {
        if (!$verificationCode) {
            // Handle the case where no verification code is provided
            // For example, show an error message or redirect to a specific page
            echo "Verification code is missing.";
            return;
        }
        $userModel = new UserModel();
        $user = $userModel->where('verification_code', $verificationCode)->first();
        if ($user) {
            // User found, verify the account
            $userModel->update($user['UserId'], ['is_verified' => 1, 'verification_code' => null]); // Set is_verified to true and clear the verification code
            // Display a success message or redirect to a success page
            echo "Your account has been successfully verified.";
        } else {
            // No user found with the provided verification code
            // Handle this case appropriately, such as showing an error message
            echo "Invalid or expired verification code";
        }

        //ooo
    }

    public function register() {
        helper('form');
        return view('web/register');
    }

    public function Welcome() {
        return view('web/Welcome');
    }

    public function make_register() {
        helper('form');
        $data = array();
        if ($this->request->getMethod() == 'post') {

            $rules = [
                'FirstName' => ['label' => 'First Name', 'rules' => 'required'],
                'LastName' => ['label' => 'Last Name', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required|valid_email'],
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]'],
                'profile_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[profile_image]'
                    . '|is_image[profile_image]'
                    . '|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[profile_image,100]'
                    . '|max_dims[profile_image,1024,768]',
                ],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                return view('web/register', $data);
            } else {
                $profile_image = $this->request->getFile('profile_image');
                $newName = $profile_image->getRandomName();
                $profile_image->move('public/images/' . 'uploads', $newName);

                $user = new UserModel();
                $user->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'Password' => $this->request->getPost('Password'),
                    'email' => $this->request->getPost('Email'),
                    'UserType' => 'Administrator',
                    'profile_image' => $newName,
                ]);

                $userid = $user->getInsertID();

                $customer = new CustomerModel();
                $customer->save([
                    'FirstName' => $this->request->getPost('FirstName'),
                    'LastName' => $this->request->getPost('LastName'),
                    'Email' => $this->request->getPost('Email'),
                    'UserId' => $userid,
                ]);
                return view('sys/WelcomeAdmin');
            }
        }
    }

    //ask from sir
    public function contact() {
        helper('form');
        $data = array();
        $massage = new MassageModel();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'name' => ['label' => 'name', 'rules' => 'required'],
                'email' => ['label' => 'email', 'rules' => 'required|valid_email'],
                'subject' => ['label' => 'subject', 'rules' => 'required'],
                'message' => ['label' => 'message', 'rules' => 'required|min_length[4]'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $massage->save([
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'subject' => $this->request->getPost('subject'),
                    'message' => $this->request->getPost('message'),
                ]);
                $data['msg'] = "Message Sent Successfully";
            }
        }
        return view('web/contact', $data);
    }

    public function edittenders($AId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
        $SSpec = new SSpecificationModel();
        $TItem = new TenderItemModel();
        $SPSchedule = new SPriceScheduleModel();
        $Sgoodsdelivery = new SgoodsDeliveryModel();
        $SDocument = new SDocumentModel();
        $Spec = new SpecModel();

        $data['AnnounceId'] = $AId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        // to get data acording to item
        // use this priviously
        $sannouncement = new SAnnouncementModel();
        $NSPData = new ShopingModel();
        $data['list'] = $sannouncement->getSAnnounceDetails($AId);
        //  $data['listP'] = $NSPData->getinvitationDetailsbyTId($AId, $TId);
        //$data['listtp'] = $SPSchedule->GetPriseScheduleDetails($UserId);
        // echo $SPSchedule->getLastQuery()->getQuery();
        $data['listP'] = $SPSchedule->GetPriseScheduleedit($TId, $UserId);
        $data['listtp'] = $SPSchedule->GetPriseScheduleDetails($TId, $UserId);
        $data['listG'] = $Sgoodsdelivery->GetSgoodsDeliveryDetails($TId, $UserId);

        $data['listD'] = $SDocument->GetSDocumentDetails($TId, $UserId);
        $data['listJ'] = $Spec->getspecDetailsbyTId($TId);
        $data['lists'] = $SSpec->GetSpecDetails($TId, $UserId);

        // $data['listi'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);

        $data['listB'] = $SPSchedule->joinBidderDetails($AId, $TId, $UserId);

        $data['listt'] = $TItem->jointenderItemDetails($TId);
        //echo $TItem->getLastQuery()->getQuery();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        return view('web/edittenders', $data);
    }

    public function edittender($IFBId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
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
        $data['list'] = $announcement->getAnnounceDetails($IFBId);

        $data['listtP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
        //echo $invitation->getLastQuery()->getQuery();
        //$data['listtp'] = $SPSchedule->GetPriseScheduleDetails($UserId);
        $data['listP'] = $SPSchedule->GetPriseScheduleedit($TId, $UserId);
//echo $SPSchedule->getLastQuery()->getQuery();
        $data['listG'] = $Sgoodsdelivery->GetSgoodsDeliveryDetails($TId, $UserId);

        $data['listD'] = $SDocument->GetSDocumentDetails($TId, $UserId);
        $data['listJ'] = $Spec->getspecDetailsbyTId($TId);
        $data['lists'] = $SSpec->GetSpecDetails($TId, $UserId);

        $data['listi'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);

        $data['listB'] = $SPSchedule->joinBidderDetails($IFBId, $TId, $UserId);

        $data['listt'] = $TItem->jointenderItemDetails($TId);
        //echo $TItem->getLastQuery()->getQuery();

        $data['AnnounceId'] = $IFBId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        return view('web/edittender', $data);
    }

    public function viewapplytender($IFBId = null, $TId = null, $UserId = null) {
        helper('form');
        $data = array();
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
        $data['list'] = $announcement->getAnnounceDetails($IFBId);

        $data['listtP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);

        //$data['listtp'] = $SPSchedule->GetPriseScheduleDetails($UserId);
        $data['listP'] = $SPSchedule->GetPriseScheduleedit($TId, $UserId);
        //echo $SPSchedule->getLastQuery()->getQuery();
        $data['listG'] = $Sgoodsdelivery->GetSgoodsDeliveryDetails($TId, $UserId);
//echo $Sgoodsdelivery->getLastQuery()->getQuery();
        $data['listD'] = $SDocument->GetSDocumentDetails($TId, $UserId);
        $data['listJ'] = $Spec->getspecDetailsbyTId($TId);
        $data['lists'] = $SSpec->GetSpecDetails($TId, $UserId);

        $data['listi'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);

        $data['listB'] = $SPSchedule->joinBidderDetails($IFBId, $TId, $UserId);

        $data['listt'] = $TItem->jointenderItemDetails($TId);
        //echo $TItem->getLastQuery()->getQuery();

        $data['AnnounceId'] = $IFBId;
        $data['TenderId'] = $TId;
        $data['VendorId'] = $UserId;

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        return view('web/viewapplytender', $data);
    }

    public function updatetender($IFBId = null, $TId = null) {
        if (session()->get('isLoggedIn') === true) {
            $docs = new DocumentchargeModel();
            $pay = $docs->Where(['UserId' => session()->get('UserId'), 'TenderId' => $TId])->first();
            $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
            //if ($pay !== null && $pay['is_verified'] == '1') {
            helper('form');
            $data = array();
            $announcement = new AnnouncementModel();
            $invitation = new InvitationModel();
            $TItem = new TenderItemModel();
            $specification = new SpecModel();
            //$user = new UserModel();
            //$data['$user_list'] = $user->findAll();
            $data['list'] = $announcement->getAnnounceDetails($IFBId);
            $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
            $data['lists'] = $specification->getspecDetailsbyTId($TId);
            //echo $specification -> getLastQuery()->getQuery();
            $data['listi'] = $TItem->getBidtenderItemDetails($TId);

            $data['listt'] = $TItem->jointenderItemDetails($TId);
            $PSchedule = new SPriceScheduleModel();
            if ($this->request->getMethod() == 'post') {
                //echo 'yes';
                // print_r($this->request->getPost('Unit_priceEV'));
                $Unit_priceEV = $this->request->getPost('Unit_priceEV');
                $Qty = $this->request->getPost('Qty');
                $PriceLItem = $this->request->getPost('PriceLItem');
                $OPrice = $this->request->getPost('OPrice');
                $TotalPEVat = $this->request->getPost('TotalPEVat');
                $Discount = $this->request->getPost('Discount');
                $TotalwithDiscount = $this->request->getPost('TotalwithDiscount');
                $VAT = $this->request->getPost('VAT');
                $VatAmount = $this->request->getPost('VatAmount');
                $TotalPIVat = $this->request->getPost('TotalPIVat');
                $Remarks = $this->request->getPost('Remarks');
                $Itemid = $this->request->getPost('Itemid');
                $ItemName = $this->request->getPost('ItemName');
                foreach ($Unit_priceEV as $key => $value) {
                    //echo $OPrice[$key];
                    //echo $key;
                    $sdata = [
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'TenderId' => $this->request->getPost('TenderId'),
                        'Itemid' => $Itemid[$key],
                        'ItemName' => $ItemName[$key],
                        'Item' => $key,
                        'Qty' => $Qty[$key],
                        'Unit_priceEV' => $value,
                        'PriceLItem' => floatval($Qty[$key]) * floatval($value),
                        'OPrice' => $OPrice[$key],
                        'TotalPEVat' => floatval(($Qty[$key] * $value)) + floatval($OPrice[$key]),
                        'Discount' => $Discount[$key],
                        'TotalwithDiscount' => (floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key]),
                        'VAT' => $VAT[$key],
                        'VatAmount' => ((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) * floatval($VAT[$key]) / 100,
                        'TotalPIVat' => ((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) + (((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) * floatval($VAT[$key]) / 100),
                        'SubmittedDate' => date("Y-m-d"),
                    ];
                    $PSchedule->where(['Itemid' => $Itemid[$key], 'TenderId' => $this->request->getPost('TenderId')])->set($sdata)->update();
                }
            }
            $SSpec = new SSpecificationModel();
            if ($this->request->getMethod() == 'post') {
                $SubComponent = $this->request->getPost('SubComponent');
                $Detail = $this->request->getPost('Detail');
                $Priority = $this->request->getPost('Priority');
                $BiddersOffer = $this->request->getPost('BiddersOffer');
                $Remarks = $this->request->getPost('Remarks');
                $Item = $this->request->getPost('Item');
                $IId = $this->request->getPost('IId');
                $ItemName = $this->request->getPost('ItemName');
                foreach ($BiddersOffer as $key => $value) {
                    $pdata = [
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'IId' => $IId[$key],
                        'Item' => $Item[$key],
                        'ItemName' => $ItemName[$key],
                        'SubComponent' => $SubComponent[$key],
                        'Detail' => $Detail[$key],
                        'Priority' => $Priority[$key],
                        'SpecId' => $key,
                        'TenderId' => $this->request->getPost('TenderId'),
                        'BiddersOffer' => $value,
                        'Remarks' => $Remarks[$key],
                        'SubmittedDate' => date("Y-m-d"),
                    ];
                    $SSpec->where(['Item' => $Item[$key], 'SpecId' => $key, 'TenderId' => $this->request->getPost('TenderId')])->set($pdata)->update();
//echo $SSpec -> getLastQuery()->getQuery();
                }
            }

            // Assuming you've already included the SgoodsDeliveryModel
            // Assuming you've wrapped your form inputs inside a form element and it's being submitted via POST method
            $SDelivery = new SgoodsDeliveryModel();
            if ($this->request->getMethod() == 'post') {
                $deliverydate = $this->request->getPost('deliverydate');
                foreach ($deliverydate as $key => $value) {

                    $gdata = [
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'Item' => $key,
                        'TenderId' => $this->request->getPost('TenderId'),
                        'deliverydate' => $value,
                        'SubmittedDate' => date("Y-m-d"),
                    ];
                    $SDelivery->where(['Item' => $key, 'AnnounceId' => $this->request->getPost('AnnounceId'), 'UserId' => session()->get('UserId'), 'TenderId' => $this->request->getPost('TenderId')])->set($gdata)->update();
//echo $SDelivery -> getLastQuery()->getQuery();
                }
            }
            if ($this->request->getMethod() == 'post') {
                $BidSubmissionform = $this->request->getFile('BidSubmissionform');
                $rules = [
                    'BidSubmissionform' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BidSubmissionform]|permit_empty'
                        . '|mime_in[BidSubmissionform,application/pdf]'
                        . '|max_size[BidSubmissionform,1000]', // Adjust the maximum file size as needed
                    ],
                    'BIDBond' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BIDBond]|permit_empty'
                        . '|mime_in[BIDBond,application/pdf]'
                        . '|max_size[BIDBond,10000]',
                    ],
                    'BRegistration' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BRegistration]|permit_empty'
                        . '|mime_in[BRegistration,application/pdf]'
                        . '|max_size[BRegistration,1000]', // Adjust the maximum file size as needed
                    ],
                    'PCA3' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[PCA3]|permit_empty'
                        . '|mime_in[PCA3,application/pdf]'
                        . '|max_size[PCA3,1000]', // Adjust the maximum file size as needed
                    ],
                    'manufactureAuthorization' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[manufactureAuthorization]|permit_empty'
                        . '|mime_in[manufactureAuthorization,application/pdf]'
                        . '|max_size[manufactureAuthorization,1000]', // Adjust the maximum file size as needed
                    ],
                    'manufacturebrochures' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[manufacturebrochures]|permit_empty'
                        . '|mime_in[manufacturebrochures,application/pdf]'
                        . '|max_size[manufacturebrochures,1000]', // Adjust the maximum file size as needed
                    ],
                    'otherDOC' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[otherDOC]|permit_empty'
                        . '|mime_in[otherDOC,application/pdf]'
                        . '|max_size[otherDOC,10000]',
                    ],
                ];

                if (!$this->validate($rules)) {
                    $data['validation'] = $this->validator;
                    //return view('web/viewtender',$data);
                } else {
                    //print_r($BidSubmissionform);
                    echo $BidSubmissionform->getName();
                    if (!empty($BidSubmissionform->getName())) {

                        $BSubmissionnewName = $BidSubmissionform->getRandomName();
                        $BidSubmissionform->move('public/images/' . 'uploads2', $BSubmissionnewName);

                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BSubmissionnewName,
                            'fileType' => 'BidSubmissionform',
                        ]);
                    }
                    $BIDBond = $this->request->getFile('BIDBond');
                    if (!empty($BIDBond->getName())) {
                        $BIDBondnewName = $BIDBond->getRandomName();
                        $BIDBond->move('public/images/' . 'uploads2', $BIDBondnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BIDBondnewName,
                            'fileType' => 'Bid Bond',
                        ]);
                    }
                    $BRegistration = $this->request->getFile('BRegistration');
                    if (!empty($BRegistration->getName())) {
                        $BRegistrationnewName = $BRegistration->getRandomName();
                        $BRegistration->move('public/images/' . 'uploads2', $BRegistrationnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BRegistrationnewName,
                            'fileType' => 'BRegistration',
                        ]);
                    }
                    $PCA3 = $this->request->getFile('PCA3');
                    if (!empty($PCA3->getName())) {
                        $PCA3newName = $PCA3->getRandomName();
                        $PCA3->move('public/images/' . 'uploads2', $PCA3newName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $PCA3newName,
                            'fileType' => 'PCA3',
                        ]);
                    }
                    $manufactureAuthorization = $this->request->getFile('manufactureAuthorization');
                    if (!empty($manufactureAuthorization->getName())) {
                        $manufactureAuthorizationnewName = $manufactureAuthorization->getRandomName();
                        $manufactureAuthorization->move('public/images/' . 'uploads2', $manufactureAuthorizationnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $manufactureAuthorizationnewName,
                            'fileType' => 'Manufacture Authorization',
                        ]);
                    }
                    $manufacturebrochures = $this->request->getFile('manufacturebrochures');
                    if (!empty($manufacturebrochures->getName())) {
                        $manufacturebrochuresnewName = $manufacturebrochures->getRandomName();
                        $manufacturebrochures->move('public/images/' . 'uploads2', $manufacturebrochuresnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $manufacturebrochuresnewName,
                            'fileType' => 'manufacturebrochures',
                        ]);
                    }
                    $otherDOC = $this->request->getFile('otherDOC');
                    if (!empty($otherDOC->getName())) {
                        $otherDOCnewName = $otherDOC->getRandomName();
                        $otherDOC->move('public/images/' . 'uploads2', $otherDOCnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $otherDOCnewName,
                            'fileType' => 'Other Document',
                        ]);

                        $data['msg'] = "Bid Succseefuly Updated";
                    }
                }
            }

            //  return view('web/viewtender', $data);
            /* }else{
              return view('web/payDocumentCharges');
              //echo 'pay';

              } */
        } else {
            return redirect()->to('web/login');
        }
    }

    public function viewAppliedBidders($AId = null, $TId = null, $UserId = null) {
        date_default_timezone_set("Asia/Colombo");

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $doccharges = new DocumentchargeModel();
        $Bidders = new OpeningRemarksModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailssys($AId);
        $data['listB'] = $Bidders->GetappliedbidderDetails($AId, $TId);
        echo $Bidders->getLastQuery()->getQuery();
        return view('web/viewAppliedBidders', $data);
    }

    /* public function ShoppinBid($AId = null, $TId = null, $UserId = null) {
      date_default_timezone_set("Asia/Colombo");

      $sannouncement = new SAnnouncementModel();
      $NSPData = new ShopingModel();
      $data['list'] = $sannouncement->getSAnnounceDetails($AId);
      $data['listP'] = $NSPData->getshoppingDetails($AId);

      return view('web/ShoppinBid', $data);
      } */

    public function ShoppinBid($AId = null, $UserId = null) {
        date_default_timezone_set("Asia/Colombo");

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $doccharges = new DocumentchargeModel();
        //$data['listD'] = $doccharges->getDocumentchargeDetails($IFBId,$TId,$UserId);
        $data['list'] = $announcement->getAnnounceDetails($AId);
        //  $data['listP'] = $invitation->getinvitationDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailswebdisable($AId, $UserId);

        //$data['listR'] = $invitation->getinvitationDetailswebdisable($AId,$TId,$UserId);
        echo $invitation->getLastQuery()->getQuery();
        // $data['listP'] = $invitation->joininvitationDOCChargesbyTId($AId,$TId);

        return view('web/ShoppinBid', $data);
    }

    //end Verification of payment
    public function viewtenders($IFBId = null, $TId = null) {
        if (session()->get('isLoggedIn') === true) {
            $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
            // if ($pay !== null && $pay['is_verified'] == '1') {
            helper('form');
            $data = array();
            $announcement = new AnnouncementModel();
            $invitation = new InvitationModel();
            $TItem = new TenderItemModel();
            $specification = new SpecModel();
            //$user = new UserModel();
            //$data['$user_list'] = $user->findAll();
            $data['list'] = $announcement->getAnnounceDetails($IFBId);
            $data['listP'] = $invitation->getinvitationDetailsbyTId($IFBId, $TId);
            echo $invitation->getLastQuery()->getQuery();
            $data['lists'] = $specification->getspecDetailsbyTId($TId);

            $data['listi'] = $TItem->getBidtenderItemDetails($TId);

            $data['listt'] = $TItem->jointenderItemDetails($TId);
            $PSchedule = new SPriceScheduleModel();
            if ($this->request->getMethod() == 'post') {
                // print_r($this->request->getPost('Unit_priceEV'));
                $Unit_priceEV = $this->request->getPost('Unit_priceEV');
                $Qty = $this->request->getPost('Qty');
                $PriceLItem = $this->request->getPost('PriceLItem');
                $OPrice = $this->request->getPost('OPrice');
                $TotalPEVat = $this->request->getPost('TotalPEVat');
                $Discount = $this->request->getPost('Discount');
                $TotalwithDiscount = $this->request->getPost('TotalwithDiscount');
                $VAT = $this->request->getPost('VAT');
                $VatAmount = $this->request->getPost('VatAmount');
                $TotalPIVat = $this->request->getPost('TotalPIVat');
                $Remarks = $this->request->getPost('Remarks');
                $ItemName = $this->request->getPost('ItemName');
                $Itemid = $this->request->getPost('Itemid');
                foreach ($Unit_priceEV as $key => $value) {
                    //echo $OPrice[$key];
                    //echo $key;
                    $PSchedule->save([
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'TenderId' => $this->request->getPost('TenderId'),
                        'Itemid' => $Itemid[$key],
                        'ItemName' => $ItemName[$key],
                        'Item' => $key,
                        'Qty' => $Qty[$key],
                        'Unit_priceEV' => $value,
                        'PriceLItem' => floatval($Qty[$key]) * floatval($value),
                        'OPrice' => $OPrice[$key],
                        'TotalPEVat' => floatval(($Qty[$key] * $value)) + floatval($OPrice[$key]),
                        'Discount' => $Discount[$key],
                        'TotalwithDiscount' => (floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key]),
                        'VAT' => $VAT[$key],
                        'VatAmount' => ((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) * floatval($VAT[$key]) / 100,
                        'TotalPIVat' => ((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) + (((floatval($Qty[$key] * $value) + floatval($OPrice[$key])) - floatval($Discount[$key])) * floatval($VAT[$key]) / 100),
                        'SubmittedDate' => date("Y-m-d"),
                    ]);
                }
            }
            $SSpec = new SSpecificationModel();
            if ($this->request->getMethod() == 'post') {
                $SubComponent = $this->request->getPost('SubComponent');
                $Detail = $this->request->getPost('Detail');
                $Priority = $this->request->getPost('Priority');
                $BiddersOffer = $this->request->getPost('BiddersOffer');
                $Remarks = $this->request->getPost('Remarks');
                $Item = $this->request->getPost('Item');
                $IId = $this->request->getPost('IId');
                $ItemName = $this->request->getPost('ItemName');
                foreach ($BiddersOffer as $key => $value) {
                    $SSpec->save([
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'IId' => $IId[$key],
                        'Item' => $Item[$key],
                        'ItemName' => $ItemName[$key],
                        'SubComponent' => $SubComponent[$key],
                        'Detail' => $Detail[$key],
                        'Priority' => $Priority[$key],
                        'SpecId' => $key,
                        'TenderId' => $this->request->getPost('TenderId'),
                        'BiddersOffer' => $value,
                        'Remarks' => $Remarks[$key],
                        'SubmittedDate' => date("Y-m-d"),
                    ]);
                }
            }

            // Assuming you've already included the SgoodsDeliveryModel
            // Assuming you've wrapped your form inputs inside a form element and it's being submitted via POST method
            $SDelivery = new SgoodsDeliveryModel();
            if ($this->request->getMethod() == 'post') {
                $deliverydate = $this->request->getPost('deliverydate');
                foreach ($deliverydate as $key => $value) {
                    $SDelivery->save([
                        'UserId' => session()->get('UserId'),
                        'AnnounceId' => $this->request->getPost('AnnounceId'),
                        'Item' => $key,
                        'TenderId' => $this->request->getPost('TenderId'),
                        'deliverydate' => $value,
                        'SubmittedDate' => date("Y-m-d"),
                    ]);
                }
            }
            if ($this->request->getMethod() == 'post') {
                $BidSubmissionform = $this->request->getFile('BidSubmissionform');
                $rules = [
                    'BidSubmissionform' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BidSubmissionform]|permit_empty'
                        . '|mime_in[BidSubmissionform,application/pdf]'
                        . '|max_size[BidSubmissionform,1000]', // Adjust the maximum file size as needed
                    ],
                    'BIDBond' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BIDBond]|permit_empty'
                        . '|mime_in[BIDBond,application/pdf]'
                        . '|max_size[BIDBond,10000]',
                    ],
                    'BRegistration' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[BRegistration]|permit_empty'
                        . '|mime_in[BRegistration,application/pdf]'
                        . '|max_size[BRegistration,1000]', // Adjust the maximum file size as needed
                    ],
                    'PCA3' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[PCA3]|permit_empty'
                        . '|mime_in[PCA3,application/pdf]'
                        . '|max_size[PCA3,1000]', // Adjust the maximum file size as needed
                    ],
                    'manufactureAuthorization' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[manufactureAuthorization]|permit_empty'
                        . '|mime_in[manufactureAuthorization,application/pdf]'
                        . '|max_size[manufactureAuthorization,1000]', // Adjust the maximum file size as needed
                    ],
                    'manufacturebrochures' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[manufacturebrochures]|permit_empty'
                        . '|mime_in[manufacturebrochures,application/pdf]'
                        . '|max_size[manufacturebrochures,1000]', // Adjust the maximum file size as needed
                    ],
                    'otherDOC' => [
                        'label' => 'PDF File',
                        'rules' => 'uploaded[otherDOC]|permit_empty'
                        . '|mime_in[otherDOC,application/pdf]'
                        . '|max_size[otherDOC,10000]',
                    ],
                ];

                if (!$this->validate($rules)) {
                    $data['validation'] = $this->validator;
                    //return view('web/viewtender',$data);
                } else {
                    //print_r($BidSubmissionform);
                    echo $BidSubmissionform->getName();
                    if (!empty($BidSubmissionform->getName())) {

                        $BSubmissionnewName = $BidSubmissionform->getRandomName();
                        $BidSubmissionform->move('public/images/' . 'uploads2', $BSubmissionnewName);

                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BSubmissionnewName,
                            'fileType' => 'BidSubmissionform',
                        ]);
                    }
                    $BIDBond = $this->request->getFile('BIDBond');
                    if (!empty($BIDBond->getName())) {
                        $BIDBondnewName = $BIDBond->getRandomName();
                        $BIDBond->move('public/images/' . 'uploads2', $BIDBondnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BIDBondnewName,
                            'fileType' => 'Bid Bond',
                        ]);
                    }
                    $BRegistration = $this->request->getFile('BRegistration');
                    if (!empty($BRegistration->getName())) {
                        $BRegistrationnewName = $BRegistration->getRandomName();
                        $BRegistration->move('public/images/' . 'uploads2', $BRegistrationnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $BRegistrationnewName,
                            'fileType' => 'BRegistration',
                        ]);
                    }
                    $PCA3 = $this->request->getFile('PCA3');
                    if (!empty($PCA3->getName())) {
                        $PCA3newName = $PCA3->getRandomName();
                        $PCA3->move('public/images/' . 'uploads2', $PCA3newName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $PCA3newName,
                            'fileType' => 'PCA3',
                        ]);
                    }
                    $manufactureAuthorization = $this->request->getFile('manufactureAuthorization');
                    if (!empty($manufactureAuthorization->getName())) {
                        $manufactureAuthorizationnewName = $manufactureAuthorization->getRandomName();
                        $manufactureAuthorization->move('public/images/' . 'uploads2', $manufactureAuthorizationnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $manufactureAuthorizationnewName,
                            'fileType' => 'Manufacture Authorization',
                        ]);
                    }
                    $manufacturebrochures = $this->request->getFile('manufacturebrochures');
                    if (!empty($manufacturebrochures->getName())) {
                        $manufacturebrochuresnewName = $manufacturebrochures->getRandomName();
                        $manufacturebrochures->move('public/images/' . 'uploads2', $manufacturebrochuresnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $manufacturebrochuresnewName,
                            'fileType' => 'manufacturebrochures',
                        ]);
                    }
                    $otherDOC = $this->request->getFile('otherDOC');
                    if (!empty($otherDOC->getName())) {
                        $otherDOCnewName = $otherDOC->getRandomName();
                        $otherDOC->move('public/images/' . 'uploads2', $otherDOCnewName);
                        $NCBDoc = new SDocumentModel();
                        $NCBDoc->save([
                            'UserId' => session()->get('UserId'),
                            'AnnounceId' => $this->request->getPost('AnnounceId'),
                            'TenderId' => $this->request->getPost('TenderId'),
                            'BidDOC' => $otherDOCnewName,
                            'fileType' => 'Other Document',
                        ]);
                    }
                }
            }

            return view('web/viewtenders', $data);
            /* }else{
              return view('web/payDocumentCharges');
              //echo 'pay';

              } */
        } else {
            return redirect()->to('web/login');
        }
    }

    public function viewSOpenedBid($AId = null, $TId = null, $UserId = null) {
        date_default_timezone_set("Asia/Colombo");

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailssys($AId);
        echo $invitation->getLastQuery()->getQuery();

        return view('web/viewSOpenedBid', $data);
    }

    public function viewSAppliedBidders($AId = null, $TId = null, $UserId = null) {
        date_default_timezone_set("Asia/Colombo");

        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $doccharges = new DocumentchargeModel();
        $Bidders = new OpeningRemarksModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetailssys($AId);
        $data['listB'] = $Bidders->GetappliedbidderSDetails($AId, $TId);
        echo $Bidders->getLastQuery()->getQuery();
        return view('web/viewSAppliedBidders', $data);
    }
}
