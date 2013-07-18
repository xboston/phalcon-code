<?php echo Phalcon\Tag::javascriptInclude("js/jquery.js") ?>

<?php echo Phalcon\Tag::form(array( 'products/save' , 'method' => 'post' )); ?>

<label>Name</label>
<?php echo Phalcon\Tag::textField(array( 'name' , 'size' => 32 )); ?>

<label>Type</label>
<?php echo Phalcon\Tag::select(array( 'type' , $productTypes , 'using' => array( 'id' , 'name' ) )); ?>

<?php echo Phalcon\Tag::submitButton('Send'); ?>

</form>

