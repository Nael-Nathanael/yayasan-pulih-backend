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
                    <div class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Section",
                                        "id" => "KERJA_PULIH_PDN_BANNER_TAG",
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
                                    name="KERJA_PULIH_PDN_BANNER_HEADLINE"
                                    id="content"
                                    value="<?= $lines->findOrEmptyString("KERJA_PULIH_PDN_BANNER_HEADLINE") ?>">

                                <div class="row">
                                    <div class="document-editor__toolbar border-0"></div>
                                </div>
                                <div class="editor border shadow-none bg-white">
                                    <?= $lines->findOrEmptyString("KERJA_PULIH_PDN_BANNER_HEADLINE") ?>
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
                                "type" => "LinesTextArea",
                                "label" => "Teks Antara",
                                "id" => "KERJA_PULIH_PDF_TEXT_ANTARA",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Label Daftar Modul",
                                "id" => "KERJA_PULIH_PDF_LABEL_MODUL_LIST",
                            ],
                            [
                                "type" => "LinesTextArea",
                                "label" => "Daftar Modul",
                                "id" => "KERJA_PULIH_PDF_MODULES",
                            ],
                        ]
                    ]
                ) ?>
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
</script>
<?= $this->endSection(); ?>

