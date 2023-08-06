<?php
if (!function_exists('summon_image_field')) {
    function summon_image_field(string $field_group_name, string $field_id): string
    {
        return view("_components/LinesImageClickToChangeField",
            [
                "field_group_name" => $field_group_name,
                "field_id" => $field_id,
            ]
        );
    }
}