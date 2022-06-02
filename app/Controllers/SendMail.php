<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class SendMail extends BaseController
{
    public function do_send(): ResponseInterface
    {
        $email = Services::email();
        $email->setTo('info@altha.co.id');

        $email->setSubject($this->request->getPost("subject"));
        $email->setMessage($this->request->getPost("body"));
        $email->send();

        // do send mail
        return $this->response->setJSON(["message" => "success"]);
    }

    public function do_send_servicerequest(): ResponseInterface
    {
        $dataEmail = $this->request->getPost("email");
        $dataName = $this->request->getPost("name");
        $dataPhone = $this->request->getPost("phone");
        $dataSource = $this->request->getPost("source");

        $email = Services::email();
        $email->setTo('nael.nathanael71@altha.co.id');

        $email->setSubject("More Altha Services Information Request");
        $email->setMessage("
            name: $dataName <br/>
            email: $dataEmail <br/>
            phone: $dataPhone <br/>
            source: $dataSource
        ");
        $email->send();


        $email = Services::email();
        $email->setTo($dataEmail);

        $email->setSubject("Thank you for Contacting us");
        $email->setMessage("We will get back to you as soon as possible");
        $email->send();

        // do send mail
        return $this->response->setJSON(["message" => "success"]);
    }
}
