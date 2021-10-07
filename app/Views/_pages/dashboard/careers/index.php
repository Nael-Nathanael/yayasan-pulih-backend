<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<?php
?>
    <div class="container">
        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Career at Altha
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">

                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "CAREERS",
                                    "field_id" => "CAREERS_BANNER_IMAGE",
                                ]
                            ) ?>

                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "CAREERS") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Headline",
                                            "id" => "CAREERS_BANNER_HEADLINE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "CAREERS_BANNER_DESCRIPTION",
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
                        Separator Image
                    </div>
                </div>
                <div class="card-body">
                    <?= view("_components/LinesImageClickToChangeField",
                        [
                            "field_group_name" => "CAREERS",
                            "field_id" => "CAREERS_SEPARATOR_IMAGE",
                        ]
                    ) ?>
                </div>
            </div>
        </section>

        <section>
            <form action="<?= route_to("object.lines.update", "CAREERS") ?>" class="card shadow"
                  method="post">
                <div class="card-header">
                    <div class="card-title">
                        Why Joinning Altha
                    </div>
                </div>
                <div class="card-body">
                    <?= view("_components/LinesField",
                        [
                            "field_label" => "Headline",
                            "field_id" => "CAREERS_WHY_JOINNING_HEADLINE",
                        ]
                    ) ?>

                    <?= view("_components/LinesTextArea",
                        [
                            "field_label" => "1st Descriptions for Why Joinning Altha",
                            "field_id" => "CAREERS_WHY_JOINNING_DESCRIPTION_1",
                        ]
                    ) ?>

                    <?= view("_components/LinesTextArea",
                        [
                            "field_label" => "2nd Descriptions for Why Joinning Altha",
                            "field_id" => "CAREERS_WHY_JOINNING_DESCRIPTION_2",
                        ]
                    ) ?>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-outline-primary">
                        Save Changes
                    </button>
                </div>
            </form>
        </section>

        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Life at Altha
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form method="post" action="<?= route_to('object.lines.update', "CAREERS") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "CAREERS_LIFE_AT_ALTHA_DESCRIPTION",
                                        ],
                                    ]
                                ]
                            ) ?>
                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                Save Changes
                            </button>
                        </form>
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "CAREERS",
                                    "field_id" => "CAREERS_LIFE_AT_ALTHA_IMAGE",
                                ]
                            ) ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="card shadow">
                <div class="card-header">
                    <div class="card-title">
                        Tailor Your Own Path 1
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "CAREERS",
                                    "field_id" => "CAREERS_TAILOR_PATH_1_IMAGE",
                                ]
                            ) ?>

                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "CAREERS") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Tag",
                                            "id" => "CAREERS_TAILOR_PATH_1_TAG",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Keyword",
                                            "id" => "CAREERS_TAILOR_PATH_1_KEYWORD",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Title",
                                            "id" => "CAREERS_TAILOR_PATH_1_TITLE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "CAREERS_TAILOR_PATH_1_DESCRIPTION",
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
                        Tailor Your Own Path 2
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "CAREERS",
                                    "field_id" => "CAREERS_TAILOR_PATH_2_IMAGE",
                                ]
                            ) ?>

                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "CAREERS") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Tag",
                                            "id" => "CAREERS_TAILOR_PATH_2_TAG",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Keyword",
                                            "id" => "CAREERS_TAILOR_PATH_2_KEYWORD",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Title",
                                            "id" => "CAREERS_TAILOR_PATH_2_TITLE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "CAREERS_TAILOR_PATH_2_DESCRIPTION",
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
                        Tailor Your Own Path 3
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "CAREERS",
                                    "field_id" => "CAREERS_TAILOR_PATH_3_IMAGE",
                                ]
                            ) ?>

                        </div>
                        <form method="post" action="<?= route_to('object.lines.update', "CAREERS") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Tag",
                                            "id" => "CAREERS_TAILOR_PATH_3_TAG",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Keyword",
                                            "id" => "CAREERS_TAILOR_PATH_3_KEYWORD",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Title",
                                            "id" => "CAREERS_TAILOR_PATH_3_TITLE",
                                        ],
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "CAREERS_TAILOR_PATH_3_DESCRIPTION",
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
                        How to Join Us
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <?= view("_components/LinesImageClickToChangeField",
                                [
                                    "field_group_name" => "CAREERS",
                                    "field_id" => "CAREERS_HOW_TO_JOIN_IMAGE",
                                ]
                            ) ?>
                        </div>

                        <form method="post" action="<?= route_to('object.lines.update', "CAREERS") ?>" class="col-6">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesTextArea",
                                            "label" => "Description",
                                            "id" => "CAREERS_HOW_TO_JOIN_DESCRIPTION",
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
    </div>
<?= $this->endSection(); ?>