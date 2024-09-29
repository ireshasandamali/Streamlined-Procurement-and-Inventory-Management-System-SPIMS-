<?php

namespace App\Models;
use CodeIgniter\Model;
class CostEstimateModel extends Model{
    protected $table="Costestimate";
    protected $primaryKey="Estimateid";
    protected $allowedFields =['Estimateid','TId','ItemId','TName','Item','Qty','UCost','OtherCost','TCost','Total','Vat','TotalECost'];
}