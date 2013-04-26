<?php

// Обработчик выполнится только при наступлении события "beforeSomeTask"
$eventManager->attach('my-component:beforeSomeTask', function($event, $component) {
    //...
});

