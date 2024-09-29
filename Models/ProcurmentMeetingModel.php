<?php

namespace App\Models;
use CodeIgniter\Model;
class ProcurmentMeetingModel extends Model{
    protected $table="PMeeting";
    protected $primaryKey="PCommitteeid";
    protected $allowedFields =['PCommitteeid','PmeetingId', 'Tenderid','Description','PMatter'] ;
    
    
    public function getPCommitteeDetails($PMId = null) {
        $query = $this->query("
        SELECT * FROM PMeeting i  
        LEFT JOIN PCommittee s ON i.PmeetingId = s.id 
        WHERE i.PmeetingId='$PMId'");
        $result = $query->getResultArray();
        return $result;
    }
   
  
}