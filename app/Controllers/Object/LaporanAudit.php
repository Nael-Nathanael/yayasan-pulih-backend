<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class LaporanAudit extends BaseController
{
    public function create(): RedirectResponse
    {
        $model = model("LaporanAuditModel");

        // upload #key
        $path = $this->request->getFile("file");
        $path->move(UPLOAD_FOLDER_URL);

        $model->insert(
            [
                "url" => base_url("/uploads/" . $path->getName()),
                "name" => $this->request->getPost("name"),
            ]
        );

        return redirect()->to(previous_url());
    }

    public function update($id): RedirectResponse
    {
        $model = model("LaporanAuditModel");

        $data = [
            "id" => $id,
            "name" => $this->request->getPost("name"),
        ];

        // upload image
        if ($_FILES["file"]["name"]) {
            $path = $this->request->getFile("file");
            $path->move(UPLOAD_FOLDER_URL);
            $data['url'] = base_url("/uploads/" . $path->getName());
        }

        $model->save($data);

        return redirect()->to(previous_url());
    }


    public function delete($id): RedirectResponse
    {
        $model = model("LaporanAuditModel");

        $model->delete($id);

        return redirect()->to(previous_url());
    }

    public function get_all(): ResponseInterface
    {
        $model = model("LaporanAuditModel");

        return $this->response->setJSON($model->findAll());
    }
}
