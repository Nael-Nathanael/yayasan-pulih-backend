<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container">
        <section>
            <div class="row">
                <div class="col-6">
                    <a class="text-decoration-none" href="<?= route_to("dashboard.lowongan.pekerjaan") ?>">
                        <div class="btn btn-outline-primary card card-body card-border-0 shadow-sm">
                            Lowongan Pekerjaan
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a class="text-decoration-none" href="<?= route_to("dashboard.lowongan.magang") ?>">
                        <div class="btn btn-outline-primary card card-body card-border-0 shadow-sm">
                            Lowongan Magang
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
<?= $this->endSection(); ?>