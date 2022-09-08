<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Transaction extends BaseController
{
    public function index()
    {
        $this->set_context('title', 'Kelola Transaksi');
        
        // Set breadchumb
        $this->set_breadchumb('Dashboard', base_url('admin'), false);
        $this->set_breadchumb('Transaksi', base_url('admin/transaction'), false);
        $this->set_breadchumb('Kelola', "", true);

        return $this->renderOnce('admin/transaction/manage');
    }
}
