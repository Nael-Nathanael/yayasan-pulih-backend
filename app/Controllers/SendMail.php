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
        $email->setTo('contact@altha.co.id');

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
        $email->setMessage("
            Terima kasih telah menghubungi kami!
            <br/>
            Kami sangat menghargai anda telah menghubungi Altha Consulting. Salah satu staf kami akan menghubungi anda secepatnya. Selamat beraktifitas!
            <br/>
            <br/>
            Thank you for getting in touch! 
            <br/>
            We appreciate you contacting Altha Consulting. One of our colleagues will get back in touch with you soon! Have a great day!
        ");
        $email->setReplyTo("contact@altha.co.id", "Altha Automated Email");

        $email->send();

        // do send mail
        return $this->response->setJSON(["message" => "success"]);
    }

    public function requestitma(): ResponseInterface
    {
        $dataEmail = $this->request->getPost("email");

        $email = Services::email();
        $email->setTo('contact@altha.co.id');

        $email->setSubject("Requested PDF About ITMA");
        $email->setMessage("
            email: $dataEmail
        ");
        $email->send();


        $email = Services::email();
        $email->setTo($dataEmail);

        $email->setSubject("More about Altha Consulting IT Maturity Assessment");
        $email->setMessage("
            Terima kasih telah menghubungi kami!
            <br/>
            Kami sangat menghargai anda telah menghubungi Altha Consulting. Salah satu staf kami akan menghubungi anda secepatnya. Selamat beraktifitas!
            <br/>
            <br/>
            Thank you for getting in touch! 
            <br/>
            We appreciate you contacting Altha Consulting. One of our colleagues will get back in touch with you soon! Have a great day!
        ");
        $email->setReplyTo("contact@altha.co.id", "Altha Automated Email");
        $email->attach(base_url("/attachments/ITMaturityAssessment_AlthaConsulting.pdf"));

        $email->send();

        // do send mail
        return $this->response->setJSON(["message" => "success"]);
    }

    public function sendmail_requestitmp(): ResponseInterface
    {
        $dataEmail = $this->request->getPost("email");

        $email = Services::email();
        $email->setTo('contact@altha.co.id');

        $email->setSubject("Requested PDF About ITMP");
        $email->setMessage("
            email: $dataEmail
        ");
        $email->send();


        $email = Services::email();
        $email->setTo($dataEmail);

        $email->setSubject("More about Altha Consulting IT Master Plan");
        $email->setMessage("
            Terima kasih telah menghubungi kami!
            <br/>
            Kami sangat menghargai anda telah menghubungi Altha Consulting. Salah satu staf kami akan menghubungi anda secepatnya. Selamat beraktifitas!
            <br/>
            <br/>
            Thank you for getting in touch! 
            <br/>
            We appreciate you contacting Altha Consulting. One of our colleagues will get back in touch with you soon! Have a great day!
        ");
        $email->setReplyTo("contact@altha.co.id", "Altha Automated Email");
        $email->attach(base_url("/attachments/ITMasterPlan_AlthaConsulting.pdf"));

        $email->send();

        // do send mail
        return $this->response->setJSON(["message" => "success"]);
    }
}
