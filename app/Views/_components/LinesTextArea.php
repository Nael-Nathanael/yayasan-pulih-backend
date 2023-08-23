<?php
/**
 * @var String $field_id
 * @var String $field_label
 */
?>

<?php $lines = model("Lines"); ?>

<div class="form-floating mb-3">
    <textarea style="min-height: 200px" type="text" name="<?= $field_id ?>"
              id="<?= $field_id ?>"
              class="form-control autosaving_field"><?= $lines->findOrEmptyString($field_id) ?></textarea>
    <label for="<?= $field_id ?>"><?= $field_label ?></label>
</div>