<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CarouselBanner extends BaseController
{
    public function create()
    {
        // upload #img
        $path = $this->request->getFile('img');
        $path->move(UPLOAD_FOLDER_URL);

        $imgUrl = base_url("/uploads/" . $path->getName());

        $carouselBanner = model("CarouselBanner");
        $carouselBanner->save(
            [
                "headline" => $this->request->getPost("headline"),
                "description" => $this->request->getPost("description"),
                "link" => $this->request->getPost("link"),
                "imgUrl" => $imgUrl
            ]
        );

        return redirect()->route("dashboard.landing.index");
    }

    public function get(): ResponseInterface
    {
        $carouselBanner = model("CarouselBanner");
        return $this->response->setJSON($carouselBanner->findAll());
    }

    public function delete($key): \CodeIgniter\HTTP\RedirectResponse
    {
        $carouselBanner = model("CarouselBanner");
        $carouselBanner->delete($key);
        return redirect()->route("dashboard.landing.index");
    }
}
