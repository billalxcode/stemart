<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Category extends BaseController
{
    protected $session;
    protected $categoryModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        helper('form');

        
        $this->set_user_data();
        $this->set_context('title', 'Kelola Kategori');
        $this->set_context('page_title', 'Kelola Kategori');
        
        $this->set_breadchumb("Dashboard", base_url('admin'), false);
        $this->set_breadchumb("Category", base_url('admin/category'), false);
        $this->set_breadchumb('Kelola', '', true);
        
        $categories = $this->categoryModel->findAll();
        $this->set_context('categories', $categories);

        return $this->renderOnce('admin/category/manage');
    }

    public function save() {
        helper('form');

        $this->set_user_data();

        $method = $this->request->getMethod();
        if ($method == "post") {
            $category_name = $this->request->getPost("category_name");
            $category_slug = $this->request->getPost("category_slug");

            if (!isset($category_slug) || !$category_slug) {
                $category_slug = $this->categoryModel->slugify($category_name);
            } else {
                $category_slug = $this->categoryModel->slugify($category_slug);
            }

            $data_post = [
                'category_name' => $category_name,
                'category_slug' => $category_slug,
                'parent_id'     => $this->context['userData']['id'],
                'status'        => 'active'
            ];

            $this->categoryModel->save($data_post);

            $this->session->setFlashdata('success', "Data berhasil disimpan");
            return redirect()->back();
        } else {
            $this->response->setStatusCode(403);
            return $this->renderOnce('errors/403');
        }
    }

    public function delete() {
        helper('form');

        $method = $this->request->getMethod();

        if ($method == "post") {
            $category_id = $this->request->getPost("category_id");
            $category_data = $this->categoryModel->valid_id($category_id);
            if ($category_data) {
                $this->categoryModel->delete($category_id);
                
                $this->session->setFlashdata('Berhasil menghapus kategori ' . $category_data['category_name']);
                return redirect()->back()->withInput();
            } else {
                $this->response->setStatusCode(403);
                return $this->renderOnce('errors/403');
            }
        } else {
            $this->response->setStatusCode(403);
            return $this->renderOnce('errors/403');
        }
    }
}
