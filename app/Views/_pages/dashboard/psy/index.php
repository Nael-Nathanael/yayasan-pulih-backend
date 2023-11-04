<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container-fluid my-2">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Psikolog</h5>

                <a href="<?= route_to("dashboard.psy.create") ?>" class="btn btn-sm btn-primary">
                    Register Psikolog
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr class="text-center">
                            <th nowrap width="1">No</th>
                            <th style="min-width: 100px" nowrap>Photo</th>
                            <th style="min-width: 300px" nowrap>Name</th>
                            <th style="min-width: 100px" nowrap>Spesialisasi</th>
                            <th style="min-width: 100px" nowrap>Email</th>
                            <th style="min-width: 100px" nowrap>Phone</th>
                            <th style="min-width: 100px" nowrap>SIPP</th>
                            <th style="min-width: 100px" nowrap>STR</th>
                            <th style="min-width: 100px" nowrap>Edit</th>
                            <th style="min-width: 100px" nowrap>Hapus</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $model = model("PsyModel"); ?>
                        <?php foreach ($model->findAll() as $key => $item): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td>
                                    <img src="<?= $item->photo ?>" height="100" width="100"
                                         style="object-fit: cover; border-radius: 100%; object-position: center"
                                         alt="<?= $item->name ?>"/>
                                </td>
                                <td><?= $item->name ?></td>
                                <td><?= $item->spesialisasi ?></td>
                                <td nowrap><?= $item->email ?></td>
                                <td nowrap><?= $item->phone ?></td>
                                <td nowrap><?= $item->SIPP ?></td>
                                <td nowrap><?= $item->STR ?></td>
                                <td>
                                    <a href="<?= route_to("dashboard.psy.update", $item->slug)?>" class="btn btn-warning btn-sm w-100">
                                        <i class="bi bi-pen"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="<?= route_to("object.psy.delete", $item->slug) ?>"
                                          method="post">
                                        <button type="submit" class="btn btn-outline-danger btn-sm w-100">
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