<?php


namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table="Users";
    protected $primaryKey ="UsersId";
    protected $allowedFields =['UsersId','UserName','Password','UserType']; 
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    
    protected function beforeInsert(array $data) {
        $data = $this->passwordHash($data);  
        return $data;
    }

    protected function beforeUpdate(array $data) {
        $data = $this->passwordHash($data);       
        return $data;
    }
    
    protected function passwordHash(array $data) {
        if (isset($data['data']['Password']))
            $data['data']['Password'] = password_hash($data['data']['Password'], PASSWORD_DEFAULT);

        return $data;
    }


}