<?php

namespace App\Models;
use CodeIgniter\Model;
class VoteModel extends Model{
    protected $table="vote";
    protected $primaryKey="id";
    protected $allowedFields =['id','Vote','Description','Allocation'];
}