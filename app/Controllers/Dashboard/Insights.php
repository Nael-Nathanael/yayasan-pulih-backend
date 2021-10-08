<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Insights extends BaseController
{
    public function index(): string
    {
        $insights = model("Insights");
        $lines = model("Lines");
        $data['headline'] = $insights->find(
            $lines->findOrEmptyString("HEADLINE_SLUG")
        );
        $data['recom_1'] = $insights->find(
            $lines->findOrEmptyString("INSIGHT_RECOM_1_SLUG")
        );
        $data['recom_2'] = $insights->find(
            $lines->findOrEmptyString("INSIGHT_RECOM_2_SLUG")
        );
        $data['recom_3'] = $insights->find(
            $lines->findOrEmptyString("INSIGHT_RECOM_3_SLUG")
        );
        $data['recom_4'] = $insights->find(
            $lines->findOrEmptyString("INSIGHT_RECOM_4_SLUG")
        );
        $data['recom_5'] = $insights->find(
            $lines->findOrEmptyString("INSIGHT_RECOM_5_SLUG")
        );
        $data['insights'] = $insights->orderBy("created_at DESC")->findAll();
        return view("_pages/dashboard/insights/index", $data);
    }

    public function create(): string
    {
        return view("_pages/dashboard/insights/create");
    }

    public function update($slug): string
    {
        $insights = model("Insights");
        $data['article'] = $insights->find($slug);
        return view("_pages/dashboard/insights/update", $data);
    }
}
