<?php

namespace App\Models;
use CodeIgniter\Model;
class NewRequestModel extends Model{
    protected $table="newitemrequest";
    protected $primaryKey="RequestID";
    protected $allowedFields =['RequestID','ItemName','Qty','Purpose','PStatus','CName','ReqDate','sample_image','UserId','Status','ApprovedDate','additemCStatus', ] ;
    
    //viewItem
    public function getNewrequestDetails($requestId=null) {
        $query = $this->query("
        SELECT * FROM newitemrequest i  where i.RequestID='$requestId'");
        $result = $query->getResultArray();
        return $result;
    }
     //viewmore
    public function getrequesttenderDetails($Tenderid=null) {
        $query = $this->query("
        SELECT * FROM itemrequest i  
        LEFT JOIN tender_request r ON i.RequestID = r.RequestId
        LEFT JOIN ReqItem a ON i.RequestID = a.RId
        where  r.TenderId='$Tenderid'");
        $result = $query->getResultArray();
        return $result;
    }
    
     //viewmore
    public function getrequesterDetails($TId=null) {
        $query = $this->query("
        SELECT * FROM itemrequest i  
        LEFT JOIN tender_request r ON i.RequestID = r.RequestId
        LEFT JOIN ReqItem a ON i.RequestID = a.RId
        where  r.TenderId='$TId'");
        $result = $query->getResultArray();
        return $result;
    }
    //not used
    public function getIrequestDetails($RequestID = null) {
        $data=$this->join('itemrequest','itemrequest.RequestID=ReqItem.RId')->get()->getResultArray();
        return $data;
    }
    //i think this no need
    public function UpdateItemRequestDetails($RequestID = null, $RItemid = null) {
        $query = $this->query("
        UPDATE itemrequest SET Status='1' WHERE RequestID=$RequestID AND RItemid=$RItemid");
        $result = $query->getResultArray();
        return $result;
    }
    public function UpdatecreatetendertDetails($RequestID = null, $RItemid = null) {
        $query = $this->query("
        UPDATE itemrequest SET Status='1' WHERE RequestID=$RequestID AND RItemid=$RItemid");
        $result = $query->getResultArray();
        return $result;
    }
    
    public function joinrequestDetails() {
        $query = $this->query("
        SELECT * FROM itemrequest i INNER JOIN ReqItem r ON i.RequestID=r.RId;");
        $result = $query->getResultArray();
        return $result;
    }
    //check not finalized
     public function UpdateCreateTEnderStatus($RequestID = null, $RItemid = null) {
        $query = $this->query("
        SELECT * FROM itemrequest i  
        LEFT JOIN tender_request r ON i.RequestID = r.RequestId
        UPDATE itemrequest i SET createTenderStatus='1' WHERE RequestID=$RequestID AND RItemid=$RItemid");
        $result = $query->getResultArray();
        return $result;
    }
}
