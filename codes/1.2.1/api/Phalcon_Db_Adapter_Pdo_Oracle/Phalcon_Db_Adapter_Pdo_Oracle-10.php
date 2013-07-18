<?php

 $config = array(
  "dbname" => "//localhost/dbname",
  "username" => "oracle",
  "password" => "oracle"
 );

 $connection = new Phalcon\Db\Adapter\Pdo\Oracle($config);



