<?php

$form = new Form(new Preferences());

$form->add(
    new Select("timezone" , array(
                                 'America/New_York'  => 'New York' ,
                                 'Europe/Amsterdam'  => 'Amsterdam' ,
                                 'America/Sao_Paulo' => 'Sao Paulo' ,
                                 'Asia/Tokio'        => 'Tokio' ,
                            ))
);

$form->add(
    new Select("receiveEmails" , array(
                                      'Yes' => 'Yes, please!' ,
                                      'No'  => 'No, thanks'
                                 ))
);

