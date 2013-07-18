<?php

class Robots extends Phalcon\Mvc\Model
{
    /**
     * Dynamically selects a shard
     *
     * @param array $intermediate
     * @param array $bindParams
     * @param array $bindTypes
     */
    public function selectReadConnection($intermediate, $bindParams, $bindTypes)
    {
        //Check if there is a 'where' clause in the select
        if (isset($intermediate['where'])) {

            $conditions = $intermediate['where'];

            //Choose the possible shard according to the conditions
            if ($conditions['left']['name'] == 'id') {
                $id = $conditions['right']['value'];
                if ($id > 0 && $id < 10000) {
                    return $this->getDI()->get('dbShard1');
                }
                if ($id > 10000) {
                    return $this->getDI()->get('dbShard2');
                }
            }
        }

        //Use a default shard
        return $this->getDI()->get('dbShard0');
    }

}

