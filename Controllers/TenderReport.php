<?php

namespace App\Controllers;

use App\Models\TenderModel;
use App\Models\TenderItemModel;
use App\Models\SpecModel;
use App\Models\TenderRequestModel;
use App\Models\CostEstimateMasterModel;
use App\Models\EstimateOtherModel;
use App\Models\PrizeSchuleModel;

class TenderReport extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function viewTspec($TId) {
        helper('form');
        $specification = new SpecModel();
        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $specification->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $specification->where('TId', $TId)->findAll();
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/TenderReport/viewTspec', $data);
        echo view("sys/footer");
    }

    public function updatespecststatus() {
        helper('form');
        $specification = new SpecModel();
        $TItem = new TenderItemModel();
        $newdata = [
            "Status" => $this->request->getPost('action')
        ];
        $specification->where(['specid' => $this->request->getPost('specid')])->set($newdata)->update();
        $data['lists'] = $specification->findAll();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/tender/viewmore', $data);
        echo view('sys/footer');
    }
}
