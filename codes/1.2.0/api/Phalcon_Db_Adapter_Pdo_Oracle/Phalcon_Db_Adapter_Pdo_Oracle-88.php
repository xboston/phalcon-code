<?php

$statement = $db->prepare('SELECT * FROM robots WHERE name = :name');
$result    = $connection->executePrepared($statement , array( 'name' => 'Voltron' ));




