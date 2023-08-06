<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container py-2">
    <div class="card shadow-sm mb-3">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <?= view("_components/LinesImageClickToChangeField",
                        [
                            "field_group_name" => "HOME",
                            "field_id" => "HOME_BANNER_IMAGE",
                        ]
                    ) ?>
                </div>
                <div class="col-6">
                    <form method="post" action="<?= route_to('object.lines.update', "HOME") ?>" class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Tag",
                                        "id" => "HOME_BANNER_TAG",
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
                                        name="HOME_BANNER_HEADLINE"
                                        id="content"
                                        value="<?= $lines->findOrEmptyString("HOME_BANNER_HEADLINE") ?>">

                                <div class="row">
                                    <div class="document-editor__toolbar border-0"></div>
                                </div>
                                <div class="editor border shadow-none bg-white">
                                    <?= $lines->findOrEmptyString("HOME_BANNER_HEADLINE") ?>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Button Text",
                                            "id" => "HOME_BANNER_BUTTON_TEXT",
                                        ],
                                        [
                                            "type" => "HorizontalSeparator",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Button URL",
                                            "id" => "HOME_BANNER_BUTTON_URL",
                                        ],
                                    ]
                                ]
                            ) ?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-outline-primary">
                            Save Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row gx-3">
        <div class="col-5">
            <div class="card shadow-sm mb-3">
                <div class="card-header">Sections</div>
                <div class="card-body">
                    <form method="post" action="<?= route_to('object.lines.update', "HOME") ?>" class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Judul Bagian 'Acara'",
                                        "id" => "HOME_ACARA_TITLE",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Judul Bagian 'Artikel'",
                                        "id" => "HOME_ARTIKEL_TITLE",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Judul Bagian 'Mitra'",
                                        "id" => "HOME_MITRA_TITLE",
                                    ],
                                ]
                            ]
                        ) ?>
                        <button type="submit" class="btn btn-sm btn-outline-primary">
                            Save Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <form method="post" action="<?= route_to('object.lines.update', "HOME") ?>" class="w-100 mb-3">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Teks ajakan donasi",
                                        "id" => "HOME_DONATE_FULLTEXT",
                                    ],
                                    [
                                        "type" => "LinesField",
                                        "label" => "Teks pada tombol donasi",
                                        "id" => "HOME_DONATE_BUTTON_TEXT",
                                    ],
                                ]
                            ]
                        ) ?>

                        <button type="submit" class="btn btn-sm btn-outline-primary">
                            Save Changes
                        </button>
                    </form>
                </div>
            </div>
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <label for="">Gambar di belakang kotak Donasi</label>
                    <?= view("_components/LinesImageClickToChangeField",
                        [
                            "field_group_name" => "HOME",
                            "field_id" => "HOME_DONATE_IMAGE",
                        ]
                    ) ?>
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
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
            document.querySelector('.ck-toolbar').classList.add('ck-reset_all');
        })

</script>
<?= $this->endSection(); ?>

