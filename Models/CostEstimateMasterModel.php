<?php

namespace App\Models;
use CodeIgniter\Model;
class CostEstimateMasterModel extends Model{
    protected $table="CostestimateMaster";
    protected $primaryKey="Estimate_ID";
    protected $allowedFields =['Estimate_ID','TId','IId','Item','ItemName','UCost','Qty','Total_Cost','TOCost','vat','vatAmmount','ETotalC','StatusC'];

    public function getCostEstinateMasterDetails($TId=null) {
        $query = $this->query("
        SELECT * 
        FROM `CostestimateMaster`
        JOIN `titem` ON `titem`.`Item`=`costestimatemaster`.`Item`
        WHERE `costestimatemaster`.`TId` = '$TId'");
        
    $result = $query->getResultArray();
    return $result;
    }
    //TEC Evaluation
    public function getCostEstinateDetails($TId=null) {
        $query = $this->query("
        SELECT * 
        FROM `CostestimateMaster`     
        WHERE `costestimatemaster`.`TId` = '$TId'");
        
    $result = $query->getResultArray();
    return $result;
    }
     public function getCostEstinateMasterDetailsold($TId=null) {
      
        $data=$this->join('titem','titem.Item=costestimatemaster.Item')->where('costestimatemaster.TId',$TId)->get()->getResultArray();
        return $data;
    }
    
}