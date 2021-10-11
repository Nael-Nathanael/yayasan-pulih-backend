<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/service/index");
    }
}
