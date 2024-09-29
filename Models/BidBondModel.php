<?php

namespace App\Models;
use CodeIgniter\Model;
class BidBondModel extends Model{
    protected $table="bidbond";
    protected $primaryKey="id";
    protected $allowedFields =['id','CompanyName','Description','BSecurity','BStart','VendorId','TenderId','Status'];


   
     
}