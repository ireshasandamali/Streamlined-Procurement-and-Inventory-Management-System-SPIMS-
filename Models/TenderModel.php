<?php

namespace App\Models;

use CodeIgniter\Model;

class TenderModel extends Model {

    protected $table = "tender";
    protected $primaryKey = "Tenderid";
    protected $allowedFields = ['Tenderid', 'Description', 'PType', 'ICategory', 'PStatus', 'Location', 'BStartDate', 'inventory_letter', 'specStatus', 'specApprovedDate', 'costStatus', 'estimateApprovedDate', 'OpenStatus'];

    //View More
    public function getTenderDetails($Tenderid = null) {
        $query = $this->query("
        SELECT * FROM tender t 
        LEFT JOIN tender_request r ON t.Tenderid = r.TenderId
        LEFT JOIN itemrequest i ON i.RequestID = r.RequestId
        WHERE t.Tenderid='$Tenderid'");
        $result = $query->getResultArray();
        return $result;
    }

    //View More
    public function getRequestItemDetails($Tenderid = null) {
        $query = $this->query("
        SELECT * FROM tender t 
        LEFT JOIN tender_request r ON t.Tenderid = r.TenderId
        LEFT JOIN itemrequest i ON i.RequestID = r.RequestId
        LEFT JOIN ReqItem a ON i.RequestID = a.RId
        WHERE t.Tenderid='$Tenderid'");
        $result = $query->getResultArray();
        return $result;
    }

    public function getTendercost($Tenderid = null) {
        $query = $this->query("
        SELECT *, SUM(Total_Cost) AS TCost
        FROM tender t
        LEFT JOIN costestimatemaster c ON c.TId =t.Tenderid  WHERE t.Tenderid='$Tenderid' GROUP BY t.Tenderid");
        $result = $query->getResultArray();
        return $result;
    }

    public function getNCBTenderDetails($Tenderid = null) {
        $query = $this->query("
        SELECT * FROM tender t  where t.Tenderid='$Tenderid' AND t.PType = 'NCB'");
        $result = $query->getResultArray();
        return $result;
    }

    public function joinTenderDetails() {
        $query = $this->query("
        SELECT *
        FROM tender i
        INNER JOIN TItem r ON i.Tenderid = r.TId
        INNER JOIN invitation n ON i.Tenderid = n.TId
        INNER JOIN CostestimateMaster m ON i.Tenderid = m.TId
        INNER JOIN EstimateOther o ON i.Tenderid = o.TId
        INNER JOIN specification s ON i.Tenderid = s.TId;");

        $result = $query->getResultArray();
        return $result;
    }

    public function joinTenderDetailswithannouncement($Tenderid = null) {
        $query = $this->query("
       
        SELECT *,a.id AS 'AId' 
        FROM `tender` t 
        INNER JOIN invitation i ON i.TId =t.Tenderid 
        INNER JOIN announcement a ON a.id=i.IFBId WHERE t.Tenderid='$Tenderid'");

        $result = $query->getResultArray();
        return $result;
    }

    public function gettenderdetailsviewtender($Tenderid = null) {
        $query = $this->query("
       
        SELECT * 
        FROM `tender` t 
        WHERE t.Tenderid='$Tenderid'");
        $result = $query->getResultArray();
        return $result;
    }

    public function TenderDetailsforpc($TId = null) {
        $query = $this->query("
       
        SELECT *,a.id AS 'AId' 
        FROM `tender` t 
        INNER JOIN invitation i ON i.TId =t.Tenderid 
        INNER JOIN announcement a ON a.id=i.IFBId WHERE t.Tenderid='$TId'");

        $result = $query->getResultArray();
        return $result;
    }

//tenderprogress
    public function getTenderprogress() {
      
        
        $query = $this->query("
       
       SELECT *,a.id AS 'AId', t.Description AS 'TName',t.Location AS 'glocation', y.date_submitted AS 'drec', SUM(k.Total_Cost) as 'Costesitmate'  
        FROM `tender` t 
        LEFT JOIN invitation i ON i.TId =t.Tenderid 
        LEFT JOIN announcement a ON a.id=i.IFBId
        LEFT JOIN committee c ON c.PNumber =t.Tenderid
        LEFT JOIN costestimatemaster k ON k.TId = t.Tenderid 
        LEFT JOIN pcaward p ON p.TenderId = t.Tenderid 
        LEFT JOIN tecreportdetails y ON y.TenderId = t.Tenderid
        LEFT JOIN awarddata w ON w.TenderId = t.Tenderid  GROUP BY t.Tenderid;");

        $result = $query->getResultArray();
        return $result;
    }

    public function UpdatetendercosteDetails($id = null) {
        $query = $this->query("
        UPDATE tender SET Status='1' WHERE id=$id");
        $result = $query->getResultArray();
        return $result;
    }

    //tenderprogress
    public function getTenderprogresscheck() {
        $query = $this->query("
       
        SELECT *,a.id AS 'AId', SUM(k.Total_Cost) as 'Costesitmate'  
        FROM `tender` t 
        LEFT JOIN invitation i ON i.TId =t.Tenderid 
        LEFT JOIN tender_request j ON j.TenderId =t.Tenderid 
        LEFT JOIN itemrequest r ON r.RequestID =j.RequestId 
        LEFT JOIN announcement a ON a.id=i.IFBId
        LEFT JOIN committee c ON c.PNumber =t.Tenderid
        LEFT JOIN costestimatemaster k ON k.TId = t.Tenderid GROUP BY t.Tenderid;");

        $result = $query->getResultArray();
        return $result;
    }

    //after viva viewtender
    public function getviewtender($Tenderid = null) {
        $query = $this->query("
        SELECT t.*, IFNULL(SUM(a.Totalcost), 0) AS tCost, v.Allocation - IFNULL(SUM(a.Totalcost), 0) AS balanceamount 
        FROM tender t       
        LEFT JOIN vote v ON t.ICategory = v.Vote 
        LEFT JOIN awarddata a ON a.TenderId = t.Tenderid WHERE t.Tenderid='$Tenderid' GROUP BY v.Vote;");

        $result = $query->getResultArray();
        return $result;
    }
    
    
    //after viva viewtender
    public function getviewtendercostestimate($Tenderid = null) {
        $query = $this->query("
        SELECT t.*, IFNULL(SUM(a.Totalcost), 0) AS tCost, v.Allocation - IFNULL(SUM(a.Totalcost), 0) AS balanceamount ,c.vat AS VAT
        FROM tender t       
        LEFT JOIN vote v ON t.ICategory = v.Vote 
        LEFT JOIN awarddata a ON a.TenderId = t.Tenderid 
        LEFT JOIN costestimatemaster c ON c.TId=t.Tenderid
        WHERE t.Tenderid='$Tenderid' GROUP BY v.Vote;");

        $result = $query->getResultArray();
        return $result;
    }
     //re viva View More
    public function getTenderDetailsre($Tenderid = null) {
        $query = $this->query("
        SELECT * FROM tender t 
        LEFT JOIN tender_request r ON t.Tenderid = r.TenderId
        LEFT JOIN itemrequest i ON i.RequestID = r.RequestId
        WHERE t.Tenderid='$Tenderid' GROUP BY t.Tenderid ");
        $result = $query->getResultArray();
        return $result;
    }
//tenderprogress
    public function getTenderprogressre($PType=null,$ICategory=null) {
        $where = null;
        
         if(!empty($PType)){
          $where.=" t.PType='$PType' AND";  
        }
        
         if(!empty($ICategory)){
          $where.=" t.ICategory='$ICategory' AND";  
        }
        if(!empty($where)){
            $where = substr($where, 0,-3);
            $where = " WHERE $where ";
        }
        
        $query = $this->query("
       
       SELECT *,a.id AS 'AId', t.Description AS 'TName',t.Location AS 'glocation', y.date_submitted AS 'drec', SUM(k.Total_Cost) as 'Costesitmate'  
        FROM `tender` t 
        LEFT JOIN invitation i ON i.TId =t.Tenderid 
        LEFT JOIN announcement a ON a.id=i.IFBId
        LEFT JOIN committee c ON c.PNumber =t.Tenderid
        LEFT JOIN costestimatemaster k ON k.TId = t.Tenderid 
        LEFT JOIN pcaward p ON p.TenderId = t.Tenderid 
        LEFT JOIN tecreportdetails y ON y.TenderId = t.Tenderid
        LEFT JOIN awarddata w ON w.TenderId = t.Tenderid $where GROUP BY t.Tenderid;");

        $result = $query->getResultArray();
        return $result;
    }
    
   
//tenderprogress
    public function getTenderprogressretask($Year=null, $PType=null,$ICategory=null,$rmonth=null) {
        $where = null;
        if(!empty($Year)){
          $where.=" YEAR(t.BStartDate)='$Year' AND";  
        }
        if(!empty($rmonth)){
          $where.=" MONTH(t.BStartDate)='$rmonth' AND";  
        }
         if(!empty($PType)){
          $where.=" t.PType='$PType' AND";  
        }
        
         if(!empty($ICategory)){
          $where.=" t.ICategory='$ICategory' AND";  
        }
        if(!empty($where)){
            $where = substr($where, 0,-3);
            $where = " WHERE $where ";
        }
        
        $query = $this->query("
       
       SELECT *,a.id AS 'AId', t.Description AS 'TName',t.Location AS 'glocation', y.date_submitted AS 'drec', SUM(k.Total_Cost) as 'Costesitmate'  
        FROM `tender` t 
        LEFT JOIN invitation i ON i.TId =t.Tenderid 
        LEFT JOIN announcement a ON a.id=i.IFBId
        LEFT JOIN committee c ON c.PNumber =t.Tenderid
        LEFT JOIN costestimatemaster k ON k.TId = t.Tenderid 
        LEFT JOIN pcaward p ON p.TenderId = t.Tenderid 
        LEFT JOIN tecreportdetails y ON y.TenderId = t.Tenderid
        LEFT JOIN awarddata w ON w.TenderId = t.Tenderid $where GROUP BY t.Tenderid;");

        $result = $query->getResultArray();
        return $result;
    }

}
