<?php
/**
 * @var String $field_id
 * @var String $field_label
 */
?>
<?php $lines = model("Lines"); ?>
<input type="hidden" name="<?= $field_id ?>" id="<?= $field_id ?>" value="<?= $lines->findOrEmptyString($field_id) ?>">
<div class="mb-3">
    <?= $field_label ?>
    <div class="row mb-3">
        <div class="document-editor__toolbar border-0"></div>
    </div>
    <div class="container bg-light py-4">
        <div class="editor<?= $field_id ?> border shadow-none bg-white" style="min-height: 200px">
            <?= $lines->findOrEmptyString($field_id) ?>
        </div>
    </div>
</div>