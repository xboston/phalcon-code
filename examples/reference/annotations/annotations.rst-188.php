
	<?php

	$di['dispatcher'] = function() {

		$eventsManager = new \Phalcon\Events\Manager();

		//Привязать плагин к событию 'dispatch'
		$eventsManager->attach('dispatch', new CacheEnablerPlugin());

		$dispatcher = new \Phalcon\Mvc\Dispatcher();
		$dispatcher->setEventsManager($eventsManager);
		return $dispatcher;
	};

