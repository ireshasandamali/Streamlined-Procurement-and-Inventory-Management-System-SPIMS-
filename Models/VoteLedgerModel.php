<?php

namespace App\Models;
use CodeIgniter\Model;
class VoteLedgerModel extends Model{
    protected $table="voteledger";
    protected $primaryKey="id";
    protected $allowedFields =['id','Vote','Description','Allocation','liability','expenditure','balance'];
}