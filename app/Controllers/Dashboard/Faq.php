<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Faq extends BaseController
{
    public function index(): string
    {
        return view("_pages/dashboard/faq/index");
    }

    public function create(): string
    {
        return view("_pages/dashboard/faq/create");
    }

    public function update($slug): string
    {
        $faq = model("FaqModel");
        $data['faq'] = $faq->find($slug);
        return view("_pages/dashboard/faq/update", $data);
    }
}
