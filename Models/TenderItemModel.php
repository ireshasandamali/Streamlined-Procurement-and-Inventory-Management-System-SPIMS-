<?php

namespace App\Models;
use CodeIgniter\Model;
class TenderItemModel extends Model{
    protected $table="TItem";
    protected $primaryKey="TItemid";
    protected $allowedFields =['TItemid','TId','TName','Item','ItemName','Qty','Unit','Sample'];
    
    //View More
    public function gettenderitemDetails($Tenderid=null) {
        $query = $this->query("
        SELECT * FROM TItem i  where i.TId='$Tenderid'");
        $result = $query->getResultArray();
        return $result;
    }
    //ViewTender web
    public function getBidtenderItemDetails($TId=null) {
        $query = $this->query("
        SELECT * FROM TItem i  where i.TId='$TId'");
        $result = $query->getResultArray();
        return $result;
    }
     //ViewTender web
    public function jointenderItemDetails($TId=null) {
        $query = $this->query("
        SELECT * FROM TItem i 
        INNER JOIN tender t ON t.Tenderid = i.TId 
        where i.TId='$TId'");
        $result = $query->getResultArray();
        return $result;
    }
    
     public function getspecItemDetails($TSId=null) {
        $query = $this->query("
        SELECT * FROM TItem i  where i.TId='$TSId'");
        $result = $query->getResultArray();
        return $result;
    }


}