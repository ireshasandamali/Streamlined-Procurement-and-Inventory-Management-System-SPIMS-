<?php

namespace App\Models;
use CodeIgniter\Model;
class AssignCommitteeModel extends Model{
    protected $table="Committee";
    protected $primaryKey="Committeeid";
    protected $allowedFields =['Committeeid', 'PNumber','Description','NPC','ProEntity','MNumber','MDate','Purpose'] ;
    
    //TECMeeting used
     public function getAssignCommitteeDetails() {
        $query = $this->query("
        SELECT * FROM Committee i  
        LEFT JOIN tender t ON t.Tenderid = i.PNumber
        WHERE i.Purpose ='TEC'");
        $result = $query->getResultArray();
        return $result;
    }
    
      //Get relevent User
     public function getUserIDCommittee() {
        $query = $this->query("
       SELECT * FROM Committee i  
        LEFT JOIN tender t ON t.Tenderid = i.PNumber
         LEFT JOIN cmember c ON c.TMId = i.Committeeid
         LEFT JOIN employee e ON c.EmpId = e.id");
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


    //TECMeeting used change 2024.04.19 reports TEC Report
     public function getAssignCommitteeDetailsbyTIdTECR($TId=null) {
        $query = $this->query("
        SELECT * FROM Committee i
        LEFT JOIN tender t ON t.Tenderid= i.PNumber
        WHERE i.Purpose ='TEC' AND i.PNumber='$TId'");
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