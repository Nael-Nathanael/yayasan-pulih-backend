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
                                            "id" => "KERJA_PULIH_C4C_BANNER_TAG",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Judul",
                                            "id" => "KERJA_PULIH_C4C_BANNER_TITLE",
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
                            "type" => "LinesTextArea",
                            "label" => "Intro Text",
                            "id" => "KERJA_PULIH_C4C_INTRO_TEXT",
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
                            "label" => "Section Konten",
                            "id" => "KERJA_PULIH_C4C_CONTENT_TAG",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Judul Konten",
                            "id" => "KERJA_PULIH_C4C_CONTENT_TITLE",
                        ],
                        [
                            "type" => "LinesImageClickToChangeField",
                            "label" => "Gambar Kontent",
                            "id" => "KERJA_PULIH_C4C_CONTENT_IMAGE",
                            "group_name" => "KERJA_PULIH_C4C",
                        ],
                        [
                            "type" => "CKEDITOR",
                            "label" => "Isi Konten",
                            "id" => "KERJA_PULIH_C4C_CONTENT_DESCRIPTION",
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
                            "label" => "Section Konten Tambahan",
                            "id" => "KERJA_PULIH_C4C_MORE_TAG",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Judul Konten Tambahan",
                            "id" => "KERJA_PULIH_C4C_MORE_TITLE",
                        ],
                        [
                            "type" => "LinesImageClickToChangeField",
                            "label" => "Gambar Konten Tambahan",
                            "id" => "KERJA_PULIH_C4C_MORE_IMAGE",
                            "group_name" => "KERJA_PULIH_C4C",
                        ],
                        [
                            "type" => "CKEDITOR",
                            "label" => "Isi Konten Tambahan",
                            "id" => "KERJA_PULIH_C4C_MORE_DESCRIPTION",
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
                            "label" => "Judul Fokus",
                            "id" => "KERJA_PULIH_C4C_FOCUS_TITLE",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Subjudul Fokus",
                            "id" => "KERJA_PULIH_C4C_FOCUS_SUBTITLE",
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
                            "id" => "KERJA_PULIH_C4C_PROGRAMS_TAG",
                        ],
                        [
                            "type" => "LinesField",
                            "label" => "Subjudul Bagian Program",
                            "id" => "KERJA_PULIH_C4C_PROGRAMS_TITLE",
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
                                        "group_name" => "KERJA_PULIH_C4C",
                                        "id" => "KERJA_PULIH_C4C_PROGRAM_{$i}_IMAGE",
                                    ],
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Text Program",
                                        "id" => "KERJA_PULIH_C4C_PROGRAM_{$i}_SUBTITLE",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                <?php endfor; ?>
            </div>

            <hr>

            <?= view("_components/LinesFieldGroup",
                [
                    "fields" => [
                        [
                            "type" => "LinesField",
                            "label" => "Teks Interim",
                            "id" => "KERJA_PULIH_C4C_INTERM",
                        ],
                        [
                            "type" => "CKEDITOR",
                            "label" => "Konten Halaman Tambahan",
                            "id" => "KERJA_PULIH_C4C_ADDITIONAL",
                        ],
                    ]
                ]
            ) ?>


        </div>
    </div>
<?= $this->endSection(); ?>