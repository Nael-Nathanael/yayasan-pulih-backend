<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Peoples extends BaseController
{
    public function create()
    {
        // upload #img
        $path = $this->request->getFile('img');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl = base_url("/uploads/" . $path->getName());

        $peoples = model("Peoples");
        $peoples->save(
            [
                "name" => $this->request->getPost("name"),
                "position" => $this->request->getPost("position"),
                "description" => $this->request->getPost("description"),
                "imgUrl" => $imgUrl
            ]
        );

        return redirect()->route("dashboard.about.index");
    }
}
