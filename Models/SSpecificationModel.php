<?php

namespace App\Models;
use CodeIgniter\Model;
class SSpecificationModel extends Model{
    protected $table="SSpecification";
    protected $primaryKey="Sspecid";
    protected $allowedFields =['Sspecid','IId','Item','ItemName','SubComponent','Detail','Priority','SpecId','BiddersOffer','Remarks','SubmittedDate','UserId','AnnounceId','TenderId'];


    //view data for OpenedTender.php this row should be delete       
    //  LEFT JOIN specification ON specification.IId = SSpecification.Item

    public function GetSpecDetails($TId=null,$UserId=null) {
        $query = $this->query("
        SELECT * 
        FROM `SSpecification`       
        WHERE  SSpecification.TenderId='$TId' AND SSpecification.UserId='$UserId'");
        $result = $query->getResultArray();
    return $result;
    }
    
     public function GetSpecDetailsold($TId=null) {
        $query = $this->query("
        SELECT * 
        FROM `SSpecification` 
       
        WHERE  SSpecification.TenderId=$TId ");
        $result = $query->getResultArray();
    return $result;
    }
    public function GetSpecDetailschange($UserId=null) {
        $query = $this->query("
        SELECT * 
        FROM `SSpecification` 
        LEFT JOIN titem ON titem.Item = SSpecification.Item
        WHERE SSpecification.UserId='$UserId'");
        $result = $query->getResultArray();
    return $result;
    }
  
    //view data for OpenedTender.php Suupler Name
    public function JionBidderDetails($TId=null) {
        $query = $this->query("
        SELECT * 
        FROM `SSpecification` 
        LEFT JOIN nonregisteredsuppliers ON nonregisteredsuppliers.UserId = SSpecification.UserId 
        WHERE SSpecification.TenderId='$TId'");
        $result = $query->getResultArray();
    return $result;
    
    }
    
    //view data for TEcEvaluation.php Suupler Name
    public function JionBidderItemDetails($TId=null) {
        $query = $this->query("
        SELECT *
        FROM `SSpecification` 
        LEFT JOIN titem ON titem.Item = SSpecification.Item
        LEFT JOIN nonregisteredsuppliers ON nonregisteredsuppliers.UserId = SSpecification.UserId 
        WHERE SSpecification.TenderId='$TId'");
        $result = $query->getResultArray();
    return $result;
    
    }
    
    //view data for technicalevaluation.php Suupler Name
    public function technicalevaluationBidderDetailsold($UserId=null,$TId=null) {
        $query = $this->query("
        SELECT * 
        FROM `SSpecification` 
        LEFT JOIN nonregisteredsuppliers ON nonregisteredsuppliers.UserId = SSpecification.UserId 
        WHERE SSpecification.TenderId='$TId' AND SSpecification.UserId='$UserId'");
        $result = $query->getResultArray();
    return $result;
    
    }
     //view data for technicalevaluation.php Suupler Name
    public function technicalevaluationBidderDetails($UserId=null,$TId=null) {
        $query = $this->query("
        SELECT SSpecification.*, nonregisteredsuppliers.*, TItem.Item as Itemname
        FROM `SSpecification` 
        LEFT JOIN TItem ON TItem.TId = SSpecification.TenderId
        LEFT JOIN nonregisteredsuppliers ON nonregisteredsuppliers.UserId = SSpecification.UserId 
        WHERE SSpecification.TenderId='$TId' AND SSpecification.UserId='$UserId'  GROUP BY SSpecification.Sspecid");
        $result = $query->getResultArray();
    return $result;
    
    }
     public function technicalevaluationBidders($UserId=null,$TId=null) {
        $query = $this->query("
        SELECT *
        FROM `SSpecification` 
       
        LEFT JOIN nonregisteredsuppliers ON nonregisteredsuppliers.UserId = SSpecification.UserId 
        WHERE SSpecification.TenderId='$TId' AND SSpecification.UserId='$UserId'  ");
        $result = $query->getResultArray();
    return $result;
    
    }
     
}
