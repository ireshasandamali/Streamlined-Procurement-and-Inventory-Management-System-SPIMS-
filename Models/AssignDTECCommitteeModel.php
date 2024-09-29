<?php

namespace App\Models;
use CodeIgniter\Model;
class AssignDTECCommitteeModel extends Model{
    protected $table="DTECCommittee";
    protected $primaryKey="Committeeid";
    protected $allowedFields =['Committeeid', 'PNumber','Description','MNumber','MDate','Purpose'] ;
    
    //TECMeeting used
     public function getAssignCommitteeDetails() {
        $query = $this->query("
        SELECT * FROM Committee i  
        LEFT JOIN tender t ON t.Tenderid = i.PNumber
        WHERE i.Purpose ='TEC'");
        $result = $query->getResultArray();
        return $result;
    }
    //TECMeeting used
     public function getAssignDCommitteeDetails() {
        $query = $this->query("
        SELECT * FROM Committee i  
        LEFT JOIN tender t ON t.Tenderid = i.PNumber
        WHERE i.Purpose ='DTEC'");
        $result = $query->getResultArray();
        return $result;
    }


    //TECMeeting used
     public function getAssignCommitteeDetailsbyTId($TId=null) {
        $query = $this->query("
        SELECT * FROM Committee i              
        WHERE i.Purpose ='TEC' AND i.PNumber='$TId'");
        $result = $query->getResultArray();
        return $result;
    }
    //TECMeeting
     public function getAssignCommitteeDetailscheck($UserId=null) {
        //$userId = session()->get('UserId'); 
        $query = $this->query("
        SELECT * FROM Committee i  WHERE i.Purpose ='TEC' AND i.UserId='$UserId'");
        $result = $query->getResultArray();
        return $result;
    }
     //Check
    public function joincommitteeBidderDetailsforViewBidderscheckk($UserId=null) {
    $query = $this->query("
        SELECT *
        FROM Committee c
        LEFT JOIN SPriceSchedule i ON i.TenderId = c.PNumber                   
        WHERE c.Purpose ='TEC' AND c.UserId='$UserId'");
        $result = $query->getResultArray();
    return $result;
    }
  
}