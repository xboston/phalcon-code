<?php

//Using the CLI factory default services container
$di = new Phalcon\DI\FactoryDefault\CLI();

//Create a console application
$console = new \Phalcon\CLI\Console();
$console->setDI($di);

//
$console->handle(array('shell_script_name', 'echo'));

