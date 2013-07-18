<!-- for the default route -->
<?= Tag::linkTo("products/search" , "Search") ?>

<!-- with CSS attributes -->
<?= Tag::linkTo(array( 'products/edit/10' , 'Edit' , 'class' => 'edit-btn' )) ?>

<!-- for a named route -->
<?= Tag::linkTo(array( array( 'for' => 'show-product' , 'title' => 123 , 'name' => 'carrots' ) , 'Show' )) ?>

