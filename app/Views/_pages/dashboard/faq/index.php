<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container my-2">
        <div class="card shadow-sm mb-3">
            <div class="card-header">F.A.Q.</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <?= summon_image_field("FAQ", "FAQ_BANNER_IMAGE") ?>
                    </div>
                    <div class="col-6">
                        <form method="post" action="<?= route_to('object.lines.update', "FAQ") ?>"
                              class="w-100">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Tag",
                                            "id" => "FAQ_BANNER_TAG",
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
        </div>

        <div class="card shadow-sm mb-3">
            <div class="card-header">List of FAQ</div>
            <?php $faq_model = model("FaqModel") ?>
            <?php $faqs = $faq_model->findAll() ?>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="1">No</th>
                        <th>Pertanyaan</th>
                        <th>Jawaban</th>
                        <th width="1"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($faqs as $key => $value): ?>
                        <tr>
                            <td><?= $key + 1 ?>.</td>
                            <td><?= $value->q ?></td>
                            <td><?= $value->a ?></td>
                            <td>Edit</td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>


<?= $this->section("javascript") ?>
    <script>
        function initEditor(editor_id, content_id, toolbar_id) {
            DecoupledDocumentEditor
                .create(document.querySelector('#' + editor_id), {
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
                        document.getElementById(content_id).value = editor.getData();
                    });

                    // Set a custom container for the toolbar.
                    document.getElementById("#toolbar_" + toolbar_id).appendChild(editor.ui.view.toolbar.element);
                })
        }

        $(document).ready(function () {
            document.querySelector('.ck-toolbar').classList.add('ck-reset_all');
        })
    </script>
<?= $this->endSection(); ?>