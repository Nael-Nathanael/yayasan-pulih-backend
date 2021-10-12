<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WhatAndHowWeDo extends BaseController
{
    public function get(): ResponseInterface
    {
        $lines = model("Lines");

        return $this->response->setJSON(
            [
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
            ]
        );
    }
}
