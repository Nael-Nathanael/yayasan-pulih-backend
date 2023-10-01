<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container my-2">

        <section>
            <div class="card shadow-sm">
                <div class="card-header">
                    Header
                </div>
                <div class="card-body">
                    <div class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Section",
                                        "id" => "KERJA_PULIH_DONATE_BANNER_TAG",
                                    ],
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Text",
                                        "id" => "KERJA_PULIH_DONATE_BANNER_TEXT",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <?= view("_components/LinesFieldGroup",
            [
                "fields" => [
                    [
                        "type" => "LinesField",
                        "label" => "Judul Pengantar",
                        "id" => "KERJA_PULIH_DONATE_INTRO_TITLE",
                    ],
                    [
                        "type" => "LinesTextArea",
                        "label" => "Konten Pengantar",
                        "id" => "KERJA_PULIH_DONATE_INTRO_DESCRIPTION",
                    ],
                    [
                        "type" => "LinesField",
                        "label" => "Judul Cara Berdonasi",
                        "id" => "KERJA_PULIH_DONATE_HOWTO_TITLE",
                    ],
                    [
                        "type" => "CKEDITOR",
                        "label" => "Cara Berdonasi",
                        "id" => "KERJA_PULIH_DONATE_HOWTO_CONTENT",
                    ],
                ]
            ]
        ) ?>
    </div>
<?= $this->endSection(); ?>