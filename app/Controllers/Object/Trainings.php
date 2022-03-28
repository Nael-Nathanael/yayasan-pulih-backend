<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Trainings extends BaseController
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
        // upload #img
        $path = $this->request->getFile('img');
        $path->move(UPLOAD_FOLDER_URL);

        $_POST['imgurl'] = base_url("/uploads/" . $path->getName());

        // loop 3 time, upload hal_yang_dipelajari_img_$i
        for ($i = 1; $i <= 3; $i++) {
            $path = $this->request->getFile("hal_yang_dipelajari_img_$i");
            $path->move(UPLOAD_FOLDER_URL);

            $_POST["hal_yang_dipelajari_img_$i"] = base_url("/uploads/" . $path->getName());
        }

        $_POST['id'] = $this->GUID();

        $trainings = model("Trainings");
        $trainings->save($_POST);
        return redirect()->to(previous_url());
    }

    public function get(): ResponseInterface
    {
        $trainings = model("Trainings");
        $lines = model("Lines");

        $allTrainings = $trainings->findAll();

        $data['trainings'] = $allTrainings;
        $data['banner'] = [
            "headline" => $lines->findOrEmptyString("TRAININGS_BANNER_HEADLINE"),
            "description" => $lines->findOrEmptyString("TRAININGS_BANNER_DESCRIPTION"),
        ];
        return $this->response->setJSON($data);
    }
}
