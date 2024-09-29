<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemcategoryModel extends Model {

    protected $table = "Itemcategorylist";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'Vote', 'Description','ICatergory','ItemName', 'Status'];

    
     public function JoinItemcatergoryDetails($VoteId) {
        $query = $this->query("
        SELECT * FROM Itemcategorylist i 
        LEFT JOIN ItemNamelist s ON i.id = s.ItemVID WHERE i.id= '$VoteId'");
        $result = $query->getResultArray();
        return $result;
    }
     public function JoinItemcatergorys() {
        $query = $this->query("
        SELECT * FROM Itemcategorylist i 
        LEFT JOIN ItemNamelist s ON i.id = s.ItemVID");
        $result = $query->getResultArray();
        return $result;
    }
    public function getrequesttenderhistroy($ItemId = null) {
        $query = $this->query("
        SELECT *
FROM Itemcategorylist i 
LEFT JOIN tender t ON t.ICategory=i.Vote
LEFT JOIN titem a ON a.TId=t.Tenderid WHERE a.Item='100'");
        $result = $query->getResultArray();
        return $result;
    }
  
}
