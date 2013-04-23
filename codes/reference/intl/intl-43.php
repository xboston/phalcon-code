<?php

// Выведет € 4 560
$formatter = new MessageFormatter("fr_FR", "€ {0, number, integer}");
echo $formatter->format(array(4560));

// Выведет USD$ 4,560.5
$formatter = new MessageFormatter("en_US", "USD$ {0, number}");
echo $formatter->format(array(4560.50));

// Выведет ARS$ 1.250,25
$formatter = new MessageFormatter("es_AR", "ARS$ {0, number}");
echo $formatter->format(array(1250.25));

