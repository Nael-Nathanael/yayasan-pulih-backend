<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        return view("_pages/dashboard/about/index");
    }
}
