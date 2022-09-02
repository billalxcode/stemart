<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $this->set_user_data();
        return $this->renderOnce("admin/dashboard");
    }
}
