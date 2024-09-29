<?php

namespace App\Models;
use CodeIgniter\Model;
class SPriceScheduleModel extends Model{
    protected $table="SPriceSchedule";
    protected $primaryKey="id";
    protected $allowedFields =['id','AnnounceId','TenderId','Item',
'Itemid','ItemName','Qty','Unit','Unit_priceEV','PriceLItem','OPrice','TotalPEVat','Discount','TotalwithDiscount','VAT','VatAmount','TotalPIVat','SubmittedDate','UserId'];
    //for ViewBidders
    public function joinBidderDetails($IFBId=null,$TId=null,$UserId=null) {
    $query = $this->query("
        SELECT *
        FROM SPriceSchedule i
        INNER JOIN nonregisteredsuppliers r ON i.UserId = r.UserId        
        INNER JOIN User u ON i.UserId = u.UserId where i.AnnounceId='$IFBId' AND i.TenderId='$TId' AND r.UserId='$UserId'");


        $result = $query->getResultArray();
    return $result;
    }
    //View Bidders
    public function joinBidderDetailsforViewBidders($IFBId=null,$TId=null) {
    $query = $this->query("
        SELECT *
        FROM SPriceSchedule i
        INNER JOIN nonregisteredsuppliers r ON i.UserId = r.UserId        
        INNER JOIN User u ON i.UserId = u.UserId where i.AnnounceId='$IFBId' AND i.TenderId='$TId'
        GROUP BY i.UserId");   
           
        $result = $query->getResultArray();
    return $result;
    }
    
    //view data for OpenedTender.php
    public function GetPriseScheduleDetails($UserId=null) {
        $query = $this->query("
        SELECT * FROM `SPriceSchedule` 
        LEFT JOIN titem ON titem.Item = SPriceSchedule.Itemid
        WHERE SPriceSchedule.UserId = '$UserId'");
        $result = $query->getResultArray();
    return $result;
    }
    //view data for OpenedTender.php
    public function GetPriseSchedule($TId=null,$UserId=null) {
        $query = $this->query("
        SELECT * FROM `SPriceSchedule` 
        LEFT JOIN titem ON titem.Item = SPriceSchedule.Itemid
        WHERE SPriceSchedule.TenderId = '$TId' AND SPriceSchedule.UserId = '$UserId'");
        $result = $query->getResultArray();
    return $result;
    }
     //view data for edittender.php
    public function GetPriseScheduleedit($TId=null,$UserId=null) {
        $query = $this->query("
      SELECT * FROM `SPriceSchedule` 
        LEFT JOIN titem ON titem.Item = SPriceSchedule.Itemid
        LEFT JOIN tender ON tender.Tenderid = titem.TId
        LEFT JOIN invitation ON invitation.IFBId = spriceschedule.AnnounceId
       
        WHERE SPriceSchedule.TenderId = '$TId' AND SPriceSchedule.UserId = '$UserId'");
        $result = $query->getResultArray();
    return $result;
    }
    
     //view data for TecEvaluation.php
    public function GetestimateDetails($TId=null) {
        $query = $this->query("
        SELECT * FROM `SPriceSchedule` 
        LEFT JOIN titem ON titem.Item = SPriceSchedule.Item
        WHERE SPriceSchedule.TenderId = '$TId'");
        $result = $query->getResultArray();
    return $result;
    }
     //view data for Dropdown list in BidEvaluation.php
    public function joinBidderDetailsforBidEvaluation($TId=null) {
    $query = $this->query("
       SELECT * ,t.Item as ItemName
        FROM SPriceSchedule i
        INNER JOIN TItem t ON i.TenderId = t.TId
        INNER JOIN nonregisteredsuppliers r ON i.UserId = r.UserId        
        INNER JOIN User u ON i.UserId = u.UserId where i.TenderId='$TId'
        GROUP BY i.UserId");   
        $result = $query->getResultArray();
    return $result;
    }
    
    //for ViewBidders
    public function AcceptBidderDetails($UserId=null,$TId=null) {
    $query = $this->query("
        SELECT *
        FROM SPriceSchedule i
        INNER JOIN nonregisteredsuppliers r ON i.UserId = r.UserId        
        INNER JOIN User u ON i.UserId = u.UserId where i.TenderId='$TId' AND r.UserId='$UserId'");


        $result = $query->getResultArray();
    return $result;
    }
    //pending
    public function joinBidderDetailsforBidEvaluationcostestimate($TId=null) {
    $query = $this->query("
        SELECT * ,t.Item as Itemname
        FROM SPriceSchedule i
        INNER JOIN SSpecification s ON i.UserId = s.UserId
        INNER JOIN nonregisteredsuppliers r ON i.UserId = r.UserId  
        INNER JOIN titem t ON t.Item = s.Item
        INNER JOIN User u ON i.UserId = u.UserId where i.TenderId='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
   
     public function getsubmitBIDDetails($BId=null) {
        $query = $this->query("
        SELECT * FROM SPriceSchedule s where s.id='$BId'");
        $result = $query->getResultArray();
        return $result;
    }
    
     public function getAppliedBidDetailsbyTId($TId=null,$Iid=null) {
        $query = $this->query("
        SELECT * FROM SPriceSchedule i  where  i.TenderId='$TId' AND i.Item='$Iid'");
        $result = $query->getResultArray();
        return $result;
    }
    public function AcceptedBidderList($TId=null, $Itemid=null) {
    $query = $this->query("
        SELECT *
        FROM spriceschedule t
        LEFT JOIN nonregisteredsuppliers n ON n.UserId = t.UserId
        WHERE t.TenderId = '$TId'
        AND t.Itemid = '$Itemid'
        AND (t.UserId IN (
                SELECT VendorId 
                FROM `tecanalysismarks` 
                WHERE tecanalysismarks.marks = 1 
                AND tecanalysismarks.Itemid = '$Itemid' 
                AND tecanalysismarks.TenderId = '$TId'
            )
           AND t.UserId NOT IN (
                SELECT VendorId 
                FROM `tecanalysismarks` 
                WHERE tecanalysismarks.marks = 0 
                AND tecanalysismarks.Itemid = '$Itemid' 
                AND tecanalysismarks.TenderId = '$TId'
            )
    );");
    $result = $query->getResultArray();
    return $result;
}

 //View Bidders
    public function joinBidderDetailsforViewSBidders($IFBId=null,$TId=null) {
    $query = $this->query("
        SELECT *
        FROM SPriceSchedule i
        INNER JOIN registeredsuppliers r ON i.UserId = r.UserId        
        INNER JOIN User u ON i.UserId = u.UserId where i.AnnounceId='$IFBId' AND i.TenderId='$TId'
        GROUP BY i.UserId");   
           
        $result = $query->getResultArray();
    return $result;
    }
  //for ViewSBidders
    public function joinSBidderDetails($IFBId=null,$TId=null,$UserId=null) {
    $query = $this->query("
        SELECT *
        FROM SPriceSchedule i
        INNER JOIN registeredsuppliers r ON i.UserId = r.UserId        
        INNER JOIN User u ON i.UserId = u.UserId where i.AnnounceId='$IFBId' AND i.TenderId='$TId' AND r.UserId='$UserId'");


        $result = $query->getResultArray();
    return $result;
    } 
    
}