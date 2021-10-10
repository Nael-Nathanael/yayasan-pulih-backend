<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container">
        <section>
            <div class="card card-body shadow">
                <form method="post" action="<?= route_to('object.lines.update', "CAREERS") ?>">
                    <?= view("_components/LinesFieldGroup",
                        [
                            "fields" => [
                                [
                                    "type" => "LinesField",
                                    "label" => "Headline",
                                    "id" => "INSIGHTS_BANNER_HEADLINE",
                                ],
                                [
                                    "type" => "LinesTextArea",
                                    "label" => "Description",
                                    "id" => "INSIGHTS_BANNER_DESCRIPTION",
                                ],
                            ]
                        ]
                    ) ?>
                    <button type="submit" class="btn btn-sm btn-outline-primary">
                        Save Changes
                    </button>
                </form>
            </div>
        </section>
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
                                <th class="text-center">Headline</th>
                                <th class="text-center">Recommend</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($insights as $index => $insight): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <?= $insight->title ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if (!$headline || $insight->slug != $headline->slug): ?>
                                            <form action="<?= route_to("object.lines.update", "INSIGHTS") ?>"
                                                  method="post">
                                                <input type="hidden" name="HEADLINE_SLUG" value="<?= $insight->slug ?>">
                                                <button type="submit" class="btn btn-outline-success btn-sm">
                                                    Set as Headline
                                                </button>
                                            </form>
                                        <?php else: ?>
                                            <button disabled class="btn btn-success btn-sm">
                                                This is Headline
                                            </button>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-wrap w-100 justify-content-center">
                                            <?php if (!$recom_1 || $insight->slug != $recom_1->slug): ?>
                                                <form action="<?= route_to("object.lines.update", "INSIGHTS") ?>"
                                                      method="post">
                                                    <input type="hidden" name="INSIGHT_RECOM_1_SLUG"
                                                           value="<?= $insight->slug ?>">
                                                    <button type="submit" class="btn btn-outline-success btn-sm mx-1">
                                                        1
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <button disabled class="btn btn-success btn-sm mx-1">
                                                    1
                                                </button>
                                            <?php endif; ?>

                                            <?php if (!$recom_2 || $insight->slug != $recom_2->slug): ?>
                                                <form action="<?= route_to("object.lines.update", "INSIGHTS") ?>"
                                                      method="post">
                                                    <input type="hidden" name="INSIGHT_RECOM_2_SLUG"
                                                           value="<?= $insight->slug ?>">
                                                    <button type="submit" class="btn btn-outline-success btn-sm mx-1">
                                                        2
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <button disabled class="btn btn-success btn-sm mx-1">
                                                    2
                                                </button>
                                            <?php endif; ?>

                                            <?php if (!$recom_3 || $insight->slug != $recom_3->slug): ?>
                                                <form action="<?= route_to("object.lines.update", "INSIGHTS") ?>"
                                                      method="post">
                                                    <input type="hidden" name="INSIGHT_RECOM_3_SLUG"
                                                           value="<?= $insight->slug ?>">
                                                    <button type="submit" class="btn btn-outline-success btn-sm mx-1">
                                                        3
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <button disabled class="btn btn-success btn-sm mx-1">
                                                    3
                                                </button>
                                            <?php endif; ?>

                                            <?php if (!$recom_4 || $insight->slug != $recom_4->slug): ?>
                                                <form action="<?= route_to("object.lines.update", "INSIGHTS") ?>"
                                                      method="post">
                                                    <input type="hidden" name="INSIGHT_RECOM_4_SLUG"
                                                           value="<?= $insight->slug ?>">
                                                    <button type="submit" class="btn btn-outline-success btn-sm mx-1">
                                                        4
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <button disabled class="btn btn-success btn-sm mx-1">
                                                    4
                                                </button>
                                            <?php endif; ?>

                                            <?php if (!$recom_5 || $insight->slug != $recom_5->slug): ?>
                                                <form action="<?= route_to("object.lines.update", "INSIGHTS") ?>"
                                                      method="post">
                                                    <input type="hidden" name="INSIGHT_RECOM_5_SLUG"
                                                           value="<?= $insight->slug ?>">
                                                    <button type="submit" class="btn btn-outline-success btn-sm mx-1">
                                                        5
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <button disabled class="btn btn-success btn-sm mx-1">
                                                    5
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-warning btn-sm"
                                           href="<?= route_to("dashboard.insights.update", $insight->slug) ?>">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= route_to("object.insights.delete", $insight->slug) ?>"
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