<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Teams extends BaseController
{
    public function create(): RedirectResponse
    {
        // upload #img
        $path = $this->request->getFile('img');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl = base_url("/uploads/" . $path->getName());

        $team = model("Teams");
        $team->save(
            [
                "name" => $this->request->getPost("name"),
                "position" => $this->request->getPost("position"),
                "imgUrl" => $imgUrl
            ]
        );

        return redirect()->route("dashboard.landing.index");
    }

    public function get(): ResponseInterface
    {
        $team = model("Teams");
        $lines = model("Lines");
        return $this->response->setJSON([
            "members" => $team->findAll(),
            "headline" => $lines->findOrEmptyString("LANDING_OUR_TEAM_HEADLINE"),
            "description" => $lines->findOrEmptyString("LANDING_OUR_TEAM_DESCRIPTION")
        ]);
    }

    public function delete($id): RedirectResponse
    {
        $team = model("Teams");
        $team->delete($id);

        return redirect()->route("dashboard.landing.index");
    }
}
