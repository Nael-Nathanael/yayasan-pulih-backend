<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Keypoints extends BaseController
{
    public function create($subservice_key): RedirectResponse
    {
        $keypoints = model("Keypoints");
        $keypoints->save(
            [
                "subservice_key" => $subservice_key,
                "title" => $this->request->getPost("title"),
                "description" => $this->request->getPost("description"),
            ]
        );
        return redirect()->to(previous_url());
    }
}
