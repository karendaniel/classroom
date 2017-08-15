<?php
/*
Plugin Name: My School
Plugin URI: https://
Description: My School brings the entire achool accesible at finger tips
Author: Karen daniel
Author URI: https://
version: 1.0
*/
require_once(plugin_dir_path(__FILE__).'pluginSetup.php');
require_once(plugin_dir_path(__FILE__).'libs/view.php');
require_once(plugin_dir_path(__FILE__).'libs/controller.php');
require_once(plugin_dir_path(__FILE__).'registration.php');

$setup = new Setup();
$registration = new Registration();

add_action('admin_menu', array($setup, 'adminToolbarMenu'));
add_shortcode('registration_form', array($registration, 'getRegistrationForm'));