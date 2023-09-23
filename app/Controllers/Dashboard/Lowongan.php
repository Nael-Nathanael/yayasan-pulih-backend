<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Lowongan extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/lowongan/index");
    }

    public function pekerjaan(): string
    {
        return view("_pages/dashboard/lowongan/pekerjaan");
    }

    public function magang(): string
    {
        return view("_pages/dashboard/lowongan/magang");
    }
}
