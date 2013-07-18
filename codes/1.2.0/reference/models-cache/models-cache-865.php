<?php

$phql = "SELECT * FROM Store\Robots WHERE id = ?0";

for ( $i = 1; $i <= 10; $i++ ) {

    $robots = $this->modelsManager->executeQuery($phql , array( $i ));

    //...
}

