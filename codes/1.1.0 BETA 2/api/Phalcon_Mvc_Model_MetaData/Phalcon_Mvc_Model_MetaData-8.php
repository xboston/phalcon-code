<?php

$metaData = new Phalcon\Mvc\Model\MetaData\Memory();
$attributes = $metaData->getAttributes(new Robots());
print_r($attributes);



