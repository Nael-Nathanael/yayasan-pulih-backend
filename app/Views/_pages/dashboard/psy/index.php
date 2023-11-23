<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<?php $model = model("PsyModel"); ?>
<div class="container my-2">
    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Psikolog</h5>

            <a href="<?= route_to("dashboard.psy.create") ?>" class="btn btn-sm btn-primary">
                Register Psikolog
            </a>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <div class="text-center text-white card card-body bg-primary">
                <div class="h5">
                    Total Psikolog
                </div>
                <div class="h3">
                    <?= $model->countAll() ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center text-white card card-body bg-primary">
                <div class="h5">
                    Total Psikolog - Klinis Anak dan Remaja
                </div>
                <div class="h3">
                    <?= $model->where("spesialisasi", "Klinis Anak dan Remaja")->countAllResults() ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="text-center text-white card card-body bg-primary">
                <div class="h5">
                    Total Psikolog - Klinis Dewasa
                </div>
                <div class="h3">
                    <?= $model->where("spesialisasi", "Klinis Dewasa")->countAllResults() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="psy_table">
                    <thead>
                    <tr class="text-center">
                        <th nowrap width="1">No</th>
                        <th style="min-width: 100px" nowrap>Photo</th>
                        <th style="min-width: 300px" nowrap>Name</th>
                        <th style="min-width: 100px" nowrap>Spesialisasi</th>
                        <th style="width: 1px">Edit</th>
                        <th style="width: 1px">Hapus</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($model->countAll() == 0): ?>
                        <tr>
                            <td colspan="12" class="text-center">No Data</td>
                        </tr>
                    <?php endif; ?>
                    <?php foreach ($model->findAll() as $key => $item): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td>
                                <img src="<?= $item->photo ?>" height="100" width="100"
                                     style="object-fit: cover; border-radius: 100%; object-position: center"
                                     alt="<?= $item->name ?>"/>
                            </td>
                            <td><?= $item->name ?>
                                <div class="my-1"></div>
                                <small class="text-secondary fw-bold" style="font-size: 12px; line-height: 1px">
                                    SIPP: <?= $item->SIPP ?>
                                </small>
                                <br>
                                <small class="text-secondary fw-bold" style="font-size: 12px; line-height: 1px">
                                    STR: <?= $item->STR ?>
                                </small>
                            </td>
                            <td><?= $item->spesialisasi ?></td>
                            <td>
                                <a href="<?= route_to("dashboard.psy.update", $item->slug) ?>"
                                   class="btn btn-warning btn-sm" style="min-width: 70px">
                                    <i class="bi bi-pen"></i> Edit
                                </a>
                            </td>
                            <td>
                                <form action="<?= route_to("object.psy.delete", $item->slug) ?>"
                                      method="post" id="formdelete_<?= $item->slug ?>">
                                    <button
                                            onclick="
                                                    if (confirm('Delete this Psikolog?')) {
                                                    document.getElementById('formdelete_<?= $item->slug ?>').submit()
                                                    }
                                                    "
                                            type="button" class="btn btn-outline-danger btn-sm" style="min-width: 70px">
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


<?= $this->section("javascript") ?>
<script>
    new DataTable('#psy_table');
</script>
<?= $this->endSection(); ?>
