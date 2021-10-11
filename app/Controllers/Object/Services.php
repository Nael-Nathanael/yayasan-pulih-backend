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

    public function getBusinessAndRiskPage(): ResponseInterface
    {
        {
            $lines = model("Lines");
            $keypoints = model("Keypoints");
            $service_lines = model("ServiceLines");
            return $this->response->setJSON(
                [
                    "banner_headline" => $lines->findOrEmptyString("SERVICE_1_BANNER_HEADLINE"),
                    "banner_description" => $lines->findOrEmptyString("SERVICE_1_BANNER_DESCRIPTION"),
                    "paragraph_title" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_TITLE"),
                    "paragraph_1" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_1"),
                    "paragraph_2" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_2"),
                    "paragraph_3" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_3"),
                    "keypoints" => $keypoints->where("subservice_key", "BUSINESS_AND_RISK")->findAll(),
                    "service_lines" => $service_lines->where("subservice_key", "BUSINESS_AND_RISK")->findAll(),
                ]
            );
        }
    }

    public function getITPage(): ResponseInterface
    {
        {
            $lines = model("Lines");
            $keypoints = model("Keypoints");
            $service_lines = model("ServiceLines");
            return $this->response->setJSON(
                [
                    "banner_headline" => $lines->findOrEmptyString("SERVICE_2_BANNER_HEADLINE"),
                    "banner_description" => $lines->findOrEmptyString("SERVICE_2_BANNER_DESCRIPTION"),
                    "paragraph_title" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_TITLE"),
                    "paragraph_1" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_1"),
                    "paragraph_2" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_2"),
                    "paragraph_3" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_3"),
                    "keypoints" => $keypoints->where("subservice_key", "IT")->findAll(),
                    "service_lines" => $service_lines->where("subservice_key", "IT")->findAll(),
                ]
            );
        }
    }

    public function getPeoplePage(): ResponseInterface
    {
        {
            $lines = model("Lines");
            $keypoints = model("Keypoints");
            $service_lines = model("ServiceLines");
            return $this->response->setJSON(
                [
                    "banner_headline" => $lines->findOrEmptyString("SERVICE_3_BANNER_HEADLINE"),
                    "banner_description" => $lines->findOrEmptyString("SERVICE_3_BANNER_DESCRIPTION"),
                    "paragraph_title" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_TITLE"),
                    "paragraph_1" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_1"),
                    "paragraph_2" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_2"),
                    "paragraph_3" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_3"),
                    "keypoints" => $keypoints->where("subservice_key", "PEOPLE")->findAll(),
                    "service_lines" => $service_lines->where("subservice_key", "PEOPLE")->findAll(),
                ]
            );
        }
    }
}
