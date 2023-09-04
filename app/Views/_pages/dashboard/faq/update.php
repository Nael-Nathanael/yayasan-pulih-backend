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

<?= $this->section("content"); ?>
<div class="container-fluid">
    <section>
        <form action="<?= route_to("object.faq.update", $faq->id) ?>" method="post" id="articleForm"
              enctype="multipart/form-data">
            <input type="hidden" name="a" id="content">

            <div style="min-height: 600px">
                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="form-floating mb-3 me-3">
                            <input type="number" class="form-control material-form-control" id="number" name="number"
                                   placeholder="1. "
                                   required value="<?= $faq->number ?>">
                            <label for="number">Nomor</label>
                        </div>

                        <div class="form-floating mb-3 me-3 w-100">
                            <input type="text" class="form-control material-form-control" id="q" name="q"
                                   placeholder="Pertanyaan"
                                   value="<?= $faq->q ?>"
                                   required>
                            <label for="q">Pertanyaan</label>
                        </div>

                        <button type="submit" class="btn btn-outline-primary">
                            Publish
                        </button>
                    </div>
                    <div class="row mb-3">
                        <div class="document-editor__toolbar border-0"></div>
                    </div>
                    <div class="bg-light py-4">
                        <div class="editor border shadow-none bg-white w-100" style="min-height: 300px">
                            <?= str_replace("{backend_url}", base_url(), $faq->a) ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
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
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
            document.querySelector('.ck-toolbar').classList.add('ck-reset_all');

            document.getElementById("content").value = editor.getData();
        })

</script>
<?= $this->endSection(); ?>
