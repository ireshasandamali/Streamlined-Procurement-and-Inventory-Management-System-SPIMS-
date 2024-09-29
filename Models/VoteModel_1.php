<?php

namespace App\Models;

use CodeIgniter\Model;

class LoanRequestModel extends Model
{
protected $table = "loan_request";
protected $primaryKey = "id";
protected $allowedFields = ['Year', 'Month', 'Date', 'Employee', 'LoanType', 'Amount', 'Reason', 'Guarantor1', 'Guarantor2', 'Status'];

public function getLoanRequest() {
$query = $this->query("
SELECT l.*, e.*, g1.FirstName as g1FirstName, g1.LastName as g1LastName, g2.FirstName as g2FirstName, g2.LastName as g2LastName, i.*,l.id as requestid, l.Status as rStatus FROM loan_request l LEFT JOIN employee e ON l.Employee=e.EmployeeCode LEFT JOIN employee g1 ON g1.EmployeeCode=l.Guarantor1 LEFT JOIN employee g2 ON g2.EmployeeCode=l.Guarantor2 LEFT JOIN item i ON l.LoanType=i.ItemCode ;");
$result = $query->getResultArray();
return $result;
}

public function getLoanRequestbyRequestId($EmployeeCode = null, $requestid = null) {
$query = $this->query("
SELECT l.*, e.*, g1.FirstName as g1FirstName, g1.LastName as g1LastName, g2.FirstName as g2FirstName, g2.LastName as g2LastName, i.*,l.id as requestid FROM loan_request l LEFT JOIN employee e ON l.Employee=e.EmployeeCode LEFT JOIN employee g1 ON g1.EmployeeCode=l.Guarantor1 LEFT JOIN employee g2 ON g2.EmployeeCode=l.Guarantor2 LEFT JOIN item i ON l.LoanType=i.ItemCode WHERE l.id='$requestid' AND l.Employee='$EmployeeCode'");
$result = $query->getResultArray();
return $result;
}

public function getLoanRequestDetails() {
$query = $this->query("
   SELECT * FROM item  WHERE ItemCode BETWEEN 250 AND 300");
$result = $query->getResultArray();
return $result;

}
public function UpdateLoanRequestDetails($requestid = null, $EmployeeCode = null) {
$query = $this->query("
  UPDATE loan_request SET Status='1' WHERE Id=$requestid AND Employee=$EmployeeCode");
$result = $query->getResultArray();
return $result;

}

public function getApprovedLoanDetails() {
$query = $this->query("
  SELECT t.*, l.*, e.*, g1.FirstName as g1FirstName, g1.LastName as g1LastName, g2.FirstName as g2FirstName, g2.LastName as g2LastName, i.*,l.id as requestid FROM loan_request l LEFT JOIN employee e ON l.Employee=e.EmployeeCode LEFT JOIN employee g1 ON g1.EmployeeCode=l.Guarantor1 LEFT JOIN employee g2 ON g2.EmployeeCode=l.Guarantor2 LEFT JOIN item i ON l.LoanType=i.ItemCode LEFT JOIN loan_types t ON t.ItemCode=l.LoanType WHERE l.Status='1'");
    $result = $query->getResultArray();
        return $result;
}

}