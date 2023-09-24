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
                            <?= summon_image_field("KERJA_PULIH_LKP", "KERJA_PULIH_LKP_BANNER_IMAGE") ?>
                        </div>
                        <div class="col-6">
                            <div class="w-100">
                                <?= view("_components/LinesFieldGroup",
                                    [
                                        "fields" => [
                                            [
                                                "type" => "LinesField",
                                                "label" => "Section",
                                                "id" => "KERJA_PULIH_LKP_BANNER_TAG",
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
                                                name="KERJA_PULIH_LKP_BANNER_HEADLINE"
                                                id="content"
                                                value="<?= $lines->findOrEmptyString("KERJA_PULIH_LKP_BANNER_HEADLINE") ?>">

                                        <div class="row">
                                            <div class="document-editor__toolbar border-0"></div>
                                        </div>
                                        <div class="editor border shadow-none bg-white">
                                            <?= $lines->findOrEmptyString("KERJA_PULIH_LKP_BANNER_HEADLINE") ?>
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
                                "id" => "KERJA_PULIH_LKP_LAYANAN_TAG",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Judul",
                                "id" => "KERJA_PULIH_LKP_LAYANAN_TITLE",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="my-5">
                <?= summon_image_field("KERJA_PULIH_LKP", "KERJA_PULIH_LKP_LAYANAN_COVER") ?>
            </div>

            <div class="my-5">
                <div class="w-100">
                    <?php $lines = model("Lines"); ?>
                    <input
                            type="hidden"
                            name="KERJA_PULIH_LKP_LAYANAN_CONTENT"
                            id="content_2"
                            value="<?= $lines->findOrEmptyString("KERJA_PULIH_LKP_LAYANAN_CONTENT") ?>">

                    <div class="row">
                        <div class="document-editor__toolbar_2 border-0"></div>
                    </div>
                    <div class="editor_2 border shadow-none bg-white" style="min-height: 500px">
                        <?= $lines->findOrEmptyString("KERJA_PULIH_LKP_LAYANAN_CONTENT") ?>
                    </div>
                </div>
            </div>

            <hr class="my-5 mx-5">

            <div class="w-100">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Section",
                                "id" => "KERJA_PULIH_LKP_ALUR_TAG",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Judul",
                                "id" => "KERJA_PULIH_LKP_ALUR_TITLE",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="row">
                <?php for ($i = 1; $i < 4; $i++): ?>
                    <div class="col-4">
                        <?= summon_image_field("KERJA_PULIH_LKP", "KERJA_PULIH_LKP_ALUR_{$i}_COVER") ?>

                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Section",
                                        "id" => "KERJA_PULIH_LKP_ALUR_{$i}_TITLE",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Judul",
                                        "id" => "KERJA_PULIH_LKP_ALUR_{$i}_DESCRIPTION",
                                    ],
                                ]
                            ]
                        ) ?>
                    </div>
                <?php endfor ?>
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <?= summon_image_field("KERJA_PULIH_LKP", "KERJA_PULIH_LKP_PRIVATE_COVER") ?>

                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Section",
                                    "id" => "KERJA_PULIH_LKP_PRIVATE_TITLE",
                                ],
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul",
                                    "id" => "KERJA_PULIH_LKP_PRIVATE_DESCRIPTION",
                                ],
                            ]
                        ]
                    ) ?>
                </div>
                <div class="col-6">
                    <?= summon_image_field("KERJA_PULIH_LKP", "KERJA_PULIH_LKP_GROUP_COVER") ?>

                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Section",
                                    "id" => "KERJA_PULIH_LKP_GROUP_TITLE",
                                ],
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul",
                                    "id" => "KERJA_PULIH_LKP_GROUP_DESCRIPTION",
                                ],
                            ]
                        ]
                    ) ?>
                </div>
            </div>

            <div class="my-5">
                <div class="w-100">
                    <input
                            type="hidden"
                            name="KERJA_PULIH_LKP_ADDITIONAL"
                            id="content_3"
                            value="<?= $lines->findOrEmptyString("KERJA_PULIH_LKP_ADDITIONAL") ?>">

                    <div class="row">
                        <div class="document-editor__toolbar_3 border-0"></div>
                    </div>
                    <div class="editor_3 border shadow-none bg-white" style="min-height: 500px">
                        <?= $lines->findOrEmptyString("KERJA_PULIH_LKP_ADDITIONAL") ?>
                    </div>
                </div>
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
                triggerSave(document.getElementById("content"))
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
            document.querySelector('.ck-toolbar').classList.add('ck-reset_all');
        })

    DecoupledDocumentEditor
        .create(document.querySelector('.editor_2'), {
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
                document.getElementById("content_2").value = editor.getData();
                triggerSave(document.getElementById("content_2"))
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar_2').appendChild(editor.ui.view.toolbar.element);
        })

    DecoupledDocumentEditor
        .create(document.querySelector('.editor_3'), {
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
                document.getElementById("content_3").value = editor.getData();
                triggerSave(document.getElementById("content_3"))
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar_3').appendChild(editor.ui.view.toolbar.element);
        })
</script>
<?= $this->endSection(); ?>

