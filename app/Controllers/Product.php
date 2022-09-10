<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    protected $productModel;
    protected $categoryModel;

    function __construct()
    {
        $this->productModel = new \App\Models\ProductModel();
        $this->categoryModel = new \App\Models\CategoryModel();
    }

    public function index()
    {
        $product_data = $this->productModel->get_all_products();
        $categories =  $this->categoryModel->get_all_names();

        $this->set_context('products', $product_data);
        $this->set_context('categories', $categories);

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
