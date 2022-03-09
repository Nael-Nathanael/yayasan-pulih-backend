<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Trainings extends BaseController
{
    public function create(): RedirectResponse
    {
        $trainings = model("Trainings");
        $trainings->save(
            [
                "title" => $this->request->getPost("title"),
                "datetime" => $this->request->getPost("datetime"),
                "description" => $this->request->getPost("description"),
                "url" => $this->request->getPost("url"),
            ]
        );
        return redirect()->to(previous_url());
    }

    public function get(): ResponseInterface
    {
        $trainings = model("Trainings");
        $lines = model("Lines");

        $allTrainings = $trainings
            ->where("datetime >=", date("Y-m-d H:i:s"))
            ->orderBy("datetime ASC")->limit(10)->findAll();

        $data['trainings'] = $allTrainings;
        $data['banner'] = [
            "headline" => $lines->findOrEmptyString("TRAININGS_BANNER_HEADLINE"),
            "description" => $lines->findOrEmptyString("TRAININGS_BANNER_DESCRIPTION"),
        ];
        return $this->response->setJSON($data);
    }
}
