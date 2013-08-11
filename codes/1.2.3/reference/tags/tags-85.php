<!-- for the default route -->
<?= $this->tag->linkTo("products/search", "Search") ?>

<!-- with CSS attributes -->
<?= $this->tag->linkTo(array('products/edit/10', 'Edit', 'class' => 'edit-btn')) ?>

<!-- for a named route -->
<?= $this->tag->linkTo(array(array('for' => 'show-product', 'title' => 123, 'name' => 'carrots'), 'Show')) ?>

