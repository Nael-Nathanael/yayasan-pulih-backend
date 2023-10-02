<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
<div class="container py-2">
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="w-100">
                        <?= view("_components/LinesFieldGroup",
                            [
                                "fields" => [
                                    [
                                        "type" => "LinesField",
                                        "label" => "Kategori",
                                        "id" => "HOME_BANNER_TAG",
                                    ],
                                    [
                                        "type" => "CKEDITOR",
                                        "label" => "Headline",
                                        "id" => "HOME_BANNER_HEADLINE",
                                    ],
                                ]
                            ]
                        ) ?>

                        <div class="d-flex justify-content-between">
                            <?= view("_components/LinesFieldGroup",
                                [
                                    "fields" => [
                                        [
                                            "type" => "LinesField",
                                            "label" => "Button Text",
                                            "id" => "HOME_BANNER_BUTTON_TEXT",
                                        ],
                                        [
                                            "type" => "HorizontalSeparator",
                                        ],
                                        [
                                            "type" => "LinesField",
                                            "label" => "Button URL",
                                            "id" => "HOME_BANNER_BUTTON_URL",
                                        ],
                                    ]
                                ]
                            ) ?>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <?= view("_components/LinesImageClickToChangeField",
                        [
                            "field_group_name" => "HOME",
                            "field_id" => "HOME_BANNER_IMAGE",
                        ]
                    ) ?>
                </div>
            </div>
        </div>
    </div>
    <?= view("_components/LinesFieldGroup",
        [
            "fields" => [
                [
                    "type" => "LinesField",
                    "label" => "Judul Bagian 'Acara'",
                    "id" => "HOME_ACARA_TITLE",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Judul Bagian 'Artikel'",
                    "id" => "HOME_ARTIKEL_TITLE",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Judul Bagian 'Mitra'",
                    "id" => "HOME_MITRA_TITLE",
                ],
            ]
        ]
    ) ?>
    <hr class="my-5">
    <?= view("_components/LinesFieldGroup",
        [
            "fields" => [
                [
                    "type" => "LinesField",
                    "label" => "Teks ajakan donasi",
                    "id" => "HOME_DONATE_FULLTEXT",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Teks pada tombol donasi",
                    "id" => "HOME_DONATE_BUTTON_TEXT",
                ],
            ]
        ]
    ) ?>
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <label for="">Gambar di belakang kotak Donasi</label>
            <?= view("_components/LinesImageClickToChangeField",
                [
                    "field_group_name" => "HOME",
                    "field_id" => "HOME_DONATE_IMAGE",
                ]
            ) ?>
        </div>
    </div>

    <hr class="my-5">

    <?= view("_components/LinesFieldGroup",
        [
            "fields" => [
                [
                    "type" => "LinesField",
                    "label" => "Hubungi Kami Judul",
                    "id" => "CONTACT_TITLE",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Link Youtube",
                    "id" => "CONTACT_YOUTUBE_LINK",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Link Facebook",
                    "id" => "CONTACT_FACEBOOK_LINK",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Link Twitter",
                    "id" => "CONTACT_TWITTER_LINK",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Link Instagram",
                    "id" => "CONTACT_INSTAGRAM_LINK",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Link LinkedIn",
                    "id" => "CONTACT_LINKEDIN_LINK",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Link Tiktok",
                    "id" => "CONTACT_TIKTOK_LINK",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Call 1",
                    "id" => "CONTACT_PHONE_1_TEXT",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Call 2",
                    "id" => "CONTACT_PHONE_2_TEXT",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Nomor WhatsApp",
                    "id" => "CONTACT_WA_TEXT",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Link WhatsApp",
                    "id" => "CONTACT_WA_LINK",
                ],
                [
                    "type" => "LinesField",
                    "label" => "Email",
                    "id" => "CONTACT_EMAIL",
                ],
            ]
        ]
    ) ?>
</div>
<?= $this->endSection(); ?>

