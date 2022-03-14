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

        $imgUrl = base_url("/uploads/" . $path->getName());

        // upload #img_small
        $path = $this->request->getFile('img_small');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl_small = base_url("/uploads/" . $path->getName());

        // upload #img_promo
        $path = $this->request->getFile('img_promo');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl_promo = base_url("/uploads/" . $path->getName());

        // upload #img_small_promo
        $path = $this->request->getFile('img_small_promo');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl_small_promo = base_url("/uploads/" . $path->getName());

        $trainings = model("Trainings");
        $trainings->save(
            [
                "id" => $this->GUID(),
                "imgurl" => $imgUrl,
                "imgurl_promo" => $imgUrl_promo,
                "imgurl_small" => $imgUrl_small,
                "imgurl_small_promo" => $imgUrl_small_promo,
            ]
        );
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
