<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model {

    protected $table = "itemrequest";
    protected $primaryKey = "RequestID";
    protected $allowedFields = ['RequestID', 'Description', 'Purpose', 'PStatus', 'CName', 'ReqDate', 'Status', 'ApprovedDate','comment', 'createTenderStatus','UserId'];

    //viewItem
    public function getrequestDetails($requestId = null) {
        $query = $this->query("
        SELECT * FROM itemrequest i  where i.RequestID='$requestId'");
        $result = $query->getResultArray();
        return $result;
    }
    
     public function getrequestDetailsviewtender($RequestID = null) {
        $query = $this->query("
        SELECT * FROM itemrequest i  where i.RequestID='$RequestID'");
        $result = $query->getResultArray();
        return $result;
    }

    //viewmore
    public function getrequesttenderDetails($RequestID = null) {
        $query = $this->query("
        SELECT * FROM itemrequest i  
        LEFT JOIN tender_request r ON i.RequestID = r.RequestId
        LEFT JOIN ReqItem a ON i.RequestID = a.RId
        where i.RequestID='$RequestID'");
        $result = $query->getResultArray();
        return $result;
    }

    //viewmore
    public function getrequesterDetails($TId = null) {
        $query = $this->query("
        SELECT * FROM itemrequest i  
        LEFT JOIN tender_request r ON i.RequestID = r.RequestId
        LEFT JOIN ReqItem a ON i.RequestID = a.RId
        where  r.TenderId='$TId'");
        $result = $query->getResultArray();
        return $result;
    }

    //create tender
    public function getrequestItemDetails() {
        echo $RequestID = implode(",", session('requestId'));
        $query = $this->query("
        SELECT * FROM itemrequest i          
        LEFT JOIN ReqItem a ON i.RequestID = a.RId
        where  i.RequestId IN ($RequestID) GROUP BY a.ListItemId");
        $result = $query->getResultArray();
        return $result;
    }

    //create tender add Item
    public function addrequestItemDetails($ListItemId=null) {
        $requestIds = implode(",", session('requestId'));
        $query = $this->query("
        SELECT a.ItemName, SUM(a.Qty) AS totalQty
        FROM ReqItem a               
        WHERE a.RId IN ($requestIds) AND a.ListItemId='$ListItemId'
        GROUP BY a.ListItemId");

        $result = $query->getResultArray();
        return $result;
    }
     public function addrequestItemDetailscheck($RItemid=null) {
        $requestIds = implode(",", session('requestId'));
        $query = $this->query("
        SELECT a.ItemName, SUM(a.Qty) AS totalQty
        FROM ReqItem a               
        WHERE a.RId IN ($requestIds) AND a.RItemid='$RItemid'
        GROUP BY a.RItemid");

        $result = $query->getResultArray();
        return $result;
    }
    //create tender add Item
    public function addrequestItemDetailsc($RItemid=null) {
        $requestIds = implode(",", session('requestId'));
        $query = $this->query("
        SELECT a.ItemName, SUM(a.Qty) AS totalQty
        FROM ReqItem a               
        WHERE a.RId IN ($requestIds) AND a.ListItemId='$RItemid'
        GROUP BY a.ItemName");

        $result = $query->getResultArray();
        return $result;
    }

    //not used
    public function getIrequestDetails($RequestID = null) {
        $data = $this->join('itemrequest', 'itemrequest.RequestID=ReqItem.RId')->get()->getResultArray();
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
    
     //check not finalized
    public function viewrequest() {
        $query = $this->query("
         SELECT * FROM itemrequest i
        LEFT JOIN tender_request r ON r.RequestId = i.RequestID
        LEFT JOIN tender t ON t.Tenderid = r.TenderId
        LEFT JOIN awarddata a ON a.TenderId = t.Tenderid GROUP BY t.Tenderid");
        $result = $query->getResultArray();
        return $result;
    }
}
