<?php
namespace Phalcon\Db{
    class Profiler
    {
        public function __construct(){}
        public function startProfile($sqlStatement){}
        public function stopProfile(){}
        public function getNumberTotalStatements(){}
        public function getTotalElapsedSeconds(){}
        public function getProfiles(){}
        public function reset(){}
        public function getLastProfile(){}
    }
}