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
}
