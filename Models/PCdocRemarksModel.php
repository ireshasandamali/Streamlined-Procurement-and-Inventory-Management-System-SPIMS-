<?php

namespace App\Models;

use CodeIgniter\Model;

class PCdocRemarksModel extends Model {

    protected $table = "pcdremarks";
    protected $primaryKey = "id";
    protected $allowedFields = ['id','TenderId', 'Remarks1', 'SubmitedDate','Pchairmen'];

    
    
     //View Bidders
    public function getDTECmarks($Tenderid=null) {
    $query = $this->query("
        SELECT *
        FROM dtecremarks i WHERE i.TenderId='$Tenderid'");
        $result = $query->getResultArray();
    return $result;
    }
}
