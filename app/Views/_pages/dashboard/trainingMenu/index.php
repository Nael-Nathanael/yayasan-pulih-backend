<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <section>
        <div class="card shadow">
            <div class="card-header">
                <div class="card-title">
                    Training Menu
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
                            <th>Kategori, Subkategori</th>
                            <th>Nama Training</th>
                            <th>Durasi</th>
                            <th>Outline</th>
                            <th>Tantangan</th>
                            <th>Target Market</th>
                            <th>Hal yang Dipelajari</th>
                            <th class="text-center">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($trainings as $index => $training): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td>
                                    <b><?= $training->kategori ?></b> <br>
                                    <?= $training->subkategori ?>
                                </td>
                                <td><?= $training->name ?></td>
                                <td><?= $training->durasi_hour ?> Jam</td>
                                <td>
                                    <ul>
                                        <?php foreach ($training->outline as $outline): ?>
                                            <li><?= $outline->value ?></li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <p
                                            class="btn btn-sm btn-primary w-100"
                                            style="cursor: pointer; text-wrap: avoid"
                                            data-bs-toggle="modal"
                                            data-bs-target="#training_outline_modal"
                                            onclick="document.getElementById('trainingmenu_guid_outline').value = '<?= $training->guid ?>'"
                                    >
                                        +Add
                                    </p>
                                </td>
                                <td>
                                    <ul>
                                        <?php foreach ($training->tantangan as $tantangan): ?>
                                            <li><?= $tantangan->value ?></li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <p
                                            class="btn btn-sm btn-primary w-100"
                                            style="cursor: pointer; text-wrap: avoid"
                                            data-bs-toggle="modal"
                                            data-bs-target="#training_tantangan_modal"
                                            onclick="document.getElementById('trainingmenu_guid_tantangan').value = '<?= $training->guid ?>'"
                                    >
                                        +Add
                                    </p>
                                </td>
                                <td>
                                    <ul>
                                        <?php foreach ($training->market as $market): ?>
                                            <li><?= $market->value ?></li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <p
                                            class="btn btn-sm btn-primary w-100"
                                            style="cursor: pointer; text-wrap: avoid"
                                            data-bs-toggle="modal"
                                            data-bs-target="#training_market_modal"
                                            onclick="document.getElementById('trainingmenu_guid_market').value = '<?= $training->guid ?>'"
                                    >
                                        +Add
                                    </p>
                                </td>
                                <td>
                                    <ul>
                                        <?php foreach ($training->dipelajari as $dipelajari): ?>
                                            <li><?= $dipelajari->value ?></li>
                                        <?php endforeach; ?>
                                    </ul>

                                    <p
                                            class="btn btn-sm btn-primary w-100"
                                            style="cursor: pointer; text-wrap: avoid"
                                            data-bs-toggle="modal"
                                            data-bs-target="#training_dipelajari_modal"
                                            onclick="document.getElementById('trainingmenu_guid_dipelajari').value = '<?= $training->guid ?>'"
                                    >
                                        +Add
                                    </p>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-outline-danger btn-sm"
                                       href="<?= route_to("dashboard.trainingmenu.delete", $training->guid) ?>">
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
