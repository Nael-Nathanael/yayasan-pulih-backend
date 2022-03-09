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
                                <th>Title</th>
                                <th class="text-center">Datetime</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Registration URL</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($trainings as $index => $training): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <?= $training->title ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $training->datetime ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $training->description ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $training->url ?>
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
                  class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="webinar_create_modalLabel">Create New Webinar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Headline"
                               required>
                        <label for="title">Title</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                               placeholder="Date and Time"
                               required>
                        <label for="datetime">Date and Time</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Description" id="description" name="description"
                                  style="min-height: 100px"></textarea>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="url" class="form-control" id="url" name="url" placeholder="Registration Link"
                               required>
                        <label for="url">Registration Link</label>
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