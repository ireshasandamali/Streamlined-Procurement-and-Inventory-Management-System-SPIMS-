<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model {

    protected $table = "inventory";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'TenderId','Itemid', 'ItemName', 'Qty', 'PDate', 'IssueDate', 'Status'];

    
    //request item balance
     public function getInventroyDataasgroup($itemID=null) {
        $query = $this->query("
        SELECT *,SUM(Qty) AS Quantity FROM inventory WHERE inventory.Itemid='$itemID'  GROUP BY Itemid");
        $result = $query->getResultArray();
        return $result;
    }
    
     public function getInventroybalancechange($ItemId=null) {
        $query = $this->query("
      SELECT *,SUM(i.Qty) AS Quantity, (i.Qty) -(r.Qty) AS Balanace
      FROM inventory i 
      LEFT JOIN reqitem r ON r.ListItemId = i.Itemid WHERE i.Itemid='$ItemId' GROUP BY i.Itemid");
        $result = $query->getResultArray();
        return $result;
    }
     public function getInventroydetails($ItemId=null) {
        $query = $this->query("
      SELECT *,SUM(i.Qty) AS Quantity
FROM inventory i 
 WHERE i.ItemName='$ItemId' GROUP BY i.Itemid");
        $result = $query->getResultArray();
        return $result;
    }
     public function getInventroyde($ItemId=null) {
        $query = $this->query("
      SELECT *
FROM inventory i 
 WHERE i.Itemid='$ItemId' ");
        $result = $query->getResultArray();
        return $result;
    }
    
    //change later
      public function getInventroybalance($ItemId=null) {
        $query = $this->query("
      SELECT *,SUM(i.Qty) AS Quantity
      FROM inventory i 
      LEFT JOIN reqitem r ON r.ListItemId = i.Itemid WHERE i.Itemid='$ItemId' GROUP BY i.Itemid");
        $result = $query->getResultArray();
        return $result;
    }
    
     //change later not used
      public function getInventroywithbalance($ItemId=null) {
        $query = $this->query("
      SELECT i.*, SUM(i.Qty) AS Quantity, SUM(i.Qty) - COALESCE(SUM(r.Qty), 0) AS Balance
      FROM inventory i LEFT JOIN reqitem r ON r.ListItemId = i.Itemid WHERE i.Itemid = '$ItemId' GROUP BY i.Itemid");
        $result = $query->getResultArray();
        return $result;
    }
    
     //request item balance
     public function getInventroyall() {
        $query = $this->query("
        SELECT *,SUM(Qty) AS Quantity FROM inventory  GROUP BY Itemid");
        $result = $query->getResultArray();
        return $result;
    }
}
