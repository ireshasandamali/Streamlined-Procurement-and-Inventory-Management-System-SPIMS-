<?php

namespace App\Models;
use CodeIgniter\Model;
class ProcurementPlanModel extends Model{
    protected $table="procurementPlan";
    protected $primaryKey="id";
    protected $allowedFields =['id','Year','Vote','Description','Allocation','Status'] ;
    
    public function getProPlanDetails($PId=null) {
        $query = $this->query("
        SELECT * FROM procurementPlan i  where i.id='$PId'");
        $result = $query->getResultArray();
        return $result;
    }
    public function UpdateProcurementPlanDetails($id = null) {
        $query = $this->query("
        UPDATE procurementPlan SET Status='1' WHERE id=$id");
        $result = $query->getResultArray();
        return $result;
    }
    
    public function joinProcurementPlanDetails() {
        $query = $this->query("
        SELECT * FROM procurementPlan p INNER JOIN procuremenyitem i ON p.id=i.PId;");
        $result = $query->getResultArray();
        return $result;
    }
     public function JoinProPlanDetails($VoteId) {
        $query = $this->query("
        SELECT i.id, i.Vote, s.ItemName 
        FROM procurementPlan i 
        LEFT JOIN procuremenyitem s ON i.id = s.PId WHERE i.Vote= '$VoteId'");
        $result = $query->getResultArray();
        return $result;
    }
    public function ProPlanDetails() {
        $query = $this->query("
        SELECT * FROM procurementPlan i 
        LEFT JOIN procuremenyitem s ON i.id = s.PId");
        $result = $query->getResultArray();
        return $result;
    }


    
}