<?= $this->extend("_layouts/base_layout"); ?>

<?php $lines = model("Lines"); ?>

<?= $this->section("content"); ?>
<div class="bg-light" style="min-height: 100vh">
    <div class="container-fluid h-100">
        <section class="h-100">
            <div class="container h-100">
                <input type="hidden" name="KERJA_PULIH_KE_CONTENT" id="content">

                <div class="">

                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Section",
                                    "id" => "KERJA_PULIH_KE_BANNER_TAG",
                                ],
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul",
                                    "id" => "KERJA_PULIH_KE_JUDUL",
                                ],
                            ]
                        ]
                    ) ?>

                </div>
                <div class="row mb-3">
                    <div class="document-editor__toolbar border-0"></div>
                </div>
                <div class="editor border shadow-none bg-white mb-3">
                    <?= $lines->findOrEmptyString("KERJA_PULIH_KE_CONTENT") ?>
                </div>

                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Teks pada tombol",
                                "id" => "KERJA_PULIH_KE_BUTTON_TEXT",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Link tombol",
                                "id" => "KERJA_PULIH_KE_BUTTON_HREF",
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
            extraPlugins: [MyCustomUploadAdapterPlugin],
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'fontSize',
                    'fontFamily',
                    '|',
                    'fontColor',
                    'fontBackgroundColor',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    '|',
                    'alignment',
                    '|',
                    'numberedList',
                    'bulletedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'todoList',
                    'link',
                    'blockQuote',
                    'imageUpload',
                    'insertTable',
                    'mediaEmbed',
                    '|',
                    'undo',
                    'redo',
                    'imageInsert'
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
