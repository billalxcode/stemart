<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    protected $userModel;
    protected $session;

    function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
        $this->session = \Config\Services::session();
    }
    
    public function login()
    {
        helper('form');

        $method = $this->request->getMethod();
        if ($method == 'post') {
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");

            $customer_data = $this->userModel->get_customer_by_username($username);

            if ($customer_data && $customer_data['role'] == 'customer') { 
                if (password_verify($password, $customer_data['password'])) {
                    $refresh_token = $this->userModel->update_refresh_token($customer_data['id']);

                    $data_session = [
                        'logged' => true,
                        'token' => $refresh_token
                    ];

                    $this->session->set($data_session);

                    return redirect()->to('products');
                } else {
                    $this->session->setFlashdata('error', 'Maaf username atau password salah');
                    return redirect()->back()->withInput();
                }
            } else {
                $this->session->setFlashdata('error', 'Maaf username atau password salah');
                return redirect()->back()->withInput();
            }
        } else {
            return $this->renderOnce('auth/login');
        }
    }
}
