
<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use App\Models\DesignationModel;
use App\Models\UsersModel;

class Employee extends BaseController {

    public function index() {
        
    }
    public function submitEwaste() {
        helper(['form']);
        $data = [];
        $ewasteModel = new EwasteListModel(); // Instantiate the model
        $pickupModel = new PickupModel(); // Instantiate the model if not done earlier

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'item_title' => ['label' => 'Item Title', 'rules' => 'required'],
                'item_name' => ['label' => 'Item Name', 'rules' => 'required'],
                'item_type' => ['label' => 'Item Type', 'rules' => 'required'],
                'item_description' => ['label' => 'Description', 'rules' => 'required'],
                'item_image' => [
                    'label' => 'Image',
                    'rules' => 'uploaded[item_image]|is_image[item_image]|max_size[item_image,2048]'
                ],
                'quantity' => ['label' => 'Quantity', 'rules' => 'required|is_numeric'],
                'weight' => ['label' => 'Weight', 'rules' => 'required|is_numeric'],
                'weight_unit' => ['label' => 'Weight Unit', 'rules' => 'required|in_list[g,kg]'],
                'price_option' => ['label' => 'Price Option', 'rules' => 'required|in_list[free,expected]'],
                'amount' => ['label' => 'Amount', 'rules' => 'permit_empty|is_numeric'],
                'pickup_location' => ['label' => 'Pickup Location', 'rules' => 'required'],
                'google_location' => ['label' => 'Google Location Link', 'rules' => 'required'],
                'contact_name' => ['label' => 'Contact Name', 'rules' => 'required'],
                'contact_number' => ['label' => 'Contact Number', 'rules' => 'required|min_length[10]|max_length[15]'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                // If validation fails, reload the form view with validation errors
                echo view('sys/header');
                echo view('sys/menu_addEwaste');
                echo view('sys/content_addEwaste', $data);
                echo view('sys/footer');
            } else {
                $item_image = $this->request->getFile('item_image');
                $newName = $item_image->getRandomName();
                $item_image->move('public/images/' . 'uploads', $newName);

                $ewasteData = [
                    'UserId' => session()->get('UserId'),
                    'item_title' => $this->request->getPost('item_title'),
                    'item_name' => $this->request->getPost('item_name'),
                    'item_type' => $this->request->getPost('item_type'),
                    'item_description' => $this->request->getPost('item_description'),
                    'item_image' => $newName,
                    'quantity' => $this->request->getPost('quantity'),
                    'weight' => $this->request->getPost('weight'),
                    'weight_unit' => $this->request->getPost('weight_unit'),
                    'price_option' => $this->request->getPost('price_option'),
                    'amount' => $this->request->getPost('amount'),
                    'pickup_location' => $this->request->getPost('pickup_location'),
                    'google_location' => $this->request->getPost('google_location'),
                    'contact_name' => $this->request->getPost('contact_name'),
                    'contact_number' => $this->request->getPost('contact_number'),
                    'item_status_g' => 'No Bids Yet',
                    'item_status_c' => 'Open for Bidding',
                    'date_added' => date("Y-m-d"),
                ];

                // Save the data to the database using the save() method
                if ($ewasteModel->save($ewasteData)) {
                    // Data saved successfully
                    $data['message'] = 'E-waste submitted successfully.';
                    echo view('sys/header');
                    echo view('sys/menu_addEwaste');
                    echo view('sys/thank_you', $data);
                    echo view('sys/footer');
                } else {
                    // Failed to save the data, handle the error
                    $data['message'] = 'There was a problem submitting your e-waste. Please try again.';
                    echo view('sys/header');
                    echo view('sys/menu_addEwaste');
                    echo view('sys/content_addEwaste', $data); // Reload the form with the error message
                    echo view('sys/footer');
                }
                return; // Stop further rendering after handling the form submission
            }
        }

        // Load views with data
        echo view('sys/header');
        echo view('sys/menu_addEwaste');
        echo view('sys/content_addEwaste', $data);
        echo view('sys/footer');
    }
    
    //report
    public function monthly_listings() {
        helper(['form', 'url']);
        $data = [];
        $monthly_listings = new EwasteListModel();
        if ($this->request->getMethod() === 'post') {

            $year = $this->request->getPost('year');
            $month = $this->request->getPost('month');
            $data['listings'] = $monthly_listings->monthly_listings($year, $month);
        }
         $user_type = strtolower(session()->get('UserType'));
        echo view('sys/header');
        echo view('sys/menu_' . $user_type);
        //echo view('sys/reports');
        echo view('sys/ewg_monthy_listings', $data);
        echo view('sys/footer');

        
    }
    
   
    
}