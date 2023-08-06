<?php
/**
 * @var String $field_id
 * @var String $field_label
 */
?>
<?php $lines = model("Lines"); ?>

<div class="form-floating mb-3 w-100">
    <input type="text" name="<?= $field_id ?>"
           value="<?= $lines->findOrEmptyString($field_id) ?>"
           id="<?= $field_id ?>" class="form-control w-100">
    <label for="<?= $field_id ?>"><?= $field_label ?></label>
</div>