<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    protected $userModel;

    function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }
    public function login() {
        $this->set_context('title', 'Stemart Login');

        return $this->renderOnce("admin/auth/login");
    }
}
