<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get("logged_in")) {
            return redirect()->route("dashboard.landing");
        }
        return view('_pages/login');
    }

    public function do_auth()
    {
        if ($this->request->getPost("password") == "admin") {
            session()->set("logged_in", true);
            return redirect()->route("dashboard.landing");
        }
    }

    public function do_logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
