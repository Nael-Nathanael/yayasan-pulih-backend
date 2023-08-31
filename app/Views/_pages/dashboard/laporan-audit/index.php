<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<?php $lines = model("Lines"); ?>

    <div class="container my-2">
        <div class="card">
            <div class="card-header text-end">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#createLaporanAudit">
                    <i class="bi bi-plus"></i> Add New
                </button>

                <div class="modal fade" id="createLaporanAudit" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Laporan Audit</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="<?= route_to("object.laporan-audit.create") ?>" method="post"
                                  enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group mb-3 w-100 text-start">
                                        <label for="file">Foto</label>
                                        <input type="file" name="file" id="file" class="form-control w-100" required>
                                    </div>

                                    <div class="form-floating mb-3 w-100">
                                        <input type="text" name="name" id="name"
                                               class="form-control form-control-sm w-100" required>
                                        <label for="name">Nama File</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th width="1">No</th>
                            <th>File</th>
                            <th>Nama</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $bigteam_model = model("LaporanAuditModel"); ?>
                        <?php foreach ($bigteam_model->findAll() as $key => $item): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td>
                                    <a href="<?= $item->url ?>" target="_blank" rel="noreferrer"
                                       class="btn btn-outline-success btn-sm">
                                        Buka di Tab Baru
                                    </a>
                                </td>
                                <td><?= $item->name ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#editLaporannAudit<?= $key ?>">
                                        <i class="bi bi-pen"></i> Edit
                                    </button>

                                    <div class="modal fade" id="editLaporannAudit<?= $key ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5">Edit Laporan Audit</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form action="<?= route_to("object.laporan-audit.update", $item->id) ?>"
                                                      method="post"
                                                      enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group mb-3 w-100 text-start">
                                                            <label for="file<?= $key ?>">File</label>
                                                            <input type="file" name="file" id="file<?= $key ?>"
                                                                   class="form-control w-100">
                                                        </div>

                                                        <div class="form-floating mb-3 w-100">
                                                            <input type="text" name="name" id="name<?= $key ?>"
                                                                   class="form-control form-control-sm w-100"
                                                                   value="<?= $item->name ?>"
                                                            >
                                                            <label for="name<?= $key ?>">Nama</label>
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
                                    <form action="<?= route_to("object.laporan-audit.delete", $item->id) ?>"
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