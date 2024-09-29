<?php

namespace App\Models;

use CodeIgniter\Model;

class SDocumentModel extends Model {

    protected $table = "SDocument";
    protected $primaryKey = "DOCid";
    protected $allowedFields = ['DOCid', 'BidDOC', 'UserId', 'TenderId', 'AnnounceId', 'fileType'];

    public function GetSDocumentDetails($TId = null, $UserId = null) {
        $query = $this->query("
        SELECT * FROM `SDocument` 
        LEFT JOIN tender ON tender.Tenderid = SDocument.TenderId
        WHERE SDocument.UserId = '$UserId' AND tender.Tenderid='$TId'");
        $result = $query->getResultArray();
        return $result;
    }

    public function joinsupplierwithSDocumentDetails($TId = null) {
        $query = $this->query("
        SELECT * FROM `SDocument` 
        LEFT JOIN tender ON tender.Tenderid = SDocument.TenderId
        LEFT JOIN nonregisteredsuppliers ON nonregisteredsuppliers.UserId = SDocument.UserId
        WHERE SDocument.TenderId = '$TId'");
        $result = $query->getResultArray();
        return $result;
    }

    //bid bond list
    public function getBidBonddetails() {
        $query = $this->query("
        SELECT * FROM sdocument s
        LEFT JOIN invitation i ON i.TId = s.TenderId
        LEFT JOIN announcement a ON a.id = i.IFBId
        LEFT JOIN nonregisteredsuppliers n ON n.UserId= s.UserId  WHERE s.fileType='Bid Bond'  GROUP BY n.business_name ORDER BY s.TenderId");
        $result = $query->getResultArray();
        return $result;
    }
}
