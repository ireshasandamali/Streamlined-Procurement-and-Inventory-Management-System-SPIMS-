<?php

namespace App\Models;

use CodeIgniter\Model;

class OpeningRemarksModel extends Model {

    protected $table = "openeingremarks";
    protected $primaryKey = "id";
    protected $allowedFields = ['id','AnnounceId', 'CompanyName', 'VendorId', 'TenderId', 'remarks', 'OCMember','OpenDate'];

    //view Applied Bidder details
    public function GetaceptbidderDetails($AId = null,$TId = null) {
        $query = $this->query("
        SELECT *
        FROM openeingremarks o 
        LEFT JOIN spriceschedule s ON s.TenderId = o.TenderId WHERE  o.TenderId='$TId' AND o.AnnounceId='$AId' GROUP BY O.VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
    // vew opening report
    public function GetopeningDetails($IFBId = null,$TId = null,$UserId=null) {
        $query = $this->query("
        SELECT *
        FROM openeingremarks o 
        WHERE  o.TenderId='$TId' AND o.AnnounceId='$IFBId' AND  o.VendorId='$UserId'");
        $result = $query->getResultArray();
        return $result;
    }
    
    //change after viva use for viewAppliedBidders
 public function GetappliedbidderDetailschange($AId = null,$TId = null) {
        $query = $this->query("
        SELECT *, SUM(s.Unit_priceEV) as total_price
        FROM openeingremarks o 
        LEFT JOIN spriceschedule s ON s.TenderId = o.TenderId WHERE  o.TenderId='$TId' AND o.AnnounceId='$AId' GROUP BY O.VendorId");
        $result = $query->getResultArray();
        return $result;
    }
    
     //change after viva use for viewAppliedBidders if bellow incorrect this use
 public function GetappliedbidderDetailschanges($AId = null,$TId = null) {
        $query = $this->query("
        SELECT SUM(s.PriceLItem) AS TotalP,  n.business_name
        FROM  spriceschedule s 
        LEFT JOIN nonregisteredsuppliers n ON n.SupplierId=s.UserId
        WHERE s.TenderId='$TId' AND n.SupplierId IN(SELECT o.VendorId FROM openeingremarks o WHERE o.TenderId='$TId') GROUP BY n.SupplierId;");
        $result = $query->getResultArray();
        return $result;
    }
    
      //change after viva use for viewAppliedBidders
 public function GetappliedbidderDetails($AId = null,$TId = null) {
        $query = $this->query("
        SELECT SUM(s.PriceLItem) AS TotalP, COALESCE(n.business_name, r.business_name) AS business_name
        FROM  spriceschedule s 
        LEFT JOIN nonregisteredsuppliers n ON n.UserId=s.UserId
        LEFT JOIN registeredsuppliers r ON r.UserId=s.UserId
        WHERE s.TenderId='$TId' AND n.UserId IN(SELECT o.VendorId FROM openeingremarks o WHERE o.TenderId='$TId') GROUP BY  COALESCE(n.business_name, r.business_name);");
        $result = $query->getResultArray();
        return $result;
    }
    
    
     //change after viva use for viewAppliedBidders shopping
 public function GetappliedbidderSDetails($AId = null,$TId = null) {
        $query = $this->query("
        SELECT SUM(s.PriceLItem) AS TotalP,  r.business_name
        FROM  spriceschedule s      
        LEFT JOIN registeredsuppliers r ON r.UserId=s.UserId
        WHERE s.TenderId='1' AND r.UserId IN(SELECT o.VendorId FROM openeingremarks o WHERE o.TenderId='1') GROUP BY  r.business_name");
        $result = $query->getResultArray();
        return $result;
    }
    
}
