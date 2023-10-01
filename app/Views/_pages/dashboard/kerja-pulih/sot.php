<?= $this->extend("_layouts/base_layout"); ?>

<?php $lines = model("Lines"); ?>

<?= $this->section("content"); ?>
    <div class="bg-light min-vh-100">
        <div class="container py-2">

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
                                            "id" => "KERJA_PULIH_SOT_BANNER_TAG",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Judul",
                                            "id" => "KERJA_PULIH_SOT_BANNER_TITLE",
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
                            "type" => "CKEDITOR",
                            "label" => "Intro Text",
                            "id" => "KERJA_PULIH_SOT_INTRO_RICH",
                        ],
                    ]
                ]
            ) ?>

            <hr>

            <?= view("_components/LinesFieldGroup",
                [
                    "fields" => [
                        [
                            "type" => "LinesField",
                            "label" => "Tahun Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_1_YEAR",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Judul Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_1_TITLE",
                        ],
                        [
                            "type" => "LinesImageClickToChangeField",
                            "label" => "Gambar Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_1_IMAGE",
                            "group_name" => "KERJA_PULIH_SOT",
                        ],
                        [
                            "type" => "CKEDITOR",
                            "label" => "Deskripsi Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_1_DESCRIPTION",
                        ],
                    ]
                ]
            ) ?>

            <hr>

            <?= view("_components/LinesFieldGroup",
                [
                    "fields" => [
                        [
                            "type" => "LinesField",
                            "label" => "Tahun Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_2_YEAR",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Judul Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_2_TITLE",
                        ],
                        [
                            "type" => "LinesImageClickToChangeField",
                            "label" => "Gambar Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_2_IMAGE",
                            "group_name" => "KERJA_PULIH_SOT",
                        ],
                        [
                            "type" => "CKEDITOR",
                            "label" => "Deskripsi Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_2_DESCRIPTION",
                        ],
                    ]
                ]
            ) ?>

            <hr>

            <?= view("_components/LinesFieldGroup",
                [
                    "fields" => [
                        [
                            "type" => "LinesField",
                            "label" => "Tahun Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_3_YEAR",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Judul Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_3_TITLE",
                        ],
                        [
                            "type" => "LinesImageClickToChangeField",
                            "label" => "Gambar Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_3_IMAGE",
                            "group_name" => "KERJA_PULIH_SOT",
                        ],
                        [
                            "type" => "CKEDITOR",
                            "label" => "Deskripsi Event",
                            "id" => "KERJA_PULIH_SOT_EVENT_3_DESCRIPTION",
                        ],
                    ]
                ]
            ) ?>

            <hr>

            <?= view("_components/LinesFieldGroup",
                [
                    "fields" => [
                        [
                            "type" => "LinesField",
                            "label" => "Judul Bagian Program",
                            "id" => "KERJA_PULIH_SOT_PROGRAMS_TAG",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Subjudul Bagian Program",
                            "id" => "KERJA_PULIH_SOT_PROGRAMS_TITLE",
                        ],
                    ]
                ]
            ) ?>

            <div class="row">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="col">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesImageClickToChangeField",
                                        "label" => "Gambar Program",
                                        "group_name" => "KERJA_PULIH_SOT",
                                        "id" => "KERJA_PULIH_SOT_PROGRAM_{$i}_IMAGE",
                                    ],
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Text Program",
                                        "id" => "KERJA_PULIH_SOT_PROGRAM_{$i}_SUBTITLE",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>