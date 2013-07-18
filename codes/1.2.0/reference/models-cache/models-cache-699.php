<?php

class CustomQuery extends Phalcon\Mvc\Model\Query
{

    /**
     * The execute method is overrided
     */
    public function execute($params = null , $types = null)
    {
        //Parse the intermediate representation for the SELECT
        $ir = $this->parse();

        //Check if the query has conditions
        if ( isset($ir['where']) ) {

            //The fields in the conditions can have any order
            //We need to recursively check the conditions tree
            //to find the info we're looking for
            $visitor = new CustomNodeVisitor();

            //Recursively visits the nodes
            $visitor->visit($ir['where']);

            $initial = $visitor->getInitial();
            $final   = $visitor->getFinal();

            //Select the cache according to the range
            //...

            //Check if the cache has data
            //...
        }

        //Execute the query
        $result = $this->_executeSelect($ir , $params , $types);

        //cache the result
        //...

        return $result;
    }

}

