<?php

namespace App\Models;
use CodeIgniter\Model;
class AnnouncementModel extends Model{
protected $table = "announcement";
protected $primaryKey = "id";
protected $allowedFields = ['id', 'BStart', 'BEnd', 'BOpen', 'BOpenTime', 'OpenStatus', 'OpenedDate'];

public function getAnnounceDetails($AId = null) {
$query = $this->query("
        SELECT * FROM announcement a  where a.id='$AId'");
$result = $query->getResultArray();
return $result;
}
//create Opening meeting
public function OpeningAnnounceDetails() {
$currentDateTime = date('Y-m-d H:i:s'); // Get current date and time 
$query = $this->query("
        SELECT * FROM announcement a  where a.BOpen<='$currentDateTime'");
$result = $query->getResultArray();
return $result;
}
//get active announcement
public function newannounce(){
$query = $this->query("
SELECT * FROM `announcement`WHERE OpenStatus=1");            
$result = $query->getResultArray();
 return $result;
        
}
    //check
     public function joinAnnouncementInvitationDetails($IFBId=null,$TId=null) {
        $query = $this->query("
SELECT * FROM announcement a INNER JOIN invitation i ON a.id = i.IFBId where i.IFBId = '$IFBId' AND i.TId = '$TId'");
        $result = $query->getResultArray();
        return $result;
    }
    
    
    //after reviva NCB all in one
     public function NewBidDetails() {
        $query = $this->query("
        SELECT *,DATEDIFF(BEnd, BStart) AS date_difference
        FROM announcement;");
        $result = $query->getResultArray();
        return $result;
    }


}