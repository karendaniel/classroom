<?php

class Setup
{
	public function __construct(){}

	public function adminToolbarMenu()
	{
		add_menu_page(
			
			'My School',
			'My School',
			'manage_options',
			'myschool',
			array(
				 $this,
				 'createAdminToolbarMenu'),
				 null,
				 5);
	}

	public function createAdminToolbarMenu()
	{
		echo do_shortcode('[registration_form]');
		echo do_shortcode('[login_form]');

	}

	public function loadScriptCss()
	{
		wp_enqueue_script(
			'myschool-jquery',
			'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
			 array(),
			 null,
			 true);

 		wp_enqueue_script(
 			'myschool-script',
 			 plugin_dir_url(__FILE__) . 'js/script.js',
 			 array('myschool-jquery'), 
 			 null,
 			 true);
	}
}