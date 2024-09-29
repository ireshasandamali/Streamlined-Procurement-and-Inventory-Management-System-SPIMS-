<?php

namespace App\Controllers;
use App\Models\EmployeeModel;
use App\Models\NonRegisteredSupplierModel;
use App\Models\RequestModel;
use App\Models\TenderModel;
use App\Models\UserModel;
use App\Models\CampModel;
use App\Models\ItemcategoryModel;
use App\Models\VoteModel;
use App\Models\ProcurementPlanModel;
use App\Models\ProcurementItemModel;

class Sys extends BaseController {

    public function index() {
        helper('form');
        echo view("sys/login");
    }

   public function dashboard() {
    $user_type = str_replace(' ','',strtolower(session()->get('UserType')));

    $userreg = new UserModel();
    $data['listU'] = $userreg->findAll();
    $employee = new EmployeeModel();
    $data['list'] = $employee->findAll();
    $NumberofEployees = count($data['list']);
    $data['NumberofEployees'] = $NumberofEployees;

    $nonregSuppliers = new NonRegisteredSupplierModel();
    $data['listB'] = $nonregSuppliers->findAll();
    $nonregSuppliers = count($data['listB']);
    $data['nonregSuppliers'] = $nonregSuppliers;

    $itemrequest = new RequestModel();
    $data['listR'] = $itemrequest->findAll();
    $itemrequest = count($data['listR']);
    $data['itemrequest'] = $itemrequest;

    $item = new ItemcategoryModel();
    $data['listItem'] = $item->findAll();
    $item = count($data['listItem']);
    $data['listItem'] = $item;

    $tender = new TenderModel();
    $data['listT'] = $tender->findAll();
    $tender = count($data['listT']);
    $data['tender'] = $tender;

    $camp = new CampModel();
    $data['listcamp'] = $camp->findAll();
    $camp = count($data['listcamp']);
    $data['camp'] = $camp;

    $procurementPlan = new ProcurementPlanModel();
    $data['listP'] = $procurementPlan->findAll();

    $vote = new VoteModel();
    $data['list'] = $vote->getvotebalanceaspercentage();

    // Pie chart data
    $query = "SELECT v.Vote, v.Description, ROUND(((v.Allocation - IFNULL(SUM(a.Totalcost), 0)) * 100 / v.Allocation), 0) AS percentage
              FROM vote v 
              LEFT JOIN tender t ON t.ICategory = v.Vote 
              LEFT JOIN awarddata a ON a.TenderId = t.Tenderid 
              GROUP BY v.Vote";
    $db = \Config\Database::connect();
    $voteData = $db->query($query)->getResultArray();
    $data['voteData'] = json_encode($voteData);

    echo view('sys/header', $data);
    echo view('sys/menu_' . $user_type);
    echo view('sys/content_' . $user_type, $data);
    echo view('sys/footer');
}

    public function sendEmail() {
        $email = \Config\Services::email();
        $email->setTo('sandamalipathirana0@gmail.com');//reciwer
        $email->setFrom('your_email@gmail.com', 'Your Name');//sender
        $email->setSubject('sandamali Pathirana name subject');//subject
        $msg='<h1>Account verification</h1>';//click ok to verify your account
        $msg.='<a href="http://localhost/IPMS/Sys/verifymyaccount/999">Click here to verfy my account</a>';
        $email->setMessage($msg);
        if ($email->send()) {
            echo 'Email sent successfully';
        } else {
            echo 'Email could not be sent';
            echo $email->printDebugger(['headers']);
        }
    }
    public function verifymyaccount($UserId=null) {
        echo 'You are verified now';
        echo '<br>';
        echo $UserId;
        
    }
}
