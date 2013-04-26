<?php

$robot = new Robots();

// Get Phalcon\Mvc\Model\Metadata instance
$metaData = $robot->getModelsMetaData();

// Get robots fields names
$attributes = $metaData->getAttributes($robot);
print_r($attributes);

// Get robots fields data types
$dataTypes = $metaData->getDataTypes($robot);
print_r($dataTypes);

