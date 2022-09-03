<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Category extends BaseController
{
    public function index()
    {
        $this->set_user_data();
        $this->set_context('title', 'Kelola Kategori');
        $this->set_context('page_title', 'Kelola Kategori');

        $this->set_breadchumb("Dashboard", base_url('admin'), false);
        $this->set_breadchumb("Category", base_url('admin/category'), false);
        $this->set_breadchumb('Kelola', '', true);

        return $this->renderOnce('admin/category/manage');
    }
}
