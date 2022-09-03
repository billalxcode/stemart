<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class Product extends BaseController
{
    protected $session;
    protected $productModel;
    protected $categoryModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
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
                'rules' => 'uploaded[product_image]'
                    . '|is_image[product_image]'
                    . '|mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[product_image,3072]'
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

            if (!$this->validate($rules)) {
                $this->session->setFlashdata('error', 'Tidak dapat menyimpan data, silahkan periksa data dan coba lagi.');
                return redirect()->back()->withInput();
            }

            $product_image = $this->request->getFile('product_image');
            if ($product_image->isValid() && !$product_image->hasMoved()) {
                $filename = $product_image->getRandomName();

                $product_image->move('uploads/images', $filename);
            } else {
                $this->session->setFlashdata('error', 'Tidak dapat menyimpan gambar, silahkan upload ulang.');
                return redirect()->back()->withInput();
            }

            if (isset($product_category) && $this->categoryModel->valid_id($product_category)) {
                $product_category = $this->categoryModel->get_category_name($product_category);
            } else {
                $product_category = null;
            }

            $post_data = [
                'product_name'      => $product_name,
                'product_slug'      => $this->productModel->slugify($product_name),
                'product_category'  => $product_category,
                'product_price'     => $product_price,
                'product_summary'   => $product_summary,
                'produt_stock'      => $product_stock,
                'product_thumb'     => base_url('uploads/images/' . $filename),
                'product_discount'  => null,
                'product_location'  => $product_location
            ];
        } else {
            $this->response->setStatusCode(403);
            return $this->renderOnce("errors/403");
        }
    }
}
