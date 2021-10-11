<?php

namespace App\Controllers;

use Config\Services;

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
            return redirect()->route("dashboard.landing.index");
        }
        return redirect()->to(base_url());
    }

    public function do_logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }

    public function sendMail()
    {
        $firstname = $this->request->getPost("firstname");
        $lastname = $this->request->getPost("lastname");
        $jobtitle = $this->request->getPost("jobtitle");
        $company = $this->request->getPost("company");
        $email = $this->request->getPost("email");
        $phone = $this->request->getPost("phone");
        $message = $this->request->getPost("message");

        $mailBody = "
            Name: $firstname $lastname <br />
            Job Title: $jobtitle <br />
            Company: $company <br />
            Email: $email <br />
            Phone: $phone <br />
            <hr />
            $message
            <br />
            (email sent by do-not-reply@automail.altha.co.id)
        ";

        $email = Services::email();

        $email->setTo('info@altha.co.id');

        $email->setSubject("[Contact Request] $firstname $lastname - $jobtitle at $company");
        $email->setMessage($mailBody);
        $email->send();

        // do send mail
        return redirect()->to("https://www.altha.co.id/contact-complete");
    }
}
