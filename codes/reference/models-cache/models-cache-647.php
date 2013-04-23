<?php

$robots = Robots::find('id < 1000');
$robots = Robots::find('id > 100 AND type = "A"');
$robots = Robots::find('(id > 100 AND type = "A") AND id < 2000');

$robots = Robots::find(array(
    '(id > ?0 AND type = "A") AND id < ?1',
    'bind' => array(100, 2000),
    'order' => 'type'
));

