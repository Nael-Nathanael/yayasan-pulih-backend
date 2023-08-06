<?php
/**
 * @var String $field_id
 * @var String $field_group_name
 */

$lines = model("Lines");
?>

<div class="position-relative imagePreview">
    <img src="<?= $lines->findOrPlaceholderImage($field_id) ?>" class="w-100" alt=""
         style="height: 300px; object-fit: cover; cursor: pointer"
         onclick="document.getElementById('<?= $field_id ?>').click()">
    <div class="position-absolute top-50 start-50 translate-middle h3 mb-0 text-warning d-none">
        Click to Change
    </div>
</div>

<form action="<?= route_to('object.lines.upload') ?>" method="post"
      id="<?= $field_id . "_form" ?>" enctype="multipart/form-data">
    <input type="hidden" name="key" value="<?= $field_id ?>">
    <input type="hidden" name="group_name" value="<?= $field_group_name ?>">
    <input class="d-none" id="<?= $field_id ?>"
           name="<?= $field_id ?>"
           onchange="document.getElementById('<?= $field_id . "_form" ?>').submit()"
           type="file">
</form>