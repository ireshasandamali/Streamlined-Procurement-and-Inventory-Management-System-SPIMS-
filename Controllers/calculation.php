<?php
namespace App\Controllers;
use App\Models\CalModel;


class calculation extends BaseController
{
    public function index()
    {
    
    }
   public function Welcome()
    { 
    
       
        echo view('sys/calculation/Welcome');
        echo view('sys/footer');
    }
    
    
    public function cal()
    {
        helper('form');
        $data = array();
       
         if($this->request->getMethod()=='post'){
            $rules=[
                'item'=>['label'=>'item', 'rules'=>'required'],
               
               
            ];
            if(!$this->validate($rules)){
                $data['validation']=$this->validator;
            }
            else{
                 $a=new CalModel();
        $a->save([
                    'item'=>$this->request->getPost('item'),
                    'qty'=>$this->request->getPost('qty'),
                    'uprise'=>$this->request->getPost('uprise'),
                    'total'=>floatval($this->request->getPost('uprise')) * floatval($this->request->getPost('qty')),
                    'other'=>$this->request->getPost('other'),
                    'discount'=>$this->request->getPost('discount'),
                    'vat'=>$this->request->getPost('vat'), 
                    'prise'=>floatval($this->request->getPost('uprise')) * floatval($this->request->getPost('qty'))-$this->request->getPost('discount'),
                ]);
       

//echo view("sys/employee/add_success",$data);
       $data['msg']="Data Saved";
            }
        }
        
        echo view('sys/header');
        echo view('sys/menu');
        echo view('sys/calculation/cal', $data);
        echo view('sys/footer');
    }
    
    
      public function add() {

        helper('form');
        $data = array();
        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Vote' => ['label' => 'Vote', 'rules' => 'required'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'Allocation' => ['label' => 'Allocation', 'rules' => 'required']
                
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $vote = new VoteModel();
                $vote->save([
                    'Vote' => $this->request->getPost('Vote'),
                    'Description' => $this->request->getPost('Description'),
                    'Allocation' => $this->request->getPost('Allocation')
                ]);

                  // Send verification email
                    $email = \Config\Services::email();
                    //check to get mail
                    //$email->setTo($this->request->getPost('Email'));
                    $email->setTo('sandamalipathirana0@gmail.com');
                    $email->setFrom('sandamalipathirana0@gmail.com', 'SPIMS');
                    $email->setSubject('Tender Opening Meeting');
                    $message = '<h1>Tender Opening Meeting will be held on </h1>';
                    $message .= '<a href="http://localhost/IPMS/sys/' . '">login to the SPIM System</a>';
                    $email->setMessage($message);
                    $email->send();
                    $data['msg'] = "Tender Opening will be held on . ";
                }
                $data['msg'] = "Meeting Successfully  Created";
            }
        
             'date' => date("Y-m-d"),
             'UserId' => session()->get('UserId'),
            $user = new UserModel();
            $useremail = $user->where('UserId', $VId)->first();
            $useremail = $user->where('UserId', $this->request->getPost('Description'))->first();
             
           $Remail = $useremail['email'];
           //in email part
            $email->setTo($Remail);
            
        echo $vote->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/practice/add', $data);
        echo view("sys/footer");
    }
    
    dissable
                      ?>
                    <div class="text-center">
                       
                         <?php 
                                 
                                 $Odate = $result['BOpen'];
                                     $disabled = null;
                                     $cdate = date('Y-m-d h:i');
                                     if($Odate <=$cdate){
                                         $disabled = 'disabled';
                                     }
                                     
                                     ?>
                       <a class="btn btn-primary <?= @$disabled ?>" href="<?= site_url('web/DOCCharges/'.$resultP['IFBId'].'/'.$resultP['TId'].'/'.session()->get('UserId')) ?>"style="color: white;">Pay Document Charges</a>
                     </div>
                                <?php } ?>
                </div>

}

//get UserId
 $UserId = session()->get('UserId');
        $employee = new EmployeeModel();
        $employid = $employee->where('UserId',$UserId)->first();
        $Ocommittee = new OpeningCommitteememberModel();
        $data['lista'] = $Ocommittee->joinCommitteememberDetails($employid['id'],$AId);
        
    <?php if($lista){ ?>
                                                        
                                                    
                                                    <a class="btn btn-primary <?= $disabled ?>" type="button" href="<?= site_url('SubmitedBid/ViewBidders/'.$resultP['IFBId'].'/'.$resultP['TId']) ?>"style="color: white;">Open</a></td>            
                                                    <?php } ?>
                
 // view only for requester
   <?php if((session()->get('UserType'))=='Requester'){ ?> 
        
        
 public function viewReq() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $itemrequest = new RequestModel();
        $data['list'] = $itemrequest->viewrequest();
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        //echo $camp -> getLastQuery()->getQuery();
        //to identify user and display relevent data
        if ((session()->get('UserType')) == 'Requester') {
            $data['list'] = $itemrequest->where('UserId', session()->get('UserId'))->findAll();
        } else {
            $data['list'] = $itemrequest->findAll();
            echo $itemrequest -> getLastQuery()->getQuery();
        }
        

        /* if((session()->get('UserType'))!='Requester'){
          $data['list'] = $itemrequest->where('UserId',session()->get('UserId'))->findAll();
          }else{
          $data['list'] = $itemrequest->findAll();
          } */
        //echo $itemrequest -> getLastQuery()->getQuery();
        //$data['tender_Status'] = $tender_Status;
        /// $data['tender_Status'] = $itemrequest->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();


        /* if ($user_type == 'Requester') {
          $userId = session()->get('UserId');
          $data['list'] = $itemrequest->where('UserId', $userId)->findAll();
          } else {
          $data['list'] = $itemrequest->findAll();
          } */



        //new search bar to check
       
       

        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $itemrequest->where('ICategory', $this->request->getPost('ICategory'))->findAll();
          } else {
          $data['list'] = $itemrequest->findAll();
          } */
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemrequest/viewReq', $data);
        echo view("sys/footer");
    }
    
    
    //ncb and shopping 
    <?php if (strtotime($result['BEnd']) - strtotime($result['BStart']) >= 7 * 24 * 60 * 60): ?>
    
    
    
    <?php endif; ?>

    
    SELECT *,
       DATEDIFF(BEnd, BStart) AS date_difference
FROM announcement;
