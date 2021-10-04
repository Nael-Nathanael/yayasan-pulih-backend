<?php $lines = model("Lines"); ?>

<div class="form-group mb-3">
    <label for="<?= $field_id ?>"><?= $field_label ?></label>
    <input type="text" name="<?= $field_id ?>"
           value="<?= $lines->findOrEmptyString($field_id) ?>"
           id="<?= $field_id ?>" class="form-control">
</div>