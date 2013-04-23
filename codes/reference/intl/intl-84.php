<?php

// Создаем коллатор, использующий испанскую локаль
$collator = new Collator("es");

// Результат сравнения будет положительный, несмотря на ударение над "о"
$collator->setStrength(Collator::PRIMARY);
var_dump($collator->compare("una canción", "una cancion"));

// Результат сравнения будет отрицательный
$collator->setStrength(Collator::DEFAULT);
var_dump($collator->compare("una canción", "una cancion"));

