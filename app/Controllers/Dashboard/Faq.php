<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Faq extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/faq/index");
    }
}
