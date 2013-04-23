<?php

$expireDate = new DateTime();
$expireDate->modify('+2 months');

$response->setExpires($expireDate);

