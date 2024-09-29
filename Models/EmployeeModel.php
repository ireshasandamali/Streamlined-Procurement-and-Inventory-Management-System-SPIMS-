<?php

namespace App\Models;
use CodeIgniter\Model;
class EmployeeModel extends Model{
    protected $table="employee";
    protected $primaryKey="id";
    protected $allowedFields =['id', 'CivilStatus','FirstName','LastName','Address','Email','TelNo','DOB','NIC','gender','Division','task','CName','Designation','EmpType','UserId','Status'] ;

      //View Bidders
    public function joinupdateprofile($EmpId=null) {
    $query = $this->query("
        SELECT *
        FROM employee i          
        INNER JOIN User u ON i.UserId = u.UserId where i.UserId='$EmpId'");
        $result = $query->getResultArray();
    return $result;
    }
    
      public function viewEmpprofile($EmpId=null) {
    $query = $this->query("
        SELECT *
        FROM employee i          
        INNER JOIN User u ON i.UserId = u.UserId where i.id='$EmpId'");
        $result = $query->getResultArray();
    return $result;
    }
    
    public function openingmember() {
    $query = $this->query("
        SELECT *
         FROM employee i          
        WHERE i.EmpType ='Bid Opening Committee' OR i.EmpType='TECMember'
    ");
    $result = $query->getResultArray();
    return $result;
}
  public function TECmember() {
    $query = $this->query("
        SELECT *
         FROM employee i          
        WHERE i.EmpType ='TEC Chairmen' OR i.EmpType='TECMember'
    ");
    $result = $query->getResultArray();
    return $result;
}
    
}