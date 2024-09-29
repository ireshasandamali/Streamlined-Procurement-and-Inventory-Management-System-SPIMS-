<?php

namespace App\Models;

use CodeIgniter\Model;

class TecAnalysisMarksModel extends Model {

    protected $table = "tecanalysismarks";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'CompanyName', 'VendorId', 'TenderId', 'Itemid','Item', 'SpecId','BiddersOffer','Remarks', 'marks'];

    //view data for TECEvaluation.php
    public function GetTECAmarksDetails($TId = null) {
        $query = $this->query("
         SELECT *
         FROM `specification` 
         WHERE specification.TId = '$TId'");
        $result = $query->getResultArray();
        return $result;
    }
     //view data for TECEvaluation.php
      public function GetTECAmarkItem($TId = null) {
        $query = $this->query("
         SELECT *
         FROM `specification` 
         WHERE specification.TId = '$TId' GROUP BY specification.Item");
        $result = $query->getResultArray();
        return $result;
    }
     //view data for TECEvaluation.php
      public function GetallItem($TId = null) {
        $query = $this->query("
         SELECT * FROM `costestimatemaster` 
         WHERE costestimatemaster.TId = '$TId' GROUP BY costestimatemaster.Item");
        $result = $query->getResultArray();
        return $result;
    }
    
    
    public function GetTECAmarksDetailssirkiyadunna($TId = null) {
        $query = $this->query("
        SELECT * FROM costestimatemaster c 
        INNER JOIN spriceschedule s ON s.Itemid = c.Item
        LEFT JOIN tecanalysismarks t ON t.Itemid = s.Itemid
        WHERE s.TenderId='$TId' AND t.marks >= 1;");
        $result = $query->getResultArray();
        return $result;
    }
    public function GetTECtotalmarks($TId = null) {
        $query = $this->query("
        SELECT VendorId,Itemid, SUM(marks) AS TOTAL FROM `tecanalysismarks` 
        WHERE tecanalysismarks.TenderId = '$TId' GROUP By VendorId,Itemid");
        $result = $query->getResultArray();
        return $result;
    }
     public function GetrejectBidders($TId = null) {
        $query = $this->query("
        SELECT * FROM `tecanalysismarks` WHERE tecanalysismarks.marks=0;");
        $result = $query->getResultArray();
        return $result;
    }
    public function GetAceptBidders($TId = null) {
    $query = $this->query("
        SELECT * FROM `tecanalysismarks` 
        WHERE TenderId = '$TId'
        GROUP BY CompanyName
        HAVING MIN(marks) = 1 AND MAX(marks) = 1");
    $result = $query->getResultArray();
    return $result;
}
 
public function GetAceptBiddersCEstimate($TId = null) {
    $query = $this->query("
        SELECT * FROM `tecanalysismarks` 
        INNER JOIN SPriceSchedule ON tecanalysismarks.TenderId = SPriceSchedule.TenderId
        WHERE tecanalysismarks.TenderId = '$TId'
        AND tecanalysismarks.marks = 1
        GROUP BY tecanalysismarks.CompanyName
        HAVING COUNT(DISTINCT tecanalysismarks.SpecId) = (
            SELECT COUNT(DISTINCT SpecId) 
            FROM tecanalysismarks
            WHERE TenderId = '$TId'
        )");
    $result = $query->getResultArray();
    return $result;
}
//check
public function GetLowestAceptBidders($TId = null) {
    $query = $this->query("
        SELECT tecanalysismarks.*, SPriceSchedule.*
        FROM tecanalysismarks
        INNER JOIN SPriceSchedule ON tecanalysismarks.TenderId = SPriceSchedule.TenderId
        WHERE tecanalysismarks.TenderId = '$TId'
        AND tecanalysismarks.marks = 1
        GROUP BY tecanalysismarks.CompanyName
        HAVING MIN(tecanalysismarks.marks) = 1 
            AND MAX(tecanalysismarks.marks) = 1
            AND SPriceSchedule.Unit_priceEV = (
                SELECT MIN(Unit_priceEV) 
                FROM SPriceSchedule
                WHERE TenderId = '$TId'
            )");
    $result = $query->getResultArray();
    return $result;
}
public function FEvaluation($TId = null) {
        $query = $this->query("
        SELECT * FROM spriceschedule s 
        LEFT JOIN tecanalysismarks t ON t.Itemid = s.Itemid
        WHERE s.TenderId='$TId' AND t.marks >= 1;");
        
        $result = $query->getResultArray();
        return $result;
    }



    public function getMarks($TId = null) {
        $query = $this->query("
         SELECT *
         FROM `tecanalysismarks` 
         WHERE tecanalysismarks.TenderId = '$TId' ORDER BY tecanalysismarks.VendorId ");
        $result = $query->getResultArray();
        return $result;
    }

    public function GetTECAmarksDetailscheck($TId = null, $TItemId = null, $SpecId = null) {
        $query = $this->query("
         SELECT *
         FROM `tecanalysismarks` 
         LEFT JOIN specification ON tecanalysismarks.Itemid = specification.IId AND specification.specid=tecanalysismarks.SpecId        
         WHERE tecanalysismarks.TenderId = '$TId' AND tecanalysismarks.Itemid='$TItemId' AND tecanalysismarks.SpecId='$SpecId'");
        $result = $query->getResultArray();
        return $result;
    }

    public function GetTECAmarksDetailse($TId = null, $UserId = null) {
        $query = $this->query("
        SELECT * FROM `tecanalysismarks` 
        WHERE tecanalysismarks.TenderId = '$TId' AND tecanalysismarks.VendorId = '$UserId'");
        $result = $query->getResultArray();
        return $result;
    }
     //TEC Evaluation used
    public function rejectedbidder($TId = null) {
        $query = $this->query("
        SELECT * FROM `tecanalysismarks`        
        WHERE TenderId = '$TId' HAVING marks = 0");
        $result = $query->getResultArray();
        return $result;
    }
    
    
    //TEC Evaluation used
    public function GetAcceptedBidderlist($TId = null,$Itemid=null) {
        $query = $this->query("SELECT * FROM `tecanalysismarks` 
        WHERE tecanalysismarks.marks=1 AND  tecanalysismarks.TenderId='$TId' AND Itemid='$Itemid'
        AND VendorId NOT IN(SELECT VendorId FROM `tecanalysismarks` WHERE tecanalysismarks.marks=0  AND Itemid='$Itemid'
        AND  tecanalysismarks.TenderId='$TId')
        GROUP BY TenderId,VendorId;");

        $result = $query->getResultArray();
        return $result;
    }
    
    
      //TEC FEvaluation used
    public function GetAcceptedBidderlistforFinancial($TId = null,$Itemid=null) {
        $query = $this->query("SELECT * FROM `tecanalysismarks` 
        LEFT JOIN spriceschedule  ON spriceschedule.TenderId =  tecanalysismarks.TenderId
        WHERE tecanalysismarks.marks=1 AND  tecanalysismarks.TenderId='$TId' AND tecanalysismarks.Itemid='$Itemid' AND spriceschedule.Itemid='$Itemid' 
        AND VendorId NOT IN(SELECT VendorId FROM `tecanalysismarks` WHERE tecanalysismarks.marks=0  AND tecanalysismarks.Itemid='$Itemid' AND spriceschedule.Itemid='$Itemid'
        AND  tecanalysismarks.TenderId='$TId')
        GROUP BY tecanalysismarks.TenderId,VendorId;");

        $result = $query->getResultArray();
        return $result;
    }
    
     /*public function GetAcceptedBidderlistfirst($TId = null) {
        $query = $this->query("SELECT * FROM `tecanalysismarks` 
        WHERE  tecanalysismarks.TenderId='$TId' AND marks=0
      
        GROUP BY TenderId,VendorId");
        $result = $query->getResultArray();
        return $result;
    }*/
    
      /*public function GetAcceptedBidderlistsecond($TId = null) {
        $query = $this->query("SELECT * FROM `tecanalysismarks` 
        WHERE  tecanalysismarks.TenderId='$TId' 
      
        GROUP BY TenderId,Itemid,VendorId;");
        $result = $query->getResultArray();
        return $result;
    }*/
    
    
}
