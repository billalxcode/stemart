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
        
    }
}
