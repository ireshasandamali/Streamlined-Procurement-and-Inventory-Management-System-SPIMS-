<?php

namespace App\Models;
use CodeIgniter\Model;
class InvitationModel extends Model{
    protected $table="invitation";
    protected $primaryKey="id";
    protected $allowedFields =['id','TId','DCharges','BSecurity','IFBId','refNo'] ;
}