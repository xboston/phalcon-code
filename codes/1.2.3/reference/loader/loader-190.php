<?php

//This variable is not filtered and comes from an insecure source
$className = '../processes/important-process';

//Check if the class exists triggering the auto-loader
if (class_exists($className)) {
    //...
}

