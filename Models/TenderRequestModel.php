<?php

namespace App\Models;
use CodeIgniter\Model;
class TenderRequestModel extends Model{
    protected $table="tender_request";
    protected $primaryKey="id";
    protected $allowedFields =['id','TenderId','RequestId'] ;
    
    
    //Cretate date
     public function getcreatedate($Tenderid=null) {
        $query = $this->query("
        SELECT * FROM tender_request t 
        LEFT JOIN itemrequest i ON i.RequestID = t.RequestId
        WHERE t.Tenderid='$Tenderid'");
        $result = $query->getResultArray();
        return $result;
    }
}