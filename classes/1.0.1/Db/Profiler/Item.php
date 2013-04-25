<?php
namespace Phalcon\Db\Profiler{
    class Item
    {
        public function setSQLStatement($sqlStatement){}
        public function getSQLStatement(){}
        public function setInitialTime($initialTime){}
        public function setFinalTime($finalTime){}
        public function getInitialTime(){}
        public function getFinalTime(){}
        public function getTotalElapsedSeconds(){}
    }
}