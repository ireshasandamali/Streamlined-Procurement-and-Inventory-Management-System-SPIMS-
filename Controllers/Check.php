<?php

namespace App\Controllers;



class Check extends BaseController {

    public function index() {
        
    }


    public function Circulars() {
       

        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/check/Circulars');
        echo view("sys/footer");
    }

    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/employee/edit");
        echo view("sys/footer");
    }
}
