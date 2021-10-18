<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container">

    <section>
        <div class="card card-body">
            <?= view("_components/LinesImageClickToChangeField",
                [
                    "field_group_name" => "SERVICES",
                    "field_id" => "SERVICE_2_BANNER_IMAGE",
                ]
            ) ?>
        </div>
    </section>

    <section>
        <div class="card card-body shadow">
            <form method="post" action="<?= route_to('object.lines.update', "SERVICES") ?>">
                <?= view("_components/LinesFieldGroup",
                    [
                        "fields" => [
                            [
                                "type" => "LinesField",
                                "label" => "Banner Title",
                                "id" => "SERVICE_2_BANNER_HEADLINE",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "Banner Description",
                                "id" => "SERVICE_2_BANNER_DESCRIPTION",
                            ],
                            [
                                "type" => "LinesField",
                                "label" => "First Paragraph Title",
                                "id" => "SERVICE_2_PARAGRAPH_TITLE",
                            ],
                            [
                                "type" => "CKEDITOR",
                                "label" => "First Group",
                                "id" => "SERVICE_2_PARAGRAPH_1",
                            ],
                            [
                                "type" => "CKEDITOR",
                                "label" => "Second Group",
                                "id" => "SERVICE_2_PARAGRAPH_3",
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
                    Service Lines
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#service_line_create_modal">
                        Add New Service Line
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="width: 1px">No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($service_lines as $index => $service_line): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $service_line->title ?></td>
                                <td><?= $service_line->description ?></td>
                                <td></td>
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
<div class="modal fade" id="service_line_create_modal" tabindex="-1"
     aria-labelledby="service_line_create_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="<?= route_to("object.service_lines.create", "IT") ?>" method="post"
              class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="service_line_create_modalLabel">Create New Service Line</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="SL_title" name="title" placeholder="Title"
                           required>
                    <label for="SL_title">Title</label>
                </div>

                <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Description" id="description"
                                  name="description"
                                  style="min-height: 100px"></textarea>
                    <label for="description">Description</label>
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

<?= $this->section("javascript"); ?>
<script>
    initCkeditor("SERVICE_2_PARAGRAPH_1")
    initCkeditor("SERVICE_2_PARAGRAPH_3")
</script>
<?= $this->endSection(); ?>
