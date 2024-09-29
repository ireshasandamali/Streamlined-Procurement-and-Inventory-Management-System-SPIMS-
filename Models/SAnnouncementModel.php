<?php

namespace App\Models;
use CodeIgniter\Model;
class SAnnouncementModel extends Model{
    protected $table="sannouncement";
    protected $primaryKey="ids";
    protected $allowedFields =['ids','BStarts','BEnds','BOpens','OpenStatus'] ;
    
    
    //OpenedSBid.php
    public function getSAnnounceDetails($AId=null) {
        $query = $this->query("
        SELECT * FROM sannouncement a  where a.ids='$AId'");
        $result = $query->getResultArray();
        return $result;
    }
    
     //create Opening meeting
     public function OpeningSAnnounceDetails() {
        $currentDateTime = date('Y-m-d H:i:s'); // Get current date and time 
        $query = $this->query("
        SELECT * FROM sannouncement a  where a.BOpens >='$currentDateTime'");
        $result = $query->getResultArray();
        return $result;
    }
   //get active announcement
    public function newannounce(){
    $query = $this->query("
    SELECT * FROM `sannouncement`WHERE OpenStatus=1");            
    $result = $query->getResultArray();
     return $result;

    }

}