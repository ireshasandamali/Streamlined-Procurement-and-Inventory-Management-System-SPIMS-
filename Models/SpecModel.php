<?php

namespace App\Models;
use CodeIgniter\Model;
class SpecModel extends Model{
    protected $table="specification";
    protected $primaryKey="specid";
    protected $allowedFields =['specid','Description','Item','ItemName','SubComponent','Detail','Priority','TId','IId','Status','Remarks'];

      public function getspecDetailsbyTId($TId=null) {
        $query = $this->query("
        SELECT * FROM specification i  where i.TId='$TId'");
        $result = $query->getResultArray();
        return $result;
        
    }
    //TECEvaluation.php
    public function getspecDetailsbyTIdTECEvaluation($TId=null) {
        $query = $this->query("
        SELECT *, titem.Item AS Itemname
        FROM `specification` 
        LEFT JOIN titem ON titem.TItemid = specification.Item
        WHERE specification.TId='$TId'");
        $result = $query->getResultArray();
        return $result;
        
    }
      public function getspecDetails($Tenderid=null) {
        $query = $this->query("
        SELECT * FROM specification i  where i.TId='$Tenderid'");
        $result = $query->getResultArray();
        return $result;
        
    }
    
    public function UpdateSpecDetails($specid = null, $TenderID = null) {
        $query = $this->query("
        UPDATE specification SET Status='1' WHERE specid=$specid AND TId=$TenderID");
        $result = $query->getResultArray();
        return $result;
    }
    public function joinspecdetailswithTItemView($TId=null) {
    $query = $this->query("
        SELECT *
        FROM specification s            
        WHERE s.TId='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
    
    public function joinspecdetailswithTItem($TId=null) {
    $query = $this->query("
        SELECT *
        FROM specification s
        INNER JOIN TItem i ON i.TId = s.TId
        INNER JOIN tender t ON t.Tenderid = s.TId        
        WHERE t.TenderId='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
}
 

 