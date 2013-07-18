<?php

$customers = Customers::find()->filter(
    function ($customer) {

        //Return only customers with a valid e-mail
        if ( filter_var($customer->email , FILTER_VALIDATE_EMAIL) )) {
            return $customer;
        }

}
);

