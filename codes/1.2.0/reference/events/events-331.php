<?php

$evManager->enablePriorities(true);

$evManager->attach('db' , new DbListener() , 150); //More priority
$evManager->attach('db' , new DbListener() , 100); //Normal priority
$evManager->attach('db' , new DbListener() , 50); //Less priority

