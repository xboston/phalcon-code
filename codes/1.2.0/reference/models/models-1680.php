<?php

$robot             = new Robots();
$robot->name       = 'Bender';
$robot->year       = 1999;
$robot->created_at = new \Phalcon\Db\RawValue('default');
$robot->create();

