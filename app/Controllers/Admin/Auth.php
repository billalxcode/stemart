<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    protected $session;
    protected $userModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new \App\Models\UserModel();
    }

    public function login() {
        helper('form');
        $this->set_context('title', 'Stemart Login');

        $rules = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => "Mohon isi email anda terlebih dahulu",
                    'valid_email' => "Email tidak benar, mohon masukan ulang email"
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[24]',
                'errors' => [
                    'required' => 'Mohon isi password anda terlebih dahulu',
                    'min_length' => 'Password minimal 4 karakter',
                    'max_length' => 'Password maksimal 24 karakter'
                ]
            ]
        ];

        $method = $this->request->getMethod();
        if ($method == "post") {
            if ($this->validate($rules)) {
                $email = $this->request->getPost('email');
                $password = $this->request->getPost("password");
                
                $userData = $this->userModel->valid_email($email);
                if ($userData) {
                    if ($userData['role'] == 'admin' && password_verify($password, $userData['password'])) {
                        $token = $this->userModel->update_refresh_token($userData['id']);
                        $this->session->set("islogged", true);
                        $this->session->set('token', $token);

                        $this->session->setFlashdata('success', "Login berhasil, selamat datang " . $userData['firstname']);
                        return redirect()->to('admin', 200);
                    } else {
                        $this->session->setFlashdata('error',
                        'Mohon maaf akun tidak ditemukan'
                    );
                    }
                } else {
                    $this->session->setFlashdata('error',
                        'Mohon maaf akun tidak ditemukan'
                    );
                }
                return redirect()->back()->withInput();
            } else {
                if ($this->validator->hasError("email")) {
                    $error = $this->validator->getError('email');
                } else if ($this->validator->hasError("password")) {
                    $error = $this->validator->getError('password');
                }
                $this->session->setFlashdata('error',
                    $error
                );
                return redirect()->back()->withInput();
            }
        } else {
            return $this->renderOnce("admin/auth/login");
        }
    }

    public function logout() {
        $islogged = $this->session->has("islogged");
        $mtoken = $this->session->get('token');
        if ($islogged && $mtoken) {
            $mtoken_data = $this->userModel->valid_token($mtoken);
            if ($mtoken_data && $mtoken_data['role'] == 'admin') {
                $this->userModel->update_refresh_token_null($mtoken_data['id']);

                return redirect()->to('admin/auth');
            } else {
                $this->response->setStatusCode(403);
                return view('errors/403');
            }
        } else {
            $this->response->setStatusCode(403);
            return view('errors/403');
        }
    }
}
