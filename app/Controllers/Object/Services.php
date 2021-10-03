<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class Services extends BaseController
{
    public function update_thumbnail(): RedirectResponse
    {
        $key = $this->request->getPost("key");

        // upload #key
        if (!empty($_FILES[$key]['name'])) {
            $path = $this->request->getFile($key);
            $path->move(UPLOAD_FOLDER_URL);

            // simpan ke lines
            $linesModel = model("Lines");
            $linesModel->save(
                [
                    "group_name" => "SERVICES",
                    "key" => $key,
                    "value" => base_url("/uploads/" . $path->getName())
                ]
            );
        }

        return redirect()->route("dashboard.landing.index");
    }

    public function update(): RedirectResponse
    {
        $lines = model("Lines");
        $submitable_array = $this->request->getPost();

        foreach ($submitable_array as $key => $value) {
            $lines->save(
                [
                    "group_name" => "SERVICES",
                    "key" => $key,
                    "value" => $value
                ]
            );
        }

        return redirect()->route("dashboard.landing.index");
    }

    public function get()
    {
        $lines = model("Lines");

        return $this->response->setJSON(
            [
                [
                    "name" => [
                        "Business",
                        "and Risk Advisory"
                    ],
                    "url" => "/services/business-and-risk-advisory",
                    "title" => $lines->find("LANDING_SERVICE_1_HEADLINE")->value,
                    "imgUrl" => $lines->find("LANDING_SERVICE_1_IMAGE")->value,
                    "descriptions" => $lines->find("LANDING_SERVICE_1_DESCRIPTION")->value,
                    "subservices" => [
                        $lines->find("LANDING_SERVICE_1_SUBSERVICE_1")->value,
                        $lines->find("LANDING_SERVICE_1_SUBSERVICE_2")->value,
                        $lines->find("LANDING_SERVICE_1_SUBSERVICE_3")->value,
                    ]
                ],
                [
                    "name" => [
                        "IT",
                        "Advisory"
                    ],
                    "url" => "/services/it-advisory",
                    "title" => $lines->find("LANDING_SERVICE_2_HEADLINE")->value,
                    "imgUrl" => $lines->find("LANDING_SERVICE_2_IMAGE")->value,
                    "descriptions" => $lines->find("LANDING_SERVICE_2_DESCRIPTION")->value,
                    "subservices" => [
                        $lines->find("LANDING_SERVICE_2_SUBSERVICE_1")->value,
                        $lines->find("LANDING_SERVICE_2_SUBSERVICE_2")->value,
                        $lines->find("LANDING_SERVICE_2_SUBSERVICE_3")->value,
                    ]
                ],
                [
                    "name" => [
                        "People",
                        "Advisory"
                    ],
                    "url" => "/services/people-advisory",
                    "title" => $lines->find("LANDING_SERVICE_3_HEADLINE")->value,
                    "imgUrl" => $lines->find("LANDING_SERVICE_3_IMAGE")->value,
                    "descriptions" => $lines->find("LANDING_SERVICE_3_DESCRIPTION")->value,
                    "subservices" => [
                        $lines->find("LANDING_SERVICE_3_SUBSERVICE_1")->value,
                        $lines->find("LANDING_SERVICE_3_SUBSERVICE_2")->value,
                        $lines->find("LANDING_SERVICE_3_SUBSERVICE_3")->value,
                    ]
                ],
            ]
        );
    }
}
