<?php

echo Phalcon\Text::endsWith("Hello" , "llo"); // true
echo Phalcon\Text::endsWith("Hello" , "LLO"); // false
echo Phalcon\Text::endsWith("Hello" , "LLO" , false); // true




