
	<?php

	// Используйте CLI factory в качестве контейнера ресурсов
	$di = new Phalcon\DI\FactoryDefault\CLI();

	// Создание консольного приложения
	$console = new \Phalcon\CLI\Console();
	$console->setDI($di);

	// Выполнение действия
	$console->handle(array('shell_script_name', 'echo'));

