<?php

class IPv4Filter
{

    public function filter($value)
    {
        return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }

}

$filter = new \Phalcon\Filter();

//Using an object
$filter->add('ipv4', new IPv4Filter());

//Sanitize with the "ipv4" filter
$filteredIp = $filter->sanitize("127.0.0.1", "ipv4");

