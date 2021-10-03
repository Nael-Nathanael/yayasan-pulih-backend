<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Landing extends BaseController
{
    public function index($focus = ''): string
    {
        $carouselBanner = model("CarouselBanner");
        $lines = model("Lines");

        $data['focus'] = $focus;
        $data['carouselBanners'] = $carouselBanner->findAll();

        $data['what_we_do_title'] = $lines->find("WHAT_WE_DO_TITLE")->value;
        $data['what_we_do_description'] = $lines->find("WHAT_WE_DO_DESCRIPTION")->value;
        $data['what_we_do_description_2'] = $lines->find("WHAT_WE_DO_DESCRIPTION_2")->value;
        $data['how_we_do_title'] = $lines->find("HOW_WE_DO_TITLE")->value;
        $data['how_we_do_description'] = $lines->find("HOW_WE_DO_DESCRIPTION")->value;
        $data['how_we_do_description_2'] = $lines->find("HOW_WE_DO_DESCRIPTION_2")->value;

        $data['LANDING_SERVICE_1_IMAGE'] = $lines->find("LANDING_SERVICE_1_IMAGE") ? $lines->find("LANDING_SERVICE_1_IMAGE")->value : 'https://via.placeholder.com/500';
        $data['LANDING_SERVICE_1_DESCRIPTION'] = $lines->find("LANDING_SERVICE_1_DESCRIPTION") ? $lines->find("LANDING_SERVICE_1_DESCRIPTION")->value : '';
        $data['LANDING_SERVICE_1_HEADLINE'] = $lines->find("LANDING_SERVICE_1_HEADLINE") ? $lines->find("LANDING_SERVICE_1_HEADLINE")->value : '';
        $data['LANDING_SERVICE_1_SUBSERVICE_1'] = $lines->find("LANDING_SERVICE_1_SUBSERVICE_1") ? $lines->find("LANDING_SERVICE_1_SUBSERVICE_1")->value : '';
        $data['LANDING_SERVICE_1_SUBSERVICE_2'] = $lines->find("LANDING_SERVICE_1_SUBSERVICE_2") ? $lines->find("LANDING_SERVICE_1_SUBSERVICE_2")->value : '';
        $data['LANDING_SERVICE_1_SUBSERVICE_3'] = $lines->find("LANDING_SERVICE_1_SUBSERVICE_3") ? $lines->find("LANDING_SERVICE_1_SUBSERVICE_3")->value : '';

        $data['LANDING_SERVICE_2_IMAGE'] = $lines->find("LANDING_SERVICE_2_IMAGE") ? $lines->find("LANDING_SERVICE_2_IMAGE")->value : 'https://via.placeholder.com/500';
        $data['LANDING_SERVICE_2_DESCRIPTION'] = $lines->find("LANDING_SERVICE_2_DESCRIPTION") ? $lines->find("LANDING_SERVICE_2_DESCRIPTION")->value : '';
        $data['LANDING_SERVICE_2_HEADLINE'] = $lines->find("LANDING_SERVICE_2_HEADLINE") ? $lines->find("LANDING_SERVICE_2_HEADLINE")->value : '';
        $data['LANDING_SERVICE_2_SUBSERVICE_1'] = $lines->find("LANDING_SERVICE_2_SUBSERVICE_1") ? $lines->find("LANDING_SERVICE_2_SUBSERVICE_1")->value : '';
        $data['LANDING_SERVICE_2_SUBSERVICE_2'] = $lines->find("LANDING_SERVICE_2_SUBSERVICE_2") ? $lines->find("LANDING_SERVICE_2_SUBSERVICE_2")->value : '';
        $data['LANDING_SERVICE_2_SUBSERVICE_3'] = $lines->find("LANDING_SERVICE_2_SUBSERVICE_3") ? $lines->find("LANDING_SERVICE_2_SUBSERVICE_3")->value : '';

        $data['LANDING_SERVICE_3_IMAGE'] = $lines->find("LANDING_SERVICE_3_IMAGE") ? $lines->find("LANDING_SERVICE_3_IMAGE")->value : 'https://via.placeholder.com/500';
        $data['LANDING_SERVICE_3_DESCRIPTION'] = $lines->find("LANDING_SERVICE_3_DESCRIPTION") ? $lines->find("LANDING_SERVICE_3_DESCRIPTION")->value : '';
        $data['LANDING_SERVICE_3_HEADLINE'] = $lines->find("LANDING_SERVICE_3_HEADLINE") ? $lines->find("LANDING_SERVICE_3_HEADLINE")->value : '';
        $data['LANDING_SERVICE_3_SUBSERVICE_1'] = $lines->find("LANDING_SERVICE_3_SUBSERVICE_1") ? $lines->find("LANDING_SERVICE_3_SUBSERVICE_1")->value : '';
        $data['LANDING_SERVICE_3_SUBSERVICE_2'] = $lines->find("LANDING_SERVICE_3_SUBSERVICE_2") ? $lines->find("LANDING_SERVICE_3_SUBSERVICE_2")->value : '';
        $data['LANDING_SERVICE_3_SUBSERVICE_3'] = $lines->find("LANDING_SERVICE_3_SUBSERVICE_3") ? $lines->find("LANDING_SERVICE_3_SUBSERVICE_3")->value : '';

        return view("_pages/dashboard/landing/index", $data);
    }
}
