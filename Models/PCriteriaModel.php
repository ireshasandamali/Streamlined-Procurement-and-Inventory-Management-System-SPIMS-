<?php

namespace App\Models;
use CodeIgniter\Model;
class PCriteriaModel extends Model{
    protected $table="PACriteria";
    protected $primaryKey="id";
    protected $allowedFields =['id','PCriteria'] ;
}