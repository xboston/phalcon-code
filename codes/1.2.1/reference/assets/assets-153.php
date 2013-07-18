<?php

$manager

    //These Javascripts are located in the page's bottom
    ->collection('jsFooter')

    //The name of the final output
    ->setTargetPath('final.js')

    //The script tag is generated with this URI
    ->setTargetUri('production/final.js')

    //This is a remote resource that does not need filtering
    ->addJs('code.jquery.com/jquery-1.10.0.min.js', true, false)

    //These are local resources that must be filtered
    ->addJs('common-functions.js')
    ->addJs('page-functions.js')

    //Join all the resources in a single file
    ->join(true)

    //Use the built-in Jsmin filter
    ->addFilter(new Phalcon\Assets\Filters\Jsmin())

    //Use a custom filter
    ->addFilter(new MyApp\Assets\Filters\LicenseStamper());

