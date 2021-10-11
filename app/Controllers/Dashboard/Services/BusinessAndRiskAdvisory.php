<?php

namespace App\Controllers\Dashboard\Services;

use App\Controllers\BaseController;

class BusinessAndRiskAdvisory extends BaseController
{
    public function index(): string
    {
        $keypoints = model("Keypoints");
        $data['keypoints'] = $keypoints->where("subservice_key", "BUSINESS_AND_RISK")->findAll();
        $service_lines = model("ServiceLines");
        $data['service_lines'] = $service_lines->where("subservice_key", "BUSINESS_AND_RISK")->findAll();
        return view("_pages/dashboard/service/business_and_risk/index", $data);
    }
}
