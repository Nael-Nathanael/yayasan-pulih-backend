<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class KerjaPulih extends BaseController
{
    public function lkp(): string
    {
        return view("_pages/dashboard/kerja-pulih/lkp");
    }

    public function pdn(): string
    {
        return view("_pages/dashboard/kerja-pulih/pdn");
    }

    public function p4(): string
    {
        return view("_pages/dashboard/kerja-pulih/p4");
    }

    public function ke(): string
    {
        return view("_pages/dashboard/kerja-pulih/ke");
    }

}
