<?php

//Basic autoloader
spl_autoload_register(function($className) {
    if (file_exists($className . '.php')) {
        require $className . '.php';
    }
});

