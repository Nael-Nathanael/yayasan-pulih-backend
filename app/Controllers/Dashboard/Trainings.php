<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class Trainings extends BaseController
{
    public function index(): string
    {
        $trainings = model("Trainings");
        $data['trainings'] = $trainings->orderBy("datetime DESC")->findAll();
        return view("_pages/dashboard/trainings/index", $data);
    }

    public function delete($pk): RedirectResponse
    {
        $trainingModel = model("Trainings");
        $trainingModel->delete($pk);
        return redirect()->route("dashboard.trainings.index");
    }
}
