<?php

echo Phalcon\Tag::linkTo('signup/register', 'Register Here!');
echo Phalcon\Tag::linkTo(array('signup/register', 'Register Here!'));
echo Phalcon\Tag::linkTo(array('signup/register', 'Register Here!', 'class' => 'btn-primary'));




