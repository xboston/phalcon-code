<?php

try {

  $connection = new Phalcon\Db\Adapter\Pdo\Mysql(array(
     'host' => '192.168.0.11',
     'username' => 'sigma',
     'password' => 'secret',
     'dbname' => 'blog',
     'port' => '3306',
  ));

  $result = $connection->query("SELECT * FROM robots LIMIT 5");
  $result->setFetchMode(Phalcon\Db::FETCH_NUM);
  while($robot = $result->fetch()){
    print_r($robot);
  }

} catch(Phalcon\Db\Exception $e){
echo $e->getMessage(), PHP_EOL;
}



