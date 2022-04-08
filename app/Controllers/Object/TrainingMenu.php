<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;

class TrainingMenu extends BaseController
{
    function GUID()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }

    function upload($guid): RedirectResponse
    {
        // upload #key
        if (!empty($_FILES['imgSrc']['name'])) {
            $path = $this->request->getFile('imgSrc');
            $path->move(UPLOAD_FOLDER_URL);

            // update training
            $trainings = model("TrainingMenu");
            $trainings->update($guid, ["imgSrc" => "{backend_url}/uploads/" . $path->getName()]);
        }

        return redirect()->to(previous_url());
    }

    function uploadkategori($kategori_name): RedirectResponse
    {
        // upload #key
        if (!empty($_FILES['imgSrc']['name'])) {
            $path = $this->request->getFile('imgSrc');
            $path->move(UPLOAD_FOLDER_URL);

            // update training
            $trainings = model("TrainingMenuKategori");
            $trainings->update($kategori_name, ["imgSrc" => "{backend_url}/uploads/" . $path->getName()]);
        }

        return redirect()->to(previous_url());
    }

    public function create(): RedirectResponse
    {
        $_POST['guid'] = $this->GUID();

        $trainings = model("TrainingMenu");
        $kategoriModel = model("TrainingMenuKategori");
        if (!$kategoriModel->find($_POST['kategori'])) {
            $kategoriModel->insert(["name" => $_POST['kategori']]);
        }
        $trainings->save($_POST);
        return redirect()->to(previous_url());
    }


    public function update(): RedirectResponse
    {
        $trainings = model("TrainingMenu");
        $kategoriModel = model("TrainingMenuKategori");
        if (!$kategoriModel->find($_POST['kategori'])) {
            $kategoriModel->insert(["name" => $_POST['kategori']]);
        }
        $trainings->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createkategori(): RedirectResponse
    {
        $model = model("TrainingMenuKategori");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createoutline(): RedirectResponse
    {
        $model = model("TrainingMenuOutline");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createtantangan(): RedirectResponse
    {
        $model = model("TrainingMenuTantangan");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createmarket(): RedirectResponse
    {
        $model = model("TrainingMenuMarket");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function createdipelajari(): RedirectResponse
    {
        $model = model("TrainingMenuDipelajari");
        $model->save($_POST);
        return redirect()->to(previous_url());
    }

    public function setprakerja($guid): RedirectResponse
    {
        $model = model("TrainingMenu");
        $target = $model->find($guid);
        $model->update($guid, ["isPrakerja" => !$target->isPrakerja]);
        return redirect()->to(previous_url());
    }

    public function getKategori($name = false): ResponseInterface
    {
        $kategori = model("TrainingMenuKategori");

        if (!$name) {
            $allKategori = $kategori->findAll();
            return $this->response->setJSON($allKategori);
        }

        $dipelajari = model("TrainingMenuDipelajari");
        $trainings = model("TrainingMenu");
        $allTrainings = $trainings->where("kategori", $name)->findAll();
        foreach ($allTrainings as $training) {
            $training->dipelajari = $dipelajari->where("trainingmenu_guid", $training->guid)->findAll();
        }

        return $this->response->setJSON(
            [
                "kategori" => $kategori->find($name),
                "trainings" => $allTrainings
            ]
        );
    }

    public function get($guid = false): ResponseInterface
    {
        $dipelajari = model("TrainingMenuDipelajari");
        $trainings = model("TrainingMenu");

        if (!$guid) {
            $allTrainings = $trainings->findAll();
            foreach ($allTrainings as $training) {
                $training->dipelajari = $dipelajari->where("trainingmenu_guid", $training->guid)->findAll();
            }
            return $this->response->setJSON($allTrainings);
        }

        $outline = model("TrainingMenuOutline");
        $tantangan = model("TrainingMenuTantangan");
        $market = model("TrainingMenuMarket");

        $training = $trainings->find($guid);
        $training->outline = $outline->where("trainingmenu_guid", $training->guid)->findAll();
        $training->tantangan = $tantangan->where("trainingmenu_guid", $training->guid)->findAll();
        $training->market = $market->where("trainingmenu_guid", $training->guid)->findAll();
        $training->dipelajari = $dipelajari->where("trainingmenu_guid", $training->guid)->findAll();
        return $this->response->setJSON($training);
    }

    public function search($query = '')
    {
        $trainings = model("TrainingMenu");
        $dipelajari = model("TrainingMenuDipelajari");
        $result = $trainings->like("name", $query)->get()->getResult();
        foreach ($result as $training) {
            $training->dipelajari = $dipelajari->where("trainingmenu_guid", $training->guid)->findAll();
        }

        return $this->response->setJSON($result);
    }

    public function updatekategoriname()
    {
        $old = $this->request->getPost("old");
        $new = $this->request->getPost("new");

        if ($old == $new) {
            return redirect()->to(previous_url());
        }

        $trainingmenuModel = model("TrainingMenu");
        if ($trainingmenuModel->where("kategori", $new)->countAllResults() > 0) {
            return redirect()->to(previous_url());
        }

        $kategoriModel = model("TrainingMenuKategori");
        if ($kategoriModel->where("name", $new)->countAllResults() > 0) {
            return redirect()->to(previous_url());
        }

        $kategoriModel->update($old, ['name' => $new]);

        if ($trainingmenuModel->where("kategori", $old)->countAllResults() == 0) {
            return redirect()->to(previous_url());
        }

        $trainingmenuModel
            ->set("kategori", $new)
            ->where("kategori", $old)
            ->update();

        return redirect()->to(previous_url());
    }
}
