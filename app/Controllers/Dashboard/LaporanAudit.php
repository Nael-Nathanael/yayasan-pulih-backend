<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class LaporanAudit extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/laporan-audit/index");
    }
}
