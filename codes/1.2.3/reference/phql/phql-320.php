<?php

$phql = 'SELECT Brands.name, Songs.name FROM Artists ' .
        'JOIN Songs WHERE Artists.genre = "Trip-Hop"';
$result = $this->modelsManager->query($phql);

