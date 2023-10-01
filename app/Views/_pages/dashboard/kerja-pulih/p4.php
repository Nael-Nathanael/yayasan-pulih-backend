<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="bg-light min-vh-100">
    <div class="container py-2">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <span>Care for Caregiver</span>
                        <a href="<?= route_to("dashboard.kerja-pulih.sot")?>" class="btn btn-primary btn-sm">Edit Halaman</a>
                    </div>
                    <div class="card-body">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Section",
                                        "id" => "KERJA_PULIH_P4_C4C_TAG",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Judul",
                                        "id" => "KERJA_PULIH_P4_C4C_TITLE",
                                    ],
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Deskripsi",
                                        "id" => "KERJA_PULIH_P4_C4C_DESCRIPTION",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <span>Jurnalisme Trauma</span>
                        <a href="<?= route_to("dashboard.kerja-pulih.jt")?>" class="btn btn-primary btn-sm">Edit Halaman</a>
                    </div>
                    <div class="card-body">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Section",
                                        "id" => "KERJA_PULIH_P4_JT_TAG",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Judul",
                                        "id" => "KERJA_PULIH_P4_JT_TITLE",
                                    ],
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Deskripsi",
                                        "id" => "KERJA_PULIH_P4_JT_DESCRIPTION",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <span>Survivor of Torture</span>
                        <a href="<?= route_to("dashboard.kerja-pulih.sot")?>" class="btn btn-primary btn-sm">Edit Halaman</a>
                    </div>
                    <div class="card-body">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Section",
                                        "id" => "KERJA_PULIH_P4_SOT_TAG",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Judul",
                                        "id" => "KERJA_PULIH_P4_SOT_TITLE",
                                    ],
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Deskripsi",
                                        "id" => "KERJA_PULIH_P4_SOT_DESCRIPTION",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
