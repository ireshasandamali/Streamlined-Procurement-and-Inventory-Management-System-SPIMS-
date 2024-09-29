<?php

namespace App\Models;
use CodeIgniter\Model;
class CommitteememberModel extends Model{
    protected $table="CMember";
    protected $primaryKey="Membereid";
    protected $allowedFields =['Membereid','EmpId','TMId'] ;

    //BId Evaluation
   public function joinCommitteememberDetailswithemployeetable($TId=null) {
    $query = $this->query("
        SELECT *
        FROM CMember c
        LEFT JOIN Committee i ON c.TMId = i.Committeeid
        LEFT JOIN employee e ON c.EmpId = e.id
        WHERE i.Purpose ='TEC' AND i.PNumber='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
     //TEchnical Evaluation find assign members
    public function joinCommitteememberDetails($EmpId=null, $TId=null) {
    $query = $this->query("
        SELECT * FROM Committee O 
        LEFT JOIN CMember c ON c.TMId = o.Committeeid WHERE o.Purpose ='TEC' AND c.EmpId='$EmpId' AND o.PNumber='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
     //TEchnical Evaluation find assign members
    public function joinDCommitteememberDetails($EmpId=null, $TId=null) {
    $query = $this->query("
        SELECT * FROM Committee O 
        LEFT JOIN CMember c ON c.TMId = o.Committeeid WHERE o.Purpose ='DTEC' AND c.EmpId='$EmpId' AND o.PNumber='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
    
    
}