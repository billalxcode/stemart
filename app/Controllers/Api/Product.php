<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\UserModel;

class Product extends BaseController
{
    protected $productModel;
    protected $userModel;

    function __construct()
    {
        $this->productModel= new ProductModel();
        $this->userModel = new UserModel();
    }

    public function get_all_products() {
        $refresh_token = $this->request->getPost("token");
        if (!isset($refresh_token)) {
            
        }
        $is_valid_token = $this->userModel->valid_token($refresh_token);
    }
}
