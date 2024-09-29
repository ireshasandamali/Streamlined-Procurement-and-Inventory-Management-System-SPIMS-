<?php

namespace App\Models;

use CodeIgniter\Model;

class PCreportModel extends Model {

    protected $table = "pcaward";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'TenderId', 'Approval','date_submitted'];
    
     //view data for viewtenderapprovL.php
    public function GetPCRecomendDetails($TId = null) {
        $query = $this->query("
         SELECT *
         FROM `pcaward` 
         WHERE pcaward.TenderId = '$TId'");
        $result = $query->getResultArray();
        return $result;
    }
    
    

}
