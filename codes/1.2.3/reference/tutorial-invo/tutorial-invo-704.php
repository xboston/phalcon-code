<div>
    <label for="product_types_id">Product Type</label>
    <?php echo $this->tag->select(array(
        "product_types_id",
        $productTypes,
        "using" => array("id", "name"),
        "useDummy" => true
    )) ?>
</div>

