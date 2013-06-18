<?php

class AjaxFilter
{
    public function check()
    {
        return $_SERVER['X_REQUESTED_WITH'] == 'xmlhttprequest';
    }
}

