<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemNamecategoryModel extends Model {

    protected $table = "ItemNamelist";
    protected $primaryKey = "Itemid";
    protected $allowedFields = ['Itemid', 'ICatergory', 'ItemName', 'ItemVID', 'Status'];

    //viewmore
    public function getrequesttenderhistroy($IId = null) {
        $query = $this->query("
        SELECT *
FROM Itemcategorylist i 
LEFT JOIN tender t ON t.ICategory=i.Vote
LEFT JOIN titem a ON a.TId=t.Tenderid WHERE a.Item='$IId'");
        $result = $query->getResultArray();
        return $result;
    }
}
