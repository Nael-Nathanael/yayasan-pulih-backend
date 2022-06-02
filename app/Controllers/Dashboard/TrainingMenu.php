<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class TrainingMenu extends BaseController
{
    public function index(): string
    {
        $trainings = model("TrainingMenu");
        $outline = model("TrainingMenuOutline");
        $tantangan = model("TrainingMenuTantangan");
        $market = model("TrainingMenuMarket");
        $dipelajari = model("TrainingMenuDipelajari");
        $kategori = model("TrainingMenuKategori");
        $data['trainings'] = $trainings->findAll();

        foreach ($data['trainings'] as $training) {
            $training->outline = $outline->where("trainingmenu_guid", $training->guid)->findAll();
            $training->tantangan = $tantangan->where("trainingmenu_guid", $training->guid)->findAll();
            $training->market = $market->where("trainingmenu_guid", $training->guid)->findAll();
            $training->dipelajari = $dipelajari->where("trainingmenu_guid", $training->guid)->findAll();
        }

        $data['kategori'] = $kategori->findAll();
        foreach ($data['kategori'] as $kate) {
            $kate->deletable = $trainings->where("kategori", $kate->name)->countAllResults() == 0;
        }

        return view("_pages/dashboard/trainingMenu/index", $data);
    }

    public function delete($pk): RedirectResponse
    {
        $trainingModel = model("TrainingMenu");
        $trainingModel->delete($pk);
        return redirect()->route("dashboard.trainingmenu.index");
    }

    public function deletekategori($pk): RedirectResponse
    {
        $kategoriModel = model("TrainingMenuKategori");
        $kategoriModel->delete($pk);
        return redirect()->route("dashboard.trainingmenu.index");
    }
}
