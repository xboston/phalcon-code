<?php

  $builder = $this->modelsManager->createBuilder()
                   ->columns('id, name')
                   ->from('Robots')
                   ->orderBy('name');

  $paginator = new Phalcon\Paginator\Adapter\QueryBuilder(array(
      "builder" => $builder,
      "limit"=> 20,
      "page" => 1
  ));



