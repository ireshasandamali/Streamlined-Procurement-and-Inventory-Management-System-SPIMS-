<?php

namespace App\Models;
use CodeIgniter\Model;
class PAnalysisMarksModel extends Model{
    protected $table="panalysismarks";
    protected $primaryKey="id";
    protected $allowedFields =['id','docid','CompanyName','VendorId','TenderId','DocStatus','CommitteeId'];

    //view data for preliminaryEvaluation.php
    public function GetdocstatusDetails($TId=null) {
        $query = $this->query("
        SELECT * FROM `panalysismarks` 
        WHERE panalysismarks.TenderId = '$TId'");
        $result = $query->getResultArray();
    return $result;
    }
    public function GetaprovedBidderDetails($TId=null) {
        $query = $this->query("
        SELECT p1.*
        FROM panalysismarks p1
        JOIN panalysismarks p2 ON p1.TenderId = p2.TenderId
        WHERE p1.docid = 'BidSubmissionform' AND p1.DocStatus = 'yes'
        AND p2.docid = 'Bid Bond'
        AND p2.DocStatus = 'yes'
        AND p1.VendorId =p2.VendorId
          AND p1.TenderId ='$TId'");
        $result = $query->getResultArray();
        return $result;
    }
    public function GetaprovedBidders() {
        $query = $this->query("
        SELECT p1.*
        FROM panalysismarks p1
        JOIN panalysismarks p2 ON p1.TenderId = p2.TenderId
        WHERE p1.docid = 'BidSubmissionform' AND p1.DocStatus = 'yes'
        AND p2.docid = 'Bid Bond'
        AND p2.DocStatus = 'yes'
        AND p1.VendorId =p2.VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    //rejected company
     public function GetrejectedBidderDetails() {
        $query = $this->query("   
    SELECT * FROM panalysismarks WHERE VendorId NOT IN(
    SELECT p1.VendorId
        FROM panalysismarks p1
        JOIN panalysismarks p2 ON p1.TenderId = p2.TenderId
        WHERE p1.docid = 'BidSubmissionform' AND p1.DocStatus = 'yes'
        AND p2.docid = 'Bid Bond'
        AND p2.DocStatus = 'yes'
        AND p1.VendorId =p2.VendorId) GROUP BY VendorId");
         $result = $query->getResultArray();
        return $result;
    }
    //bid bond
     public function Getbidbondregistry($TId = null, $VId = null) {
        $query = $this->query("
    SELECT * FROM panalysismarks s
        LEFT JOIN invitation i ON i.TId = s.TenderId
          LEFT JOIN tender t ON t.Tenderid = s.TenderId
          LEFT JOIN sdocument  d ON d.TenderId = s.TenderId
        LEFT JOIN announcement a ON a.id = i.IFBId
        LEFT JOIN nonregisteredsuppliers n ON n.UserId= s.VendorId  WHERE s.docid='Bid Bond'   AND t.Tenderid='$TId' AND s.VendorId='$VId' GROUP BY VendorId ");
        $result = $query->getResultArray();
    return $result;
    }
     //bid bond
     public function Getbidbondregistrycheck() {
        $query = $this->query("
    SELECT * FROM panalysismarks s
        LEFT JOIN invitation i ON i.TId = s.TenderId
          LEFT JOIN tender t ON t.Tenderid = s.TenderId
          LEFT JOIN sdocument  d ON d.TenderId = s.TenderId
        LEFT JOIN announcement a ON a.id = i.IFBId
        LEFT JOIN nonregisteredsuppliers n ON n.UserId= s.VendorId  WHERE s.docid='Bid Bond'  GROUP BY n.business_name ORDER BY s.TenderId");
        $result = $query->getResultArray();
    return $result;
    }
    //view data for preliminaryEvaluation.php
    public function Getbidbond($TId=null) {
        $query = $this->query("
       SELECT * FROM `panalysismarks` WHERE DocStatus='Yes' AND docid='Bid Bond' AND TenderId='$TId'");
        $result = $query->getResultArray();
    return $result;
    }
 
}
