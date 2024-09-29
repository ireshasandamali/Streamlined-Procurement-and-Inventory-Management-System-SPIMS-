<?php

namespace App\Models;

use CodeIgniter\Model;

class DocumentchargeModel extends Model {

    protected $table = "DocumentCharges";
    protected $primaryKey = "docid";
    protected $allowedFields = ['docid', 'CompanyName', 'date', 'payment_receipt', 'TenderId', 'IFBId', 'Description', 'DCharges', 'UserId', 'is_verified', 'verification_code'];

    public function UpdatepaymentsStatus($TId = null) {
        $query = $this->query("
       UPDATE DChargepaid SET paidstatus='paid'
       WHERE TId IN (SELECT TenderId FROM DocumentCharges WHERE is_verified ='1')");

        $result = $query->getResultArray();
        return $result;
    }

    public function DocChargesDetails() {
        $query = $this->query("
        SELECT *
        FROM `DocumentCharges`LEFT JOIN tender t ON t.Tenderid=documentcharges.TenderId");

        $result = $query->getResultArray();
        return $result;
    }

    //pending 
    public function getDocumentchargeDetails($IFBId = null, $TId = null, $UserId = null) {

        $query = $this->query("
        SELECT * FROM DocumentCharges i  WHERE  i.TenderId='$TId' AND i.IFBId='$IFBId' AND i.UserId='$UserId'");
        $result = $query->getResultArray();
        return $result;
    }

    //pendin
    public function UpdateDocumentchargeDetails($docid = null) {
        $query = $this->query("
        UPDATE procurementPlan SET Status='paid' WHERE docid=$docid");
        $result = $query->getResultArray();
        return $result;
    }
}
