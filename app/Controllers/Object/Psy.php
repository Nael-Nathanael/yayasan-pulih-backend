<?php

namespace App\Controllers\Object;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class Psy extends BaseController
{
    public function create(): RedirectResponse
    {
        // Psikolog Data
        $model = model("PsyModel");

        $psyModelData = [
            'photo' => '/img/BannerBG_LandingPage.jpg',
            'name' => $this->request->getPost('name'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'domisili' => $this->request->getPost('domisili'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),

            'CV_file' => $this->request->getPost('CV_file'),
            'ijazah_transcript_file' => $this->request->getPost('ijazah_transcript_file'),
            'motivational_letter_file' => $this->request->getPost('motivational_letter_file'),

            'SIPP' => $this->request->getPost('SIPP'),
            'SIPP_year' => $this->request->getPost('SIPP_year'),
            'SIPP_year_end' => $this->request->getPost('SIPP_year_end'),
            'SIPP_status' => $this->request->getPost('SIPP_status'),
            'SIPP_file' => $this->request->getPost('SIPP_file'),

            'STR' => $this->request->getPost('STR'),
            'STR_year' => $this->request->getPost('STR_year'),
            'STR_year_end' => $this->request->getPost('STR_year_end'),
            'STR_status' => $this->request->getPost('STR_status'),
            'STR_file' => $this->request->getPost('STR_file'),

            'lang_fluency_english' => $this->request->getPost('lang_fluency_english'),
            'lang_fluency_indonesia' => $this->request->getPost('lang_fluency_indonesia'),
        ];

        $slug = url_title($this->request->getPost("name"));
        $finalSlug = $slug;
        $counter = 1;
        while ($model->find($finalSlug)) {
            $finalSlug = $slug . "-" . $counter++;
        }
        $slug = $finalSlug;
        $psyModelData["slug"] = $finalSlug;

        // upload documents
        $docs = [
            'photo',
            'CV_file',
            'ijazah_transcript_file',
            'motivational_letter_file',
            'SIPP_file',
            'STR_file',
        ];
        foreach ($docs as $datum) {
            if ($_FILES[$datum]["name"]) {
                $path = $this->request->getFile($datum);
                $path->move(UPLOAD_FOLDER_URL);
                $psyModelData[$datum] = base_url("/uploads/" . $path->getName());
            }
        }
        $model->insert($psyModelData);

        $model = model("PsyPendidikanModel");
        if ($this->request->getPost("edu_pendidikan")) {

            for ($i = 0; $i < count($this->request->getPost("edu_pendidikan")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "pendidikan" => $this->request->getPost("edu_pendidikan")[$i],
                        "universitas" => $this->request->getPost("edu_universitas")[$i],
                        "bidang_peminatan" => $this->request->getPost("edu_bidang_peminatan")[$i],
                        "tahun_lulus" => $this->request->getPost("edu_tahun_lulus")[$i],
                        "ipk" => $this->request->getPost("edu_ipk")[$i],
                    ]
                );
            }
        }

        if ($this->request->getPost("cert_nama_sertifikasi")) {

            $model = model("PsyCertificationModel");
            for ($i = 0; $i < count($this->request->getPost("cert_nama_sertifikasi")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "nama_sertifikasi" => $this->request->getPost("cert_nama_sertifikasi")[$i],
                        "issuer" => $this->request->getPost("cert_issuer")[$i],
                        "tahun" => $this->request->getPost("cert_tahun")[$i],
                    ]
                );
            }
        }

        if ($this->request->getPost("oth_bidang")) {

            $model = model("PsyOtherExperienceModel");
            for ($i = 0; $i < count($this->request->getPost("oth_bidang")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "bidang" => $this->request->getPost("oth_bidang")[$i],
                        "organisasi" => $this->request->getPost("oth_organisasi")[$i],
                        "tahun" => $this->request->getPost("oth_tahun")[$i],
                    ]
                );
            }
        }
        if ($this->request->getPost("work_current_position")) {

            $model = model("PsyWorkingExperienceModel");
            for ($i = 0; $i < count($this->request->getPost("work_current_position")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "current_position" => $this->request->getPost("work_current_position")[$i],
                        "bidang" => $this->request->getPost("work_bidang")[$i],
                        "perusahaan" => $this->request->getPost("work_perusahaan")[$i],
                        "tahun_bekerja_start" => $this->request->getPost("work_tahun_bekerja_start")[$i],
                        "tahun_bekerja_end" => $this->request->getPost("work_tahun_bekerja_end")[$i],
                    ]
                );
            }
        }
        if ($this->request->getPost("pub_nama")) {
            $model = model("PsyPublikasiModel");
            for ($i = 0; $i < count($this->request->getPost("pub_nama")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "nama" => $this->request->getPost("pub_nama")[$i],
                        "issuer" => $this->request->getPost("pub_issuer")[$i],
                        "tahun" => $this->request->getPost("pub_tahun")[$i],
                    ]
                );
            }
        }


        return redirect()->to(route_to("dashboard.psy.index"));
    }

    public function update($slug): RedirectResponse
    {
        // Psikolog Data
        $model = model("PsyModel");

        $psyModelData = [
            "slug" => $slug,
            'name' => $this->request->getPost('name'),
            'spesialisasi' => $this->request->getPost('spesialisasi'),
            'domisili' => $this->request->getPost('domisili'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),

            'SIPP' => $this->request->getPost('SIPP'),
            'SIPP_year' => $this->request->getPost('SIPP_year'),
            'SIPP_year_end' => $this->request->getPost('SIPP_year_end'),
            'SIPP_status' => $this->request->getPost('SIPP_status'),

            'STR' => $this->request->getPost('STR'),
            'STR_year' => $this->request->getPost('STR_year'),
            'STR_year_end' => $this->request->getPost('STR_year_end'),
            'STR_status' => $this->request->getPost('STR_status'),

            'lang_fluency_english' => $this->request->getPost('lang_fluency_english'),
            'lang_fluency_indonesia' => $this->request->getPost('lang_fluency_indonesia'),
        ];

        // upload documents
        $docs = [
            'photo',
            'CV_file',
            'ijazah_transcript_file',
            'motivational_letter_file',
            'SIPP_file',
            'STR_file',
        ];
        foreach ($docs as $datum) {
            if ($_FILES[$datum]["name"]) {
                $path = $this->request->getFile($datum);
                $path->move(UPLOAD_FOLDER_URL);
                $psyModelData[$datum] = base_url("/uploads/" . $path->getName());
            }
        }
        $model->save($psyModelData);

        $model = model("PsyPendidikanModel");
        $model->where("psy_slug", $slug)->delete();
        if ($this->request->getPost("edu_pendidikan")) {
            for ($i = 0; $i < count($this->request->getPost("edu_pendidikan")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "pendidikan" => $this->request->getPost("edu_pendidikan")[$i],
                        "universitas" => $this->request->getPost("edu_universitas")[$i],
                        "bidang_peminatan" => $this->request->getPost("edu_bidang_peminatan")[$i],
                        "tahun_lulus" => $this->request->getPost("edu_tahun_lulus")[$i],
                        "ipk" => $this->request->getPost("edu_ipk")[$i],
                    ]
                );
            }
        }

        $model = model("PsyCertificationModel");
        $model->where("psy_slug", $slug)->delete();
        if ($this->request->getPost("cert_nama_sertifikasi")) {

            for ($i = 0; $i < count($this->request->getPost("cert_nama_sertifikasi")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "nama_sertifikasi" => $this->request->getPost("cert_nama_sertifikasi")[$i],
                        "issuer" => $this->request->getPost("cert_issuer")[$i],
                        "tahun" => $this->request->getPost("cert_tahun")[$i],
                    ]
                );
            }
        }

        $model = model("PsyOtherExperienceModel");
        $model->where("psy_slug", $slug)->delete();
        if ($this->request->getPost("oth_bidang")) {

            for ($i = 0; $i < count($this->request->getPost("oth_bidang")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "bidang" => $this->request->getPost("oth_bidang")[$i],
                        "organisasi" => $this->request->getPost("oth_organisasi")[$i],
                        "tahun" => $this->request->getPost("oth_tahun")[$i],
                    ]
                );
            }
        }

        $model = model("PsyWorkingExperienceModel");
        $model->where("psy_slug", $slug)->delete();
        if ($this->request->getPost("work_current_position")) {

            for ($i = 0; $i < count($this->request->getPost("work_current_position")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "current_position" => $this->request->getPost("work_current_position")[$i],
                        "bidang" => $this->request->getPost("work_bidang")[$i],
                        "perusahaan" => $this->request->getPost("work_perusahaan")[$i],
                        "tahun_bekerja_start" => $this->request->getPost("work_tahun_bekerja_start")[$i],
                        "tahun_bekerja_end" => $this->request->getPost("work_tahun_bekerja_end")[$i],
                    ]
                );
            }
        }

        $model = model("PsyPublikasiModel");
        $model->where("psy_slug", $slug)->delete();
        if ($this->request->getPost("pub_nama")) {
            for ($i = 0; $i < count($this->request->getPost("pub_nama")); $i++) {
                $model->insert(
                    [
                        "psy_slug" => $slug,
                        "nama" => $this->request->getPost("pub_nama")[$i],
                        "issuer" => $this->request->getPost("pub_issuer")[$i],
                        "tahun" => $this->request->getPost("pub_tahun")[$i],
                    ]
                );
            }
        }

        return redirect()->to(route_to("dashboard.psy.index"));
    }


    public function delete($slug): RedirectResponse
    {
        $model = model("PsyModel");
        $model->where("slug", $slug)->delete();

        $models = [
            "PsyCertificationModel",
            "PsyOtherExperienceModel",
            "PsyPendidikanModel",
            "PsyPublikasiModel",
            "PsyWorkingExperienceModel",
        ];

        foreach ($models as $model_name) {
            $model = model($model_name);
            $model->where("psy_slug", $slug)->delete();
        }

        return redirect()->to(route_to("dashboard.psy.index"));
    }

    public function get($slug = false): ResponseInterface
    {
        $model = model("PsyModel");

        if (!$slug) {
            $instances = $model
                ->orderBy("created_at DESC")
                ->findAll();

            return $this->response->setJSON($instances);
        }
        $instance = $model->find($slug);

        $models = [
            "PsyCertificationModel" => 'certifications',
            "PsyOtherExperienceModel" => 'other_experiences',
            "PsyPendidikanModel" => 'educations',
            "PsyPublikasiModel" => 'publications',
            "PsyWorkingExperienceModel" => 'working_experiences',
        ];
        foreach ($models as $model_name => $attrName) {
            $model = model($model_name);
            $instance->$attrName = $model->where("psy_slug", $instance->slug)->findAll();
        }

        return $this->response->setJSON($instance);
    }
}
