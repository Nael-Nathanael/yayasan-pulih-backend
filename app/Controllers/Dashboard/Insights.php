<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Insights extends BaseController
{
    public function index(): string
    {
        $insights = model("Insights");
        $data['insights'] = $insights->orderBy("created_at DESC")->findAll();
        return view("_pages/dashboard/insights/index", $data);
    }
}
