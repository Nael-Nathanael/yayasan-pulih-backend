<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class Faq extends BaseController
{
    public function create(): RedirectResponse
    {
        $faq_model = model("Faq");

        $faq_model->insert(
            [
                "q" => $this->request->getPost("q"),
                "a" => $this->request->getPost("a"),
            ]
        );

        return redirect()->to(previous_url());
    }

    public function update($id): RedirectResponse
    {

        $faq_model = model("Faq");

        $faq_model->save(
            [
                "id" => $id,
                "q" => $this->request->getPost("q"),
                "a" => $this->request->getPost("a"),
            ]
        );

        return redirect()->to(previous_url());
    }


    public function delete($id): RedirectResponse
    {
        $faq_model = model("FaqModel");

        $faq_model->delete($id);

        return redirect()->to(previous_url());
    }

    public function get_all(): ResponseInterface
    {
        $faq_model = model("FaqModel");
        
        return $this->response->setJSON($faq_model->findAll());
    }
}
