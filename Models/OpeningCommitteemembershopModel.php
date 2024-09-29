<?php

namespace App\Models;
use CodeIgniter\Model;
class OpeningCommitteemembershopModel extends Model{
    protected $table="OsCMember";
    protected $primaryKey="OMembereids";
    protected $allowedFields =['OMembereids','EmpId','TMId'] ;

   public function joinCommitteememberDetailswithemployeetable($TId=null) {
    $query = $this->query("
        SELECT *
        FROM OsCMember c
        LEFT JOIN Committee i ON c.TMId = i.Committeeid
        LEFT JOIN employee e ON c.EmpId = e.id
        WHERE i.Purpose ='TEC' AND i.PNumber='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
    
   
   
    
}