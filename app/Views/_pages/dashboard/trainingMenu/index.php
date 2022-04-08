<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container-fluid mt-2">
    <div class="card shadow-sm">
        <div class="card-header">
            <h5 class="mb-0">Kategori Training</h5>

            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                    data-bs-target="#kategori_create_modal">
                Create New
            </button>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <?php foreach ($kategori as $index => $kate): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="px-3">
                            <div class="card fw-bold text-white shadow-sm"
                            >
                                <div class="card-body p-0  position-relative rounded d-flex justify-content-center align-items-center"
                                     style="
                                             height: 80px;
                                             background-image: url('<?= $kate->imgSrc ? str_replace("{backend_url}", base_url(), $kate->imgSrc) : "https://via.placeholder.com/200" ?>');
                                             background-size: cover;
                                             background-position: center;
                                             background-repeat: no-repeat;
                                             cursor: pointer;
                                             "
                                     onclick="document.getElementById('imgForTrainingKate<?= $index ?>').click()"
                                >
                                    <div class="top-0 start-0 w-100 h-100 position-absolute rounded"
                                         style="background: linear-gradient(90deg, rgba(9,73,121,1) 0%, rgba(7,47,146,0.5) 25%, rgba(0,212,255,0) 100%);">

                                    </div>
                                    <span class="position-relative rounded"><?= $kate->name ?></span>
                                </div>
                                <div class="card-footer">

                                    <div class="row w-100 g-0">
                                        <div class="col-6">
                                            <div class="me-1">

                                                <button type="button" class="btn btn-warning btn-sm w-100"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edit_kategori_name_modal"
                                                        onclick="
                                                                document.getElementById('kate_name').value = '<?= $kate->name ?>';
                                                                document.getElementById('kate_old_name').value = '<?= $kate->name ?>';
                                                                ">
                                                    Rename
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="ms-1">
                                                <?php if ($kate->deletable): ?>
                                                    <a class="btn btn-outline-danger btn-sm w-100"
                                                       onclick="return confirm('Are you sure?')"
                                                       href="<?= route_to("dashboard.trainingmenu.deletekategori", $kate->name) ?>">
                                                        Delete
                                                    </a>
                                                <?php else: ?>
                                                    <button type="button" class="btn btn-danger disabled btn-sm w-100"
                                                            style="opacity: .3" disabled>
                                                        Delete
                                                    </button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <form action="<?= route_to('object.trainingmenu.uploadkategori', $kate->name) ?>"
                                  method="post"
                                  id='imgForTrainingKate<?= $index ?>_form' enctype="multipart/form-data">
                                <input class="d-none" id="imgForTrainingKate<?= $index ?>"
                                       name="imgSrc"
                                       onchange="document.getElementById('imgForTrainingKate<?= $index ?>_form').submit()"
                                       type="file">
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
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
                    <div class="card-header p-0" style="height: 200px">
                        <img alt="" class="w-100" height="200px"
                             src="<?= $training->imgSrc ? str_replace("{backend_url}", base_url(), $training->imgSrc) : "https://via.placeholder.com/400x200" ?>"
                             onclick="document.getElementById('imgForTraining<?= $training->guid ?>').click()"
                             style="object-fit: cover; cursor: pointer">

                        <form action="<?= route_to('object.trainingmenu.upload', $training->guid) ?>" method="post"
                              id='imgForTraining<?= $training->guid ?>_form' enctype="multipart/form-data">
                            <input class="d-none" id="imgForTraining<?= $training->guid ?>"
                                   name="imgSrc"
                                   onchange="document.getElementById('imgForTraining<?= $training->guid ?>_form').submit()"
                                   type="file">
                        </form>
                    </div>
                    <div class="position-absolute top-0 start-0 translate-middle m-0 bg-white border fw-bold d-flex justify-content-center align-items-center"
                         style="width: 30px; height: 30px">
                        <?= $index + 1 ?>
                    </div>

                    <div class="card-body p-0 justify-content-between align-items-center"
                         style="line-height: 1.2; min-height: 200px">
                        <div class="p-2">
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

                        </div>
                    </div>
                    <div class="card-footer border-0 flex-column">
                        <div id="collapseTraining<?= $index ?>" class="collapse p-2">

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

                        <div class="row mb-2 w-100 g-0">
                            <div class="col-6">
                                <div class="me-1">
                                    <button type="button" class="btn btn-warning disabled btn-sm w-100"
                                            style="opacity: .3" disabled>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ms-1">
                                    <a class="btn btn-outline-danger btn-sm w-100"
                                       onclick="return confirm('Are you sure?')"
                                       href="<?= route_to("dashboard.trainingmenu.delete", $training->guid) ?>">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary btn-sm w-100" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTraining<?= $index ?>">
                            Toggle Detail
                        </button>
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

<!-- Modal -->
<div class="modal fade" id="kategori_create_modal" tabindex="-1"
     aria-labelledby="kategori_create_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="<?= route_to("object.trainingmenu.createkategori") ?>" method="post"
              class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="kategori_create_modalLabel">Create New Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="name">Kategori</label>
                    <input class="form-control" type="text" name="name" id="name" required>
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
<div class="modal fade" id="edit_kategori_name_modal" tabindex="-1"
     aria-labelledby="edit_kategori_name_modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="<?= route_to("object.trainingmenu.updatekategoriname") ?>" method="post"
              class="modal-content" enctype="multipart/form-data">
            <input type="hidden" name="old" id="kate_old_name">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_kategori_name_modalLabel">Update Category Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="kate_name">Kategori</label>
                    <input class="form-control" type="text" name="new" id="kate_name" required>
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
