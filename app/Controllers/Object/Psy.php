<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class Psy extends BaseController
{
    public function create(): RedirectResponse
    {
        $model = model("PsyModel");

        $slug = url_title($this->request->getPost("name"));
        $finalSlug = $slug;
        $counter = 1;
        while ($model->find($finalSlug)) {
            $finalSlug = $slug . "-" . $counter++;
        }

        // upload image
        $imgUrl = '/img/BannerBG_LandingPage.jpg';
        if ($_FILES["photo"]["name"]) {
            $path = $this->request->getFile("photo");
            $path->move(UPLOAD_FOLDER_URL);
            $imgUrl = base_url("/uploads/" . $path->getName());
        }

        $model->insert(
            [
                "slug" => $slug,
                "name" => $this->request->getPost('name'),
                "isAvailable" => $this->request->getPost('isAvailable'),
                "SIPP" => $this->request->getPost('SIPP'),
                "STR" => $this->request->getPost('STR'),
                "sesi" => $this->request->getPost('sesi'),
                "rating" => $this->request->getPost('rating'),
                "reviews" => $this->request->getPost('reviews'),
                "pengalaman_praktik" => $this->request->getPost('pengalaman_praktik'),
                "tag" => $this->request->getPost('tag'),
                "mastery" => $this->request->getPost('mastery'),
                "description" => $this->request->getPost('description'),
                "photo" => $imgUrl
            ]
        );

        return redirect()->to(previous_url());
    }

    public function update($slug): RedirectResponse
    {
        $articles = model("ArticlesModel");

        $data = [
            "slug" => $slug,
            "title" => $this->request->getPost("title"),
            "topic" => $this->request->getPost("topic"),
            "tag" => $this->request->getPost("tag"),
            "short_description" => $this->request->getPost("short_description"),
            "content" => str_replace(base_url(), "{backend_url}", $this->request->getPost("content")),
            "service" => $this->request->getPost("service"),
            "keywords" => $this->request->getPost("keywords"),
            "meta_title" => $this->request->getPost("meta_title"),
            "meta_description" => $this->request->getPost("meta_description"),
        ];

        // upload image
        if ($_FILES["coverImage"]["name"]) {
            $path = $this->request->getFile("coverImage");
            $path->move(UPLOAD_FOLDER_URL);
            $data['imgUrl'] = base_url("/uploads/" . $path->getName());
        }

        $articles->save($data);

        return redirect()->to(previous_url());
    }


    public function delete($slug): RedirectResponse
    {
        $articles = model("ArticlesModel");

        $articles->delete($slug);

        return redirect()->to(previous_url());
    }

    public function get($slug = false): ResponseInterface
    {
        $articles = model("ArticlesModel");
        if (!$slug) {
            $lines = model("Lines");
            $recommendation = [];

            for ($i = 1; $i <= 5; $i++) {
                $lookupRecom = $articles->find($lines->findOrEmptyString("ARTICLE_RECOM_$i" . "_SLUG"));
                if ($lookupRecom) {
                    $recommendation[] = $lookupRecom;
                }
            }

            $articles_all = $articles
                ->orderBy("created_at DESC")
                ->findAll();

            $excluded_field = 'content';
            foreach ($articles_all as &$article) {
                unset($article->$excluded_field);
            }
            return $this->response->setJSON([
                "articles" => $articles_all,
                "recommendation" => $recommendation,
            ]);
        }
        return $this->response->setJSON($articles->find($slug));
    }

    public function getFeatured(): ResponseInterface
    {
        $articles = model("ArticlesModel");
        $lines = model("Lines");
        $recommendation = [];

        for ($i = 1; $i <= 5; $i++) {
            $lookupRecom = $articles->find($lines->findOrEmptyString("ARTICLE_RECOM_$i" . "_SLUG"));
            if ($lookupRecom) {
                $recommendation[] = $lookupRecom;
            }
        }
        return $this->response->setJSON($recommendation);
    }
}
