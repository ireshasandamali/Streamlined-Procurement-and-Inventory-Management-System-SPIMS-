<?php

namespace App\Models;

use CodeIgniter\Model;

class TECreportModel extends Model {

    protected $table = "tecreportdetails";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'TenderId', 'Panalysis', 'Tanalysis','Fanalysis','Recomend','date_submitted'];
    
     //view data for viewtenderapprovL.php
    public function GetTECRecomendDetails($TId = null) {
        $query = $this->query("
         SELECT *
         FROM `tecreportdetails` 
         WHERE tecreportdetails.TenderId = '$TId'");
        $result = $query->getResultArray();
        return $result;
    }

}
