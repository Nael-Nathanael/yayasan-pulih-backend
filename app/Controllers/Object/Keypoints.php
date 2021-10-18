<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class Keypoints extends BaseController
{
    public function create(): RedirectResponse
    {
        // upload img
        // upload #img
        $path = $this->request->getFile('img');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl = base_url("/uploads/" . $path->getName());

        $keypoints = model("Keypoints");
        $keypoints->save(
            [
                "title" => $this->request->getPost("title"),
                "description" => $this->request->getPost("description"),
                "imgUrl" => $imgUrl,
            ]
        );
        return redirect()->to(previous_url());
    }
}