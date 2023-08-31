<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Mitra extends BaseController
{
    public function create(): RedirectResponse
    {
        $faq_model = model("MitraModel");

        // upload #key
        $path = $this->request->getFile("photo");
        $path->move(UPLOAD_FOLDER_URL);

        $faq_model->insert(
            [
                "photo" => base_url("/uploads/" . $path->getName()),
                "group_name" => $this->request->getPost("group_name"),
            ]
        );

        return redirect()->to(previous_url());
    }

    public function update($id): RedirectResponse
    {
        $model = model("MitraModel");

        $data = [
            "id" => $id,
            "group_name" => $this->request->getPost("group_name"),
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
        $model = model("MitraModel");

        $model->delete($id);

        return redirect()->to(previous_url());
    }

    public function get_all(): ResponseInterface
    {
        $model = model("MitraModel");

        return $this->response->setJSON($model->findAll());
    }
}
