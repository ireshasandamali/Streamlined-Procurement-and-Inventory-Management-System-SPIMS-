<?php

namespace App\Controllers;

use App\Models\AnnouncementModel;
use App\Models\SAnnouncementModel;

class BIDAnnounce extends BaseController {

    public function index() {
        
    }

    public function notice() {
        date_default_timezone_set("Asia/Colombo");
        helper('form');
        $data = array();
        $announcement = new AnnouncementModel();
        $data['announcement'] = $announcement->findall();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'BStart' => ['label' => 'BStart', 'rules' => 'required'],
                'BEnd' => ['label' => 'BEnd', 'rules' => 'required'],
                'BOpen' => ['label' => 'BOpen', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $announcement = new AnnouncementModel();
                $announcement->save([
                    'BStart' => $this->request->getPost('BStart'),
                    'BEnd' => $this->request->getPost('BEnd'),
                    'BOpen' => $this->request->getPost('BOpen'),
                ]);

//echo view("sys/employee/add_success",$data);
                $data['msg'] = "Create IFB Succsessfully";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/bidAnnounce/notice", $data);
        echo view("sys/footer");
    }

    public function view() {
        helper('form');
        $announcement = new AnnouncementModel();
        $data['list'] = $announcement->findAll();
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('BStart') && $this->request->getPost('BOpen')) {
                $data['list'] = $announcement
                        ->where('BStart', $this->request->getPost('BStart'))
                        ->where('BOpen', $this->request->getPost('BOpen'))
                        ->findAll();
            } elseif ($this->request->getPost('BStart')) {
                $data['list'] = $announcement
                        ->where('BStart', $this->request->getPost('BStart'))
                        ->findAll();
            } elseif ($this->request->getPost('BOpen')) {
                $data['list'] = $announcement
                        ->where('BOpen', $this->request->getPost('BOpen'))
                        ->findAll();
            } else {
                $data['list'] = $announcement->findAll();
            }
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/bidAnnounce/view', $data);
        echo view("sys/footer");
    }

    public function edit() {
        echo view("sys/header");
        echo view("sys/menu");
        echo view("sys/bidAnnounce/edit");
        echo view("sys/footer");
    }

    public function shoppinginvitation() {
        date_default_timezone_set("Asia/Colombo");
        helper('form');
        $data = array();
        $sannouncement = new SAnnouncementModel();
        $data['sannouncement'] = $sannouncement->findall();

        // check form is submit as post
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'BStarts' => ['label' => 'BStarts', 'rules' => 'required'],
                'BEnds' => ['label' => 'BEnds', 'rules' => 'required'],
                'BOpens' => ['label' => 'BOpens', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $sannouncement = new SAnnouncementModel();
                $sannouncement->save([
                    'BStarts' => $this->request->getPost('BStarts'),
                    'BEnds' => $this->request->getPost('BEnds'),
                    'BOpens' => $this->request->getPost('BOpens'),
                ]);

//echo view("sys/employee/add_success",$data);
                $data['msg'] = "Create Announcement Succsessfully";
            }
        }
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view("sys/bidAnnounce/shoppinginvitation", $data);
        echo view("sys/footer");
    }

    public function shoppingview() {
        helper('form');
        $sannouncement = new SAnnouncementModel();
        $data['list'] = $sannouncement->findAll();
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('BStarts') && $this->request->getPost('BOpens')) {
                $data['list'] = $sannouncement
                        ->where('BStarts', $this->request->getPost('BStarts'))
                        ->where('BOpens', $this->request->getPost('BOpens'))
                        ->findAll();
            } elseif ($this->request->getPost('BStarts')) {
                $data['list'] = $sannouncement
                        ->where('BStarts', $this->request->getPost('BStarts'))
                        ->findAll();
            } elseif ($this->request->getPost('BOpens')) {
                $data['list'] = $sannouncement
                        ->where('BOpens', $this->request->getPost('BOpens'))
                        ->findAll();
            } else {
                $data['list'] = $sannouncement->findAll();
            }
        }

        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        echo view("sys/header");
        echo view('sys/menu_' . $user_type);
        echo view('sys/bidAnnounce/shoppingview', $data);
        echo view("sys/footer");
    }
      public function changeNCBstatuscheck($id = null, $Status = null,$AId = null) {
        //echo $id;
         //$id= $this->request->getPost('id');
        $data = array();
        $announcement = new AnnouncementModel();
        $data['list'] = $announcement->getAnnounceDetails($AId);
        $announcement->update($id, [
            'OpenStatus' => $Status,
        ]);
        return redirect()->to('SubmitedBid/OpenedBidreport', $data);

        //echo $employee->getLastQuery()->getQuery();
    }
    
    //Change Open Status when open bid SubmitedBid/OpenedBidreport
      public function changeNCBstatus($id = null, $Status = null) {       
        $announcement = new AnnouncementModel();        
        $announcement->update($id, [
            'OpenStatus' => $Status,
            "OpenedDate" => date("Y-m-d"),
        ]);
        return redirect()->to('SubmitedBid/OpenedBidreport/'.$id);
       
    }
    
      public function changeNCBstatuss($ids = null, $Status = null) {       
        $sannouncement = new SAnnouncementModel();        
        $sannouncement->update($ids, [
            'OpenStatus' => $Status,
            "OpenedDate" => date("Y-m-d"),
        ]);
        return redirect()->to('SubmitedBid/OpenedBidreport/'.$ids);
       
    }
}
