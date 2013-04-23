<?php

$di['modelsMetadata'] = function() {

    // Instantiate a meta-data adapter
    $metaData = new \Phalcon\Mvc\Model\MetaData\Apc(array(
        "lifetime" => 86400,
        "prefix"   => "my-prefix"
    ));

    //Set a custom meta-data database introspection
    $metaData->setStrategy(new \Phalcon\Mvc\Model\MetaData\Strategy\Annotations());

    return $metaData;
};

