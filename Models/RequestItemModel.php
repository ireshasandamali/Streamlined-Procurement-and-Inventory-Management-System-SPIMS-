<?php

namespace App\Models;
use CodeIgniter\Model;
class RequestItemModel extends Model{
    protected $table="ReqItem";
    protected $primaryKey="RItemid";
    protected $allowedFields =['RItemid','RId','Vote','Description','ICatergory','ItemName','ListItemId','Qty','PQty','Unit','sample_image'];
    
     //viewItem
     public function getrequestitemDetails($requestId=null) {
        $query = $this->query("
        SELECT * FROM ReqItem i  where i.RId='$requestId'");
        $result = $query->getResultArray();
        return $result;
    }
}
