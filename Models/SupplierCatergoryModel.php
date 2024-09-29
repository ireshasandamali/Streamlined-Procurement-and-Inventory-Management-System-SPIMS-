<?php

namespace App\Models;
use CodeIgniter\Model;
class SupplierCatergoryModel extends Model{
    protected $table="SCategory";
    protected $primaryKey="categoryid";
    protected $allowedFields =['categoryid','category','Description'];
}