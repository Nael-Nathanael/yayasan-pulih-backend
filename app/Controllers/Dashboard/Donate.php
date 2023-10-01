<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Donate extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/donate/index");
    }
}
