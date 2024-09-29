<?php

namespace App\Models;

use CodeIgniter\Model;

class BidbonddataModel extends Model {

    protected $table = "bbonddata";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'TenderId','VendorId','ADate','BSecurity','LetterNo'];

  
    
    //view data for voteleddger.php
    public function voteDeduction($TId = null) {
        $query = $this->query("
        SELECT * FROM awarddata a 
        INNER JOIN tender t ON t.Tenderid = a.TenderId
        INNER JOIN vote v ON v.Vote = t.ICategory
        GROUP BY t.Tenderid");
        $result = $query->getResultArray();
        return $result;
    }
    
    //bond leeter of bbond
    public function GetBbondDetails() {
        $query = $this->query("
      SELECT * FROM pcmarks p
LEFT JOIN tender t ON t.Tenderid = p.TenderId
LEFT JOIN invitation i ON i.TId = p.TenderId
LEFT JOIN announcement a ON a.id = i.IFBId
LEFT JOIN nonregisteredsuppliers n ON n.UserId = p.VendorId
LEFT JOIN sdocument s ON s.TenderId = p.TenderId
INNER JOIN bbonddata b ON b.TenderId=p.TenderId GROUP BY p.VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    


    //awarding leeter of bbond
    public function GetBbondDetailscheck() {
        $query = $this->query("
        SELECT * FROM bbonddata b
LEFT JOIN tender t ON t.Tenderid = b.TenderId
LEFT JOIN invitation i ON i.TId = b.TenderId
LEFT JOIN announcement a ON a.id = i.IFBId
LEFT JOIN nonregisteredsuppliers n ON n.UserId = b.VendorId
LEFT JOIN sdocument s ON s.TenderId = b.TenderId GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
  
    
}
