<?php

namespace App\Validation;

use App\Models\TenderModel;
use App\Models\RequestModel;
use App\Models\AssignopeningCommitteeModel;
use App\Models\InvitationModel;
use App\Models\CampModel;
use App\Models\VoteModel;
use App\Models\SupplierCatergoryModel;
use App\Models\CostEstimateMasterModel;

class ProcurementRules {

    public function validateTenderDate(string $str, string $fields, array $data) {
        $itemRequest = new RequestModel();
        $tender = new TenderModel();      
    }
 /*public function validatecampNo(string $str, string $fields, array $data) {
      $camp = new CampModel();
      $campno= $camp->where(['CNo'=>$data['CNo'],'CName'=>$data['CName']])->first();
      if($campno){
          return false;
      }
    }*/
   public function validatecamoNo(string $str, string $fields, array $data) {
       $vote = new VoteModel();
     
    }

    public function validatetender(string $str, string $fields, array $data) {
          $model = new AssignopeningCommitteeModel();
            $master = $model->where(['BOpen' => $data['BOpen'], 'Purpose' => $data['Purpose']])->first();
        if ($master){
            return false;
        }
    }
    //ekama tender ekata invitation godakda
    public function validinvitation(string $str, string $fields, array $data) {
          $model = new InvitationModel();
            $masters = $model->where(['TId' => $data['PNumber'], 'DCharges' => $data['DCharges']])->first();
            //TId is the table data, PNumber is the data from form
            //echo $model -> getLastQuery()->getQuery();
        if ($masters){
            return false;
        }
    }
    public function validatecampNo(string $str, string $fields, array $data) {
         $camp = new CampModel();
            $masters = $camp->where(['CNo' => $data['CNo'], 'CName' => $data['CName']])->first();
            //echo $model -> getLastQuery()->getQuery();
        if ($masters){
            return false;
        }
    }
    
      public function validatecostestimate(string $str, string $fields, array $data) {
          $Mestimate = new CostEstimateMasterModel();
            $masters = $Mestimate->where(['Item' => $data['Item'], 'UCost' => $data['UCost']])->first();
            //echo $model -> getLastQuery()->getQuery();
        if ($masters){
            return false;
        }
    }
    public static function checkcampExistence(string $str, string $fields, array $data): bool
    {
        $campModel = new CampModel();

        // Check if the CNo already exists in the database
        $count = $campModel->where('CNo', $str)->countAllResults();

        // Return false if CNo already exists, true otherwise
        return $count === 0;
    }
    
     public static function checkVoteExistence(string $str, string $fields, array $data): bool
    {
          $vote = new VoteModel();
        $count = $vote->where('Vote', $str)->countAllResults();
        return $count === 0;
    }
    
    //to check already entered or not
      public static function checkcategoryExistence(string $str, string $fields, array $data): bool
    {
        $SCategory = new SupplierCatergoryModel();
        $count = $SCategory->where('category', $str)->countAllResults();
        return $count === 0;
    }
   
    
    public function validateinvitation(string $str, string $fields, array $data) {
    $invitation = new InvitationModel();
    
    // Check if PMethod is 'NCB'
    if ($data['PMethod'] === 'NCB') {
        // Check if DCharges is provided
        if (!isset($data['DCharges']) || empty($data['DCharges'])) {
            return false; // DCharges is required when PMethod is 'NCB'
        }
    }

    return true; // Validation passed
}

//IF method is NCB it should add D charges
 public function validateBSecurity(string $str, string $fields, array $data) {
    $invitation = new InvitationModel();
    
    // Check if PMethod is 'NCB'
    if ($data['PMethod'] === 'NCB') {
        // Check if DCharges is provided
        if (!isset($data['BSecurity']) || empty($data['BSecurity'])) {
            return false; // DCharges is required when PMethod is 'NCB'
        }
    }

    return true; // Validation passed
}

 public function validateDocumentCharges(string $str, string $fields, array $data) {
    $invitation = new InvitationModel();
    
    // Check if PMethod is 'NCB'
    if ($data['PMethod'] === 'NationalShopping') {
        // Check if DCharges is provided
             if (isset($data['DCharges']) && !empty($data['DCharges'])) {
            return false; // DCharges is required when PMethod is 'NCB'
        }
    }

    return true; // Validation passed
}
public function validateBidSecurity(string $str, string $fields, array $data) {
    $invitation = new InvitationModel();
    
    // Check if PMethod is 'NCB'
    if ($data['PMethod'] === 'NationalShopping') {
        // Check if DCharges is provided
             if (isset($data['BSecurity']) && !empty($data['BSecurity'])) {
            return false; // DCharges is required when PMethod is 'NCB'
        }
    }

    return true; // Validation passed
}

}
