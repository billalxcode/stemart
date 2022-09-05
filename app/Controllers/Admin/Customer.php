<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Customer extends BaseController
{
    protected $session;
    protected $userModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        helper("form");

        $this->set_user_data();
        $this->set_context('title', 'Kelola Kustomer');

        $this->set_breadchumb("Dashboard", base_url('admin'), false);
        $this->set_breadchumb("Customer", base_url('admin/customer'), false);
        $this->set_breadchumb("Manage", "", true);

        $customers = $this->userModel->get_all_customer();
        $this->set_context('customers', $customers);
        return $this->renderOnce('admin/customer/manage');
    }

    public function changeStatus() {
        helper("form");

        $method = $this->request->getMethod();
        if ($method == "post") {
            $customer_username = $this->request->getPost("customer_username");
            $customer_status = $this->request->getPost("status");

            $customer_data = $this->userModel->select_role_from_username($customer_username);

            if ($customer_data && $customer_data['role'] == 'customer') {
                if ($customer_status == "active" || $customer_status == "inactive" || $customer_status == 'blocked') {
                    $this->userModel->update($customer_data['id'], [
                        'status' => $customer_status
                    ]);

                    $this->session->setFlashdata('success', 'Berhasil memperbaharui data.');
                } else {
                    $this->session->setFlashdata('error', 'Gagal memperbaharui data, silahkan coba lagi');
                }
            } else {
                $this->session->setFlashdata('error', 'Gagal memperbaharui data, silahkan coba lagi');
            }
            return redirect()->back();
        } else {
            $this->response->setStatusCode(403);
            return $this->renderOnce('views/403');
        }
    }
}
