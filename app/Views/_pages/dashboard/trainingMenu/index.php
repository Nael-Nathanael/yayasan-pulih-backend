<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid">

    <div class="w-100 text-end my-3">
        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                data-bs-target="#webinar_create_modal">
            Create New
        </button>
    </div>

    <div class="row">
        <?php foreach ($trainings as $index => $training): ?>

            <div class="col-md-4 col-sm-6 col-12 h-100">
                <div class="card shadow-sm position-relative mb-5 h-100">
                    <div class="position-absolute top-0 start-0 translate-middle m-0 bg-white border fw-bold d-flex justify-content-center align-items-center"
                         style="width: 30px; height: 30px">
                        <?= $index + 1 ?>
                    </div>

                    <a class="btn btn-outline-danger btn-sm position-absolute top-0 end-0"
                       style="width: 30px; height: 30px;"
                       href="<?= route_to("dashboard.trainingmenu.delete", $training->guid) ?>">
                        X
                    </a>

                    <div class="card-body" style="line-height: 1.2">
                        <table>
                            <tr style="vertical-align: top !important">
                                <th>Kategori</th>
                                <td class="ps-3 pe-1">:</td>
                                <td><?= $training->kategori ?></td>
                            </tr>
                            <tr style="vertical-align: top !important">
                                <th>Subkategori</th>
                                <td class="ps-3 pe-1">:</td>
                                <td><?= $training->subkategori ?></td>
                            </tr>
                            <tr style="vertical-align: top !important">
                                <th>Training</th>
                                <td class="ps-3 pe-1">:</td>
                                <td><?= $training->name ?></td>
                            </tr>
                            <tr style="vertical-align: top !important">
                                <th>Durasi</th>
                                <td class="ps-3 pe-1">:</td>
                                <td><?= $training->durasi_hour ?> Jam</td>
                            </tr>
                            <tr style="vertical-align: middle !important">
                                <th class="text-warning fw-bold">Prakerja</th>
                                <td class="ps-3 pe-1">:</td>
                                <td>
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <?= $training->isPrakerja ? "Ya" : "Tidak" ?>
                                        <a href="<?= route_to("object.trainingmenu.setprakerja", $training->guid) ?>"
                                           class="btn btn-sm btn-warning">
                                            Toggle
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <div class="d-flex align-items-center">
                            <b>Outline</b>
                            <button type="button"
                                    style="height: 20px; width: 20px"
                                    class="ms-1 btn btn-primary btn-sm m-0 p-0 d-flex justify-content-center align-items-center"
                                    data-bs-toggle="modal"
                                    data-bs-target="#training_outline_modal"
                                    onclick="document.getElementById('trainingmenu_guid_outline').value = '<?= $training->guid ?>'"
                            >+
                            </button>
                        </div>
                        <ul>
                            <?php foreach ($training->outline as $outline): ?>
                                <li><?= $outline->value ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <hr>

                        <div class="d-flex align-items-center">
                            <b>Tantangan</b>
                            <button type="button"
                                    style="height: 20px; width: 20px"
                                    class="ms-1 btn btn-primary btn-sm m-0 p-0 d-flex justify-content-center align-items-center"
                                    data-bs-toggle="modal"
                                    data-bs-target="#training_tantangan_modal"
                                    onclick="document.getElementById('trainingmenu_guid_tantangan').value = '<?= $training->guid ?>'"
                            >+
                            </button>
                        </div>
                        <ul>
                            <?php foreach ($training->tantangan as $tantangan): ?>
                                <li><?= $tantangan->value ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <hr>

                        <div class="d-flex align-items-center">
                            <b>Target Market</b>
                            <button type="button"
                                    style="height: 20px; width: 20px"
                                    class="ms-1 btn btn-primary btn-sm m-0 p-0 d-flex justify-content-center align-items-center"
                                    data-bs-toggle="modal"
                                    data-bs-target="#training_market_modal"
                                    onclick="document.getElementById('trainingmenu_guid_market').value = '<?= $training->guid ?>'"
                            >+
                            </button>
                        </div>
                        <ul>
                            <?php foreach ($training->market as $market): ?>
                                <li><?= $market->value ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <hr>

                        <div class="d-flex align-items-center">
                            <b>Hal yang Dipelajari</b>
                            <button type="button"
                                    style="height: 20px; width: 20px"
                                    class="ms-1 btn btn-primary btn-sm m-0 p-0 d-flex justify-content-center align-items-center"
                                    data-bs-toggle="modal"
                                    data-bs-target="#training_dipelajari_modal"
                                    onclick="document.getElementById('trainingmenu_guid_dipelajari').value = '<?= $training->guid ?>'"
                            >+
                            </button>
                        </div>
                        <ul>
                            <?php foreach ($training->dipelajari as $dipelajari): ?>
                                <li><?= $dipelajari->value ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>


        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="webinar_create_modal" tabindex="-1"
     aria-labelledby="webinar_create_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="<?= route_to("object.trainingmenu.create") ?>" method="post"
              class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="webinar_create_modalLabel">Create New Training</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="kategori">Kategori</label>
                    <input class="form-control" type="text" name="kategori" id="kategori" required>
                </div>

                <div class="form-group mb-3">
                    <label for="subkategori">Subkategori</label>
                    <input class="form-control" type="text" name="subkategori" id="subkategori" required>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Nama</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>

                <div class="form-group mb-3">
                    <label for="durasi_hour">Durasi (Jam)</label>
                    <input class="form-control" type="number" name="durasi_hour" min="1" value="1" id="durasi_hour"
                           required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="training_outline_modal" tabindex="-1"
     aria-labelledby="training_outline_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="<?= route_to("object.trainingmenu.createoutline") ?>" method="post"
              class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="training_outline_modalLabel">Create New Outline</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="trainingmenu_guid" id="trainingmenu_guid_outline">
                <div class="form-group mb-3">
                    <label for="value">Outline</label>
                    <input class="form-control" type="text" name="value" id="value" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="training_tantangan_modal" tabindex="-1"
     aria-labelledby="training_tantangan_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="<?= route_to("object.trainingmenu.createtantangan") ?>" method="post"
              class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="training_tantangan_modalLabel">Create New Tantangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="trainingmenu_guid" id="trainingmenu_guid_tantangan">
                <div class="form-group mb-3">
                    <label for="value">Tantangan</label>
                    <input class="form-control" type="text" name="value" id="value" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="training_market_modal" tabindex="-1"
     aria-labelledby="training_market_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="<?= route_to("object.trainingmenu.createmarket") ?>" method="post"
              class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="training_market_modalLabel">Create New Target Market</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="trainingmenu_guid" id="trainingmenu_guid_market">
                <div class="form-group mb-3">
                    <label for="value">Target Market</label>
                    <input class="form-control" type="text" name="value" id="value" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="training_dipelajari_modal" tabindex="-1"
     aria-labelledby="training_dipelajari_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <form action="<?= route_to("object.trainingmenu.createdipelajari") ?>" method="post"
              class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="training_dipelajari_modalLabel">Create New Hal yang Dipelajari</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="trainingmenu_guid" id="trainingmenu_guid_dipelajari">
                <div class="form-group mb-3">
                    <label for="value">Hal yang Dipelajari</label>
                    <input class="form-control" type="text" name="value" id="value" required>
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
