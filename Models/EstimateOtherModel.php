<?php

namespace App\Models;
use CodeIgniter\Model;
class EstimateOtherModel extends Model{
    protected $table="EstimateOther";
    protected $primaryKey="EOC_ID";
    protected $allowedFields =['EOC_ID','EID','TId','Description','Amount','TotalOthers'];
}