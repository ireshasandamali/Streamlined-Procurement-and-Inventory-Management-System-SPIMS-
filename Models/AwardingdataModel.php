<?php

namespace App\Models;

use CodeIgniter\Model;

class AwardingdataModel extends Model {

    protected $table = "awarddata";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'TenderId','VendorId','Totalcost','ADate'];

  
    
    //view data for voteleddger.php
    public function voteDeduction($TId = null) {
        $query = $this->query("
        SELECT * FROM awarddata a 
        INNER JOIN tender t ON t.Tenderid = a.TenderId
        INNER JOIN vote v ON v.Vote = t.ICategory
        GROUP BY t.Tenderid");
        $result = $query->getResultArray();
        return $result;
    }


    //awarding leeter of intent
    public function GetlointentDetails($TId = null,$VendorId=null) {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM PCmarks    
        LEFT JOIN tender t ON t.Tenderid = PCmarks.TenderId     
        WHERE marks = '1'  AND PCmarks.TenderId ='$TId' AND PCmarks.VendorId ='$VendorId'  GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
  
    
}
