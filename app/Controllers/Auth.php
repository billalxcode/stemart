<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    protected $userModel;

    function __construct()
    {
        $this->userModel = new \APp\Models\UserModel();
    }
    
    public function login()
    {
        return $this->renderOnce('auth/login');
    }
}
