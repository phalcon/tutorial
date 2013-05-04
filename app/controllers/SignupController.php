<?php

class SignupController extends Phalcon\Mvc\Controller
{

	public function indexAction()
	{

	}

	public function registerAction()
	{

		//Request variables from html form
		$name = $this->request->getPost('name', 'string');
		$email = $this->request->getPost('email', 'email');

		$user = new Users();
		$user->name = $name;
		$user->email = $email;

		//Store and check for errors
		if ($user->save() == true) {
			echo 'Thanks for register!';
		} else {
			echo 'Sorry, the next problems were generated: ';
			foreach ($user->getMessages() as $message){
				echo $message->getMessage(), '<br/>';
			}
		}
	}

}
