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
                    "title" => $lines->findOrEmptyString("LANDING_SERVICE_1_HEADLINE"),
                    "imgUrl" => $lines->findOrPlaceholderImage("LANDING_SERVICE_1_IMAGE"),
                    "descriptions" => $lines->findOrEmptyString("LANDING_SERVICE_1_DESCRIPTION"),
                    "subservices" => [
                        $lines->findOrEmptyString("LANDING_SERVICE_1_SUBSERVICE_1"),
                        $lines->findOrEmptyString("LANDING_SERVICE_1_SUBSERVICE_2"),
                        $lines->findOrEmptyString("LANDING_SERVICE_1_SUBSERVICE_3"),
                    ]
                ],
                [
                    "name" => [
                        "IT",
                        "Advisory"
                    ],
                    "url" => "/services/it-advisory",
                    "title" => $lines->findOrEmptyString("LANDING_SERVICE_2_HEADLINE"),
                    "imgUrl" => $lines->findOrPlaceholderImage("LANDING_SERVICE_2_IMAGE"),
                    "descriptions" => $lines->findOrEmptyString("LANDING_SERVICE_2_DESCRIPTION"),
                    "subservices" => [
                        $lines->findOrEmptyString("LANDING_SERVICE_2_SUBSERVICE_1"),
                        $lines->findOrEmptyString("LANDING_SERVICE_2_SUBSERVICE_2"),
                        $lines->findOrEmptyString("LANDING_SERVICE_2_SUBSERVICE_3"),
                    ]
                ],
                [
                    "name" => [
                        "People",
                        "Advisory"
                    ],
                    "url" => "/services/people-advisory",
                    "title" => $lines->findOrEmptyString("LANDING_SERVICE_3_HEADLINE"),
                    "imgUrl" => $lines->findOrPlaceholderImage("LANDING_SERVICE_3_IMAGE"),
                    "descriptions" => $lines->findOrEmptyString("LANDING_SERVICE_3_DESCRIPTION"),
                    "subservices" => [
                        $lines->findOrEmptyString("LANDING_SERVICE_3_SUBSERVICE_1"),
                        $lines->findOrEmptyString("LANDING_SERVICE_3_SUBSERVICE_2"),
                        $lines->findOrEmptyString("LANDING_SERVICE_3_SUBSERVICE_3"),
                    ]
                ],
            ]
        );
    }
}
