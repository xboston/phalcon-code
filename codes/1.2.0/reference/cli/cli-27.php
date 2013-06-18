<?php

use Phalcon\DI\FactoryDefault\CLI as CliDI,
    Phalcon\CLI\Console as ConsoleApp;

//Using the CLI factory default services container
$di = new CliDI();

//Create a console application
$console = new ConsoleApp();
$console->setDI($di);

//
$console->handle(array('task' => 'shell_script_name', 'action' => 'echo'));

