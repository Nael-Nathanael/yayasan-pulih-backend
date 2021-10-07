<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class Insights extends BaseController
{
    public function create(): RedirectResponse
    {
        $insights = model("Insights");

        $slug = url_title($this->request->getPost("title"));
        $finalSlug = $slug;
        $counter = 1;
        while ($insights->find($finalSlug)) {
            $finalSlug = $slug . "-" . $counter++;
        }

        // upload image
        $path = $this->request->getFile("coverImage");
        $path->move(UPLOAD_FOLDER_URL);

        $insights->insert(
            [
                "imgUrl" => base_url("/uploads/" . $path->getName()),
                "slug" => $finalSlug,
                "title" => $this->request->getPost("title"),
                "topic" => $this->request->getPost("topic"),
                "tag" => $this->request->getPost("tag"),
                "short_description" => $this->request->getPost("short_description"),
                "content" => $this->request->getPost("content"),
            ]
        );

        return redirect()->to(previous_url());
    }

    public function delete($slug): RedirectResponse
    {
        $insights = model("Insights");

        $insights->delete($slug);

        return redirect()->to(previous_url());
    }

    public function get(): ResponseInterface
    {
        $insights = model("Insights");
        $lines = model("Lines");
        return $this->response->setJSON([
            "articles" => $insights->orderBy("created_at DESC")->findAll(),
            "headline" => $insights->find(
                $lines->findOrEmptyString("HEADLINE_SLUG")
            ),
            "recommendation" => [
                $insights->find($lines->findOrEmptyString("INSIGHT_RECOM_1_SLUG")),
                $insights->find($lines->findOrEmptyString("INSIGHT_RECOM_2_SLUG")),
                $insights->find($lines->findOrEmptyString("INSIGHT_RECOM_3_SLUG")),
                $insights->find($lines->findOrEmptyString("INSIGHT_RECOM_4_SLUG")),
                $insights->find($lines->findOrEmptyString("INSIGHT_RECOM_5_SLUG")),
            ]
        ]);
    }
}
