<!-- для стандартных путей -->
<?= Tag::linkTo("products/search", "Search") ?>

<!-- используя CSS -->
<?= Tag::linkTo(array('products/edit/10', 'Edit', 'class' => 'edit-btn')) ?>

<!-- для именованных маршрутов -->
<?= Tag::linkTo(array(array('for' => 'show-product', 'title' => 123, 'name' => 'carrots'), 'Show')) ?>

