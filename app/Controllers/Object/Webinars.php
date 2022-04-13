<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Webinars extends BaseController
{
    public function create(): RedirectResponse
    {
        $webinars = model("Webinars");

        // upload thumbnail_url
        $path = $this->request->getFile('thumbnail_url');
        if ($path->getFilename()) {
            $path->move(UPLOAD_FOLDER_URL);

            $_POST['thumbnail_url'] = "{backend_url}/uploads/" . $path->getName();
        }
        $webinars->save($_POST);

        return redirect()->to(previous_url());
    }

    public function get(): ResponseInterface
    {
        $webinars = model("Webinars");
        $lines = model("Lines");

        $allWebinar = $webinars->orderBy("upload_date DESC")->findAll();

        $data['webinars'] = $allWebinar;
        $data['banner'] = [
            "headline" => $lines->findOrEmptyString("WEBINARS_BANNER_HEADLINE"),
            "description" => $lines->findOrEmptyString("WEBINARS_BANNER_DESCRIPTION"),
            "imgUrl" => $lines->findOrPlaceholderImage("WEBINARS_BANNER_IMAGE"),
            "title" => "Webinars"
        ];
        return $this->response->setJSON($data);
    }
}
