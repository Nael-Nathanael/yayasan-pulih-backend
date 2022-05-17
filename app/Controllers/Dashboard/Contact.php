<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use Config\Services;

class Contact extends BaseController
{
    public function index(): string
    {
        $contactModel = model("Contact");

        return view("_pages/dashboard/contact/index", [
            "data" => $contactModel->findAll()
        ]);
    }

    public function approve($id): RedirectResponse
    {
        $contactModel = model("Contact");

        $instance = $contactModel->find($id);

        $email = Services::email();

//        $email->setTo('info@altha.co.id');
        $email->setTo('nathanael@altha.co.id');

        $email->setSubject($instance->subject);
        $email->setMessage($instance->content);
        $email->send();

        $contactModel->delete($id);

        return redirect()->back();
    }

    public function delete($id): RedirectResponse
    {
        $contactModel = model("Contact");
        $contactModel->delete($id);
        
        return redirect()->back();
    }
}
