<?php

//Use the built-in Jsmin filter
$js->addFilter(new Phalcon\Assets\Filters\Jsmin());

//Use a custom filter
$js->addFilter(new MyApp\Assets\Filters\LicenseStamper());

