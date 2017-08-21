<?php
/*
Plugin Name: My School
Plugin URI: https://
Description: My School brings the entire achool accesible at finger tips
Author: Karen daniel
Author URI: https://
version: 1.0
*/
if (!defined('ABSPATH')) {

    exit();

} // Exit if accessed directly

require_once(plugin_dir_path(__FILE__).'pluginSetup.php');
require_once(plugin_dir_path(__FILE__).'libs/controller.php');
require_once(plugin_dir_path(__FILE__).'user.php');
require_once(plugin_dir_path(__FILE__).'login.php');
require_once(plugin_dir_path(__FILE__).'registration.php');
// require_once(plugin_dir_path(__FILE__).'dashboard.php');

$setup = new Setup();
$registration = new Registration();
$user = new User();
$login = new Login();
// $dashboard = new Dashboard();

add_action('admin_menu', array($setup, 'adminToolbarMenu'));
add_action('wp_enqueue_scripts', array($setup, 'loadScriptCss'));
// add_action('after_setup_theme', array($user, 'signInUser'));
add_shortcode('registration_form', array($registration, 'getRegistrationForm'));
add_action('admin_post_registration', array($registration, 'setRegistration'));
// add_action('wp_ajax_registration', array($registration, 'setRegistration'));
add_shortcode('login_form', array($login, 'getLoginForm'));
add_action('admin_post_login', array($login, 'setLogin'));
// add_action('wp_ajax_registration', 'registration');


// function registration()
// {
// 	echo 'hello';
// 	wp_die();
// }