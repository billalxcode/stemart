<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $productModel;

    function __construct()
    {
        $this->productModel = new ProductModel();
    }
    
    public function create() {
        helper('form');
        $this->set_user_data();
        $this->set_context('title', "Create new product");
        $this->set_context('page_title', "Create new");

        // Set a breadchumb
        $this->set_breadchumb('Dashboard', base_url('admin'), false);
        $this->set_breadchumb("Product", base_url('admin/products'), false);
        $this->set_breadchumb("Create", "", true);

        return $this->renderOnce("admin/product/create");
    }

    public function save() {
        helper('form');

        $rules = [
            'product_name' => [
                'rules' => 'required|min_length[4]|max_length[255]',
                'errors' => [
                    'required' => 'Mohon masukan kolom {field}',
                    'min_length' => 'Kolom minimal 4 karakter',
                    'max_length' => 'Kolom maksimal 255 karakter'
                ]
            ],
            'product_summary' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mohon masukan kolom {field}'
                ]
            ],
            'product_price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mohon masukan kolom {field}'
                ]
            ],
            'product_stock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mohon masukan kolom {field}'
                ]
            ],
            'product_image' => [
                'rules' => 'uploaded[product_image]|mime_in'
            ]
        ];
        $method = $this->request->getMethod();
        if ($method == "post") {
            $product_name       = $this->request->getPost("product_name");
            $product_category   = $this->request->getPost("product_category");
            $product_summary    = $this->request->getPost("product_summary");
            $product_price      = $this->request->getPost("product_price");
            $product_stock      = $this->request->getPost("product_stock");
            $product_status     = $this->request->getPost("product_status");
            $product_location   = $this->request->getPost("product_location");

            $product_image = $this->request->getFile('product_image');
        } else {
            $this->response->setStatusCode(403);
            return $this->renderOnce("errors/403");
        }
    }
}
