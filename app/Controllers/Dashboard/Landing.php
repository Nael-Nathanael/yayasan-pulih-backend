<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Landing extends BaseController
{
    public function index(): string
    {
        $carouselBanner = model("CarouselBanner");
        $data['carouselBanners'] = $carouselBanner->findAll();

        return view("_pages/dashboard/landing/index", $data);
    }

    public function get()
    {
        $carouselBanner = model("CarouselBanner");
        $lines = model("Lines");
        return $this->response->setJSON(
            [
                "fetchedBannerData" => $carouselBanner->findAll(),
                "fetchedWhatAndHow" => [
                    "what_we_do" => [
                        "title" => $lines->findOrEmptyString("WHAT_WE_DO_TITLE"),
                        "descriptions" => [
                            $lines->findOrEmptyString("WHAT_WE_DO_DESCRIPTION"),
                            $lines->findOrEmptyString("WHAT_WE_DO_DESCRIPTION_2"),
                        ]
                    ],
                    "how_we_do" => [
                        "title" => $lines->findOrEmptyString("HOW_WE_DO_TITLE"),
                        "descriptions" => [
                            $lines->findOrEmptyString("HOW_WE_DO_DESCRIPTION"),
                            $lines->findOrEmptyString("HOW_WE_DO_DESCRIPTION_2"),
                        ]
                    ],
                ],
                "fetchedServices" => [
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
                ],
                "fetchedCareers" => [
                    "headline" => $lines->findOrEmptyString("LANDING_CAREER_HEADLINE"),
                    "imgUrl" => $lines->findOrPlaceholderImage("LANDING_CAREER_THUMBNAIL_IMAGE")
                ],
            ]
        );
    }
}
