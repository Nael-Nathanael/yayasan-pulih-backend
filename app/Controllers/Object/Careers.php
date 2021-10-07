<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Careers extends BaseController
{
    function get(): ResponseInterface
    {
        $lines = model("Lines");
        return $this->response->setJSON(
            [
                "headline" => $lines->findOrEmptyString("LANDING_CAREER_HEADLINE"),
                "imgUrl" => $lines->findOrPlaceholderImage("LANDING_CAREER_THUMBNAIL_IMAGE")
            ]
        );
    }

    function getPageData(): ResponseInterface
    {
        $lines = model("Lines");
        return $this->response->setJSON(
            [
                "banner" => [
                    "headline" => $lines->findOrEmptyString("CAREERS_BANNER_HEADLINE"),
                    "description" => $lines->findOrEmptyString("CAREERS_BANNER_DESCRIPTION"),
                    "imgUrl" => $lines->findOrPlaceholderImage("CAREERS_BANNER_IMAGE"),
                ],
                "why_joinning" => [
                    "headline" => $lines->findOrEmptyString("CAREERS_WHY_JOINNING_HEADLINE"),
                    "descriptions" => [
                        $lines->findOrEmptyString("CAREERS_WHY_JOINNING_DESCRIPTION_1"),
                        $lines->findOrEmptyString("CAREERS_WHY_JOINNING_DESCRIPTION_2"),
                    ]
                ],
                "life_at_altha" => [
                    "description" => $lines->findOrEmptyString("CAREERS_LIFE_AT_ALTHA_DESCRIPTION"),
                    "imgUrl" => $lines->findOrPlaceholderImage("CAREERS_LIFE_AT_ALTHA_IMAGE"),
                ],
                "separatorImg" => $lines->findOrPlaceholderImage("CAREERS_SEPARATOR_IMAGE"),
                "tailor_path" => [
                    [
                        "tag" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_1_TAG"),
                        "title" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_1_TITLE"),
                        "keyword" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_1_KEYWORD"),
                        "description" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_1_DESCRIPTION"),
                        "imgUrl" => $lines->findOrPlaceholderImage("CAREERS_TAILOR_PATH_1_IMAGE")
                    ],
                    [
                        "tag" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_2_TAG"),
                        "title" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_2_TITLE"),
                        "keyword" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_2_KEYWORD"),
                        "description" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_2_DESCRIPTION"),
                        "imgUrl" => $lines->findOrPlaceholderImage("CAREERS_TAILOR_PATH_2_IMAGE")
                    ],
                    [
                        "tag" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_3_TAG"),
                        "title" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_3_TITLE"),
                        "keyword" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_3_KEYWORD"),
                        "description" => $lines->findOrEmptyString("CAREERS_TAILOR_PATH_3_DESCRIPTION"),
                        "imgUrl" => $lines->findOrPlaceholderImage("CAREERS_TAILOR_PATH_3_IMAGE")
                    ],
                ],
                "how_to_join" => [
                    "description" => $lines->findOrEmptyString("CAREERS_HOW_TO_JOIN_DESCRIPTION"),
                    "imgUrl" => $lines->findOrPlaceholderImage("CAREERS_HOW_TO_JOIN_IMAGE"),
                ],
            ]
        );
    }
}
