<?php

namespace App\Controllers\Dashboard\Services;

use App\Controllers\BaseController;

class PeopleAdvisory extends BaseController
{
    public function index(): string
    {
        $service_lines = model("ServiceLines");
        $data['service_lines'] = $service_lines->where("subservice_key", "PEOPLE")->findAll();
        return view("_pages/dashboard/service/people/index", $data);
    }
}
