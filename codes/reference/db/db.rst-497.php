
    <?php

    use \Phalcon\Db\Column as Column;

    $connection->createTable(
        "robots",
        null,
        array(
           "columns" => array(
                new Column(
                    "id",
                    array(
                        "type"          => Column::TYPE_INTEGER,
                        "size"          => 10,
                        "notNull"       => true,
                        "autoIncrement" => true,
                    )
                ),
                new Column(
                    "name",
                    array(
                        "type"    => Column::TYPE_VARCHAR,
                        "size"    => 70,
                        "notNull" => true,
                    )
                ),
                new Column(
                    "year",
                    array(
                        "type"    => Column::TYPE_INTEGER,
                        "size"    => 11,
                        "notNull" => true,
                    )
                )
            )
        )
    );

