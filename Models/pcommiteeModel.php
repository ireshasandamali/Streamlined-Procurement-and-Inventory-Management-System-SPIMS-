<?php

namespace App\Models;
use CodeIgniter\Model;
class pcommiteeModel extends Model{
    protected $table="PCommittee";
    protected $primaryKey="id";
    protected $allowedFields =['id','PMDate'];
    
    
     public function getMeetingDetails($PMId=null) {
        $query = $this->query("
        SELECT * FROM PCommittee i  where i.id='$PMId'");
        $result = $query->getResultArray();
        return $result;
    }
}