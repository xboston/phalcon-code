<?php

//Устанавливаем параметры
$time   = time();
$values = array(7, $time, $time);

// Выведет "At 3:50:31 PM on Apr 19, 2012, there was a disturbance on planet 7."
$pattern   = "At {1, time} on {1, date}, there was a disturbance on planet {0, number}.";
$formatter = new MessageFormatter("en_US", $pattern);
echo $formatter->format($values);

// Выведет "À 15:53:01 le 19 avr. 2012, il y avait une perturbation sur la planète 7."
$pattern   = "À {1, time} le {1, date}, il y avait une perturbation sur la planète {0, number}.";
$formatter = new MessageFormatter("fr_FR", $pattern);
echo $formatter->format($values);

