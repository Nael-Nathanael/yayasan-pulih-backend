<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("head"); ?>
<style>
    .material-form-control {
        border-right: 0;
        border-radius: 0;
        border-left: 0;
        border-top: 0;
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-bottom: 0 !important;
    }

    .form-floating > label {
        padding-left: 0;
    }

    .material-form-control:focus {
        outline: none;
        border-color: black;
        box-shadow: none;
    }

    .ck-toolbar {
        border: none !important;
        background-color: transparent !important;
        padding: 0 !important;
    }
</style>
<?= $this->endSection(); ?>

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
                                        "id" => "KERJA_PULIH_JT_BANNER_TAG",
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
                                    name="KERJA_PULIH_JT_BANNER_TITLE"
                                    id="content"
                                    value="<?= $lines->findOrEmptyString("KERJA_PULIH_JT_BANNER_TITLE") ?>">

                                <div class="row">
                                    <div class="document-editor__toolbar border-0"></div>
                                </div>
                                <div class="editor border shadow-none bg-white">
                                    <?= $lines->findOrEmptyString("KERJA_PULIH_JT_BANNER_TITLE") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-100 card card-body">
            <div class="h-100">
                <input type="hidden" name="KERJA_PULIH_JT_CONTENT" id="content_2">

                <div class="mb-3 bg-white border">
                    <div class="document-editor__toolbar2 border-0"></div>
                </div>
                <div class="editor2 border shadow-none bg-white mb-3">
                    <?= $lines->findOrEmptyString("KERJA_PULIH_JT_CONTENT") ?>
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
        .create(document.querySelector('.editor2'), {
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
                document.getElementById("content_2").value = editor.getData();
                triggerSave(document.getElementById("content_2"))
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar2').appendChild(editor.ui.view.toolbar.element);
            document.querySelector('.ck-toolbar2').classList.add('ck-reset_all');
        })
</script>
<?= $this->endSection(); ?>

