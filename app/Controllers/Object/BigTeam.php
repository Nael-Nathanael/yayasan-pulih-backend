<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class BigTeam extends BaseController
{
    public function create(): RedirectResponse
    {
        $faq_model = model("BigTeamModel");

        // upload #key
        $path = $this->request->getFile("photo");
        $path->move(UPLOAD_FOLDER_URL);

        $faq_model->insert(
            [
                "photo" => base_url("/uploads/" . $path->getName()),
                "name" => $this->request->getPost("name"),
                "position" => $this->request->getPost("position"),
                "description" => $this->request->getPost("description"),
            ]
        );

        return redirect()->to(previous_url());
    }

    public function update($id): RedirectResponse
    {
        $model = model("BigTeamModel");

        $data = [
            "id" => $id,
            "name" => $this->request->getPost("name"),
            "position" => $this->request->getPost("position"),
            "description" => $this->request->getPost("description"),
        ];

        // upload image
        if ($_FILES["photo"]["name"]) {
            $path = $this->request->getFile("photo");
            $path->move(UPLOAD_FOLDER_URL);
            $data['photo'] = base_url("/uploads/" . $path->getName());
        }

        $model->save($data);

        return redirect()->to(previous_url());
    }


    public function delete($id): RedirectResponse
    {
        $model = model("BigTeamModel");

        $model->delete($id);

        return redirect()->to(previous_url());
    }

    public function get_all(): ResponseInterface
    {
        $model = model("BigTeamModel");

        return $this->response->setJSON($model->orderBy("order", "ASC")->findAll());
    }
}
