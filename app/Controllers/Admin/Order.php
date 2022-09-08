<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Order extends BaseController
{
    protected $session;
    protected $orderModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->orderModel = new \App\Models\OrderModel();
    }

    public function manage() {
        $this->set_user_data();

        $this->set_context('title', 'Kelola order');

        // Set a breadchumb
        $this->set_breadchumb("Dashboard", base_url('admin'), false);
        $this->set_breadchumb("Order", base_url('admin/order'), false);
        $this->set_breadchumb("Kelola", "", true);

        $orders_data = $this->orderModel->get_all_orders();

        $this->set_context('orders_data', $orders_data);
        

        return $this->renderOnce("admin/order/manage");
    }

    public function delete() {
        helper('form');

        $method = $this->request->getMethod();
        if ($method == "post") {
            $order_id = $this->request->getPost("order_id");

            $valid_order = $this->orderModel->valid_id($order_id);
            if ($valid_order) {
                $this->orderModel->delete($order_id);
                $this->session->setFlashdata('success', 'Data berhasil dihapus');
                return redirect()->back();
            } else {
                $this->session->setFlashdata('error', 'Tidak dapat menghapus data, mohon coba lagi');
                return redirect()->back();
            }
        } else {
            $this->response->setStatusCode(403);
            return $this->renderOnce('errors/403');
        }
    }
}
