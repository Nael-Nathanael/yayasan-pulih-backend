<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<?php $lines = model("Lines"); ?>

    <div class="container my-2">
        <div class="card shadow-sm mb-3">
            <div class="card-header">File Laporan Audit</div>
            <div class="card-body">
                <?= $lines->findOrEmptyString("LAPAUDIT_MAINFILE") ?>
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
        <div class="card shadow-sm mb-3">
            <div class="card-header">File Laporan Audit</div>
            <div class="card-body">
                <?= $lines->findOrEmptyString("LAPAUDIT_MAINFILE_2") ?>
                <form action="<?= route_to('object.lines.upload') ?>" method="post" id="lapaudit_form_2"
                      enctype="multipart/form-data">
                    <input type="hidden" name="key" value="LAPAUDIT_MAINFILE_2">
                    <input type="hidden" name="group_name" value="LAPAUDIT">
                    <input class="form-control" id="LAPAUDIT_MAINFILE_2"
                           name="LAPAUDIT_MAINFILE_2"
                           onchange="document.getElementById('lapaudit_form_2').submit()"
                           type="file">
                </form>
            </div>
        </div>
        <div class="card shadow-sm mb-3">
            <div class="card-header">File Laporan Audit</div>
            <div class="card-body">
                <?= $lines->findOrEmptyString("LAPAUDIT_MAINFILE_3") ?>
                <form action="<?= route_to('object.lines.upload') ?>" method="post" id="lapaudit_form_3"
                      enctype="multipart/form-data">
                    <input type="hidden" name="key" value="LAPAUDIT_MAINFILE_3">
                    <input type="hidden" name="group_name" value="LAPAUDIT">
                    <input class="form-control" id="LAPAUDIT_MAINFILE_3"
                           name="LAPAUDIT_MAINFILE_3"
                           onchange="document.getElementById('lapaudit_form_3').submit()"
                           type="file">
                </form>
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