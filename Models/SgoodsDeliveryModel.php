<?php

namespace App\Models;
use CodeIgniter\Model;
class SgoodsDeliveryModel extends Model{
    protected $table="goodsdelivery";
    protected $primaryKey="id";
    protected $allowedFields =['id','Item','deliverydate','TenderId','AnnounceId','UserId'];

   //OpenedTender 2028.03.30
    public function GetSgoodsDeliveryDetails($TId=null,$UserId=null) {
        $query = $this->query("
        SELECT * FROM `goodsdelivery` 
        LEFT JOIN titem ON titem.TId = goodsdelivery.TenderId AND titem.Item=goodsdelivery.Item
        LEFT JOIN tender ON tender.Tenderid = goodsdelivery.TenderId
        WHERE goodsdelivery.UserId = '$UserId' AND  goodsdelivery.TenderId = '$TId' GROUP BY titem.Item");
        $result = $query->getResultArray();
    return $result;
    }
     //OpenedTender
    public function GetSgoodsDeliveryDetailsold($UserId=null) {
        $query = $this->query("
        SELECT * FROM `goodsdelivery` 
        LEFT JOIN titem ON titem.TId = goodsdelivery.TenderId
        LEFT JOIN tender ON tender.Tenderid = goodsdelivery.TenderId
        WHERE goodsdelivery.UserId = '$UserId' GROUP BY titem.Item");
        $result = $query->getResultArray();
    return $result;
    }
    //view data for preliminaryEvaluation.php
    public function GetgoodsDeliveryDetails($TId=null) {
        $query = $this->query("
        SELECT * FROM `goodsdelivery` 
        WHERE goodsdelivery.TenderId = '$TId' GROUP BY goodsdelivery.UserId ");
        $result = $query->getResultArray();
    return $result;
    }
     
}