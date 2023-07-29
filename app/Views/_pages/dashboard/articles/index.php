<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container">
        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Articles
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">

                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "ARTICLES",
                                    "field_id" => "ARTICLES_BANNER_IMAGE",
                                ]
                            ) ?>

                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "ARTICLES") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Headline",
                                            "id" => "ARTICLES_BANNER_HEADLINE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "ARTICLES_BANNER_DESCRIPTION",
                                        ],
                                    ]
                                ]
                            ) ?>
                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                Save Changes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Articles
                    </div>
                    <div class="card-toolkit">
                        <a class="btn btn-outline-success btn-sm" href="<?= route_to("dashboard.articles.create") ?>">
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
                                <th class="w-100">Title</th>
                                <th class="text-nowrap">Publish Date</th>
                                <th class="text-nowrap">Updated Date</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($articles as $index => $article): ?>
                                <tr>
                                    <td style="vertical-align: center"><?= $index + 1 ?></td>
                                    <td style="vertical-align: center">
                                        <?= $article->title ?>
                                    </td>
                                    <td style="vertical-align: center">
                                        <?= $article->created_at ?>
                                    </td>
                                    <td style="vertical-align: center">
                                        <?= $article->updated_at ?>
                                    </td>
                                    <td style="vertical-align: center" class="text-center">
                                        <a class="btn btn-outline-warning btn-sm"
                                           href="<?= route_to("dashboard.articles.update", $article->slug) ?>">
                                            Edit
                                        </a>
                                    </td>
                                    <td style="vertical-align: center" class="text-center">
                                        <form action="<?= route_to("object.articles.delete", $article->slug) ?>"
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