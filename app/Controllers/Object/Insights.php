<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

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
        $imgUrl = '/img/BannerBG_LandingPage.jpg';
        if ($_FILES["coverImage"]["name"]) {
            $path = $this->request->getFile("coverImage");
            $path->move(UPLOAD_FOLDER_URL);
            $imgUrl = base_url("/uploads/" . $path->getName());
        }

        // upload carousel image
        $carouselUrls = [];
        if ($_FILES['carousel']['name'][0] && sizeof($_FILES['carousel']['name']) > 0) {
            $paths = $this->request->getFileMultiple('carousel');
            foreach ($paths as $path) {
                try {
                    $path->move(UPLOAD_FOLDER_URL);
                } catch (Exception $e) {
                    continue;
                }
                $carouselUrls[] = base_url("/uploads/" . $path->getName());
            }
        }

        $carouselUrls = implode("{SEPARATOR}", $carouselUrls);

        $insights->insert(
            [
                "imgUrl" => $imgUrl,
                "slug" => $finalSlug,
                "title" => $this->request->getPost("title"),
                "topic" => $this->request->getPost("topic"),
                "tag" => $this->request->getPost("tag"),
                "short_description" => $this->request->getPost("short_description"),
                "content" => str_replace(base_url(), "{backend_url}", $this->request->getPost("content")),
                "service" => $this->request->getPost("service"),
                "keywords" => $this->request->getPost("keywords"),
                "meta_title" => $this->request->getPost("meta_title"),
                "meta_description" => $this->request->getPost("meta_description"),
                "carouselUrls" => $carouselUrls
            ]
        );

        return redirect()->to(previous_url());
    }

    public function update($slug): RedirectResponse
    {
        $insights = model("Insights");

        // upload carousel image
        $carouselUrls = [];
        if ($_FILES['carousel']['name'][0] !== "" && sizeof($_FILES['carousel']['name']) > 0) {
            $paths = $this->request->getFileMultiple('carousel');
            foreach ($paths as $path) {
                try {
                    $path->move(UPLOAD_FOLDER_URL);
                } catch (Exception $e) {
                    continue;
                }
                $carouselUrls[] = base_url("/uploads/" . $path->getName());
            }
        }

        $carouselUrls = implode("{SEPARATOR}", $carouselUrls);

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

        if ($this->request->getPost('carousel-changed') == '1') {
            $data['carouselUrls'] = $carouselUrls;
        }

        // upload image
        if ($_FILES["coverImage"]["name"]) {
            $path = $this->request->getFile("coverImage");
            $path->move(UPLOAD_FOLDER_URL);
            $data['imgUrl'] = base_url("/uploads/" . $path->getName());
        }

        $insights->save($data);

        return redirect()->to(previous_url());
    }


    public function delete($slug): RedirectResponse
    {
        $insights = model("Insights");

        $insights->delete($slug);

        return redirect()->to(previous_url());
    }

    public function get($slug = false): ResponseInterface
    {
        $insights = model("Insights");
        if (!$slug) {
            $lines = model("Lines");
            $recommendation = [];

            for ($i = 1; $i <= 5; $i++) {
                $lookupRecom = $insights->find($lines->findOrEmptyString("INSIGHT_RECOM_$i" . "_SLUG"));
                if ($lookupRecom) {
                    $recommendation[] = $lookupRecom;
                }
            }
            return $this->response->setJSON([
                "articles" => $insights->orderBy("created_at DESC")->findAll(),
                "headline" => $insights->find(
                    $lines->findOrEmptyString("HEADLINE_SLUG")
                ),
                "recommendation" => $recommendation,
                "banner" => [
                    "headline" => $lines->findOrEmptyString("INSIGHTS_BANNER_HEADLINE"),
                    "description" => $lines->findOrEmptyString("INSIGHTS_BANNER_DESCRIPTION"),
                    "imgUrl" => $lines->findOrPlaceholderImage("INSIGHTS_BANNER_IMAGE"),
                    "title" => "Insights"
                ]
            ]);
        }
        return $this->response->setJSON($insights->find($slug));
    }

    public function getFeatured(): ResponseInterface
    {
        $insights = model("Insights");
        $lines = model("Lines");
        $recommendation = [];

        for ($i = 1; $i <= 5; $i++) {
            $lookupRecom = $insights->find($lines->findOrEmptyString("INSIGHT_RECOM_$i" . "_SLUG"));
            if ($lookupRecom) {
                $recommendation[] = $lookupRecom;
            }
        }
        return $this->response->setJSON($recommendation);
    }
}
