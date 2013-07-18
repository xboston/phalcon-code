<?php

$login = 'voltron';
$phql = "SELECT * FROM Models\Users WHERE login = '$login'";
$result = $manager->executeQuery($phql);

