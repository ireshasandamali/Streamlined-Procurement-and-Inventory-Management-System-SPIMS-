<?php

namespace App\Models;
use CodeIgniter\Model;
class ProcurementItemModel extends Model{
    protected $table="procuremenyitem";
    protected $primaryKey="id";
    protected $allowedFields =['id','ItemName','Quantity','Cost','PStatus','Authority','PType','Progress','CommeDate','CompleateDate','PId'] ;

    
     public function getProItemdetails($ProId=null) {
        $query = $this->query("
        SELECT * FROM procuremenyitem i  where i.PId='$ProId'");
        $result = $query->getResultArray();
        return $result;
    }
    
    
     public function getProyear() {
        $query = $this->query("
        SELECT * FROM `procuremenyitem` ORDER BY PId");
        $result = $query->getResultArray();
        return $result;
    }
    
}