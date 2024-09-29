<?php

namespace App\Models;

use CodeIgniter\Model;

class DTECRemarksModel extends Model {

    protected $table = "dtecremarks";
    protected $primaryKey = "id";
    protected $allowedFields = ['id','TenderId', 'Remarks', 'SubmitedDate','Mchairmen'];

    
    
     //View DTEC report
    public function getDTECmarks($Tenderid=null) {
    $query = $this->query("
        SELECT *
        FROM dtecremarks i WHERE i.TenderId='$Tenderid'");
        $result = $query->getResultArray();
    return $result;
    }
}
