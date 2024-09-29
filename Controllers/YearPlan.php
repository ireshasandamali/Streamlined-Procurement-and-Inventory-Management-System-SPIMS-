<?php

namespace App\Controllers;

use App\Models\ProcurementPlanModel;
use App\Models\VoteModel;
use App\Models\ProcurementItemModel;

class YearPlan extends BaseController {

    public function index() {
        echo "-----Welcome to Year Procurement Plan-------";
    }

    public function viewYearPlan($ProId = null) {
        helper('form');

        $procurementPlan = new ProcurementPlanModel();
        $procurementItem = new ProcurementItemModel();
        $data['list'] = $procurementPlan->findAll();
        $data['listy'] = $procurementItem->findAll();

        $data['listi'] = $procurementItem->getProyear();
        //echo $procurementPlan->getLastQuery()->getQuery();
        //$data['listi'] = $procurementItem->getProItemdetails($ProId);
        // echo $procurementItem -> getLastQuery()->getQuery();    
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/yearPlan/viewYearPlan", $data);
        echo view("sys/footer");
    }
}
