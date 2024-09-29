<?php

namespace App\Models;
use CodeIgniter\Model;
class TaskModel extends Model{
    protected $table="task";
    protected $primaryKey="id";
    protected $allowedFields =['id','CNo','CName'];
    
    
    //view vamp
    public function ViewCampbyoder() {
        $query = $this->query("
        SELECT * FROM `task` ORDER BY CNo");
        $result = $query->getResultArray();
        return $result;
    }

}