<?php

namespace App\Models;
use CodeIgniter\Model;
class PrizeSchuleModel extends Model{
    protected $table="prizeSchedule";
    protected $primaryKey="PSchedule_ID";
    protected $allowedFields =['PSchedule_ID','TId','IId','Item','Qty','Description_1','Description_2','Description_3',
      'Warranty','Description_4' ,'UCost', 'Total_Cost','vat','vatAmmount','ETotalC'];
}