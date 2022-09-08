<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Order extends BaseController
{
    protected $orderModel;

    function __construct()
    {
        $this->orderModel = new \App\Models\OrderModel();
    }

    public function manage() {
        $this->set_user_data();

        $this->set_context('title', 'Kelola order');

        // Set a breadchumb
        $this->set_breadchumb("Dashboard", base_url('admin'), false);
        $this->set_breadchumb("Order", base_url('admin/order'), false);
        $this->set_breadchumb("Kelola", "", true);

        $this->orderModel->get_all_orders();
        
        return $this->renderOnce("admin/order/manage");
    }
}
