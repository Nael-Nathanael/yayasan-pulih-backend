<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container my-2">

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Psikolog</h5>

                <a href="<?= route_to("dashboard.psy.create") ?>" class="btn btn-sm btn-primary">
                    Register Psikolog
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th width="1">No</th>
                            <th>Grup</th>
                            <th>Foto</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $model = model("MitraModel"); ?>
                        <?php foreach ($model->findAll() as $key => $item): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $item->group_name ?></td>
                                <td>
                                    <img src="<?= $item->photo ?>" height="200" width="200" style="object-fit: contain"
                                         alt="<?= $item->group_name ?>"/>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editMitra<?= $key ?>">
                                        <i class="bi bi-pen"></i> Edit
                                    </button>

                                    <div class="modal fade" id="editMitra<?= $key ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5">Edit Mitra</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form action="<?= route_to("object.mitra.update", $item->id) ?>"
                                                      method="post"
                                                      enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group mb-3 w-100 text-start">
                                                            <label for="photo<?= $key ?>">File</label>
                                                            <input type="file" name="photo" id="photo<?= $key ?>"
                                                                   class="form-control w-100">
                                                        </div>

                                                        <div class="form-floating mb-3 w-100">
                                                            <input type="text" name="group_name"
                                                                   id="group_name_<?= $key ?>"
                                                                   class="form-control form-control-sm w-100"
                                                                   value="<?= $item->group_name ?>"
                                                            >
                                                            <label for="group_name_<?= $key ?>">Nama Kategori
                                                                Mitra</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form action="<?= route_to("object.mitra.delete", $item->id) ?>"
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
    </div>
<?= $this->endSection(); ?>