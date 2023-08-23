<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="bg-light">
    <div class="container py-2">
        <section class="my-5">
            <div class="card shadow-sm">
                <div class="card-header">
                    Header
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= summon_image_field("TENTANG", "TENTANG_BANNER_IMAGE") ?>
                        </div>
                        <div class="col-6">
                            <div class="w-100">
                                <?= view("_components/LinesFieldGroup",
                                    [
                                        "fields" => [
                                            [
                                                "type" => "LinesField",
                                                "label" => "Section",
                                                "id" => "TENTANG_BANNER_TAG",
                                            ],
                                        ]
                                    ]
                                ) ?>

                                <div class="mb-3">
                                    <label>
                                        Headline
                                    </label>
                                    <div class="border border-1">
                                        <?php $lines = model("Lines"); ?>
                                        <input
                                                type="hidden"
                                                name="TENTANG_BANNER_HEADLINE"
                                                id="content"
                                                value="<?= $lines->findOrEmptyString("TENTANG_BANNER_HEADLINE") ?>">

                                        <div class="row">
                                            <div class="document-editor__toolbar border-0"></div>
                                        </div>
                                        <div class="editor border shadow-none bg-white">
                                            <?= $lines->findOrEmptyString("TENTANG_BANNER_HEADLINE") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="my-5 mx-5">

        <section class="my-5">
            <div class="w-100">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Section",
                                "id" => "TENTANG_HISTORY_TAG",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Judul",
                                "id" => "TENTANG_HISTORY_TITLE",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="my-5">
                <?= summon_image_field("TENTANG", "TENTANG_HISTORY_COVER") ?>
            </div>

            <div class="my-5">
                <div class="w-100">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesTextArea",
                                    "label" => "Konten",
                                    "id" => "TENTANG_HISTORY_CONTENT",
                                ],
                            ]
                        ]
                    ) ?>
                </div>
            </div>

            <div class="row mt-3 g-2">
                <div class="col-8">
                    <div class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Konten di samping ilustrasi",
                                        "id" => "TENTANG_HISTORY_MORE_LEFT",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
                <div class="col-4">
                    <label for="">Gambar Kanan</label>
                    <?= summon_image_field("TENTANG", "TENTANG_HISTORY_MORE_RIGHT") ?>
                </div>
            </div>
        </section>

        <hr class="my-5 mx-5">

        <section class="my-5">
            <div class="mb-3">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Section",
                                "id" => "TENTANG_VSMS_TAG",
                            ],
                        ]
                    ]
                ) ?>
            </div>


            <div class="mb-3">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Judul Visi",
                                "id" => "TENTANG_VSMS_TITLE_VS",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div style="max-width: 300px" class="mb-3 mx-auto card border-0 shadow-sm p-3">
                <?= summon_image_field("TENTANG", "TENTANG_VSMS_IMG_VS") ?>
            </div>

            <div class="mb-3">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Konten Visi",
                                "id" => "TENTANG_VSMS_CONTENT_VS",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="mb-3">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Judul Misi",
                                "id" => "TENTANG_VSMS_TITLE_MS",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="row g-3 justify-content-center mt-3">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="col-4">
                        <div class="card p-3 shadow-sm border-0 mx-auto mb-3" style="max-width: 300px">
                            <?= summon_image_field("TENTANG", "TENTANG_VSMS_IMG_MS_$i") ?>
                        </div>
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Judul Misi $i",
                                        "id" => "TENTANG_VSMS_CONTENT_MS_$i",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <hr class="my-5 mx-5">

        <section class="my-5">
            <div class="w-100 mb-2">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Section",
                                "id" => "TENTANG_OFFICES_TAG",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Judul",
                                "id" => "TENTANG_OFFICES_TITLE",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="row">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="col-4">
                        <div class="card card-body shadow-sm">
                            <?= summon_image_field("TENTANG", "TENTANG_OFFICES_IMG_$i") ?>

                            <hr class="my-3">

                            <div class="w-100">
                                <?= view("_components/LinesFieldGroup",
                                    [
                                        "fields" => [
                                            [
                                                "type" => "LinesField",
                                                "label" => "Office Title",
                                                "id" => "TENTANG_OFFICES_TITLE_$i",
                                            ],
                                            [
                                                "type" => "LinesField",
                                                "label" => "coordinated by...",
                                                "id" => "TENTANG_OFFICES_COORDINATOR_$i",
                                            ],
                                            [
                                                "type" => "LinesField",
                                                "label" => "Office Location",
                                                "id" => "TENTANG_OFFICES_NAME_$i",
                                            ],
                                            [
                                                "type" => "LinesField",
                                                "label" => "Office URL",
                                                "id" => "TENTANG_OFFICES_URL_$i",
                                            ],
                                            [
                                                "type" => "LinesTextArea",
                                                "label" => "Content",
                                                "id" => "TENTANG_OFFICES_CONTENT_$i",
                                            ],
                                        ]
                                    ]
                                ) ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <hr class="my-5 mx-5">

        <section class="my-5">
            <div class="w-100 mb-2">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Section",
                                "id" => "TENTANG_VALUE_TAG",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Judul",
                                "id" => "TENTANG_VALUE_TITLE",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="row g-4">
                <div class="col-6">
                    <?= summon_image_field("TENTANG", "TENTANG_VALUE_IMG_LEFT") ?>
                </div>
                <div class="col-6">
                    <?= summon_image_field("TENTANG", "TENTANG_VALUE_IMG_RIGHT") ?>
                </div>
                <div class="col-6">
                    <div
                            class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Konten Kiri",
                                        "id" => "TENTANG_VALUE_CONTENT_LEFT",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Konten Kanan",
                                        "id" => "TENTANG_VALUE_CONTENT_RIGHT",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
                <div class="col-12">
                    <?= summon_image_field("TENTANG", "TENTANG_VALUE_CARD_BG") ?>

                    <hr class="my-3"/>

                    <div class="w-100">

                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Headline Kartu",
                                        "id" => "TENTANG_VALUE_CARD_HEADLINE",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Content Kartu",
                                        "id" => "TENTANG_VALUE_CARD_CONTENT",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Footer Kartu",
                                        "id" => "TENTANG_VALUE_CARD_FOOTER",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                </div>
            </div>

        </section>

        <hr class="my-5 mx-5">

        <section class="my-5">
            <div class="card shadow-sm">
                <div class="card-header">Struktur Organisasi</div>
                <div class="card-body">
                    <?= summon_image_field("TENTANG", "TENTANG_STRUKTUR_ORGANISASI") ?>
                </div>
            </div>
        </section>

        <hr class="my-5 mx-5">

        <section class="my-5">
            <div class="w-100">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Section",
                                "id" => "TENTANG_TEAM_TAG",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Judul",
                                "id" => "TENTANG_TEAM_TITLE",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="row gx-3 gy-2 justify-content-between">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class="col-4">
                        <div class="card card-body shadow-sm">
                            <?= summon_image_field("TENTANG", "TENTANG_TEAM_IMG_$i") ?>
                            <hr class="my-3">

                            <div class="w-100">

                                <?= view("_components/LinesFieldGroup",
                                    [
                                        "fields" => [
                                            [
                                                "type" => "LinesField",
                                                "label" => "Nama Anggota",
                                                "id" => "TENTANG_TEAM_NAME_$i",
                                            ],
                                            [
                                                "type" => "LinesField",
                                                "label" => "Posisi Anggota",
                                                "id" => "TENTANG_TEAM_POSITION_$i",
                                            ],
                                        ]
                                    ]
                                ) ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection(); ?>


<?= $this->section("javascript") ?>
<script>
    DecoupledDocumentEditor
        .create(document.querySelector('.editor'), {
            toolbar: {
                items: [
                    'bold',
                    'italic',
                    'underline',
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            },
            licenseKey: '',
        })
        .then(editor => {
            window.editor = editor;

            editor.model.document.on('change', () => {
                document.getElementById("content").value = editor.getData();
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
            document.querySelector('.ck-toolbar').classList.add('ck-reset_all');
        })

</script>
<?= $this->endSection(); ?>

