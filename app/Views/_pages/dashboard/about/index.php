<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <section>
        <div class="card shadow">
            <div class="card-header">
                <div class="card-title">
                    About Us
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 d-flex justify-content-center align-items-center">

                        <?= view("_components/LinesImageClickToChangeField",
                            [
                                "field_group_name" => "ABOUT",
                                "field_id" => "ABOUT_BANNER_IMAGE",
                            ]
                        ) ?>

                    </div>
                    <form method="post" action="<?= route_to('object.lines.update', "ABOUT") ?>" class="col-6">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Headline",
                                        "id" => "ABOUT_BANNER_HEADLINE",
                                    ],
                                    [
                                        "type" => "LinesTextArea",
                                        "label" => "Description",
                                        "id" => "ABOUT_BANNER_DESCRIPTION",
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
    </section>

    <section>
        <div class="card shadow">
            <div class="card-header">
                <div class="card-title">
                    Our Purpose (Image)
                </div>
            </div>
            <div class="card-body">
                <?= view("_components/LinesImageClickToChangeField",
                    [
                        "field_group_name" => "ABOUT",
                        "field_id" => "ABOUT_SEPARATOR_IMAGE",
                    ]
                ) ?>
            </div>
        </div>
    </section>

    <section>

        <form action="<?= route_to("object.lines.update", "ABOUT") ?>"
              method="post" class="card shadow">
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Our Purpose (Paragraph)
                    </div>
                </div>
                <div class="card-body">
                    <?= view("_components/CKEDITOR",
                        [
                            "field_label" => "About Our Purpose",
                            "field_id" => "ABOUT_PARAGRAPH",
                        ]
                    ) ?>
                </div>
            </div>
        </form>
    </section>

    <section>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            Icon Image
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            We bring high quality services with industry-leading standards
                        </p>

                        <?= view("_components/LinesImageClickToChangeField",
                            [
                                "field_group_name" => "ABOUT",
                                "field_id" => "ABOUT_VALUES_1_ICON",
                            ]
                        ) ?>

                        <br>

                        <p>
                            We bring solutions tailored to your business focus
                        </p>

                        <?= view("_components/LinesImageClickToChangeField",
                            [
                                "field_group_name" => "ABOUT",
                                "field_id" => "ABOUT_VALUES_2_ICON",
                            ]
                        ) ?>

                        <br>

                        <p>
                            We bring the human touch for our advisory solution
                        </p>
                        <?= view("_components/LinesImageClickToChangeField",
                            [
                                "field_group_name" => "ABOUT",
                                "field_id" => "ABOUT_VALUES_3_ICON",
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="<?= route_to("object.lines.update", "ABOUT") ?>" class="card shadow"
                      method="post">
                    <div class="card-header">
                        <div class="card-title">
                            Our values define who we are
                        </div>
                    </div>
                    <div class="card-body">
                        <?= view("_components/CKEDITOR",
                            [
                                "field_label" => "We bring high quality services with industry-leading standards",
                                "field_id" => "ABOUT_VALUES_1",
                            ]
                        ) ?>

                        <?= view("_components/CKEDITOR",
                            [
                                "field_label" => "We bring solutions tailored to your business focus",
                                "field_id" => "ABOUT_VALUES_2",
                            ]
                        ) ?>

                        <?= view("_components/CKEDITOR",
                            [
                                "field_label" => "We bring the human touch for our advisory solution",
                                "field_id" => "ABOUT_VALUES_3",
                            ]
                        ) ?>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-outline-primary">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="card shadow">
            <div class="card-header">
                <div class="card-title">
                    Our People
                </div>
                <div>
                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#people_create_modal">
                        Register People
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 1px">No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($peoples as $index => $people): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $people->name ?></td>
                                <td><?= $people->position ?></td>
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
<div class="modal fade" id="people_create_modal" tabindex="-1"
     aria-labelledby="people_create_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="<?= route_to("object.peoples.create") ?>" method="post" enctype="multipart/form-data"
              class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="people_create_modalLabel">Add People</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="img">Avatar</label>
                    <input type="file" class="form-control" id="img" name="img" placeholder="Avatar"
                           required>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                           required>
                    <label for="name">Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="position" name="position" placeholder="Headline"
                           required>
                    <label for="position">Position</label>
                </div>

                <input type="hidden" name="description" id="description" value="">
                <div class="mb-3">
                    Description
                    <div class="row">
                        <div class="document-editor__toolbar border-0"></div>
                    </div>
                    <div class="editordescription shadow-none bg-white border" style="min-height: 200px"></div>
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
    initCkeditor("ABOUT_VALUES_1")
    initCkeditor("ABOUT_VALUES_2")
    initCkeditor("ABOUT_VALUES_3")
    initCkeditor("description")
</script>
<?= $this->endSection() ?>
