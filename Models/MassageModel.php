<?php

namespace App\Models;
use CodeIgniter\Model;
class MassageModel extends Model{
    protected $table="massage";
    protected $primaryKey="msgid";
    protected $allowedFields =['msgid','name','email','subject','message'] ;
}