<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Presenters extends BaseController
{
    public function create($webinar_id): RedirectResponse
    {
        $presenters = model("Presenters");
        $presenters->save(
            [
                "webinar_id" => $webinar_id,
                "name" => $this->request->getPost("name"),
                "link" => $this->request->getPost("link"),
            ]
        );
        return redirect()->to(previous_url());
    }

    public function delete($presenter_id): RedirectResponse
    {
        $presenters = model("Presenters");
        $presenters->delete($presenter_id);
        return redirect()->to(previous_url());
    }
}
