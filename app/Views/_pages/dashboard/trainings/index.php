<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container">
        <section>
            <div class="card card-body shadow">
                <form method="post" action="<?= route_to('object.lines.update', "WEBINARS") ?>">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Headline",
                                    "id" => "TRAININGS_BANNER_HEADLINE",
                                ],
                                [
                                    "type" => "LinesTextArea",
                                    "label" => "Description",
                                    "id" => "TRAININGS_BANNER_DESCRIPTION",
                                ],
                            ]
                        ]
                    ) ?>
                    <button type="submit" class="btn btn-sm btn-outline-primary">
                        Save Changes
                    </button>
                </form>
            </div>
        </section>
        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Trainings
                    </div>
                    <div class="card-toolkit">
                        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#webinar_create_modal">
                            Create New
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width: 1px">No</th>
                                <th>Background</th>
                                <th>Category</th>
                                <th>Header</th>
                                <th>Description</th>
                                <th>Tantangan yang Dihadapi</th>
                                <th>Hal yang Dipelajari</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($trainings as $index => $training): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <img src="<?= str_replace("{backend_url}", base_url(), $training->imgurl) ?>" alt="" style="max-height: 100px">
                                    </td>
                                    <td><?= $training->category ?></td>
                                    <td><?= $training->header ?></td>
                                    <td><?= $training->description ?></td>
                                    <td>
                                        <ul>
                                            <?php $template = "tantangan_yang_dihadapi_" ?>
                                            <?php for ($i = 1; $i <= 3; $i++): ?>
                                                <?php $param = $template . $i; ?>
                                                <li><?= $training->$param ?></li>
                                            <?php endfor; ?>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <?php $template = "hal_yang_dipelajari_" ?>
                                            <?php for ($i = 1; $i <= 3; $i++): ?>
                                                <?php $param = $template . $i; ?>
                                                <?php $param_img = $template . "img_" . $i; ?>
                                                <li>
                                                    <img style="width: 50px; height: 50px" class="p-2" src="<?= $training->$param_img ?>" alt="">
                                                    <?= $training->$param ?></li>
                                            <?php endfor; ?>
                                        </ul>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-danger btn-sm"
                                           href="<?= route_to("dashboard.trainings.delete", $training->id) ?>">
                                            Delete
                                        </a>
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

    <!-- Modal -->
    <div class="modal fade" id="webinar_create_modal" tabindex="-1"
         aria-labelledby="webinar_create_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form action="<?= route_to("object.trainings.create") ?>" method="post"
                  class="modal-content" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="webinar_create_modalLabel">Create New Training</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="img">Background</label>
                        <input class="form-control" type="file" name="img" id="img" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="category">Category</label>
                        <input class="form-control" type="text" name="category" id="category" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="header">Header</label>
                        <input class="form-control" type="text" name="header" id="header" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" rows="4" class="form-control" id="description" required></textarea>
                    </div>

                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <div class="form-group mb-3">
                            <label for="tantangan_yang_dihadapi_<?= $i ?>">Tantangan yang Dihadapi (<?= $i ?>)</label>
                            <input class="form-control" type="text" name="tantangan_yang_dihadapi_<?= $i ?>"
                                   id="tantangan_yang_dihadapi_<?= $i ?>" required>
                        </div>
                    <?php endfor; ?>

                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <div class="form-group mb-3">
                            <label for="hal_yang_dipelajari_<?= $i ?>">Hal yang Dipelajari (<?= $i ?>)</label>
                            <input class="form-control" type="text" name="hal_yang_dipelajari_<?= $i ?>"
                                   id="hal_yang_dipelajari_<?= $i ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="hal_yang_dipelajari_img_<?= $i ?>">Hal yang Dipelajari Logo (<?= $i ?>)</label>
                            <input class="form-control" type="file" name="hal_yang_dipelajari_img_<?= $i ?>"
                                   id="hal_yang_dipelajari_img_<?= $i ?>" required>
                        </div>
                    <?php endfor; ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>