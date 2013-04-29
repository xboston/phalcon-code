<?php use \Phalcon\Tag as Tag; ?>

<!-- Sending the form by method POST -->
<?= Tag::form("products/search") ?>
    <label for="q">Search:</label>
    <?= Tag::textField("q") ?>
    <?= Tag::submitButton("Search") ?>
</form>

<!-- Specyfing another method or attributes for the FORM tag -->
<?= Tag::form(array("products/search", "method" => "get")); ?>
    <label for="q">Search:</label>
    <?= Tag::textField("q"); ?>
    <?= Tag::submitButton("Search"); ?>
</form>

