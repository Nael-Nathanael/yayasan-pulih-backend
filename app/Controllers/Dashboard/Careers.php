<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Careers extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/careers/index");
    }
}
