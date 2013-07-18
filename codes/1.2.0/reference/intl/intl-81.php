<?php

// Create a collator using Spanish locale
$collator = new Collator("es");

// Returns that the strings are equal, in spite of the emphasis on the "o"
$collator->setStrength(Collator::PRIMARY);
var_dump($collator->compare("una canción" , "una cancion"));

// Returns that the strings are not equal
$collator->setStrength(Collator::DEFAULT_VALUE);
var_dump($collator->compare("una canción" , "una cancion"));

