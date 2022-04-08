<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class Webinars extends BaseController
{
    public function index(): string
    {
        $webinars = model("Webinars");
        $data['webinars'] = $webinars->orderBy("upload_date DESC")->findAll();
        return view("_pages/dashboard/webinars/index", $data);
    }

    public function delete($pk): RedirectResponse
    {
        $webinarModel = model("Webinars");
        $webinarModel->delete($pk);
        return redirect()->route("dashboard.webinars.index");
    }
}
