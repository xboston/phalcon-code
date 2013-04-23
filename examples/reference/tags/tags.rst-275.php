
    <?php

    // Указание параметров пустого элемента
    echo Phalcon\Tag::select(
        array(
            'productId',
            Products::find("type = 'vegetables'"),
            'using' => array('id', "name')
            'useEmpty' => true,
            'emptyText' => 'Выберите значение...',
            'emptyValue' => '@'
        ),

    );

