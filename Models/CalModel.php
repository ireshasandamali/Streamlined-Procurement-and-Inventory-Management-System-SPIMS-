<?php

namespace App\Models;
use CodeIgniter\Model;
class CalModel extends Model{
    protected $table="calculation";
    protected $primaryKey="id";
    protected $allowedFields =['id','item','qty','uprise','total','other','discount','vat','prise'];
    
     public function monthly_listings($year=null,$month=null){
        $query = $this->query("
        SELECT item_type, 
        COUNT(item_id) AS 'nooflist' FROM ewaste_listings 
        WHERE YEAR(date_added)='$year' AND MONTH(date_added)='$month' 
        GROUP BY item_type;");
        $result = $query->getResultArray();
        return $result;
    }
    
    
    
}
