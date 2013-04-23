
    <?php

    $sql = "SELECT id, name FROM robots ORDER BY name";
    $result = $connection->query($sql);

    $result->setFetchMode(Phalcon\Db::DB_NUM);
    while ($robot = $result->fetch()) {
       echo $robot[0];
    }

