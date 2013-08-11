<?php

$login = $this->request->getPost('login');
$password = $this->request->getPost('password');

$user = Users::findFirstByLogin($login);
if ($user) {
    if ($this->security->checkHash($password, $user->password)) {
        //The password is valid
    }
}



