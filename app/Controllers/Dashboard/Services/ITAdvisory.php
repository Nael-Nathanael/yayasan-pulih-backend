<?php

namespace App\Controllers\Dashboard\Services;

use App\Controllers\BaseController;

class ITAdvisory extends BaseController
{
    public function index(): string
    {
        $service_lines = model("ServiceLines");
        $data['service_lines'] = $service_lines->where("subservice_key", "IT")->findAll();
        return view("_pages/dashboard/service/it/index", $data);
    }
}
