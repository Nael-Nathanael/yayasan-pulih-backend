<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container my-2">
        <div class="card shadow-sm mb-3">
            <div class="card-header">Laporan Audit</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <?= summon_image_field("LAPAUDIT", "LAPAUDIT_BANNER_IMAGE") ?>
                    </div>
                    <div class="col-6">
                        <form method="post" action="<?= route_to('object.lines.update', "LAPAUDIT") ?>"
                              class="w-100">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Tag",
                                            "id" => "LAPAUDIT_BANNER_TAG",
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
                                            name="LAPAUDIT_BANNER_HEADLINE"
                                            id="content"
                                            value="<?= $lines->findOrEmptyString("LAPAUDIT_BANNER_HEADLINE") ?>">

                                    <div class="row">
                                        <div class="document-editor__toolbar border-0"></div>
                                    </div>
                                    <div class="editor border shadow-none bg-white">
                                        <?= $lines->findOrEmptyString("LAPAUDIT_BANNER_HEADLINE") ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                Save Changes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow-sm mb-3">
            <div class="card-header">File Laporan Audit</div>
            <div class="card-body">
                <form action="<?= route_to('object.lines.upload') ?>" method="post" id="lapaudit_form"
                      enctype="multipart/form-data">
                    <input type="hidden" name="key" value="LAPAUDIT_MAINFILE">
                    <input type="hidden" name="group_name" value="LAPAUDIT">
                    <input class="form-control" id="LAPAUDIT_MAINFILE"
                           name="LAPAUDIT_MAINFILE"
                           onchange="document.getElementById('lapaudit_form').submit()"
                           type="file">
                </form>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-header">Preview Laporan Audit</div>
            <object data="<?= $lines->findOrEmptyString("LAPAUDIT_MAINFILE") ?>" type="application/pdf" width="100%" height="600px">
                <!-- Optional: Display a message if the PDF cannot be loaded -->
                <p>It appears you don't have a PDF plugin for this browser. You can <a href="<?= $lines->findOrEmptyString("LAPAUDIT_MAINFILE") ?>">download the PDF</a> instead.</p>
            </object>
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