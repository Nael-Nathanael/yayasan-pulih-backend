<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container">
        <section>
            <div class="card">
                <div class="card-header bg-transparent">
                    Contact Request
                </div>
                <div class="card-body">
                    <table class="table table-borderless table-hover">
                        <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Content</th>
                            <th style="width: 1px">Approve</th>
                            <th style="width: 1px">Reject</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $index => $datum): ?>
                            <tr>
                                <td>
                                    <?= $datum->subject ?>
                                </td>
                                <td>
                                    <?= $datum->content ?>
                                </td>
                                <td>
                                    <a href="<?= route_to("dashboard.contact.approve", $datum->id) ?>"
                                       class="btn btn-primary btn-sm">
                                        Approve
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= route_to("dashboard.contact.delete", $datum->id) ?>"
                                       class="btn btn-danger btn-sm">
                                        Reject
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
<?= $this->endSection(); ?>