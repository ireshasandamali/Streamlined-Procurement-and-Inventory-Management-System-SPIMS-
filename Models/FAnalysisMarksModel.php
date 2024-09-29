<?php

namespace App\Models;

use CodeIgniter\Model;

class FAnalysisMarksModel extends Model {

    protected $table = "fanalysismarks";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'CompanyName', 'VendorId', 'TenderId', 'Itemid', 'ItemName','Qty','Unit_priceEV','TotalPIVat','marks'];

    //view data for FEvaluation.php
    public function GetaceptbidderDetails($TId = null) {
        $query = $this->query("
        SELECT * 
        FROM fanalysismarks       
        WHERE marks = '1' AND fanalysismarks.TenderId ='$TId'");
        $result = $query->getResultArray();
        return $result;
    }

    //awarding leeter of intent
    public function GetlointentDetails($TId = null,$VendorId=null) {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM fanalysismarks    
        LEFT JOIN tender t ON t.Tenderid = fanalysismarks.TenderId     
        WHERE marks = '1'  AND fanalysismarks.TenderId ='$TId' AND fanalysismarks.VendorId ='$VendorId'  GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    public function GetlointentDetailsBidder($TId = null) {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM fanalysismarks    
        LEFT JOIN tender t ON t.Tenderid = fanalysismarks.TenderId     
        WHERE marks = '1'  AND fanalysismarks.TenderId ='$TId'   GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
     //awarding leeter to bidder
    public function GetbidderDetails($TId = null,$VendorId=null) {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM fanalysismarks    
        LEFT JOIN nonregisteredsuppliers n On n.UserId=fanalysismarks.VendorId
        LEFT JOIN tender t ON t.Tenderid = fanalysismarks.TenderId     
        WHERE marks = '1'  AND fanalysismarks.TenderId ='$TId'AND fanalysismarks.VendorId ='$VendorId'  GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
     //awarding leeter of intent not used
    public function tenderlointentDetails() {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM fanalysismarks    
        LEFT JOIN tender t ON t.Tenderid = fanalysismarks.TenderId     
        WHERE marks = '1' GROUP BY t.Tenderid");
        $result = $query->getResultArray();
        return $result;
    }

    public function GetTECtotalmarks($TId = null) {
        $query = $this->query("
        SELECT VendorId, SUM(marks) AS TOTAL FROM `tecanalysismarks` 
        WHERE tecanalysismarks.TenderId = '$TId' GROUP By VendorId");
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
 /*my public function GetAceptBiddersCEstimate($TId = null) {
    $query = $this->query("
        SELECT * FROM `tecanalysismarks` 
        INNER JOIN SPriceSchedule ON tecanalysismarks.TenderId = SPriceSchedule.TenderId
        WHERE tecanalysismarks.TenderId = '$TId'
        GROUP BY tecanalysismarks.CompanyName
        HAVING MIN(tecanalysismarks.marks) = 1 AND MAX(tecanalysismarks.marks) = 1");
    $result = $query->getResultArray();
    return $result;
}*/

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
}
