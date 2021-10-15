<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <section>
        <div class="container-fluid">
            <div class="card card-body">
                <?= view("_components/LinesImageClickToChangeField",
                    [
                        "field_group_name" => "SERVICES",
                        "field_id" => "SERVICES_BANNER_IMAGE",
                    ]
                ) ?>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <a href="<?= route_to("dashboard.service.business_and_risk.index") ?>" class="text-decoration-none">
                        <div class="card card-body shadow-sm text-center">
                            Business and Risk Advisory
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?= route_to("dashboard.service.it.index") ?>" class="text-decoration-none">
                        <div class="card card-body shadow-sm text-center">
                            IT Advisory
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="<?= route_to("dashboard.service.people.index") ?>" class="text-decoration-none">
                        <div class="card card-body shadow-sm text-center">
                            People Advisory
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>