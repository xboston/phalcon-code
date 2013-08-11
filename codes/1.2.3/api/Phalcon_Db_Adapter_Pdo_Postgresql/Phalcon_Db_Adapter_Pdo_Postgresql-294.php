<?php

//Getting all robots with associative indexes only
$robots = $connection->fetchAll("SELECT * FROM robots", Phalcon\Db::FETCH_ASSOC);
foreach ($robots as $robot) {
    print_r($robot);
}

  //Getting all robots that contains word "robot" withing the name
  $robots = $connection->fetchAll("SELECT * FROM robots WHERE name LIKE :name",
    Phalcon\Db::FETCH_ASSOC,
    array('name' => '%robot%')
  );
foreach($robots as $robot){
    print_r($robot);
}




