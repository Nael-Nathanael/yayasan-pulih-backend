<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class TrainingMenu extends BaseController
{
    function GUID()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    public function create(): RedirectResponse
    {
        $_POST['guid'] = $this->GUID();

        $trainings = model("TrainingMenu");
        $trainings->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createoutline(): RedirectResponse
    {
        $model = model("TrainingMenuOutline");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createtantangan(): RedirectResponse
    {
        $model = model("TrainingMenuTantangan");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createmarket(): RedirectResponse
    {
        $model = model("TrainingMenuMarket");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createdipelajari(): RedirectResponse
    {
        $model = model("TrainingMenuDipelajari");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function get($guid = false): ResponseInterface
    {
        $trainings = model("TrainingMenu");
        if (!$guid) {
            $allTrainings = $trainings->findAll();
            return $this->response->setJSON($allTrainings);
        }

        $outline = model("TrainingMenuOutline");
        $tantangan = model("TrainingMenuTantangan");
        $market = model("TrainingMenuMarket");
        $dipelajari = model("TrainingMenuDipelajari");

        $training = $trainings->find($guid);
        $training->outline = $outline->where("trainingmenu_guid", $training->guid)->findAll();
        $training->tantangan = $tantangan->where("trainingmenu_guid", $training->guid)->findAll();
        $training->market = $market->where("trainingmenu_guid", $training->guid)->findAll();
        $training->dipelajari = $dipelajari->where("trainingmenu_guid", $training->guid)->findAll();
        return $this->response->setJSON($training);
    }
}
