<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Psy extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/psy/index");
    }

    public function create(): string
    {
        return view("_pages/dashboard/psy/create");
    }

    public function update(): string
    {
        return view("_pages/dashboard/psy/update");
    }
}
