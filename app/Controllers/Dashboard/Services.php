<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Services extends BaseController
{
    public function index(): string
    {
        $keypoints = model("Keypoints");
        $data['keypoints'] = $keypoints->findAll();

        return view("_pages/dashboard/service/index", $data);
    }
}
