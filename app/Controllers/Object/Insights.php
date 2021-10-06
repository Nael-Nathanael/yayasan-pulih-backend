<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Insights extends BaseController
{
    public function create()
    {
        // upload #img
        $path = $this->request->getFile('img');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl = base_url("/uploads/" . $path->getName());

        $insights = model("Insights");
        $insights->save(
            [
                "slug" => "",
                "imgUrl" => $imgUrl,
                "title" => $this->request->getPost("title"),
                "subtitle" => $this->request->getPost("subtitle"),
                "content" => $this->request->getPost("content"),
            ]
        );

        return redirect()->to(previous_url());
    }

    public function get(): ResponseInterface
    {
        $insights = model("Insights");
        return $this->response->setJSON($insights->order_by("created_at DESC")->findAll());
    }
}
