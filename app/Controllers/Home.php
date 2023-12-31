<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get("logged_in")) {
            return redirect()->route("dashboard.home.index");
        }
        return view('_pages/login');
    }

    public function do_auth()
    {
        if ($this->request->getPost("password") == "admin") {
            session()->set("logged_in", true);
            return redirect()->route("dashboard.home.index");
        }
        return redirect()->to(base_url());
    }

    public function do_change_lag()
    {
        session()->set("LANG", $this->request->getPost("lang"));
        return redirect()->back();
    }

    public function do_logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
