<?php

namespace App\Controllers;

use Config\Services;

class SendMail extends BaseController
{
    public function do_send()
    {
        $email = Services::email();
        $email->setTo('info@altha.co.id');

        $email->setSubject($this->request->getPost("subject"));
        $email->setMessage($this->request->getPost("body"));
        $email->send();

        // do send mail
        return $this->response->setJSON(["message" => "success"]);
    }
}
