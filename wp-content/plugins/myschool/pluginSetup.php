<?php

class Setup
{
	public function __construct(){}

	public function adminToolbarMenu()
	{
		add_menu_page('My School', 'My School', 'manage_options', 'myschool', array($this, 'createAdminToolbarMenu'), null, 5);
	}

	public function createAdminToolbarMenu()
	{
		echo do_shortcode('[registration_form]');
	}
}