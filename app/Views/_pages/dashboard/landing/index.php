<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<?php
/**
 * @var Array $carouselBanners
 * @var Array $teams
 */
?>
    <div class="container">
        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Carousel Banner
                    </div>
                    <div class="card-toolkit">
                        <button class="btn btn-outline-success btn-sm" type="button" data-bs-toggle="modal"
                                data-bs-target="#carouselBanner_create_modal">
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
                                <th>Image</th>
                                <th>Headline</th>
                                <th>Description</th>
                                <th>Link to</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($carouselBanners as $index => $carouselBanner): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <img src="<?= $carouselBanner->imgUrl ?>" style="max-width: 200px"
                                             alt="<?= $carouselBanner->headline ?>">
                                    </td>
                                    <td>
                                        <?= $carouselBanner->headline ?>
                                    </td>
                                    <td>
                                        <?= $carouselBanner->description ?>
                                    </td>
                                    <td>
                                        <?= $carouselBanner->link ?>
                                    </td>
                                    <td>
                                        <form action="<?= route_to("object.carouselBanner.delete", $carouselBanner->id) ?>"
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
        <section>
            <div class="row">
                <div class="col-6">
                    <form action="<?= route_to("object.lines.update", "WHAT_WE_DO") ?>" class="card shadow"
                          method="post">
                        <div class="card-header">
                            <div class="card-title">
                                What We Do
                            </div>
                        </div>
                        <div class="card-body">
                            <?= view("_components/LinesField",
                                [
                                    "field_label" => "Headline for What We Do",
                                    "field_id" => "WHAT_WE_DO_TITLE",
                                ]
                            ) ?>

                            <?= view("_components/LinesTextArea",
                                [
                                    "field_label" => "1st Descriptions for What We Do",
                                    "field_id" => "WHAT_WE_DO_DESCRIPTION",
                                ]
                            ) ?>

                            <?= view("_components/LinesTextArea",
                                [
                                    "field_label" => "2nd Descriptions for What We Do",
                                    "field_id" => "WHAT_WE_DO_DESCRIPTION_2",
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
                <div class="col-6">
                    <form class="card shadow" action="<?= route_to("object.lines.update", "HOW_WE_DO") ?>"
                          method="post">
                        <div class="card-header">
                            <div class="card-title">
                                How We Do
                            </div>
                        </div>
                        <div class="card-body">
                            <?= view("_components/LinesField",
                                [
                                    "field_label" => "Headline for How We Do",
                                    "field_id" => "HOW_WE_DO_TITLE",
                                ]
                            ) ?>

                            <?= view("_components/LinesTextArea",
                                [
                                    "field_label" => "1st Descriptions for How We Do",
                                    "field_id" => "HOW_WE_DO_DESCRIPTION",
                                ]
                            ) ?>

                            <?= view("_components/LinesTextArea",
                                [
                                    "field_label" => "2nd Descriptions for How We Do",
                                    "field_id" => "HOW_WE_DO_DESCRIPTION_2",
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
                        Business and Risk Advisory
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">

                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "SERVICES",
                                    "field_id" => "LANDING_SERVICE_1_IMAGE",
                                ]
                            ) ?>

                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "SERVICES") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Headline",
                                            "id" => "LANDING_SERVICE_1_HEADLINE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "LANDING_SERVICE_1_DESCRIPTION",
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
                        IT Advisory
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center order-1">

                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "SERVICES",
                                    "field_id" => "LANDING_SERVICE_2_IMAGE",
                                ]
                            ) ?>

                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "SERVICES") ?>" class="col-6">

                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Headline",
                                            "id" => "LANDING_SERVICE_2_HEADLINE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "LANDING_SERVICE_2_DESCRIPTION",
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
                        People Advisory
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "SERVICES",
                                    "field_id" => "LANDING_SERVICE_3_IMAGE",
                                ]
                            ) ?>
                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "SERVICES") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Headline",
                                            "id" => "LANDING_SERVICE_3_HEADLINE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "LANDING_SERVICE_3_DESCRIPTION",
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
                        Career Banner
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "CAREER",
                                    "field_id" => "LANDING_CAREER_THUMBNAIL_IMAGE",
                                ]
                            ) ?>
                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "CAREER") ?>"
                              class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Headline",
                                            "id" => "LANDING_CAREER_HEADLINE",
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="carouselBanner_create_modal" tabindex="-1"
         aria-labelledby="carouselBanner_create_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form action="<?= route_to("object.carouselBanner.create") ?>" enctype="multipart/form-data" method="post"
                  class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="carouselBanner_create_modalLabel">Create New Carousel Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="img">Upload Banner Image</label>
                        <input class="form-control" type="file" name="img" id="img" required>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="headline" name="headline" placeholder="Headline"
                               required>
                        <label for="headline">Headline</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Description" id="description" name="description"
                                  style="min-height: 100px"></textarea>
                        <label for="description">Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="url" class="form-control" id="link" name="link" placeholder="Link to"
                               required>
                        <label for="link">Link to</label>
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