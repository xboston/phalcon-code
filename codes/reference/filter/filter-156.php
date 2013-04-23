
    <?php

    class IPv4Filter
    {

        public function filter($value)
        {
            return filter_var($value, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
        }

    }

    $filter = new \Phalcon\Filter();

    // Используем объект
    $filter->add('ipv4', new IPv4Filter());

    // Фильтруем с помощью "ipv4"
    $filteredIp = $filter->sanitize("127.0.0.1", "ipv4");

