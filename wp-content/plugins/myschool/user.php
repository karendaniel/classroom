<?php

class User extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function signInUser($email, $password)
	{
		// $user = wp_authenticate('test@ymail.com', 'test');

	 //    if (is_wp_error($user)) {
	 //        // echo $user->get_error_message();
		// 	$this->view->renderLoginForm();
		// 	return;
	 //    }
	   	
	    // $this->view->renderDashboardForm();

		$creds = array();
		$creds['user_login'] = $email;
		$creds['user_password'] = $password;
		$creds['remember'] = true;
		$user = wp_signon( $creds, false );
		if ( is_wp_error($user) )
		{
			echo $user->get_error_message();
		}
		// add_filter('login_redirect', array($this, 'test'));
		$url = 'http://localhost/classroom/wp-content/plugins/myschool/templates/dashboard.php';
		wp_redirect($url);
		exit;
		// $user = wp_get_current_user();

		// echo json_encode($user);
		// wp_die();
	}
}