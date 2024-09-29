<?php

namespace App\Models;

use CodeIgniter\Model;

class VoteModel extends Model {

    protected $table = "vote";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'Year', 'Vote', 'Description', 'Allocation', 'liability', 'expenditure', 'balance'];

    //View More
    public function getvotebalance() {
        $query = $this->query("
        SELECT v.*, IFNULL(SUM(a.Totalcost), 0) AS tCost, v.Allocation - IFNULL(SUM(a.Totalcost), 0) AS balanceamount  
        FROM vote v 
        LEFT JOIN tender t ON t.ICategory = v.Vote 
        LEFT JOIN awarddata a ON a.TenderId = t.Tenderid GROUP BY v.Vote;");
        $result = $query->getResultArray();
        return $result;
    }

    //revivA
    public function getvotebalanceaspercentage() {
        $query = $this->query("
        SELECT v.*, p.Year,
        IFNULL(SUM(a.Totalcost), 0) AS tCost, 
        v.Allocation - IFNULL(SUM(a.Totalcost), 0) AS balanceamount,
        ROUND(((v.Allocation - IFNULL(SUM(a.Totalcost), 0)) * 100 / v.Allocation), 0) AS percentage
        FROM vote v 
        LEFT JOIN tender t ON t.ICategory = v.Vote    
        LEFT JOIN awarddata a ON a.TenderId = t.Tenderid 
        LEFT JOIN procurementplan p ON p.Vote = v.Vote GROUP BY v.Vote");
        $result = $query->getResultArray();
        return $result;
    }
    //revivA
    public function getvotebalanceaspercentagervtask() {
        $query = $this->query("
        SELECT v.*,p.id AS PId, p.Year,
        IFNULL(SUM(a.Totalcost), 0) AS tCost, 
        v.Allocation - IFNULL(SUM(a.Totalcost), 0) AS balanceamount,
        ROUND(((v.Allocation - IFNULL(SUM(a.Totalcost), 0)) * 100 / v.Allocation), 0) AS percentage
        FROM vote v 
        LEFT JOIN tender t ON t.ICategory = v.Vote    
        LEFT JOIN awarddata a ON a.TenderId = t.Tenderid 
        LEFT JOIN procurementplan p ON p.Vote = v.Vote 
        LEFT JOIN procuremenyitem i ON p.id = i.PId GROUP BY v.Vote");
        $result = $query->getResultArray();
        return $result;
    }
    
    
   

}
