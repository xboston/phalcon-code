<?php

echo Phalcon\Text::startsWith("Hello", "He"); // true
  echo Phalcon\Text::startsWith("Hello", "he"); // false
  echo Phalcon\Text::startsWith("Hello", "he", false); // true




