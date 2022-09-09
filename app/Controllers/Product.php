<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    protected $productModel;

    function __construct()
    {
        $this->productModel = new \App\Models\ProductModel();
    }

    public function index()
    {
        $product_data = $this->productModel->get_all_products();

        $this->set_context('products', $product_data);

        return $this->renderOnce('product/index');
    }

    public function detail($product_slug) {
        if (isset($product_slug)) {
            $product_data = $this->productModel->find_by_slug($product_slug);

            if (count($product_data) >= 1) {
                $this->set_context('product', $product_data[0]);
                return $this->renderOnce('product/detail');
            } else {
                return redirect()->to('products');
            }
        } else {
            return redirect()->to('products');
        }
    }
}
