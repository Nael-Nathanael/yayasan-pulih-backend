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
                                <th>Normal Web</th>
                                <th>Promo Web</th>
                                <th>Normal Mobile</th>
                                <th>Promo Mobile</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($trainings as $index => $training): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <img src="<?= $training->imgurl ?>" alt="" style="max-height: 100px">
                                    </td>
                                    <td>
                                        <img src="<?= $training->imgurl_promo ?>" alt="" style="max-height: 100px">
                                    </td>
                                    <td>
                                        <img src="<?= $training->imgurl_small ?>" alt="" style="max-height: 100px">
                                    </td>
                                    <td>
                                        <img src="<?= $training->imgurl_small_promo ?>" alt=""
                                             style="max-height: 100px">
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
                    <h5 class="modal-title" id="webinar_create_modalLabel">Create New Webinar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="img">Normal Web</label>
                        <input class="form-control" type="file" name="img" id="img" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="img_promo">Promo Web</label>
                        <input class="form-control" type="file" name="img_promo" id="img_promo" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="img_small">Normal Mobile</label>
                        <input class="form-control" type="file" name="img_small" id="img_small" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="img_small_promo">Promo Mobile</label>
                        <input class="form-control" type="file" name="img_small_promo" id="img_small_promo" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>