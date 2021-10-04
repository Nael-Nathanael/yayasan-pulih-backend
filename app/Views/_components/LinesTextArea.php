<?php
/**
 * @var String $field_id
 * @var String $field_label
 */
?>

<?php $lines = model("Lines"); ?>

<div class="form-group mb-3">
    <label for="<?= $field_id ?>"><?= $field_label ?></label>
    <textarea rows="4" type="text" name="<?= $field_id ?>"
              id="<?= $field_id ?>"
              class="form-control"><?= $lines->findOrEmptyString($field_id) ?></textarea>
</div>