<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return $this->renderOnce('product/index');
    }

    public function detail($product_id) {
        return $this->renderOnce('product/detail');
    }
}
