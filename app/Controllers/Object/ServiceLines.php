<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class ServiceLines extends BaseController
{
    public function create($subservice_key): RedirectResponse
    {
        $service_lines = model("ServiceLines");
        $service_lines->save(
            [
                "subservice_key" => $subservice_key,
                "title" => $this->request->getPost("title"),
                "short_description" => $this->request->getPost("short_description"),
                "description" => $this->request->getPost("description"),
            ]
        );
        return redirect()->to(previous_url());
    }
}
