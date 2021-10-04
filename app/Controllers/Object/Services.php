<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Services extends BaseController
{
    public function get(): ResponseInterface
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
