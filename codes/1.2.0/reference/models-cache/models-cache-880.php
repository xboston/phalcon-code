<?php

$phql  = "SELECT * FROM Store\Robots WHERE id = ?0";
$query = $this->modelsManager->createQuery($phql);

for ( $i = 1; $i <= 10; $i++ ) {

    $robots = $query->execute($phql , array( $i ));

    //...
}

