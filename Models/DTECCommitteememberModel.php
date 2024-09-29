<?php

namespace App\Models;
use CodeIgniter\Model;
class DTECCommitteememberModel extends Model{
    protected $table="DTECCMember";
    protected $primaryKey="Membereid";
    protected $allowedFields =['Membereid','EmpId','TMId'] ;

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
    
   
   
    
}