<?php

namespace App\Models;

use CodeIgniter\Model;

class PcApprovaldataModel extends Model {

    protected $table = "PCmarks";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'CompanyName', 'VendorId', 'TenderId', 'Itemid', 'ItemName','Qty','Unit_priceEV','TotalPIVat','marks'];

    //view data for FEvaluation.php
    public function GetaceptbidderDetails($TId = null) {
        $query = $this->query("
        SELECT * 
        FROM PCmarks       
        WHERE marks = '1' AND PCmarks.TenderId ='$TId'");
        $result = $query->getResultArray();
        return $result;
    }

    //awarding leeter of intent
    public function GetlointentDetails($TId = null,$VendorId=null) {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM PCmarks    
        LEFT JOIN tender t ON t.Tenderid = PCmarks.TenderId     
        WHERE marks = '1'  AND PCmarks.TenderId ='$TId' AND PCmarks.VendorId ='$VendorId'  GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
     //add data to inventory
    public function GetinventorytDetails($TId = null,$Itemid=null) {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM PCmarks    
        LEFT JOIN tender t ON t.Tenderid = PCmarks.TenderId     
        WHERE marks = '1'  AND PCmarks.TenderId ='$TId' AND PCmarks.Itemid ='$Itemid'");
        $result = $query->getResultArray();
        return $result;
    }
    
    
     //awarding leeter of intent creation
    public function JoinBidderDetails($TId = null,$VId=null) {
        $query = $this->query("
        SELECT *, SUM(p.TotalPIVat) AS Awarding
        FROM pcmarks p 
        LEFT JOIN spriceschedule c ON c.TenderId= p.TenderId 
        LEFT JOIN tender t ON t.Tenderid = p.TenderId
        LEFT JOIN nonregisteredsuppliers n ON n.UserId= p.VendorId 
        WHERE p.TenderId = '$TId' AND p.VendorId='$VId'  GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    public function GetlointentDetailsBidder($TId = null) {
        $query = $this->query("
        SELECT *, SUM(TotalPIVat) AS Awarding
        FROM PCmarks    
        LEFT JOIN tender t ON t.Tenderid = PCmarks.TenderId     
        WHERE marks = '1'  AND PCmarks.TenderId ='$TId'   GROUP BY VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
     public function awardingBidder($TId = null,$VId=null) {
        $query = $this->query("
        SELECT *
        FROM PCmarks  p  
        LEFT JOIN tender t ON t.Tenderid = p.TenderId  
        LEFT JOIN nonregisteredsuppliers n ON n.UserId= p.VendorId
        WHERE marks = '1'  AND p.TenderId ='$TId' AND p.VendorId='$VId'   ");
        $result = $query->getResultArray();
        return $result;
    }
    
    
}
