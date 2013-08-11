<?php

// Just append the .php extension to the template path
// leaving the compiled templates in the same directory
$volt->setOptions(array(
    'compiledPath' => function($templatePath) {
        return $templatePath . '.php';
    }
));

// ​​Recursively create the same structure in another directory
$volt->setOptions(array(
    'compiledPath' => function($templatePath) {
        $dirName = dirname($templatePath);
        if (!is_dir('cache/' . $dirName)) {
            mkdir('cache/' . $dirName);
        }
        return 'cache/' . $dirName . '/'. $templatePath . '.php';
    }
));

