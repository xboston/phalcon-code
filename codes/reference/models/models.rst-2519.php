
    <?php

    $di['modelsMetadata'] = function() {

        // Instantiate a meta-data adapter
        $metaData = new \Phalcon\Mvc\Model\MetaData\Apc(array(
            "lifetime" => 86400,
            "prefix"   => "my-prefix"
        ));

        //Set a custom meta-data introspection strategy
        $metaData->setStrategy(new MyInstrospectionStrategy());

        return $metaData;
    };

