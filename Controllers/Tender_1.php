<?php

namespace App\Controllers;

use App\Models\TenderModel;
use App\Models\TenderItemModel;

class Tender extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function create() {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $data['tender_list'] = $tender->findall();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'PType' => ['label' => 'PType', 'rules' => 'required'],
                'ICategory' => ['label' => 'ICategory', 'rules' => 'required'],
                'BStartTime' => ['label' => 'BStartTime', 'rules' => 'required'],
                'BStartDate' => ['label' => 'BStartDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $tender = new TenderModel();

                $tender->save([
                    'Description' => $this->request->getPost('Description'),
                    'PType' => $this->request->getPost('PType'),
                    'ICategory' => $this->request->getPost('ICategory'),
                    'BStartTime' => $this->request->getPost('BStartTime'),
                    'BStartDate' => $this->request->getPost('BStartDate'),
                ]);
                echo $action = $this->request->getPost('action');

                $TenderId = $tender->getInsertID();

                if ($action == 'next') {

                    return $this->addItem($TenderId);
                }
                $data['msg'] = "$action Tender Successfully Created";
            }
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/tender/create", $data);
        echo view("sys/footer");
    }

    public function view() {
        helper('form');
        $tender = new TenderModel();
        if ($this->request->getMethod() == 'post') {
            $data['list'] = $tender->where('ICategory', $this->request->getPost('ICategory'))->findAll();
        } else {
            $data['list'] = $tender->findAll();
        }

        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/tender/view', $data);
        echo view("sys/footer");
    }

    /* function for add Item for each tender did not create separate controller */

    public function addItem($Tenderid = null) {
        helper('form');
        $data = array();
        $tender = new TenderModel();
        $data['tender_list'] = $tender->findall();
        $data['TId'] = $Tenderid;

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Item' => ['label' => 'Item', 'rules' => 'required'],
                'Qty' => ['label' => 'Qty', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $TItem = new TenderItemModel();

                $TItem->save([
                    'Item' => $this->request->getPost('Item'),
                    'Qty' => $this->request->getPost('Qty'),
                    'TId' => $this->request->getPost('TId'),
                ]);
                $data['TId'] = $this->request->getPost('TId');
                $data['msg'] = "Tender Successfully Created";
            }
        }
        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $TItem->where('TId', $data['TId'] )->findAll();
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/tender/addItem", $data);
        echo view("sys/footer");
    }

    public function viewaddItem($TId) {
        helper('form');
        $TItem = new TenderItemModel();

        if ($this->request->getMethod() == 'post') {
            $data['list'] = $TItem->where('TId', $this->request->getPost('TId'))->findAll();
        } else {
            $data['list'] = $TItem->where('TId', $TId)->findAll();
        }
        echo view("sys/header");
        echo view("sys/menu");
        echo view('sys/tender/viewaddItem', $data);
        echo view("sys/footer");
    }

    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/tender/edit");
        echo view("sys/footer");
    }
}
