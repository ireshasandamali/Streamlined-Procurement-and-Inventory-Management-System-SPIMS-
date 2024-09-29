<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ResettokenModel;

class User extends BaseController {

    public function index() {
        helper(['form']);
        echo view('sys/login');
    }

    public function login() {
        helper(['form']);
        $data = array();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => ['label' => 'Username', 'rules' => 'required'],
                'password' => ['label' => 'Password', 'rules' => 'required|validateUser[username,password]'],
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'You are entering the wrong username or Password'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('UserName', $this->request->getVar('username'))->first();
                $this->setUserSession($user);
                return redirect()->to('sys/dashboard');
            }
        }


        return view('sys/login');
    }

    private function setUserSession($user) {
        $data = [
            'UserId' => $user['UserId'],
            'UserName' => $user['UserName'],
            'UserType' => $user['UserType'],
            'ProfileImage' => $user['profile_image'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('sys');
    }
    
    
    // Change password function my
public function change_password_validate() {
    helper(['form']);
    $data = [];

    if ($this->request->getMethod() == 'post') {
        $rules = [
            'old_password' => ['label' => 'Old Password', 'rules' => 'required|validateOldPassword'],
            'new_password' => ['label' => 'New Password', 'rules' => 'required|min_length[8]'],
            'confirm_password' => ['label' => 'Confirm Password', 'rules' => 'required|matches[new_password]'],
        ];
        $errors = [
            'old_password' => [
                'validateOldPassword' => 'The old password is incorrect.'
            ]
        ];

        if ($this->validate($rules, $errors)) {
            // Change the password
            $model = new UserModel();
            $user = $model->where('UserName', session()->get('username'))->first();

            if ($user) {
                // Update the password
                $data = [
                    'Password' => password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT)
                ];
                $model->update($user['id'], $data);

                // Redirect to dashboard or relevant page after successful password change
                return redirect()->to('web/dashboard')->with('success', 'Password changed successfully.');
            } else {
                // User not found
                $data['error'] = 'User not found.';
            }
        }
    }

    // Show change password form when error occurs or on initial load
    return view('sys/change_password', $data);
}


public function resetpassword() {
        helper(['form']);
        echo view('web/resetpassword');
    }
    
    public function sendResetLink() {
      helper('form');
      $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
            ];
            if (!$this->validate($rules)) {
                return view('web/resetpassword',$data);
            }
            $email = $this->request->getPost('email');
            $usermodel = new UserModel();
            $user = $usermodel->where('email', $email)->get()->getRow();
            if (!$user) {
                //return redirect()->to('user/resetpassword')->with('error', 'Email not found.');
            $data['error']='Email not found';
            return view('web/resetpassword',$data);
                
            }
            $token = bin2hex(random_bytes(16)); // Generate a random token
            $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

            $resettoken = new ResettokenModel();
            $resettoken->save([
                'user_id' => $user->UserId,
                'token' => $token,
                'created_at' => $expiry,
            ]);

            $resetLink = site_url("user/reset_password/$token");
            $email = \Config\Services::email();
            $email->setTo($this->request->getPost('email'));
            $email->setFrom('sandamalipathirana0@gmail.com');
            $email->setSubject('Password Reset Link');

            $email->setMessage("Click the following link to reset your password: $resetLink");
            $email->send();
        }
        //return redirect()->to('user/resetpassword')->with('success', 'Reset link sent to your email.');
        $data['error']='Email has been sent';
            return view('web/resetpassword',$data);
        }
        
       public function reset_password($token) {
        helper('form');
        $resettokenmodel = new ResettokenModel();
        $resetToken = $resettokenmodel->where('token', $token)->get()->getRow();

        if (!$resetToken) {
            //return redirect()->to('user/resetpassword')->with('error', 'Invalid reset token.');
         $data['error']='Invalied Token';
            return view('web/resetpassword',$data);
            
            
        }

        $expiryTime = strtotime($resetToken->created_at);
        if ($expiryTime < time()) {
            //return redirect()->to('user/resetpassword')->with('error', 'Reset token has expired.');
       $data['error']=' Token has been expired';
            return view('web/resetpassword',$data);
            
            }
        $data['token'] = $token;
        return view('web/reset_password_form', $data);
    }
    
    public function save_reset_password() {
        helper('form');
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'token' => 'required',
                'new_password' => 'required|min_length[6]', // Adjust validation rules as needed
            ];
            $token = $this->request->getPost('token');
            $data['token'] = $token;
            if (!$this->validate($rules)) {
                return view('web/reset_password_form', $data); // Reload the form with validation errors
            }

            $resettokenmodel = new ResettokenModel();
            $resetToken = $resettokenmodel->where('token', $token)->get()->getRow();

            if (!$resetToken) {
                $data['error'] = 'Invalid reset token.';
                return view('web/reset_password_form', $data);
            }

            $expiryTime = strtotime($resetToken->created_at);
            if ($expiryTime < time()) {
                $data['error'] = 'Reset token has expired.';
                return view('web/reset_password_form', $data);
            }
            $newPassword = $this->request->getPost('new_password');
            $usermodel = new UserModel();
            $usermodel->update(['UserId' => $resetToken->user_id], ['Password' => $newPassword]);
            $resettokenmodel->where('token', $token)->delete();
            return redirect()->to('web/login')->with('success', 'Password reset successfully.');
        }
    }

}
