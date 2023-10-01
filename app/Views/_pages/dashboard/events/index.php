<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <section>
        <div class="card shadow">
            <div class="card-header">
                <div class="card-title">
                    Events
                </div>
                <div class="card-toolkit">
                    <a class="btn btn-outline-success btn-sm" href="<?= route_to("dashboard.events.create") ?>">
                        Create New
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="article_table">
                        <thead>
                        <tr>
                            <th style="width: 1px">No</th>
                            <th class="w-100">Title</th>
                            <th class="text-nowrap">Publish Date</th>
                            <th class="text-nowrap">Updated Date</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($events as $index => $event): ?>
                            <tr>
                                <td style="vertical-align: center"><?= $index + 1 ?></td>
                                <td style="vertical-align: center">
                                    <?= $event->title ?>
                                </td>
                                <td style="vertical-align: center">
                                    <?= $event->created_at ?>
                                </td>
                                <td style="vertical-align: center">
                                    <?= $event->updated_at ?>
                                </td>
                                <td style="vertical-align: center" class="text-center">
                                    <a class="btn btn-outline-warning btn-sm"
                                       href="<?= route_to("dashboard.events.update", $event->slug) ?>">
                                        Edit
                                    </a>
                                </td>
                                <td style="vertical-align: center" class="text-center">
                                    <form action="<?= route_to("object.events.delete", $event->slug) ?>"
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
</div>
<?= $this->endSection(); ?>

<?= $this->section("javascript") ?>
<script>
    new DataTable('#article_table');
</script>
<?= $this->endSection(); ?>
