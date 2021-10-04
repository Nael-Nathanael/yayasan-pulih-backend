<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class Lines extends BaseController
{
    public function upload(): RedirectResponse
    {
        $key = $this->request->getPost("key");
        $group_name = $this->request->getPost("group_name");

        // upload #key
        if (!empty($_FILES[$key]['name'])) {
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
        }

        return redirect()->route("dashboard.landing.index");
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

        return redirect()->route("dashboard.landing.index");
    }
}
