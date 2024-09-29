<?php

namespace App\Models;
use CodeIgniter\Model;
class OpeningCommitteememberModel extends Model{
    protected $table="OCMember";
    protected $primaryKey="OMembereid";
    protected $allowedFields =['OMembereid','EmpId','TMId'] ;

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
    
   public function joinCommitteememberDetails($EmpId=null, $AId=null) {
    $query = $this->query("
        SELECT * FROM ocommittee O 
        LEFT JOIN ocmember c ON c.TMId = o.id WHERE c.EmpId='$EmpId' AND o.BOpenId='$AId'");
        $result = $query->getResultArray();
    return $result;
    }
    
   
    
}