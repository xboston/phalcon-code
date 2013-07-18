<?php

$subscriber             = new Subscribers();
$subscriber->email      = 'andres@phalconphp.com';
$subscriber->created_at = new Phalcon\Db\RawValue('now()');
$subscriber->save();



