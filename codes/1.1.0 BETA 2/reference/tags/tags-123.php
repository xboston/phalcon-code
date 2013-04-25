<?php use \Phalcon\Tag as Tag; ?>

<!-- Отправка формы методом POST -->
<?= Tag::form("products/search") ?>
    <label for="q">Search:</label>
    <?= Tag::textField("q") ?>
    <?= Tag::submitButton("Search") ?>
</form>

<!-- Использование специфичного для элемента FORM тега - метода отправки данных -->
<?= Tag::form(array("products/search", "method" => "get")); ?>
    <label for="q">Search:</label>
    <?= Tag::textField("q"); ?>
    <?= Tag::submitButton("Search"); ?>
</form>

