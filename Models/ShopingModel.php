<?php

namespace App\Models;

use CodeIgniter\Model;

class ShopingModel extends Model {

    protected $table = "Shoppingdata";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'TId', 'Description', 'Location', 'sannounceId', 'Status'];

    
    //OpenedSBid.php
    public function getshoppingDetails($AId = null) {
        $query = $this->query("
        SELECT * FROM Shoppingdata i 
        LEFT JOIN tender t ON t.Tenderid = i.TId
        where i.sannounceId='$AId'");
        $result = $query->getResultArray();
        return $result;
    }
    
   
    //used sview.php
    public function viewSinvitationDetails($AId=null) {
        $query = $this->query("
        SELECT * FROM Shoppingdata i  where i.sannounceId='$AId'");
        $result = $query->getResultArray();
        return $result;
    }

    
 public function getinvitationDetailsbyTId($AId = null, $TId = null) {
        $query = $this->query("
        SELECT * FROM Shoppingdata i 
        LEFT JOIN tender t ON t.Tenderid=i.TId 
        where i.sannounceId='$AId' AND i.TId='$TId'");
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
