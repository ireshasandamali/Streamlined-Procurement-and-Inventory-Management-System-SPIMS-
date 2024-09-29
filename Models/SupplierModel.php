<?php

namespace App\Models;
use CodeIgniter\Model;
class SupplierModel extends Model{
    protected $table="registeredsuppliers";
    protected $primaryKey="SupplierId";    
    protected $allowedFields =['SupplierId','business_reg_no','business_name','business_reg_Date','website','MinmumValue','MaxmumValue',
        'SType','location','street','city','province','country','Titles','business_owner_Fname','business_owner_Lname',
        'ostreet','ocity', 'nic', 'prefix','phone','Email','CTitles','Contact_person_Fname','Contact_person_Lname',
        'Cstreet','Ccity', 'Cnic', 'Cprefix','Cphone','CEmail','RegDOC','UserId'
        ] ;
    
   
    
}