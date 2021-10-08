<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container">
        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        <?= $webinar->title ?>
                    </div>
                    <div class="card-toolkit">
                        <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#presenter_create_modal">
                            Add Presenter
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width: 1px">No</th>
                                <th>Name</th>
                                <th>Profile Link</th>
                                <th class="text-center">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($presenters as $index => $presenter): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <?= $presenter->name ?>
                                    </td>
                                    <td>
                                        <?= $presenter->link ?>
                                    </td>
                                    <td class="text-center">
                                        <form action="<?= route_to("object.presenters.delete", $presenter->id) ?>"
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

    <!-- Modal -->
    <div class="modal fade" id="presenter_create_modal" tabindex="-1"
         aria-labelledby="presenter_create_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <form action="<?= route_to("object.presenters.create", $webinar->id) ?>" method="post"
                  class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="presenter_create_modalLabel">Add Presenter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Headline"
                               required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="link" name="link" placeholder="Profile Link">
                        <label for="link">Profile Link</label>
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