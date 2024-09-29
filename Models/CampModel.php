<?php

namespace App\Models;
use CodeIgniter\Model;
class CampModel extends Model{
    protected $table="camp";
    protected $primaryKey="id";
    protected $allowedFields =['id','CNo','CName'];
    
    
    //view vamp
    public function ViewCampbyoder() {
        $query = $this->query("
        SELECT * FROM `camp` ORDER BY CNo");
        $result = $query->getResultArray();
        return $result;
    }

}