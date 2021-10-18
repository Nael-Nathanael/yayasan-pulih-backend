<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>

    <section>
        <div class="container-fluid">
            <div class="card card-body">
                <?= view("_components/LinesImageClickToChangeField",
                    [
                        "field_group_name" => "SERVICES",
                        "field_id" => "SERVICES_BANNER_IMAGE",
                    ]
                ) ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Key Points
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#keypoints_create_modal">
                            Add New Key Points
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 1px">No</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($keypoints as $index => $keypoint): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <img src="<?= $keypoint->imgUrl ?>" alt="<?= $keypoint->title ?>" width="40"
                                             height="40">
                                    </td>
                                    <td><?= $keypoint->title ?></td>
                                    <td><?= $keypoint->description ?></td>
                                    <td>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <a href="<?= route_to("dashboard.service.business_and_risk.index") ?>" class="text-decoration-none">
                        <div class="card card-body shadow-sm text-center">
                            Business and Risk Advisory
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?= route_to("dashboard.service.it.index") ?>" class="text-decoration-none">
                        <div class="card card-body shadow-sm text-center">
                            IT Advisory
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?= route_to("dashboard.service.people.index") ?>" class="text-decoration-none">
                        <div class="card card-body shadow-sm text-center">
                            People Advisory
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="keypoints_create_modal" tabindex="-1"
         aria-labelledby="keypoints_create_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form action="<?= route_to("object.keypoints.create") ?>" method="post" enctype="multipart/form-data"
                  class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="keypoints_create_modalLabel">Create New Key Points</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <input type="file" class="form-control" id="img" name="img" placeholder="Icon" required>
                        <label for="img">Icon</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                               required>
                        <label for="title">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Description" id="description" name="description"
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