<?php

class Login extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getLoginForm()
	{
		$this->view->renderLoginForm();
	}

	public function setLogin()
	{
		if ((isset($_POST['email'])) && (isset($_POST['password']))) {

			require_once(plugin_dir_path(__FILE__).'user.php');
			$user = new User();
			$user->signInUser($_POST['email'], $_POST['password']);
			return;
		}
		echo "username/password empty";
	}
}