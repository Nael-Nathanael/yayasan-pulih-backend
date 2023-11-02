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
        $modelEdu = model("PsyEduModel");

        $slug = url_title($this->request->getPost("name"));
        $finalSlug = $slug;
        $counter = 1;
        while ($model->find($finalSlug)) {
            $finalSlug = $slug . "-" . $counter++;
        }

        $slug = $finalSlug;

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

        for ($i = 0; $i < count($this->request->getPost("institute")); $i++) {
            $modelEdu->insert(
                [
                    "psy_slug" => $slug,
                    "institute" => $this->request->getPost("institute")[$i],
                    "year" => $this->request->getPost("year")[$i],
                    "major" => $this->request->getPost("major")[$i],
                ]
            );
        }

        return redirect()->to(route_to("dashboard.psy.index"));
    }

    public function update($slug): RedirectResponse
    {
        $model = model("PsyModel");
        $modelEdu = model("PsyEduModel");

        $data = [
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
        ];

        // upload image
        if ($_FILES["photo"]["name"]) {
            $path = $this->request->getFile("photo");
            $path->move(UPLOAD_FOLDER_URL);
            $data['photo'] = base_url("/uploads/" . $path->getName());
        }

        $model->save($data);

        // delete all modelEdu
        $modelEdu->where("psy_slug", $slug)->delete();

        for ($i = 0; $i < count($this->request->getPost("institute")); $i++) {
            $modelEdu->insert(
                [
                    "psy_slug" => $slug,
                    "institute" => $this->request->getPost("institute")[$i],
                    "year" => $this->request->getPost("year")[$i],
                    "major" => $this->request->getPost("major")[$i],
                ]
            );
        }

        return redirect()->to(route_to("dashboard.psy.index"));
    }


    public function delete($slug): RedirectResponse
    {
        $model = model("PsyModel");
        $modelEdu = model("PsyEduModel");

        $model->where("slug", $slug)->delete();
        $modelEdu->where("psy_slug", $slug)->delete();

        return redirect()->to(route_to("dashboard.psy.index"));
    }

    public function get($slug = false): ResponseInterface
    {
        $model = model("PsyModel");
        $modelEdu = model("PsyEduModel");

        if (!$slug) {
            $instances = $model
                ->orderBy("created_at DESC")
                ->findAll();

            return $this->response->setJSON($instances);
        }
        $instance = $model->find($slug);
        $instance->educations = $modelEdu->where("psy_slug", $instance->slug)->findAll();

        return $this->response->setJSON($instance);
    }
}
