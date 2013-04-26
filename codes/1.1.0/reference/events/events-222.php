<?php

// Создаём менеджер событий
$eventsManager = new Phalcon\Events\Manager();

// Создаём экземпляр MyComponent
$myComponent = new MyComponent();

// Связываем компонент и менеджер событий
$myComponent->setEventsManager($myComponent);

// Связываем слушателя и менеджер событий
$eventsManager->attach('my-component', new SomeListener());

// Выполняем метод нашего компонента
$myComponent->someTask();

