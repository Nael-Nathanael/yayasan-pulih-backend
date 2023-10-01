<?php /** @var Array $fields */
foreach ($fields as $field): ?>
    <?= view("_components/" . $field['type'],
        [
            "field_label" => $field['label'] ?? "",
            "field_id" => $field['id'] ?? "",
            "field_group_name" => $field['group_name'] ?? "",
        ]
    ) ?>
<?php endforeach; ?>
