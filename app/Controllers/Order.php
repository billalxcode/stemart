<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Order extends BaseController
{
    protected $session;
    protected $orderModel;
    protected $productModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->orderModel = new \App\Models\OrderModel();
        $this->productModel = new \App\Models\ProductModel();
    }

    function getcustomerid() {
        $this->set_user_data();

        $userdata = $this->get_context('userData');
        return $userdata['id'];
    }

    public function index()
    {
        //
    }

    public function save() {
        helper('form');

        $method = $this->request->getMethod();
        if ($method == "post") {
            $product_id = $this->request->getPost("product_ids");
            $jumlah = $this->request->getPost("jumlah");

            if ($this->productModel->valid_id($product_id)) {
                $data_post = [
                    'id_produk' => $product_id,
                    'customer_id' => $this->getcustomerid(),
                    'kode_invoice' => $this->orderModel->generate_invoice(),
                    'total_order' => $jumlah,
                    'total_discount' => null,
                    'status' => 'progress',
                    'isnew' => 'yes'
                ];  

                $this->orderModel->save($data_post);
                return redirect()->to('order');
            } else {
                $this->session->setFlashdata('error', 'Produk tidak ditemukan, mohon coba produk yang lain.');
                return redirect()->back();
            }
        } else {
            $this->response->setStatusCode(403);
            return $this->renderOnce('errors/403');
        }
    }
}
