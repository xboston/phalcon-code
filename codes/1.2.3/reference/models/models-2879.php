<?php

use Phalcon\Mvc\Model\MetaData\Apc as ApcMetaData,
    Phalcon\Mvc\Model\MetaData\Strategy\Annotations as StrategyAnnotations;

$di['modelsMetadata'] = function() {

    // Instantiate a meta-data adapter
    $metaData = new ApcMetaData(array(
        "lifetime" => 86400,
        "prefix"   => "my-prefix"
    ));

    //Set a custom meta-data database introspection
    $metaData->setStrategy(new StrategyAnnotations());

    return $metaData;
};

