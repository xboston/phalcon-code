<?php

for ( $i = 1; $i <= 10; $i++ ) {

    $phql   = "SELECT * FROM Store\Robots WHERE id = " . $i;
    $robots = $this->modelsManager->executeQuery($phql);

    //...
}

