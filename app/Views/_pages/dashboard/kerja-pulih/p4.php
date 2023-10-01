<?= $this->extend("_layouts/base_layout"); ?>

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
                                        "id" => "KERJA_PULIH_P4_BANNER_TAG",
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
                                        name="KERJA_PULIH_P4_BANNER_TITLE"
                                        id="content"
                                        value="<?= $lines->findOrEmptyString("KERJA_PULIH_P4_BANNER_TITLE") ?>">

                                <div class="row">
                                    <div class="document-editor__toolbar border-0"></div>
                                </div>
                                <div class="editor border shadow-none bg-white">
                                    <?= $lines->findOrEmptyString("KERJA_PULIH_P4_BANNER_TITLE") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <span>Care for Caregiver</span>
                        <a href="<?= route_to("dashboard.kerja-pulih.c4c") ?>" class="btn btn-primary btn-sm">Edit
                            Halaman</a>
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
                        <a href="<?= route_to("dashboard.kerja-pulih.jt") ?>" class="btn btn-primary btn-sm">Edit
                            Halaman</a>
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
                        <a href="<?= route_to("dashboard.kerja-pulih.sot") ?>" class="btn btn-primary btn-sm">Edit
                            Halaman</a>
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
</script>
<?= $this->endSection(); ?>

