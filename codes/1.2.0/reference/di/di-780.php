<?php

//Register the session service as "always shared"
$di->set('session', function() {
    //...
}, true);

