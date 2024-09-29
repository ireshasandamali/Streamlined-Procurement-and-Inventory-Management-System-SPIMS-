<?php

namespace App\Models;

use CodeIgniter\Model;

class LoIModel extends Model {

    protected $table = "letterofintent";
    protected $primaryKey = "id";
    protected $allowedFields = ['id','VendorId', 'TenderId','TAwarding','ADate','PBond','CreateDate'];
  
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
