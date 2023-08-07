<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Lines extends BaseController
{
    public function upload(): RedirectResponse
    {
        $key = $this->request->getPost("key");
        $group_name = $this->request->getPost("group_name");

        // upload #key
        $path = $this->request->getFile($key);
        $path->move(UPLOAD_FOLDER_URL);

        // simpan ke lines
        $linesModel = model("Lines");
        $linesModel->save(
            [
                "group_name" => $group_name,
                "key" => $key,
                "value" => base_url("/uploads/" . $path->getName())
            ]
        );

        return redirect()->to(previous_url());
    }

    public function dumpUpload(): ResponseInterface
    {
        $path = $this->request->getFile("upload");
        $path->move(UPLOAD_FOLDER_URL);

        return $this->response->setJSON(
            [
                "url" => base_url("/uploads/" . $path->getName())
            ]
        );
    }


    public function update($group_name): RedirectResponse
    {
        $lines = model("Lines");
        $post = $this->request->getPost();
        foreach ($post as $key => $value) {
            $lines->save(
                [
                    "group_name" => $group_name,
                    "key" => $key,
                    "value" => $value
                ]
            );
        }

        return redirect()->to(previous_url());
    }

    public function getByKey($key): ResponseInterface
    {
        $lines = model("Lines");
        return $this->response->setJSON($lines->findOrEmptyString($key));
    }

    private function semiparse($object): object
    {
        $lines = model("Lines");

        foreach ($object as $key => $value) {
            if (is_string($value)) {
                $object->$key = $lines->findOrEmptyString($value);
            } else {
                $object->$key = $this->semiparse($value);
            }
        }

        return $object;
    }

    public function getFormatted(): ResponseInterface
    {
        $post = $this->request->getJSON();

        $post = $this->semiparse($post);

        return $this->response->setJSON($post);
    }
}
