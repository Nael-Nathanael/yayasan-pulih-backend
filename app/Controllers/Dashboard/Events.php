<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Events extends BaseController
{
    public function index(): string
    {
        $events = model("EventsModel");
        $data['events'] = $events->orderBy("created_at DESC")->findAll();
        return view("_pages/dashboard/events/index", $data);
    }

    public function create(): string
    {
        return view("_pages/dashboard/events/create");
    }

    public function update($slug): string
    {
        $events = model("EventsModel");
        $data['event'] = $events->find($slug);
        return view("_pages/dashboard/events/update", $data);
    }
}
