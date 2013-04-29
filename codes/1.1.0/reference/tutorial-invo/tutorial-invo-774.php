<?php

$products = Products::find($parameters);
if (count($products) == 0) {
    $this->flash->notice("The search did not found any products");
    return $this->forward("products/index");
}

