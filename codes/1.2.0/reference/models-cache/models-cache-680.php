<?php

class CustomQueryBuilder extends Phalcon\Mvc\Model\Query\Builder
{

    public function getQuery()
    {
        $query = new CustomQuery($this->getPhql());
        $query->setDI($this->getDI());

        return $query;
    }

}

