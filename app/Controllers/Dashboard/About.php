<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        $peoples = model("Peoples");
        $data['peoples'] = $peoples->findAll();
        return view("_pages/dashboard/about/index", $data);
    }

    public function get()
    {
        $lines = model("Lines");
        $peoples = model("Peoples");
        return $this->response->setJSON(
            [
                "banner" => [
                    "description" => $lines->findOrEmptyString("ABOUT_BANNER_DESCRIPTION"),
                    "headline" => $lines->findOrEmptyString("ABOUT_BANNER_HEADLINE"),
                    "imgUrl" => $lines->findOrPlaceholderImage("ABOUT_BANNER_IMAGE"),
                    "title" => "About Us"
                ],
                "headline" => [
                    "bold" => "Bridging possibilities ",
                    "normal" => " for a better world"
                ],
                "descriptions" => [
                    "Altha Consulting was Founded in 2017. Our founders perceived the increasing need for companies in advisory services for business and technology sector, which then came across to their desires and curiosities on how to contribute to the Indonesian economy.",
                    "Since its inception, Altha has been thriving as an advisory expert in business, risk, technology, and people management. The insights and quality services that we deliver help building trust and confidence in the regional business management and strategic advisory role. <br>We develop outstanding leaders and team to deliver on our promises to all of our stakeholders. In doing so, we play a critical role in bridging possible solutions for our people and clients, as well as in larger scale, engendering a smarter way to build a better world."
                ],
                "content" => [
                    "imgUrl" => $lines->findOrPlaceholderImage("ABOUT_SEPARATOR_IMAGE"),
                    "paragraph" => $lines->findOrEmptyString("ABOUT_PARAGRAPH")
                ],
                "part" => [
                    $lines->findOrEmptyString("ABOUT_VALUES_1"),
                    $lines->findOrEmptyString("ABOUT_VALUES_2"),
                    $lines->findOrEmptyString("ABOUT_VALUES_3"),
                ],
                "partIcons" => [
                    $lines->findOrPlaceholderImage("ABOUT_VALUES_1_ICON"),
                    $lines->findOrPlaceholderImage("ABOUT_VALUES_2_ICON"),
                    $lines->findOrPlaceholderImage("ABOUT_VALUES_3_ICON"),
                ],
                "peoples" => $peoples->findAll()
            ]
        );
    }
}
