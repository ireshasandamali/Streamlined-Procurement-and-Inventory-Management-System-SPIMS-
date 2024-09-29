<?php

namespace App\Controllers;

use App\Models\VoteModel;
use App\Models\ProcurementPlanModel;
use App\Models\AwardingdataModel;

class Vote extends BaseController {

    public function index() {
        
    }

    public function add() {

        helper('form');
        $data = array();
        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Vote' => ['label' => 'Vote', 'rules' => 'required|checkVoteExistence[Vote]'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'Allocation' => ['label' => 'Allocation', 'rules' => 'required']
            ];
            $errors = [
                'Vote' => [
                    'checkVoteExistence' => 'Vote Already Exist...!'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $vote = new VoteModel();
                $vote->save([
                    'Vote' => $this->request->getPost('Vote'),
                    'Description' => $this->request->getPost('Description'),
                    'Allocation' => $this->request->getPost('Allocation')
                ]);

                $data['msg'] = "Vote Sucessfully Created";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/vote/add', $data);
        echo view("sys/footer");
    }

    public function view() {
        helper('form');
        $vote = new VoteModel();
        $data['list'] = $vote->findAll();

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('Year') && $this->request->getPost('Description') && $this->request->getPost('Vote')) {
                $data['list'] = $vote
                        ->where('Year', $this->request->getPost('Year'))
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
            } elseif ($this->request->getPost('Year')) {
                $data['list'] = $vote
                        ->where('Year', $this->request->getPost('Year'))
                        ->findAll();
            } elseif ($this->request->getPost('Vote')) {
                $data['list'] = $vote
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->findAll();
            } elseif ($this->request->getPost('Description')) {
                $data['list'] = $vote
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
            } else {
                $data['list'] = $vote->findAll();
            }
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/vote/view', $data);
        echo view("sys/footer");
    }

    public function editVote($VoteId = null) {
        helper('form');
        $data = array();
        $vote = new VoteModel();
        $data['vote'] = $vote->where('id', $VoteId)->first();

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/vote/editVote", $data);
        echo view("sys/footer");
    }

    public function update() {
        helper('form');
        $data = array();
        $vote = new VoteModel();
        $data['vote'] = $vote->where('id', $this->request->getPost('id'))->first();
        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Year' => ['label' => 'Year', 'rules' => 'required'],
                'Vote' => ['label' => 'Vote', 'rules' => 'required'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'Allocation' => ['label' => 'Allocation', 'rules' => 'required']
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $vote = new VoteModel();
                $vote->update($this->request->getPost('id'), [
                    'Year' => $this->request->getPost('Year'),
                    'Vote' => $this->request->getPost('Vote'),
                    'Description' => $this->request->getPost('Description'),
                    'Allocation' => $this->request->getPost('Allocation')
                ]);

                $data['msg'] = "Vote Sucessfully Updated";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/vote/editVote", $data);
        echo view("sys/footer");
    }

    public function removeItem($voteid) {

        $vote = new VoteModel();
        $vote->where('id', $voteid);
        $vote->delete();
        $this->view();
    }
//change 05.17 to bellow
    public function voteLedgerbeforereviva() {
        helper('form');
        $data = array();
        $vote = new VoteModel();
        //$data['lista'] = $vote->findAll();
        $data['list'] = $vote->getvotebalanceaspercentage();

        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('Year') && $this->request->getPost('Description') && $this->request->getPost('Vote')) {
                $data['list'] = $vote
                        ->where('Year', $this->request->getPost('Year'))
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
            } elseif ($this->request->getPost('Year')) {
                $data['list'] = $vote
                        ->where('Year', $this->request->getPost('Year'))
                        ->findAll();
            } elseif ($this->request->getPost('Vote')) {
                $data['list'] = $vote
                        ->where('Vote', $this->request->getPost('Vote'))
                        ->findAll();
            } elseif ($this->request->getPost('Description')) {
                $data['list'] = $vote
                        ->where('Description', $this->request->getPost('Description'))
                        ->findAll();
            } else {
                $data['list'] = $vote->getvotebalanceaspercentage();
            }
        }
        echo $vote->getLastQuery()->getQuery();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/vote/voteLedgerbeforereviva', $data);
        echo view("sys/footer");
    }
    
    public function voteLedger() {
    helper('form');
    $data = array();
    $vote = new VoteModel();
    $data['list'] = $vote->getvotebalanceaspercentage();
//echo $vote -> getLastQuery()->getQuery();
    if ($this->request->getMethod() == 'post') {
        $year = $this->request->getPost('Year');
        $voteVal = $this->request->getPost('Vote');
        $description = $this->request->getPost('Description');

        $vote->select('v.*, p.Year, 
                       IFNULL(SUM(a.Totalcost), 0) AS tCost, 
                       v.Allocation - IFNULL(SUM(a.Totalcost), 0) AS balanceamount, 
                       ROUND(((v.Allocation - IFNULL(SUM(a.Totalcost), 0)) * 100 / v.Allocation), 0) AS percentage');
        $vote->from('vote v');
        $vote->join('tender t', 't.ICategory = v.Vote', 'left');
        $vote->join('awarddata a', 'a.TenderId = t.Tenderid', 'left');
        $vote->join('procurementplan p', 'p.Vote = v.Vote', 'left');
        $vote->groupBy('v.Vote');

        if ($year) {
            $vote->where('p.Year', $year);
        }
        if ($voteVal) {
            $vote->where('v.Vote', $voteVal);
        }
        if ($description) {
            $vote->like('v.Description', $description);
        }

        $data['list'] = $vote->findAll();
    }

    echo view("sys/header");
    echo view('sys/menu_' . str_replace(' ', '', strtolower(session()->get('UserType'))));
    echo view('sys/vote/voteLedger', $data);
    echo view("sys/footer");
}

}
