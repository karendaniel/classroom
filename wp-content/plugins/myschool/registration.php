<?php

class Registration extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getRegistrationForm()
	{
		$this->view->renderRegistrationForm();
	}

	public function setRegistration()
	{
		// display name & email has to be unique
	   $userId = wp_create_user($_POST['displayname'], $_POST['password'], $_POST['email']);

	   if (is_wp_error($userId)) {
        echo $userId->get_error_message();
		$this->view->renderLoginForm();
		return;
       }

	   $this->registerNewUser($userId, $_POST);
	}

	public function registerNewUser($userId, $post)
	{
		$query = sprintf("SELECT COUNT(*) FROM mys_registration WHERE user_id = %s", $userId);
		$test = $this->db->get_var($query);

		//nric has to be unique
		$user_count = $this->db->get_var("SELECT COUNT(*) FROM mys_registration WHERE user_id = %s", $userId);

		if($user_count > 0) {

			echo "user $userId already exist";
		}

		$result = $this->db->insert( 
		   'mys_registration', 
		    array( 
		    	'user_id' => $userId,
		        'nric' => $_POST['nric'],
		        'full_name' => $_POST['fullname'],
		        'display_name' => $_POST['displayname'],
		        'school_name' => $_POST['schoolname'],
		        'contact_no' => $_POST['contactno'],
		        'occupation' => $_POST['occupation'],
		    ), 
		    array( 
		        '%d',
		        '%s',
		        '%s',
		        '%s',
		        '%s',
		        '%s',
		        '%s'
		    ) 
		 );

		if ($result) {

			require_once(plugin_dir_path(__FILE__).'user.php');
			$user = new User();
			$user->signInUser($_POST['email'], $_POST['password']);

		}
	}
}