<?php

namespace App\Validation;

use App\Models\UserModel;
use App\Models\EmployeeModel;

class UserRules {

    public function validateUser(string $str, string $fields, array $data) {
        $model = new UserModel();
        // $models = new UsersModel();
        $user = $model->where('UserName', $data['username'])->first();
        //print_r($user);

        if (!$user)
            return false;
        return password_verify($data['password'], $user['Password']);
    }

    public function validate_NIC(string $str, string $fields, array $data) {
        $employee = new EmployeeModel();

        if (strlen($data['NIC']) == 12 || strlen($data['NIC']) == 10) {
            return true;
        } else {
            return false;
        }
    }
    
    public function validate_TEL(string $str, string $fields, array $data) {
        $employee = new EmployeeModel();

        if (strlen($data['TelNo']) == 10) {
            return true;
        } else {
            return false;
        }
    }
}
