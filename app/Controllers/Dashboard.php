<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $carouselBanner = model("CarouselBanner");
        $data['carouselBanners'] = $carouselBanner->findAll();

        return view("_pages/dashboard/landing/index", $data);
    }
}
