
    <?php

	class UsersController extends Phalcon\Mvc\Controller
	{

	    public function registerAction()
	    {

	        $user = new Users();

	        $login = $this->request->getPost('login');
	        $password = $this->request->getPost('password');

	        $user->login = $login;

	        //Сохраняем пароль хешированным
	        $user->password = $this->security->hash($password);

	        $user->save();
	    }

	}

