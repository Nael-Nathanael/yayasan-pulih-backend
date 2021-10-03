<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
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
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <form class="card shadow" action="<?= route_to("object.whatAndHowWeDo.update") ?>" method="post">
                <div class="card-header">
                    <div class="card-title">
                        What We Do and How We Do
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="what_we_do_title">Headline for What We Do</label>
                                <input type="text" name="what_we_do_title" value="<?= $what_we_do_title ?>"
                                       id="what_we_do_title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="what_we_do_description">1st Descriptions for What We Do</label>
                                <textarea type="text" name="what_we_do_description" id="what_we_do_description"
                                          class="form-control" rows="4"><?= $what_we_do_description ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="what_we_do_description_2">2nd Descriptions for What We Do</label>
                                <textarea type="text" name="what_we_do_description_2" id="what_we_do_description_2"
                                          class="form-control" rows="4"><?= $what_we_do_description_2 ?></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="how_we_do_title">Headline for How We Do</label>
                                <input type="text" name="how_we_do_title" value="<?= $how_we_do_title ?>"
                                       id="how_we_do_title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="how_we_do_description">1st Descriptions for How We Do</label>
                                <textarea type="text" name="how_we_do_description" id="how_we_do_description"
                                          class="form-control" rows="4"><?= $how_we_do_description ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="how_we_do_description_2">2nd Descriptions for How We Do</label>
                                <textarea type="text" name="how_we_do_description_2" id="how_we_do_description_2"
                                          class="form-control" rows="4"><?= $how_we_do_description_2 ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer justify-content-end">
                    <button type="submit" class="btn btn-sm btn-outline-primary">
                        Save Changes
                    </button>
                </div>
            </form>
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
                            <img src="<?= $LANDING_SERVICE_1_IMAGE ?>" class="w-100" alt=""
                                 style="max-height: 300px; object-fit: cover; cursor: pointer"
                                 onclick="document.getElementById('LANDING_SERVICE_1_IMAGE').click()">
                            <form action="<?= route_to('object.services.update_thumbnail') ?>" method="post"
                                  id="landing_service_1_image_form" enctype="multipart/form-data">
                                <input type="hidden" name="key" value="LANDING_SERVICE_1_IMAGE">
                                <input class="d-none" id="LANDING_SERVICE_1_IMAGE"
                                       name="LANDING_SERVICE_1_IMAGE"
                                       onchange="document.getElementById('landing_service_1_image_form').submit()"
                                       type="file">
                            </form>
                        </div>
                        <form method="post" action="<?= route_to('object.services.update') ?>" class="col-6">
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_1_HEADLINE">Headline</label>
                                <input type="text" name="LANDING_SERVICE_1_HEADLINE" id="LANDING_SERVICE_1_HEADLINE"
                                       value="<?= $LANDING_SERVICE_1_HEADLINE ?>"
                                       class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_1_DESCRIPTION">Description</label>
                                <textarea type="text" name="LANDING_SERVICE_1_DESCRIPTION"
                                          id="LANDING_SERVICE_1_DESCRIPTION"
                                          class="form-control"><?= $LANDING_SERVICE_1_DESCRIPTION ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_1_SUBSERVICE_1">Subservice 1</label>
                                <input type="text" name="LANDING_SERVICE_1_SUBSERVICE_1"
                                       value="<?= $LANDING_SERVICE_1_SUBSERVICE_1 ?>"
                                       id="LANDING_SERVICE_1_SUBSERVICE_1"
                                       class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_1_SUBSERVICE_2">Subservice 2</label>
                                <input type="text" name="LANDING_SERVICE_1_SUBSERVICE_2"
                                       value="<?= $LANDING_SERVICE_1_SUBSERVICE_2 ?>"
                                       id="LANDING_SERVICE_1_SUBSERVICE_2"
                                       class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_1_SUBSERVICE_3">Subservice 3</label>
                                <input type="text" name="LANDING_SERVICE_1_SUBSERVICE_3"
                                       value="<?= $LANDING_SERVICE_1_SUBSERVICE_3 ?>"
                                       id="LANDING_SERVICE_1_SUBSERVICE_3"
                                       class="form-control">
                            </div>

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
                            <img src="<?= $LANDING_SERVICE_2_IMAGE ?>" class="w-100" alt=""
                                 style="max-height: 300px; object-fit: cover; cursor: pointer"
                                 onclick="document.getElementById('LANDING_SERVICE_2_IMAGE').click()">
                            <form action="<?= route_to('object.services.update_thumbnail') ?>" method="post"
                                  id="landing_service_2_image_form" enctype="multipart/form-data">
                                <input type="hidden" name="key" value="LANDING_SERVICE_2_IMAGE">
                                <input class="d-none" id="LANDING_SERVICE_2_IMAGE"
                                       name="LANDING_SERVICE_2_IMAGE"
                                       onchange="document.getElementById('landing_service_2_image_form').submit()"
                                       type="file">
                            </form>
                        </div>
                        <form method="post" action="<?= route_to('object.services.update') ?>" class="col-6">
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_1_HEADLINE">Headline</label>
                                <input type="text" name="LANDING_SERVICE_2_HEADLINE" id="LANDING_SERVICE_2_HEADLINE"
                                       value="<?= $LANDING_SERVICE_2_HEADLINE ?>"
                                       class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_2_DESCRIPTION">Description</label>
                                <textarea type="text" name="LANDING_SERVICE_2_DESCRIPTION"
                                          id="LANDING_SERVICE_2_DESCRIPTION"
                                          class="form-control"><?= $LANDING_SERVICE_2_DESCRIPTION ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_2_SUBSERVICE_1">Subservice 1</label>
                                <input type="text" name="LANDING_SERVICE_2_SUBSERVICE_1"
                                       value="<?= $LANDING_SERVICE_2_SUBSERVICE_1 ?>"
                                       id="LANDING_SERVICE_2_SUBSERVICE_1"
                                       class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_2_SUBSERVICE_2">Subservice 2</label>
                                <input type="text" name="LANDING_SERVICE_2_SUBSERVICE_2"
                                       value="<?= $LANDING_SERVICE_2_SUBSERVICE_2 ?>"
                                       id="LANDING_SERVICE_2_SUBSERVICE_2"
                                       class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_2_SUBSERVICE_3">Subservice 3</label>
                                <input type="text" name="LANDING_SERVICE_2_SUBSERVICE_3"
                                       value="<?= $LANDING_SERVICE_2_SUBSERVICE_3 ?>"
                                       id="LANDING_SERVICE_2_SUBSERVICE_3"
                                       class="form-control">
                            </div>

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
                            <img src="<?= $LANDING_SERVICE_3_IMAGE ?>" class="w-100" alt=""
                                 style="max-height: 300px; object-fit: cover; cursor: pointer"
                                 onclick="document.getElementById('LANDING_SERVICE_3_IMAGE').click()">
                            <form action="<?= route_to('object.services.update_thumbnail') ?>" method="post"
                                  id="landing_service_3_image_form" enctype="multipart/form-data">
                                <input type="hidden" name="key" value="LANDING_SERVICE_3_IMAGE">
                                <input class="d-none" id="LANDING_SERVICE_3_IMAGE"
                                       name="LANDING_SERVICE_3_IMAGE"
                                       onchange="document.getElementById('landing_service_3_image_form').submit()"
                                       type="file">
                            </form>
                        </div>
                        <form method="post" action="<?= route_to('object.services.update') ?>" class="col-6">
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_3_HEADLINE">Headline</label>
                                <input type="text" name="LANDING_SERVICE_3_HEADLINE" id="LANDING_SERVICE_3_HEADLINE"
                                       value="<?= $LANDING_SERVICE_3_HEADLINE ?>"
                                       class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_3_DESCRIPTION">Description</label>
                                <textarea type="text" name="LANDING_SERVICE_3_DESCRIPTION"
                                          id="LANDING_SERVICE_3_DESCRIPTION"
                                          class="form-control"><?= $LANDING_SERVICE_3_DESCRIPTION ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_3_SUBSERVICE_1">Subservice 1</label>
                                <input type="text" name="LANDING_SERVICE_3_SUBSERVICE_1"
                                       value="<?= $LANDING_SERVICE_3_SUBSERVICE_1 ?>"
                                       id="LANDING_SERVICE_3_SUBSERVICE_1"
                                       class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_3_SUBSERVICE_2">Subservice 2</label>
                                <input type="text" name="LANDING_SERVICE_3_SUBSERVICE_2"
                                       value="<?= $LANDING_SERVICE_3_SUBSERVICE_2 ?>"
                                       id="LANDING_SERVICE_3_SUBSERVICE_2"
                                       class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="LANDING_SERVICE_3_SUBSERVICE_3">Subservice 3</label>
                                <input type="text" name="LANDING_SERVICE_3_SUBSERVICE_3"
                                       value="<?= $LANDING_SERVICE_3_SUBSERVICE_3 ?>"
                                       id="LANDING_SERVICE_3_SUBSERVICE_3"
                                       class="form-control">
                            </div>

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