<?php

namespace App\Models;
use CodeIgniter\Model;
class RequestselectionModel extends Model{
    protected $table="RSelection";
    protected $primaryKey="id";
    protected $allowedFields =['id','ReqId','TenderId','SelectionDate'] ;
}