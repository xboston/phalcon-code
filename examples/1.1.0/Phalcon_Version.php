<?php
/**
 * Phalcon\Version
 * Выводит внутреннюю информацию о текущей версии ядра Phalcon
 */

/**
 * Выводит идентификатор версии
 * Пример: 1010023
 */
echo Phalcon\Version::getId();
echo PHP_EOL;

/**
 * Выводит название версии версии
 * Пример: 1.1.0 BETA 3
 */
echo Phalcon\Version::get();
echo PHP_EOL;