
    <?php

    // Формирование выпадающего списка с пустым элементом
    echo Phalcon\Tag::select(
        array(
            "productId",
            Products::find("type = 'vegetables'"),
            "using" => array("id", "name"),
            "useEmpty" => true
        )
    );

