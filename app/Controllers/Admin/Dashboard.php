<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $this->set_user_data();

        // die(
        //     var_dump(
        //         $this->context['userData']
        //     )
        // );
        return $this->renderOnce("admin/dashboard");
    }
}
