<?php

use Phalcon\Mvc\Controller;

class SecretsController extends Controller
{

    public function saveAction()
    {
        $secret = new Secrets();

        $text = $this->request->getPost('text');

        $secret->content = $this->crypt->encrypt($text);

        if ($secret->save()) {
            $this->flash->success('Secret was successfully created!');
        }

    }

}

