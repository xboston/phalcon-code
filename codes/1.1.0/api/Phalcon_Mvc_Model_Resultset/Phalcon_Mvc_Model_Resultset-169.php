<?php

 $filtered = $robots->filter(function($robot){
    if ($robot->id < 3) {
        return $robot;
    }
});




