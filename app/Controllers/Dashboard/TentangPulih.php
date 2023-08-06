<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class TentangPulih extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/tentang-pulih/index");
    }
}
