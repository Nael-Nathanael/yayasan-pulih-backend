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
                            <?= summon_image_field("TENTANG", "TENTANG_BANNER_IMAGE") ?>
                        </div>
                        <div class="col-6">
                            <div class="w-100">
                                <?= view("_components/LinesFieldGroup",
                                    [
                                        "fields" => [
                                            [
                                                "type" => "LinesField",
                                                "label" => "Section",
                                                "id" => "TENTANG_BANNER_TAG",
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
                                                name="TENTANG_BANNER_HEADLINE"
                                                id="content"
                                                value="<?= $lines->findOrEmptyString("TENTANG_BANNER_HEADLINE") ?>">

                                        <div class="row">
                                            <div class="document-editor__toolbar border-0"></div>
                                        </div>
                                        <div class="editor border shadow-none bg-white">
                                            <?= $lines->findOrEmptyString("TENTANG_BANNER_HEADLINE") ?>
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
                                "id" => "TENTANG_HISTORY_TAG",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Judul",
                                "id" => "TENTANG_HISTORY_TITLE",
                            ],
                        ]
                    ]
                ) ?>
            </div>

            <div class="my-5">
                <?= summon_image_field("TENTANG", "TENTANG_HISTORY_COVER") ?>
            </div>

            <div class="my-5">
                <div class="w-100">
                    <div class="row">
                        <div class="col-4">
                            <?= summon_image_field("TENTANG", "TENTANG_HISTORY_MORE_RIGHT") ?>
                        </div>
                        <div class="col-8">

                            <?php $lines = model("Lines"); ?>
                            <input
                                    type="hidden"
                                    name="TENTANG_HISTORY_CONTENT"
                                    id="content_2"
                                    value="<?= $lines->findOrEmptyString("TENTANG_HISTORY_CONTENT") ?>">

                            <div class="row">
                                <div class="document-editor__toolbar_2 border-0"></div>
                            </div>
                            <div class="editor_2 border shadow-none bg-white" style="min-height: 500px">
                                <?= $lines->findOrEmptyString("TENTANG_HISTORY_CONTENT") ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5 mx-5">

            <section class="my-5">
                <div class="mb-3">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Section",
                                    "id" => "TENTANG_VSMS_TAG",
                                ],
                            ]
                        ]
                    ) ?>
                </div>


                <div class="mb-3">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul Visi",
                                    "id" => "TENTANG_VSMS_TITLE_VS",
                                ],
                            ]
                        ]
                    ) ?>
                </div>

                <div style="max-width: 300px" class="mb-3 mx-auto card border-0 shadow-sm p-3">
                    <?= summon_image_field("TENTANG", "TENTANG_VSMS_IMG_VS") ?>
                </div>

                <div class="mb-3">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Konten Visi",
                                    "id" => "TENTANG_VSMS_CONTENT_VS",
                                ],
                            ]
                        ]
                    ) ?>
                </div>

                <div class="mb-3">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul Misi",
                                    "id" => "TENTANG_VSMS_TITLE_MS",
                                ],
                            ]
                        ]
                    ) ?>
                </div>

                <div class="row g-3 justify-content-center mt-3">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <div class="col-4">
                            <div class="card p-3 shadow-sm border-0 mx-auto mb-3" style="max-width: 300px">
                                <?= summon_image_field("TENTANG", "TENTANG_VSMS_IMG_MS_$i") ?>
                            </div>
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Judul Misi $i",
                                            "id" => "TENTANG_VSMS_CONTENT_MS_$i",
                                        ],
                                    ]
                                ]
                            ) ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>

            <hr class="my-5 mx-5">

            <section class="my-5">
                <div class="w-100 mb-2">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Section",
                                    "id" => "TENTANG_OFFICES_TAG",
                                ],
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul",
                                    "id" => "TENTANG_OFFICES_TITLE",
                                ],
                            ]
                        ]
                    ) ?>
                </div>

                <div class="row">
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <div class="col-4">
                            <div class="card card-body shadow-sm">
                                <?= summon_image_field("TENTANG", "TENTANG_OFFICES_IMG_$i") ?>

                                <hr class="my-3">

                                <div class="w-100">
                                    <?= view("_components/LinesFieldGroup",
                                        [
                                            "fields" => [
                                                [
                                                    "type" => "LinesField",
                                                    "label" => "Office Title",
                                                    "id" => "TENTANG_OFFICES_TITLE_$i",
                                                ],
                                                [
                                                    "type" => "LinesField",
                                                    "label" => "coordinated by...",
                                                    "id" => "TENTANG_OFFICES_COORDINATOR_$i",
                                                ],
                                                [
                                                    "type" => "LinesField",
                                                    "label" => "Office Location",
                                                    "id" => "TENTANG_OFFICES_NAME_$i",
                                                ],
                                                [
                                                    "type" => "LinesField",
                                                    "label" => "Office URL",
                                                    "id" => "TENTANG_OFFICES_URL_$i",
                                                ],
                                                [
                                                    "type" => "LinesTextArea",
                                                    "label" => "Deskripsi",
                                                    "id" => "TENTANG_OFFICES_CONTENT_$i",
                                                ],
                                            ]
                                        ]
                                    ) ?>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>

            <hr class="my-5 mx-5">

            <section class="my-5">
                <div class="w-100 mb-2">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Section",
                                    "id" => "TENTANG_VALUE_TAG",
                                ],
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul",
                                    "id" => "TENTANG_VALUE_TITLE",
                                ],
                            ]
                        ]
                    ) ?>
                </div>

                <div class="row g-4">
                    <div class="col-6">
                        <?= summon_image_field("TENTANG", "TENTANG_VALUE_IMG_LEFT") ?>
                    </div>
                    <div class="col-6">
                        <?= summon_image_field("TENTANG", "TENTANG_VALUE_IMG_RIGHT") ?>
                    </div>
                    <div class="col-6">
                        <div
                                class="w-100">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Konten Kiri",
                                            "id" => "TENTANG_VALUE_CONTENT_LEFT",
                                        ],
                                    ]
                                ]
                            ) ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="w-100">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Konten Kanan",
                                            "id" => "TENTANG_VALUE_CONTENT_RIGHT",
                                        ],
                                    ]
                                ]
                            ) ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <?= summon_image_field("TENTANG", "TENTANG_VALUE_CARD_BG") ?>

                        <hr class="my-3"/>

                        <div class="w-100">

                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Headline Kartu",
                                            "id" => "TENTANG_VALUE_CARD_HEADLINE",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Deskripsi Kartu",
                                            "id" => "TENTANG_VALUE_CARD_CONTENT",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Footer Kartu",
                                            "id" => "TENTANG_VALUE_CARD_FOOTER",
                                        ],
                                    ]
                                ]
                            ) ?>
                        </div>
                    </div>
                </div>

            </section>

            <hr class="my-5 mx-5">

            <section class="my-5">
                <div class="card shadow-sm">
                    <div class="card-header">Struktur Organisasi</div>
                    <div class="card-body">
                        <?= summon_image_field("TENTANG", "TENTANG_STRUKTUR_ORGANISASI") ?>
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
                                    "id" => "TENTANG_TEAM_TAG",
                                ],
                                [
                                    "type" => "LinesField",
                                    "label" => "Judul",
                                    "id" => "TENTANG_TEAM_TITLE",
                                ],
                            ]
                        ]
                    ) ?>
                </div>

                <div class="card">
                    <div class="card-header text-end">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#createBigTeam">
                            <i class="bi bi-plus"></i> Add New
                        </button>

                        <div class="modal fade" id="createBigTeam" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Daftarkan Anggota Team</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="<?= route_to("object.big-team.create") ?>" method="post"
                                          enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group mb-3 w-100 text-start">
                                                <label for="photo">Foto</label>
                                                <input type="file" name="photo" id="photo" class="form-control w-100">
                                            </div>

                                            <div class="form-floating mb-3 w-100">
                                                <input type="text" name="name" id="name"
                                                       class="form-control form-control-sm w-100">
                                                <label for="name">Nama</label>
                                            </div>
                                            <div class="form-floating mb-3 w-100">
                                                <input type="text" name="position" id="position"
                                                       class="form-control form-control-sm w-100">
                                                <label for="position">Posisi</label>
                                            </div>
                                            <div class="form-floating mb-3 w-100">
                                                <input type="text" name="position_en" id="position_en"
                                                       class="form-control form-control-sm w-100">
                                                <label for="position_en">Posisi (EN)</label>
                                            </div>
                                            <div class="form-floating mb-3 w-100">
                                            <textarea type="text" name="description" rows="5" style="height: 175px"
                                                      id="description"
                                                      class="form-control form-control-sm w-100"></textarea>
                                                <label for="description">Deskripsi</label>
                                            </div>
                                            <div class="form-floating mb-3 w-100">
                                            <textarea type="text" name="description_en" rows="5" style="height: 175px"
                                                      id="description_en"
                                                      class="form-control form-control-sm w-100"></textarea>
                                                <label for="description_en">Deskripsi (EN)</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th width="1">No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Posisi</th>
                                    <th>Posisi (EN)</th>
                                    <th class="w-100">Deskripsi</th>
                                    <th class="w-100">Deskripsi (EN)</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $bigteam_model = model("BigTeamModel"); ?>
                                <?php foreach ($bigteam_model->orderBy("order", "ASC")->findAll() as $key => $item): ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td>
                                            <img src="<?= $item->photo ?>" alt="<?= $item->name ?>"
                                                 style="width: 100px; height: 100px; object-fit: contain;"
                                            >
                                        </td>
                                        <td><?= $item->name ?></td>
                                        <td><?= $item->position ?></td>
                                        <td><?= $item->position_en ?></td>
                                        <td><?= $item->description ?></td>
                                        <td><?= $item->description_en ?></td>
                                        <td>

                                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editBigTeam<?= $key ?>">
                                                <i class="bi bi-pen"></i> Edit
                                            </button>

                                            <div class="modal fade" id="editBigTeam<?= $key ?>" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5">
                                                                Edit Anggota Team
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?= route_to("object.big-team.update", $item->id) ?>"
                                                              method="post"
                                                              enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="form-group mb-3 w-100 text-start">
                                                                    <label for="photo">Foto</label>
                                                                    <input type="file" name="photo" id="photo"
                                                                           class="form-control w-100">
                                                                </div>

                                                                <div class="form-floating mb-3 w-100">
                                                                    <input type="text" name="name" id="name<?= $key ?>"
                                                                           class="form-control form-control-sm w-100"
                                                                           value="<?= $item->name ?>"
                                                                    >
                                                                    <label for="name<?= $key ?>">Nama</label>
                                                                </div>
                                                                <div class="form-floating mb-3 w-100">
                                                                    <input type="text" name="position"
                                                                           id="position<?= $key ?>"
                                                                           value="<?= $item->position ?>"
                                                                           class="form-control form-control-sm w-100">
                                                                    <label for="position<?= $key ?>">Posisi</label>
                                                                </div>
                                                                <div class="form-floating mb-3 w-100">
                                                                    <input type="text" name="position_en"
                                                                           id="position_en<?= $key ?>"
                                                                           value="<?= $item->position_en ?>"
                                                                           class="form-control form-control-sm w-100">
                                                                    <label for="position_en<?= $key ?>">Posisi (EN)</label>
                                                                </div>
                                                                <div class="form-floating mb-3 w-100">
                                            <textarea type="text" name="description" rows="5" style="height: 175px"
                                                      id="description<?= $key ?>"
                                                      class="form-control w-100"><?= $item->description ?></textarea>
                                                                    <label for="description<?= $key ?>">Deskripsi</label>
                                                                </div>
                                                                <div class="form-floating mb-3 w-100">
                                            <textarea type="text" name="description_en" rows="5" style="height: 175px"
                                                      id="description_en<?= $key ?>"
                                                      class="form-control w-100"><?= $item->description_en ?></textarea>
                                                                    <label for="description_en<?= $key ?>">Deskripsi (EN)</label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary btn-sm">
                                                                    Simpan
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="<?= route_to("object.big-team.delete", $item->id) ?>"
                                                  method="post">
                                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
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
</script>
<?= $this->endSection(); ?>

