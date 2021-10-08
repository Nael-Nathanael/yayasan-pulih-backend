<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Webinars extends BaseController
{
    public function index(): string
    {
        $webinars = model("Webinars");
        $data['webinars'] = $webinars->orderBy("datetime DESC")->findAll();
        return view("_pages/dashboard/webinars/index", $data);
    }

    public function presenter($webinar_id): string
    {
        $webinars = model("Webinars");
        $presenters = model("Presenters");
        $data['webinar'] = $webinars->find($webinar_id);
        $data['presenters'] = $presenters->where("webinar_id", $webinar_id)->findAll();
        return view("_pages/dashboard/webinars/presenters", $data);
    }
}
