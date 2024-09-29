<?php

namespace App\Models;
use CodeIgniter\Model;
class DchargepaidModel extends Model{
    protected $table="DChargepaid";
    protected $primaryKey="id";
     protected $allowedFields =['id','UserId','TenderId','IFBId','paidDate','PaidDocId','paidstatus'];
   
}