<?php

namespace App\Controllers;

use App\Models\RequestModel;
use App\Models\CampModel;
use App\Models\RequestItemModel;
use App\Models\VoteModel;
use App\Models\ItemcategoryModel;
use App\Models\NewRequestModel;
use App\Models\InventoryModel;

class ItemRequest extends BaseController {

    public function index() {
        echo "-----Welcome to my first project-------";
    }

    public function createReq() {
        helper('form');
        $data = array();
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));

        // $req = new RequestModel();
        // $data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
                'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],
                'CName' => ['label' => 'Camp', 'rules' => 'required'],
                'ReqDate' => ['label' => 'ReqDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $itemrequest = new RequestModel();

                $itemrequest->save([
                    'Description' => $this->request->getPost('Description'),
                    'Purpose' => $this->request->getPost('Purpose'),
                    'PStatus' => $this->request->getPost('PStatus'),
                    'CName' => $this->request->getPost('CName'),
                    'ReqDate' => $this->request->getPost('ReqDate'),
                    'UserId' => (session()->get('UserId')),
                        //'Status' => $this->request->getPost('Status')
                ]);

                $RequestID = $itemrequest->getInsertID();
                $action = $this->request->getPost('action');
                if ($action == 'add') {
                    return $this->reqItem($RequestID);
                }
                $data['msg'] = "Request Successfully Created";
            }
        }
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view("sys/itemrequest/createReq", $data);
        echo view("sys/footer");
    }

    public function viewReq() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $itemrequest = new RequestModel();

        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        //echo $camp -> getLastQuery()->getQuery();
        //to identify user and display relevent data
        if ((session()->get('UserType')) == 'Requester') {
            $data['list'] = $itemrequest->where('UserId', session()->get('UserId'))->findAll();
        } else {
            $data['list'] = $itemrequest->findAll();
            echo $itemrequest -> getLastQuery()->getQuery();
        }


        /* if((session()->get('UserType'))!='Requester'){
          $data['list'] = $itemrequest->where('UserId',session()->get('UserId'))->findAll();
          }else{
          $data['list'] = $itemrequest->findAll();
          } */
        //echo $itemrequest -> getLastQuery()->getQuery();
        //$data['tender_Status'] = $tender_Status;
        /// $data['tender_Status'] = $itemrequest->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();


        /* if ($user_type == 'Requester') {
          $userId = session()->get('UserId');
          $data['list'] = $itemrequest->where('UserId', $userId)->findAll();
          } else {
          $data['list'] = $itemrequest->findAll();
          } */



        //new search bar to check



        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $itemrequest->where('ICategory', $this->request->getPost('ICategory'))->findAll();
          } else {
          $data['list'] = $itemrequest->findAll();
          } */
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemrequest/viewReq', $data);
        echo view("sys/footer");
    }

    public function reqItem($RequestID = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $ItemList = new ItemcategoryModel();
        $data['Item_list'] = $ItemList->groupBy('Vote')->findall();
        $data['ItemName_list'] = $ItemList->findall();
        $Request = new RequestModel();
        $data['RId'] = $RequestID;

        $vote = new VoteModel();
        $data['vote_list'] = $vote->findall();
        // $data['Item_details'] =  $Request->where('RId', $RequestID)->first();
        //$data['tender_Status'] = $tender_Status;
        //$data['tender_Status'] = $Request->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Vote' => ['label' => 'Vote', 'rules' => 'required'],
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'ICatergory' => ['label' => 'ICatergory', 'rules' => 'required'],
                'ItemName' => ['label' => 'ItemName', 'rules' => 'required'],
                'Qty' => ['label' => 'Qty', 'rules' => 'required'],
                'sample_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[sample_image]|permit_empty'
                    . '|is_image[sample_image]'
                    . '|mime_in[sample_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[sample_image,100]'
                    . '|max_dims[sample_image,1024,768]',
                ],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $newName = null;
                $item = new RequestItemModel();
                $sample_image = $this->request->getFile('sample_image');
                if (!empty($sample_image->getName())) {
                    $newName = $sample_image->getRandomName();
                    $sample_image->move('public/images/' . 'uploads', $newName);
                }
                $item->save([
                    'RItemid' => $this->request->getPost('RItemid'),
                    'RId' => $this->request->getPost('RId'),
                    'Vote' => $this->request->getPost('Vote'),
                    'Description' => $this->request->getPost('Description'),
                    'ICatergory' => $this->request->getPost('ICatergory'),
                    'ItemName' => $this->request->getPost('LItemid'),
                    'ListItemId' => $this->request->getPost('ItemName'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Unit' => $this->request->getPost('Unit'),
                    'sample_image' => $newName,
                ]);
                $data['RId'] = $this->request->getPost('RId');
                $data['msg'] = "Items Successfully added";
            }
        }

        $item = new RequestItemModel();

        if ($this->request->getMethod() == 'post' && $this->request->getPost('action') == 'reqItem') {
            $data['list'] = $item->where('RId', $this->request->getPost('RId'))->findAll();
            $data['Item_details'] = $Request->where('RId', $this->request->getPost('RId'))->first();
        } else {
            $data['list'] = $item->where('RId', $data['RId'])->findAll();
        }
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view("sys/itemrequest/reqItem", $data);
        echo view("sys/footer");
    }

    public function viewItem($requestId = null) {
        helper('form');
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $Request = new RequestModel();

        $item = new RequestItemModel();
        $data['list'] = $Request->getrequestDetails($requestId);
        $data['listi'] = $item->getrequestitemDetails($requestId);

        //$data['tender_Status'] = $tender_Status;
        // $data['tender_Status'] = $Request->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();

        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemrequest/viewItem', $data);
        echo view("sys/footer");
    }

    public function removeReq($Rid) {
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $Request = new RequestModel();
        $Request->where('RequestID', $Rid);
        $Request->delete();
        $this->viewReq();
    }

    public function removeItem($Iid) {

        $item = new RequestItemModel();
        $item->where('RItemid', $Iid);
        $item->delete();
        $this->view();
    }

    public function updateItemrequeststatus() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $itemrequest = new RequestModel();
        $item = new RequestItemModel();
        // $data['tender_Status'] = $itemrequest->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();

        $newdata = [
            "Status" => $this->request->getPost('action'),
            "ApprovedDate" => date("Y-m-d"),
            "comment"=>$this->request->getPost('comment'),
        ];
        $itemrequest->where(['RequestID' => $this->request->getPost('RequestID')])->set($newdata)->update();
        $data['list'] = $itemrequest->findAll();

        //new search bar to check
        //new search bar to check
        if ($this->request->getMethod() == 'post') {
            $camp = new CampModel();
            $data['camp_list'] = $camp->findall();
            if ($this->request->getPost('ReqDate') && $this->request->getPost('CName')) {
                $data['list'] = $itemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } elseif ($this->request->getPost('ReqDate')) {
                $data['list'] = $itemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->findAll();
            } elseif ($this->request->getPost('CName')) {
                $data['list'] = $itemrequest
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } else {
                $data['list'] = $itemrequest->findAll();
            }
        }
        /* $data['list'] = $itemrequest->getrequestDetails();
          $data['listi'] =$item->getrequestitemDetails($this->request->getPost('RequestID')); */
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemRequest/viewReq', $data);
        echo view('sys/footer');
    }

    public function updatecratetenderststatus() {
        helper('form');
        $data = array();
        $camp = new CampModel();
        $data['camp_list'] = $camp->findAll();
        $req = new RequestModel();
        //$data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();

        $itemrequest = new RequestModel();
        $requestIds = $this->request->getPost('requestId');

        if (!empty($requestIds)) {
            foreach ($requestIds as $requestId) {

                $newdata = [
                    "createTenderStatus" => 'yes',
                ];
                $itemrequest->where(['RequestID' => $requestId])->set($newdata)->update();
            }
        }
        $data['list'] = $itemrequest->findAll();

        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemRequest/viewReq', $data);
        echo view('sys/footer');
    }

    public function view($requestId = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $item = new RequestItemModel();
        $Request = new RequestModel();

        //$data['tender_Status'] = $Request->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        $data['listr'] = $Request->getrequestDetails($requestId);
        $data['list'] = $item->getrequestitemDetails($requestId);
        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $item->where('requestId', $this->request->getPost('RId'))->findAll();
          } else {
          $data['list'] = $item->findAll();
          } */

        echo $item->getLastQuery()->getQuery();
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemRequest/view', $data);
        echo view("sys/footer");
    }

    public function editrequest($requestId = null) {
        helper('form');
        $data = array();
        //$data['tender_Status'] = $Request->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $Request = new RequestModel();
        $item = new RequestItemModel();
        //$data['list'] = $itemrequest->findAll();
        //$data['list'] =$Request->getrequestDetails($requestId);     
        $data['listi'] = $item->getrequestitemDetails($requestId);

        $data['request'] = $Request->where('RequestID', $requestId)->first();

        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view("sys/itemRequest/editrequest", $data);
        echo view("sys/footer");
    }

    public function updaterequestre($requestId = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $Request = new RequestModel();
        $item = new RequestItemModel();

        // $data['tender_Status'] = $Request->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        $data['listi'] = $item->getrequestitemDetails($requestId);
        $data['request'] = $Request->where('RequestID', $this->request->getPost('RequestID'))->first();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'Description' => ['label' => 'Description', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
                'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],
                'CName' => ['label' => 'Camp', 'rules' => 'required'],
                'ReqDate' => ['label' => 'ReqDate', 'rules' => 'required'],
            ];
            if (!$this->validate($rules)) {
               // echo 'validate';
                $data['validation'] = $this->validator;
            } else {
                $Request = new RequestModel();

                $Request->update($this->request->getPost('RequestID'), [
                    'Description' => $this->request->getPost('Description'),
                    'Purpose' => $this->request->getPost('Purpose'),
                    'PStatus' => $this->request->getPost('PStatus'),
                    'CName' => $this->request->getPost('CName'),
                    'ReqDate' => $this->request->getPost('ReqDate'),
                        //'Status' => $this->request->getPost('Status')
                ]);
               // echo $Request->getLastQuery()->getQuery();
                $RequestID = $Request->getInsertID();
                $action = $this->request->getPost('action');
                if ($action == 'add') {
                    return $this->reqItem($RequestID);
                }
                $item = new RequestItemModel();

                $item->save([
                    'RItemid' => $this->request->getPost('RItemid'),
                    'RId' => $this->request->getPost('RequestID'),
                    'Item' => $this->request->getPost('Item'),
                    'Qty' => $this->request->getPost('Qty'),
                ]);
                $data['RId'] = $this->request->getPost('RequestID');
                $data['msg'] = "Request Successfully updated";
            }
        }
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view("sys/itemrequest/editrequestre", $data);
        echo view("sys/footer");
    }
    public function updaterequest($requestId = null) {
    helper('form');
    $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
    $camp = new CampModel();
    $Request = new RequestModel();
    $item = new RequestItemModel();
    
    $data['camp_list'] = $camp->findall();
    $data['listi'] = $item->getrequestitemDetails($requestId);
    $data['request'] = $Request->where('RequestID', $this->request->getPost('RequestID'))->first();

    if ($this->request->getMethod() == 'post') {
        $rules = [
            'Description' => ['label' => 'Description', 'rules' => 'required'],
            'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
            'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],
            'CName' => ['label' => 'Camp', 'rules' => 'required'],
            'ReqDate' => ['label' => 'ReqDate', 'rules' => 'required'],
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
        } else {
            // Update the request details
            $Request->update($this->request->getPost('RequestID'), [
                'Description' => $this->request->getPost('Description'),
                'Purpose' => $this->request->getPost('Purpose'),
                'PStatus' => $this->request->getPost('PStatus'),
                'CName' => $this->request->getPost('CName'),
                'ReqDate' => $this->request->getPost('ReqDate')
            ]);

            // Update each item in the request
            $itemIds = $this->request->getPost('RItemid');
            $itemNames = $this->request->getPost('ItemName');
            $itemQtys = $this->request->getPost('Qty');

            foreach ($itemIds as $index => $itemId) {
                $item->update($itemId, [
                    'ItemName' => $itemNames[$index],
                    'Qty' => $itemQtys[$index]
                ]);
            }

            $data['msg'] = "Request Successfully updated";
        }
    }

    echo view('sys/header', $data);
    echo view('sys/menu_' . $user_type);
    echo view("sys/itemrequest/editrequest", $data);
    echo view("sys/footer");
}



    public function getvdiscription() {
        $ItemList = new ItemcategoryModel();
        $Votediscription = $ItemList->where('Vote', $this->request->getpost('VoteId'))->first();

        echo $Votediscription['Description'];
    }

    public function getItemCategory() {
        $ItemList = new ItemcategoryModel();
        $VoteId = $this->request->getPost('VoteId'); // Get the selected VoteId from the request
        $data['Item_list'] = $ItemList->select('ICatergory')->groupBy('ICatergory')->where('Vote', $VoteId)->findAll(); // Find distinct ICatergory values based on the selected VoteId
        return view('sys/itemrequest/itemCategories', $data);
    }

    public function getItemName() {
        $ItemList = new ItemcategoryModel();
        $ICatergory = $this->request->getPost('VoteId'); // Get the selected ICatergory from the request
        $data['ItemName_list'] = $ItemList->select('ItemName,id')->where('ICatergory', $ICatergory)->findAll(); // Find ItemName values based on the selected ICatergory
        //echo $ItemList->getLastQuery()->getQuery();
        return view('sys/itemrequest/itemNameList', $data);
    }

    public function getItemId() {
        $ItemList = new ItemcategoryModel();
        // echo '12';
        $itemID = $ItemList->where('id', $this->request->getpost('RItemid'))->first();
        // echo $ItemList->getLastQuery()->getQuery();
        echo $itemID['ItemName'];
    }

    public function getIteminventory() {
        //echo '12';
        $inventory = new InventoryModel();
        $itemID = $this->request->getpost('RItemid');
        //$itemID = $ItemList->where('Itemid', $this->request->getpost('RItemid'))->first();
        $inventorlist = $inventory->getInventroyDataasgroup($itemID);

        // echo $inventory->getLastQuery()->getQuery();
        echo $inventorlist[0]['Quantity'];
    }

    public function newReq() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $req = new RequestModel();
        // $data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'ItemName' => ['label' => 'ItemName', 'rules' => 'required'],
                'Qty' => ['label' => 'Qty', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
                'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],
                'CName' => ['label' => 'Camp', 'rules' => 'required'],
                'ReqDate' => ['label' => 'ReqDate', 'rules' => 'required'],
                'sample_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[sample_image]|permit_empty'
                    . '|is_image[sample_image]'
                    . '|mime_in[sample_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[sample_image,100]'
                    . '|max_dims[sample_image,1024,768]',
                ],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $newName = null;
                $newitemrequest = new NewRequestModel();
                $sample_image = $this->request->getFile('sample_image');
                if (!empty($sample_image->getName())) {
                    $newName = $sample_image->getRandomName();
                    $sample_image->move('public/images/' . 'uploads', $newName);
                }
                $newitemrequest->save([
                    'ItemName' => $this->request->getPost('ItemName'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Purpose' => $this->request->getPost('Purpose'),
                    'PStatus' => $this->request->getPost('PStatus'),
                    'CName' => $this->request->getPost('CName'),
                    'ReqDate' => $this->request->getPost('ReqDate'),
                    'sample_image' => $newName,
                    'UserId' => session()->get('UserId'),
                ]);

                // Send verification email
                $email = \Config\Services::email();
                //check to get mail
                $email->setTo('stfprocurementbranch@gmail.com');
                $email->setFrom((session()->get('email')), 'SPIMS');
                $email->setSubject('Requesting prurchasing New Item ');
                $message = '<h1>Requesting New Item that not in procurement Item Category List</h1>';
                $message .= '<a href="http://localhost/IPMS/sys/">Click here to verify view new Item Request</a>';
                $email->setMessage($message);
                $email->send();
                $data['msg'] = "Your item request submitted to the STF Procurement Division for verification and approval. Once your payment is approved, we will notify you with an email.";
            }
        }

        $data['msg'] = "Request Successfully Send for Approval";

        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view("sys/itemrequest/newReq", $data);
        echo view("sys/footer");
    }

    public function viewNewReq() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $newitemrequest = new NewRequestModel();
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $req = new RequestModel();
        // $data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        //echo $camp -> getLastQuery()->getQuery();
        $data['list'] = $newitemrequest->findAll();

        //new search bar to check
        if ($this->request->getMethod() == 'post') {
            $camp = new CampModel();
            $data['camp_list'] = $camp->findall();
            if ($this->request->getPost('ReqDate') && $this->request->getPost('CName')) {
                $data['list'] = $newitemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } elseif ($this->request->getPost('ReqDate')) {
                $data['list'] = $newitemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->findAll();
            } elseif ($this->request->getPost('CName')) {
                $data['list'] = $newitemrequest
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } else {
                $data['list'] = $newitemrequest->findAll();
            }
        }
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemrequest/viewNewReq', $data);
        echo view("sys/footer");
    }

    public function viewNewItem($requestId = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $req = new RequestModel();
        //$data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        $newitemrequest = new NewRequestModel();
        $data['list'] = $newitemrequest->getNewrequestDetails($requestId);

        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemrequest/viewNewItem', $data);
        echo view("sys/footer");
    }

    public function editnewrequest($requestId = null) {
        helper('form');
        $data = array();
        //$data['tender_Status'] = $Request->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        // $Request = new RequestModel();
        //$item = new RequestItemModel();

        $newitemrequest = new NewRequestModel();
        //$data['list'] = $itemrequest->findAll();
        //$data['list'] =$Request->getrequestDetails($requestId);     
        //$data['listi'] = $item->getrequestitemDetails($requestId);

        $data['request'] = $newitemrequest->where('RequestID', $requestId)->first();

        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view("sys/itemRequest/editnewrequest", $data);
        echo view("sys/footer");
    }

    public function updatenewitemrequest($requestId = null) {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        // $Request = new RequestModel();
        //$item = new RequestItemModel();
        $newitemrequest = new NewRequestModel();
        // $data['tender_Status'] = $Request->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        // $data['listi'] = $item->getrequestitemDetails($requestId);
        $data['request'] = $newitemrequest->where('RequestID', $this->request->getPost('RequestID'))->first();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'ItemName' => ['label' => 'ItemName', 'rules' => 'required'],
                'Qty' => ['label' => 'Qty', 'rules' => 'required'],
                'Purpose' => ['label' => 'Purpose', 'rules' => 'required'],
                'PStatus' => ['label' => 'PStatus', 'rules' => 'required'],
                'CName' => ['label' => 'Camp', 'rules' => 'required'],
                'ReqDate' => ['label' => 'ReqDate', 'rules' => 'required'],
                'sample_image' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[sample_image]|permit_empty'
                    . '|is_image[sample_image]'
                    . '|mime_in[sample_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[sample_image,100]'
                    . '|max_dims[sample_image,1024,768]',
                ],
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {

                $newName = null;
                $newitemrequest = new NewRequestModel();
                $sample_image = $this->request->getFile('sample_image');

                if ($sample_image && !empty($sample_image->getName())) {
                    $newName = $sample_image->getRandomName();
                    $sample_image->move('public/images/uploads', $newName);
                }
                /* $newitemrequest = new NewRequestModel();
                  $sample_image = $this->request->getFile('sample_image');
                  $newName = $sample_image->getRandomName();
                  $sample_image->move('public/images/' . 'uploads', $newName); */

                $newitemrequest->save([
                    'ItemName' => $this->request->getPost('ItemName'),
                    'Qty' => $this->request->getPost('Qty'),
                    'Purpose' => $this->request->getPost('Purpose'),
                    'PStatus' => $this->request->getPost('PStatus'),
                    'CName' => $this->request->getPost('CName'),
                    'ReqDate' => $this->request->getPost('ReqDate'),
                    'UserId' => session()->get('UserId'),
                    'sample_image' => $newName,
                ]);
                $data['msg'] = "Request Successfully Send for Approval";
            }
        }
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view("sys/itemrequest/editnewrequest", $data);
        echo view("sys/footer");
    }

    public function updateNewItemrequeststatus() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $req = new RequestModel();
        // $data['tender_Status'] = $req->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();
        //$itemrequest = new RequestModel();
        //$item = new RequestItemModel();
        $newitemrequest = new NewRequestModel();
        $newdata = [
            "Status" => $this->request->getPost('action'),
            "ApprovedDate" => date("Y-m-d"),
        ];
        $newitemrequest->where(['RequestID' => $this->request->getPost('RequestID')])->set($newdata)->update();
        $data['list'] = $newitemrequest->findAll();

        //new search bar to check
        //new search bar to check
        if ($this->request->getMethod() == 'post') {
            $camp = new CampModel();
            $data['camp_list'] = $camp->findall();
            if ($this->request->getPost('ReqDate') && $this->request->getPost('CName')) {
                $data['list'] = $newitemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } elseif ($this->request->getPost('ReqDate')) {
                $data['list'] = $newitemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->findAll();
            } elseif ($this->request->getPost('CName')) {
                $data['list'] = $newitemrequest
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } else {
                $data['list'] = $newitemrequest->findAll();
            }
        }
        /* $data['list'] = $itemrequest->getrequestDetails();
          $data['listi'] =$item->getrequestitemDetails($this->request->getPost('RequestID')); */
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemRequest/viewNewReq', $data);
        echo view('sys/footer');
    }

    //change bellow 17
    public function viewReqprogressrev() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $itemrequest = new RequestModel();
        $data['list'] = $itemrequest->viewrequest();
        echo $itemrequest->getLastQuery()->getQuery();
        //new search bar to check
        if ($this->request->getMethod() == 'post') {
            $camp = new CampModel();
            $data['camp_list'] = $camp->findall();
            $data['list'] = $itemrequest->viewrequest();
            if ($this->request->getPost('ReqDate') && $this->request->getPost('CName')) {
                $data['list'] = $itemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } elseif ($this->request->getPost('ReqDate')) {
                $data['list'] = $itemrequest
                        ->where('ReqDate', $this->request->getPost('ReqDate'))
                        ->findAll();
            } elseif ($this->request->getPost('CName')) {
                $data['list'] = $itemrequest
                        ->where('CName', $this->request->getPost('CName'))
                        ->findAll();
            } else {
                $data['list'] = $itemrequest->viewrequest();
            }
        }
        //to identify user and display relevent data
        /* if ((session()->get('UserType')) == 'Requester') {
          $data['list'] = $itemrequest->where('UserId', session()->get('UserId'))->findAll();
          } else {
          $data['list'] = $itemrequest->findAll();
          echo $itemrequest -> getLastQuery()->getQuery();
          }


          /* if((session()->get('UserType'))!='Requester'){
          $data['list'] = $itemrequest->where('UserId',session()->get('UserId'))->findAll();
          }else{
          $data['list'] = $itemrequest->findAll();
          } */
        //echo $itemrequest -> getLastQuery()->getQuery();
        //$data['tender_Status'] = $tender_Status;
        /// $data['tender_Status'] = $itemrequest->where(["STATUS" => 1, "createTenderStatus" => 3])->findAll();


        /* if ($user_type == 'Requester') {
          $userId = session()->get('UserId');
          $data['list'] = $itemrequest->where('UserId', $userId)->findAll();
          } else {
          $data['list'] = $itemrequest->findAll();
          } */






        /* if ($this->request->getMethod() == 'post') {
          $data['list'] = $itemrequest->where('ICategory', $this->request->getPost('ICategory'))->findAll();
          } else {
          $data['list'] = $itemrequest->findAll();
          } */
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemrequest/viewReqprogressrev', $data);
        echo view("sys/footer");
    }

    public function viewReqprogress() {
        helper('form');
        $data = array();
        $user_type = str_replace(' ', '', strtolower(session()->get('UserType')));
        $camp = new CampModel();
        $data['camp_list'] = $camp->findall();
        $itemrequest = new RequestModel();

        // Handle the search logic
        if ($this->request->getMethod() == 'post') {
            $reqDate = $this->request->getPost('ReqDate');
            $cName = $this->request->getPost('CName');

            $builder = $itemrequest->select('*')
                    ->join('tender_request r', 'r.RequestId = itemrequest.RequestID', 'left')
                    ->join('tender t', 't.Tenderid = r.TenderId', 'left')
                    ->join('awarddata a', 'a.TenderId = t.Tenderid', 'left');

            if ($reqDate && $cName) {
                $builder->where('ReqDate', $reqDate)
                        ->where('CName', $cName);
            } elseif ($reqDate) {
                $builder->where('ReqDate', $reqDate);
            } elseif ($cName) {
                $builder->where('CName', $cName);
            }

            $data['list'] = $builder->groupBy('t.Tenderid')->findAll();
        } else {
            $data['list'] = $itemrequest->viewrequest();
        }

        // Load views
        echo view('sys/header', $data);
        echo view('sys/menu_' . $user_type);
        echo view('sys/itemrequest/viewReqprogress', $data);
        echo view("sys/footer");
    }
}
