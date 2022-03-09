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
                    "url" => "/services",
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
                    "url" => "/services",
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
                    "url" => "/services",
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
            $service_lines = model("ServiceLines");
            return $this->response->setJSON(
                [
                    "banner_headline" => $lines->findOrEmptyString("SERVICE_1_BANNER_HEADLINE"),
                    "banner_description" => $lines->findOrEmptyString("SERVICE_1_BANNER_DESCRIPTION"),
                    "paragraph_title" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_TITLE"),
                    "paragraph_1" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_1"),
                    "paragraph_3" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_3"),
                    "service_lines" => $service_lines->where("subservice_key", "BUSINESS_AND_RISK")->findAll(),
                ]
            );
        }
    }

    public function getITPage(): ResponseInterface
    {
        {
            $lines = model("Lines");
            $service_lines = model("ServiceLines");
            return $this->response->setJSON(
                [
                    "banner_headline" => $lines->findOrEmptyString("SERVICE_2_BANNER_HEADLINE"),
                    "banner_description" => $lines->findOrEmptyString("SERVICE_2_BANNER_DESCRIPTION"),
                    "paragraph_title" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_TITLE"),
                    "paragraph_1" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_1"),
                    "paragraph_3" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_3"),
                    "service_lines" => $service_lines->where("subservice_key", "IT")->findAll(),
                ]
            );
        }
    }

    public function getPeoplePage(): ResponseInterface
    {
        $lines = model("Lines");
        $service_lines = model("ServiceLines");
        return $this->response->setJSON(
            [
                "banner_headline" => $lines->findOrEmptyString("SERVICE_3_BANNER_HEADLINE"),
                "banner_description" => $lines->findOrEmptyString("SERVICE_3_BANNER_DESCRIPTION"),
                "paragraph_title" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_TITLE"),
                "paragraph_1" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_1"),
                "paragraph_3" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_3"),
                "service_lines" => $service_lines->where("subservice_key", "PEOPLE")->findAll(),
            ]
        );
    }

    public function getPage(): ResponseInterface
    {
        $lines = model("Lines");
        $service_lines = model("ServiceLines");
        $keypoints = model("Keypoints");
        return $this->response->setJSON(
            [
                "banner" => [
                    "description" => "We work hand-in-hand with our clients to redefine a better way in capturing long-term value. Our systematic approach corroborates the knowledge transfer that instills methodological know-how to our clients – ensuring their organizations capable of driving and sustaining the transformation even long after we are gone",
                    "headline" => "REDEFINING THE WAY THINGS ARE DONE",
                    "imgUrl" => $lines->findOrPlaceholderImage("SERVICES_BANNER_IMAGE"),
                    "title" => "Service"
                ],
                "headline" => [
                    "bold" => "Redefining smarter way",
                    "normal" => " to unlock long-term value"
                ],
                "descriptions" => [
                    "At Altha, we help our clients bridge the gap between strategic initiatives and implementation with our high quality Risk, IT, and People advisory services",
                    "We believe that our services should be both accessible and applicable to our clients. We aim to reach growing businesses in Indonesia with our presence in East Indonesia, home to several of the country’s most rapidly growing economy.<br /><br />Our brand-agnostic approach allows us to deliver bespoke service offering tailored to suit your industry and your needs with the right balance of scope and investment. With the right mix of people that pair technical exposure with a business mindset, we strive to deliver solutions that are both applicable technically and aligned with strategic initiatives."
                ],
                "keypoints" => $keypoints->findAll(),
                "content" => [
                    [
                        "id" => "business-and-risk-advisory",
                        "imgUrl" => $lines->findOrPlaceholderImage("SERVICE_1_BANNER_IMAGE"),
                        "banner_headline" => $lines->findOrEmptyString("SERVICE_1_BANNER_HEADLINE"),
                        "banner_description" => $lines->findOrEmptyString("SERVICE_1_BANNER_DESCRIPTIebsON"),
                        "paragraph_title" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_TITLE"),
                        "paragraph_1" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_1"),
                        "paragraph_3" => $lines->findOrEmptyString("SERVICE_1_PARAGRAPH_3"),
                        "service_lines" => $service_lines->where("subservice_key", "BUSINESS_AND_RISK")->findAll(),
                    ],
                    [
                        "id" => "it-advisory",
                        "imgUrl" => $lines->findOrPlaceholderImage("SERVICE_2_BANNER_IMAGE"),
                        "banner_headline" => $lines->findOrEmptyString("SERVICE_2_BANNER_HEADLINE"),
                        "banner_description" => $lines->findOrEmptyString("SERVICE_2_BANNER_DESCRIPTION"),
                        "paragraph_title" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_TITLE"),
                        "paragraph_1" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_1"),
                        "paragraph_3" => $lines->findOrEmptyString("SERVICE_2_PARAGRAPH_3"),
                        "service_lines" => $service_lines->where("subservice_key", "IT")->findAll(),
                    ],
                    [
                        "id" => "people-advisory",
                        "imgUrl" => $lines->findOrPlaceholderImage("SERVICE_3_BANNER_IMAGE"),
                        "banner_headline" => $lines->findOrEmptyString("SERVICE_3_BANNER_HEADLINE"),
                        "banner_description" => $lines->findOrEmptyString("SERVICE_3_BANNER_DESCRIPTION"),
                        "paragraph_title" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_TITLE"),
                        "paragraph_1" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_1"),
                        "paragraph_3" => $lines->findOrEmptyString("SERVICE_3_PARAGRAPH_3"),
                        "service_lines" => $service_lines->where("subservice_key", "PEOPLE")->findAll(),
                    ]
                ]
            ]
        );
    }
}
