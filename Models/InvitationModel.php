<?php

namespace App\Models;

use CodeIgniter\Model;

class InvitationModel extends Model {

    protected $table = "invitation";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'TId', 'Description', 'Location','PMethod', 'DCharges', 'BSecurity', 'IFBId', 'DCharges_Status'];

    //viewdetailed bid sir
    public function getinvitationDetailswebdisablebutton($IFBId = null,$TId=null,$UserId=null) {
        $query = $this->query("
        SELECT *, i.DCharges AS 'dpayment' , i.Description AS 'Tname' FROM invitation i       
        LEFT JOIN tender t ON t.Tenderid = i.TId
        LEFT JOIN DocumentCharges d ON d.TenderId = t.Tenderid AND d.UserId='$UserId'
        where i.IFBId='$IFBId' i.TId=$TId");
        $result = $query->getResultArray();
        return $result;
    }
     //viewdetailed bid sir
    public function getinvitationDetailswebdisable($IFBId = null,$UserId=null) {
        $query = $this->query("
        SELECT *, i.DCharges AS 'dpayment' ,i.IFBId AS 'announceid', i.Description AS 'Tname' FROM invitation i       
        LEFT JOIN tender t ON t.Tenderid = i.TId
        LEFT JOIN DocumentCharges d ON d.TenderId = t.Tenderid AND d.UserId='$UserId'
        where i.IFBId='$IFBId'");
        $result = $query->getResultArray();
        return $result;
    }
     public function getinvitationDetails($IFBId = null) {
        $query = $this->query("
        SELECT * FROM invitation i 
        LEFT JOIN tender t ON t.Tenderid = i.TId
        where i.IFBId='$IFBId'");
        $result = $query->getResultArray();
        return $result;
    }
    
     //viewdetailed bid
    public function getinvitationDetailssys($IFBId = null) {
        $query = $this->query("
        SELECT * FROM invitation i 
        LEFT JOIN tender t ON t.Tenderid = i.TId
        where i.IFBId='$IFBId'");
        $result = $query->getResultArray();
        return $result;
    }
     //viewdetailed bid
    public function getinvitationDetailsoldchange($IFBId = null) {
        $query = $this->query("
        SELECT * FROM invitation i 
        LEFT JOIN tender t ON t.Tenderid = i.TId
        where i.IFBId='$IFBId'");
        $result = $query->getResultArray();
        return $result;
    }
    
   

    public function viewinvitationDetails($AId=null) {
        $query = $this->query("
        SELECT * FROM invitation i  where i.IFBId='$AId'");
        $result = $query->getResultArray();
        return $result;
    }
//viewtender
    public function getinvitationDetailsbyTIdchange($IFBId = null, $TId = null) {
        $query = $this->query("
        SELECT * FROM invitation i  where i.IFBId='$IFBId' AND i.TId='$TId'");
        $result = $query->getResultArray();
        return $result;
    }
    //edit tender
    public function getinvitationDetailsbyTId($IFBId = null, $TId = null) {
        $query = $this->query("
        SELECT * FROM invitation i 
        LEFT JOIN tender t ON t.Tenderid=i.TId 
        where i.IFBId='$IFBId' AND i.TId='$TId'");
        $result = $query->getResultArray();
        return $result;
    }
//check
    public function joininvitationDOCChargesbyTId($AId = null, $TId = null, $UserId = null) {
        $query = $this->query("
        SELECT * FROM invitation i  
        LEFT JOIN DocumentCharges s ON i.TId = s.TenderId 
        WHERE i.IFBId='$AId' AND i.TId='$TId' AND s.UserId='$UserId';");
        $result = $query->getResultArray();
        return $result;
    }

    public function getBidtenderDetails($TId = null) {
        $query = $this->query("
        SELECT * FROM invitation i  where i.TId='$TId'");
        $result = $query->getResultArray();
        return $result;
    }

    public function joinbidInvitationDetails() {
        $query = $this->query("
        SELECT * FROM SPriceSchedule s INNER JOIN invitation i ON s.id=i.IFBId;");
        $result = $query->getResultArray();
        return $result;
    }

    //Check Document Charges paid viedetailed.php used
    public function UpdateInvitationDetails() {
       $query = $this->query("
       UPDATE invitation SET DCharges_Status='1'
       WHERE TId IN (SELECT TenderId FROM DocumentCharges WHERE is_verified ='1')");

        $result = $query->getResultArray();
        return $result;
    }
    
    
    
}
