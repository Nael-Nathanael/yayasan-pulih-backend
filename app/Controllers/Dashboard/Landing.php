<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Landing extends BaseController
{
    public function index(): string
    {
        $carouselBanner = model("CarouselBanner");
        $lines = model("Lines");
        $data['carouselBanners'] = $carouselBanner->findAll();

        $data['what_we_do_title'] = $lines->where("key", "WHAT_WE_DO_TITLE")->first()->value;
        $data['what_we_do_description'] = $lines->where("key", "WHAT_WE_DO_DESCRIPTION")->first()->value;
        $data['what_we_do_description_2'] = $lines->where("key", "WHAT_WE_DO_DESCRIPTION_2")->first()->value;
        $data['how_we_do_title'] = $lines->where("key", "HOW_WE_DO_TITLE")->first()->value;
        $data['how_we_do_description'] = $lines->where("key", "HOW_WE_DO_DESCRIPTION")->first()->value;
        $data['how_we_do_description_2'] = $lines->where("key", "HOW_WE_DO_DESCRIPTION_2")->first()->value;

        return view("_pages/dashboard/landing/index", $data);
    }
}
