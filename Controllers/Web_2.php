<?php

namespace App\Controllers;

use App\Models\RegSupplierModel;
use App\Models\UserModel;
use App\Models\CustomerModel;
use App\Models\SupplierModel;
use App\Models\UsersModel;
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

class Web extends BaseController {

    public function index() {
      
        $announcement = new AnnouncementModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement ->where('RefNumber', $this->request->getPost('RefNumber'))->findAll();
        } else {
            $data['list'] =$announcement ->findAll();
        }
        return view('web/index',$data);
    }
    public function login(){
        helper('form');
        echo view("web/login");
        
    }
      public function newBid() {

        $announcement = new AnnouncementModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement ->where('RefNumber', $this->request->getPost('RefNumber'))->findAll();
        } else {
            $data['list'] =$announcement ->findAll();
            
        }
        return view('web/newBid',$data);
    }
     public function viewdetailedBid($AId = null) {
        date_default_timezone_set("Asia/Colombo");
        $announcement = new AnnouncementModel();
        $invitation = new InvitationModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $data['listP'] = $invitation->getinvitationDetails($AId);
       /* if ($this->request->getMethod() == 'post') {
            $data['list'] = $announcement ->where('id', $this->request->getPost('id'))->first();
            $data['listP'] = $invitation->where('IFBId', $this->request->getPost('IFBId'))->findAll();
        } else {
            $data['list'] =$announcement ->findAll();
            $data['listP'] = $invitation->where('IFBId', $IFBId)->findAll();
        }*/
        return view('web/viewdetailedBid',$data);
    }
    
    public function viewtender($IFBId = null, $TId = null, $specId = null) {
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
        if ($this->request->getMethod() == 'post') {
           // print_r($this->request->getPost('Unit_priceEV'));
            $Unit_priceEV = $this->request->getPost('Unit_priceEV');
            $PriceLItem = $this->request->getPost('UCost') * $this->request->getPost('Qty');
            $OPrice = $this->request->getPost('OPrice');
            $TotalPEVat = $this->request->getPost('TotalPEVat');
            $DTotal = $this->request->getPost('DTotal');
            $VAT= $this->request->getPost('VAT');
            $TotalPIVat =$this->request->getPost('TotalPIVat');
            $BiddersOffer= $this->request->getPost('BiddersOffer');
            $Remarks= $this->request->getPost('Remarks');
            foreach ($Unit_priceEV  as $key=>$value){               
                echo $OPrice[$key];
                 $Unit_priceEV = $Unit_priceEV[$key];
                 $PriceLItem = $PriceLItem[$key];
                 $OPrice = $OPrice[$key];
                 $TotalPEVat = $TotalPEVat[$key];
                 $DTotal = $DTotal[$key];
                 $VAT = $VAT[$key];
                 $TotalPIVat = $TotalPIVat[$key];
                 $BiddersOffer = $BiddersOffer[$key];
                 $Remarks = $Remarks[$key];
                 echo $qty;
                
            }
            /*$rules = [
            'Item' => ['label' => 'Item', 'rules' => 'required'],
            'Qty' => ['label' => 'Qty', 'rules' => 'required'],
            'Unit_priceEV' => ['label' => 'Unit_priceEV', 'rules' => 'required'],
            'PriceLItem' => ['label' => 'PriceLItem', 'rules' => 'required'],
            'OPrice' => ['label' => 'OPrice', 'rules' => 'required'],
            'TotalPEVat' => ['label' => 'TotalPEVat', 'rules' => 'required'],
            'DTotal' => ['label' => 'DTotal', 'rules' => 'required'],
            'DTotal' => ['label' => 'VAT', 'rules' => 'required'],
            'TotalPIVat' => ['label' => 'TotalPIVat', 'rules' => 'required'],
            'BiddersOffer' => ['label' => 'BiddersOffer', 'rules' => 'required'],
            'Remarks' => ['label' => 'Remarks', 'rules' => 'required'],
            'UploadDOC' => [
            'label' => 'Image File',
            'rules' => 'uploaded[UploadDOC]'
            . '|is_image[UploadDOC]'
            . '|mime_in[UploadDOC,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
            . '|max_size[UploadDOC,100]'
            . '|max_dims[UploadDOC,1024,768]',
            ], 
            ];*/

            /*if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {*/
                /* $UploadDOC = $this->request->getFile('UploadDOC');
                  $newName = $UploadDOC->getRandomName();
                  $UploadDOC->move('public/images/' . 'uploads', $newName); */
               // $PSchedule = new SPriceScheduleModel();
               // echo $PSchedule->getLastQuery()->getQuery();
                  $PSchedule->save([
                   'IId' => $this->request->getPost('Item'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Unit_priceEV' => $Unit_priceEV[$key],
                    'PriceLItem' => $this->request->getPost('UCost') * $this->request->getPost('Qty'),
                    'OPrice' => $this->request->getPost('OPrice'),
                    'TotalPEVat' => floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice')),
                    'Discount' => $this->request->getPost('Discount'),
                    'DiscountAmount' => (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice'))) * floatval($this->request->getPost('Discount')) / 100,
                    'TotalwithDiscount' => floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice')) - (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice'))) * floatval($this->request->getPost('Discount')) / 100,
                    'VAT' => $this->request->getPost('VAT'),
                    'VatAmount' => (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice')) - (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice'))) * floatval($this->request->getPost('Discount')) / 100) * floatval($this->request->getPost('VAT')) / 100,
                    'TotalPIVat' => floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice')) - (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice'))) * floatval($this->request->getPost('Discount')) / 100 - (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice')) - (floatval($this->request->getPost('UCost')) * floatval($this->request->getPost('Qty')) + floatval($this->request->getPost('OPrice'))) * floatval($this->request->getPost('Discount')) / 100) * floatval($this->request->getPost('VAT')) / 100,
                    'BiddersOffer' => $this->request->getPost('BiddersOffer'),
                    'Remarks' => $this->request->getPost('Remarks'),
                    'UploadDOC' => $this->request->getPost('UploadDOC'),
                ]);
               // $data['msg'] = "Submit the BID Succsessfully";
         //   }
        }
        return view('web/viewtender', $data);
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
         return view('web/WebProcurementPlan',$data);
     }
     
     
      public function viewprocurement($ProId=null) {
        helper('form');
        $data = array();
        $procurementPlan = new ProcurementPlanModel();
        $procurementItem = new ProcurementItemModel();
        
        $data['list'] = $procurementPlan->getProPlanDetails($ProId);
       
        $data['listI'] = $procurementItem->getProItemdetails($ProId);
 echo $procurementItem -> getLastQuery()->getQuery();
        /* if ($this->request->getMethod() == 'post') {
            $data['list'] = $procurementPlan->where('Vote', $this->request->getPost('Vote'))->findAll();
               $data['listI'] = $procurementItem->where('PId', $this->request->getPost('PId'))->findAll();
               
        } else {
            $data['list'] = $procurementPlan->findAll();
             $data['listI'] = $procurementItem->where('PId', $PId)->findAll();
        }*/
        
       
        return view('web/viewprocurement',$data);
    }
      public function VoteLedger() {

       $vote = new VoteModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $vote->where('Vote', $this->request->getPost('Vote'))->findAll();
        } else {
            $data['list'] = $vote->findAll();
        }
        return view('web/VoteLedger',$data);
    }
    
     public function WebRequest() {

       $itemrequest = new RequestModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $itemrequest->where('ICategory', $this->request->getPost('ICategory'))->findAll();
        } else {
            $data['list'] = $itemrequest->findAll();
        }
        return view('web/WebRequest',$data);
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
    public function viewmore($TId=null,$IFBId=null) {
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
        return view('web/registeredSupplier');
    }

    public function save_registeredSupplier() {
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
                'street_line2' => ['label' => 'Street Line2', 'rules' => 'required'],
                'city' => ['label' => 'City', 'rules' => 'required'],
                'province' => ['label' => 'Province', 'rules' => 'required'],
                'country' => ['label' => 'Country', 'rules' => 'required'],
                'Titles' => ['label' => 'Titles', 'rules' => 'required'],
                'business_owner_Fname' => ['label' => 'Business Owner Fname', 'rules' => 'required'],
                'business_owner_Lname' => ['label' => 'Business Owner Lname', 'rules' => 'required'], 
                'ostreet' => ['label' => 'Owner Street', 'rules' => 'required'],
                'ostreet_line2' => ['label' => 'Owner Street Line2', 'rules' => 'required'],
                'ocity' => ['label' => 'City', 'rules' => 'required'],
                'nic' => ['label' => 'NIC', 'rules' => 'required'],
                'prefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'phone' => ['label' => 'Phone', 'rules' => 'required'],
                'Email' => ['label' => 'Email', 'rules' => 'required'], 
                'CTitles' => ['label' => 'Titles', 'rules' => 'required'],
                'Contact_person_Fname' => ['label' => 'Contact person Fname', 'rules' => 'required'],
                'Contact_person_Lname' => ['label' => 'Contact person Lname', 'rules' => 'required'],
                'Cstreet' => ['label' => 'Contact person Street', 'rules' => 'required'],
                'Cstreet_line2' => ['label' => 'Contact person Street Line2', 'rules' => 'required'],
                'Ccity' => ['label' => 'Contact person City', 'rules' => 'required'],
                'Cnic' => ['label' => 'NIC', 'rules' => 'required'],
                'Cprefix' => ['label' => 'Prefix', 'rules' => 'required'],
                'Cphone' => ['label' => 'Phone', 'rules' => 'required'],
                'CEmail' => ['label' => 'Email', 'rules' => 'required'],
                'UserName' => ['label' => 'User Name', 'rules' => 'required|min_length[4]'],
                'Password' => ['label' => 'Password', 'rules' => 'required|min_length[8]']
               
            ];
            
              if (!$this->validate($rules)){
                  $data['validation'] = $this->validator;
                return view('web/registeredSupplier', $data); 
              
              }  else {
                  
                $userreg = new UserModel();
                $userreg->save([
                    'UserName' => $this->request->getPost('UserName'),
                    'Password' => $this->request->getPost('Password'),
                    'UserType' => 'registeredsuppliers',
                ]);

                               // $userid = $userreg->getInsertID();

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
                    'street_line2' => $this->request->getPost('street_line2'),
                    'ocity' => $this->request->getPost('ocity'),
                    'province' => $this->request->getPost('province'),
                    'country' => $this->request->getPost('country'),
                    'Titles' => $this->request->getPost('Titles'),
                    'business_owner_Fname' => $this->request->getPost('business_owner_Fname'),                 
                    'business_owner_Lname' => $this->request->getPost('business_owner_Lname'),
                    'ostreet' => $this->request->getPost('ostreet'),
                    'ostreet_line2' => $this->request->getPost('ostreet_line2'),
                    'nic' => $this->request->getPost('nic'),
                    'prefix' => $this->request->getPost('prefix'),
                    'phone' => $this->request->getPost('phone'),
                    'Email' => $this->request->getPost('Email'),
                    'CTitles' => $this->request->getPost('CTitles'),
                    'Contact_person_Fname' => $this->request->getPost('Contact_person_Fname'),                 
                    'Contact_person_Lname' => $this->request->getPost('Contact_person_Lname'),
                    'Cstreet' => $this->request->getPost('Cstreet'),
                    'Cstreet_line2' => $this->request->getPost('Cstreet_line2'),
                     'Ccity' => $this->request->getPost('Ccity'),
                    'Cnic' => $this->request->getPost('Cnic'),
                    'Cprefix' => $this->request->getPost('Cprefix'),
                    'Cphone' => $this->request->getPost('Cphone'),
                    'CEmail' => $this->request->getPost('CEmail'),
                    'UserId' =>$userid,
                ]);
               // echo 'Successfully Registered to the SPIMS...!';
     echo '<p style="color: green; font-size: 18px; font-weight: bold;">Successfully Registered to the SPIMS...!</p>';
     echo 'Your Registration Id is ';

            }
              
        }
    }

    public function register() {
        helper('form');
        return view('web/register');
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
                 return view('web/register',$data);
            }else{
                $profile_image = $this->request->getFile('profile_image');
                $newName = $profile_image->getRandomName();
                $profile_image->move('public/images/' . 'uploads', $newName);
                
                $user=new UserModel();
                $user->save([
                    'UserName'=>$this->request->getPost('UserName'),
                    'Password'=>$this->request->getPost('Password'),                    
                    'UserType'=>'Customer',
                    'profile_image' => $newName,
                ]);
                
                $userid=$user->getInsertID();
                
                $customer=new CustomerModel();
                $customer->save([
                    'FirstName'=>$this->request->getPost('FirstName'),
                    'LastName'=>$this->request->getPost('LastName'), 
                    'Email'=>$this->request->getPost('Email'), 
                    'UserId'=>$userid,
                ]);
                echo 'Saved...!';
            }
        }
    }
}