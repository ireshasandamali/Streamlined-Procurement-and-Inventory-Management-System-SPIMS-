<?php

namespace App\Models;

use CodeIgniter\Model;

class ResettokenModel extends Model{
    protected $table            = 'reset_tokens';
    protected $primaryKey       = 'id';   
    protected $allowedFields    = ['id','user_id','token','created_at'];
 
}
