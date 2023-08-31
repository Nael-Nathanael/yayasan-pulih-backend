<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Mitra extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/mitra/index");
    }
}
