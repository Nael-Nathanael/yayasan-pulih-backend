<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<?php
/**
 * @var Array $carouselBanners
 * @var Array $teams
 */
?>
    <div class="container">
        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Articles
                    </div>
                    <div class="card-toolkit">
                        <a class="btn btn-outline-success btn-sm" href="<?= route_to("dashboard.insights.create") ?>">
                            Create New
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width: 1px">No</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($insights as $index => $insight): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <?= $insight->title ?>
                                    </td>
                                    <td>
                                        <?= $insight->subtitle ?>
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